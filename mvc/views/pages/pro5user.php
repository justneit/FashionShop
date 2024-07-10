<?php include "./mvc/views/header.php";?>
<style type="text/css">
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 20px;
        }

        .purchase-history {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            
        }

        .purchase-history img {
            max-width: 20%;
            border-radius: 8px;
            margin-bottom: 10px;
            margin-right: 50px;
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .purchase-date {
            font-size: 14px;
            color: #666;
        }

    </style>
</head>
<body>
<div class="container">
<div class="main-body">

<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
<div class="mt-3">
<h4><?php echo $data['tk'][1] ?></h4>
<a href="/doan/taikhoan/dangxuat"><button class="btn btn-primary" style = "background-color: #FF084E;">Log out</button></a>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $data['tk'][2] ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a7c736a5a706f71776f72347b76"><?php echo $data['tk'][0] ?></a>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $data['tk'][4] ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Address</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $data['tk'][3] ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-12">
<a class="btn btn-info " href="/doan/taikhoan/chinhsuataikhoan"  style = "background-color: #FF084E;">Edit</a>
</div>
</div>
</div>
</div>
<div class="row gutters-sm">
<div class="col-sm-12 mb-3">
<div class="card h-100">
<div class="card-body">
<h6 class="d-flex align-items-center mb-3">PURCHASE HISTORY</h6>
<div class="container">
        <div class="purchase-history">
            <img src="/doan/public/images/twill-california-blazer-dusty-beige.jpg" alt="Product 1">
            <div>
            <div class="product-title">Twill California Blazer</div>
            <div class="product-price">$20.00</div>
            <div class="purchase-date">Purchased on: January 1, 2023</div>
            </div>
        </div>

        <div class="purchase-history">
            <img src="/doan/public/images/twill-california-blazer-dusty-beige.jpg" alt="Product 2">
            <div>
            <div class="product-title">Twill California Blazer</div>
            <div class="product-price">$20.00</div>
            <div class="purchase-date">Purchased on: January 1, 2023</div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</script>
