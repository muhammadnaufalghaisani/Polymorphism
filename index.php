<?php 

Interface Negara {
    public function beriSalam();
}
abstract class Kota {
    protected $ibukota;
    
    public function __construct($ibukota){
        $this->ibukota = $ibukota;
    }
}


class Indonesia extends Kota implements Negara {
    public function beriSalam() {
        return "Selamat pagi!" . $this->ibukota;
    }
}
class Amerika extends Kota implements Negara {
    public function beriSalam() {
        return "Good morning!" . $this->ibukota;
    }
}
class Jepang extends Kota implements Negara {
    public function beriSalam() {
        return "Ohayou!" . $this->ibukota;
    }
}

$indonesia = new Indonesia(" Jakarta");
$amerika = new Amerika(" Washington");
$jepang = new Jepang(" Tokyo");

echo $indonesia->beriSalam() . "<br>";
echo $amerika->beriSalam() . "<br>";
echo $jepang->beriSalam() . "<br>";

?>