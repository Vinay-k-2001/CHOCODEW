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
ul {
                list-style-type: none;              
                padding: 0;
                overflow: hidden;
                background-color: #EC9A88;
                text-align: center;
                border-radius: 40em;
            }

            li {
                align-items: center;
                float: left;
                margin-left: 30px;
            }

            li a {
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                align-items: center;
                margin-left: 100px;
            }

            li a:hover {
                background-color: white;
            }

</style>
<body>
<ul class="nav">
                
                <li><a class="active" href="HOME MAIN PHP.php">HOME</a></li>
                <li><a href="MAIN MENU PHP.php">MENU</a></li>
                <li><a href="BOOK A TABLE PHP.php">BOOK A TABLE</a></li>
                <li><a href="CONTACT US PHP.php">CONTACT US</a></li>
                <li><a href="BILL PHP.php">BILL</a></li>
                
            </ul>

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
<form action=""  method="POST">
<div id="pizza" class="w3-container w3-white w3-padding-32" >
<?php
$image_url='1.jpg';
?>
<img src="<?php echo $image_url;?>" style="width: 30%; margin-left :30%;">
<h3><input type="checkbox" name="a1" value=450><b>    Butterscotch pastry</b> <span class="w3-right w3-tag w3-dark-grey w3-round">450/-</span></h1>
<hr>
<h3><input type="checkbox" name="a2" value=570><b>    Chocolate pastry</b> <span class="w3-right w3-tag w3-dark-grey w3-round">570/-</span></h1>
<hr>
<h3><input type="checkbox" name="a3" value=450><b>     Pineapple pastry </b> <span class="w3-right w3-tag w3-dark-grey w3-round">450/-</span></h1>
<hr>
<h3><input type="checkbox" name="a4" value=550><b>     Red velvet</b> <span class="w3-right w3-tag w3-dark-grey w3-round">550/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="a5" value=450><b>     Strawberry pastry</b> <span class="w3-right w3-tag w3-dark-grey w3-round">450/-</span></h1>
<hr>
<hr>
<h3><input type="checkbox" name="a6" value=200><b>     Standard cake </b> <span class="w3-right w3-tag w3-dark-grey w3-round">200/-</span></h1>
<hr>
<input type="submit" name='s' style="margin-left: 40%" value="add to bill">
<input type="submit" name='r' style="margin-left: 40%" value="reset">
</div>
</form>
<br>


<?php

$price = 0;
$price1 = 0;

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



if (isset($_POST['a1'])) {
    $price1 = $price1 + (int) $_POST['a1'];
}
    if (isset($_POST['a2'])) {
        $price1 = $price1 + (int) $_POST['a2'];
    
}
if (isset($_POST['a3'])) {
    $price1 = $price1 + (int) $_POST['a3'];
}
if (isset($_POST['a4'])) {
    $price1 = $price1 + (int) $_POST['a4'];
}
    if (isset($_POST['a5'])) {
        $price1 = $price1 + (int) $_POST['a5'];
    
}
if (isset($_POST['a6'])) {
    $price1 = $price1 + (int) $_POST['a6'];
}


$_SESSION['price'] = $price1;
echo '<br>';
echo '<br>';
echo '<br>';
echo "Total amount is " ,$price1;

?>
</body>
</html>
