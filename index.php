<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</head>
<?php include("module.php"); ?>
<body>
    <div class="box">
    <?php 
    for($i=0;$i<100;$i++){
        $pixel = new Pixel($i,"Name".$i);
        $pixel->make();
    }
    ?>
    <script>
        $("span").on("click",function(){
            var id = $(this).attr("id");
            $.post({
                url : "detail.php",
                data : {
                    pixelId:id,
                }
            });
            $.get({
                url : "detail.php",
            });
        });
    </script>
    </div>
    
</body>
</html>