<?php
class timkiem extends Controller{
function timkiemSP() { 
  $currentURL = $_SERVER['REQUEST_URI'];
  $parts = parse_url($currentURL);
  parse_str($parts['query'], $queryParameters);
  $kqtk = $queryParameters['keyword'];
  $timkiem =  $this->model("bosutap"); 
  $this->view("trangchu", [
  "Page"=>"timkiemsp", 
  "timkiem" => $timkiem->timkiemsp($kqtk),
]);  
}

} 
?>