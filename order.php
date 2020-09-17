<?php
if (isset($_POST['bouquet'])) {
	$color = array();
	$quantity = array();
	$image = array();
	foreach ($_POST AS $key => $value) {
		if (strpos($key, 'color_') === 0) {
			$color[substr($key, 6)] = $value;
		} elseif (strpos($key, 'qty_') === 0) {
			$quantity[substr($key, 4)] = $value;
		}
		if (strpos($key, 'image_') === 0) {
			$image[substr($key, 6)] = $value;
		}
	}
$price = array(
    'Calla_Lilies' => 3,
    'Sunflowers' => 3,
    'Iris' => 2,
    'Peruvian_Lilies' => 2,
    'Daffodils_(Narcissus)' => 2,
    'Gerbera_Daisies' => 3,
    'Dendrobium_Orchid' => 4,
    'Roses' => 3,
    'Lilies' => 3,
    'Tulips' => 2,
    'Lilac' => 4,
    'Daisies' => 1
    );
}
function getColor($filename){
	$parts = explode('_',$filename);
	return ucfirst($parts[2]);
}
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Details - Hansel and Petal</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
    <?php require 'includes/pagetop.php'; ?>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="bouquet.php">Build a Bouquet</a></li>
                <li>Order Details</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Your Order</h1>
            <?php if (!isset($quantity) || array_sum($quantity) === 0) { ?>
            <p>Your basket is empty.</p>
            <?php } else { ?>
            <p>Please check the details of your order.</p>
				<table id="order_details">
					<tr>
						<th scope="col">&nbsp;</th>
						<th scope="col">Item</th>
						<th scope="col">Color</th>
						<th scope="col">Quantity</th>
						<th scope="col">Cost</th>
					</tr>
                    <?php foreach ($quantity AS $flowername => $amount):
					if ($amount > 0) :
					?>
					<tr>
						<td><img src="images/<?php
                        if (isset($color[$flowername])) {
							echo $color[$flowername];/**the result from this array is equal value the value is
							the name of the picture but this contains some picture and the 'image' array contain the rest, Because all flowers do not contain colors*/
						} else {
							echo $image[$flowername];
						}
						?>.jpg" alt="" width="80" height="80"/></td>
						<td><?php echo str_replace('_', ' ', $flowername); ?></td>
						<td><?php
								if(isset($color[$flowername])){
									echo getColor($color[$flowername]);
								}else{
									echo('&nbsp;');
								}
							?></td>
						<td><?php echo $amount; ?></td>
						<td>$<?php echo $cost = $amount * $price[$flowername];
								$total += $cost;
						?></td>
					</tr>
                    <?php
					endif;
					endforeach; ?>
					<tr>
						<td colspan="4">Shipping</td>
						<td>
							<?php
								if($total < 75){
									echo '$10';
									$total += 10;
								}else{
									echo 'Free';
								}
							?>
						</td>
					</tr>
					<tr>
						<td colspan="4">Total</td>
						<td>$<?php echo $total;?></td>
					</tr>
				</table>
            <div id="order_buttons">
            <form method="post">
                <span><input class="btn alt" value="Cancel Order" name="cancel" id="cancel" type="submit"></span>
                <span><input class="btn checkout" value="Confirm Order" type="submit"></span>
            </form>
            </div>
            <?php } ?>
        </div>
    </div>
<?php include './includes/footer.php'; ?>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>