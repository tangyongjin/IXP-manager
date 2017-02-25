#!/bin/bash



custs= $(mysql -u root -p cnix@1234 ixp2 -se "select  name,shortname ,peeringmacro  from view_cust_current_active where length(peeringmacro)>10 ")

echo $custs;


passwd='cnix@1234'
/usr/bin/expect  <<-EOF
set time 30
spawn ssh -p22 root@114.113.88.10
expect {
"*yes/no" { send "yes\r"; exp_continue }
"*password:" { send "$passwd\r" }
}
expect "*#"
send "mkdir -p  /tmp/expect \r"
expect "*#"
send "exit\r"
interact
expect eof
EOF
