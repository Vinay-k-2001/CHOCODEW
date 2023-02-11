<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Menu</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Times New Roman', Times, serif ;}
body{
            background-color: #D9D4D3;
        }
</style>
<body>
<div id="home" class="w3-content" style="width: 60%;">
<div id="menu" class="w3-container w3-black w3-xlarge w3-padding-64" style="width: 90%;">
<h1 class="w3-center  w3-padding-20" >MENU</h1>
<div class="w3-row w3-center w3-border w3-border-dark-grey">
    <a href="MAIN MENU PHP.php"><div class="w3-third w3-padding-medium">cake pastry</div></a>
    <a href="4 MENU PHP.php"><div class="w3-third w3-padding-medium ">milkshakes</div></a>
    <a href="7 MENU PHP.php"><div class="w3-third w3-padding-medium ">icecreams</div></a>
    <a href="2 MENU PHP.php"><div class="w3-third w3-padding-medium ">Hersheys</div></a>
    <a href="5 MENU PHP.php"><div class="w3-third w3-padding-medium ">Desserts</div></a>
    <a href="8 MENU PHP.php"><div class="w3-third w3-padding-medium ">Beverages</div></a>
    <a href="3 MENU PHP.php"><div class="w3-third w3-padding-medium ">Corn snacks</div></a>
    <a href="6 MENU PHP.php"><div class="w3-third w3-padding-medium ">Burgers</div></a>
    <a href="9 MENU PHP.php"><div class="w3-third w3-padding-medium ">Mocktails</div></a>
</div>
<form action="" method="POST">
<div id="pizza" class="w3-container w3-white w3-padding-32" >
<?php
$image_url='8.jpg';
?>
<img src="<?php echo $image_url;?>" style="width: 30%; margin-left :30%;">
<h3><input type="checkbox" name="h1" value=110><b>    Apple fresh fruit juice</b> <span class="w3-right w3-tag w3-dark-grey w3-round">110/-</span></h1>
<hr>
<h3><input type="checkbox" name="h2" value=70><b>    Badam milk </b> <span class="w3-right w3-tag w3-dark-grey w3-round">70/-</span></h1>
<hr>
<h3><input type="checkbox" name="h3" value=90><b>     Banana fresh fruit juice </b> <span class="w3-right w3-tag w3-dark-grey w3-round">90/-</span></h1>
<hr>
<h3><input type="checkbox" name="h4" value=50><b>     Buttermilk</b> <span class="w3-right w3-tag w3-dark-grey w3-round">50/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="h5" value=170><b>     Dry fruit juice</b> <span class="w3-right w3-tag w3-dark-grey w3-round">170/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="h6" value=200><b>     Falooda  </b> <span class="w3-right w3-tag w3-dark-grey w3-round">200/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="h7" value=100><b>     Grapes fresh fruit juice</b> <span class="w3-right w3-tag w3-dark-grey w3-round">100/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="h8" value=60><b>     Lassi </b> <span class="w3-right w3-tag w3-dark-grey w3-round">60/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="h9" value=110><b>     Mango fresh fruit juice</b> <span class="w3-right w3-tag w3-dark-grey w3-round">110/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="h10" value=100><b>     Pineapple fruit juice </b> <span class="w3-right w3-tag w3-dark-grey w3-round">100/-</span></h1>
<hr>
<input type="submit" name='s' style="margin-left: 40%" value="add to bill">
<input type="submit" name='r' style="margin-left: 40%" value="reset">
</div>
</form>

<?php



session_start();
if(isset($_POST['r'])){
    $_SESSION['price'] = 0;
}

if(isset($_SESSION['price'])){
    $price1 = $_SESSION['price'];
}

else{
    $_SESSION['price'] = 0;
}

if (isset($_POST['h1'])) {
    $price1 = $price1 + (int) $_POST['h1'];
}

    if (isset($_POST['h2'])) {
        $price1 = $price1 + (int) $_POST['h2'];
    
}
if (isset($_POST['h3'])) {
    $price1 = $price1 + (int) $_POST['h3'];
}
if (isset($_POST['h4'])) {
    $price1 = $price1 + (int) $_POST['h4'];
}

if (isset($_POST['h5'])) {
    $price1 = $price1 + (int) $_POST['h5'];
}

if (isset($_POST['h6'])) {
    $price1 = $price1 + (int) $_POST['h6'];
}

if (isset($_POST['h7'])) {
    $price1 = $price1 + (int) $_POST['h7'];
}

if (isset($_POST['h8'])) {
    $price1 = $price1 + (int) $_POST['h8'];
}
if (isset($_POST['h9'])) {
    $price1 = $price1 + (int) $_POST['h9'];
}
if (isset($_POST['h10'])) {
    $price1 = $price1 + (int) $_POST['h10'];
}

$_SESSION['price'] = $price1;
echo '<br>';
echo '<br>';
echo '<br>';
echo "Total amount is " ,$price1;

?>
</body>
</html>
