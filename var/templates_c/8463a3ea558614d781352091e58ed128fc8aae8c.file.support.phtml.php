<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-03-12 17:49:34
         compiled from "/opt/ixpmanager/application/views/static/support.phtml" */ ?>
<?php /*%%SmartyHeaderCode:203086688058b7167f1cc848-04594222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8463a3ea558614d781352091e58ed128fc8aae8c' => 
    array (
      0 => '/opt/ixpmanager/application/views/static/support.phtml',
      1 => 1489311839,
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
if (!is_callable('smarty_function_fetch')) include '/opt/ixpmanager/application/../vendor/smarty/smarty/libs/plugins/function.fetch.php';
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
<h3>重要目录</h3>

<pre>
  /ixpdata/webapp/opt/ixpmanager/library/inex-smarty/functions

-rw-r--r-- 1 root root 4395 Mar  2 02:22 function.genDoctrinePagerLinks.php
-rw-r--r-- 1 root root 2250 Mar  2 02:22 function.genMrtgGraphBox.php
-rw-r--r-- 1 root root  972 Mar  2 02:22 function.genMrtgImgUrl.php
-rw-r--r-- 1 root root 1062 Mar  2 02:22 function.genMrtgImgUrlTag.php
-rw-r--r-- 1 root root  997 Mar  2 02:22 function.genMrtgP2pImgUrl.php
-rw-r--r-- 1 root root 1658 Mar  2 02:22 function.getMrtgStatistics.php
-rw-r--r-- 1 root root 1180 Mar  2 02:22 function.mrtgScale.php
-rw-r--r-- 1 root root 1341 Mar  2 02:22 modifier.asnumber.php
-rw-r--r-- 1 root root  953 Mar  2 02:22 modifier.pmasn.php
-rw-r--r-- 1 root root 1307 Mar  2 02:22 modifier.underline.php
</pre>
</div>





<div class="well">
<h3>Docker-Web</h3>
 <pre>
 <?php echo smarty_function_fetch(array('file'=>'/ixpdata/webapp/opt/ixpmanager/docker/web/Dockerfile.webframework'),$_smarty_tpl);?>

</pre>

<h3>Docker-sflow</h3>
 <pre>
 <?php echo smarty_function_fetch(array('file'=>'/ixpdata/webapp/opt/ixpmanager/docker/sflow/Dockerfile.sflow'),$_smarty_tpl);?>

</pre>

<h3>Docker-query</h3>
 <pre>
 <?php echo smarty_function_fetch(array('file'=>'/ixpdata/webapp/opt/ixpmanager/docker/query/dockerfile.query'),$_smarty_tpl);?>

</pre>


<h3>Docker-mrtg</h3>
 <pre>
 <?php echo smarty_function_fetch(array('file'=>'/ixpdata/webapp/opt/ixpmanager/docker/mrtg/Dockerfile.mrtg'),$_smarty_tpl);?>

</pre>


<h3>Docker-bird</h3>
 <pre>
 <?php echo smarty_function_fetch(array('file'=>'/ixpdata/webapp/opt/ixpmanager/docker/bird/Dockerfile.bird'),$_smarty_tpl);?>

</pre>
</div>


<div class="well">
<h3> docker-compose.yml </h3>

<pre>

<?php echo smarty_function_fetch(array('file'=>'/ixpdata/webapp/opt/ixpmanager/docker/docker-compose.yml'),$_smarty_tpl);?>

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

自动生成配置文件:
http://114.113.88.2/ixp/ajax.php?action=dbtool&table=Tablename


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

<div class="well">
<h3>Centos7 Open port</h3>
<pre>
  firewall-cmd --zone=public --add-port=80/tcp --permanent
  firewall-cmd --reload

</pre>
</div>

 

<div class="well">
<h3>开机mount</h3>
<pre>
 /dev/mapper/ixp_vg-dev_sda7 on /ixpdata type ext4 (rw,noatime,nodiratime,seclabel,data=ordered)

</pre>
</div>


<div class="well">
<h3>新增控制器与URL,Form</h3>
<pre>

url:  hello-world-again 则控制器为HelloWorldAgainController.php

url:  helloworldagain 则控制器为HelloworldagainController.php


表单目录:

/ixpdata/webapp/opt/ixpmanager/library/IXP/Form

</pre>
</div>


<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value->getPrivs()!=3) {?>
    </div>
<?php }?>

<?php echo smarty_function_tmplinclude(array('file'=>"footer.phtml"),$_smarty_tpl);?>


<?php }} ?>
