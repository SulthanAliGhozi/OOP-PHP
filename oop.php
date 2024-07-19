<?php

class Mobil
{
	private $roda = "Memiliki  4  ban";
    public $mesin = "Memiliki 2 mesin";
    public function jalan($arah = 'KE BELAKANG')
    {
    echo "mobil bergerak . $arah <br>";
    }
    public function mogok()
    {
        echo "mobil berhenti<br>";
    }
   
    public function jumlahRoda()
    {
        echo $this->roda;
    }
}

$avanza = new Mobil(); 
echo $avanza-> jalan();
echo PHP_EOL;
echo $avanza-> jalan("KE DEPAN");
echo PHP_EOL;
echo $avanza-> jumlahRoda() . "<br>"; 
echo PHP_EOL;

$xenia = new Mobil();
echo $xenia -> mogok();
echo PHP_EOL;
echo $xenia ->mesin;
echo PHP_EOL;   