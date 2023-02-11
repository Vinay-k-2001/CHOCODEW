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
$image_url='5.jpg';
?>
<img src="<?php echo $image_url;?>" style="width: 30%; margin-left :30%;">
<h3><input type="checkbox" name="e1" value=50><b>    Basanthi</b> <span class="w3-right w3-tag w3-dark-grey w3-round">50/-</span></h1>
<hr>
<h3><input type="checkbox" name="e2" value=50><b>    Brownie</b> <span class="w3-right w3-tag w3-dark-grey w3-round">50/-</span></h1>
<hr>
<h3><input type="checkbox" name="e3" value=60><b>     Choco lava</b> <span class="w3-right w3-tag w3-dark-grey w3-round">60/-</span></h1>
<hr>
<h3><input type="checkbox" name="e4" value=60><b>     Donut</b> <span class="w3-right w3-tag w3-dark-grey w3-round">60/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="e5" value=60><b>     Rasamalai</b> <span class="w3-right w3-tag w3-dark-grey w3-round">60/-</span></h1>
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

if (isset($_POST['e1'])) {
    $price1 = $price1 + (int) $_POST['e1'];
}
    if (isset($_POST['e2'])) {
        $price1 = $price1 + (int) $_POST['e2'];
    
}
if (isset($_POST['e3'])) {
    $price1 = $price1 + (int) $_POST['e3'];
}
if (isset($_POST['e4'])) {
    $price1 = $price1 + (int) $_POST['e4'];
}

if (isset($_POST['e5'])) {
    $price1 = $price1 + (int) $_POST['e5'];
}

$_SESSION['price'] = $price1;
echo '<br>';
echo '<br>';
echo '<br>';
echo "Total amount is " ,$price1;

?>
</body>
</html>
