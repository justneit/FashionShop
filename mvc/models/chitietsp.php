<?php
class chitietsp extends DB {
    public function chiTietSP($idsp) {
        $qr = "select * FROM sanpham where ID =" .$idsp;
        $result = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_assoc($result)) {
            $ctsp = array(
                'tenSP' => $row["tenSP"],
                'gia' => $row["gia"],
                'mota' => $row["motaSP"],
                'hinhanhSP' => $row["hinhanhSP"],
                'hinhanhSP1' => $row["hinhanhSP1"],
                'hinhanhSP2' => $row["hinhanhSP2"],
                'hinhanhSP3' => $row["hinhanhSP3"]
            );
            $ct[] = $ctsp;
        }
        return $ctsp;
    }
    public function SPdactrung($idsp) {
        $qr = "SELECT * FROM sanpham where ID != $idsp and dactrung = 1 ";
        $result = mysqli_query($this->con, $qr);
        $SP = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $spdt = array(
                'tenSP' => $row["tenSP"],
                'gia' => $row["gia"],
                'hinhanhSP' => $row["hinhanhSP"],
            );
            $SP[] = $spdt;
        }
        return $SP;
    }
    public function binhluan($idsp) {
        $qr = "SELECT cmt.*, nguoidung.*
        FROM cmt
        INNER JOIN nguoidung ON cmt.IDuser = nguoidung.ID
        WHERE cmt.IDSP = $idsp;
        ";
        $result = mysqli_query($this->con, $qr);
        $cmt = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $binhluan = array(
                'rate' => $row["rate"],
                'content' => $row["content"],
                'uname' => $row["uname"]
            );
            $cmt[] = $binhluan;
        }
        return $cmt;
    }

    function themcmt() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $conn = mysqli_connect("localhost", "root", "", "shop", "3308");
            $cmt = $_POST['cmt'];
            $ids = $_SESSION['idsp'];
            $idu =  $_SESSION['IDuser'];
            $rate = $_POST['rates'];
            $sqltbl = "INSERT INTO cmt (IDuser, IDSP, rate, content) VALUES ('$idu','$ids','$rate','$cmt')";
            
            if (mysqli_query($conn, $sqltbl)) {
                // Lấy thông tin của comment mới
                $newCommentID = mysqli_insert_id($conn);
                $newCommentInfo = mysqli_query($conn, "SELECT cmt.*, nguoidung.*
                FROM cmt
                INNER JOIN nguoidung ON cmt.IDuser = nguoidung.ID
                WHERE cmt.ID = '$newCommentID'");
                $newCommentData = mysqli_fetch_assoc($newCommentInfo);
                $newComment = '<div class="comment">';
                $newComment .= '<p><span class="rating">' . $newCommentData['uname'] . ' Rating: '. $newCommentData['rate'] . ' ★</span></p>';
                $newComment .= '<p>' . $newCommentData['content'] . '</p>';
                $newComment .= '</div>'; 
                $response = array('status' => 'success', 'message' => 'Comment đã được thêm thành công.');
                $response['newComment'] = $newComment;
            } else {
                $response = array('status' => 'error', 'message' => 'Có lỗi xảy ra: ' . mysqli_error($conn));
            }
            mysqli_close($conn);   
            echo json_encode($response);
        }
    }
    
      
}   
?> 