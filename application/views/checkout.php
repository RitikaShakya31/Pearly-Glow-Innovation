<?php
include ("includes/header-link.php");
include ("includes/header.php");
?>
<div style="width:100%;background:#19a1e3;">
    <div>
        <h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Checkout</h3>
    </div>
</div>
<!-- -------section start------ -->
<div class="container">
    <div class="row">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="checkout-pt-belling">
                    <h3>Billing Details</h3>
                    <hr>
                    <div class="billing-form-ma">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name:</label>
                                    <input class="form-control" name="name" value="<?= $login[0]['name']?>"  type="text">
                                </div>
                                <!-- <div class="form-group col-lg-6">
                                    <label>Last Name:</label>
                                    <input class="form-control" name="last_name" id="bln" type="text">
                                </div> -->
                                <div class="form-group col-lg-6">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" value="<?= $login[0]['email_id']?>" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Phone:</label>
                                    <input class="form-control" type="number" name="contact_no" value="<?= $login[0]['contact_no']?>" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="address" value="<?= $login[0]['address']?>" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Address Area</label>
                                    <input class="form-control" type="text" name="area" value="<?= $login[0]['area']?>" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Postcode/Zip:</label>
                                    <input class="form-control" type="number" name="postal_code" value="<?= $login[0]['postal_code']?>" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Promo code:</label>
                                    <input class="form-control" id="bpczi" type="text" name="promocode" >
                                </div>
                                <div class="col-lg-12 ">
                                    <input checked="" name="booking_status" value="0" id="direct-bank" type="radio" required>
                                    <label for="direct-bank">Direct Bank Transfer </label>
                                </div>
                                <div class="col-12 ">
                                    <input name="booking_status" value="1" id="check-pay" type="radio" required>
                                    <label for="check-pay"> Check Payments </label>
                                </div>
                                <div class="col-12 ">
                                    <input name="booking_status" value="2" id="cash-on-delivery" type="radio" required>
                                    <label for="cash-on-delivery"> Cash on Delivery </label>
                                </div>
                                <div class="col-12 ">
                                    <input name="booking_status" value="3" id="paypal" type="radio" required>
                                    <label for="paypal">Paypal</label>
                                </div>
                                <hr>
                                <div class="col-lg-3" style="margin-bottom:60px;margin-top:20px;">
                                    <button class="plac-or-btn" type="submit">Place Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
                <div class="row mt-5">
                    <div class="col-lg-8 col-md-8 col-12">
                        <h3>Your Order</h3>
                        <hr>
                        <?php
                        $cartContents = $this->cart->contents();
                        if (!empty($cartContents)) {
                            foreach ($cartContents as $items) { ?>
                                <div class="container product-cart product-item" id="cartlist"  data-id="<?= $items['rowid'] ?>">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img width="70" src="<?= setImage($items['image'], 'upload/product/') ?>"
                                                alt="Product Image">
                                        </div>
                                        <div class="col-md-9">
                                            <p>Product Name : <?= $items['name'] ?></p>
                                            <p>Price : ₹<?= $items['price']; ?> / piece</p>
                                            <p>Quantity : <?= $items['qty']; ?></p>
                                            <!-- <p>Article Number : <?= $items['image']; ?></p> -->
                                            <button class="removeCarthm remove-button" data-id="<?= $items['rowid'] ?>"><i
                                                    class="fa fa-times" aria-hidden="true"></i> Remove</button>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } else {
                            echo 'No product available';
                        }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Product Details</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>Total Product Price</td>
                                        <!-- <td>+ <?= $subtotal ?></td> -->
                                        <td>+ <?= $this->cart->total();?> </td>
                                    </tr>
                                    <tr>
                                        <td>Total Discount</td>
                                        <td>- ₹0</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <th>Free Shipping</th>
                                    </tr>
                                    <tr>
                                        <th>Order Total</th>
                                        <th>₹ <?= $this->cart->total();?> </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>