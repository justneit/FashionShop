<?php
class bosutap extends DB {
    public function SP($iddm) {
        $qr = "select * FROM sanpham where iddanhmuc =" .$iddm;
        $result = mysqli_query($this->con, $qr);
        $bstsp = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $bstsp[] = $row["hinhanhSP"];
            $bstsp[] = $row["ID"];
            $bstsp[] = $row["tenSP"];
            $bstsp[] = $row["gia"];
        }
        return $bstsp;
    }
    public function SPall() {
        $bst= array(); 
            $qr = "SELECT * FROM sanpham";
            $result = mysqli_query($this->con, $qr);  
            while ($row = mysqli_fetch_assoc($result)) {
                $sanpham = array(
                    'hinhanhSP' => $row["hinhanhSP"],
                    'ID' => $row["ID"],
                    'tenSP' => $row["tenSP"],
                    'gia' => $row["gia"],
                    'mota' => $row["motaSP"]
                );
                $bst[] = $sanpham;
            } 
        return $bst;
    }
    public function timkiemsp($kqtk) {
        $timkiem = array(); 
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $keyword = $kqtk;
            $qr = "SELECT * FROM sanpham WHERE tenSP LIKE '%$keyword%' ";
            $result = mysqli_query($this->con, $qr);  
            while ($row = mysqli_fetch_assoc($result)) {
                $sanpham = array(
                    'hinhanhSP' => $row["hinhanhSP"],
                    'ID' => $row["ID"],
                    'tenSP' => $row["tenSP"],
                    'gia' => $row["gia"]
                );
    
                $timkiem[] = $sanpham;
            }
        }  
        return $timkiem;
    }
    

    public function hienTenDanhMuc($iddm) {
        $qr = "SELECT * FROM danhmucsp where iddanhmuc =" .$iddm;
        $result = mysqli_query($this->con, $qr);
        $tendanhMuc = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $tendanhMuc[] = $row["tendm"];
        }
        return $tendanhMuc;
    }
}   
?> 