<?php
	file_put_contents('./update.txt', json_encode($_POST))
	$dir = '/home/wwwroot/html/inbcn88';
	shell_exec("cd $dir && git pull");