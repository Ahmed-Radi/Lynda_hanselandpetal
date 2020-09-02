
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hansel and Petal - Home</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
<?php require('includes/pagetop.php'); 
/* Put processing code for $monthname here if
   you need to set the timezone in pagetop.php. */
	$monthname	=	date("M");
	$monthname	=	strtolower("$monthname");
	
	$monthnumber	=	date('n');
	
$specials_alt = [
    'January special: Cacti galore',
    'February special: Flowers and hearts for Valentines',
    'March special: Bright red camellias',
    'April special: Fresh tulips',
    'May special: Beautiful bougainvillea',
    'June special: Purple iris',
    'July special: Stunning white hydrangeas',
    'August special: Sunflowers',
    'September special: Pink crysanthemums',
    'October special: Purple orchids',
    'November special: Bonsai with rock',
    'December special: Dried flowers for decoration'
     ];

$features = array(
    'winter' => 'Beautiful arrangements for any occasion.',
    'spring' => 'It must be spring! Delicate daffodils have arrived.',
    'summer' => "It's summer, and we're in the pink!",
    'autumn' => "Summer's over, but our flowers are still a riot of colors."
    );

$seasons = array(
    'winter' => array('dec', 'jan', 'feb'),
    'spring' => array('mar', 'apr', 'may'),
    'summer' => array('jun', 'jul', 'aug'),
    'autumn' => array('sep', 'oct', 'nov')
    );

foreach($seasons as $key => $montharray) //$montharray -> it is array contain months
{
	if(in_array($monthname,$montharray))
	{
		$season	= $key;
		break;
	}
}
?>
    <div id="content">
        <div id="col_1" role="main">
            <h1>Beautiful Flowers, Artfully Arranged</h1>
            <div id="feature" class="pull_out lg_margin">
                <div class="inner">
                    <p class="overlay large"><?php echo($features[$season]) ?></p>
                    <p class="overlay price">Starting at $45.95</p>
                    <img src="images/feature_<?php echo($season);?>.jpg" alt="White Rose Arrangement" height="410" width="980"> </div>
            </div>
            <div class="section">
                <div class="title clearfix">
                    <h2>Our Most Popular Flowers</h2>
                    <p class="h3"><a href="#" class="feature">Browse All Fresh Flowers</a></p>
                </div>
                <ul class="reset tiles x3">
                    <li> <a href="#"> <img src="images/280_heirloom_pink_roses_153499160.jpg" alt="Heirloom Roses" height="280" width="280">
                        <h3 class="h4">Heirloom Roses</h3>
                        <p class="reset">From $39.95 <b class="alert"><span>Sale</span></b></p>
                        </a> </li>
                    <li> <a href="#"> <img src="images/280_irises_121549009.jpg" alt="Purple Irises" height="280" width="280">
                        <h3 class="h4">Lovely Irises</h3>
                        <p class="reset">From $15.95</p>
                        </a> </li>
                    <li> <a href="#"> <img src="images/280_white_red_tulips_160382424.jpg" alt="White Tipped Tulips" height="280" width="280">
                        <h3 class="h4">Tantalizing Tulips</h3>
                        <p class="reset">From $29.95</p>
                        </a> </li>
                </ul>
            </div>
            <div class="section">
                <div class="title clearfix">
                    <h2>Bouquets &amp; Arrangements</h2>
                    <p class="h3"><a href="#" class="feature">Browse All Arrangements</a></p>
                </div>
                <ul class="reset tiles">
                    <li> <a href="#"> <img src="images/200_birthday_163159054.jpg" alt="Pink Birthday" height="200" width="200">
                        <h3 class="h4">Birthdays</h3>
                        <p class="reset">From $19.95</p>
                        </a> </li>
                    <li> <a href="#"> <img src="images/200_arrangement_94972439.jpg" alt="Sunflower Bouquet" height="200" width="200">
                        <h3 class="h4">Anniversaries</h3>
                        <p class="reset">From $25.95</p>
                        </a> </li>
                    <li> <a href="#"> <img src="images/200_purple_daisy_rose104274224.jpg" alt="Purple Daisy Bouquet" height="200" width="200">
                        <h3 class="h4">Someone Special</h3>
                        <p class="reset">From $22.95 <b class="alert"><span>New!</span></b></p>
                        </a> </li>
                    <li> <a href="#"> <img src="images/200_arrangement_163066655.jpg" alt="Bucket o' Mums" height="200" width="200">
                        <h3 class="h4">Mums for Mom</h3>
                        <p class="reset">From $19.95</p>
                        </a> </li>
                </ul>
            </div>
            <div class="section">
                <div class="title clearfix">
                    <h2>Something Special</h2>
                    <p class="h3"><a href="#" class="feature">Browse All Fresh Flowers</a></p>
                </div>
                <ul class="reset tiles x2">
                    <li> <a href="#" class="tile border">
                        <p class="overlay feature">Create Your Own Bouquet</p>
                        <p class="overlay desc">Choose the flowers you want, and our
                            designers will create a custom arrangement! <span class="price">Bouquets from $29.95</span></p>
                        <img src="images/450_tulips_daffodils_163271740.jpg" alt="Custom Bouquet" height="450" width="450"> </a> </li>
                    <li> <a href="#" class="tile border">
                        <p class="overlay">Live Plants Keep Giving</p>
                        <p class="overlay price">Starting at $19.95</p>
                        <img src="images/450_2_maidenhair_fern_166585539.jpg" alt="Maidenhair Fern" height="200" width="450"> </a> <a href="#" class="tile border">
                        <p class="overlay">Seasonal Specials</p>
                        <p class="overlay price">Starting at $24.95</p>
                        <img src="images/special_<?php echo $monthname?>.jpg" alt="<?php echo $specials_alt[$monthnumber-1];?>" height="200" width="450"> </a> </li>
                </ul>
            </div>
        </div>
    </div>
<?php include('includes/footer.php') ?>
</div>
<script src="js/jquery-1.10.2.min.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>