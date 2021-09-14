<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time check</title>
</head>
<body>
<?php
    $time = date("H");
    if($time < "12"){
        echo "Good Morning!";
    }
    else{
        echo "Good Afternoon!";
    }
    
?>
</body>
</html>