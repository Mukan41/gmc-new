<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="./assets/images/Group-8.png">
    <title>Grid Code Media : A Digital Agency</title>


    <?php wp_head(); ?>

</head>

<body>
<header class="position-absolute top-0 end-0 pt-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.html" class="headerlogo-link"><img src="<?php echo get_template_directory_uri() . './assets/images/Group-9-1.png'; ?>" alt=""
                        class="img-fluid gcm-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item main-menu-dropdown">
                            <a class="nav-link dropdown-toggle" href="/services">Services</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item sub-menu-dropdown">
                                    <a class="nav-link dropdown-toggle" href="/web-development">Web
                                        Development</a>
                                    <ul class="dropdown-sub-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/portfolio">Portfolio Websites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/e-commerce">E-Commerce Websites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/informational">Informational Websites</a>
                                        </li>
                                        <li class="nav-item pb-0 mb-0">
                                            <a class="nav-link" href="/social-networking">Social Networking
                                                Websites</a>
                                        </li>
                                        <li class="nav-item pb-0 mb-0">
                                            <a class="nav-link" href="/educational">Educational Websites</a>
                                        </li>
                                        <li class="nav-item pb-0 mb-0">
                                            <a class="nav-link" href="/personal-websites">Personal Websites</a>
                                        </li>
                                        <li class="nav-item pb-0 mb-0">
                                            <a class="nav-link" href="/web-application">Web Application</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/digital-marketing">Digital Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/content-writing">Content Writing</a>
                                </li>
                                <li class="nav-item pb-0 mb-0">
                                    <a class="nav-link" href="/ui-ux-design">UI/UX Design</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <a href="tel:+971561507102" class="header-contact-button">
                    <button class="gcm-btn text-uppercase ">Contact now
                        <i class="fa-solid fa-arrow-right fa-rotate-by"></i>
                    </button>
                </a>
            </div>
        </nav>
    </header>