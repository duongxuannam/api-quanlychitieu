<?php

class ChiaSe{
    public $key;
    public $IDCHIASE;
    public $TENHIENTHI;
    public $EMAIL;
  
    function ChiaSe($id, $idchiase, $tenhienthi, $email){
        $this->key = $id;
        $this->IDCHIASE = $idchiase;
        $this->TENHIENTHI = $tenhienthi;
        $this->EMAIL = $email;
    }
}
?>