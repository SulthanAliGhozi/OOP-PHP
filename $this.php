<?php

class Printer
{
	private $content;

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function cetak()
	{
		echo $this->content;
	}
}

$printer1 = new Printer();
$printer1->setContent('Aku printer satu') . "<br>";
echo $printer1->cetak() . "<br>"; 
echo PHP_EOL;

$printer2 = new Printer();
$printer2->setContent('Aku printer dua') . "<br>"; 
echo $printer2->cetak() . "<br>";
echo PHP_EOL;

$printer3 =  new Printer();
$printer3->setContent('Aku printer tiga') . "<br>";
echo $printer3->cetak() . "<br><br>";
echo PHP_EOL;

echo $printer1->cetak() . "<br>"; 
echo PHP_EOL;
echo $printer2->cetak() . "<br>";
echo PHP_EOL;
echo $printer3->cetak() . "<br>";
echo PHP_EOL;