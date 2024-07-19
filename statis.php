<?php

class Singa
{
	public static $KAKI = 4;

	public static function lari()
	{
		echo 'Singa berlari';
	}

    public static function KAKI1()
    {
        //contoh menggunakan class
        echo Singa::$KAKI;
    }

    public static function KAKI2()
    {
        //contoh menggunakan self
        echo self::$KAKI;
    }

    public static function KAKI3()
    {
        //contoh menggunakan static
        echo static::$KAKI;
    }

}

$Singa = new Singa();
echo $Singa->KAKI1(); 
echo PHP_EOL;
echo $Singa->KAKI2(); 
echo PHP_EOL;
echo $Singa->KAKI3(); 
echo PHP_EOL;
echo Singa::lari(); 
echo PHP_EOL;