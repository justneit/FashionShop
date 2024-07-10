<?php
class taikhoan extends Controller{
    function dangnhap(){
        $taikhoan = $this->model("nguoidung");
         $this->view("trangchu", [
            "Page"=>"login",
            "dangki" => $taikhoan->dangnhap() 
        ]);
    }
    function dangnhaplai(){
        $taikhoan = $this->model("nguoidung");
         $this->view("trangchu", [
            "Page"=>"loginf",
            "dangki" => $taikhoan->dangnhap() 
        ]);
    }
    function dangki(){
        $taikhoan = $this->model("nguoidung");
         $this->view("trangchu", [
            "Page"=>"signup",
            "dangki" => $taikhoan->dangki() 
        ]);
    }
    function quenmk(){
         $this->view("trangchu", [
            "Page"=>"quenmk",
        ]);
    }
    function taikhoancuaban(){
        $tk = $this->model("nguoidung");
         $this->view("trangchu", [
            "Page"=>"pro5user",
            "tk" => $tk->taikhoan(),
            "dh" => $tk->donhang()
        ]);
    }
    function chinhsuataikhoan(){
        $tk = $this->model("nguoidung");
         $this->view("trangchu", [
            "Page"=>"pro5edit",
            "tk" => $tk->taikhoan(),
        ]);
    }
    function xulychinhsuatk() {
        $edittk = $this->model("nguoidung");
        $result = $edittk->chinhsuatk();
        echo '<script>';
        echo 'alert("Your profile has been updated");';
        echo 'window.location.href = "/doan/taikhoan/taikhoancuaban";';
        echo '</script>';
    }    
        function dangxuat(){
             $this->view("trangchu", [
                "Page"=>"login",
                 session_unset(),
                 header("Location: /doan/trangchu")
            ]);
        }
}
?>