<?php
class sp extends DB {
    public function xemnhanh() {
        $sp= array(); 
            $qr = "SELECT * FROM sanpham";
            $result = mysqli_query($this->con, $qr);  
            while ($row = mysqli_fetch_assoc($result)) {
                $sanpham = array(
                    'tendm' => $row["tendanhmuc"],
                    'hinhanhSP' => $row["hinhanhSP"],
                    'tenSP' => $row["tenSP"],
                    'gia' => $row["gia"],
                    'mota' => $row["motaSP"],
                    'ID' => $row["ID"]
                );
                $sp[] = $sanpham;
            }
        return $sp;
    }
}
?> 