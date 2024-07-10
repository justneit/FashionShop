<?php
class bst extends Controller{
  function tatcasanpham() { 
    $bst =  $this->model("bosutap"); 
    $this->view("trangchu", [
    "Page"=>"bst", 
    "bstsp" => $bst->SPall(),
  ]);  
}
    function sanpham() { 
      $currentURL = $_SERVER['REQUEST_URI'];
      $parts = parse_url($currentURL);
      parse_str($parts['query'], $query);
      $iddm = $query['iddm'];
      $bst =  $this->model("bosutap"); 
      $this->view("trangchu", [
      "Page"=>"bst", 
      "bstsp" => $bst->SP($iddm),
      "tendm" => $bst->hienTenDanhMuc($iddm)
    ]);  
  }
function timkiemSP() { 
  $bst =  $this->model("bosutap"); 
  $this->view("trangchu", [
  "Page"=>"bst", 
  "bstsp" => $bst->timkiemsp(),
]);  
}

} 
?>