<?php

include("login.php");
include("export.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
<div class="navbar-links-slide">
        <div class="sidebar_close">
            <i class="fas fa-times"></i>
        </div>
        <img src="./img/logo-light@2x.png" alt="Sandbox" width="130">
                            <ul>
                                <li><a href="#">what we do?</a></li>
                                <li><a href="#">choose us?</a></li>
                                <li><a href="#">solutions</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">who are we?</a></li>
                                <li><a href="#">who are we?</a></li>
                            </ul>
</div>
<div class="filter_background"></div>
<div class="wrapper_Container">
            <!-- ================== HEADER  =============== -->
            <header>
                <nav class="navbar">
                    <div class="logo"><a href="index.php"><img src="./img/logo-light@2x.png" alt="Sandbox" width="130"></a></div>
                    <div class="navbar_left_item">
                        <div class="navbar-links">
                            <ul>
                                <li><a href="#" class="nav_li_a">what we do?</a></li>
                                <li><a href="#" class="nav_li_a">choose us?</a></li>
                                <li><a href="#" class="nav_li_a">solutions</a></li>
                                <li><a href="#" class="nav_li_a">blog</a></li>
                                <li><a href="#" class="nav_li_a">who are we?</a></li>
                                <li><a href="#" class="nav_li_a">who are we?</a></li>
                            </ul>
                        </div>
                        <div class="navbar-link-btn">
                            <a href="#" class="Btn_top_header" onclick = "fun();">Free Trial</a>
                            <div class="nav-menu">
                                <div class="hamburger">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        
            <section class="first_section_wrapper">
                <div class="column_text_first_section">
                    <h1>Crafting project specific <br> solutions with expertise.</h1>
                    <p>We're creative company that focuses on establishing <br> long-term relationships with customers</p>
                    <div></div>
                    <div class="btn_section_first">
                        <a href="#"><span>Explore Now</span></a>
                        <a href="#"><span>Contact Us</span></a>
                    </div>
                </div>

                <div class="carousel_container">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img srcset="./img/photos/about21@2x.jpg" src="./img/photos/about21.jpg" class="d-block w-100" alt="img">
                            </div>
                            <div class="carousel-item">
                            <a href="./img/movie.mp4" class="movie-carousel"></a>
                            <img src="./img/photos/about22.jpg" srcset="./img/photos/about22@2x.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="./img/photos/about23.jpg" srcset="./img/photos/about23@2x.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section> 
</div>
<section class="last_section_crousel">
        <div class="display_section_blog">
            <h3>BLOG</h3>
            <h2>Check out some of our awesome projects with creative ideas and great design.</h2>
        </div>
        
        <div class="relaive_position">
                <div  class="shape"></div>
                        <divc class="article">
                            <?php foreach ($articles as $article) : ?>
                                <div class="slider">
                                    <div class="cards">
                                        <figure>
                                            <a href="#">
                                                <span class="img_hover_effect">Read More</span>
                                                <img src="<? echo $articles["Image"] ?>" alt="b4">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="body_cards">
                                        <h2><?= $articles["Title"] ?></h2>
                                        <p><?= $articles["Introduction"] ?></p>
                                    </div>
                                    <div class="cards_footer">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <span><?= $articles["LastMod"] ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-file-alt" style=" color: #aab0bc"></i>
                                                    <span><?= $articles["KeyWords"] ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="cards">
                                        <figure>
                                            <a href="#">
                                                <span class="img_hover_effect">Read More</span>
                                                <img src="<?= $img_b["Image"] ?>" alt="b4">
                                            </a>

                                        </figure>
                                    </div>
                                    <div class="body_cards">
                                        <h2><?= $img_b["Title"] ?></h2>
                                        <p><?= $img_b["Introduction"] ?></p>
                                    </div>
                                    <div class="cards_footer">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <span><?= $img_b["LastMod"] ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-file-alt" style=" color: #aab0bc"></i>
                                                    <span><?= $img_b["KeyWords"] ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="cards">
                                        <figure>
                                            <a href="#">
                                                <span class="img_hover_effect">Read More</span>
                                                <img src="<?= $img_c["Image"] ?>" alt="b4">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="body_cards">
                                        <h2><?= $img_c["Title"] ?></h2>
                                        <p><?= $img_c["Introduction"] ?></p>
                                    </div>
                                    <div class="cards_footer">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <span><?= $img_c["LastMod"] ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-file-alt" style=" color: #aab0bc"></i>
                                                    <span><?= $img_c["KeyWords"] ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="cards">
                                        <figure>
                                            <a href="#">
                                                <span class="img_hover_effect">Read More</span>
                                                <img src="<? echo $articles["Image"] ?>" alt="b4">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="body_cards">
                                        <h2><? echo $articles["Title"] ?></h2>
                                        <p><? echo $articles["Introduction"] ?></p>
                                    </div>
                                    <div class="cards_footer">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <span><? echo $articles["LastMod"] ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-file-alt" style=" color: #aab0bc"></i>
                                                    <span><? echo $articles["KeyWords"] ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                <div class="btn_Last_section_Cards">
                    <button role="button" class="btn_previous owl-dot btn_slide_cards ">
                        <span></span>
                    </button>
                    <button role="button" class="btn_next owl-dot btn_slide_cards ">
                        <span></span>
                    </button>
                </div>
        </div>
</section>
    <footer class="bg-navy text-inverse">

                <div class="container py-13 py-md-15">
                <div class="d-lg-flex flex-row align-items-lg-center container_title_footer">
                    <h3>Join our community by using our services and grow your business.</h3>
                    <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap first_btn_footer">Try It For Free</a>
                </div>
                <!--/div -->
                <hr/>
                <div class="row gy-6 gy-lg-0">
                    <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="./img/logo-light.png" srcset="./img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4 footer_D">© 2021 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                        <a href="#" class="icone_footer"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="icone_footer"><i class="fab fa-facebook-f"></i></i></a>
                        <a href="#" class="icone_footer"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="icone_footer"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icone_footer"><i class="fab fa-youtube"></i></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17 footer_D">Moonshine St. 14/05 <br> Light City, London, <br> United Kingdom</address>
                        <a href="mailto:#" class="footer_D_S">info@email.com <br> +00 (123) 456 78 90</a>
                    </div>
                    <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                        <li class="footer_D"><a href="#">About Us</a></li>
                        <li class="footer_D"><a href="#">Our Story</a></li>
                        <li class="footer_D"><a href="#">Projects</a></li>
                        <li class="footer_D"><a href="#">Terms of Use</a></li>
                        <li class="footer_D"><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5 footer_D">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll2">
                                <div class="mc-field-group input-group form-floating">
                                <input type="email" value="" name="EMAIL" class="required email form-control footer_D" placeholder="Email Address" id="mce-EMAIL2">
                                <label for="mce-EMAIL2">Email Address</label>
                                <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn footer_D_S">
                                </div>
                                <div id="mce-responses2" class="clear">
                                <div class="response" id="mce-error-response2" style="display:none"></div>
                                <div class="response" id="mce-success-response2" style="display:none"></div>
                                </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                <div class="clear"></div>
                            </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
                    </div>
                <!-- /.container -->
    </footer>


<script type="text/javascript" src="./Js/jquery.js"></script>
<script type="text/javascript" src="./Js/app.js"></script>
</body>
</html>