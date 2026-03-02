<?php 
/*
 * Template name: Страница спасибо 
 */


?>
<?php wp_head(); ?>

<style>

body{
  margin: 0;
  padding: 0;
}
  
#thanks_page{
  min-height: 100vh;
  background: #F7F7FC;  
  box-sizing: border-box; 
  display: flex; 
  justify-content: center;
  align-items: center;
  padding: 150px 0;
}
.thanks_page_box{
  text-align: center;
  position: relative;
}
.thanks_page_text{
  width: 100%;
  height: auto;
  font-weight: 700;
  font-family: Lato-700, sans-serif;
  font-size: 242px;
  line-height: 301px;
  text-align: center;
  color: rgba(0, 0, 0, 0.05);
}
.thanks_page_block{ 
  display: flex;  
  justify-content: center;  
  align-items: flex-start;  
  flex-wrap: wrap;
  position: relative;
  z-index: 2;
}
.thanks_page_block .thanks_title{
  width: 100%;
  font-weight: 700;
  font-family: Lato-700, sans-serif;
  font-size: 28px;
  line-height: 1.3;
  text-align: center;
  color: #000000;
}
.thanks_page_block .home_link{  
  display: flex;  
  justify-content: center;  
  align-items: center;
  width: 255px;
  height: 60px;
  background: #E31E24;
  border: 1px solid #E31E24;  
  box-sizing: border-box;
  border-radius: 2px;
  cursor: pointer;
  margin-top: 66px;
  transition: 0.3s;

  font-weight: 400;
  font-family: Lato-400, sans-serif;
  font-size: 20px;
  line-height: 1;
  color: #FFFFFF; 
  text-decoration: none; 
}
.thanks_page_block .home_link:hover{
  background: #E31E24;
}

@media screen and (max-width: 1200px) {
  .thanks_page_text{
    font-size: 200px;
  }
}
@media screen and (max-width: 1000px) {
  .thanks_page_text{
    font-size: 130px;
    line-height: 1
  }
  .thanks_page_box{
    padding-top: 180px
  }
}
@media screen and (max-width: 770px) {
  .thanks_page_box{
    padding-top: 150px
  }
}
@media screen and (max-width: 700px) {
  .thanks_page_text{
    font-size: 110px;
  }
}
@media screen and (max-width: 600px) {
  .thanks_page_box{
    padding-top: 135px;
  }
  .thanks_page_text{
    font-size: 90px;
  }
  .thanks_page_block .thanks_title{
    font-size: 24px;
  }
  .thanks_page_block .home_link{
    margin-top: 35px
  }
}
@media screen and (max-width: 500px) {
  .thanks_page_box{
    padding-top: 100px;
  }
  .thanks_page_text{
    font-size: 70px;
  }
  .thanks_page_block .thanks_title{
    font-size: 20px
  }
  .thanks_page_block .home_link{
    margin-top: 26px;
    width: 200px;
    height: 50px;
    font-size: 14px
  }
 
}
@media screen and (max-width: 400px) {
  .thanks_page_box{
    padding-top: 85px
  }
  .thanks_page_text{
    font-size: 50px;
  }
  .thanks_page_block .thanks_title{
    font-size: 18px
  } 
}

</style> 

<section id="thanks_page">
  <div class="container">
    <div class="thanks_page_box">

    <?php
      while ( have_posts() ) :
      the_post();

      the_content();     

    endwhile; // End of the loop. 
    ?> 


     <!--  <div class="thanks_page_text">Спасибо!</div>
      <div class="thanks_page_block">
        <p class="thanks_title">Мы получили ваш запрос и <br> свяжемся с вами в ближайшее <br> время.</p>
        <a class="home_link" href="/">На главную</a>
      </div> -->

    </div>
  </div>
</section>

<?php
