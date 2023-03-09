<?php
    $err = [];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            if((isset($_POST["enc"]))){
                $out = "";
                $inp = $_POST["inp"];
                if(!empty($inp)){
                    for ($i=0; $i < (strlen($inp)+1); $i++) { 
                        $lin = substr($inp,$i);
                        $out .= ord($lin) . 254;
                    }
                    $out .= "24";
                }else{
                    $err[] = "don't leave input empty you doughnut";
                }
            }
            elseif((isset($_POST["dec"]))){
                $in = "";
                $out = $_POST["out"];
                if(!empty($out)){
                        $line = explode("254",$out);
                       
                        
                        // $err[] = $line;
                        foreach($line as $cellary){
                            $in = chr($cellary);
                        }
                }else{
                    $err[] = "fill input to be decrypted";
                }
            }else{
                $err[] = "something wen't wrong";
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
            flex-direction: column;
        }
        .formdiv{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
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
        .container p{
            border: 1px solid ;
            padding: 20px 10px;
        }
        input[id="myInput"]{
            margin-top: 2%;
        }
        input{
            width: 50%;
            text-align: center;
            height: 40px;
        }
        .copy{
            margin-top: 20px;
            width: 100px;
            height: 40px;
            color: black;
            background-color: #02af77;
            text-transform: uppercase;
            font-size: 20px;
            border-radius: 5px;
            transition: background-color .3s ease-in-out;
            transition: border .3s ease-in-out;
        }
        .copy:hover{
            background-color: white;
            color: #02af77;
            border: 1px solid #02af77;
        }
    </style>
</head>
<body>
    <section class="container">
        <div class="formdiv">
            <form action="" method="post">
                <input type="text" name="inp" placeholder="INPUT FOR ENCRYPTION">
                <button type="submit" name="enc"  class="copy">ENCRYPT</button> 
            </form>
            <input type="text" id="myInput" value="<?php if(isset($_POST["enc"])){echo $out;}?>" placeholder="ENCRYPTED OUTPUT">
            <button onclick="copy()" class="copy">copy</button>
            <form action="" method="post">
                <input type="text" name="out" placeholder="INPUT FOR DECRYPTION">
                <button  class="copy" name="dec">DECRYPT</button>
            </form>
            <input type="text" id="myOutput" value="<?php if(isset($_POST["dec"])){echo $in;}?>" placeholder="DECRYPTED OUTPUT">
            <button onclick="copy2()" class="copy">copy</button>
        </div>
        <div>
            <?php
                // if((isset($_POST["dec"])) || (isset($_POST["enc"]))){
                //     if(isset($line)){
                //         foreach($line as $cellary){
                //             // echo $cellary;
                //             echo chr($cellary) ;
                //         }
                //     }
                // }
            ?>
        </div>
    </section>
    <script>
        function copy() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        alert("Copied the text: " + copyText.value);
    }
        function copy2() {
        var copyText = document.getElementById("myOutput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        alert("Copied the text: " + copyText.value);
    }
    </script>
</body>
</html>