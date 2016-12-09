
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- W3TC-include-js-head -->
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="container_12">
 <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
   <div class="container bre">
    <div class="pimg"  data-effect="rubberBand"><img src="<?php bloginfo('template_url'); ?>/images/panda-bear_318-30516.png" alt="panda logo" width="50px"></div>

   <div class="navbar-header">

      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <img src="<?php bloginfo('template_url'); ?>/images/panda-bear_318-30516.png" alt="panda logo" width="30px">
        <span class="sr-only">Toggle navigation</span>
        
      </button>
     <div class="brend"></div><a href="<?php echo home_url(); ?>" class="navbar-brand">Panda</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
       
      <div class="navig">

      <ul class="nav navbar-nav">
      <!--<li class="active"> --> <li><a href="http://panda.com/">Главная</a></li>
                                  <li><a href="/info/">Наши зверята</a></li>
                                  <li><a href="/gallery/">Галерея</a></li>
                                  <li><a href="/contacts/">Контакты</a></li>
       
       
        
      </ul>
      </div>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Войти</a></li> -->
      </ul>
    </div>
</nav>
</div>