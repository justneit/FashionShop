<?php
$conn = mysqli_connect("localhost", "root", "", "shop", "3308");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rate = $_POST['rates'];
    $comment = $_POST['cmt'];
    $idsp = $_POST['idsp'];
    $sqltbl = "INSERT INTO cmt (IDuser, idSP, noidung) VALUES ('$iduser','$idsp','$comment')";
    if (mysqli_query($conn, $sqltbl)) {
      echo "Comment submitted successfully!";
  }
} else {
    // Trả về lỗi nếu yêu cầu không phải là POST
    http_response_code(400);
    echo "Bad Request";
}
?>
