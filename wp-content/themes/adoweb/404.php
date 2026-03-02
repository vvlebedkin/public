<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package adoweb
 */


?>

<?php wp_head(); ?>

<section id="page_404">
	<div class="container">
		<div class="page_404_box">
			
			<div class="page_404_text">404</div>
			<div class="page_404_block">
				<p>Ой, а тут ничего нет..</p>
				<a href="/">
					На главную
				</a>
			</div>
		</div>
	</div>
</section>

<section id="page_404">
	<div class="container">
		<div class="page_404_box">
			<?php if (carbon_get_theme_option( 'crb_404_title' )): ?>
			<div class="page_404_text"><?php echo carbon_get_theme_option( 'crb_404_title' ) ?></div>
			<?php endif ?>
			
			<div class="page_404_block">
				<?php if (carbon_get_theme_option( 'crb_404_text' )): ?>
				<p><?php echo carbon_get_theme_option( 'crb_404_text' ) ?></p>
				<?php endif ?>
				<?php if (carbon_get_theme_option( 'crb_404_btn' )): ?>
				<a href="/">
					<?php echo carbon_get_theme_option( 'crb_404_btn' ) ?>
				</a>
				<?php endif ?>
				
			</div>
		</div>
	</div>
</section>

<style>

	#page_404{
	min-height: 100vh;
	background: #F7F7FC;	
	box-sizing: border-box;	
	display: flex;	
	justify-content: center;	
	align-items: center;
	padding: 150px 0;
}
.page_404_box{
	text-align: center;
	position: relative;
}
.logo_404{
	width: 90px;
}
.page_404_text{
	/*position: absolute;
	top: 100px;
	left: 0;*/
	width: 100%;
	height: auto;
	font-weight: 700;
	font-family: Lato-700, sans-serif;
	font-size: 582px;
	line-height: 301px;
	text-align: center;
	color: rgba(0, 0, 0, 0.05);
}
.page_404_block{
/*	margin-top: 450px;*/
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: start;
	    -ms-flex-align: start;
	        align-items: flex-start;
	-ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	position: relative;
	z-index: 2;
}
.page_404_block p{
	width: 100%;
	font-weight: 700;
	font-family: Lato-700, sans-serif;
	font-size: 28px;
	line-height: 1.3;
	text-align: center;
	color: #000000;
}
.page_404_block a{
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: center;
	    -ms-flex-align: center;
	        align-items: center;
	width: 255px;
	height: 60px;
	background: #26E07F;
	border: 1px solid #26E07F;
	-webkit-box-sizing: border-box;
	        box-sizing: border-box;
	border-radius: 2px;
	cursor: pointer;
	margin-top: 66px;
	-webkit-transition: 0.3s;
	-o-transition: 0.3s;
	transition: 0.3s;

	font-weight: 400;
	font-family: Lato-400, sans-serif;
	font-size: 20px;
	line-height: 1;
	color: #FFFFFF;
	-ms-flex-negative: 0;
	    flex-shrink: 0;
	    text-decoration: none;
}
.page_404_block a:hover{
	background: #0AC262;
}

	

@media screen and (max-width: 1200px) {
	.page_404_text{
		font-size: 482px;
	}
}
@media screen and (max-width: 1000px) {
	.page_404_text{
		font-size: 350px;
		top: 16px
	}
	.page_404_block{
		
	}
}
@media screen and (max-width: 770px) {
	.page_404_text{
		font-size: 230px;
		top: 50px;
		line-height: 100px;
	}
	.page_404_block{
		margin-top: 179px
	}
}
@media screen and (max-width: 700px) {}
@media screen and (max-width: 600px) {}
@media screen and (max-width: 500px) {
	.logo_404{
		width: 70px
	}
	.page_404_text{
		font-size: 120px;
		top: 50px;
		line-height: 100px;
	}
	.page_404_block{
		margin-top: 150px
	}
	.page_404_block p{
		font-size: 22px
	}
	.page_404_block a{
		margin-top: 26px;
		width: 200px;
		height: 50px;
	}
	.page_404_block a span{
		font-size: 14px
	}
	.page_404_block a svg{
		width: 9px;
		height: 5px
	}
}

</style>

