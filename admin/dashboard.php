<?php
// include header file
include 'header.php'; ?>



    <div class="admin-content-container">
<!-- Background  css -->
    <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
                                                                                                                          
<!-- 
        <h2 class="admin-heading">Dashboard</h2> -->
     
<!-- chart start -->
      <div class="chart"> 
      <canvas id="myChart" width="800" height="500"></canvas>
      </div>
<!-- chart end -->
<div class="container-fluid">
<div class="row">
        <div class="col-md-12 ">         
            <div class="col-md-4">
                <?php
                    $db = new Database();
                    $db->select('products','COUNT(product_id) as p_count',null,null,null,0);
                    $products = $db->getResult();
                ?>
                <div class="detail-box">
                <a href="products.php">
                <img src="images/package" height="100" width="100px">
                    <span class="count"><?php echo $products[0]['p_count']; ?></span>
                    <span class="count-tag">Products</span></a>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $db = new Database();
                    $db->select('categories','COUNT(cat_id) as c_count',null,null,null,0);
                    $category = $db->getResult();
                ?>
                <div class="detail-box">
                <a href="category.php">
                <img src="images/categories" height="100" width="100px">
                    <span class="count"><?php echo $category[0]['c_count']; ?></span>
                    <span class="count-tag">Categories</span></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="detail-box">
                    <?php
                        $db = new Database();
                        $db->select('sub_categories','COUNT(sub_cat_id) as sub_count',null,null,null,0);
                        $sub_category = $db->getResult();
                    ?>
                    <a href="sub_category.php">
                    <img src="images/subcategories" height="100" width="100px">
                    <span class="count"><?php echo $sub_category[0]['sub_count']; ?></span>
                    <span class="count-tag">Sub Categories</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="detail-box">
                    <?php
                        $db = new Database();
                        $db->select('brands','COUNT(brand_id) as b_count',null,null,null,0);
                        $brands = $db->getResult();
                    ?>
                    <a href="brands.php">
                    <img src="images/brand" height="100" width="100px">
                    <span class="count"><?php echo $brands[0]['b_count']; ?></span>
                    <span class="count-tag">Brands</span>
                                </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="detail-box">
                    <?php
                        $db = new Database();
                        $db->select('order_products','COUNT(order_id) as o_count',null,null,null,0);
                        $orders = $db->getResult();
                    ?>
                    <a href="orders.php">
                    <img src="images/order" height="100" width="100px">
                    <span class="count"><?php echo $orders[0]['o_count']; ?></span>
                    <span class="count-tag">Orders</span>
                                </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="detail-box">
                    <?php
                        $db = new Database();
                        $db->select('user','COUNT(user_id) as u_count',null,null,null,0);
                        $users = $db->getResult();
                    ?>
                    <a href="users.php">
                    <img src="images/users" height="100" width="100px">
                    <span class="count"><?php echo $users[0]['u_count']; ?></span>
                    <span class="count-tag">Users</span>
                                </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cahrt script start -->
<script src="js/chart.js"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: [
    'Users',
    'Orders'
  ],
         datasets:
         [
                {
                data: [<?php echo $users[0]['u_count']; ?>, <?php echo $orders[0]['o_count']; ?>,],
                label:"user",
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)'],   
                     borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgb(75, 192, 192)'],
                          borderWidth: 5    
                },

                // {
                // data: [<?php echo $orders[0]['o_count']; ?>],
                // label:"order",
                // backgroundColor: [
                // '#a8e0638f',],   
                //      borderColor: [
                //         '#a8e063'],
                //           borderWidth: 5                  
                // },
               
        ]
        },
        // options:{
        //     responsive:false,
        // }
    });
    </script>
<!-- chart script end -->




<?php
//    include footer file
    include "footer.php";

?>
