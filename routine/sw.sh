#!/usr/bin/expect -f


#log_user 0                   ;# turn off the usual output
set timeout 9

set password "cnix@1234"
set switches "114.113.88.99"

# Main loop
foreach switch $switches {
	puts "Processing switch: $switch";
	# Open the telnet session:
	
        spawn ssh -q -o StrictHostKeyChecking=no   root@$switch

	# Perform authentication
	expect "assword:"
	send "$password\r"
	expect "#"
	spawn  ping  -c 2 210.51.7.29 
	send "exit\r"
	expect eof
}
puts "Done.result is"
puts $expect_out(buffer)
