<?php
$user_id = rand(999, 999999);
if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
$user_ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else {
$user_ip = $_SERVER["REMOTE_ADDR"];
}
if(!isset($_COOKIE["dle_hash"])) {
setcookie("dle_hash", md5($user_ip.$user_id), time()+3600);
}
setcookie("dle_pm", "0", time()+3600);
setcookie("user_id", $user_id, time()+3600);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Трансфер из аэропорта Барселоны. Бронирование и заказ автомобиля</title>
    <meta name="description"
          content="Если вы хотите недорого заказать трансфер в Барселоне, то наша компания станет отличным исполнителем данной услуги. Выбирайте понравившийся автомобиль, время пребывания, и наслаждайтесь прекрасной поездкой."/>
    <link rel="canonical" href="https://barcelonadriver.com"/>
    <meta name="yandex-verification" content="d9fed12d52febcac"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
    <div class="side-top">
        <div class="inner-wrap">
            <div class="pad-left side-top-cont">
                <a href="/" class="header-logo">
                    <img src="img/header-logo.png" alt="barcelonadriver.com">
                </a>
                <div class="head-text">
                    Трансферы и экскурсии по Барселоне и другим городам
                </div>
                <ul class="lang-menu">
                    <li><a href="/en"><img src="img/eng.png" alt="английская версия сайта"><span>English</span></a></li>
                    <li class="current-lang"><img src="img/rus.png" alt="русская версия сайта"><span>Русский</span></li>
                </ul>
                <div class="contact-menu">
                    <a href="https://wa.me/34635055656" rel="nofollow" target="blank" title="Нажмите, чтобы написать нам в Whatsapp">
                        <img src="img/whatup.png" alt="Ватсапп">
                    </a>
                    <a href="viber://chat?number=34635055656" rel="nofollow" target="blank" title="Нажмите, чтобы написать нам в Viber">
                        <img src="img/viber.png" alt="Вайбер">
                    </a>
                    <div class="numbers-sect">
                        <div class="numbers-sect-phone">
                            <button class="arrow-btn js-arrow-btn"></button>
                            <a class="num num-top" href="tel:34635055656">+34 635 05 56 56</a>
                            <div class="numbers-sect-phone-hidden">
                                <a class="num" href="tel:34635726490">+34 635 72 64 90</a>
                                <a class="num" href="tel:34034622264">+34 034 62 22 64</a>
                            </div>
                        </div>
                        <a class="numbers-sect-mail" href="mailto:support@barcelonadriver.com">info@barcelonadriver.com</a>
                    </div>
                </div>

                <div class="menu">
                    <button id="menu-trigger" class="btn menu__btn">
                        <span class="menu__burger"></span>
                        <span class=menu__exit></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="side-bottom">
        <div class="inner-wrap">
            <div class="contact-menu contact-menu--mob">
                <a href="https://wa.me/34635055656" rel="nofollow" target="blank" title="Нажмите, чтобы написать нам в Whatsapp">
                    <img src="img/whatup.png" alt="Ватсапп">
                </a>
                <a href="viber://chat?number=34635055656" rel="nofollow" target="blank" title="Нажмите, чтобы написать нам в Viber">
                    <img src="img/viber.png" alt="Вайбер">
                </a>
                <div class="numbers-sect">
                    <div class="numbers-sect-phone">
                        <button class="arrow-btn js-arrow-btn"></button>
                        <a class="num num-top" href="tel:34635055656">+34 635 05 56 56</a>
                        <div class="numbers-sect-phone-hidden">
                            <a class="num" href="tel:34635726490">+34 635 72 64 90</a>
                            <a class="num" href="tel:34034622264">+34 034 62 22 64</a>
                        </div>
                    </div>
                    <a class="numbers-sect-mail" href="mailto:support@barcelonadriver.com">info@barcelonadriver.com</a>
                </div>
            </div>
            <div class="pad-left side-bottom-cont">
                <nav>
                    <ul class="main-menu">
                        <li><a class="" href="#scroll1">О компании</a></li>
                        <li><a class="" href="#scroll2">Автопарк</a></li>
                        <li><a class="" href="#scroll3">Прайс-лист</a></li>
                        <li><a class="" href="#scroll4">Отзывы</a></li>
                        <li><a class="" href="#scroll5">Экскурсии</a></li>
                        <li><a class="" href="#scroll6">Фотограф</a></li>
                        <li><a class="" href="#scroll7">Шоппинг</a></li>
                    </ul>
                </nav>
                <ul class="header-soc-btns">
                    <li class="">
                        <a href="#" rel="nofollow">
                            <img src="img/facebook.png" alt="ФБ сообщество">
                        </a>
                    </li>
                    <li class="">
                        <a class="mtm" href="https://vk.com/barcelonadriver" rel="nofollow">
                            <img src="img/vk.png" alt="Вк сообщество">
                        </a>
                    </li>
                    <li class="">
                        <a href="https://www.instagram.com/barcelonadriver/" rel="nofollow">
                            <img src="img/snapchat.png" alt="Инста канал">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main>
    <!-- SECTION 1 -->
    <section class="sc-1 layer-container section-pad">
        <div class="layer-back">
            <picture>
                <source type="image/webp" srcset="img/section-1-bg.webp" media="(min-width: 800px)">
                <source type="image/webp" srcset="img/section-1-bg.webp">
                <source type="image/jpeg" srcset="img/section-1-bg.jpg" media="(min-width: 800px)">
                <source type="image/jpeg" srcset="img/section-1-bg.jpg">
                <img src="img/section-1-bg.jpg" alt="Трансферы и такси в Барселоне">
            </picture>
        </div>
        <div class="inner-wrap section-aligning">
            <h1 class="main-title">
                <span>Трансферы и такси в Барселоне</span>
                <span class="h3 sub-title">с русскоговорящими водителями</span>
                <span class="h2 commerc-mess">
<!--                     МЕСТО ДЛЯ РЕКЛАМНОГО ТЕКСТА-->
                </span>
            </h1>
            <div class="route-block">
                <div class="h3 form-text">УЗНАЙ СТОИМОСТЬ</div>
                <form action="">
                    <div class="bef1" data-from="откуда">
                        <select name="" id="first_select">
                            <option value="1" selected>Аэропорт Эль Прат</option>
                            <option value="2" disabled>Барселона</option>
                            <option value="3">Ситджес</option>
                            <option value="4">Вианова</option>
                            <option value="5">Кунит</option>
                            <option value="6">Кома-Руга</option>
                            <option value="7">Калафель</option>
                            <option value="8">Торредембарра</option>
                            <option value="9">Салоу</option>
                            <option value="10">Камбрильс</option>
                            <option value="11">Порт Авентура</option>
                            <option value="12">Cruise Port</option>
                            <option value="13">Бадалона</option>
                            <option value="14">Монкада-и-Решак</option>
                            <option value="15">Тарраса</option>
                            <option value="16">Матаро</option>
                            <option value="17">La Roca Village</option>
                            <option value="18">Калелья</option>
                            <option value="19">Мальграт-де-Мар</option>
                            <option value="20">Санта-Сусанна</option>
                            <option value="21">Льорет-де-Мар</option>
                            <option value="22">Тосса-де-Мар</option>
                            <option value="23">Кастель-Пладжа-де-Аро</option>
                            <option value="24">Аэропорт Жирона</option>
                            <option value="25">Фигерас</option>
                            <option value="26">Андорра Ла-Велья</option>
                            <option value="27">Escaldes-Engordany</option>
                            <option value="28">Encamp</option>
                            <option value="29">La Massana</option>
                            <option value="30">La Canillo</option>
                            <option value="31">La El Tarter</option>
                            <option value="32">Soldeu</option>
                            <option value="33">GrauRoig</option>
                            <option value="34">PasdelaCasa</option>
                            <option value="35">Arinsal</option>
                        </select>
                    </div>
                    <img src="img/refresh-button-white.png" alt="&#8596;" class="one_ref">
                    <div class="bef1 bef5" data-from="куда">
                        <select name="" id="second_select">
                            <option value="1" disabled>Аэропорт Эль Прат</option>
                            <option value="2" selected>Барселона</option>
                            <option value="3">Ситджес</option>
                            <option value="4">Вианова</option>
                            <option value="5">Кунит</option>
                            <option value="6">Кома-Руга</option>
                            <option value="7">Калафель</option>
                            <option value="8">Торредембарра</option>
                            <option value="9">Салоу</option>
                            <option value="10">Камбрильс</option>
                            <option value="11">Порт Авентура</option>
                            <option value="12">Cruise Port</option>
                            <option value="13">Бадалона</option>
                            <option value="14">Монкада-и-Решак</option>
                            <option value="15">Тарраса</option>
                            <option value="16">Матаро</option>
                            <option value="17">La Roca Village</option>
                            <option value="18">Калелья</option>
                            <option value="19">Мальграт-де-Мар</option>
                            <option value="20">Санта-Сусанна</option>
                            <option value="21">Льорет-де-Мар</option>
                            <option value="22">Тосса-де-Мар</option>
                            <option value="23">Кастель-Пладжа-де-Аро</option>
                            <option value="24">Аэропорт Жирона</option>
                            <option value="25">Фигерас</option>
                            <option value="26">Андорра Ла-Велья</option>
                            <option value="27">Escaldes-Engordany</option>
                            <option value="28">Encamp</option>
                            <option value="29">La Massana</option>
                            <option value="30">La Canillo</option>
                            <option value="31">La El Tarter</option>
                            <option value="32">Soldeu</option>
                            <option value="33">GrauRoig</option>
                            <option value="34">PasdelaCasa</option>
                            <option value="35">Arinsal</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn--grad btn--score run_price" data-target="#myModal2">
                        рассчитать
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION 2 -->
    <section class="sc-2 section-pad">
        <div class="inner-wrap">
            <div class="pref">
                <div class="pref-item">
                    <div class="pref-item-img">
                        <img src="img/man.png" alt="Лучшие водители">
                    </div>
                    <div class="pref-item-title">Лучшие водители</div>
                    <div class="pref-item-text">Вы будете спокойны всю поездку, у нас работают только профессиональные и лицензированные водители</div>
                </div>
                <div class="pref-item">
                    <div class="pref-item-img">
                        <img src="img/fly.png" alt="Никаких задержек">
                    </div>
                    <div class="pref-item-title">Никаких задержек</div>
                    <div class="pref-item-text">Никаких задержек, все пунктуально, все вовремя. Наши водители контролируют время приелета вашего рейса</div>
                </div>
                <div class="pref-item">
                    <div class="pref-item-img">
                        <img src="img/mob.png" alt="Всегда на связи">
                    </div>
                    <div class="pref-item-title">Всегда на связи</div>
                    <div class="pref-item-text">Мы всегда на связи. Всю нужную информацию вы можете передать нам по телефону, email или мессенджеры</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3 -->
    <section class="sc-3 main-menu-item" id="scroll3">
        <input type="radio" class="price-tables-input" name="price-tables" checked id="barcelona">
        <input type="radio" class="price-tables-input" name="price-tables" id="dorada">
        <input type="radio" class="price-tables-input" name="price-tables" id="brava">
        <input type="radio" class="price-tables-input" name="price-tables" id="andorra">
        <div class="layer-container section-pad btns-sect">
            <div class="layer-back">
                <picture>
                    <source type="image/webp" srcset="img/section-2-bg.webp">
                    <source type="image/jpeg" srcset="img/section-2-bg.jpg">
                    <img src="img/section-2-bg.jpg" alt="ПРАЙС-ЛИСТ на трансферы">
                </picture>
            </div>
            <div class="inner-wrap section-aligning">
                <h2 class="main-title">
                    <span>ПРАЙС-ЛИСТ на трансферы</span>
<!--                    <span class="sub-title">стоимость наших услуг</span>-->
                </h2>
                <div class="price-tables-btn">
                    <label class="btn btn--transp" for="barcelona">БАРСЕЛОНА</label>
                    <label class="btn btn--transp" for="dorada">КОСТА ДОРАДА</label>
                    <label class="btn btn--transp" for="brava">КОСТА БРАВА</label>
                    <label class="btn btn--transp" for="andorra">АНДОРРА</label>
                </div>
            </div>
        </div>

        <div class="inner-wrap">
            <div class="price-tables">
                <div class="price-tables-item barcelona">
                    <table>
                        <tr class="t-title">
                            <td class="b-l">Направление</td>
                            <td class="b-t">1-4 человека стандарт</td>
                            <td class="b-t">1-4 человека люкс</td>
                            <td class="b-t">1-7 человек минивен</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Барселона — Отель в Барселоне</td>
                            <td class="new-p"><span>45€</span> 35€</td>
                            <td class="new-p"><span>60€</span> 50€</td>
                            <td class="new-p"><span>75€</span> 67€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Барселона — Морской порт</td>
                            <td class="new-p"><span>45€</span> 35€</td>
                            <td class="new-p"><span>60€</span> 50€</td>
                            <td class="new-p"><span>75€</span> 67€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Барселона — Барселона аэропорт</td>
                            <td class="new-p"><span>45€</span> 35€</td>
                            <td class="new-p"><span>60€</span> 50€</td>
                            <td class="new-p"><span>75€</span> 67€</td>
                        </tr>
                    </table>
                </div>

                <div class="price-tables-item dorada">
                    <table>
                        <tr class="t-title">
                            <td class="b-l">Направление</td>
                            <td class="b-t">1-4 человека стандарт</td>
                            <td class="b-t">1-4 человека люкс</td>
                            <td class="b-t">1-7 человек минивен</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Барселона</td>
                            <td>40€</td>
                            <td>50€</td>
                            <td>65€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Ситджес</td>
                            <td>70€</td>
                            <td>90€</td>
                            <td>110€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Вианова</td>
                            <td>80€</td>
                            <td>90€</td>
                            <td>110€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Кунит</td>
                            <td>85€</td>
                            <td>95€</td>
                            <td>115€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Кома-Руга</td>
                            <td>90€</td>
                            <td>105€</td>
                            <td>125€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Калафель</td>
                            <td>90€</td>
                            <td>100€</td>
                            <td>125€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Торредембарра</td>
                            <td>105€</td>
                            <td>115€</td>
                            <td>125€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Салоу</td>
                            <td>115€</td>
                            <td>145€</td>
                            <td>165€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Камбрильс</td>
                            <td>120€</td>
                            <td>145€</td>
                            <td>165€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Порт Авентура</td>
                            <td>120€</td>
                            <td>140€</td>
                            <td>165€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Cruise Port</td>
                            <td>40€</td>
                            <td>50€</td>
                            <td>65€</td>
                        </tr>
                    </table>
                </div>

                <div class="price-tables-item brava">
                    <table>
                        <tr class="t-title">
                            <td class="b-l">Направление</td>
                            <td class="b-t">1-4 человека стандарт</td>
                            <td class="b-t">1-4 человека люкс</td>
                            <td class="b-t">1-7 человек минивен</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Бадалона</td>
                            <td>45€</td>
                            <td>55€</td>
                            <td>70€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Монкада-и-Решак</td>
                            <td>50€</td>
                            <td>60€</td>
                            <td>70€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Тарраса</td>
                            <td>60€</td>
                            <td>80€</td>
                            <td>90€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Матаро</td>
                            <td>65€</td>
                            <td>85€</td>
                            <td>95€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">La Roca Village</td>
                            <td>65€</td>
                            <td>85€</td>
                            <td>105€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Калелья</td>
                            <td>75€</td>
                            <td>95€</td>
                            <td>115€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Мальграт-де-Мар</td>
                            <td>95€</td>
                            <td>115€</td>
                            <td>130€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Санта-Сусанна</td>
                            <td>90€</td>
                            <td>105€</td>
                            <td>125€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Льорет-де-Мар</td>
                            <td>105€</td>
                            <td>120€</td>
                            <td>140€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Тосса-де-Мар</td>
                            <td>120€</td>
                            <td>140€</td>
                            <td>155€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Кастель-Пладжа-де-Аро</td>
                            <td>120€</td>
                            <td>140€</td>
                            <td>160€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Аэропорт Жирона</td>
                            <td>105€</td>
                            <td>125€</td>
                            <td>145€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Фигерас</td>
                            <td>160€</td>
                            <td>175€</td>
                            <td>195€</td>
                        </tr>
                    </table>
                </div>

                <div class="price-tables-item andorra">
                    <table>
                        <tr class="t-title">
                            <td class="b-l">Направление</td>
                            <td class="b-t">1-4 человека стандарт</td>
                            <td class="b-t">1-4 человека люкс</td>
                            <td class="b-t">1-7 человек минивен</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Andorra la vella</td>
                            <td>205€</td>
                            <td>225€</td>
                            <td>260€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Escaldes-Engordany</td>
                            <td>215€</td>
                            <td>245€</td>
                            <td>265€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Encamp</td>
                            <td>220€</td>
                            <td>250€</td>
                            <td>270€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">La Massana</td>
                            <td>215€</td>
                            <td>245€</td>
                            <td>275€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">La Canillo</td>
                            <td>225€</td>
                            <td>255€</td>
                            <td>285€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">La El Tarter</td>
                            <td>235€</td>
                            <td>265€</td>
                            <td>285€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Soldeu</td>
                            <td>235€</td>
                            <td>265€</td>
                            <td>295€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">GrauRoig</td>
                            <td>245€</td>
                            <td>270€</td>
                            <td>295€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">PasdelaCasa</td>
                            <td>255€</td>
                            <td>275€</td>
                            <td>295€</td>
                        </tr>
                        <tr class="normal">
                            <td class="b-l">Arinsal</td>
                            <td>225€</td>
                            <td>255€</td>
                            <td>295€</td>
                        </tr>
                    </table>
                </div>

                <button class="btn btn--grad btn--order run_price" data-target="#myModal2">забронировать</button>
            </div>
        </div>
    </section>

    <!-- SECTION 4 -->
    <section class="sc-4 main-menu-item layer-container section-pad" id="scroll1">
        <div class="layer-back">
            <picture>
                <source type="image/webp" srcset="img/section-3-bg.webp">
                <source type="image/jpeg" srcset="img/section-3-bg.jpg">
                <img src="img/section-3-bg.jpg" alt="Трансфер из аэропорта Барселоны">
            </picture>
        </div>
        <div class="inner-wrap section-aligning">
            <h2 class="main-title">
                <span>Трансфер из аэропорта Барселоны</span>
            </h2>
            <div class="about-text">
                <div class="corner-border"></div>
                <span>Barcelona Driver</span> - молодая, но амбициозная и быстрорастущая компания, осуществляющая
                трансферы и экскурсии по Барселоне и другим городам. У нас можно заказать автомобили любого класса с личным водителем и гидом. Помимо выбора класса вы
                можете арендовать автомобили различной вместимости. В нашем автопарке присутствуют автомобили
                следующих категорий: бизнес-класс, представительский класс, минивэны, внедорожники, микроавтобусы.
                Мы знаем, как сделать жизнь клиентов комфортнее и экономичнее. Поэтому абсолютно бесплатно во время
                поездок пассажиры могут получить воду и воспользоваться WI-FI. Также, машина будет бесплатно ждать
                вас в аэропорту целых 60 минут. У нас можно расплатиться как картой, так и PayPal и другими
                возможными способами. А для постоянных клиентов мы предоставляем гибкую систему скидок.
                <div class="corner-border corner-border--rev"></div>
            </div>
        </div>
    </section>

    <!-- SECTION 5 -->
    <section class="sc-5 main-menu-item" id="scroll2">
        <div class="inner-wrap">
            <h2 class="main-title">
                <span class="line-bot">Наш АВТОПАРК</span>
            </h2>
            <div class="automob-list">
                <div class="automob-item">
                    <img src="img/car1.jpg" alt="mercedes benz class v">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class v</div>
                        <div>Вместимость до 7-и человек</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car2.jpg" alt="mercedes benz class e">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class e</div>
                        <div>Вместимость до 4-х человек</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car3.jpg" alt="mercedes benz class c">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class c</div>
                        <div>Вместимость до 4-х человек</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car4.jpg" alt="mercedes benz class s">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class s</div>
                        <div>Вместимость до 4-х человек</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car5.jpg" alt="Fiat tipo">
                    <div class="automob-item-text">
                        <div class="automob-item-name">Fiat tipo</div>
                        <div>Вместимость до 4-х человек</div>
                    </div>
                </div>
                <div class="automob-item automob-item--btn run_price" id="order-btn" data-target="#myModal2">
                    <img src="img/order-btn-img.png" alt="">
                    <div class="btn-text">
                        РАССЧИТАТЬ<br>СТОИМОСТЬ И<br>БРОНИРОВАТЬ<br>ТРАНСФЕР>
                    </div>
                    <img class="arrow-r" src="img/arrow-r.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6 -->
    <section class="sc-6 main-menu-item layer-container section-pad" id="scroll5">
        <div class="layer-back">
            <picture>
                <source type="image/webp" srcset="img/section-4-bg.webp">
                <source type="image/jpeg" srcset="img/section-4-bg.jpg">
                <img src="img/section-4-bg.jpg" alt="Экскурсии">
            </picture>
        </div>
        <div class="inner-wrap section-aligning">
            <h2 class="main-title line-bot">
                <span>Экскурсии</span>
            </h2>
            <div class="excursions-list js-slider-excur">
                <div class="excursions-item">
                    <div class="excursions-item-layer">
                        <img src="img/exc-barcelona.jpg" alt="Барселонa">
                    </div>
                    <div class="excursions-item-descr">
                        <div class="excursions-item-title">
                            <div class="target">Барселона</div>
                            <div class="exc-price">90€</div>
                        </div>
                        <div class="excursions-item-text">
                            Крупнейший промышленный и торговый центр Испании. Один из важнейших туристических пунктов в европейских маршрутах.
                        </div>
                    </div>
                    <div class="descr-full" data-target="Барселону" data-time="5 часов" data-img-src="img/exc-barcelona.jpg">
                        <p>
                            Авторская обзорная экскурсия по Барселоне на автомобиле 4-6-8 часов предполагает знакомство с основными достопримечтельностями - главная улица Пасео де Грация со знаменитыми шедеврами Гауди - дом Батльо и дом Мила, Собор Святое семейство, парк Гуэль, площадь Испании и великолепные виды с горы Монжуик, самая высокая точка Барселоны гора Тибедабо и конечно же история Барселоны - старый город или готический квартал со своими удивительными секретами, накопившимися за 2000 лет, улица Ла рамбла и рынок Бокерия с широким ассортиентом фруктов, хамона, сыров и морепродуктов
                        </p>
                        <p>
                            Наш гид позаботится о покупке билетов в Собор святое семейство и в парк Гуэль, расчитает время и вам не прийдется стоять в утомительных очередях
                        </p>
                    </div>
                </div>
                <div class="excursions-item">
                    <div class="excursions-item-layer">
                        <img src="img/exc-port.jpg" alt="Cruise Port">
                    </div>
                    <div class="excursions-item-descr">
                        <div class="excursions-item-title">
                            <div class="target">Cruise Port</div>
                            <div class="exc-price">300€/450€/600€</div>
                        </div>
                        <div class="excursions-item-text">
                            Порт располагается у начала бульвара La Rambla (Ла Рамбла — самый знаменитый бульвар Барселоны, также известный, как Las Ramblas.
                        </div>
                    </div>
                    <div class="descr-full" data-target="Cruise Port" data-time="4/6/8 часов" data-img-src="img/exc-port.jpg">
                        <p>
                            Если Вы уже изучили Барселону от и до, и Вам хочется побывать в других не менее
                            интересных уголках, расположенных относительно недалеко, наша компания приглашает
                            Вас на экскурсию в Андорру.
                        </p>
                        <p>
                            Андорра – это маленькая страна, которую называются «почти что Испанией». В первую
                            очередь она славится своими горнолыжными курортами. Зимой здесь настоящий рай
                            для любителей этого вида спорта. На экскурсии Вы познакомитесь
                            с достопримечательностями исторического центра столицы – Андорры-Ла-Велья, увидите
                            потрясающе красивую церковь Святого Арменголя, погуляете по живописным
                            окрестностям. А еще в ходе экскурсии у Вас непременно будет время на шопинг, ведь
                            в Андорре находится огромное количество магазинчиков беспошлинной торговли, ради
                            посещения которых сюда приезжают любители покупок за разумные деньги.
                        </p>
                        <p>
                            Экскурсия принесет Вам незабываемые впечатления, хорошее самочувствие от свежего
                            горного воздуха и, конечно же, множество сувениров, которые Вы сможете увезти для
                            своих близких на память о поездке.
                        </p>
                    </div>
                </div>
                <div class="excursions-item">
                    <div class="excursions-item-layer">
                        <img src="img/exc-seaport.jpg" alt="Морской порт">
                    </div>
                    <div class="excursions-item-descr">
                        <div class="excursions-item-title">
                            <div class="target">Морской порт</div>
                            <div class="exc-price">30€</div>
                        </div>
                        <div class="excursions-item-text">
                            Испанский морской порт — крупный торговый порт международного значения, расположен на северо-западном побережье.
                        </div>
                    </div>
                    <div class="descr-full" data-target="Морской порт" data-time="4 часа" data-img-src="img/exc-seaport.jpg">
                        <p>
                            Если Вы уже изучили Барселону от и до, и Вам хочется побывать в других не менее
                            интересных уголках, расположенных относительно недалеко, наша компания приглашает
                            Вас на экскурсию в Андорру.
                        </p>
                        <p>
                            Андорра – это маленькая страна, которую называются «почти что Испанией». В первую
                            очередь она славится своими горнолыжными курортами. Зимой здесь настоящий рай
                            для любителей этого вида спорта. На экскурсии Вы познакомитесь
                            с достопримечательностями исторического центра столицы – Андорры-Ла-Велья, увидите
                            потрясающе красивую церковь Святого Арменголя, погуляете по живописным
                            окрестностям. А еще в ходе экскурсии у Вас непременно будет время на шопинг, ведь
                            в Андорре находится огромное количество магазинчиков беспошлинной торговли, ради
                            посещения которых сюда приезжают любители покупок за разумные деньги.
                        </p>
                        <p>
                            Экскурсия принесет Вам незабываемые впечатления, хорошее самочувствие от свежего
                            горного воздуха и, конечно же, множество сувениров, которые Вы сможете увезти для
                            своих близких на память о поездке.
                        </p>
                    </div>
                </div>
                <div class="excursions-item">
                    <div class="excursions-item-layer">
                        <img src="img/exc-andorra.jpg" alt="Андорра">
                    </div>
                    <div class="excursions-item-descr">
                        <div class="excursions-item-title">
                            <div class="target">Андорра</div>
                            <div class="exc-price">150€</div>
                        </div>
                        <div class="excursions-item-text">
                            Это маленькое независимое княжество, расположенное на Пиренеях между Францией и Испанией.
                        </div>
                    </div>
                    <div class="descr-full" data-target="Андорру" data-time="2 часа" data-img-src="img/exc-andorra.jpg">
                        <p>
                            Если Вы уже изучили Барселону от и до, и Вам хочется побывать в других не менее
                            интересных уголках, расположенных относительно недалеко, наша компания приглашает
                            Вас на экскурсию в Андорру.
                        </p>
                        <p>
                            Андорра – это маленькая страна, которую называются «почти что Испанией». В первую
                            очередь она славится своими горнолыжными курортами. Зимой здесь настоящий рай
                            для любителей этого вида спорта. На экскурсии Вы познакомитесь
                            с достопримечательностями исторического центра столицы – Андорры-Ла-Велья, увидите
                            потрясающе красивую церковь Святого Арменголя, погуляете по живописным
                            окрестностям. А еще в ходе экскурсии у Вас непременно будет время на шопинг, ведь
                            в Андорре находится огромное количество магазинчиков беспошлинной торговли, ради
                            посещения которых сюда приезжают любители покупок за разумные деньги.
                        </p>
                        <p>
                            Экскурсия принесет Вам незабываемые впечатления, хорошее самочувствие от свежего
                            горного воздуха и, конечно же, множество сувениров, которые Вы сможете увезти для
                            своих близких на память о поездке.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7 -->
    <section class="sc-7 main-menu-item layer-container section-pad" id="scroll6">
        <div class="layer-back">
            <picture>
                <source type="image/webp" srcset="img/section-5-bg.webp">
                <source type="image/jpeg" srcset="img/section-5-bg.jpg">
                <img src="img/section-5-bg.jpg" alt="Фотограф">
            </picture>
        </div>
        <div class="inner-wrap">
            <div class="aside-cont">
                <h2 class="main-title line-bot">
                    <span>Фотограф</span>
                    <span class="h3 sub-title">услуги профессионалов</span>
                </h2>
                <div class="aside-cont-text">
                    Всё очень просто. Теперь вам не нужно рыскать по тысячи форумов, искать
                    кто же будет в Испании в нужные вам даты, тратить недели своего времени.
                    Специально для пользователей нашего портала Ведгоу мы уже собрали
                    всех русскоговорящих профессиональных и фотографов, работающих
                    или проживающи в Испании.
                </div>
                <button class="btn btn--grad btn--aside photo-order">ЗАКАЗАТЬ ФОТОГРАФА</button>
            </div>
            <div class="aside-img">
                <picture>
                    <source type="image/webp" srcset="img/section-5-bg-r.webp">
                    <source type="image/png" srcset="img/section-5-bg-r.png">
                    <img src="img/section-5-bg-r.png" alt="Фотограф">
                </picture>
            </div>
        </div>
    </section>

    <!-- SECTION 8 -->
    <section class="sc-8 main-menu-item layer-container section-pad" id="scroll7">
        <div class="layer-back">
            <picture>
                <source type="image/webp" srcset="img/section-6-bg.webp">
                <source type="image/jpeg" srcset="img/section-6-bg.jpg">
                <img src="img/section-6-bg.jpg" alt="ШОППИНГ">
            </picture>
        </div>
        <div class="inner-wrap">
            <div class="aside-cont aside-cont--rev">
                <h2 class="main-title line-bot">
                    <span>ШОППИНГ</span>
                    <span class="h3 sub-title">гид по магазинам</span>
                </h2>
                <div class="aside-cont-text">
                    Шоппинг в Испании — сплошное удовольствие. В городах есть торговые
                    кварталы, где в перерывах между покупками можно выпить кофе или вина
                    на свежем воздухе, а за пределами городов расположены аутлеты,
                    в которых можно сэкономить до 80 % на покупке вещей из прошлогодних
                    коллекций. В Испании стоит покупать не только вино, хамон и оливковое
                    масло, но и обувь, одежду и аксессуары. В этой стране много местных
                    брендов, которые стали известны во всем мире, и цены приятно удивят
                    даже без учета скидок.
                </div>
                <div class="aside-cont-prices">
                    <div>
                        <div>туда</div>
                        <div class="shop-price">90€</div>
                    </div>
                    <div>
                        <div>обратно</div>
                        <div class="shop-price">70€</div>
                    </div>
                    <div>
                        <div>ожидание</div>
                        <div class="shop-price">20€</div>
                    </div>
                </div>
                <button class="btn btn--grad btn--aside shop-order">ХОЧУ НА ШОППИНГ</button>
            </div>
            <div class="aside-img">
                <picture>
                    <source type="image/webp" srcset="img/section-6-bg-l.webp">
                    <source type="image/png" srcset="img/section-6-bg-l.png">
                    <img src="img/section-6-bg-l.png" alt="ШОППИНГ">
                </picture>
            </div>
        </div>
    </section>

    <!-- SECTION 9 -->
    <section class="sc-9 main-menu-item" id="scroll4">
        <div class="inner-wrap section-aligning">
            <h2 class="main-title line-bot">
                <span>ОТЗЫВЫ клиентов</span>
            </h2>
            <div class="reviews-list js-slider-reviews">
                <div class="reviews-item">
                    <div class="circle">
                        <picture>
                            <source type="image/webp" srcset="img/img1.webp">
                            <source type="image/png" srcset="img/img1.png">
                            <img src="img/img1.png" alt="Ксения Костюк">
                        </picture>
                    </div>
                    <div class="reviews-item-name">Ксения Костюк</div>
                    <div class="reviews-item-text">Машина приехала вовремя. Очень долго получали багаж.
                        Дождались. встретили с табличкой. Доставили без проблем.
                        Было нас 6 человек с лыжами. Эту же машину заказали и назад. Водитель вежливый и пунктуальный, большое спасибо.
                    </div>
                    <div class="reviews-item-link">
                        <img src="img/review-link-img.png" alt="">
                        <a href="#!">Читать оригинал отзыва</a>
                    </div>
                </div>
                <div class="reviews-item">
                    <div class="circle">
                        <picture>
                            <source type="image/webp" srcset="img/img2.webp">
                            <source type="image/png" srcset="img/img2.png">
                            <img src="img/img2.png" alt="Виктория Репина">
                        </picture>
                    </div>
                    <div class="reviews-item-name">Виктория Репина</div>
                    <div class="reviews-item-text">Ох и намучалась я с геттрансфером! То машину не вовремя подадут,
                        то цена в 2 раза отличается, сразу чувствуется отношение к клиентам.
                        В барселона-драйвер же все честно и индивидуально
                    </div>
                    <div class="reviews-item-link">
                        <img src="img/review-link-img.png" alt="">
                        <a href="#!">Читать оригинал отзыва</a>
                    </div>
                </div>
                <div class="reviews-item">
                    <div class="circle">
                        <picture>
                            <source type="image/webp" srcset="img/img3.webp">
                            <source type="image/png" srcset="img/img3.png">
                            <img src="img/img3.png" alt="Андрей Розов">
                        </picture>
                    </div>
                    <div class="reviews-item-name">Андрей Розов</div>
                    <div class="reviews-item-text">Очень удобно, что не нужно всю сумму оплачивать заранее,
                        как в большинстве служб по трансферу из Барселоны!
                        Все честно, недорого, цены на сайте и по факту аналогичны
                    </div>
                    <div class="reviews-item-link">
                        <img src="img/review-link-img.png" alt="">
                        <a href="#!">Читать оригинал отзыва</a>
                    </div>
                </div>
                <div class="reviews-item">
                    <div class="circle">
                        <picture>
                            <source type="image/webp" srcset="img/img4.webp">
                            <source type="image/png" srcset="img/img4.png">
                            <img src="img/img4.png" alt="Павел Глазин">
                        </picture>
                    </div>
                    <div class="reviews-item-name">Павел Глазин</div>
                    <div class="reviews-item-text">Пользовались услугами по трансферу из Барселоны в Андорру
                        и обратно в начале февраля 2019. Машины были поданы вовремя,
                        нареканий нет. Спасибо
                    </div>
                    <div class="reviews-item-link">
                        <img src="img/review-link-img.png" alt="">
                        <a href="#!">Читать оригинал отзыва</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10 -->
    <section class="sc-10">
        <div class="inner-wrap">
            <article class="seo_text" data-open="Развернуть текст" data-close="Свернуть текст">
                <p>Во время визита в Барселону приезжие часто теряются и не могут найти автомобиль или такси. Быстрый
                    ритм жизни тут накладывает свой отпечаток и на транспортный поток. Человек, только что сошедший из
                    тихого салона самолета, непременно растеряется, и у него возникнут проблемы с поиском транспорта.
                    Сервис Геттрансфер, который набирает популярность, тоже не всегда может предоставить услуги
                    надлежащего уровня.</p>
                <p>Наша компания Барселона Драйвер специализируется на перевозках и экскурсиях как по Барселоне, так и
                    по всей Европе. Если вы любите комфорт и цените свое время, стоит заранее озаботиться транспортом. И
                    мы готовы заняться этим вопросом. Главное для нас – чтобы клиент остался доволен. Мы всячески
                    стараемся осуществить это. Обширный автопарк, профессиональные водители, подача транспорта
                    заблаговременно, учтивый персонал, система скидок – это далеко не весь список наших преимуществ. Мы
                    предлагаем лучший сервис такси в Барселоне.</p>
                <h2>Обширный автопарк</h2>
                <p>Перед тем, как заказать трансфер из аэропорта Барселоны, ознакомьтесь с нашими автомобилями. Они
                    подобраны таким образом, чтобы соответствовать самым широким запросам. Для представительских визитов
                    у нас есть машины бизнес и представительского классов. Это лучший выбор, если вы привыкли к комфорту
                    или же вам необходимо произвести впечатление на бизнес партнеров в Барселоне. Этот же класс
                    автомобилей будет лучшим выбором и в том случае, если ездить придется много. Ноги и спина не
                    затекут, и вы даже поздним вечером будете чувствовать себя отменно.</p>
                <p>Если же вы приезжаете большой компанией, то трансфер из аэропорта Барселоны "Эль Прат" должен
                    осуществляться минивэном или микроавтобусом. Первые вмещают до 6 человек, вторые – больше.
                    Посчитайте, сколько человек прилетит с вами, и заранее определитесь с типом машины. Но если вы еще
                    не знаете точно, предупредите менеджера и мы сможем найти способы решения возможных проблем. Так же
                    предлагаем качественный трансфер Барселона - Андорра и трансфер Барселона - Салоу.</p>
                <p>Внедорожники станут лучшим выбором, если путь будет пролегать по деревенской местности и бездорожью.
                    Машины оборудованы мягкой подвеской, чтобы вы могли спокойно работать или наслаждаться окружающими
                    пейзажами без дискомфорта.</p>
                <h2>Удобство и забота о клиентах</h2>
                <p>Барселона находится в субтропическом климатическом поясе. Поэтому тут всегда жарко. К тому же, у нас
                    редко бывает пасмурная погода. Поэтому главное, что ценится – это вода. Особенно это отмечают
                    приезжающие из более холодных районов. Мы всегда загружаем в свои автомобили по несколько бутылок
                    прохладной воды. Она предоставляется абсолютно бесплатно, чтобы клиенты не испытывали дискомфорта. К
                    тому же, это маленькое, на первый взгляд, дополнение экономит массу вашего времени.</p>
                <p>Еще одна приятная опция, которой оснащены все машины – это бесплатный WI-FI. Сразу по прилету во
                    время трансфера по Испании вы сможете позвонить по скайпу или телеграмму своим близким и сообщить им
                    об удачном приземлении. А для тех, кто приехал в Барселону по рабочей надобности это отличная
                    возможность назначить встречу деловым партнерам. Вам не нужно тратить огромные деньги на звонки в
                    роуминге или покупать СИМ-карту, активировать ее и пополнять. Мы уже решили эту проблему за вас,
                    оснастив каждый автомобиль бесплатной точкой доступа.</p>
                <h2>Воспитанный и профессиональный персонал</h2>
                <p>У нас работает воспитанный персонал. Помните, как было каждый раз, когда вы вызывали такси? Водители
                    там постоянно без умолку болтают и не дают сосредоточиться на своих делах. Мы же позаботились об
                    этом. Шофер не будет доставать вас разговорами, если видит, что вы заняты. Но если станет скучно, с
                    ним всегда можно перекинуться словом. Особенно это актуально, если трансфер из аэропорта Барселоны
                    затянется и дорога будет дальняя.</p>
                <p>Организовываемые нами экскурсии по известным местам Испании и всей Европе сопровождают
                    профессиональные гиды. Они отлично знают историю и все интересные места, по которым вы желаете
                    проехаться. Причем экскурсия может вестись не только из машины. Если группа пожелает, авто может
                    остановиться, а вы – подойти поближе к достопримечательности. Гид расскажет, чем интересно то или
                    иное место.</p>
                <h2>Честные цены и удобная оплата</h2>
                <p>Наши цены радуют приезжих. Как правило, заказать машину по Барселоне стоит довольно недешево. К тому
                    же, масса проблем, которые сопровождают это дело, отталкивают туристов от данной услуги. Мы же пошли
                    иным путем: максимальная прозрачность и честное сотрудничество. Все цены указаны у нас на сайте. Они
                    всегда актуальны и вы можете ознакомиться со стоимостью заказа авто.</p>
                <p>Во время бронирования автомобиля вам потребуется заполнить как можно больше пунктов. Так мы сможем
                    назвать максимально точную цену услуг. Не забудьте указать обратный телефон и электронный адрес. По
                    ним наш менеджер свяжется с вами для обсуждения всех дополнительных вопросов.</p>
                <p>Оплата производится как на месте, так и онлайн. Для Barcelona Driver важно, чтобы клиенты доверяли
                    нам. Поэтому мы сделали все для удобства оплаты услуг.</p>
                <p>Стоимость рассчитывается, исходя из человеко-часов, километража и типа машины. Нам кажется, что это
                    самый правильный метод определения цены поездки.</p>
                <h2>Доверие клиентов</h2>
                <p>Услугами нашей компании уже воспользовалось множество людей. Они остаются крайне довольными, и в
                    последующие свои визиты, если им нужно заказать трансфер, обращаются именно к нам. Кроме того, они
                    активно советуют нас своим близким. С их отзывами вы можете ознакомиться на сайте.</p>
                <p>Мы гордимся тем, что смогли построить настолько честный и полезный для клиентов бизнес!</p>
            </article>
        </div>
    </section>

    <!-- SECTION 11 -->
    <section class="sc-11">
        <div class="inner-wrap">
            <div class="accept">
                <div class="h2 accept-title">МЫ ПРИНИМАЕМ:</div>
                <div class="accept-pay">
                    <img src="img/visa.png" alt="visa">
                    <img src="img/mc.png" alt="MasterCard">
                    <img src="img/gpay.png" alt="GPay">
                    <img src="img/apple-pay.png" alt="Apple Pay">
                    <img src="img/pay-pal.png" alt="PayPal">
                    <img src="img/yandex.png" alt="Яндекс Деньги">
                </div>
            </div>
        </div>
    </section>
</main>

<!-- FOOTER -->
<footer class="footer">
    <div class="inner-wrap">
        <div class="footer-top">
            <nav>
                <ul class="footer-menu">
                    <li><a href="#scroll1">О компании</a></li>
                    <li><a href="#scroll2">Автопарк</a></li>
                    <li><a href="#scroll3">Прайс-лист</a></li>
                    <li><a href="#scroll4">Отзывы</a></li>
                    <li><a href="#scroll5">Экскурсии</a></li>
                    <li><a href="#scroll6">Фотограф</a></li>
                    <li><a href="#scroll7">Шоппинг</a></li>
                </ul>
            </nav>
            <ul class="footer-soc-btns">
                <li class="">
                    <a href="#" rel="nofollow">
                        <img src="img/facebook.png" alt="ФБ сообщество">
                    </a>
                </li>
                <li class="">
                    <a class="mtm" href="https://vk.com/barcelonadriver" rel="nofollow">
                        <img src="img/vk.png" alt="Вк сообщество">
                    </a>
                </li>
                <li class="">
                    <a href="https://www.instagram.com/barcelonadriver/" rel="nofollow">
                        <img src="img/snapchat.png" alt="Инста канал">
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-bot">
            <div class="footer-brand">
                <img src="img/footer-logo.png" alt="barcelonadriver.com">
                <div class="footer-text">
                    © 2019 - BarcelonaDriver - трансферы и экскурсии<br>
                    по Барселоне и другим городам. Все права защищены.
                </div>
            </div>
            <div class="contact-menu contact-menu--footer">
                <a href="https://wa.me/34635055656" rel="nofollow" target="blank" title="Нажмите, чтобы написать нам в Whatsapp">
                    <img src="img/whatup.png" alt="Ватсапп">
                </a>
                <a href="viber://chat?number=34635055656" rel="nofollow" target="blank" title="Нажмите, чтобы написать нам в Viber">
                    <img src="img/viber.png" alt="Вайбер">
                </a>
                <div class="numbers-sect">
                    <div class="numbers-sect-phone">
                        <button class="arrow-btn js-arrow-btn"></button>
                        <a class="num num-top" href="tel:34635055656">+34 635 05 56 56</a>
                        <div class="numbers-sect-phone-hidden">
                            <a class="num" href="tel:34635726490">+34 635 72 64 90</a>
                            <a class="num" href="tel:34034622264">+34 034 62 22 64</a>
                        </div>
                    </div>
                    <a class="numbers-sect-mail" href="mailto:support@barcelonadriver.com">info@barcelonadriver.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="myModal" class="modal myModal_succes" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header form-pad-h">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <h2 class="modal-title">Бронирование трансфера</h2>
            </div>
            <div class="modal-body">
                <div class="form-pad-h">
                    Ваше бронирование оформлено!<br>
                    Наши менеджеры свяжутся с Вами для уточнения деталей поездки.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal1" class="modal myModal_fail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header form-pad-h">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <h2 class="modal-title">Бронирование трансфера</h2>
            </div>
            <div class="modal-body">
                <div class="form-pad-h">
                    Ваше бронирование не оформлено в связи с отменойоплаты!<br>
                    Повторите попытку или обратитесь в службу технической поддержки.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 ТРАНСФЕР -->
<div id="myModal2" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header form-pad-h">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <h2 class="modal-title">Расчет стоимости и бронирование трансфера</h2>
            </div>
            <div class="modal-body">
                <form action="" name="main_form" onsubmit="return false;">
                    <div class="sect-back-col form-pad-h select-block">
                        <div class="bef1" data-from="откуда">
                            <select class="route" name="" id="first_select_2">
                                <option value="1" selected>Аэропорт Эль Прат</option>
                                <option value="2" disabled>Барселона</option>
                                <option value="3">Ситджес</option>
                                <option value="4">Вианова</option>
                                <option value="5">Кунит</option>
                                <option value="6">Кома-Руга</option>
                                <option value="7">Калафель</option>
                                <option value="8">Торредембарра</option>
                                <option value="9">Салоу</option>
                                <option value="10">Камбрильс</option>
                                <option value="11">Порт Авентура</option>
                                <option value="12">Cruise Port</option>
                                <option value="13">Бадалона</option>
                                <option value="14">Монкада-и-Решак</option>
                                <option value="15">Тарраса</option>
                                <option value="16">Матаро</option>
                                <option value="17">La Roca Village</option>
                                <option value="18">Калелья</option>
                                <option value="19">Мальграт-де-Мар</option>
                                <option value="20">Санта-Сусанна</option>
                                <option value="21">Льорет-де-Мар</option>
                                <option value="22">Тосса-де-Мар</option>
                                <option value="23">Кастель-Пладжа-де-Аро</option>
                                <option value="24">Аэропорт Жирона</option>
                                <option value="25">Фигерас</option>
                                <option value="26">Андорра Ла-Велья</option>
                                <option value="27">Escaldes-Engordany</option>
                                <option value="28">Encamp</option>
                                <option value="29">La Massana</option>
                                <option value="30">La Canillo</option>
                                <option value="31">La El Tarter</option>
                                <option value="32">Soldeu</option>
                                <option value="33">GrauRoig</option>
                                <option value="34">PasdelaCasa</option>
                                <option value="35">Arinsal</option>
                            </select>
                        </div>
                        <img src="img/refresh-button-white.png" alt="&#8596;" class="one_ref">
                        <div class="bef1 bef5" data-from="куда">
                            <select class="route" name="" id="second_select_2">
                                <option value="1" disabled>Аэропорт Эль Прат</option>
                                <option value="2" selected>Барселона</option>
                                <option value="3">Ситджес</option>
                                <option value="4">Вианова</option>
                                <option value="5">Кунит</option>
                                <option value="6">Кома-Руга</option>
                                <option value="7">Калафель</option>
                                <option value="8">Торредембарра</option>
                                <option value="9">Салоу</option>
                                <option value="10">Камбрильс</option>
                                <option value="11">Порт Авентура</option>
                                <option value="12">Cruise Port</option>
                                <option value="13">Бадалона</option>
                                <option value="14">Монкада-и-Решак</option>
                                <option value="15">Тарраса</option>
                                <option value="16">Матаро</option>
                                <option value="17">La Roca Village</option>
                                <option value="18">Калелья</option>
                                <option value="19">Мальграт-де-Мар</option>
                                <option value="20">Санта-Сусанна</option>
                                <option value="21">Льорет-де-Мар</option>
                                <option value="22">Тосса-де-Мар</option>
                                <option value="23">Кастель-Пладжа-де-Аро</option>
                                <option value="24">Аэропорт Жирона</option>
                                <option value="25">Фигерас</option>
                                <option value="26">Андорра Ла-Велья</option>
                                <option value="27">Escaldes-Engordany</option>
                                <option value="28">Encamp</option>
                                <option value="29">La Massana</option>
                                <option value="30">La Canillo</option>
                                <option value="31">La El Tarter</option>
                                <option value="32">Soldeu</option>
                                <option value="33">GrauRoig</option>
                                <option value="34">PasdelaCasa</option>
                                <option value="35">Arinsal</option>
                            </select>
                        </div>
                    </div>
                    <div class="put_price_car form-pad-h">
                        <div class="fl">
                            <input type="radio" name="book-transfer" class="check-with-label2" id="transfer-person-1">
                            <label class="label-for-check2" for="transfer-person-1" value="person 1-4 normal car">
                                <div class="h3 person-val">1-4 человека<br>стандарт</div>
                                <div class="h1 trans-price"></div>
                                <div class="no-price"></div>
                            </label>
                            <div class="fl-avto">
                                <div class="fl-avto-img">
                                    <img src="img/car5.jpg" alt="Fiat tipo">
                                </div>
                                <div class="fl-avto-name">Fiat Tipo</div>
                            </div>
                        </div>
                        <div class="fl">
                            <input type="radio" name="book-transfer" class="check-with-label2" id="transfer-person-2">
                            <label class="label-for-check2" for="transfer-person-2" value="person 1-4 luxury car">
                                <div class="h3 person-val">1-4 человека<br>люкс</div>
                                <div class="h1 trans-price"></div>
                                <div class="no-price"></div>
                            </label>
                            <div class="fl-avto">
                                <div class="fl-avto-img">
                                    <img src="img/car2.jpg" alt="mercedes benz class e">
                                </div>
                                <div class="fl-avto-name">Mercedes Class E</div>
                            </div>
                        </div>
                        <div class="fl">
                            <input type="radio" name="book-transfer" class="check-with-label2" id="transfer-person-3">
                            <label class="label-for-check2" for="transfer-person-3" value="person 1-7 normal car">
                                <div class="h3 person-val">1-7 человек<br> минивен</div>
                                <div class="h1 trans-price"></div>
                                <div class="no-price"></div>
                            </label>
                            <div class="fl-avto">
                                <div class="fl-avto-img">
                                    <img src="img/car1.jpg" alt="mercedes benz class v">
                                </div>
                                <div class="fl-avto-name">Mercedes Class V</div>
                            </div>
                        </div>
                        <div class="fl">
                            <input type="radio" name="book-transfer" class="check-with-label2" id="transfer-person-4">
                            <label class="label-for-check2" for="transfer-person-4" value="person 1-4 premium car">
                                <div class="h3 person-val">1-4 человек<br> премиум</div>
                                <div class="h1 trans-price"></div>
                                <div class="no-price"></div>
                            </label>
                            <div class="fl-avto">
                                <div class="fl-avto-img">
                                    <img src="img/car4.jpg" alt="mercedes benz class s">
                                </div>
                                <div class="fl-avto-name">Mercedes Class S</div>
                            </div>
                        </div>
                    </div>
                    <div class="erro_trnsf">Выберите машину для продолжения оформления трансфера.</div>
                    <button type="button" class="btn btn--grad btn--popup-order order first_step">забронировать</button>
                    <div class="form_hide">
                        <div class="transfer-option">
                            <div class="w684">
                                <div class="form-pad-h">
                                    <input class="inp-w100 mod-inp number_text" type="text" placeholder="Номер рейса прилета, как указано в билете">
                                    <div class="input-title">Дата и время прилета, как указано в билете</div>
                                    <div class="input-sect">
                                        <input type="date" min="" max="2100-12-31" class="inp-w50 mod-inp data_text_1 inp-bg" id="datepicker" required>
                                        <input class="inp-w50 mod-inp time_text_1 inp-bg" type="time" name="" required>
                                    </div>
                                    <div class="input-sect d-col">
                                        <label class="switch">
                                            <input type="checkbox" class="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <span class="wait">
                                            <div>Дополнительный час ожидания</div>
                                            <div class="special">Водитель ждет вас в аэропорту 2 часа вместо 1 часа</div>
                                        </span>
                                        <input type="text" class="inp-dis sitebg" value="0€" readonly>
                                    </div>
                                    <input type="text" class="inp-w100 mod-inp place_text_1" required placeholder="Место назначения: адрес или название отеля">
                                    <div class="title-sect">
                                        <div class="input-title">Число пассажиров включая детей</div>
                                        <div class="input-title">Количество багажа</div>
                                    </div>
                                    <div class="input-sect">
                                        <input class="inp-w50 mod-inp passanger inp-bg" type="number" value="1" min="1" unchecked>
                                        <input class="inp-w50 mod-inp stuff inp-bg" type="number" value="0" required>
                                    </div>
                                    <div class="input-title m-0">Детские кресла и бустеры</div>
                                    <div class="input-sect">
                                        <label class="inp-w50-l">
                                            <span>Кресло</span>
                                            <input class="mod-inp car-seats inp-bg" type="number" value="0" min="0">
                                            <span class="light">Вес: 9-18 кг</span>
                                        </label>
                                        <label class="inp-w50-l">
                                            <span>Бустер</span>
                                            <input class="mod-inp booster inp-bg" type="number" value="0" min="0">
                                            <span class="light">Вес: 15-36 кг</span>
                                        </label>
                                    </div>
                                    <div class="input-sect d-vert">
                                        <div class="sect-w">
                                            <span class="wait">
                                                <div>Доп. остановки (10€ за каждую)</div>
                                            </span>
                                            <div class="bef">
                                                <select class="mod-inp mod-inp--sel" name="" id="nump_priv">
                                                    <option value="">0</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sect-w">
                                            <label class="switch">
                                                <input type="checkbox" class="checkbox2" unchecked>
                                                <span class="slider round"></span>
                                            </label>
                                            <span class="wait">
                                                <div>Обратный трансфер</div>
                                            </span>
                                            <input type="text" class="inp-dis sitebg2" value="0€" readonly>
                                        </div>
                                    </div>
                                    <div style="display: none;" class="info_for_back_transf">
                                        <input type="text" class="inp-w100 mod-inp place_text_2" placeholder="Место отправления: адрес или название отеля">
                                        <div class="input-title">Дата и время подачи трансфера</div>
                                        <div class="input-sect">
                                            <input type="date" min="" max="2100-12-31" class="inp-w50 mod-inp data_text_2 inp-bg" id="datepicker_1">
                                            <input class="inp-w50 mod-inp time_text_2 inp-bg" type="time" id="" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sect-back-col form-pad-h person-conts">
                                    <div class="input-sect">
                                        <input class="inp-w50-smpl mod-inp nobg name_text" type="text" required placeholder="Введите своё имя">
                                        <input class="inp-w50-smpl mod-inp nobg lastname_text" type="text" required placeholder="Введите фамилию">
                                    </div>
                                    <div class="input-sect">
                                        <input type="text" class="inp-w50-smpl mod-inp phone_text" required placeholder="Телефон с кодом страны">
                                        <input type="email" class="inp-w50-smpl mod-inp email_text" required placeholder="Электронная почта">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all form-pad-h">
                            <span>Общая сумма</span>
                            <span class="unitCount"></span>
                        </div>
                        <div class="result form-pad-h"></div>
                        <div class="sect-back-col form-pad-h submit-btns">
                            <button class="btn--grad btn-now order final_order_nopay">забронировать<br>и оплатить на месте</button>
                            <button class="btn--black btn-now order final_order_pay">забронировать<br>и оплатить онлайн</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 забронировать экскурсию -->
<div id="myModal3" class="simple-form modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header form-pad-h">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <h2 class="modal-title send-title">ЭКСКУРСИЯ В <span class="target"></span></h2>
            </div>
            <div class="modal-body">
                <img class="exc-img" src="" alt="">
                <div class="exc-full-text form-pad-h"></div>
                <div class="exc-feat form-pad-h">
                    <div class="exc-time">Длительность экскурсии: <span></span></div>
                    <div class="exc-mod-price">Стоимость: <span></span></div>
                </div>
                <div class="form-sect form-pad-h sect-back-col">
                    <div class="h2 modal-title">ЗАКАЗАТЬ ЭКСКУРСИЮ В <span class="target"></span></div>
                    <div class="modal-subtitle">Заполните форму и наш менеджер свяжется с вами в ближайшее время</div>
                    <form name="exc_form" action="">
                        <div class="inp-field">
                            <input class="name_client mod-inp" type="text" maxlength="50" title="Макс. длина - 50 символов" required placeholder="Введите своё имя">
                            <input type="text" class="phone_number mod-inp" required placeholder="Номер телефона">
                            <textarea maxlength="350" class="comments_text" placeholder="Комментарий" title="Макс. длина - 350 символов"></textarea>
                        </div>
                        <button type="button" class="btn btn--grad btn--exc smpl-order">заказать</button>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 photographer -->
<div id="myModal4" class="simple-form smpl modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header form-pad-h">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <h2 class="modal-title send-title">ЗАКАЗАТЬ ФОТОГРАФА</h2>
            </div>
            <div class="modal-body">
                <div class="form-sect form-pad-h">
                    <div class="modal-subtitle">Заполните форму и наш менеджер свяжется с вами в ближайшее время</div>
                    <form name="photo_form" action="">
                        <div class="inp-field">
                            <input class="name_client mod-inp" type="text" maxlength="50" title="Макс. длина - 50 символов" required placeholder="Введите своё имя">
                            <input type="text" class="phone_number mod-inp" required placeholder="Номер телефона">
                            <textarea maxlength="350" class="comments_text" placeholder="Комментарий" title="Макс. длина - 350 символов"></textarea>
                        </div>
                        <button type="button" class="btn btn--grad btn--exc smpl-order">заказать</button>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 shopping -->
<div id="myModal5" class="simple-form smpl modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header form-pad-h">
                <button type="button" class="modal-close" data-dismiss="modal"></button>
                <h2 class="modal-title send-title">ХОЧУ НА ШОППИНГ</h2>
            </div>
            <div class="modal-body">
                <div class="form-sect form-pad-h">
                    <div class="modal-subtitle">Заполните форму и наш менеджер свяжется с вами в ближайшее время</div>
                    <form name="shop_form" action="">
                        <div class="inp-field">
                            <input class="name_client mod-inp" type="text" maxlength="50" title="Макс. длина - 50 символов" required placeholder="Введите своё имя">
                            <input type="text" class="phone_number mod-inp" required placeholder="Номер телефона">
                            <textarea maxlength="350" class="comments_text" placeholder="Комментарий" title="Макс. длина - 350 символов"></textarea>
                        </div>
                        <button type="button" class="btn btn--grad btn--exc smpl-order">заказать</button>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/main.js"></script>
<script src="js/ru.js"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments);
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a);
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(54508261, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54508261" style="position:absolute; left:-9999px;" alt="метрика" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">
    var arrgetbtn = [];
    arrgetbtn.push({
        "title": "Whatsapp",
        "icon": "fwidgethelp-whatsapp",
        "link": "https://wa.me/34635055656",
        "target": "_blank",
        "color": "#FFFFFF",
        "background": "#5EC758"
    });
    arrgetbtn.push({
        "title": "Viber",
        "icon": "fwidgethelp-viber",
        "link": "viber://chat?number=34635055656",
        "target": "_blank",
        "color": "#FFFFFF",
        "background": "#8456A7"
    });
    var WidGetButtonOptions = {
        id: "9443a9d37984b85366905c31d1e71ab4",
        iconopen: "fwidgethelp-commenting-o",
        maintitle: "",
        mainbackground: "#FF3338",
        maincolor: "#FFFFFF",
        pulse: "widgethelp_pulse",
        fasize: "2",
        direction: "top",
        position: "rightbottom",
        arrbtn: arrgetbtn
    };
    (function () {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.async = true;
        script.src = "https://getbtn.com/widget/index.php?id=" + WidGetButtonOptions.id;
        document.getElementsByTagName("head")[0].appendChild(script);
    })();</script>

</body>
</html>
