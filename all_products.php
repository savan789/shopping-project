<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<h2 class="section-head">Popular Products</h2>


          <div class="allpro">        
<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
    <?php
   $limit = 8;
   $db = new Database();
   $db->select('products','*',null,'product_views > 0 AND product_status = 1 AND qty > 0','product_views DESC',$limit);
   $result = $db->getResult();
   if(count($result) > 0){
       foreach($result as $row){ ?>

        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> 
                      <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                          <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>" class="card-img img-fluid" width="100%" alt="">
                      </a>
                    </div>
                  </div>

                <div class="card-body text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> 
                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo $row['product_title']; ?></a> 
                        </h6>
                    </div>
                    <h3 class="mb-0 font-weight-semibold"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></h3>

                    <div class="buy">
                             <button><a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><img src="images/cart1.png" class="img-fluid"></a></button>
                             <button><a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><img src="images/wish1.png" class="img-fluid"></a></button>
                        </div>
                </div>
            </div>
        </div>
        <?php  }
      }
      ?>

    </div>
</div>
</div>

<?php include 'footer.php'; ?>