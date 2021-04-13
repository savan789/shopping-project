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
  <img src="images/bookpng1.png"> 
  <div class="text text1"> 
  <a href="#" class="btn"><span>button</span></a><br>
<p>1 Dream Alive<p>
</div>
</div>

<div class="mySlides fade">
  <img src="images/brushpng1.png">
  <div class="text text1"> 
<a href="#" class="btn"><span>button</span></a>
<p>2 Dream Alive<p>
</div>
</div>



<div class="mySlides fade">
  <img src="images/pagepng1.png">
  <div class="text text1">
  <a href="#" class="btn"><span>button</span></a>    
<p><b>3 Dream Alive</b><p>
</div>
</div>

<div class="mySlides fade">
  <img src="images/brushpng1.png">
  <div class="text text1"> 
<a href="#" class="btn"><span>button</span></a>
<p>4 Dream Alive<p>
</div>
</div>

</div>
<br>

<div class="dots">
  <span class="dot"></span> 
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


                    <!-- </div>
                </div> -->
            </div>
        </div>
    </div>
</div>



<!-- START product catagori -->
<div class="ag-cards-block">
  <div class="ag-format-container">
    <ul class="ag-cards_list">

      <li class="ag-cards_item ag-cards_item__one">
        <div class="ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
          <p class="ag-cards_title">
            1
          </p>
          <p class="ag-cards_text ag-cards_text__prize">
            Interval
          </p>
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
          </div>
        </div>
      </li>4

<!-- 2 -->

<li class="ag-cards_item ag-cards_item__two">
  <div class="ag-cards_info">
    <picture class="ag-cards_picture">              
        <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
    </picture>
    <p class="ag-cards_title">
      2
    </p>
    <p class="ag-cards_text ag-cards_text__prize">
      Interval
    </p>
    <div class="ag-cards_btn">
      <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
    </div>
  </div>
</li>

<!-- 3 -->

      <li class="ag-cards_item ag-cards_item__three">
        <div class="ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
          <p class="ag-cards_title">
           3
          </p>
          <p class="ag-cards_text ag-cards_text__prize">
            Interval
          </p>
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
          </div>
        </div>
      </li>

      <!-- 4 -->
        
            <li class="ag-cards_item ag-cards_item__four">
              <div class="ag-cards_info">
                <picture class="ag-cards_picture">              
                    <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
                </picture>
                <p class="ag-cards_title">
                  4
                </p>
                <p class="ag-cards_text ag-cards_text__prize">
                  Interval
                </p>
                <div class="ag-cards_btn">
                  <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
                </div>
              </div>
            </li>
<!-- 5 -->
      <li class="ag-cards_item ag-cards_item__five">
        <div class="ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
          <p class="ag-cards_title">
            5
          </p>
          <p class="ag-cards_text ag-cards_text__prize">
            Interval
          </p>
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
          </div>
        </div>
      </li>
<!-- 6 -->
            <li class="ag-cards_item ag-cards_item__six">
              <div class="ag-cards_info">
                <picture class="ag-cards_picture">
                    <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive class="ag-cards_img">
                </picture>
                <p class="ag-cards_title">
                  6
                </p>
                <p class="ag-cards_text ag-cards_text__prize">
                  Interval
                </p>
                <div class="ag-cards_btn">
                  <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
                </div>
              </div>
            </li>

<!-- 7 -->
            <li class="ag-cards_item ag-cards_item__seven">
              <div class="ag-cards_info">
                <picture class="ag-cards_picture">
                    <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive class="ag-cards_img">
                </picture>
                <p class="ag-cards_title">
                  7
                </p>
                <p class="ag-cards_text ag-cards_text__prize">
                  Interval
                </p>
                <div class="ag-cards_btn">
                  <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
                </div>
              </div>
            </li>
 <!-- 8 -->
            <li class="ag-cards_item ag-cards_item__eight">
              <div class="ag-cards_info">
                <picture class="ag-cards_picture">
                  <img src="images/pagepng1.png" Dream width="150px" height="100px"Alive alt="Boss" class="ag-cards_img">
                </picture>
               
                <p class="ag-cards_title">
                 8
                </p>
                <p class="ag-cards_text ag-cards_text__prize">
                  Interval
                </p>
                <div class="ag-cards_btn">
                  <span class="ag-cards_text ag-cards_text__btn">Deposit</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

<!-- END product catagori -->


<!-- STARTfeadin -->

<div class="card_list">


<div class="card_item item card_item_one">
  <div class="card_info">
    <picture class="card_picture">
        <img src="images/chairpng.png" alt="" width="550px" height="350px">
    </picture>
    <button class="card_btn">
    1button
    </button>
  </div>
</div>

<div class="card_item item card_item_two">
<div class="card_info">
<picture class="card_picture">
    <img src="images/chairpng.png" width="550px" height="350px">
</picture>
<button class="card_btn">
2  button
</button>
</div>
</div>


<div class="card_item item card_item_three">
<div class="card_info">
<picture class="card_picture">
  <img src="images/chairpng.png" width="550px" height="350px">
</picture>
<button class="card_btn">
3  button
</button>
</div>
</div>

<div class="card_item item card_item_four">
<div class="card_info">
<picture class="card_picture">
    <img src="images/chairpng.png" alt="" width="550px" height="350px">
</picture>
<button class="card_btn">
4 button
</button>
</div>
</div>

</div>






<!--END fradin -->

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