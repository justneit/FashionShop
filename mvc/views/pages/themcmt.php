<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "PHP Code Executed";
         $conn = mysqli_connect("localhost", "root", "", "shop", "3308");
             $cmt = $_POST['cmt'];
             $ids = $_SESSION['idsp'];
             $idu =  $_SESSION['IDuser'];
             $rate = $_POST['rates'];
             $sqltbl = "INSERT INTO cmt (IDuser, IDSP, rate, content) VALUES ('$idu','$ids','$rate','$cmt')";
             if (mysqli_query($conn, $sqltbl)) {
                header("Location: ".$_SERVER['PHP_SELF']);
                exit();
                 
             } else {
                 echo "Lỗi: " . mysqli_error($conn);
             }
             mysqli_close($conn);   
         }  
    ?>