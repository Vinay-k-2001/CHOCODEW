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

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        input[type=checkbox] {
            vertical-align: middle;
            position: relative;
            bottom: 1px;
        }

    </style>
    <body>
        <?php
        
        $price2 = 0;
       
        session_start();
        if(isset($_SESSION['price'])){
            $price2 = $_SESSION['price'];
        }
        if (isset($_POST['s'])) {
            $price2 = $_SESSION['price'] + 500;
            
            
            
        }
        ?>
        <h1>            
            <strong>BOOK A TABLE</strong>            
        </h1>
        <br>
        <img src="BOOK A TABLE.jpg" style="width:45% ">
        <br>
        <p>Please fill the followings accurately to enable us serve you better!..<strong>Welcome!</strong></p>
        <br>
        <p><strong>NOTE: </strong>RESERVING YOUR TABLE <strong>JUST BE DONE A DAY BEFORE</strong></p>
        <br>

        <form method="POST">
        <p>
            <label for="name"><strong>FULL NAME</strong></label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="email"><strong>EMAIL</strong></label>
            <input type="text" name="email" id="email">
            
        </p>
        <p>
            <label for="phone"><strong>PHONE</strong></label>
            <input type="text" name="phone" id="phone">
       </p>
       <p>
            <label for="people"><strong>NO.OF PEOPLE</strong></label>
            <input type="text" name="people" id="people">
        </p>
        <p>
            <label for="requests"><strong>ANY SPECIAL REQUESTS</strong></label>
            <input type="text" name="requests" id="requests">
        </p>
        <p>
            <label for="time"><strong>VISITING TIME</strong></label>
            <input type="text" name="time" id="time">
        </p>
        <br>
            <label for="time1">
            <input type="checkbox" id="time1" name="AM" value="AM">AM</label>
            <label for="time2"> 
            <input type="checkbox" id="time2" name="PM" value="PM">PM</label><br>
            <input style="margin-left:47%;" type="submit" name='s' style="margin-left: 40%" value="add to bill"><br><br>
            <input style="margin-left:47%;" type="submit" name='r' style="margin-left: 40%" value="reset"><br><br>
        <br>
        <br>
        </form>
        <button style="margin-left:45%;" onclick='location.href="HOME MAIN PHP.php"'><span class="text">HOME</span></button>
    
    <?php
    
    
    $_SESSION['price'] = $price2;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "Total amount is " ,$price2;
    
    ?>    
    </body>
</html>

