<?php include "./mvc/views/header.php";?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
<style type="text/css">
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
    </style>
</head>
<body>
<div class="container">
<div class="main-body">
<div class="row">
<div class="col-lg-4">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
<div class="mt-3">
<h4><?php echo $data['tk'][1] ?></h4>
<button class="btn btn-primary" style = "background-color: #FF084E;"><i class="fa-thin fa-upload"></i>
Update</button>
</div>
</div>
<hr class="my-4">
<ul class="list-group list-group-flush">
</ul>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="card">
<div class="card-body">
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<form action="/doan/taikhoan/xulychinhsuatk" method = "POST">
<input type="text" class="form-control" value="<?php echo $data['tk'][2] ?>" name = 'fname'>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $data['tk'][0] ?>" name = 'mail'>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $data['tk'][4] ?>" name = 'phone'>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Address</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" class="form-control" value="<?php echo $data['tk'][3] ?>" name = 'dchi'>
</div>
</div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9 text-secondary">
<input type="submit" class="btn btn-primary px-4" value="Save Changes" style = "background-color: #FF084E;">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">	
</script>
<?php include "./mvc/views/footer.php";?>
