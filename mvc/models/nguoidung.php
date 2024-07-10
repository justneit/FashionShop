<?php
class nguoidung extends DB {
    public function dangki() { 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mail = $_POST['email'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $qr = "INSERT INTO nguoidung(email, uname, pass) VALUES ('$mail','$uname','$pass')";
        if (mysqli_query($this->con, $qr)) {
            echo '<script>alert("Đăng kí thành công.");</script>';
        } else {
            echo '<script>alert("Lỗi: ' . mysqli_error($this->con) . '");</script>';
        } 
        mysqli_close($this->con);
    }
 }
 public function dangnhap() { 
    $errorMessage = "";  // Định nghĩa biến bên ngoài khối if

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $u = $_POST['uname'];
        $p = $_POST['pass'];
        $qr = "SELECT * FROM nguoidung";
        $result = mysqli_query($this->con, $qr);
        $loginSuccessful = false; 

        while ($row = mysqli_fetch_assoc($result)) {
            if ($u == $row["uname"] && $p == $row["pass"]) {
                $_SESSION['IDuser'] = $row["ID"];
                $loginSuccessful = true; 
                header("Location: /doan/trangchu");
            } 
        }
        if ($loginSuccessful==false) {
            header("Location: /doan/taikhoan/dangnhaplai");
        }     
}
 }
public function taikhoan() { 
      $iduser = $_SESSION['IDuser'];
    $qr = "SELECT * FROM nguoidung where ID = $iduser" ;
    $result = mysqli_query($this->con, $qr);
    $tk = array();
    while ($row = mysqli_fetch_assoc($result)) {
       $tk[] = $row["email"];
       $tk[] = $row["uname"];
       $tk[] = $row["hoten"];
       $tk[] = $row["diachi"];
       $tk[] = $row["sdt"];
    } 
    return $tk;
}
public function chinhsuatk() { 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $iduser = $_SESSION['IDuser'];
    $fname = $_POST['fname'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $dchi = $_POST['dchi'];
  $qr = "UPDATE nguoidung SET email = '$mail', hoten = '$fname', diachi = '$dchi', sdt = '$phone' where ID = $iduser" ;
  if (mysqli_query($this->con, $qr)) {
    header("/doan/taikhoan/taikhoancuaban");
} else {
    echo '<script>alert("Lỗi: ' . mysqli_error($this->con) . '");</script>';
} 
mysqli_close($this->con);
    }
}



public function donhang() { 
    $iduser = $_SESSION['IDuser'];
  $qr = "SELECT * FROM donhang where IDuser = $iduser" ;
  $result = mysqli_query($this->con, $qr);
  $dh = array();
  while ($row = mysqli_fetch_assoc($result)) {
     $dh[] = $row["Hoten"];
     $dh[] = $row["diachi"];
     $dh[] = $row["TongDH"];
     $dh[] = $row["ngay"];
  } 
  return $dh;
}
  
}   
?> 