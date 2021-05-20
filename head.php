<?php
$db = new Database();
$db->select('options', 'site_name,site_logo,currency_format');
$header = $db->getResult();

$cur_format = '$';
if (!empty($header[0]['currency_format'])) {
    $cur_format = $header[0]['currency_format'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php if (isset($title)) { ?>
        <title><?php echo $title; ?></title>
    <?php } else { ?>
        <title>Shop</title>
    <?php } ?>
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/demo.css" /> -->
    <!-- <link rel="stylesheet" href="css/component.css" /> -->
</head>

<body>
    <!-- HEADER -->
    
    <!-- <div id="header-menu">
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
    </div> -->
</body>

<!-- <script src="js/custom.js"></script> -->
<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</html>