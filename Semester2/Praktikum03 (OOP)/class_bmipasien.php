
<?php


class BmiPasien {
    public $nama;
    public $umur;
    public $jk;
    public $berat;
    public $tinggi;

    function __construct($nama, $umur, $jk, $berat, $tinggi){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jk = $jk;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function hasilBMI(){
        $tinggi_meter = $this->tinggi/100;
        $this->bmi = number_format($this->berat / pow($tinggi_meter,2), 2, '.', ',');
        return $this->bmi;
    }

    public function statusBMI(){
        if($this->bmi < 18.5){
            return "Kekurangan berat badan";
        }elseif($this->bmi < 24.9){
            return "Normal (ideal)";
        }elseif($this->bmi < 29.9){
            return "Kelebihan berat badan";
        }else{
            return "Kegemukan (Obesitas)";
        }
    }

}





?>
