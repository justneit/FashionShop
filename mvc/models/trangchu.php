<?php
class trangchu extends DB {
    public function sanphamtheodm() {
        $sp= array(); 
            $qr = "SELECT * FROM sanpham";
            $result = mysqli_query($this->con, $qr);  
            while ($row = mysqli_fetch_assoc($result)) {
                $sanpham = array(
                    'tendm' => $row["tendanhmuc"],
                    'hinhanhSP' => $row["hinhanhSP"],
                    'tenSP' => $row["tenSP"],
                    'gia' => $row["gia"],
                    'ID' => $row["ID"],
                    'mota' => $row["motaSP"]                  
                );
                $sp[] = $sanpham;
            }
        return $sp;
    }
}
?> 