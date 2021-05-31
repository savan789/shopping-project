<?php include 'config.php';  //include config
// set dynamic title
$db = new Database();
$db->select('options', 'site_title', null, null, null, null);
$result = $db->getResult();

if (!empty($result)) {
    $title = $result[0]['site_title'];
} else {
    $title = "ᗪᖇEᗩᗰ ᗩᒪIᐯE.ᑕOᗰ";
}
// include header 
include 'head.php'; ?>
<!-- <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        ?> -->
<!------------------------ START FIRST_SLIDE ----------------------------->
<div class="fullpage">
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
                        <figure class="slide__figure">
                            <div class="slide__img img-fluid" style="background-image:url(images/brush4.jpg)"></div>
                        </figure>
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
                        <figure class="slide__figure">
                            <div class="slide__img img-fluid" style="background-image:url(images/brush3.jpg)"></div>
                        </figure>
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
                        <figure class="slide__figure">
                            <div class="slide__img img-fluid" style="background-image:url(images/brush2.jpg)"></div>
                        </figure>
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
                        <figure class="slide__figure">
                            <div class="slide__img img-fluid" style="background-image:url(images/brush1.jpg)"></div>
                        </figure>
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


    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('images/wave-top.png')"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('images/wave-mid.png')"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('images/wave-bot.png')"></div>
        </div>
    </div>

    <!------------------------ END FIRST_SLIDE ----------------------------->

    <!------------------------ START HEADER (2) ----------------------------->
    <div id="header">
        <!-- container -->
        <div class="container" id="white">
            <div class="row">
                <div class="col-md-4">
                    <?php
                    if (!empty($header[0]['site_logo'])) { ?>
                        <a href="<?php echo $hostname; ?>" class="logo-img"><img src="images/<?php echo $header[0]['site_logo']; ?>" alt="" class="img-fluid"></a>
                    <?php } else { ?>
                        <a href="<?php echo $hostname; ?>" class="logo"><?php echo $header[0]['site_name']; ?></a>
                    <?php } ?>
                </div>

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
                                    <li><a data-toggle="modal" data-target="#userLogin_form" href="card.php">login</a></li>
                                    <li><a data-toggle="modal" data-target="#register_sign_up" href="#">Register</a></li>
                                    <!-- <li><a href="register.php">Register</a></li> -->
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

                <div class="modal fade" id="register_sign_up" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <form>
                                <div class="modal-body">
                                    <form id="register_sign_up" method="POST" autocomplete="off">
                                        <div class="customer_login">
                                            <h2>register here</h2>
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="f_name" class="form-control first_name" placeholder="First Name" requried />
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="l_name" class="form-control last_name" placeholder="Last Name" requried />
                                            </div>
                                            <div class="form-group">
                                                <label>Username / Email</label>
                                                <input type="email" name="username" class="form-control user_name" placeholder="Email Address" requried />
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control pass_word" placeholder="Password" requried />
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="phone" name="mobile" class="form-control mobile" placeholder="Mobile" requried />
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control address" placeholder="Address" requried>
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control city" placeholder="City" requried>
                                            </div>
                                            <input type="submit" name="signup" class="btn" value="sign up" />
                                        </div>
                                    </form>
                                </div>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------ END HEADER (2) ----------------------------->

    <!------------------------ START HOME_PAGE (3) ----------------------------->

    <div class="hpage">
        <div class="homepage">
            <div class="hlogo">
                <img src="images/logo.png" class="img-fluid">
            </div>
            <div class="text-content">

                <div class="wrapper">

                    <div class="static-txt">WHY SHOP HERE !</div>
                    <ul class="dynamic-txts">
                        <li><span>1.Charity is Priority</span></li>
                        <li><span>2. Buy more to donate</span></li>
                        <li><span>3. Charity is the Act of your Power</span></li>
                        <li><span>4. Heal other with your help</span></li>
                        <li><span>5. Share your Joy With Charity</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!------------------------ END HOME_PAGE (3) ----------------------------->





    <div id="header-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu-list">
                        <?php
                        $db = new Database();
                        $db->select('sub_categories', '*', null, 'cat_products > 0 AND show_in_header = "1"', null, null);
                        $result = $db->getResult();
                        if (count($result) > 0) {
                            foreach ($result as $res) { ?>
                                <li><a href="category.php?cat=<?php echo $res['sub_cat_id']; ?>"><?php echo $res['sub_cat_title']; ?></a></li>
                        <?php    }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!------------------------ START CATAGORY (4) ----------------------------->
    <!-- <div class="catagory">
        <?php
        $db = new Database();
        $db->select('categories', '*', null, null, 'categories.cat_id', null);
        $sql = "SELECT * FROM categories ORDER BY categories.cat_id DESC";
        $categories = $db->getResult(); ?>

        
                <div class="container">
                    <div class="row">

                        <div class="all">
                         

                            <div class="left4 col-md-1 col-sm-3 col-xs-4">
                            <?php if ($categories > 0) {
            foreach ($categories as $category) { ?>
                                <div class="cattext"><?php echo $category['cat_id']; ?></div>
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
                            <!-- </div> C
                            <div class="center col-md-1">
                                <div class="explainer"><span><img src="images/new-product.png" class="img-fluid"> CATAGORY</span></div>
                                <div class="cattext"><?php $category['cat_id']; ?> <?php echo $category['cat_title']; ?></div>
                            </div>

                            <!-- <div class="catright"> C
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

                            <!-- </div> C
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div> -->

    <!------------------------ END CATAGORY (4) ----------------------------->

    <div class="pcard">
        <div class="card">
            <ul>
                <?php
                $db = new Database();
                $db->select('products', '*', null, null, 'product_id DESC', 9);
                $result = $db->getResult();
                if (count($result) > 0) {
                    foreach ($result as $row) { ?>
                        <li>
                            <div class="details">
                            
                                <div class="pro_detail">
                                    <p>
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                        <h2><a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0,90), '...'; ?></a></h2>
                                         </h2>
                                          
                                        </a>
                                    </p>
                                </div>

                                <h3>
                                    <?php echo $cur_format; ?> <?php echo $row['product_price']; ?>
                                </h3>
                                <!-- <div class="product-img"></div> -->
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                    <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                                </a>
                                <div class="purchase">
                                    <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><img src="images/cart1.png" class="img-fluid"></a>
                                    <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><img src="images/wish1.png" class="img-fluid"></a>
                                </div>
                            </div>
                    <?php    }
                } else {
                } ?>
                        </li>
            </ul>
        </div>
    </div>
    <!-- END product catagori -->
    <!-- START VIDEO -->
    <!-- 1 -->
    <div class="videocard ">
        <div class="container">
            <div class="row">
                <div class="fvideo ">
                    <video autoplay muted loop>
                        <source src="images/smakebrush.mp4" type="video/mp4" id="bg" class="vid">
                    </video>

                    <div class="pro-card">
                        <div class="container">
                            <div class="con">
                                <div class="row">
                                    <div class="ccard">
                                        <div class="card">
                                            <div class=" left col-md-12">
                                                <div class="sneaker">
                                                    <img src="images/bookpng1.png" class="img-fluid" alt="Book">
                                                </div>
                                            </div>
                                            <div class="right col-md-6 offset-md-6">
                                                <div class="info">
                                                    <h1 class="title">BOOK</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti perspiciatis architecto aliquam, quod totam consectetur provident corrupti earum ducimus, est repellendus. Quibusdam porro iste officiis vitae quaerat enim maxime nesciunt?</p>
                                                    <div class="rs">
                                                        <h4><span></span>Rs:-150</h4>
                                                        <h4 class="dis"><span></span>MRP.200</h4>
                                                    </div>
                                                    <div class="purchase">

                                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/cart1.png" class="img-fluid"></button></a>
                                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/wish1.png" class="img-fluid"></button></a>


                                                        <!-- <a href="#"><button>xyz</button></a>
                    <a href="#"><button>xyz</button></a> -->
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


                <!-- 2 video -->
                <div class="fvideo col-md-12">
                    <video autoplay muted loop>
                        <source src="images/spapermakeing_Slomo.mp4" type="video/mp4" id="bg" class="vid">
                    </video>

                    <div class="pro-card">
                        <div class="container">
                            <div class="con">
                                <div class="row">
                                    <div class="ccard">
                                        <div class="card">
                                            <div class=" left col-md-6">
                                                <div class="sneaker">
                                                    <img src="images/pagepng1.png" class="img-fluid" alt="Book">
                                                </div>
                                            </div>
                                            <div class="right col-md-6">
                                                <div class="info">
                                                    <h1 class="title">BOOK</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti perspiciatis architecto aliquam, quod totam consectetur provident corrupti earum ducimus, est repellendus. Quibusdam porro iste officiis vitae quaerat enim maxime nesciunt?</p>

                                                    <div class="rs">
                                                        <h4><span></span>Rs:-150</h4>
                                                        <h4 class="dis"><span></span>MRP.200</h4>
                                                    </div>

                                                    <div class="purchase">
                                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/cart1.png" class="img-fluid"></button></a>
                                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/wish1.png" class="img-fluid"></button></a>


                                                        <!-- <a href="#"><button>xyz</button></a>
                    <a href="#"><button>xyz</button></a> -->
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
                <!-- 3 videocard -->

                <div class="fvideo ">
                    <video autoplay muted loop>
                        <source src="images/spapermakeing_Slomo.mp4" type="video/mp4" id="bg" class="vid">
                    </video>

                    <div class="pro-card">
                        <div class="container">
                            <div class="con">
                                <div class="row">
                                    <div class="ccard">
                                        <div class="card">
                                            <div class=" left col-md-12">
                                                <div class="sneaker">
                                                    <img src="images/bookpng1.png" class="img-fluid" alt="Book">
                                                </div>
                                            </div>
                                            <div class="right col-md-6 offset-md-6">
                                                <div class="info">
                                                    <h1 class="title">BOOK</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti perspiciatis architecto aliquam, quod totam consectetur provident corrupti earum ducimus, est repellendus. Quibusdam porro iste officiis vitae quaerat enim maxime nesciunt?</p>
                                                    <div class="rs">
                                                        <h4><span></span>Rs:-150</h4>
                                                        <h4 class="dis"><span></span>MRP.200</h4>
                                                    </div>
                                                    <div class="purchase">
                                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/cart1.png" class="img-fluid"></button></a>
                                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/wish1.png" class="img-fluid"></button></a>


                                                        <!-- <a href="#"><button>xyz</button></a>
                    <a href="#"><button>xyz</button></a> -->
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
                <!-- 4 video card -->
                <div class="fvideo col-md-12">
                    <video autoplay muted loop>
                        <source src="images/video.mp4" type="video/mp4" id="bg" class="vid">
                    </video>

                    <div class="pro-card">
                        <div class="container">
                            <div class="con">
                                <div class="row">
                                    <div class="ccard">
                                        <div class="card">
                                            <div class=" left col-md-6">
                                                <div class="sneaker">
                                                    <img src="images/pagepng1.png" class="img-fluid" alt="Book">
                                                </div>
                                            </div>
                                            <div class="right col-md-6">
                                                <div class="info">
                                                    <h1 class="title">BOOK</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti perspiciatis architecto aliquam, quod totam consectetur provident corrupti earum ducimus, est repellendus. Quibusdam porro iste officiis vitae quaerat enim maxime nesciunt?</p>

                                                    <div class="rs">
                                                        <h4><span></span>Rs:-150</h4>
                                                        <h4 class="dis"><span></span>MRP.200</h4>
                                                    </div>

                                                    <div class="purchase">
                                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/cart1.png" class="img-fluid"></button></a>
                                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><button><img src="images/wish1.png" class="img-fluid"></button></a>


                                                        <!-- <a href="#"><button>xyz</button></a>
                    <a href="#"><button>xyz</button></a> -->
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
    <!-- START DONATION PAGE section -->
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


<!-- END DONATION PAGE section -->
<!-- start  ALL product -->
<div class="pop-product">
    <div class="product-section popular-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head"><a href="all_products.php">All Products</h2></a>
                    <div class="popular-carousel owl-carousel owl-theme">
                        <?php
                        $db->select('products', '*', null, 'product_views > 0', 'product_views DESC', 10);
                        $result = $db->getResult();
                        if (count($result) > 0) {
                            foreach ($result as $row) { ?>
                                <div class="product-grid latest item">
                                    <div class="product-image popular">
                                        <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                            <img class="pic-1 img-fluid" src="product-images/<?php echo $row['featured_image']; ?>">
                                        </a>
                                        <div class="product-button-group">
                                            <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a>
                                            <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title">
                                            <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0, 7), '...'; ?></a>
                                        </h3>
                                        <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                                    </div>
                                </div>
                        <?php    }
                        } else {
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shd"></div>
    <img src="images/3d-man.png" class="idman img-fluid">
</div>

</body>

<script src="js/custom.js"></script>

</html>
<?php include 'footer.php'; ?>