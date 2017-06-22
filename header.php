<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новый сайт BikeBest</title>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="/media_themes/themes/bikebest/style.css?v=<?=time()?>">
	<?php wp_head();?>
	<script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body>
  <header>
    <div class="wrapper">
        <div class="wrapper__mainLogo"> 
        <?php if( ! is_front_page() ) { ?>
        <a href="/"><img src="/media_themes/themes/bikebest/img/mainLogo.png" alt=""></a>
        <?php } else { ?>
        <img src="/media_themes/themes/bikebest/img/mainLogo.png" alt="">
        <?php } ?>
        </div>
        <div class="wrapper__miniMenu">
          <?php wp_nav_menu(
				array(
					'container' => false,
					'menu' => 'top_right_menu'
				)
			); ?>
          <div class="wrapper__miniMenu__basketBlock">
            <div class="wrapper__miniMenu__basketBlock--countProducts">
              <div class="cart-punkt counts" ><?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?></div>
              <img src="/media_themes/themes/bikebest/img/basket1.png" alt="">
            </div>
            <div class="wrapper__miniMenu__basketBlock--mini_menu">
              <ul>
                <li><img src="/media_themes/themes/bikebest/img/share1.png" alt=""><a href="/cart/">Корзина</a></li>
                <li><img src="/media_themes/themes/bikebest/img/grafik1.png" alt=""><a href="">Сравнить</a></li>
              </ul>
            </div>
          </div>
        </div>
     <div class="wrapper__search">
         <div class="wrapper__search__block">
           <input type="text" name="search" placeholder="Поиск по сайту..." value="">
           <div class="wrapper__search__block--sbutton"><img src="/media_themes/themes/bikebest/img/search.png" alt=""></div>
           <a href="#">расширенный поиск</a>
         </div>
     </div>
     <div class="wrapper__selectCity">
       <?=do_shortcode('[geoprice_code parametr="hello_gorod"]')?>
       <div class="wrapper__selectCity__pointer"></div>
       <div class="wrapper__selectCity__city">
         <?=do_shortcode('[geo_spisok]')?>
         <div class="wrapper__selectCity__city--triangle">
         </div>
       </div>
     </div>
    </div>
  </header>
  <div class="nav">
    <div class="wrapper">
     <nav>
		<?php wp_nav_menu(
			array(
				'container' => false,
				'menu' => 'top_left_menu'
			)
		); ?>
     </nav>
     <div class="wrapper__callPhone">
       <div class="wrapper__callPhone__calls">
         <a href="">Заказать звонок</a>
       </div>
       <div class="wrapper__callPhone__numberPhone">
         <?=do_shortcode('[geoprice_code parametr="tel"]')?>
         <p>(Звонок по России бесплатный)</p>
       </div>
       <div class="wrapper__callPhone__icon">
         <img src="/media_themes/themes/bikebest/img/phone.png" alt="">
       </div>
     </div>
    </div>
  </div>