<!DOCTYPE html>
<html>
    <title></title>
    <style>
        h1{
            font-family: 'Times New Roman', Times, serif ;
            font-weight: 400;
            font-size: 48px;
            line-height: 1.2;
            text-align: center;
            padding: 0;
            overflow: hidden;
            background-color: #EC9A88;
            border-radius: 40em;
                

        }

        p{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
            line-height: 1.2;
            text-align: center;
            
        }

        label {
        color: #B4886B;
        font-weight: bold;
        font-size: 18px;
        display: block;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
        line-height: 1.2;
        text-align: center;
        }

        input{
            font-size: 18px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
            line-height: 1.2;
            text-align: center;
            border-radius: 40em;
        }

        label:after { content: ": " }

        body{
            background-color: #D9D4D3;
        }

        button {
            position: relative;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            border-radius: 40em;
            width: 8em;
            height: 3em;
            z-index: 1;
            background-image: linear-gradient(to right, #0052b0, #b340b3);
            overflow: hidden;
            border: none;
            
        }

        button .text {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        line-height: 3em;
        border-radius: 40em;
        border: none;
        background: linear-gradient(rgba(255, 255, 255, 0.473), rgba(150, 150, 150, 0.25));
        z-index: 1;
        }

        button:hover {
        background:linear-gradient(to right,rgb(173, 197, 125), rgb(76, 170, 189), rgb(206, 42, 187));
        }


    </style>
    <body>
        <?php
        $price4 = 0;
        session_start();
        if(isset($_SESSION['price'])){
            $price4 = $_SESSION['price'];
        }
        if(isset($_POST['r'])){
            $price4 = 0;
        }
        ?>
        <h1><strong>FINAL BILL</strong></h1>
        <p>Your final bill payment according to items you selected in the <strong>MENU </strong>and <strong>RESERVING A TABLE </strong>is:<?php
        
        echo $price4;
        ?> </p>
        <br>
        <p>For <strong>ONLINE PAYMENTS</strong> fill the followings correctly for payment procedure.</p>
        <br>
        <form method="POST">
            <p>
                <label for="card"><strong>CARD NO </strong></label>
                <input type="text" name="card" id="card">
            </p>
            <p>
                <label for="card_dt"><strong>CARD DATE </strong></label>
                <input type="text" name="card_dt" id="card_dt">
            </p>
            <p>
                <label for="card_cvv"><strong>CARD CVV </strong></label>
                <input type="text" name="card_cvv" id="card_cvv">
            </p>
            <br>
            <p><strong>OR</strong></p>
            <br>
            <p>
                <label for="upi"><strong>UPI ID </strong></label>
                <input type="text" name="upi" id="upi">
            </p>
            
            <br>
            <input style="margin-left:48%;"value="pay" type="submit"></button>
            <br>
            <br>
            <input style="margin-left:48%;" type="submit" name='r' style="margin-left: 40%" value="reset">
        </form>
        <br>
        
        <button style="margin-left:45%;" onclick='location.href="HOME MAIN PHP.html"'><span class="text">HOME</span></button>
    </body>
</html>