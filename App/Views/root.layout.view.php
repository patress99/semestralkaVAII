<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zvarart</title>
    <link rel="stylesheet" href="public/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
    <div class="d-flex flex-grow-1">
        <nav class="navbar navbar-dark transparent-dark">
            <a class="navbar-brand navbar-dark transparent-dark" href="?c=home">
                <img src="https://www.flaticon.com/premium-icon/icons/svg/2920/2920665.svg" width="30" height="30" class="d-inline-block align-top" alt="">

            </a>
        </nav>


        <div class="w-100 text-right">
            <button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="?c=home&a=contact" class="nav-link m-2 menu-item">Kontaktujte nás</a>
            </li>
            <li class="nav-item">
                <a href="?c=gallery" class="nav-link m-2 menu-item">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="?c=pricelist" class="nav-link m-2 menu-item">Cenník</a>
            </li>
        </ul>
    </div>
</nav>


<div class="web-content">
    <?= $contentHTML ?>
</div>



<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h3>Stay in touch</h3>
                    <div class="footer-widget-content">
                        <a href="mailto:sales@example.com" class="contact-link">sales@example.com</a>
                        <a href="mailto:support@example.com" class="contact-link red"> support@example.com </a>
                        <a href="tel:0121234" class="contact-link">(123) 456-789</a>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/BranyPlotyZabradliaSchody"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h3>Latest Events</h3>
                    <div class="footer-widget-content">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="http://placehold.it/60x60" alt="..."></a>
                            </div>
                            <div class="media-body">
                                <p><a href="#">vulputate velit esse consequat. </a></p>
                                <span>September 30, 2016 </span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#."><img class="media-object" src="http://placehold.it/60x60" alt="..."></a>
                            </div>
                            <div class="media-body">
                                <p><a href="#">vulputate velit esse consequat. </a></p>
                                <span>September 30, 2016 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h3>Opening Hour</h3>
                    <div class="footer-widget-content">
                        <div class="open-time ">
                            <ul class="opening-time">
                                <li><span><i class="fa fa-times"></i></span><p class="clock-time"><strong>monday :</strong> closed</p>
                                </li>
                                <li><span><i class="fa fa-check"></i></span><p><strong>tue-fri :</strong> 8am - 12am</p></li>
                                <li><span><i class="fa fa-check"></i></span><p><strong>sat-sun :</strong> 7am - 1am</p></li>
                                <li><span><i class="fa fa-check"></i></span><p><strong>holidays :</strong> 12pm-12am</p></li>
                            </ul>
                        </div>
                    </div>
                </div></div>

            <div class="col-sm-3">
                <div class="footer-widget">
                    <h3>Latest Events</h3>
                    <div class="footer-widget-content">
                        <div class="images-gellary">
                            <ul>
                                <li><a href="#"><img src="http://placehold.it/85x85" alt="Instagram 01"></a></li>
                                <li><a href="#"><img src="http://placehold.it/85x85" alt="Instagram 02"></a></li>
                                <li><a href="#"><img src="http://placehold.it/85x85" alt="Instagram 03"></a></li>
                                <li><a href="#"><img src="http://placehold.it/85x85" alt="Instagram 04"></a></li>
                                <li><a href="#"><img src="http://placehold.it/85x85" alt="Instagram 05"></a></li>
                                <li><a href="#"><img src="http://placehold.it/85x85" alt="Instagram 06"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



</body>

</html>