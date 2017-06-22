  <div class="infoStocktwo">
    <div class="infoStocktwo__wrapper">
      <p><span>Остались вопросы?</span> Перезвоним через 28 секунд и все расскажем!</p>
      <form action="">
        <input type="tel" placeholder="+7 (999) 555-28-77">
      <input type="submit" value="Жду звонка">
      </form>
    </div>
  </div>
 <footer class="footer">
   <div class="footer__wrapper">
     <div class="footer__wrapper__info">
       <div class="footer__wrapper__info--logo"><img src="/media_themes/themes/bikebest/img/mainLogo.png" alt=""></div>
       <div class="footer__wrapper__info--menu">
         <div class="hr"></div>
         <?=do_shortcode('[geoprice_code parametr="footerWidget"]')?>
       </div>
       <div class="footer__wrapper__info--socia">
         <div class="soc"></div>
         <div class="soc"></div>
         <div class="soc"></div>
         <div class="soc"></div>
       </div>
       <div class="footer__wrapper__info--contacts">
         <div class="number">
           <?=do_shortcode('[geoprice_code parametr="tel"]')?>
           <p>(Звонок по России бесплатный)</p>
         </div>
         <div class="li_ya">
           <div class="li_ya__Li"></div>
           <div class="li_ya__Ya"></div>
         </div>
       </div>
     </div>
     <div class="footer__wrapper__copyright"><p>(с) 2016 - <?=date('Y')?> «BikeBest» — интернет-магазин велосипедов и мототехники | Все права защищены, копирование должно содержать ссылку на источник</p></div>
   </div>
 </footer>
<?php wp_footer(); ?>
<script src="/media_themes/themes/bikebest/js/main.js"></script>
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>