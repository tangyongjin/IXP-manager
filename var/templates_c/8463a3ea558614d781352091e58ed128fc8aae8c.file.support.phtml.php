<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-03 00:13:20
         compiled from "/opt/ixpmanager/application/views/static/support.phtml" */ ?>
<?php /*%%SmartyHeaderCode:203086688058b7167f1cc848-04594222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8463a3ea558614d781352091e58ed128fc8aae8c' => 
    array (
      0 => '/opt/ixpmanager/application/views/static/support.phtml',
      1 => 1488468792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203086688058b7167f1cc848-04594222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_58b7167f1e9107_04600917',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7167f1e9107_04600917')) {function content_58b7167f1e9107_04600917($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tmplinclude')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.tmplinclude.php';
if (!is_callable('smarty_function_genUrl')) include '/opt/ixpmanager/application/../vendor/opensolutions/oss-framework/src/OSS/Smarty/functions/function.genUrl.php';
?><?php echo smarty_function_tmplinclude(array('file'=>"header.phtml"),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getPrivs()==3) {?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo smarty_function_genUrl(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span>
        </li>
        <li>
            Documentation <span class="divider">/</span>
        </li>
        <li class="active">
            Technical Support and Contact Information
        </li>
    </ul>
<?php } else { ?>
    <div class="page-content">
        <div class="page-header">
            <h1>Technical Support</h1>
        </div>
<?php }?>





<br /><br />

<div class="well">
<h3>Dockers </h3>

    <table border="1">
    <tr>

        <td align="right"><strong>Dockername</strong></td>
        <td>配置</td>
        <td align="left">备注</td>
    </tr>
    <tr>
        <td align="right"><strong>ixp.mrtg</strong></td>
        <td>CONFFILE=/ixpdata/mrtgcfg/mrtg.cfg</td>
        <td align="left">
           
           mrtg.cfg根据数据库配置生成<br/>
           ixp.webframework运行时会自动生成配置文件.<br/>
           也可以由ixpmanager菜单Action手工生成.
            
            
        </td>
    </tr>
    <tr>
        <td align="right"><strong>ixp.sflow</strong></td>
        <td>/usr/local/etc/ixpmanager.conf</td>
        <td align="left">
           每5分钟更新数据库mactable一次.<br/>
           &nbsp;&nbsp; */5 * * * * root  /usr/local/bin/update-l2database.pl
           <br/>
           supervisord.conf.sflow文件使用supervisord机制,运行:<br />
           <pre style="padding:1px;margin:0px;">

[program:sflow-receiver]
 command =/usr/local/bin/sflowtool  -p 6343 -l -f 127.0.0.1/5500 -f 127.0.0.1/5501

[program:sflow-to-rrd]
 priority=1004
 command =/usr/local/bin/sflow-to-rrd-handler
 startsecs=100
 autorestart=false
 startretries=10


[program:sflow-detect-ixp-bgp-sessions]
 priority=1005
 command =/usr/local/bin/sflow-detect-ixp-bgp-sessions
 startsecs=100
 autorestart=false
 startretries=10
            </pre>

        </td>
    </tr>
    <tr>
        <td align="right"><strong>ixp.webframework</strong></td>
        <td>
        /usr/local/etc/ixpmanager.conf <br/>
        /etc/ixpmanager.conf
        </td>
        <td align="left">中文字体文件:<br/>
        /usr/local/share/fonts/truetype/simhei/chinese.simhei.ttf
        </td>
    </tr>
    </table>
</div>


<div class="well">
<h3> docker-compose.yml </h3>
<pre>
version: '2'
services:

  mysql:
    image: ixp.mysql
    container_name: ixpmysql
    ports:
     - "3306:3306"
    volumes:
      - "/ixpdata/mysql/:/var/lib/mysql"
    environment:
      MYSQL_ROOT_PASSWORD: cnix@1234

  web:
    image: ixp.webframework
    container_name: web
    volumes:
       - "/ixpdata/:/ixpdata"
       - "/ixpdata/webapp/opt/:/opt"

    depends_on:
       -  mysql
    ports:
     - "80:80"
    tty: true

  sflow:
    image: ixp.sflow
    container_name: sflow
    volumes:
      - "/ixpdata/:/ixpdata"
    depends_on:
       -  mysql
    ports:
      - "6343:6343/udp"

  mrtg:
    image: ixp.mrtg
    container_name: mrtg
    volumes:
      - "/ixpdata/:/ixpdata"
    depends_on:
       -  mysql
       -  web
    tty: true
</pre>
</div>


<div class="well">
<h3>Timeing </h3>
<pre>

mac地址表:
   每30分钟从交换机读取一次.

mrtg:
   每5分钟一次.

sflow-to-rrd: 
   每一分钟update一次.
</pre>
</div>



<div class="well">
<h3>internal error while talking to rrdcached </h3>
<pre>
 权限问题:
 /etc/hosts.allow

 sshd:ALL
 rrdcached:localhost
 
</pre>
</div>


<div class="well">
<h3>测试sflow 6343端口</h3>
<pre>
      echo -n "foo" | nc -4u -w1   114.113.88.2  6343

</pre>
</div>


<div class="well">
<h3>Tips</h3>
<pre>

  Centos rrdtool 1.5.6 ,编译时候加上perl库的安装
  ./configure  --with-perl-options= "PREFIX=/usr/local/share/perl5 INSTALL_BASE= LIB=/usr/lib64/perl5"
   ---------------

  unknow optione "--daemon" rrdtool 版本(rrdtool , rrdcached,  perl-rrd,etc)
  Centos 6.5 缺省是 rrdtool-1.3.8

</pre>
</div>


<div class="well">
<h3>网卡调整</h3>
<pre>
sysctl -w net.core.rmem_max=8388608
</pre>
</div>

<div class="well">
<h3>Docker配置文件</h3>
<pre>
/etc/systemd/system/docker.service.d/ixp.docker.conf
</pre>
</div>

 
<div class="well">
<h3>Docker管理者</h3>
<pre>
 docker run -d -p 9000:9000 --privileged -v /var/run/docker.sock:/var/run/docker.sock portainer/portainer
</pre>
</div>


<div class="well">
<h3>Schema管理</h3>
<pre>


数据库配置文件:
/opt/ixpmanager/doctrine/schema

重新生成步骤:
https://github.com/inex/IXP-Manager/wiki/Installation-09-Upgrading-IXP-Manager

./doctrine2-cli.php orm:validate-schema
./doctrine2-cli.php orm:schema-tool:update --dump-sql
./doctrine2-cli.php orm:schema-tool:update --force


/etc/init.d/memcached restart    # (or as appropriate for your system)
./doctrine2-cli.php orm:generate-entities ../application/
./doctrine2-cli.php orm:generate-proxies
./doctrine2-cli.php orm:generate-repositories ../application/



</pre>
</div>


<div class="well">
<h3>RawSql</h3>
<pre>
    $conn = $this->getD2EM()->getConnection();
    $sql = " select  * from table ";
    $stmt = $conn->prepare($sql);
     
    $stmt->execute();
    return  $stmt->fetchAll();
</pre>
</div>

<div class="well">
<h3>Docker Debug</h3>
<pre>
    docker events&
</pre>
</div>
      

<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value->getPrivs()!=3) {?>
    </div>
<?php }?>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>


<?php }} ?>
