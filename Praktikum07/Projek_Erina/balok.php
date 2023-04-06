<?php

class Balok {

    public $panjang, $lebar, $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    public function getLuas() 
    {
        $h = 2 * (($this->panjang * $this->lebar) + 
        ($this->panjang * $this->tinggi) + 
        ($this->lebar * $this->tinggi));
        echo "Ini Luas Balok = $h";
    }         
    public function getVolume() 
    {
        $v = $this->panjang * $this->lebar * $this->tinggi;
        echo "Ini Volume Balok = $v";
    }
} 
$objekBalok = new Balok(150, 78, 30);
echo $objekBalok->getLuas();
echo "<br>";
echo $objekBalok->getVolume();
?>