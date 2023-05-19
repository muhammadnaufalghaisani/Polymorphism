<?php

abstract class Hewan{
    abstract public function Mengaung();
    abstract public function Bergerak();
    abstract function Makan();
}

class Harimau extends Hewan {

    public function Mengaung() {
        return "Harimau mengaung sangat kencang</br>";
    }

    public function Bergerak() {
        return "Harimau bergerak mencari makanan</br>";
    }

    public function Makan() {
        return "Harimau makan manusia</br>";
    }
}   

$harimau = new Harimau;

echo "<br>Perilaku Harimau : </br></br>";
echo $harimau->Mengaung();
echo $harimau->Bergerak();
echo $harimau->Makan();

?>