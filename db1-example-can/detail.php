<?php

require_once 'db.php';
$id=$_GET["id"];
$photo_index = isset( $_GET["photo"]) ? $_GET["photo"] : 0 ;


try{
    $stmt=$db->prepare("select * from motorbikes where id=?");
    $stmt->execute([$id]);
    //tek bir şeyi çektik
    $bike=$stmt->fetch(); 

    $stmt=$db->prepare("select * from motorbike_photo where bike_id=?");
    $stmt->execute([$id]);
    $photos=$stmt->fetchAll(); 
    // var_dump($photos);



}catch(Exception $ex){
    echo "Wrong Id";
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
            #container { margin: 30px auto; padding: 10px;}
            td { border-bottom:1px solid #666; padding: 10px;}
            .profile { width: 400px; }
            .thumbnail { width: 90px; margin-right: 15px;}
            table { border-collapse: collapse; }
            td:first-child { font-weight: bold;}
            .border { border:2px solid blue; }
            .center { text-align: center;}
            
        </style>

<link href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=98774" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
">
</head>
<body>


<table id="container">
    <tr>
    <td>

        <h2> <?= $bike["title"] ?></h2> 
    </td>  
    </tr>
    <tr>
        <td>
          <img src="./images/<?= $photos[$photo_index]["path"] ?>" class="profile"> 
        </td>
        <td>
            <h2> <?= $bike["price"] ?> ₺</h2>
            <table>
               <tr>
                <td>Brand</td>
                <td><?= $bike["brand"] ?> </td>
               </tr>
               <tr>
               <td>Model</td>
                <td><?= $bike["model"] ?></td>
               </tr>
               <tr>
               <td>Year</td>
                <td><?= $bike["year"] ?></td>

               </tr>
               <tr>
               <td>Km</td>
                <td><?= $bike["km"] ?></td>

               </tr>
               <tr>
               <td>Color</td>
                <td><?= $bike["color"] ?></td>

               </tr>
               <tr>
               <td>Engine</td>
                <td><?= $bike["engine"] ?></td>

               </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <?php
                $i=0;
                foreach($photos as $p){
                    if($i == $photo_index){
                        echo "<a href='?$id&photo=$i'>
                        <img src='./images/{$p['path']}' class='thumbnail border'>
                        </a> ";
                    }else {
                        echo "<a href='?id=$id&photo=$i'><img src='images/{$p['path']}' class='thumbnail'></a>" ;
                        }
                        $i++;
                }

            ?>
        </td>
    </tr>

</table>

    
</body>
</html>