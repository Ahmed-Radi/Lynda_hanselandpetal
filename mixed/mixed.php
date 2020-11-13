<?php
$message='';
$db = new MySQLi('localhost','phpwebdes','1234','hanselandpetal');
if($db -> connect_error){
    $message= $db->connect_error;
}else{
    // $message = 'Connection is OK';
    $sql = 'SELECT * FROM arrangements';
    $result = $db ->query($sql);
    if($db->error){
        $message = $db->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mixed Arrangements - Hansel and Petal</title>
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link href="../styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
    <div id="header" role="banner">
        <h1 id="logo"><a href="../index.php"><img src="../images/logo.png" alt="Hansel and Petal" height="124" width="207"></a></h1>
        <div class="inner">
            <ul id="quick_links" class="reset menu">
                <li><a href="#">My Account</a></li>
                <li><a href="../order.php">View My Order</a></li>
                <li><a href="#">Customer Service</a></li>
            </ul>
            <form action="#" method="get" id="quick_search" role="search">
                <input id="quickSearch" class="text white" placeholder="Find the perfect flowers or plants…" type="search">
                <span class="btn_icon icon_search">
                <input value="Search" type="submit">
                </span>
            </form>
            <p id="offer">FREE Shipping on orders over $75.00!</p>
        </div>
    </div>
    <div id="nav_main" role="navigation" class="reset menu pull_out">
        <ul>
            <li class="current"> <a href="../arrangements.php" class="parent"><span>Arrangements</span></a>
                <div>
                    <ul>
                        <li> <a href="#">Our Most Popular Flowers</a>
                            <ul>
                                <li><a href="#">Daisies</a></li>
                                <li><a href="#">Tulips</a></li>
                                <li><a href="#">Roses</a></li>
                                <li><a href="#">Lilies</a></li>
                                <li><a href="#">Irises</a></li>
                                <li><a href="#">Mums</a></li>
                                <li><a href="#">Carnations</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">Tropicals</a>
                            <ul>
                                <li><a href="#">Gingers</a></li>
                                <li><a href="#">Heliconias</a></li>
                                <li><a href="#">Tuberose</a></li>
                                <li><a href="#">Ferns</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">Orchids</a>
                            <ul>
                                <li><a href="#">Phalaenopsis</a></li>
                                <li><a href="#">Dendrobium</a></li>
                                <li><a href="#">Oncidium</a></li>
                                <li><a href="#">Cattleya</a></li>
                                <li><a href="#">Cymbidium</a></li>
                            </ul>
                        </li>
                        <li> <a href="mixed.php">Mixed Arrangements</a>
                            <ul>
                                <li><a href="#">Spring Pastels</a></li>
                                <li><a href="#">Autumn Warmth</a></li>
                                <li><a href="#">Red, White, &amp; Blue</a></li>
                                <li><a href="#">All White</a></li>
                                <li><a href="roses.php">Mixed Roses</a></li>
                                <li><a href="#">Mixed Irises</a></li>
                                <li><a href="#">Daisies &amp; More Daisies</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><span>Live Plants</span></a></li>
            <li><a href="../bouquet.php"><span>Build-a-Bouquet</span></a></li>
            <li><a href="#"><span>Special Events</span></a></li>
            <li> <a href="#" class="parent"><span>Care Tips</span></a>
                <div class="single_column">
                    <ul>
                        <li><a href="#">Caring for Mixed Bouquets</a></li>
                        <li><a href="#">Caring for Roses</a></li>
                        <li><a href="#">Caring for Tropical Flowers</a></li>
                        <li><a href="#">Caring for House Plants</a></li>
                        <li><a href="../care/orchids.php">Caring for Orchids</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><span>Eco-Conscious</span></a></li>
            <li><a href="../designers.php"><span>Our Designers</span></a></li>
        </ul>
    </div>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../arrangements.php">Arrangements</a></li>
                <li>Mixed Arrangements</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Mixed Arrangements</h1>
            <h2 class="h3 inline_block">Mixed bouquets with the bright colors of Spring</h2>
            <div class="cols lg_margin">
                <div class="col sub">
                    <p class="w210">Hansel &amp; Petal combines the highest quality
                        flowers in unique, colorful arrangements and bouquets that are sure to
                        make everyone happy.</p>
                    <p>Choose from our popular arrangements or <a href="../bouquet.php" class="btn alt inconsistent_mt"><span class="normalcase">Create Your Own</span> Custom Bouquet</a></p>
                </div>
                <div class="col main">
                    <div id="feature">
                        <div class="inner">
                            <p class="overlay large">Arrangements for Every Occasion</p>
                            <p class="overlay price">Starting at $39.95</p>
                            <img src="../images/710_arrangement_97881968.jpg" alt="Mixed Arrangement" height="300" width="710"> </div>
                    </div>
                </div>
            </div>
            <?php
            if($message){
                echo "<h2>$message</h2>";
            }else{
            ?>
            <div class="page open">

                <div class="section">
                    <ul class="reset tiles">
                        <li>
                            <a href="details.php"> <img src="../images/200_arrangement_yellow_tulip.jpg" alt="Yellow Tulips" height="200" width="200">
                            <h3 class="h4">Burst of Yellow</h3>
                            <p class="reset">From $19.95</p>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php }// end of page?>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="row clearfix">
            <ul class="reset menu hover">
                <li><a href="../arrangements.php">Arrangements</a></li>
                <li><a href="#">Live Plants</a></li>
                <li><a href="../bouquet.php">Build-a-Bouquet</a></li>
                <li><a href="#">Special Events</a></li>
                <li><a href="#">Care Tips</a></li>
                <li><a href="#">Eco-Conscious</a></li>
                <li><a href="../designers.php">Our Designers</a></li>
            </ul>
            <ul class="reset menu hover">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Customer Service</a></li>
                <li><a href="#">Fresh Flower Guarantee</a></li>
                <li><a href="#">Shipping Information</a></li>
            </ul>
            <ul class="reset menu hover">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
            </ul>
            <img src="../images/logo.png" alt="Hansel and Petal" height="124" width="207"> </div>
        <p id="copyright" class="reset pull_out padding" role="contentinfo"><a href="http://www.ixd.hanselandpetal.com/">© 2013 Hansel and Petal</a></p>
        <p id="disclaimer">Hansel &amp; Petal is a fictitious brand created by
            lynda.com solely for the purpose of training. All products and people
            associated with Hansel &amp; Petal are also fictitious. Any resemblance
            to real brands, products, or people is purely coincidental. Information
            provided about the product is also fictitious and should not be
            construed to be representative of actual products on the market in a
            similar product category.</p>
    </div>
</div>
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>