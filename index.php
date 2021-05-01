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
include 'head.php'; ?>



<!-- START product catagori --> 
<div class="ag-cards-block">


<!-- 
<div id="header-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="menu-list">
                    <?php
                    $db = new Database();
                    $db->select('sub_categories','*',null,'cat_products > 0 AND show_in_header = "1"',null,null);
                    $result = $db->getResult();
                    if(count($result) > 0){
                        foreach($result as $res){ ?>
                            <li><a href="category.php?cat=<?php echo $res['sub_cat_id']; ?>"><?php echo $res['sub_cat_title']; ?></a></li>
                        <?php    }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div> -->


  <div class="ag-format-container-fluid">



  <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-4 ">
                    <?php
                    if (!empty($header[0]['site_logo'])) { ?>
                        <a href="<?php echo $hostname; ?>" class="logo-img"><img src="images/<?php echo $header[0]['site_logo']; ?>" alt="" class="img-fluid"></a>
                    <?php } else { ?>
                        <a href="<?php echo $hostname; ?>" class="logo"><?php echo $header[0]['site_name']; ?></a>
                    <?php } ?>
                </div>
                <!-- /LOGO -->
                <div class="col-md-4">
                    <form action="search.php" method="GET">
                        <div class="input-group search">
                            <input type="text" class="form-control" name="search" placeholder="Search for...">
                            <span class="input-group-btn">
                                <input class="btn btn-default" width="50px" type="submit" value="Search" />
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <ul class="header-info">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <?php
                                if (session_status() == PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION["user_role"])) { ?>
                                    Hello <?php echo $_SESSION["username"]; ?><i class="caret"></i>
                                <?php  } else { ?>
                                    <i class="fa fa-user"></i>
                                <?php  } ?>

                            </a>
                            <ul class="dropdown-menu">
                                <!-- Trigger the modal with a button -->
                                <?php
                                if (isset($_SESSION["user_role"])) { ?>
                                    <li><a href="user_profile.php" class="">
                                            <p>My Profile</p>
                                        </a></li>
                                    <li><a href="user_orders.php" class="">
                                            <p>My Orders</p>
                                        </a></li>
                                    <li><a href="javascript:void()" class="user_logout">Logout</a></li>
                                <?php  } else { ?>
                                    <li><a data-toggle="modal" data-target="#userLogin_form" href="#">login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                <?php  } ?>

                            </ul>
                        </li>
                        <li>
                            <a href="wishlist.php"><i class="fa fa-heart"></i>
                                <?php if (isset($_COOKIE['wishlist_count'])) {
                                    echo '<span>' . $_COOKIE["wishlist_count"] . '</span>';
                                } ?>
                            </a>
                        </li>
                        <li>
                            <a href="cart.php"><i class="fa fa-shopping-cart"></i>
                                <?php if (isset($_COOKIE['cart_count'])) {
                                    echo '<span>' . $_COOKIE["cart_count"] . '</span>';
                                } ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="userLogin_form" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-body">
                                <!-- Form -->
                                <form id="loginUser" method="POST">
                                    <div class="customer_login">
                                        <h2>login here</h2>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="email" class="form-control username" placeholder="Username" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control password" placeholder="password" autocomplete="off" required>
                                        </div>
                                        <input type="submit" name="login" class="btn" value="login" />
                                        <span>Don't Have an Account <a href="register.php">Register</a></span>
                                    </div>
                                </form>
                                <!-- /Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal -->
            </div>
        </div>
    </div>











    <div class="row">
    <ul class="ag-cards_list">
 <!-- 1 -->   
      <li class="ag-cards_item ag-cards_item__one">
        <div class="col-md-2 col-sm-4 ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
      
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">1_Product</span>
          </div>
        </div>
      </li>

<!-- 2 -->
<li class="ag-cards_item ag-cards_item__two">
  <div class="col-md-2 col-sm-4 ag-cards_info">
    <picture class="ag-cards_picture">              
        <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
    </picture>
   
    <div class="ag-cards_btn">
      <span class="ag-cards_text ag-cards_text__btn">2_Product</span>
    </div>
  </div>
</li>

<!-- 3 -->

      <li class="ag-cards_item ag-cards_item__three">
        <div class="col-md-2 col-sm-4 ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
        
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">3_Product</span>
          </div>
        </div>
      </li>

      <!-- 4 -->
        
            <li class="ag-cards_item ag-cards_item__four">
              <div class="col-md-2 col-sm-4 ag-cards_info">
                <picture class="ag-cards_picture">              
                    <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
                </picture>
                
                <div class="ag-cards_btn">
                  <span class="ag-cards_text ag-cards_text__btn">4_Product</span>
                </div>
              </div>
            </li>
<!-- 5 -->
      <li class="ag-cards_item ag-cards_item__five">
        <div class="col-md-2 col-sm-4 ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
         
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">5_Product</span>
          </div>
        </div>
      </li>
<!-- 6 -->
            <li class="ag-cards_item ag-cards_item__six">
              <div class="col-md-2 col-sm-4 ag-cards_info">
                <picture class="ag-cards_picture">
                    <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive class="ag-cards_img">
                </picture>
               
                <div class="ag-cards_btn">
                  <span class="ag-cards_text ag-cards_text__btn">6_Product</span>
                </div>
              </div>
            </li>

          </ul>
          </div>
          </div>
        </div>
      </div>

<!-- END product catagori -->


		<!-- START fimg section -->


<div id="fpage">
<div class="container-fluid">
  <div class="row">
  
  <div class="col-md-6 fpage_left position-relative"> 

    <img src="images/donet4.png"  class="img-fluid" alt="">
                                
    <div class="position-absolute">
   
    <h1 class="display-1">hello</h1>
        <p>Lorem ipsum dolor sit amet.</p>
        <a class="donet"> donet now</a>     
    </div>
</div>

    <div class="col-md-6 fpage_right position-relative">
    <img src="images/fpage1.png"  class="img-fluid" alt="">
    </div>
    </div>
  </div>
</div>


<!-- END fimg section -->

<div class="fvideo">
		<video autoplay muted loop>
			<source src="images/smakebrush.mp4" type="video/mp4" id="bg">
		</video>  
		<!-- <img src="images/mountain.png" id="mountain"> -->
		<img src="images/layer_61.png" id="tree">
		<h1 id="text">ᗪᖇEᗩᗰ ᗩᒪIᐯE</h1>
</div>
  
<img src="images/headwave4.png" width="100%" class="wave">



<!-- <video id="slider" muted autoplay loop>
            <source src="images/smakebrush.mp4" type="video/mp4">  
</video> -->


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
<!--END frad-in -->

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


</div>

<!-- End banner -->

<!-- start  ALL product -->
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

<script src="js/custom.js"></script>

<!-- 
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
</div> -->

<?php include 'footer.php'; ?>

