<?php include "./mvc/views/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

section{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
}

section .noi-dung{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

section .noi-dung .form{
    width: 50%;
}
section .noi-dung .form h2{
    color: #607d8b;
    font-weight: 500;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #ff4584;
    display: inline-block;
    letter-spacing: 1px;
}
section .noi-dung .form .input-form{
     margin-bottom: 20px;
 }
section .noi-dung .form .input-form span{
     font-size: 16px;
     margin-bottom: 5px;
     display: inline-block;
     color: #607db8;
     letter-spacing: 1px;
      }
section .noi-dung .form .input-form input{
     width: 100%;
     padding: 10px 20px;
     outline: none;
     border: 1px solid #607d8b;
     font-size: 16px;
     letter-spacing: 1px;
     color: #607d8b;
     background: transparent;
     border-radius: 30px;
     }
 section .noi-dung .form .input-form input[type="submit"]{
     background: #ff4584;
     color: #fff;
     outline: none;
     border: none;
     font-weight: 500;
     cursor: pointer;
     box-shadow: 0 1px 1px rgba(0,0,0,0.12),
                0 2px 2px rgba(0,0,0,0.12),
                0 4px 4px rgba(0,0,0,0.12),
               0 8px 8px rgba(0,0,0,0.12),
               0 16px 16px rgba(0,0,0,0.12);
 }
section .noi-dung .form .input-form input[type="submit"]:hover{
     background: #f53677;
 }
 section .noi-dung .form .nho-dang-nhap{
     margin-bottom: 10px;
     color: #607d8b;
     font-size: 14px;
 }
 section .noi-dung .form .input-form p{
     color: #607d8b;
 }
section .noi-dung .form .input-form p a{
     color: #ff4584;
 }

section .noi-dung .form h3{
     color: #607d8b;
     text-align: center;
     margin: 80px 0 10px;
     font-weight: 500;
 }
section .noi-dung .form .icon-dang-nhap{
     display: flex;
     justify-content: center;
     align-items: center;
 }
section .noi-dung .form .icon-dang-nhap li{
     list-style: none;
     cursor: pointer;
     width: 50px;
     height: 50px;
     display: flex;
     justify-content: center;
     align-items: center;
 }
 section .noi-dung .form .icon-dang-nhap li:nth-child(1){
     color: #3b5999;
 }
 section .noi-dung .form .icon-dang-nhap li:nth-child(2){
     color: #dd4b39;
 }
 section .noi-dung .form .icon-dang-nhap li:nth-child(3){
     color: #55acee;
 }
 section .noi-dung .form .icon-dang-nhap li i{
     font-size: 24px;
 }
 .error-message {
    color: red;
    font-size: 20px;
    margin-top: 10px;
    font-weight: bold;
}
@media (max-width: 768px){
    section .img-bg{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    section .noi-dung{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    section .noi-dung .form{
        width: 100%;
        padding: 40px;
        background: rgba(255 255 255 / 0.9);
        margin: 50px;
    }
    section .noi-dung .form h3{
        color: #607d8b;
        text-align: center;
        margin: 30px 0 10px;
        font-weight: 500;
    }
}

</style>
<body>
<section>
     <div class="noi-dung">
         <div class="form">
             <h2>Login your fear of code account</h2>
             <form action="" method = "post">
                 <div class="input-form">
                     <span>Username</span>
                     <input type="text" name="uname">
                 </div>
                 <div class="input-form">
                     <span>Password</span>
                     <input type="password" name="pass">
                 </div>
                 <?php
    echo '<div class="error-message">' ."Invalid username or password. Please try again.". '</div>';
    ?>
                 <div class="input-form">
                     <input type="submit" value="Đăng Nhập">
                 </div>
                 <div class="input-form">
                     <p>Don't have an account yet? <a href="/doan/taikhoan/dangki">Sign Up.</a></p>
                 </div>
             </form>
         </div>
     </div>
 </section>
</body>
</html>
<?php include "./mvc/views/footer.php";?>