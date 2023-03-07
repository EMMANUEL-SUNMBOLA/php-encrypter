<?php

    if((isset($_POST["enc"])) && ($_SERVER["REQUEST_METHOD"] == "POST")){

        $out = "";
        // $inp = readline("input for encoding in ascii chr...");
        $inp = $_POST["inp"];
        if(!empty($inp)){
            for ($i=0; $i < strlen($inp); $i++) { 
                $lin = substr($inp,$i);
                $out .= ord($lin) . chr(0+rand(0,225));
            }
            echo $out;
        }else{
            echo "don't leave input empty you doughnut";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            outline: none;
        }
        body{
            color: black;
        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .formdiv{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;

        }
        .formdiv form{
            box-shadow:
        2.8px 2.8px 2.2px rgba(0, 0, 0, 0.02),
        6.7px 6.7px 5.3px rgba(0, 0, 0, 0.028),
        12.5px 12.5px 10px rgba(0, 0, 0, 0.035),
        22.3px 22.3px 17.9px rgba(0, 0, 0, 0.042),
        41.8px 41.8px 33.4px rgba(0, 0, 0, 0.05),
        100px 100px 80px rgba(0, 0, 0, 0.07);
        width: 100%;
            width: 80%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }
    </style>
</head>
<body>
    <section class="container">
        <div class="formdiv">
            <form action="" method="post">
                <input type="text" name="inp"><br>
                <button type="submit" name="enc">ENCRYPT</button> 
                <button type="submit" name="dec">DECRYPT</button> 
            </form>
        </div>
    </section>
</body>
</html>