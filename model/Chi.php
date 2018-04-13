<?php

class Chi{
    public $key;
    public $GHICHU;
    public $TIEN;
    public $NGAY;
    public $IDTAIKHOAN;
    public $TENLOAICHI;
    function Chi($id, $ghichu, $tien, $ngay, $idtaikhoan, $tenloaichi){
        $this->key = $id;
        $this->GHICHU = $ghichu;
        $this->TIEN = $tien;
        $this->NGAY = $ngay;
        $this->IDTAIKHOAN = $idtaikhoan;
        $this->TENLOAICHI = $tenloaichi;
    }
}
?>