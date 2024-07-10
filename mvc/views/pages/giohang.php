<?php include "./mvc/views/header.php"; ?>

<!-- ****** Top Discount Area End ****** -->

<!-- ****** Cart Area Start ****** -->
<div class="cart_area section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $numToShow = count($data['ttgh']);
                            $tonghd = 0;
                            $discount = 0;
                            for ($i = 0; $i < $numToShow; $i++) {
                            ?>
                                <tr>
                                    <td class="cart_product_img d-flex align-items-center">
                                        <a href="#"><img src="<?php echo $data['ttgh'][$i]['hinhanhSP'] ?>" alt="Product"></a>
                                        <h6><?php echo $data['ttgh'][$i]['tenSP'] ?></h6>
                                    </td>
                                    <td><?php echo $data['ttgh'][$i]['size'] ?></td>
                                    <td class="price"><span><?php echo $data['ttgh'][$i]['gia'] ?> $</span></td>
                                    <td class="qty">
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty<?php echo $i; ?>'); var qty = effect.value; if (!isNaN(qty) && qty > 1) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty<?php echo $i; ?>" step="1" min="1" max="99" name="quantity" value="<?php echo $data['soluong'][$i] ?>">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty<?php echo $i; ?>'); var qty = effect.value; if (!isNaN(qty)) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </td>
                                    <td class="total_price"><span><?php echo $data['ttgh'][$i]['gia'] * $data['soluong'][$i] ?> $</span></td>
                                    <?php $tonghd += $data['ttgh'][$i]['gia'] * $data['soluong'][$i] ?>
                                    <form action="/doan/giohang/xoahang" method="post">
                                        <input type="hidden" name="IDSP" value="<?php echo $data['ttgh'][$i]['id']; ?>">
                                        <input type="hidden" name="sizes" value="<?php echo $data['ttgh'][$i]['size'] ?>">
                                        <td><input type="submit" class="btn btn-primary btn-sm" style="background-color: #FF084E;" value="X"></td>
                                    </form>
                                </tr>
                            <?php }  $tong = $tonghd; ?>
                        </tbody>
                    </table>
                </div>

                <div class="cart-footer d-flex mt-30">
                    <div class="back-to-shop w-50">
                        <a href="/doan/bst/tatcasanpham">Continue shopping</a>
                    </div>
                    <div class="update-checkout w-50 text-right">
                        <a href="/doan/giohang/xoagiohang">Clear cart</a>
                        <a href="#">Update cart</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="coupon-code-area mt-70">
                    <div class="cart-page-heading">
                        <h5>Coupon code</h5>
                        <p>Enter your coupon code</p>
                    </div>
                    <form  method="post">
                        <input type="text"  name="code" placeholder="#569ab15">
                        <button type="submit">Apply</button>
                    </form>
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
                    <?php
                    if ($couponApplied) {
                        echo '<p style = "color:red ">Coupon applied successfully!</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-total-area mt-70">
                    <div class="cart-page-heading">
                        <h5>Cart total</h5>
                        <p>Final info</p>
                    </div>

                    <ul class="cart-total-chart">
                        <li><span>Subtotal</span> <span><?php echo $tong; ?> $</span></li>
                        <li><span>Shipping</span> <span>Free</span></li>
                        <li><span>Cupon</span> <span><?php echo $discount; ?></span></li>
                        <li><span><strong>Total</strong></span> <span><strong id="totalAmount"><?php echo $tonghd; ?> $</strong></span></li>
                    </ul>
                    <?php $_SESSION['tongdh'] = $tonghd  ?>
                    <a href="/doan/giohang/thongtinthanhtoan" class="btn karl-checkout-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./mvc/views/footer.php"; ?>
