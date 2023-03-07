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
</head>
<body>
    <div class="formdiv">
        <form action="" method="post">
            <input type="text" name="inp"><br>
            <button type="submit" name="enc">ENCRYPT</button> 
            <button type="submit" name="dec">DECRYPT</button> 
        </form>
    </div>
</body>
</html>