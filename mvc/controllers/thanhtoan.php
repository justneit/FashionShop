<?php
class thanhtoan extends Controller{
    function thanhtoandh() {
        $thanhtoan = $this->model("thanhtoandh");
        $this->view("trangchu", [
            "Page"=>"thanku",
            $result = $thanhtoan->thanhtoan() 
        ]);
      }
}
?>