<?php

	$dir = '/home/wwwroot/html/inbcn88';
	$res[] = shell_exec("cd $dir && git pull");
	file_put_contents('1.txt',json_encode($res));