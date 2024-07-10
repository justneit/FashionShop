<?php
class giohang extends Controller{
  function giohangcuaban() { 
    $giohang =  $this->model("ghang");
    $this->view("trangchu", [
    "Page"=>"giohang",
    "soluong" => $giohang->soluong(),
    "ttgh"  => $giohang->ttgh() 
  ]);  
}
function themgiohang() {
  $themgiohang = $this->model("ghang");
  $result = $themgiohang->themgiohang();
}
function xoagiohang() {
  $xoagiohang = $this->model("ghang");
  $result = $xoagiohang->xoagiohang();
}

function xoahang() {
  $xoahang = $this->model("ghang");
  $result = $xoahang->xoahang();
}
function thongtinthanhtoan() { 
  $ttthanhtoan =  $this->model("ghang");
  $formtt =  $this->model("nguoidung");
  $this->view("trangchu", [
  "Page"=>"ttthanhtoan",
  "soluong" => $ttthanhtoan->soluong(),
    "ttgh"  => $ttthanhtoan->ttgh(),
    "formtt"  => $formtt->taikhoan()
]);  
}
} 
?>