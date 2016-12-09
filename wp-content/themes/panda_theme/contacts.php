<?php 

/*
Template Name: imimi panda
*/
get_header(); ?>
<div class="container ContactsPage">

		<div class="col-md-5">
			<div class="contacts">
				<h3>Контакты</h3>
				<div class="PhoneNumbers col-md-5">
					<p>+375(29)<span>123-99-88</span></p>
					<p>+375(29)<span>889-91-23</span></p>
				</div>
				<div class="adresPanda col-md-6">
				<p>адрес: ул.<span> Щедрина 9</span></p>
				<p>vk: vk.com/<span>pandamarket</span></p>
				</div>
				<div class="mails">
					
				</div>
				<div class="mapPanda">
				<a href="https://yandex.ru/maps/?um=constructor:206ubIQjfGje8Ae8otja1_vieegZr8Ob&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?sid=206ubIQjfGje8Ae8otja1_vieegZr8Ob&amp;lang=ru_RU&amp;sourceType=constructor" alt="" style="border: 0;"/></a>
				</div>
			</div>
		
		
		</div>
		<div class="col-md-6">

			<div class="FormPanda">

				<h3>Сделать предзаказ</h3>
				<?php echo do_shortcode( '[contact-form-7 id="27" title="Без названия"]' ); ?>
			</div>
		</div>

</div>
<?php get_footer(); ?>
