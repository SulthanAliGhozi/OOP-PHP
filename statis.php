<?php

class Singa
{
	public static $KAKI = 4;

	public static function lari()
	{
		echo 'Singa berlari';
	}
}

echo Singa::$KAKI; 
echo PHP_EOL;
echo Singa::lari(); 
echo PHP_EOL;