<?php
date_default_timezone_set('Africa/cairo');
$startYear	=	2019;
$thisYear	=	date('Y');
if($thisYear > $startYear)
{
	$copyright	=	"$startYear &ndash; $thisYear";
}
else{
	$copyright	=	$startYear;
}
?>
<div id="footer">
	<div class="row clearfix">
		<ul class="reset menu hover">
			<li><a href="<?php echo $siteroot; ?>/arrangements.php">Arrangements</a></li>
			<li><a href="#">Live Plants</a></li>
			<li><a href="<?php echo $siteroot; ?>/bouquet.php">Build-a-Bouquet</a></li>
			<li><a href="#">Special Events</a></li>
			<li><a href="#">Care Tips</a></li>
			<li><a href="#">Eco-Conscious</a></li>
			<li><a href="<?php echo $siteroot; ?>/designers.php">Our Designers</a></li>
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
		<img src="<?php echo $siteroot; ?>/images/logo.png" alt="Hansel and Petal" height="124" width="207"> </div>
	<p id="copyright" class="reset pull_out padding" role="contentinfo"><a href="http://www.ixd.hanselandpetal.com/">© <?php echo $copyright; ?> Hansel and Petal</a></p>
	<p id="disclaimer">Hansel &amp; Petal is a fictitious brand created by 
		lynda.com solely for the purpose of training. All products and people 
		associated with Hansel &amp; Petal are also fictitious. Any resemblance 
		to real brands, products, or people is purely coincidental. Information 
		provided about the product is also fictitious and should not be 
		construed to be representative of actual products on the market in a 
		similar product category.
	</p>
</div>