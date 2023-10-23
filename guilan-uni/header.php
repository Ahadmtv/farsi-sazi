<!DOCTYPE html <?php language_attributes();?>>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet" />
   
    <!-- <link rel="stylesheet" href="build/index.css" /> -->
    <?php wp_head()?>
  </head>
  <body <?php body_class();?>>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="#">دانشگاه <strong>گیلان</strong></a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">

          <?php wp_nav_menu(array(
            'theme_location'=>'topMenu'
          ));?>
            <!-- <ul>
              <li><a href="#">درباره ما</a></li>
              <li><a href="#">برنامه ها</a></li>
              <li><a href="#">رویداد ها</a></li>
              <li><a href="#">فضای دانشگاه</a></li>
              <li><a href="#">مطالب</a></li>
            </ul> -->
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">ورود</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">ثبت نام</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>






