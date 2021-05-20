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
 <?php
     if (session_status() == PHP_SESSION_NONE) {
         session_start();
     }
?>

<!-- START product catagori -->
<div class="sld">
<main>
<section class="slides"> 

<div class="circle1">
    <img src="images/circle.png" class="img-fluid">
  </div>

  <section class="slides-nav">
    <nav class="slides-nav__nav">
      <button class="slides-nav__prev js-prev">Prev</button>
      <button class="slides-nav__next js-next">Next</button>
    </nav>
  </section>

  <section class="slide is-active">
    <div class="slide__content">
      <figure class="slide__figure"><div class="slide__img img-fluid" style="background-image:url(images/brush4.jpg)"></div></figure>
      <header class="slide__header">
        <h2 class="slide__title">
          <span class="title-line"><span>First</span></span>
          <span class="title-line"><span>Or Page</span></span>
        </h2>
      </header>
    </div>
  </section>

  <section class="slide">
    <div class="slide__content">
      <figure class="slide__figure"><div class="slide__img img-fluid" style="background-image:url(images/brush3.jpg)"></div></figure>
      <header class="slide__header">
        <h2 class="slide__title">
          <span class="title-line"><span>Slide Two</span></span>
          <span class="title-line"><span>Dood Mood</span></span>
        </h2>
      </header>
    </div>
  </section>

  <section class="slide">
    <div class="slide__content">
      <figure class="slide__figure"><div class="slide__img img-fluid" style="background-image:url(images/brush2.jpg)"></div></figure>
      <header class="slide__header">
        <h2 class="slide__title">
          <span class="title-line"><span>This Right</span></span>
          <span class="title-line"><span>Here Makes Three</span></span>
        </h2>
      </header>
    </div>
  </section>

  <section class="slide">
    <div class="slide__content">
      <figure class="slide__figure"><div class="slide__img img-fluid" style="background-image:url(images/brush1.jpg)"></div></figure>
      <header class="slide__header">
        <h2 class="slide__title">
          <span class="title-line"><span>How Now</span></span>
          <span class="title-line"><span>Part Four More</span></span>
        </h2>
      </header>
    </div>
  </section>
</section>
</main>
</div>
<!-- <div class="circle2">
<img src="images/hround_dot1.png" class="img-fluid">
</div>  -->

<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>
</div>



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
                            <div class="td" id="s-cover" type="submit" value="Search">
                            <button type="submit">
                              <div id="s-circle"></div>
                              <span></span>
                            </button>
                          </div>
                                <!-- <input class="btn btn-default" width="50px" type="submit" value="Search" /> -->
                            </span>
                       
                       
                          </div>
                    </form>
                </div>





                <div class="col-md-4">
                    <ul class="header-info">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                               
                                <?php if (isset($_SESSION["user_role"])) { ?>
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


<!-- START HOME_PAGE -->
<div class="hpage">
<div class="homepage">
    <div class="text-content">
      <h2>Learn To Enjoy,<br>Every Moment Of Your Life</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum facere in nam, officiis aspernatur consectetur aliquid sequi possimus et. Sint.</p>
    </div>
</div>
</div>

<!-- END HOME_PAGE -->
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

<div class="catagory">
  <div class="container">
    <div class="row">

    <div class="all">
 <!-- <div class="catleft"> -->

        <div class="left4 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">ABC 2</div>
        </div>
         <div class="left3 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">ABC</div>
        </div>
        <div class="left2 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">Hosting</div>
        </div>
        <div class="left1 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">Web Design</div>
        </div>
 <!-- </div> -->
        <div class="center col-md-1">
          <div class="explainer"><span><img src="images/catagory.png" class="img-fluid"> CATAGORY</span></div>
          <div class="cattext">Frontend Development</div>
          </div>

  <!-- <div class="catright"> -->
        <div class="right1 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">Backend Development</div>
        </div>
        <div class="right2 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">SEO</div>
        </div>
        <div class="right3 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">XYZ</div>
        </div>
        <div class="right4 col-md-1 col-sm-3 col-xs-4">
          <div class="cattext">XYZ 2</div>
        </div>
        
  <!-- </div> -->
</div>
</div>
</div>
</div>




<!-- START CATAGORY -->
<!-- <div class="ag-cards-block">
<div class="ag-format-container-fluid">
    <div class="row">
    <ul class="ag-cards_list"> -->
 <!-- 1 -->   
      <!-- <li class="ag-cards_item ag-cards_item__one">
        <div class="col-md-2 col-sm-4 ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
      
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">1_Product</span>
          </div>
        </div>
      </li> -->

<!-- 2 -->
<!-- <li class="ag-cards_item ag-cards_item__two">
  <div class="col-md-2 col-sm-4 ag-cards_info">
    <picture class="ag-cards_picture">              
        <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
    </picture>
   
    <div class="ag-cards_btn">
      <span class="ag-cards_text ag-cards_text__btn">2_Product</span>
    </div>
  </div>
</li> -->

<!-- 3 -->

      <!-- <li class="ag-cards_item ag-cards_item__three">
        <div class="col-md-2 col-sm-4 ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
        
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">3_Product</span>
          </div>
        </div>
      </li> -->

      <!-- 4 -->
<!--         
            <li class="ag-cards_item ag-cards_item__four">
              <div class="col-md-2 col-sm-4 ag-cards_info">
                <picture class="ag-cards_picture">              
                    <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
                </picture>
                
                <div class="ag-cards_btn">
                  <span class="ag-cards_text ag-cards_text__btn">4_Product</span>
                </div>
              </div>
            </li> -->
<!-- 5 -->
      <!-- <li class="ag-cards_item ag-cards_item__five">
        <div class="col-md-2 col-sm-4 ag-cards_info">
          <picture class="ag-cards_picture">              
              <img src="images/brushpng1.png" Dream width="150px" height="100px"Alive alt="Oligarch" class="ag-cards_img">
          </picture>
         
          <div class="ag-cards_btn">
            <span class="ag-cards_text ag-cards_text__btn">5_Product</span>
          </div>
        </div>
      </li> -->
<!-- 6 -->
            <!-- <li class="ag-cards_item ag-cards_item__six">
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
      </div> -->


      <div class="pcard">
    <div class="card">
      <ul>
      <?php                         
            $db = new Database();
            $db->select('products','*',null,null,'product_id DESC',9);
            $result = $db->getResult();
            if(count($result) > 0){
                foreach($result as $row){ ?>
        <li>
          <div class="details">
            <h2><a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'],0,25),'...'; ?></a></h2>
            </h2>
          <p>
            <a href="single_product.php?pid=<?php echo $row['product_id']; ?>">
            <?php echo substr(html_entity_decode($row['product_desc']),0,100),'...'; ?>
            </a>
          </p>
            <h3>
              <?php echo $cur_format; ?> <?php echo $row['product_price']; ?>
            </h3>
            <img src="images/pagepng1.png">
            <!-- <a href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                  <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
            </a> -->
            <div class="purchase">
               <a href="<?php echo $row['product_id'];?>"><img src="images/buy.png" class="img-fluid"></a>

              <!-- <a href="#"><img src="images/buy.png" class="img-fluid"></a>  -->
              <a href="#"><img src="images/add-to-cart.png" class="img-fluid"></a>
            </div>
          </div>
          <?php    }
                    }else{
                } ?>
        </li>
      </ul>
    </div>
</div>


      <div class="fvideo">
		<video autoplay muted loop>
			<source src="images/spapermakeing_Slomo.mp4" type="video/mp4" id="bg">
		</video>  
		<!-- <img src="images/mountain.png" id="mountain"> -->
		<img src="images/layer_61.png" id="tree">
		<h1 id="text">IT's SᑭEᑕIᗩᒪᒪY ᖴOᖇ YOᑌ</h1>
</div>

<!-- END product catagori -->

		<!-- START fimg section -->


<div id="fpage">
<div class="container-fluid">
  <div class="row">

  <div class="col-md-6 fpage_left"> 
    <a href="#"><img src="images/donet5.png" class="img-fluid" alt=""></a>
</div>

    <div class="col-md-6 fpage_right">
    <img src="images/fpage1.png" class="img-fluid" alt="">
    </div>
    </div>
  </div>
</div>
</div>


<!-- END fimg section -->


<!-- <img src="images/headwave4.png" width="100%" class="wave"> -->

<!-- START PRO-CARD-LIST -->
 
<!--<div class="pcard">
<main>
  <div class="cards">
    

 1 
   <a class="stack" href="#" >
    <div class="card top">
      <img src="images/paper1.jpg" class="img-fluid" alt="">
        <div class="contents">
          <h2><strong>Lorem ipsum dolor sit amet.</strong>xyz</h2>
        <span></span><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, nobis!</p> 
        </div>
      </div>
            <div class="card mid-top">
            <div class="contents"></div>
            </div>
                <div class="card mid-bottom">
                <div class="contents"></div>
                </div>
                    <div class="card bottom">
                    <div class="contents"></div>
                    </div>
      <div class="card shadow"></div></a> -->
<!-- END 1 -->

	<!-- 
<a class="stack" href="#" >
    <div class="card top">
      <img src="images/paper1.jpg" class="img-fluid" alt="">
        <div class="contents">
          <h2><strong>Lorem ipsum dolor sit amet.</strong>xyz</h2>
         <span></span><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, nobis!</p> 
        </div>
      </div>
            <div class="card mid-top">
            <div class="contents"></div>
            </div>
                <div class="card mid-bottom">
                <div class="contents"></div>
                </div>
                    <div class="card bottom">
                    <div class="contents"></div>
                    </div>
      <div class="card shadow"></div></a>
 



  </div>
  </main>
</div>
-->


<!-- END PRO-CARD-LIST -->

<!-- START product card -->


<!-- card -->




<!-- 

        <li>
          <div class="details">
            <h2>LeBron 16</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, tempora!</p>
            <h3>Rs.185</h3>
            <img src="images/brushpng1.png">
            <div class="purchase">
              <button>abc</button>  
              <button>xyz</button>
            </div>
        </li>
        <li>
          <div class="details">
            <h2>Nike Epic React Flyknit</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, tempora!</p>
            <h3>Rs.150</h3>
            <img src="images/pagepng1.png">
            <div class="purchase">
              <button>abc</button>  
              <button>xyz</button>
            </div>
          </div>
        </li> -->





<!-- <div class="pro-card">
    <div class="container">
    <div class="con">
    <div class="row pro-card">
      <div class="card">      
         <div class=" left col-md-6">
                <div class="sneaker">
                    <img src="images/bookpng1.png" class="img-fluid" alt="Book">
                </div>
        </div>
        <div class="right col-md-6">
            <div class="info">
                <h1 class="title">BOOK</h1>
                <p>PRODUCT -ABC</p>
                <div class="sizes">
                    <ul>
                        <li class="csize">SIZE</li>
                        <li class="csize">7</li>
                        <li class="csize">8</li>
                        <li class="csize">9</li>
                        <li class="csize">10</li>
                        <li class="csize">11</li>
                      </ul>
                </div>

                <div class="rs">
                    <h4><span></span>Rs:-150</h4>
                    <h4 class="dis"><span></span>MRP.200</h4>
                </div> 
                
                <div class="purchase">     
                    <a href="#"><button>xyz</button></a>
                    <a href="#"><button>xyz</button></a>
                </div>
            </div>
         </div>
        </div>
    </div>
    </div>
    </div>
</div> -->
<!-- 1 -->

<!-- END product card -->
<!-- STARTfeadin -->

<!-- <div class="card_list">
<div class="card_item item card_item_one">
  <div class="card_info">
    <picture class="card_picture">
        <img src="images/chairpng.png" class="img-fluid" alt="" width="550px" height="350px">
    </picture>
    <button class="card_btn">
    1button
    </button>
  </div>
</div>

<div class="card_item item card_item_two">
<div class="card_info">
<picture class="card_picture">
    <img src="images/chairpng.png" class="img-fluid" width="550px" height="350px">
</picture>
<button class="card_btn">
2  button
</button>
</div>
</div>


<div class="card_item item card_item_three">
<div class="card_info">
<picture class="card_picture">
  <img src="images/chairpng.png" class="img-fluid" width="550px" height="350px">
</picture>
<button class="card_btn">
3  button
</button>
</div>
</div>

<div class="card_item item card_item_four">
<div class="card_info">
<picture class="card_picture">
    <img src="images/chairpng.png" class="img-fluid" alt="" width="550px" height="350px">
</picture>
<button class="card_btn">
4 button
</button>
</div>
</div>

</div> -->
<!--END frad-in -->




<!-- Start Banner -->
    <!-- <div class="container-fluid">
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

</div> -->
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



<!-- <?php include 'footer.php'; ?> -->

