<?php include 'config.php';  //config file
$p_id = $_GET['pid'];
$db = new Database();
$db->sql("UPDATE products SET product_views=product_views+1 WHERE product_id=".$p_id);
$res = $db->getResult();
$db->select('products','*',null,"product_id= '{$p_id}'",null,null);
$single_product = $db->getResult();
if(count($single_product) > 0){ 
    $title = $single_product[0]['product_title'];   //set dynamic header
    // include header
    include 'header.php'; ?>
    <div class="oneproduct">
<div class="single-product-container">
    <div class="container">
        <div class="row address">
            <div class="col-md-offset-5 col-md-7">
                <?php
                $db = new Database();
                $db->select('sub_categories','*',null,"sub_cat_id='{$single_product[0]['product_sub_cat']}'",null,null);
                $category = $db->getResult();
                ?>
                <ol class="breadcrumb">
                <li><a href="<?php echo $hostname; ?>">Home/</a></li>
                    <li><a href="category.php?cat=<?php echo $category[0]['sub_cat_id']; ?>"><?php echo $category[0]['sub_cat_title']; ?>/</a></li>
                    <li class="active"><?php echo substr($title,0,30).'....'; ?></li>
                </ol>
            </div> 
        </div>

        <div class="row photo">
        <?php foreach($single_product as $row){ ?>
              
 

        <div class="arrow arrow--top">
        <svg xmlns="http://www.w3.org/2000/svg" width="270.11" height="649.9" overflow="visible">
          <style>
            .geo-arrow {
              fill: none;
              stroke: #fff;
              stroke-width: 2;
              stroke-miterlimit: 10
            }
          </style>
          <g class="item-to bounce-1">
            <path class="geo-arrow draw-in" d="M135.06 142.564L267.995 275.5 135.06 408.434 2.125 275.499z" />
          </g>
          <circle class="geo-arrow item-to bounce-2" cx="194.65" cy="69.54" r="7.96" />
          <circle class="geo-arrow draw-in" cx="194.65" cy="39.5" r="7.96" />
          <circle class="geo-arrow item-to bounce-3" cx="194.65" cy="9.46" r="7.96" />
          <g class="geo-arrow item-to bounce-2">
            <path class="st0 draw-in" d="M181.21 619.5l13.27 27 13.27-27zM194.48 644.5v-552" />
          </g>
        </svg>
      </div>
      <div class="arrow arrow--bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="31.35" height="649.9" overflow="visible">
     
          <g class="item-to bounce-1">
            <circle class="geo-arrow item-to bounce-3" cx="15.5" cy="580.36" r="7.96" />
            <circle class="geo-arrow draw-in" cx="15.5" cy="610.4" r="7.96" />
            <circle class="geo-arrow item-to bounce-2" cx="15.5" cy="640.44" r="7.96" />
            <g class="item-to bounce-2">
              <path class="geo-arrow draw-in" d="M28.94 30.4l-13.26-27-13.27 27zM15.68 5.4v552" />
            </g>
          </g>
        </svg>
      </div>
      <div class="main">
        <div class="main__text-wrapper">
        <div class="col-md-12">
                    <div class="product-image">
                    <div class="bounceimg">
                        <img id="product-img" src="product-images/<?php echo $row['featured_image'] ?>" alt=""/>
                        </div>
                    </div>
                </div>      
                <span class="dotted-circle"></span>

      <circle cx="176" cy="176" r="174" fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="12.921,11.9271"/>
    </svg>
       


        <div class="row details">
                <div class="col-md-8">
                    <div class="product-content">
                        <h3 class="title"><?php echo $row['product_title']; ?></h3>
                        <span class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></span>
                        <p class="description"><?php echo html_entity_decode($row['product_desc']); ?></p>
                                <!--NGO DONAT-->
                            
                        <a class="add-to-cart" data-id="<?php echo $row['product_id']; ?>" href="">Add to cart</a>
                        <a class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>" href="">Add to Wislist</a>
                    </div>
                </div>
                <div class="col-md-2 donation">
                <span class="price_donat">
                                <br>
                                   <?php
                                if(isset($row['product_price']))
                                   {
                                       $total = $row['product_price'];
                                       $profit = $total * 10 / 100;
                                       echo 'NGO:- '. $profit; 
                                   }
                                   ?>
                                </span> 
                </div>

             
                <div class="col-md-2 ad">
                    AD
                </div>
    <?php   } ?>
        </div>
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
                                    <div class="product-image latest">
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
            }?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        </div>



<?php include 'footer.php'; 
}else{
    echo 'Page Not Found';

}
?>