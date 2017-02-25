#!/usr/bin/expect -f
############################################
# Usage: ./get_config.exp IPADDR
#
# Expect/TCL script for fetching configurations from Juniper -devices
############################################
 
# Change to 1 to Log to STDOUT
log_user 0
 
# Change to 1 to enable verbose debugging
exp_internal 0
 
# Set timeout for the script
set timeout 20
 
# # Verify that IP-address or hostname, username and password are given as parameters
# if {[llength $argv] <= 2} {
#         send_user "Usage: ./getconfig.exp hostname username password\n"
#         exit 1
# }
 
# Read parameters into variables
set host  114.113.88.10
set username root
set password cnix@1234
 
# Spawn SSH session
spawn /usr/bin/ssh -l $username $host
 
# Set the maximum buffer size used for matching in bytes (in this case 32768)
match_max [expr 32 * 1024]
 
# Start the login sequence
while { 1 } {
        expect {
        # If host key is not yet in SSH-cache this will save it by sending "yes"
        -re "RSA key fingerprint" {send "yes\r"}
        # Wait for the password field and then send password given as a parameter
        -re ".*assword:" {
        	send "$password\r"
            exp_continue
         }
         
        # Wait for prompt and then break out of the while loop to continue the script
        -re "#" {
        	break
        }

        # If nothing matches then timeout
        timeout {puts "Timeout error. Is host down or unreachable? ssh_expect";exit}
        }
}
 
# Set time variable (used just for naming the output file in the next step
set time [exec date \+\%F]
 
# Set log file (where to save the output). -a  flag forces log output even though the logging to screen has been disabled before. -noappend flag always creates the file and never appends to the old file (if exists)
# log_file -a -noappend  ./span.log

log_file -a    ./span.log

 
# Send show configuration command to the host
send "ping -c 2 210.51.7.11  \r"
 
# Wait for prompt
expect "#"
 
# Exit and close the SSH session
send "exit\r"
 
# log_file with no parameter given will stop logging to the file
log_file