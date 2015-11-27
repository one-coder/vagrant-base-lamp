<?php
	echo xdebug_time_index();
	for ($i = 0; $i < 250000; $i++)
	{
	    // do something
	}

	echo '\n';
	echo xdebug_time_index();