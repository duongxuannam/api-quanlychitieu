<?php

class Thu{
    public $key;
    public $GHICHU;
    public $TIEN;
    public $NGAY;
    public $IDTAIKHOAN;
    public $TENLOAITHU;
    function Thu($id, $ghichu, $tien, $ngay, $idtaikhoan, $tenloaithu){
        $this->key = $id;
        $this->GHICHU = $ghichu;
        $this->TIEN = $tien;
        $this->NGAY = $ngay;
        $this->IDTAIKHOAN = $idtaikhoan;
        $this->TENLOAITHU = $tenloaithu;
    }
}
?>