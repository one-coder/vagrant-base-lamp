<?php
	echo xdebug_time_index(), "\n";
	for ($i = 0; $i < 250000; $i++)
	{
	    $pw = md5('1234');
	}
	echo '<br>';
	echo xdebug_time_index(), "\n";