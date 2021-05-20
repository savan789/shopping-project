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
<div class="single-product-container">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-7">
                <?php
                $db = new Database();
                $db->select('sub_categories','*',null,"sub_cat_id='{$single_product[0]['product_sub_cat']}'",null,null);
                $category = $db->getResult();
                ?>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $hostname; ?>">Home / </a></li>
                    <li><a href="category.php?cat=<?php echo $category[0]['sub_cat_id']; ?>"><?php echo $category[0]['sub_cat_title']; ?> /</a></li>
                    <li class="active"><?php echo substr($title,0,30).'.....'; ?></li>
                </ol>
            </div> 
        </div>




        <div class="row">
        <?php foreach($single_product as $row){ ?>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="product-image">
                        <img id="product-img" src="product-images/<?php echo $row['featured_image'] ?>" alt=""/>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="product-content">
                        <h3 class="title"><?php echo $row['product_title']; ?></h3>
                        <span class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></span>
                     
                     <!--NGO DONAT-->
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


                        <p class="description"><?php echo html_entity_decode($row['product_desc']); ?></p>
                        <a class="add-to-cart" data-id="<?php echo $row['product_id'];?>" href="">Add to cart</a>
                        <a class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>" href="">Add to Wislist</a>
                    </div>
                </div>
                <div class="col-md-2"></div>
    <?php   } ?>
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





<?php include 'footer.php'; 
}else{
    echo 'Page Not Found';

}
?>