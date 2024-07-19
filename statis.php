<?php

class Singa
{
	public static $KAKI = 4;

	public static function lari()
	{
		echo 'Singa berlari';
	}

    public static function kaki1()
    {
        //contoh menggunakan class
        echo Singa::$kaki1;
    }

    public static function kaki2()
    {
        //contoh menggunakan self
        echo self::$kaki2;
    }

    public static function kaki3()
    {
        //contoh menggunakan static
        echo static::$kaki3;
    }

}

echo Singa::$KAKI; 
echo PHP_EOL;
echo Singa::lari(); 
echo PHP_EOL;