<!doctype html>
<html lang="en">
  <head>
    <title>Depot &mdash;Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/css/aos.css">
    <link rel="stylesheet" href="<?=base_url('assets/templates/site')?>/css/style.css">
    <style>
      .ftco-cover-1, .ftco-cover-1 .container > .row {
        height: auto;
      }
      .ftco-cover-1.overlay::before {
        background: #22242a;
        opacity: .8;
      }
    </style>
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="<?= base_url(); ?>" class="text-black"><span class="text-primary">Depot</a>
            </div>
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="<?= !empty($scroll) && $scroll ? '#home-section' : base_url('#home-section') ?>" class="nav-link">Home</a></li>
                  <li><a href="<?= !empty($scroll) && $scroll ? '#services-section' : base_url('#services-section') ?>" class="nav-link">Services</a></li>
                  <li><a href="<?= !empty($scroll) && $scroll ? '#about-section' : base_url('#about-section') ?>" class="nav-link">About Us</a></li>
                  <li><a href="<?= !empty($scroll) && $scroll ? '#why-us-section' : base_url('#why-us-section') ?>" class="nav-link">Why Us</a></li>
                  <li><a href="<?= !empty($scroll) && $scroll ? '#testimonials-section' : base_url('#testimonials-section') ?>" class="nav-link">Testimonials</a></li>
                  <li><a href="<?= !empty($scroll) && $scroll ? '#contact-section' : base_url('#contact-section') ?>" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </header>