<?php
$couponApplied = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$conn = mysqli_connect("localhost", "root", "", "shop", "3308");
$sql = "select * from cupon";
$kq = mysqli_query($conn, $sql);
if ($kq) {
    $cuponArray = array();
    while ($row = mysqli_fetch_array($kq, MYSQLI_ASSOC)) {
        $couponCode = isset($_POST['code']) ? $_POST['code'] : '';
        if ($couponCode === $row['code']) {
            $discount = $tonghd * $row['giatri'];
            $tonghd -= $discount;
            $couponApplied = true;
        }
    }
    }  
}
?>