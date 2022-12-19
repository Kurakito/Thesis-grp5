<?php 
require('header.php');
?>
<html>
<head>
<title><?php echo $meta_title?></title>
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
</head>


<body>
        <!-- order-main-area start -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">APPOINTMENT ID</th>
                                            <th class="product-name">APPOINTMENT DATE</th>
                                            <th class="product-name">APPOINTMENT TIME</th>
                                            <!--th class="product-name">Reference No.</th-->
                                            <!--th class="product-quantity">Payment Type</th-->
                                            <!--th class="product-subtotal">Payment Status</th-->
                                            <th class="product-remove">APPOINTMENT STATUS</th>
                                            <th class="product-remove" style="width:30%">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
											$uid=$_SESSION['USER_ID'];
											$res=mysqli_query($con,"select ecom_orders.*,order_status.name as order_status_str,payment_status.name as payment_status_str from ecom_orders, order_status,payment_status where ecom_orders.user_id='$uid' and order_status.id=ecom_orders.order_status and payment_status.id=ecom_orders.payment_status");
											while($row=mysqli_fetch_assoc($res)){
											?>
											<tr>
												<td class="product-name"><a href="order_detail.php?id=<?php echo $row['id']?>"><span class="id-button" style="text-align:center; align-items:center; height:30px; font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3><?php echo $row['id']?></h3></span></a>
                                                </td><td class="product-name"><?php echo $row['appoint_date']?></td>
                                                </td><td class="product-name"><?php echo $row['appoint_time']?></td>
                                                <!--td class="product-name"></td>
                                                <td class="product-name"></td-->
                                                <td class="product-name"><?php echo $row['order_status_str']?></td>
                                                <td style="text-align:center;"><?php
                                                echo "<span class='btn1' ><a style='color:black; text-decoration:none; font-size:12px;' href='manage_user.php?id=".$row['id']."'>Cancel</a></span>&nbsp;";
                                                ?></td>
                                            </tr>
											<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        </body>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<style>
    </styl
</html>

