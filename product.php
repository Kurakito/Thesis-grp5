<?php 
require('header.php');
$size='';
$option='';

if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'',$product_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
if(isset($_POST['submit'])){
	$size=$_POST['size'];
	}
    mysqli_query($con,"insert into product_attriibutes(product_id,size) values('$product_id','Small')");
?>


<title>Barangay Incident Record Tracking System</title>
<link rel="stylesheet" href="css/info.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>

<div class="hero">
        <div class="row">
            <div class="col">
                <div class="slider">
                    <!--div class="product">

                        <img src="img/bscs.jpg" alt="" onclick="clickme(this)">
                        <img src="img/bsit.jpg" alt="" onclick="clickme(this)">
                        <img src="img/bsis.jpg" alt="" onclick="clickme(this)">
                        <img src="img/bsemc.jpg" alt="" onclick="clickme(this)">

                    </div-->
                    <div class="preview">

                        <!--img src="php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']" alt="" id="imagebox"-->

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="content">
                    
                    <!--p class="brand">Brand: Varanga</p-->
                    <h2><?php echo $get_product['0']['name']?></h2>
                    <div class="info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $get_product['0']['short_desc']?></div>
                
                    <!--p><span>Quantity: </span-->
                    <input id="qty" type="number" min="1" max="3" class="qty-service" value="1" hidden>
                    </p>
                    
                    <div class="details">Description</div>
                    <div class="info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $get_product['0']['description']?></div>


                    <button type="button" class="add_to_cart">
                        <a href="javascript:void(0)" name="submit" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add'); window.location.reload();">Submit</a></i>
                    </button>
</form>
                </div>
                    
            </div>
        </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</body>
</html>
