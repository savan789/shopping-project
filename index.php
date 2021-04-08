<?php include 'config.php';  //include config
// set dynamic title
$db = new Database();
$db->select('options','site_title',null,null,null,null);
$result = $db->getResult();

if(!empty($result)){ 
    $title = $result[0]['site_title']; 
}else{ 
    $title = "ᗪᖇEᗩᗰ ᗩᒪIᐯE.ᑕOᗰ";
}
// include header 
include 'header.php'; ?>

<!-- Start Banner -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">        
<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/brush4.jpg"> 
  <div class="text text1"> 
  <a href="#" class="btn"><span>button</span></a>
<p>1 hello i am savan<p>
</div>
</div>

<div class="mySlides fade">
  <img src="images/brush2.jpg">
  <div class="text text1"> 
    <div>
</div>
<a href="#" class="btn"><span>button</span></a>
<p>2 hello i am savan<p>
</div>
</div>



<div class="mySlides fade">
  <img src="images/brush3.jpg">
  <div class="text text1">
  <a href="#" class="btn"><span>button</span></a>    
<p>3 hello i am savan<p>
</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
  
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
<!-- End banner -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-section popular-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Popular Products</h2>
                <div class="popular-carousel owl-carousel owl-theme">
                    <?php
                        $db->select('products','*',null,'product_views > 0','product_views DESC',10);
                        $result = $db->getResult();
                        if(count($result) > 0){
                            foreach($result as $row){ ?>
                    <div class="product-grid latest item">
                        <div class="product-image popular">
                            <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                            </a>
                            <div class="product-button-group">
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>" ><i class="fa fa-eye"></i></a>
                                <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="title">
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'],0,25),'...'; ?></a>
                            </h3>
                            <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                        </div>
                    </div>
                    <?php    }
                    }else{
                } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Latest Products</h2>
                <div class="latest-carousel owl-carousel owl-theme">
                    <?php
            $db = new Database();
            $db->select('products','*',null,null,'product_id DESC',6);
            $result = $db->getResult();
            if(count($result) > 0){
                foreach($result as $row){ ?>
                    <div class="product-grid latest item">
                        <div class="product-image popular">
                            <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                            </a>
                            <div class="product-button-group">
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>" ><i class="fa fa-eye"></i></a>
                                <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="title">
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'],0,25),'...'; ?></a>
                            </h3>
                            <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                        </div>
                    </div>
        <?php    }
            }?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>