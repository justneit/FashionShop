<?php
class thanhtoandh extends DB {
    public function thanhtoan() { 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $iduser = $_SESSION['IDuser'];
        $tongdh =  $_SESSION['tongdh'];
        $hoten = $_POST['fname'];
        $quocgia = $_POST['country'];
        $tp = $_POST['city'];
        $diachi = $_POST['address'];
        $SDT = $_POST['phone'];
        $notes = $_POST['sdt'];
        $ngay = date('Y-m-d');
        $qr = "INSERT INTO donhang(IDuser, TongDH, Hoten, quocgia, thanhpho, diachi, SDT, ghichu, ngay) VALUES ('$iduser','$tongdh','$hoten','$quocgia','$tp','$diachi','$SDT',' $notes', '$ngay')";
        if (mysqli_query($this->con, $qr)) {
            $qr1 = "DELETE FROM giohang WHERE IDuser = $iduser";
            mysqli_query($this->con, $qr1);
        } else {
            
        } 
        mysqli_close($this->con);
    }
 }
}   
?> 