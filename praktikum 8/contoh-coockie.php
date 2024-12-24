<?php
    $value = "Ini Coockie Pertama";
    if(!isset($_COOKIE['first_coockie'])){
        setcookie("first_coockie", $value, time() + 3600 * 24 * 13);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coockies</title>
</head>
<body>
    <h1>Implementasi Coockie</h1>
    <?php if(isset($_COOKIE['first_coockie'])):?>
        <p><?php echo $_COOKIE['first_coockie'];?></p>
    <?php else:?>
        <p>Coockie belum di-set</p>
        <?php endif;?>    

    \\menghapus coockie
    <?php 
        if(isset($_COOKIE['first_coockie'])){
            setcookie('first_coockie');
        }
    ?>
</body>
</html>