[text* stext-173 class:popup_body-inp placeholder "Ваше имя"]

[tel* stel-173 class:popup_body-inp placeholder "Ваш номер"]

[email* semail-173 class:popup_body-inp placeholder "Ваш E-mail"]

[submit class:popup_body-btn class:btn "Отправить"]

[textarea textarea-305 class:popup_form__text]

[acceptance acceptance-814 class:popup_form__label-check] Я согласен на обработку моих данных в соответствии с <a href="">политикой конфиденциальности</a> [/acceptance]

[radio radio-503 class:popup_form__rdo use_label_element default:1 "Япония" "Корея" "Китай"]

[checkbox checkbox-657 class:ts-btn class:ts-btn_primary use_label_element "whatsapp"]


<div class="popup_form__row">
	<label class="popup_form__label" for="">Имя</label>	
	<input type="text" class="popup_form__inp">
</div>
<div class="popup_form__row">
	<label class="popup_form__label" for="">Номер телефона</label>	
	<input type="text" class="popup_form__inp">
</div>
<div class="popup_form__row">
	<label class="popup_form__label" for="">E-mail</label>	
	<input type="text" class="popup_form__inp">
</div>
<div class="popup_form__row">
	<label class="popup_form__label" for="">Сообщение</label>	
	<textarea name="" id="" cols="30" rows="10" class="popup_form__text"></textarea>
</div>
<div class="popup_form__row">		
	<input type="checkbox" class="popup_form__check">
	<label class="popup_form__label-check" for="">Я согласен на обработку моих данных в соответствии с политикой конфиденциальности</label>
</div>

<div class="popup_form__row">		
	<input type="checkbox" class="popup_form__check">
	<label class="popup_form__label-check" for="">Я согласен на обработку моих данных в соответствии с политикой конфиденциальности</label>
</div>
<div class="popup_form__row">
	<label>
		<span class="wpcf7-form-control-wrap" data-name="file-630">
			<input size="40" class="wpcf7-form-control wpcf7-file popup_form__file" accept="audio/*,video/*,image/*" aria-invalid="false" type="file" name="file-630">
		</span>
		<span class="popup_form__file-label">Прикрепить файлы</span>
	</label>
</div>

<div class="popup_form__row">
	<input  class="popup_form__btn" type="submit" value="Отправить">
</div>

<div class="popup_form__row"><label class="popup_form__label" for="">Имя</label>[text* stext-173 class:popup_form__inp]</div>
<div class="popup_form__row"><label class="popup_form__label" for="">Номер телефона</label>[tel* stel-173 class:popup_form__inp placeholder "+7 (999) 99-99-99"]</div>
<div class="popup_form__row"><label class="popup_form__label" for="">E-mail</label>[email* semail-173 class:popup_form__inp]</div>
<div class="popup_form__row"><label class="popup_form__label" for="">Сообщение</label>[textarea textarea-305 class:popup_form__text]</div>
<div class="popup_form__row">
	<label>[file file-630 class:popup_form__file]
		<span class="popup_form__file-label">Прикрепить файлы</span>
	</label>
</div>
<div class="popup_form__row">	[acceptance acceptance-814 class:popup_form__check default:on] Я согласен на обработку моих данных в соответствии с <a href="">политикой конфиденциальности</a> [/acceptance]</div>
<div class="popup_form__row">[submit class:popup_form__btn "Отправить"]</div>


<style>

	.popup_form{
		display: none; 
		width: 500px;
		padding: 50px 25px 25px 25px;
	}	
	.popup_form__row{
		margin-bottom: 16px;
	}
	.popup_form__row:last-child{
		margin-bottom: 0;
	}

	.popup_form__label{

	}
	.popup_form__inp, .popup_form__text{
		width: 100%;
	  background: none;
	  border: none;   
	  border-bottom: 2px solid #cccccc;
	  padding: 15px 0px;
	  font-size: 16px;	  
	}
	.popup_form__text{
		height: 80px;
	}
	.popup_form__btn{
  
  
  width: 100%;
  background-color: white;
  padding: 22px 30px 18px;
  border-radius: 10px;
  font-size: 17px;
  border: 1px solid #cccccc;
  cursor: pointer;
		
	}
	.popup_form__check{
		margin-right: 3px;
	}
	.popup_form__check + span{
		font-size: 13px;
	}
	

</style>

<span class="wpcf7-form-control-wrap radio-503">
	<span class="wpcf7-form-control wpcf7-radio popup_form__rdo">
		<span class="wpcf7-list-item first">
			<label><input type="radio" name="radio-503" value="Япония" checked="checked"><span class="wpcf7-list-item-label">Япония</span></label>
		</span>
		<span class="wpcf7-list-item">
			<label><input type="radio" name="radio-503" value="Корея"><span class="wpcf7-list-item-label">Корея</span></label>
		</span>
		<span class="wpcf7-list-item last">
			<label><input type="radio" name="radio-503" value="Китай"><span class="wpcf7-list-item-label">Китай</span></label>
		</span>
	</span>
</span>

<span class="wpcf7-form-control-wrap" data-name="acceptance-814">
	<span class="wpcf7-form-control wpcf7-acceptance">
		<span class="wpcf7-list-item">
			<label><input type="checkbox" name="acceptance-814" value="1" class="offer-form__agree form-check" aria-invalid="false"><span class="wpcf7-list-item-label">Принимаю политику конфиденциальности</span></label>
		</span>
	</span>
</span>