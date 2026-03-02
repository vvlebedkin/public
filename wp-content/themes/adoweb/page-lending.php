<?php

    /*
 * Template name: Страница лендинга
 */

    get_header();
?>


		<?php
            while (have_posts()):
                the_post();
                the_content();
            endwhile; // End of the loop.
        ?>

	<section class="main main_page">
        <div class="main_page-bg">
            <video fetchpriority="high" autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri() ?>/img/main_bg.mp4" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
        </div>
        <div class="container">
            <h1 class="main_title">Купить авто из <span id="hero" class="font-bold"><span
                        class="Typewriter__wrapper">К</span><span class="Typewriter__cursor">|</span></span> с доставкой
                по Россиии гарантией 60 дней
            </h1>
            <div class="main_subtitle">Купить авто с доставкой по России <br>
                и гарантией 60 дней
            </div>
            <div class="main_btns">
                <a href="" class="main_btn btn">ЗАКАЗАТЬ АВТО</a>
                <div class="main_btn-price">СМОТРЕТЬ ЦЕНЫ <img src="<?php echo get_template_directory_uri() ?>/img/main_btn-price.svg" alt="">
                    <div class="main_price-dropdown">
                        <a href="" class="main_price-link">Автомобили из
                            Китая<img src="<?php echo get_template_directory_uri() ?>/img/main_price-link1.svg" alt=""></a>
                        <a href="" class="main_price-link">Автомобили из
                            Японии<img src="<?php echo get_template_directory_uri() ?>/img/main_price-link2.svg" alt=""></a>
                        <a href="" class="main_price-link">Автомобили из
                            Кореи<img src="<?php echo get_template_directory_uri() ?>/img/main_price-link3.svg" alt=""></a>
                        <a href="" class="main_price-link">Автомобили из
                            ОАЭ<img src="<?php echo get_template_directory_uri() ?>/img/main_price-link4.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about_wrapper">
                <div class="about_info">
                    <div class="about_subtitle">О компании</div>
                    <div class="about_title">DOLGOV <span>AUTO</span></div>
                    <div class="about_text">«Долгов Авто — федеральная компания по импорту автомобилей с международных
                        рынков. <br><br>
                        Более 7 лет мы выстраиваем прямые логистические цепочки поставок из Японии, Кореи, Китая и ОАЭ,
                        предлагая клиентам автомобили без посредников и переплат. <br>География присутствия компании
                        охватывает 6 городов России: Владивосток, Москву, Краснодар, Уфу, Новосибирск и Южно-Сахалинск.
                        <br><br>
                        Благодаря развитой филиальной сети мы обеспечиваем полный контроль сделки и высокий уровень
                        сервиса. <br><br>
                        В среднем ежемесячный объём поставок составляет от 400 автомобилей, что делает нас одной из
                        крупнейших компаний в сфере импорта авто на территории РФ»
                    </div>
                    <a href="" class="about_btn">ПОДРОБНЕЕ О НАС <img src="<?php echo get_template_directory_uri() ?>/img/about_btn.svg" alt=""></a>
                </div>
                <div class="about_items">
                    <div class="about_item">
                        <div class="about_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/about_item1.jpg" alt=""></div>
                        <div class="about_item-title">более <br>
                            7-ми лет</div>
                        <div class="about_item-text">На рынке</div>
                    </div>
                    <div class="about_item">
                        <div class="about_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/about_item2.jpg" alt=""></div>
                        <div class="about_item-title">12500+</div>
                        <div class="about_item-text">Купленных автомобилей и счастливых клиентов</div>
                    </div>
                    <div class="about_item">
                        <div class="about_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/about_item3.jpg" alt=""></div>
                        <div class="about_item-title">6 филиалов</div>
                        <div class="about_item-text">С менеджерами по всей РФ
                            <br><br>
                            Cвоя экспортная компания в Корее и Китае
                        </div>
                    </div>
                    <a href="https://t.me/dolgov_auto" class="about_item">
                        <div class="about_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/about_item4.jpg" alt=""></div>
                        <div class="about_item-title">24 часа <br>
                            на связи</div>
                        <div class="about_item-text">Собственник компании всегда на связи
                            <br><br>
                            Напишите мне: tg.me/dolgov_auto
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="advantages_wrapper">
            <div class="advantages_slider swiper">
                <div class="swiper-wrapper">
                    <div class="advantages_slide swiper-slide" style="background: #000000;">
                        <div class="container">
                            <div class="advantages_slide-wrapper">
                                <div class="advantages_slide-logo"><img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-logo.svg" alt="">
                                </div>
                                <div class="advantages_slide-title big">ЧЕМ МЫ <br> ОТЛИЧАЕМСЯ <br>
                                    ОТ ДРУГИХ <span>?</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages_slide swiper-slide">
                        <div class="advantages_slide-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide1.jpg" alt="">
                        </div>
                        <div class="container">
                            <div class="advantages_slide-wrapper">
                                <div class="advantages_slide-title">у других закупщиков можно часто <span>попасть</span>
                                    в похожий сценарий</div>
                                <div class="advantages_slide-items">
                                    <div class="advantages_slide-item">
                                        <div class="advantages_slide-item_title">Брат, подберём 10 вариантов, всё чётко
                                            будет</div>
                                        <div class="advantages_slide-item_subtitle">другой закупщик</div>
                                    </div>
                                    <div class="advantages_slide-item">
                                        <div class="advantages_slide-item_title">Пригоню за 3 дня хоть в Калининград
                                        </div>
                                        <div class="advantages_slide-item_subtitle">другой закупщик</div>
                                    </div>
                                    <div class="advantages_slide-item">
                                        <div class="advantages_slide-item_title">Кидай полтинник — дальше разберёмся
                                        </div>
                                        <div class="advantages_slide-item_subtitle">другой закупщик</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages_slide swiper-slide">
                        <div class="advantages_slide-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide3.jpg" alt="">
                        </div>
                        <div class="container">
                            <div class="advantages_slide-wrapper">
                                <div class="advantages_slide-title">что вы получаете по факту</div>
                                <div class="advantages_slide-items">
                                    <div class="advantages_slide-item">
                                        <div class="advantages_slide-item_title">Осталась одна тачка, всё остальное
                                            разобрали</div>
                                        <div class="advantages_slide-item_subtitle">другой закупщик</div>
                                    </div>
                                    <div class="advantages_slide-item">
                                        <div class="advantages_slide-item_title">Машина застряла на таможне :( Напиши
                                            через пару недель
                                        </div>
                                        <div class="advantages_slide-item_subtitle">другой закупщик</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages_slide swiper-slide">
                        <div class="advantages_slide-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide4.jpg" alt="">
                        </div>
                        <div class="container">
                            <div class="advantages_slide-wrapper">
                                <div class="advantages_slide-title">как происходит сделка у <br> <span>DolgovAuto</span>
                                </div>
                                <div class="advantages_slide-steps">
                                    <div class="advantages_slide-step">
                                        <div class="advantages_slide-step_img"><img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-step1.jpg"
                                                alt=""></div>
                                        <div class="advantages_slide-step_title">Мы подбираем 3–5 реальных вариантов
                                        </div>
                                        <div class="advantages_slide-step_number">01</div>
                                    </div>
                                    <div class="advantages_slide-step">
                                        <div class="advantages_slide-step_img"><img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-step2.jpg"
                                                alt=""></div>
                                        <div class="advantages_slide-step_title">Вместе выбираем лучшее, проверяем
                                            машину на месте</div>
                                        <div class="advantages_slide-step_number">02</div>
                                    </div>
                                    <div class="advantages_slide-step">
                                        <div class="advantages_slide-step_img"><img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-step3.jpg"
                                                alt=""></div>
                                        <div class="advantages_slide-step_title">Вы вносите депозит —мы выкупаем авто
                                        </div>
                                        <div class="advantages_slide-step_number">03</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages_slide swiper-slide">
                        <div class="advantages_slide-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide5.jpg" alt="">
                        </div>
                        <div class="container">
                            <div class="advantages_slide-wrapper">
                                <div class="advantages_slide-title"><span>ВСё</span> <br> ПОД КОНТРОЛЕМ</span>
                                </div>
                                <div class="advantages_slide-options">
                                    <div class="advantages_slide-option">
                                        <div class="advantages_slide-option_icon"><img
                                                src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-option_icon.svg" alt=""></div>
                                        <div class="advantages_slide-option_title">Работают наши проверенные люди, <br>
                                            никаких посредников</div>
                                    </div>
                                    <div class="advantages_slide-option">
                                        <div class="advantages_slide-option_img"><img
                                                src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-option1.jpg" alt=""></div>
                                        <div class="advantages_slide-option_title">Мы сами занимаемся растаможкой <br>
                                            и оформлением</div>
                                    </div>
                                    <div class="advantages_slide-option">
                                        <div class="advantages_slide-option_img"><img
                                                src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-option2.jpg" alt=""></div>
                                        <div class="advantages_slide-option_title">Готовая машина отправляется к вам на
                                            автовозе <br>
                                            — всё прозрачно, без сюрпризов</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantages_slide-counter"></div>
                <div class="advantages_slide-next"><img src="<?php echo get_template_directory_uri() ?>/img/advantages_slide-next.svg" alt=""></div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <h2 class="steps_title">Как купить автомобиль? <span>5 шагов</span></h2>
            <div class="steps_items">
                <div class="steps_item">
                    <div class="steps_item-top">
                        <div class="steps_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/steps_item1.svg" alt=""></div>
                        <div class="steps_item-number">01</div>
                    </div>
                    <div class="steps_item-title">ЗАЯВКА</div>
                    <div class="steps_item-text">Оставьте заявку — и мы свяжемся с вами в течение 15 минут. Бесплатно
                        проконсультируем по выбору автомобиля и условиям.</div>
                </div>
                <div class="steps_item">
                    <div class="steps_item-top">
                        <div class="steps_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/steps_item1.svg" alt=""></div>
                        <div class="steps_item-number">02</div>
                    </div>
                    <div class="steps_item-title">Бесплатная консультация и расчет</div>
                    <div class="steps_item-text">Подберём машину под ваши критерии: марка, год, пробег, бюджет. Покажем
                        варианты из Японии, Кореи и других источников — с фото, отчётами и ценой.</div>
                </div>
                <div class="steps_item">
                    <div class="steps_item-top">
                        <div class="steps_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/steps_item2.svg" alt=""></div>
                        <div class="steps_item-number">03</div>
                    </div>
                    <div class="steps_item-title">ДОГОВОР</div>
                    <div class="steps_item-text">Сумма договора фиксированная 100000 рублей на все НАПРАВЛЕНИЯ/СТРАНЫ и
                        полностью возвратная до момента БРОНИРОВАНИЯ (ПОКУПКИ НА АУКЦИОНЕ АВТОМОБИЛЯ)</div>
                </div>
                <div class="steps_item">
                    <div class="steps_item-top">
                        <div class="steps_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/steps_item6.svg" alt=""></div>
                        <div class="steps_item-number">04</div>
                    </div>
                    <div class="steps_item-title">ПОДБОР АВТО</div>
                    <div class="steps_item-text">Подбор конкретного автомобиля по вашим критериям из множества
                        предложенных вариантов

                    </div>
                </div>
                <div class="steps_item">
                    <div class="steps_item-top">
                        <div class="steps_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/steps_item4.svg" alt=""></div>
                        <div class="steps_item-number">05</div>
                    </div>
                    <div class="steps_item-title">Бронь</div>
                    <div class="steps_item-text">Бронируем автомобиль, согласованный с вами, выставляем счет на оплату.
                        В счет входит стоимость автомобиля и все расходы на доставку до Владивостока
                        (Уссурийска/Астрахани)</div>
                </div>
                <div class="steps_item">
                    <div class="steps_item-top">
                        <div class="steps_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/steps_item4.svg" alt=""></div>
                        <div class="steps_item-number">06</div>
                    </div>
                    <div class="steps_item-title">Таможенное оформление</div>
                    <div class="steps_item-text">Оформляем растаможку в Владивостоке: расчёт стоимости, оплата пошлин,
                        получение ПТС и СТС. Вы платите только после согласования суммы.
                    </div>
                </div>
                <div class="steps_item">
                    <div class="steps_item-top">
                        <div class="steps_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/steps_item5.svg" alt=""></div>
                        <div class="steps_item-number">07</div>
                    </div>
                    <div class="steps_item-title">Выдача или ДОСТАВКА</div>
                    <div class="steps_item-text">Выдача автомобиля либо отправка транспортной компанией до вашего города

                    </div>
                </div>
                <div class="steps_inner">
                    <div class="steps_inner-title">хотите ЗАКАЗАТь автомобиль?</div>
                    <a href="" class="steps_inner-btn btn_white">СКАЧАТЬ ДОГОВОР <img src="<?php echo get_template_directory_uri() ?>/img/btn_white.svg"
                            alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <section class="popular">
        <div class="container">
            <h2 class="popular_title">Популярные авто <br>
                из <span>Кореи</span> до 2 млн</h2>
            <div class="popular_items">
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item10.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">TAYOTA CAMRY</div>
                        <div class="main_item-text">2010 • 1,6 л • 123 л.с • вариатор </div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item11.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">Renault-SM5</div>
                        <div class="main_item-text">2010 • 1,5 л • 110 л.с • дизельный
                            автомат </div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item12.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">Chevrolet Spark</div>
                        <div class="main_item-text">2010 • 100 км/ч — 17,5 с; • объём
                            топливного бака — 35 л</div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item13.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">Kia Seltos</div>
                        <div class="main_item-text">2010 • 190 км/ч.• 1,6 л (123 л.с.)
                        </div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular">
        <div class="container">
            <h2 class="popular_title">Популярные авто <br>
                из <span>Японии</span> до 2 млн</h2>
            <div class="popular_items">
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item10.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">TAYOTA CAMRY</div>
                        <div class="main_item-text">2010 • 1,6 л • 123 л.с • вариатор </div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item11.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">Renault-SM5</div>
                        <div class="main_item-text">2010 • 1,5 л • 110 л.с • дизельный
                            автомат </div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item12.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">Chevrolet Spark</div>
                        <div class="main_item-text">2010 • 100 км/ч — 17,5 с; • объём
                            топливного бака — 35 л</div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
                <div class="main_item ">
                    <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item13.jpg" alt=""></div>
                    <div class="main_item-info">
                        <div class="main_item-title">Kia Seltos</div>
                        <div class="main_item-text">2010 • 190 км/ч.• 1,6 л (123 л.с.)
                        </div>
                        <div class="main_item-price">
                            <span>6976763 <span>Р</span></span>
                        </div>
                        <a href="#order" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comprehensive">
        <div class="container">
            <h2 class="comprehensive_title">Комплексная логистика доставки авто по России</h2>
            <div class="comprehensive_subtitle">Собственная транспортная компания <span>Автовоз-Логистик</span></div>
            <div class="comprehensive_inner-img"><img src="<?php echo get_template_directory_uri() ?>/img/comprehensive_inner-img.png" alt=""></div>
            <div class="comprehensive_inner">
                <div class="comprehensive_order-title">Узнать стоимость доставки</div>
                <div class="comprehensive_inner-desc">Введите свой город и получите расчет онлайн</div>
                <select name="" id="" class="select">
                    <option value="">Санкт-Петербург</option>
                    <option value="">Санкт-Петербург 2</option>
                    <option value="">Санкт-Петербург 3</option>
                </select>
                <div class="comprehensive_order-cheks">
                    <label class="comprehensive_order-check">
                        <input type="radio" name="comprehensive_order" id="" checked>
                        <span class="box">
                            <svg width="68" height="23" viewBox="0 0 68 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 12.5C14.7614 12.5 17 14.7386 17 17.5C17 20.2614 14.7614 22.5 12 22.5C9.23858 22.5 7 20.2614 7 17.5C7 14.7386 9.23858 12.5 12 12.5ZM55.5 12.5C58.2614 12.5 60.5 14.7386 60.5 17.5C60.5 20.2614 58.2614 22.5 55.5 22.5C52.7386 22.5 50.5 20.2614 50.5 17.5C50.5 14.7386 52.7386 12.5 55.5 12.5ZM9.45996 19.0908C9.99055 19.9362 10.9282 20.5 12 20.5C12.069 20.5 12.1373 20.4958 12.2051 20.4912L11.6816 18.9658C11.4237 18.9101 11.1917 18.7868 11.002 18.6172L9.45996 19.0908ZM56.2441 18.8008C56.026 18.9259 55.7742 18.9982 55.5049 18.999L54.6768 20.3828C54.9386 20.4574 55.2142 20.5 55.5 20.5C56.3458 20.5 57.108 20.1481 57.6533 19.585L56.2441 18.8008ZM13.2949 18.2549C13.1644 18.4783 12.9783 18.6644 12.7549 18.7949L12.7285 20.4072C13.7994 20.1397 14.6397 19.2994 14.9072 18.2285L13.2949 18.2549ZM52.502 17.6074C52.542 18.7449 53.2169 19.7179 54.1816 20.1914L54.4912 18.6074C54.3024 18.4353 54.1568 18.217 54.0752 17.9688L52.502 17.6074ZM56.9678 17.1924C56.9885 17.2917 57 17.3945 57 17.5C57 17.6598 56.974 17.8135 56.9277 17.958L57.9883 19.1748C58.3109 18.6964 58.5 18.1204 58.5 17.5C58.5 16.9919 58.3723 16.5141 58.1494 16.0947L56.9678 17.1924ZM9.7002 15.5742C9.26336 16.0953 9 16.7668 9 17.5C9 17.8962 9.07824 18.2739 9.21777 18.6201L10.5068 17.6504C10.5019 17.6009 10.5 17.5507 10.5 17.5C10.5 17.2849 10.5454 17.0804 10.627 16.8955L9.7002 15.5742ZM59.5 0.5L61.5 1.5L60 2L64 6.5L62.5 7.5V9L66.5 9.57227L68 17L62.5 17.1992L61.4922 17.2129C61.3423 14.0325 58.7174 11.5 55.5 11.5C52.2277 11.5 49.569 14.1195 49.5029 17.376L48.5 17.3906L21 18L17.9688 18.1006C17.9884 17.903 18 17.7028 18 17.5C18 14.1863 15.3137 11.5 12 11.5C8.68629 11.5 6 14.1863 6 17.5C6 17.8398 6.02972 18.1727 6.08398 18.4971L6 18.5H0L1.5 12.5L4.5 12L6.5 10H2L19 6.5L33.5 0L59.5 0.5ZM13.1172 16.502C13.2868 16.6917 13.4101 16.9237 13.4658 17.1816L14.9912 17.7051C14.9958 17.6373 15 17.569 15 17.5C15 16.4282 14.4362 15.4906 13.5908 14.96L13.1172 16.502ZM54.4707 14.6836C53.448 15.0574 52.685 15.9699 52.5293 17.0791L54.1328 16.8838C54.2397 16.647 54.4061 16.4432 54.6133 16.291L54.4707 14.6836ZM55.5 14.5C55.3231 14.5 55.1499 14.5156 54.9814 14.5449L55.6621 16.0088C55.9267 16.0372 56.1699 16.1354 56.375 16.2832L57.8594 15.6514C57.3102 14.9514 56.4587 14.5 55.5 14.5ZM12 14.5C11.2668 14.5 10.5953 14.7634 10.0742 15.2002L11.3955 16.127C11.5804 16.0454 11.7849 16 12 16C12.0507 16 12.1009 16.0019 12.1504 16.0068L13.1201 14.7178C12.7739 14.5782 12.3962 14.5 12 14.5ZM21.5 7H38L39 1.5H33.5L21.5 7ZM40 7H55L53 2L41 1.5L40 7Z"
                                    fill="#D9D9D9" />
                            </svg>
                            <span>Малый</span> /
                            <span>Средний</span> до 4.7 м </span>
                    </label>
                    <label class="comprehensive_order-check">
                        <input type="radio" name="comprehensive_order" id="">
                        <span class="box">
                            <svg width="80" height="26" viewBox="0 0 80 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g opacity="1" clip-path="url(#clip0_1449_3104)">
                                    <path
                                        d="M67 6H77L76 8H72.5L73.5 11H77L79 13.5L79.4023 18.5L72.9697 20.4102C72.6733 17.3734 70.1146 15 67 15C63.7431 15 61.0939 17.595 61.0039 20.8301L56 20.8906L22 21.5L19.9717 21.5625C19.9889 21.3772 20 21.1898 20 21C20 17.6863 17.3137 15 14 15C10.6863 15 8 17.6863 8 21C8 21.3179 8.02464 21.63 8.07227 21.9346L6 22L1 21V15L6 14.5L5.5 12L1 11.5V11L23 8L33.5 1L55 0L67 6ZM34.5 2.5L26.5 7.5L43 7L44 2L34.5 2.5ZM46 2L45 7L63.5 6.5L54.5 1.5L46 2Z"
                                        fill="#D9D9D9" />
                                    <path
                                        d="M14 16C16.7614 16 19 18.2386 19 21C19 23.7614 16.7614 26 14 26C11.2386 26 9 23.7614 9 21C9 18.2386 11.2386 16 14 16ZM14 18C12.3431 18 11 19.3431 11 21C11 22.6569 12.3431 24 14 24C15.6569 24 17 22.6569 17 21C17 19.3431 15.6569 18 14 18Z"
                                        fill="#D9D9D9" />
                                    <path
                                        d="M67 16C69.7614 16 72 18.2386 72 21C72 23.7614 69.7614 26 67 26C64.2386 26 62 23.7614 62 21C62 18.2386 64.2386 16 67 16ZM67 18C65.3431 18 64 19.3431 64 21C64 22.6569 65.3431 24 67 24C68.6569 24 70 22.6569 70 21C70 19.3431 68.6569 18 67 18Z"
                                        fill="#D9D9D9" />
                                    <path
                                        d="M10.818 17.818L13.831 19.9333L16.0429 16.9904L14.9622 20.5097L18.4445 21.7039L14.7636 21.7636L14.7039 25.4446L13.5096 21.9623L9.99042 23.0429L12.9332 20.831L10.818 17.818Z"
                                        fill="#D9D9D9" />
                                    <path
                                        d="M65.8353 16.6533L67.387 19.9917L70.774 18.5491L68.0785 21.0565L70.4972 23.8319L67.2795 22.0432L65.3873 25.2011L66.0942 21.5882L62.5062 20.7645L66.1607 20.3203L65.8353 16.6533Z"
                                        fill="#D9D9D9" />
                                    <circle cx="14" cy="21" r="1.5" fill="#D9D9D9" />
                                    <circle cx="67" cy="21" r="1.5" fill="#D9D9D9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1449_3104">
                                        <rect width="80" height="26" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Большой</span> /
                            от 4.7 м </span>
                    </label>
                </div>
                <div class="comprehensive_inner-desc">*выберите размер кузова</div>
                <div class="comprehensive_inner-bot">
                    <a href="popup_calc" class="popup_btn comprehensive_inner-more">Рассчитать</a>
                </div>
            </div>
        </div>
    </section>

    <section id="order" class="order">
        <div class="container">
            <div class="order_wrapper">
                <div class="order_right">
                    <h2 class="order_title">Оставьте заявку</h2>
                    <div class="order_subtitle">Получите <span>бесплатную</span> консультацию <br> по подбору от наших
                        менеджеров
                        <br> в

                        кратчайшие сроки
                    </div>
                    <div class="order_left order_person">
                        <div class="order_person-img"><img src="<?php echo get_template_directory_uri() ?>/img/order_person-img.jpg" alt=""></div>
                        <a href="" class="order_person-message"><img src="<?php echo get_template_directory_uri() ?>/img/order_person-message.svg" alt=""></a>
                        <div class="order_person-inner">
                            <div class="order_person-left">
                                <div class="order_person-title">Александр Долгов</div>
                                <div class="order_person-subtitle">Генеральный директор</div>
                            </div>
                            <div class="order_person-logo"><img src="<?php echo get_template_directory_uri() ?>/img/order_person-logo.svg" alt=""></div>
                        </div>
                    </div>
                    <form action="#" class="order_form">
                        <div class=""><input type="text" name="" id="" class="inp" placeholder="Иван"></div>
                        <div class=""><input type="text" name="" id="" class="inp" placeholder="+7 (999) 123-45-67">
                        </div>
                        <div class=""><input type="text" name="" id="" class="inp" placeholder="Москва"></div>
                    </form>
                    <button class="order_btn btn">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>

    <section class="sales">
        <div class="container">
            <div class="sales_items">
                <div class="sales_info">
                    <div class="sales_info-img"><img src="<?php echo get_template_directory_uri() ?>/img/sales_info-img.png" alt=""></div>
                    <h2 class="sales_title">Актуальные <span>акции</span></h2>
                    <div class="sales_info-text">Мы не просто пригоняем автомобили — мы делаем это быстро, прозрачно и с
                        заботой о каждом клиенте. А ещё — регулярно радуем вас выгодными акциямии спецпредложениями.
                    </div>
                    <div class="sales_info-desc">Подробную информацию об акциях <br>
                        уточняйте у менеджера*</div>
                </div>
                <div class="sales_item">
                    <div class="sales_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/sales_item1.jpg" alt=""></div>
                    <div class="sales_item-title">Привёл друга? <br> Платим 5000 за рекомендацию!</div>
                    <div class="sales_item-text">Поделись ссылкой о нас с другом и получи вознаграждение</div>
                    <a href="" class="sales_item-btn btn_white">ПОДЕЛИТЬСЯ</a>
                </div>
                <div class="sales_item">
                    <div class="sales_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/sales_item2.jpg" alt=""></div>
                    <div class="sales_item-title">Ветеранам боевых действий <br> и участникам СВО <br> скидка 83.3%
                    </div>
                    <div class="sales_item-text">Акция действует до конца декабря 2025г. </div>
                    <a href="" class="sales_item-btn btn_white">НАПИСАТЬ НА WHATSAPP</a>
                </div>
                <div class="sales_item">
                    <div class="sales_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/sales_item3.jpg" alt=""></div>
                    <div class="sales_item-title">Пенсионерам и инвалидам <br> скидка 20%</div>
                    <div class="sales_item-text">Акция действует до конца декабря 2025г.</div>
                    <a href="" class="sales_item-btn btn_white">НАПИСАТЬ НА WHATSAPP</a>
                </div>
            </div>
            <div class="sales_slider swiper">
                <div class="sales_slider-pagin"></div>
                <div class="swiper-wrapper">
                    <div class="sales_item swiper-slide">
                        <div class="sales_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/sales_item1.jpg" alt=""></div>
                        <div class="sales_item-title">Привёл друга? <br> Платим 5000 за рекомендацию!</div>
                        <div class="sales_item-text">Поделись ссылкой о нас с другом и получи вознаграждение</div>
                        <a href="" class="sales_item-btn btn_white">ПОДЕЛИТЬСЯ</a>
                    </div>
                    <div class="sales_item swiper-slide">
                        <div class="sales_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/sales_item2.jpg" alt=""></div>
                        <div class="sales_item-title">Ветеранам боевых действий <br> и участникам СВО <br> скидка 83.3%
                        </div>
                        <div class="sales_item-text">Акция действует до конца декабря 2025г. </div>
                        <a href="" class="sales_item-btn btn_white">НАПИСАТЬ НА WHATSAPP</a>
                    </div>
                    <div class="sales_item swiper-slide">
                        <div class="sales_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/sales_item3.jpg" alt=""></div>
                        <div class="sales_item-title">Пенсионерам и инвалидам <br> скидка 20%</div>
                        <div class="sales_item-text">Акция действует до конца декабря 2025г.</div>
                        <a href="" class="sales_item-btn btn_white">НАПИСАТЬ НА WHATSAPP</a>
                    </div>
                </div>
                <div class="sales_slider-bot">
                    <div class="sales_slider-arrow prev"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_left.svg" alt=""></div>
                    <div class="sales_slider-desc">Подробную информацию об акциях
                        уточняйте у менеджера*</div>
                    <div class="sales_slider-arrow next"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_right.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h2 class="reviews_title">Отзывы</h2>
            <div class="reviews_wrapper swiper">
                <div class="swiper-wrapper">
                    <a href="#" class="reviews_item swiper-slide">
                        <div class="reviews_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item1.jpg" alt=""></div>
                        <div class="reviews_item-logo"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-logo.svg" alt=""></div>
                        <div class="reviews_item-info">
                            <div class="reviews_item-title">Lrxus для Максима</div>
                            <div class="reviews_item-subtitle">Из Воронежа</div>
                        </div>
                    </a>
                    <a href="#" class="reviews_item swiper-slide">
                        <div class="reviews_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item2.jpg" alt=""></div>
                        <div class="reviews_item-logo"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-logo.svg" alt=""></div>
                        <div class="reviews_item-info">
                            <div class="reviews_item-title">Honda для Константина</div>
                            <div class="reviews_item-subtitle">Из Москвы</div>
                        </div>
                    </a>
                    <div class="reviews_item swiper-slide">
                        <div class="reviews_item-top">
                            <div class="reviews_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-icon1.jpg" alt=""></div>
                            <div class="reviews_item-name">Сергей Чистяков</div>
                            <div class="reviews_item-rating"><img src="<?php echo get_template_directory_uri() ?>/img/rating.svg" alt=""></div>
                        </div>
                        <div class="reviews_item-text">Недавно воспользовался услугами компании по привозу автомобилей
                            из
                            Азии. Заказал Toyota Camry 2018 года из Японии. Был очень обеспокоен, потому что никогда
                            раньше
                            не заказывал авто из-за рубежа, особенно с учётом санкций. Но команда "ДолговАвто"
                            справилась с
                            задачей на отлично. Менеджер Виктор буквально на каждом этапе объяснял, что происходит,
                            какие
                            документы нужны, сколько времени займёт. Подбор машины занял всего 3 дня, оформление —
                            неделю, а
                            доставка до Москвы — около 1,5 месяцев. Машина прибыла в идеальном состоянии, никаких
                            повреждений. Особенно порадовало, что компания не стала перепродавать мне лишние услуги и не
                            завышала цены. Честные люди, высокий уровень сервиса. Теперь буду заказывать только у них.
                            Спасибо!</div>
                    </div>
                    <div class="reviews_item swiper-slide">
                        <div class="reviews_item-top">
                            <div class="reviews_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-icon2.jpg" alt=""></div>
                            <div class="reviews_item-name">Роберт Костенко</div>
                            <div class="reviews_item-rating"><img src="<?php echo get_template_directory_uri() ?>/img/rating.svg" alt=""></div>
                        </div>
                        <div class="reviews_item-text">Хочу выразить слова благодарности ребятам из компании
                            "ДолговАвто" и
                            самое огромное спасибо менеджеру Виктору, который со мной работал, автомобиль подобрал
                            быстро, а
                            привезли еще быстрее (заказывали санкционный автомобиль) всего за 1.5 месяца. Кто хочет
                            заказывать ТС свыше 1.9 куб. см., рекомендую обращаться в данную фирму, ребята профессионалы
                            своего дела.</div>
                    </div>
                    <a href="#" class="reviews_item swiper-slide">
                        <div class="reviews_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item3.jpg" alt=""></div>
                        <div class="reviews_item-logo"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-logo.svg" alt=""></div>
                        <div class="reviews_item-info">
                            <div class="reviews_item-title">Toyota для Дмитрия</div>
                            <div class="reviews_item-subtitle">Из Санкт-Петербурка</div>
                        </div>
                    </a>
                    <div class="reviews_item swiper-slide">
                        <div class="reviews_item-top">
                            <div class="reviews_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-icon3.jpg" alt=""></div>
                            <div class="reviews_item-name">Sergey </div>
                            <div class="reviews_item-rating"><img src="<?php echo get_template_directory_uri() ?>/img/rating.svg" alt=""></div>
                        </div>
                        <div class="reviews_item-text">Заказал авто из Японии через эту компанию — всё прошло гладко.
                            Менеджер был на связи постоянно, отвечал быстро. Документы оформили корректно,
                            транспортировка
                            прошла без происшествий. Авто прибыло в идеальном состоянии. Очень доволен!</div>
                    </div>
                    <a href="#" class="reviews_item swiper-slide">
                        <div class="reviews_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item4.jpg" alt=""></div>
                        <div class="reviews_item-logo"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-logo.svg" alt=""></div>
                        <div class="reviews_item-info">
                            <div class="reviews_item-title">Toyota для Анастасии</div>
                            <div class="reviews_item-subtitle">Из Москвы</div>
                        </div>
                    </a>
                    <div class="reviews_item swiper-slide">
                        <div class="reviews_item-top">
                            <div class="reviews_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-icon4.jpg" alt=""></div>
                            <div class="reviews_item-name">Валера Назаретский</div>
                            <div class="reviews_item-rating"><img src="<?php echo get_template_directory_uri() ?>/img/rating.svg" alt=""></div>
                        </div>
                        <div class="reviews_item-text">Когда решил купить авто из Азии, искал надёжную компанию, которая
                            не
                            обманет и не затянет процесс. Выбрал "ДолговАвто" — и не прогадал. Хотел взять автомобиль с
                            небольшим пробегом из Японии, и именно они смогли найти подходящий вариант по разумной цене.
                            Процесс был максимально прозрачным: каждый этап — от подбора до доставки — сопровождался
                            фото и
                            видео. После получения авто, даже не думал, что всё будет так просто. Даже с учетом новых
                            ограничений, машина прибыла в срок. Отдельное спасибо менеджеру Виктору — он всегда был
                            рядом,
                            отвечал на вопросы, успокаивал, когда возникали сомнения. Если вы хотите получить автомобиль
                            из
                            Японии, Кореи или Китая без стресса — обращайтесь сюда. Это действительно профессионалы.
                        </div>
                    </div>
                    <div class="reviews_item swiper-slide">
                        <div class="reviews_item-top">
                            <div class="reviews_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-icon5.jpg" alt=""></div>
                            <div class="reviews_item-name">Руслан Хохлов</div>
                            <div class="reviews_item-rating"><img src="<?php echo get_template_directory_uri() ?>/img/rating.svg" alt=""></div>
                        </div>
                        <div class="reviews_item-text">Хотел купить машину из Южной Кореи, но не знал, как начать.
                            Поступил
                            к этой компании — оказалось, что они делают всё за вас: подбор, покупку, оформление,
                            доставку.
                            За 2 месяца машина была у меня. Отличный сервис, советую.</div>
                    </div>
                    <a href="#" class="reviews_item swiper-slide">
                        <div class="reviews_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item5.jpg" alt=""></div>
                        <div class="reviews_item-logo"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-logo.svg" alt=""></div>
                        <div class="reviews_item-info">
                            <div class="reviews_item-title">Kia для Виктора</div>
                            <div class="reviews_item-subtitle">Из Москвы</div>
                        </div>
                    </a>
                    <div class="reviews_item swiper-slide">
                        <div class="reviews_item-top">
                            <div class="reviews_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_item-icon6.jpg" alt=""></div>
                            <div class="reviews_item-name">Дмитрий Алексеевич</div>
                            <div class="reviews_item-rating"><img src="<?php echo get_template_directory_uri() ?>/img/rating.svg" alt=""></div>
                        </div>
                        <div class="reviews_item-text">Получил авто из Китая за 2 месяца. Все по договору, без обмана.
                            Рекомендую!</div>
                    </div>
                </div>
                <div class="reviews_wrapper-bot">
                    <div class="reviews_wrapper-arrow prev"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_left.svg" alt=""></div>
                    <div class="reviews_wrapper-pagin"></div>
                    <div class="reviews_wrapper-arrow next"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_right.svg" alt=""></div>
                </div>
            </div>
            <div class="reviews_bot">
                <div class="reviews_bot-title">Больше отзывов о нас</div>
                <a href="" class="reviews_bot-item"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_bot-item1.png" alt="">Яндекс</a>
                <a href="" class="reviews_bot-item"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_bot-item2.png" alt="">2GIS</a>
                <a href="" class="reviews_bot-item"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_bot-item3.png" alt="">YouTube</a>
                <a href="" class="reviews_bot-item"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_bot-item4.png" alt="">Google</a>
                <a href="" class="reviews_bot-item"><img src="<?php echo get_template_directory_uri() ?>/img/reviews_bot-item5.png" alt="">Telegram</a>
            </div>
        </div>
    </section>





    <section class="park">
        <div class="container">
            <div class="park_top">
                <h2 class="park_title">ПОПОЛНЕНИЕ ПАРКА</h2>
                <a href="" class="park_link">Смотреть все авто <img src="<?php echo get_template_directory_uri() ?>/img/link_arrow.svg" alt=""></a>
            </div>
            <div class="park_text">Автомобили, которые мы привезли в прошлом месяце</div>
            <div class="park_items swiper">
                <div class="swiper-wrapper">
                    <div class="main_item swiper-slide">
                        <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item1.jpg" alt=""></div>
                        <div class="main_item-info">
                            <div class="main_item-title">TAYOTA CAMRY</div>
                            <div class="main_item-options">
                                <div class="main_item-option">Год выпуска <span>2021 </span></div>
                                <div class="main_item-option">Бензин <span>2021 </span></div>
                                <div class="main_item-option">Пробег <span>29669 км </span></div>
                                <div class="main_item-option">Робот <span>184 л.с. </span></div>
                                <div class="main_item-option">Комплектация <span>Golden Rabbit </span></div>
                                <div class="main_item-option">Направление <span>Китай </span></div>
                                <div class="main_item-option">VIN <span>9921 </span></div>
                            </div>
                            <div class="main_item-price">
                                Стоимость под ключ <span>6976763 <span>Р</span></span>
                            </div>
                            <a href="" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="main_item swiper-slide">
                        <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item2.jpg" alt=""></div>
                        <div class="main_item-info">
                            <div class="main_item-title">Haval Chitu</div>
                            <div class="main_item-options">
                                <div class="main_item-option">Год выпуска <span>2021 </span></div>
                                <div class="main_item-option">Бензин <span>2021 </span></div>
                                <div class="main_item-option">Пробег <span>29669 км </span></div>
                                <div class="main_item-option">Робот <span>184 л.с. </span></div>
                                <div class="main_item-option">Комплектация <span>Golden Rabbit </span></div>
                                <div class="main_item-option">Направление <span>Китай </span></div>
                                <div class="main_item-option">VIN <span>9921 </span></div>
                            </div>
                            <div class="main_item-price">
                                Стоимость под ключ <span>6976763 <span>Р</span></span>
                            </div>
                            <a href="" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="main_item swiper-slide">
                        <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item3.jpg" alt=""></div>
                        <div class="main_item-info">
                            <div class="main_item-title">Changan Cs75 Plus</div>
                            <div class="main_item-options">
                                <div class="main_item-option">Год выпуска <span>2021 </span></div>
                                <div class="main_item-option">Бензин <span>2021 </span></div>
                                <div class="main_item-option">Пробег <span>29669 км </span></div>
                                <div class="main_item-option">Робот <span>184 л.с. </span></div>
                                <div class="main_item-option">Комплектация <span>Golden Rabbit </span></div>
                                <div class="main_item-option">Направление <span>Китай </span></div>
                                <div class="main_item-option">VIN <span>9921 </span></div>
                            </div>
                            <div class="main_item-price">
                                Стоимость под ключ <span>6976763 <span>Р</span></span>
                            </div>
                            <a href="" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="main_item swiper-slide">
                        <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item4.jpg" alt=""></div>
                        <div class="main_item-info">
                            <div class="main_item-title">Skoda Superb</div>
                            <div class="main_item-options">
                                <div class="main_item-option">Год выпуска <span>2021 </span></div>
                                <div class="main_item-option">Бензин <span>2021 </span></div>
                                <div class="main_item-option">Пробег <span>29669 км </span></div>
                                <div class="main_item-option">Робот <span>184 л.с. </span></div>
                                <div class="main_item-option">Комплектация <span>Golden Rabbit </span></div>
                                <div class="main_item-option">Направление <span>Китай </span></div>
                                <div class="main_item-option">VIN <span>9921 </span></div>
                            </div>
                            <div class="main_item-price">
                                Стоимость под ключ <span>6976763 <span>Р</span></span>
                            </div>
                            <a href="" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="main_item swiper-slide">
                        <div class="main_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/main_item1.jpg" alt=""></div>
                        <div class="main_item-info">
                            <div class="main_item-title">TAYOTA CAMRY</div>
                            <div class="main_item-options">
                                <div class="main_item-option">Год выпуска <span>2021 </span></div>
                                <div class="main_item-option">Бензин <span>2021 </span></div>
                                <div class="main_item-option">Пробег <span>29669 км </span></div>
                                <div class="main_item-option">Робот <span>184 л.с. </span></div>
                                <div class="main_item-option">Комплектация <span>Golden Rabbit </span></div>
                                <div class="main_item-option">Направление <span>Китай </span></div>
                                <div class="main_item-option">VIN <span>9921 </span></div>
                            </div>
                            <div class="main_item-price">
                                Стоимость под ключ <span>6976763 <span>Р</span></span>
                            </div>
                            <a href="" class="main_item-btn"><img src="<?php echo get_template_directory_uri() ?>/img/btn.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="main_items-bot">
                    <div class="main_items-pagin"></div>
                    <div class="main_items-arrows">
                        <div class="main_items-arrow prev"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_left.svg" alt=""></div>
                        <div class="main_items-arrow next"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_right.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="guarantee">
        <div class="container">
            <div class="guarantee_wrapper">
                <div class="guarantee_left">
                    <h2 class="guarantee_title">ГАРАНТИЯ 2 года
                        на все авто</h2>
                    <div class="guarantee_img"><img src="<?php echo get_template_directory_uri() ?>/img/guarantee_img.png" alt=""></div>
                </div>
                <div class="guarantee_right">
                    <div class="guarantee_right-title">Условия действия гарантии на двигатель и КПП</div>
                    <div class="guarantee_items">
                        <div class="guarantee_item">
                            <div class="guarantee_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/guarantee_item1.svg" alt=""></div>
                            <div class="guarantee_item-title">Автомобили из Китая, Кореи, Японии</div>
                        </div>
                        <div class="guarantee_item">
                            <div class="guarantee_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/guarantee_item2.svg" alt=""></div>
                            <div class="guarantee_item-title">Пробег до 70 000 км</div>
                        </div>
                        <div class="guarantee_item">
                            <div class="guarantee_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/guarantee_item3.svg" alt=""></div>
                            <div class="guarantee_item-title">Гарантия предоставляется официально по договору</div>
                        </div>
                    </div>
                    <a href="" class="guarantee_right-btn">Скачать образец договора <img
                            src="<?php echo get_template_directory_uri() ?>/img/guarantee_right-btn.svg" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <section class="social">
        <div class="container">
            <h2 class="social_title">СОЦИАЛЬНЫЕ сети</h2>
            <div class="social_subtitle">Подпишись на нас и будь в курсе!</div>
            <div class="social_items">
                <a href="" class="social_item">
                    <div class="social_item-img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/social_item1_2.jpg" media="(max-width: 767px)" />
                            <img src="<?php echo get_template_directory_uri() ?>/img/social_item1.jpg" alt="">
                        </picture>
                    </div>
                    <div class="social_item-top">
                        <div class="social_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/social_item-icon1.png" alt=""></div>
                        <div class="social_item-title">Чат Dolgov Auto</div>
                        <div class="social_item-text">+20 000 участников</div>
                    </div>
                </a>
                <a href="" class="social_item">
                    <div class="social_item-img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/social_item2_2.jpg" media="(max-width: 767px)" />
                            <img src="<?php echo get_template_directory_uri() ?>/img/social_item2.jpg" alt="">
                        </picture>
                    </div>
                    <div class="social_item-top">
                        <div class="social_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/social_item-icon2.svg" alt=""></div>
                        <div class="social_item-title">Телеграм-канал</div>
                        <div class="social_item-text">+140 000 участников</div>
                    </div>
                </a>
                <a href="" class="social_item">
                    <div class="social_item-img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/img/social_item3_2.jpg" media="(max-width: 767px)" />
                            <img src="<?php echo get_template_directory_uri() ?>/img/social_item3.jpg" alt="">
                        </picture>
                    </div>
                </a>
                <a href="" class="social_item">
                    <div class="social_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/social_item4.jpg" alt=""></div>
                    <div class="social_item-top">
                        <div class="social_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/social_item-icon3.svg" alt=""></div>
                    </div>
                </a>
                <a href="" class="social_item">
                    <div class="social_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/social_item5.jpg" alt=""></div>
                    <div class="social_item-top">
                        <div class="social_item-icon"><img src="<?php echo get_template_directory_uri() ?>/img/social_item-icon4.svg" alt=""></div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog_top">
                <h2 class="blog_title">Блог</h2>
                <a href="" class="blog_link">Перейти в блог <img src="<?php echo get_template_directory_uri() ?>/img/blog_item-btn.svg" alt=""></a>
            </div>
            <div class="blog_wrapper swiper">
                <div class="swiper-wrapper">
                    <div class="blog_item swiper-slide">
                        <div class="blog_item-top">
                            <div class="blog_item-teg">Новости</div>
                            <div class="blog_item-date">17.06.2025</div>
                        </div>
                        <div class="blog_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/blog_item1.jpg" alt=""></div>
                        <div class="blog_item-info">
                            <div class="blog_item-title">В 2024 году в России выросли продажи электромобилей</div>
                            <div class="blog_item-text">Несмотря на сложности с инфраструктурой, продажи электромобилей
                                в
                                России в 2024 году выросли на 65% по сравнению с прошлым годом. Лидеры — китайские
                                бренды:
                                BYD, Chery и Omoda. Уже построено более 1 500 зарядных станций в 80 регионах.</div>
                            <a href="" class="blog_item-btn">ПОДРОБНЕЕ <img src="<?php echo get_template_directory_uri() ?>/img/blog_item-btn.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="blog_item swiper-slide">
                        <div class="blog_item-top">
                            <div class="blog_item-teg">Блог</div>
                            <div class="blog_item-date">17.06.2025</div>
                        </div>
                        <div class="blog_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/blog_item2.jpg" alt=""></div>
                        <div class="blog_item-info">
                            <div class="blog_item-title">Новые правила техосмотра начнут действовать с 2024 года</div>
                            <div class="blog_item-text">С 1 января 2025 года вводятся обновлённые требования к ТО:
                                обязательная проверка состояния тормозных дисков, подвески и систем безопасности. Также
                                планируется переход на электронный диагностический талон, который будет храниться в...
                            </div>
                            <a href="" class="blog_item-btn">ПОДРОБНЕЕ <img src="<?php echo get_template_directory_uri() ?>/img/blog_item-btn.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="blog_item swiper-slide">
                        <div class="blog_item-top">
                            <div class="blog_item-teg">Социальные сети</div>
                            <div class="blog_item-date">17.06.2025</div>
                        </div>
                        <div class="blog_item-img"><img src="<?php echo get_template_directory_uri() ?>/img/blog_item3.jpg" alt=""></div>
                        <div class="blog_item-info">
                            <div class="blog_item-title">Компания «СБЕРАВТО» ЗАПУСТИЛА СЕРВИС ПО ВЫКУПУ АВТО ЗА 15 МИНУТ
                            </div>
                            <div class="blog_item-text">Теперь продать машину можно онлайн за считанные минуты. СберАвто
                                оценивает автомобиль по фото и видео, предлагает цену без торга и выплачивает деньги
                                сразу
                                после осмотра. Уже более 10 000 автомобилей выкуплено с начала года.</div>
                            <a href="" class="blog_item-btn">ПОДРОБНЕЕ <img src="<?php echo get_template_directory_uri() ?>/img/blog_item-btn.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="blog_wrapper-bot">
                    <div class="blog_wrapper-arrow prev"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_left.svg" alt=""></div>
                    <div class="blog_wrapper-pagin"></div>
                    <div class="blog_wrapper-arrow next"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_right.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const stringSplitter = (string) => {
                const splitter = new GraphemeSplitter();
                return splitter.splitGraphemes(string);
            };

            const typewriter = new Typewriter(document.getElementById('hero'), {
                loop: true,
                delay: 75,
                stringSplitter,
            });

            typewriter
                .pauseFor(300)
                .typeString('Китая')
                .pauseFor(2000)
                .deleteChars(11)
                .pauseFor(300)
                .typeString('Японии')
                .pauseFor(2000)
                .deleteChars(16)
                .pauseFor(300)
                .typeString('Кореи')
                .pauseFor(2000)
                .deleteChars(10)
                .typeString('ОАЭ')
                .pauseFor(2000)
                .deleteChars(16)
                .pauseFor(300)
                .start();
        });
    </script>
<?php
get_footer();
