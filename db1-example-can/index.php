<?php

 require_once("./db.php");
 $motor=$db->query("select * from motorbikes")->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .profile { width: 80px;}
            table { margin: 0 auto; border-collapse: collapse; width: 100%;}
            td { padding: 5px; border: 1px solid #666;}
            h1 { text-align: center;}
            tr:first-of-type { background: #ffcc00;}
        </style>

    <link rel="stylesheet" href="./main.css">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=98774" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
   ">
</head>
<body>


    




<section class="walpaper">
        <div class="text-container">
          <h1>Sahibinden-motor</h1>
          <p>Motorlu Hayatın Anahtarı Burada! </p>
        </div>
        
</section>
      


<section class="logos">
<div class="slider">
  <div class="slide-track">
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/harley-davidson-7-logo-svg-vector.svg" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/bmw-logo-logo-png-transparent.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/honda-11-logo-svg-vector.svg" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/kawasaki-5-logo-svg-vector.svg" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/harley-davidson-7-logo-svg-vector.svg" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/yamaha-12-logo-png-transparent.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/bmw-logo-logo-png-transparent.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/suzuki-12-logo-svg-vector.svg" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/ktm-logo-black-and-white.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/kawasaki-5-logo-svg-vector.svg" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/suzuki-12-logo-svg-vector.svg" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/ktm-logo-black-and-white.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
    </div>
    <div class="slide">
      <img src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="">
    </div>
  </div>
</div>

</section>


  
    <table>
        <tr>
            <th></th>
            <th>Brand</th>
            <th>Model</th>
            <th>Title</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Status</th>
        </tr>

        <?php foreach($motor as $m) : ?>

            <tr>
                <td>
                    <a href="detail.php?id=<?=$m["id"]?>">
                        <img src="./images/<?=$m["profile"]?>" class="profile">
                    </a>
                </td>
                <td><?=$m["brand"]?></td>
                <td><?=$m["model"]?></td>
                <td><?=$m["title"]?></td>
                <td><?=$m["price"] ?> ₺</td>
                <?php
                 $discount =  preg_match('/^[A-Z]{2}\d{3}-\d{2}$/', $m['coupon']) ? "<b>YES</b>" : "NO" ; 

                $status=$m["status"] ? "Sold" : "ON SALE";

                ?>
                <td><?=$discount?></td>
                <td><?=$status?></td>
            </tr>



         <?php endforeach; ?>


    </table>
    
            <!-- FOOTER PART -->
            <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Değirmen Yolu Cad. No:28 Asia OfisPark </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>0 850 222 44 44</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>yardim@sahibinden.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <!-- <a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a> -->
                                <a href=""></a>
                            </div>
                            <div class="footer-text">
                                <p>İstekleriniz, önerileriniz ve şikayetleriniz için bize mail atabilirsiniz!</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                            <p>İstekleriniz, önerileriniz ve şikayetleriniz için bize mail atabilirsiniz!</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="">Can Daşdemir</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>