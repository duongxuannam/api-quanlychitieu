<?php
class TaiKhoan{
    public $key;
    public $EMAIL;
    public $MATKHAU;
    public $TENHIENTHI;
    // function TaiKhoan($id, $email,$matkhau, $tenhienthi){
    function TaiKhoan($id, $email, $tenhienthi){
        $this->key = $id;
        $this->EMAIL = $email;
        // $this->MATKHAU = $matkhau;
        $this->TENHIENTHI = $tenhienthi;
    }
}
?>