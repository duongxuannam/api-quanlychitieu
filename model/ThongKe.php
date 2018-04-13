<?php

class ThongKe{
  
    public $TONGSOLUOTTHU;
    public $TONGSOLUOTCHI;
    public $TONGSOLUOT;
    public $TONGSOTIENTHU;
    public $TONGSOTIENCHI;
    public $THULONNHAT;
    public $CHILONNHAT;
    public $THUHOMNAY;
    public $CHIHOMNAY;
    public $SOLUOTTHUHOMNAY;
    public $SOLUOTCHIHOMNAY;
  
    function ThongKe($tongsoluotthu, $tongsoluotchi, $tongsoluot, $tongsotienthu, $tongsotienchi, $thulonnhat, $chilonnhat, $thuhomnay, $chihomnay, $soluotthuhomnay, $soluotchihomnay){
        $this->TONGSOLUOTTHU = $tongsoluotthu;
        $this->TONGSOLUOTCHI = $tongsoluotchi;
        $this->TONGSOLUOT = $tongsoluot;
        $this->TONGSOTIENTHU = $tongsotienthu;
        $this->TONGSOTIENCHI = $tongsotienchi;
        $this->THULONNHAT = $thulonnhat;
        $this->CHILONNHAT = $chilonnhat;
        $this->THUHOMNAY = $thuhomnay;
        $this->CHIHOMNAY = $chihomnay;
        $this->SOLUOTTHUHOMNAY = $soluotthuhomnay;
        $this->SOLUOTCHIHOMNAY = $soluotchihomnay;
    }
}

?>