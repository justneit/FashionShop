<?php
class chitiet extends Controller{
    function chitietsp() { 
      $currentURL = $_SERVER['REQUEST_URI'];
      $parts = parse_url($currentURL);
      parse_str($parts['query'], $query);
      $idsp = $query['idsp'];
      $_SESSION['idsp'] = $idsp;
      $ctsp =  $this->model("chitietsp"); 
      $spdt =  $this->model("chitietsp");
      $cmt =  $this->model("chitietsp");
      $this->view("trangchu", [
      "Page"=>"chitietsp", 
      "ctsp" => $ctsp->chiTietSP($idsp), 
      "spdt" => $spdt->SPdactrung($idsp),
      "cmt" => $cmt->binhluan($idsp)
    ]);  
  }
  function themcmt() {
    $themcmt = $this->model("chitietsp");
    $result = $themcmt->themcmt();
  }
} 
?>