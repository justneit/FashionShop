<?php
class ghang extends DB {
    public function soluong() {
        if(isset($_SESSION['IDuser'])) {
        $qr = "select * FROM giohang where IDuser =" .$_SESSION['IDuser'];
        $result = mysqli_query($this->con, $qr);
        $soluong = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $soluong[] = $row["soluong"];
        }
        return $soluong;
    }
    }
    public function IDspham() {
        if(isset($_SESSION['iduser'])) {
        $qr = "select * FROM giohang where IDuser =" .$_SESSION['iduser'];
        $result = mysqli_query($this->con, $qr);
        $soluong = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $soluong[] = $row["soluong"];
        }
        return $soluong;
    }
}
public function ttgh() {
    if(isset($_SESSION['IDuser'])) {
        $qr = "SELECT giohang.*, sanpham.ID, sanpham.hinhanhSP, sanpham.tenSP, sanpham.gia, giohang.sizes
               FROM giohang
               INNER JOIN sanpham ON giohang.IDSP = sanpham.ID
               WHERE giohang.IDuser = " . $_SESSION['IDuser'];

        $result = mysqli_query($this->con, $qr);

        $ttgh = array(); 

        while ($row = mysqli_fetch_assoc($result)) {
            $ttgh[] = array(
                'id' => $row["ID"], 
                'hinhanhSP' => $row["hinhanhSP"],
                'tenSP' => $row["tenSP"],
                'gia' => $row["gia"],
                'size' => $row["sizes"]
            );
        }   
        return $ttgh;
    }
}

public function themgiohang() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_SESSION['IDuser'])) {
            $sizes = null;
            $iduser = $_SESSION['IDuser'];
            $IDSP = $_SESSION['idsp'];
            $sizes = $_POST['shop-sizes'];
            $soluong = $_POST['soluong'];
            $check_query = "SELECT * FROM giohang WHERE TRIM(IDuser) = '$iduser' AND TRIM(IDSP) = '$IDSP' AND TRIM(sizes) = '$sizes'";
            echo $check_query;
            $result = mysqli_query($this->con, $check_query);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $soluong_moi = $row['soluong'] + $soluong;
                $update_query = "UPDATE giohang SET soluong = '$soluong_moi' WHERE IDuser = '$iduser' && IDSP = '$IDSP' && TRIM(sizes) = '$sizes'";
                if (mysqli_query($this->con, $update_query)) {
                    echo "Sản phẩm đã có trong giỏ hàng. Số lượng đã được cập nhật.";
                    header("Location: /doan/giohang/giohangcuaban");
                } else {
                    echo "Lỗi: " . mysqli_error($this->con);
                }
            } else {
                $insert_query = "INSERT INTO giohang (IDuser, IDSP, sizes, soluong) VALUES ('$iduser','$IDSP',' $sizes','$soluong')";
                if (mysqli_query($this->con, $insert_query)) {
                    echo "Thêm thành công.";
                    header("Location: /doan/giohang/giohangcuaban");
                } else {
                    echo "Lỗi: " . mysqli_error($this->con);
                }
            }
            mysqli_close($this->con);
        }
    }
}

public function xoagiohang() {
        $iduser = $_SESSION['IDuser'];
        $qr = "DELETE FROM giohang WHERE IDuser = $iduser";
        if (mysqli_query($this->con, $qr)) {
            echo "Xóa thành công.";
            header("Location: /doan/giohang/giohangcuaban");
        } else {
            echo "Lỗi: " . mysqli_error($this->con);
        }

        mysqli_close($this->con);
}


public function xoahang() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_SESSION['IDuser'])) {
            $IDSP = $_POST['IDSP'];
            $sizes = $_POST['sizes'];
            $qr = "DELETE FROM giohang WHERE IDSP = '$IDSP' AND sizes = '$sizes'";
            
            if (mysqli_query($this->con, $qr)) {
                echo "Xóa thành công.";
                header("Location: /doan/giohang/giohangcuaban");
            } else {
                echo "Lỗi: " . mysqli_error($this->con);
            }
            
            mysqli_close($this->con);
        }
    }
}


    
}   
?> 