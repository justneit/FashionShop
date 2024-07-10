<?php
class home extends Controller{
    function trangchu(){
        $dm = $this->model("trangchu");
         $this->view("trangchu", [
            "Page"=>"trangchu",
            "sp" => $dm->sanphamtheodm(),
        ]);
    }
}
?>