<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Build a Bouquet - Hansel and Petal</title>
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
                <li>Build a Bouquet</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Build a Bouquet</h1>
            <h2 class="h3 inline_block">From Our Fresh Selection of Flowers</h2>
            <p>Choose the flowers you want, choose a color if available, and choose the number of each for your bouquet.</p>
            <form action="order.php" method="post" id="bab_form" class="basket_add clearfix">
                <fieldset class="bab_item" id="bab-CL" data-legend="Calla Lilies">
                    <legend class="hidden">Calla Lilies</legend>
                    <img src="images/160_calla_blush_160337318.jpg" alt="" height="160" width="160">
                    <p>$3.00 per stem</p>
                    <div class="color">
                        <label for="colorCL">Color</label>
                        <!-- Blush, Yellow, Pink, Purple -->
                        <select name="color_Calla_Lilies" id="colorCL">
                            <option selected value="160_calla_blush_160337318">Blush</option>
                            <option value="160_calla_yellow_153712017">Yellow</option>
                            <option value="160_calla_pink_119602389">Pink</option>
                            <option value="160_calla_purple_162814062">Purple</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyCL">Quantity</label>
                        <input value="0" name="qty_Calla_Lilies" id="qtyCL" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Calla_Lilies" value="3">
                </fieldset>
                <fieldset class="bab_item" id="bab-S" data-legend="Sunflower">
                    <legend class="hidden">Sunflower</legend>
                    <img src="images/160_sunflower_146748795.jpg" alt="" height="160" width="160">
                    <p>$3.00 per stem</p>
                    <div class="color invisible">
                        <label>Dummy</label>
                        <select>
                            <option selected>Dummy</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyS">Quantity</label>
                        <input value="0" name="qty_Sunflowers" id="qtyS" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Sunflowers" value="3">
                    <input type="hidden" name="image_Sunflowers" value="160_sunflower_146748795">
                </fieldset>
                <fieldset class="bab_item" id="bab-I" data-legend="Iris">
                    <legend class="hidden">Iris</legend>
                    <img src="images/160_iris_purple_121549009.jpg" alt="" height="160" width="160">
                    <p>$2.00 per stem</p>
                    <div class="color invisible">
                        <label>Dummy</label>
                        <select>
                            <option selected>Dummy</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyI">Quantity</label>
                        <input value="0" name="qty_Iris" id="qtyI" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Iris" value="2">
                    <input type="hidden" name="image_Iris" value="160_iris_purple_121549009">
                </fieldset>
                <fieldset class="bab_item" id="bab-PL" data-legend="Peruvian Lily">
                    <legend class="hidden">Peruvian Lily</legend>
                    <img src="images/160_alstromeria_87519333.jpg" alt="" height="160" width="160">
                    <p>$2.00 per stem</p>
                    <div class="color invisible">
                        <label>Dummy</label>
                        <select>
                            <option selected>Dummy</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyPL">Quantity</label>
                        <input value="0" name="qty_Peruvian_Lilies" id="qtyPL" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Peruvian_Lilies" value="2">
                    <input type="hidden" name="image_Peruvian_Lilies" value="160_alstromeria_87519333">
                </fieldset>
                <fieldset class="bab_item" id="bab-DN" data-legend="Daffodils (Narcissus)">
                    <legend class="hidden">Daffodils (Narcissus)</legend>
                    <img src="images/160_daffodil_122442732.jpg" alt="" height="160" width="160">
                    <p>$2.00 per stem</p>
                    <div class="color invisible">
                        <label>Dummy</label>
                        <select>
                            <option selected>Dummy</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyDN">Quantity</label>
                        <input value="0" name="qty_Daffodils_(Narcissus)" id="qtyDN" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Daffodils_(Narcissus)" value="2">
                    <input type="hidden" name="image_Daffodils_(Narcissus)" value="160_daffodil_122442732">
                </fieldset>
                <fieldset class="bab_item" id="bab-GD" data-legend="Gerbera Daisies">
                    <legend class="hidden">Gerbera Daisies</legend>
                    <img src="images/160_gerbera_purple_146798391.jpg" alt="" height="160" width="160">
                    <p>$3.00 per stem</p>
                    <div class="color">
                        <label for="colorGD">Color</label>
                        <!-- Purple, Orange, Pink, Yellow -->
                        <select name="color_Gerbera_Daisies" id="colorGD">
                            <option selected value="160_gerbera_purple_146798391">Purple</option>
                            <option value="160_gerbera_orange_146798391">Orange</option>
                            <option value="160_gerbera_pink_146798391">Pink</option>
                            <option value="160_gerbera_yellow_146798391">Yellow</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyGD">Quantity</label>
                        <input value="0" name="qty_Gerbera_Daisies" id="qtyGD" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Gerbera_Daisies" value="3">
                </fieldset>
                <fieldset class="bab_item" id="bab-DO" data-legend="Dendrobium Orchid">
                    <legend class="hidden">Dendrobium Orchid</legend>
                    <img src="images/160_dendrobium2_152158743.jpg" alt="" height="160" width="160">
                    <p>$4.00 per stem</p>
                    <div class="color invisible">
                        <label>Dummy</label>
                        <select>
                            <option selected>Dummy</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyDO">Quantity</label>
                        <input value="0" name="qty_Dendrobium_Orchid" id="qtyDO" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Dendrobium_Orchid" value="4">
                    <input type="hidden" name="image_Dendrobium_Orchid" value="160_dendrobium2_152158743">
                </fieldset>
                <fieldset class="bab_item" id="bab-R" data-legend="Roses">
                    <legend class="hidden">Roses</legend>
                    <img src="images/160_rose_pink_112277154.jpg" alt="" height="160" width="160">
                    <p>$3.00 per stem</p>
                    <div class="color">
                        <label for="colorR">Color</label>
                        <select name="color_Roses" id="colorR">
                            <option selected value="160_rose_pink_112277154">Pink</option>
                            <option value="160_rose_peach_89153628">Peach</option>
                            <option value="160_rose_white_100291489">White</option>
                            <option value="160_rose_yellow_187406sdc">Yellow</option>
                            <option value="160_rose_red_92974998">Red</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyR">Quantity</label>
                        <input value="0" name="qty_Roses" id="qtyR" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Roses" value="3">
                </fieldset>
                <fieldset class="bab_item" id="bab-L" data-legend="Lilies">
                    <legend class="hidden">Lilies</legend>
                    <img src="images/160_lily_pink_160102549.jpg" alt="" height="160" width="160">
                    <p>$3.00 per stem</p>
                    <div class="color">
                        <label for="colorL">Color</label>
                        <select name="color_Lilies" id="colorL">
                            <option selected value="160_lily_pink_160102549">Pink</option>
                            <option value="160_lily_red_100751706">Red</option>
                            <option value="160_lily_white_118344285">White</option>
                            <option value="160_lily_yellow_153572772">Yellow</option>
                            <option value="160_lily_orange_134442518">Orange</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyL">Quantity</label>
                        <input value="0" name="qty_Lilies" id="qtyL" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Lilies" value="3">
                </fieldset>
                <fieldset class="bab_item" id="bab-T" data-legend="Tulips">
                    <legend class="hidden">Tulips</legend>
                    <img src="images/160_tulip_purple_160910481.jpg" alt="" height="160" width="160">
                    <p>$2.00 per stem</p>
                    <div class="color">
                        <label for="colorT">Color</label>
                        <select name="color_Tulips" id="colorT">
                            <option selected value="160_tulip_purple_160910481">Purple</option>
                            <option value="160_tulip_yellow_166252946">Yellow</option>
                            <option value="160_tulip_golden_155462715">Golden</option>
                            <option value="160_tulip_pink_140450162">Pink</option>
                            <option value="160_tulip_red_91047474">Red</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyT">Quantity</label>
                        <input value="0" name="qty_Tulips" id="qtyT" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Tulips" value="2">
                </fieldset>
                <fieldset class="bab_item" id="bab-LC" data-legend="Lilac">
                    <legend class="hidden">Lilac</legend>
                    <img src="images/160_lilac_157045915.jpg" alt="" height="160" width="160">
                    <p>$4.00 per stem</p>
                    <div class="color invisible">
                        <label>Dummy</label>
                        <select>
                            <option selected>Dummy</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyLC">Quantity</label>
                        <input value="0" name="qty_Lilac" id="qtyLC" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Lilac" value="4">
                    <input type="hidden" name="image_Lilac" value="160_lilac_157045915">
                </fieldset>
                <fieldset class="bab_item" id="bab-D" data-legend="Daisies">
                    <legend class="hidden">Daisies</legend>
                    <img src="images/160_daisy_white_159207232.jpg" alt="" height="160" width="160">
                    <p>$1.00 per stem</p>
                    <div class="color invisible">
                        <label>Dummy</label>
                        <select>
                            <option selected>Dummy</option>
                        </select>
                    </div>
                    <div class="qty">
                        <label for="qtyD">Quantity</label>
                        <input value="0" name="qty_Daisies" id="qtyD" class="text" type="number">
                    </div>
                    <input type="hidden" name="cost_Daisies" value="1">
                    <input type="hidden" name="image_Daisies" value="160_daisy_white_159207232">
                </fieldset>
                <div id="totals">
                    <h3>Your Bouquet</h3>
                    <a id="update_price" href="#update-price">Update Price</a> <span id="total_flowers">0</span> <span id="total_cost">0</span> <span>
                    <input class="btn checkout" value="Add to Basket" type="submit" name="bouquet">
                    </span> </div>
            </form>
        </div>
    </div>
<?php include('includes/footer.php') ?>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
