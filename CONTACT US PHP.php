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

        }

        p{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
            line-height: 1.2;
            text-align: center;
            
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

        div{
                border: 15px;
                padding: 50px;
                margin: 20px;
            }
        .centered {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            
        }        
        body{
            background-color: #D9D4D3;
        }



    </style>
    <body>
        
        
        <h1>           
            <img src="WALLPAPER2.jpg" style="width:45% ;opacity: 50%;">
            <div class="centered">
                <strong>CONTACT US FOR MORE DETAILS</strong>
            </div>
        </h1>

        <p><strong>ADDRESS: </strong>JP Road, Bhimavaram, Andhra Pradesh-534202</p>
        <p><strong>PHONE: 88862 33333</strong></p>
        <p><strong>OPEN HOURS: </strong>10:00AM - 11:00PM</p>
        <p><strong>SERVICE OPTIONS: </strong>Dine-in · Drive-through · No-contact delivery</p>
        <p>If you want to know more about our bakery or the team we have working at our bakery, let us know by leaving messages to our <strong>INSTAGRAM</strong></p>
        <br>
        <button style="margin-left:45%;" onclick="window.location.href='https://www.instagram.com/chocodew_bvrm/?igshid=OGQ2MjdiOTE%3D';"> <span class="text">INSTAGRAM</span></button>
        <br>
        <br>
        <br>
        <button style="margin-left:45%;" onclick='location.href="HOME MAIN PHP.php"'><span class="text">HOME</span></button>
    
    </body>
</html>