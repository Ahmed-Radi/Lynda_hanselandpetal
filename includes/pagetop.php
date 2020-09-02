<?php
/* $siteroot points to the development folder.
   Reset it to an empty string when deploying the live site. */
$siteroot = '../Lynda_hanselandpetal';

?>
    <div id="header" role="banner">
        <h1 id="logo"><a href="<?php echo $siteroot; ?>/index.php"><img src="<?php echo $siteroot; ?>/images/logo.png" alt="Hansel and Petal" height="124" width="207"></a></h1>
        <div class="inner">
            <ul id="quick_links" class="reset menu">
                <li><a href="#">My Account</a></li>
                <li><a href="<?php echo $siteroot; ?>/order.php">View My Order</a></li>
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
            <li> <a href="<?php echo $siteroot; ?>/arrangements.php" class="parent"><span>Arrangements</span></a>
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
                        <li> <a href="<?php echo $siteroot; ?>/mixed/mixed.php">Mixed Arrangements</a>
                            <ul>
                                <li><a href="#">Spring Pastels</a></li>
                                <li><a href="#">Autumn Warmth</a></li>
                                <li><a href="#">Red, White, &amp; Blue</a></li>
                                <li><a href="#">All White</a></li>
                                <li><a href="<?php echo $siteroot; ?>/mixed/roses.php">Mixed Roses</a></li>
                                <li><a href="#">Mixed Irises</a></li>
                                <li><a href="#">Daisies &amp; More Daisies</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><span>Live Plants</span></a></li>
            <li><a href="<?php echo $siteroot; ?>/bouquet.php"><span>Build-a-Bouquet</span></a></li>
            <li><a href="#"><span>Special Events</span></a></li>
            <li> <a href="#" class="parent"><span>Care Tips</span></a>
                <div class="single_column">
                    <ul>
                        <li><a href="#">Caring for Mixed Bouquets</a></li>
                        <li><a href="#">Caring for Roses</a></li>
                        <li><a href="#">Caring for Tropical Flowers</a></li>
                        <li><a href="#">Caring for House Plants</a></li>
                        <li><a href="<?php echo $siteroot; ?>/care/orchids.php">Caring for Orchids</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><span>Eco-Conscious</span></a></li>
            <li><a href="<?php echo $siteroot; ?>/designers.php"><span>Our Designers</span></a></li>
        </ul>
    </div>
