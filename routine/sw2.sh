#!/usr/bin/expect -f
set prompt "((%|#|\\$|:) |>|])$"
 if [info exists env(EXPECT_PROMPT)] {
set prompt $env(EXPECT_PROMPT)
  }
set force_conservative 0
match_max 10000000
set timeout 5
set user  root
set host  '114.113.88.10'
set password "cnix@1234"
set accum {}
set log [open "./log.txt" "w"]
 
 
	spawn ssh -q -o StrictHostKeyChecking=no 'root'@'114.113.88.10'  
	expect -timeout 30 -nocase "*assword:"
	expect 'assword:'
	send "$password\r"
	 
	
	send "set  ping -c 2 210.51.7.29 \r"

	    expect {
	        -regexp {..*} {
	            set accum "${accum}$expect_out(0,string)"
	            exp_continue
	        }
	    }

	    puts $log $accum
	send "\r"
	send "exit\r"
	expect eof

