
<html>
<style>
        <style>


  .container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh; /* Đặt chiều cao là 100% của viewport */
}

.card {
    width: 800px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #FF084E; /* Màu nền thẻ */
    transform: translate(-50%, -50%); /* Dịch chuyển đến giữa */
    position: absolute; /* Đặt vị trí tuyệt đối để có thể sử dụng transform */
    top: 50%;
    left: 50%;
}


.alert {
    margin-bottom: 20px;
    border: 1px solid #d4edda; /* Viền cảnh báo */
    border-radius: 5px;
    padding: 15px;
    background-color: white; /* Màu nền cảnh báo */
}

.alert-heading {
    color: #FF084E; /* Màu tiêu đề cảnh báo */
    margin-bottom: 10px;
}

.alert p {
    margin-bottom: 15px;
}

.alert a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.alert a:hover {
    text-decoration: underline;
}

hr {
    border: 0;
    height: 1px;
    background: #ccc;
    margin: 15px 0;
}

.card-footer {
    text-align: center;
}

.card-footer p {
    margin: 0;
    color: #6c757d;
}

.card-footer a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.card-footer a:hover {
    text-decoration: underline;
}


</style>
    </style>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '\PHPMailer/src/Exception.php';
require __DIR__ . '\PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
$email = $_POST['email'];

$mail = new PHPMailer(true);

try {
    //Server settings                  
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'chanhtiennguyen2512004@gmail.com';                    
    $mail->Password   = 'bvyd pxbn lkxo dfaa';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    
    $mail->setFrom('chanhtiennguyen2512004@gmail.com', 'Fear Of Code');
    $mail->addAddress($email, 'tien');     
    $mail->isHTML(true);                                 
    $mail->Subject = 'New pass';   
$randomString = str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789');
$randomPassword = substr($randomString, 0, 6);
$mail->Body = 'Here is your new password: ' . $randomPassword;
    $mail->send();
    $conn = mysqli_connect("localhost", "root", "", "shop", "3308");
$sql = "UPDATE nguoidung SET pass = '$randomPassword' WHERE email = '$email'";
mysqli_query($conn, $sql);
echo '<div class="container">
<div class="card">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Password changed successfully!</h4>
        <p>You have successfully changed your password. <br> 
        <a href="/doan/taikhoan/dangnhap">Continue using Fear Of Code</a></p>
        <hr>
        
    </div>
</div>
</div>';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

    

