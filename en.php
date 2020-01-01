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
<html lang="en">
<head>
    <title>Transfer from Barcelona airport. Booking and ordering a premium car</title>
    <meta name="description"
          content="If you want to order an inexpensive transfer in Barcelona, our company will be an excellent performer of this service. Choose your favorite car, time of stay, and enjoy a wonderful trip."/>
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
                    <li class="current-lang"><img src="img/eng.png" alt="английская версия сайта"><span>English</span></li>
                    <li><a href="/ru"><img src="img/rus.png" alt="русская версия сайта"><span>Русский</span></a></li>
                </ul>
                <div class="contact-menu">
                    <a href="https://wa.me/34635055656" rel="nofollow" target="blank" title="Click here to write to us at Whatsapp">
                        <img src="img/whatup.png" alt="Whatsapp">
                    </a>
                    <a href="viber://chat?number=34635055656" rel="nofollow" target="blank" title="Click here to write to us at Viber">
                        <img src="img/viber.png" alt="Viber">
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
                <a href="https://wa.me/34635055656" rel="nofollow" target="blank" title="Click here to write to us at Whatsapp">
                    <img src="img/whatup.png" alt="Whatsapp">
                </a>
                <a href="viber://chat?number=34635055656" rel="nofollow" target="blank" title="Click here to write to us at Viber">
                    <img src="img/viber.png" alt="Viber">
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
                        <li><a class="" href="#scroll1">About us</a></li>
                        <li><a class="" href="#scroll2">Vehicle fleet</a></li>
                        <li><a class="" href="#scroll3">Price list</a></li>
                        <li><a class="" href="#scroll4">Reviews</a></li>
                        <li><a class="" href="#scroll5">Экскурсии</a></li>
                        <li><a class="" href="#scroll6">Фотограф</a></li>
                        <li><a class="" href="#scroll7">Шоппинг</a></li>
                    </ul>
                </nav>
                <ul class="header-soc-btns">
                    <li class="">
                        <a href="#" rel="nofollow">
                            <img src="img/facebook.png" alt="facebook">
                        </a>
                    </li>
                    <li class="">
                        <a class="mtm" href="https://vk.com/barcelonadriver" rel="nofollow">
                            <img src="img/vk.png" alt="vk">
                        </a>
                    </li>
                    <li class="">
                        <a href="https://www.instagram.com/barcelonadriver/" rel="nofollow">
                            <img src="img/snapchat.png" alt="instagram">
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
                <source type="image/webp" srcset="img/section-1-bg.webp">
                <source type="image/jpeg" srcset="img/section-1-bg.jpg">
                <img src="img/section-1-bg.jpg" alt="Трансферы и такси в Барселоне">
            </picture>
        </div>
        <div class="inner-wrap section-aligning">
            <h1 class="main-title">
                <span>Трансферы и такси в Барселоне</span>
                <span class="h3 sub-title">с русскоговорящими водителями</span>
                <span class="h2 commerc-mess">
                <!--МЕСТО ДЛЯ РЕКЛАМНОГО ТЕКСТА-->
                </span>
            </h1>
            <div class="route-block">
                <div class="h3 form-text"> Find out the cost of the trip</div>
                <form action="">
                    <div class="bef1" data-from="from">
                        <select name="" id="first_select">
                            <option value="1" selected>El Prat Airport</option>
                            <option value="2" disabled>Barcelona</option>
                            <option value="3">Sitges</option>
                            <option value="4">Vilanova</option>
                            <option value="5">Cunit</option>
                            <option value="6">Comarruga</option>
                            <option value="7">Calafell</option>
                            <option value="8">Torredembarra</option>
                            <option value="9">Salou</option>
                            <option value="10">Cambrils</option>
                            <option value="11">Port Aventura</option>
                            <option value="12">Cruise Port</option>
                            <option value="13">Badalona</option>
                            <option value="14">Montcada i Reixac</option>
                            <option value="15">Terrassa</option>
                            <option value="16">Mataró</option>
                            <option value="17">La Roca Village</option>
                            <option value="18">Calella</option>
                            <option value="19">Malgrat de Mar</option>
                            <option value="20">Santa Susanna</option>
                            <option value="21">Lloret de Mar</option>
                            <option value="22">Tossa de Mar</option>
                            <option value="23">Castell-Platja d'Aro</option>
                            <option value="24">Girona Airport</option>
                            <option value="25">Figueres</option>
                        </select>
                    </div>
                    <img src="img/refresh-button-white.png" alt="&#8596;" class="one_ref">
                    <div class="bef1 bef5" data-from="to">
                        <select name="" id="second_select">
                            <option value="1" disabled>El Prat Airport</option>
                            <option value="2" selected>Barcelona</option>
                            <option value="3">Sitges</option>
                            <option value="4">Vilanova</option>
                            <option value="5">Cunit</option>
                            <option value="6">Comarruga</option>
                            <option value="7">Calafell</option>
                            <option value="8">Torredembarra</option>
                            <option value="9">Salou</option>
                            <option value="10">Cambrils</option>
                            <option value="11">Port Aventura</option>
                            <option value="12">Cruise Port</option>
                            <option value="13">Badalona</option>
                            <option value="14">Montcada i Reixac</option>
                            <option value="15">Terrassa</option>
                            <option value="16">Mataró</option>
                            <option value="17">La Roca Village</option>
                            <option value="18">Calella</option>
                            <option value="19">Malgrat de Mar</option>
                            <option value="20">Santa Susanna</option>
                            <option value="21">Lloret de Mar</option>
                            <option value="22">Tossa de Mar</option>
                            <option value="23">Castell-Platja d'Aro</option>
                            <option value="24">Girona Airport</option>
                            <option value="25">Figueres</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn--grad btn--score run_price" data-target="#myModal2">
                        Calculate
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
                    <span>PRICE LIST</span>
                </h2>
                <div class="price-tables-btn">
                    <label class="btn btn--transp" for="barcelona">БАРСЕЛОНА</label>
                    <label class="btn btn--transp" for="dorada">costa daurada</label>
                    <label class="btn btn--transp" for="brava">costa brava</label>
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
                            <td class="b-t">person 1-4 standart car</td>
                            <td class="b-t">person 1-4 luxury car</td>
                            <td class="b-t">person 1-7 minivan</td>
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

                <button class="btn btn--grad btn--order" data-target="#myModal2">Book a transfer</button>
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
                <span>Transfer from Barcelona airport</span>
            </h2>
            <div class="about-text">
                <div class="corner-border"></div>
                <span>Barcelona Driver</span> - is a young but ambitious and fast-growing company that provides transfers and excursions to Barcelona and other cities. You can order cars of any class with a personal driver and guide. In addition to the choice of class, you can rent cars of different capacities. In our fleet there are cars of the following categories: business class, executive class, minivans, SUVs, minibuses. We know how to make customers' lives more comfortable and economical. Therefore, passengers can get water and use WI-FI absolutely free of charge during trips. Also, the car will wait 60 minutes for you at the airport free of charge. You can pay with your card, PayPal and other possible ways. And for regular customers we provide a flexible discount system.
                <div class="corner-border corner-border--rev"></div>
            </div>
        </div>
    </section>

    <!-- SECTION 5 -->
    <section class="sc-5 main-menu-item" id="scroll2">
        <div class="inner-wrap">
            <h2 class="main-title">
                <span class="line-bot">VEHICLE FLEET</span>
            </h2>
            <div class="automob-list">
                <div class="automob-item">
                    <img src="img/car1.jpg" alt="mercedes benz class v">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class v</div>
                        <div>Capacity up to 7 people</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car2.jpg" alt="mercedes benz class e">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class e</div>
                        <div>Capacity up to 4 people</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car3.jpg" alt="mercedes benz class c">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class c</div>
                        <div>Capacity up to 4 people</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car4.jpg" alt="mercedes benz class s">
                    <div class="automob-item-text">
                        <div class="automob-item-name">mercedes benz class s</div>
                        <div>Capacity up to 4 people</div>
                    </div>
                </div>
                <div class="automob-item">
                    <img src="img/car5.jpg" alt="Fiat tipo">
                    <div class="automob-item-text">
                        <div class="automob-item-name">Fiat tipo</div>
                        <div>Capacity up to 4 people</div>
                    </div>
                </div>
                <div class="automob-item automob-item--btn" id="order-btn" data-target="#myModal2">
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
                <span>tours</span>
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
                            The Barcelona sightseeing tour by car for 4-6-8 hours involves acquaintance with the main attractions - the main street of Paseo de Grazia with the famous Gaudi masterpieces - the Batllo house and the House of Mila, the Holy Family Cathedral, Park Guell, Spain Square and magnificent views from the Montjuic mountain , the highest point of Barcelona is Mount Tibedabo and of course the history of Barcelona - the old city or the Gothic quarter with its amazing secrets accumulated over 2000 years, La Rambla and Boqueria market with a wide assortment of fruits, jamon, cheese and seafood
                        </p>
                        <p>
                            Our guide will take care of buying tickets to the Holy Family Cathedral and to the Park Guell, will calculate the time and you will not have to stand in tedious queues
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
                            <div class="exc-price">65€</div>
                        </div>
                        <div class="excursions-item-text">
                            Порт располагается у начала бульвара La Rambla (Ла Рамбла — самый знаменитый бульвар Барселоны, также известный, как Las Ramblas.
                        </div>
                    </div>
                    <div class="descr-full" data-target="Cruise Port" data-time="3 часа" data-img-src="img/exc-port.jpg">
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
                <span>REVIEWS</span>
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
                <p>During a visit to Barcelona, visitors are often lost and cannot find a car or taxi. The fast rhythm
                    of life here also affects the traffic flow. A person who has just stepped down from the quiet cabin
                    of an airplane is bound to be confused, and he or she will have problems finding transportation.
                    Gettransfer service, which is gaining popularity, also can not always provide services of the proper
                    level.</p>
                <p>Our company Barcelona Driver specializes in transportation and excursions both in Barcelona and
                    throughout Europe. If you like comfort and appreciate your time, you should take care of transport
                    in advance. And we are ready to deal with this issue. The main thing for us is to make the client
                    satisfied. We try our best to do it. Extensive car park, professional drivers, transport delivery in
                    advance, courteous staff, discount system - this is not the whole list of our advantages.</p>
                <h2>EXTENSIVE FLEET</h2>
                <p>Before you book a transfer from Barcelona airport, please check out our cars. They are selected to
                    meet the widest range of needs. For executive visits we have business and executive class cars. This
                    is the best choice if you are used to the comfort or if you need to impress your business partners
                    in Barcelona. The same class of cars will be the best choice in case you have to drive a lot. Your
                    legs and back will not be painful, and you will feel great even late at night.</p>
                <p>If you are coming in large groups, the transfer from Barcelona airport should be by minivan or
                    minibus. The first can accommodate up to 6 people, the second - more. Calculate how many people will
                    come with you, and decide in advance on the type of car. But if you don't know for sure yet, warn
                    the manager and we will be able to find solutions to possible problems.</p>
                <p>SUVs will be the best choice if the route runs through the countryside and off-road. The vehicles are
                    equipped with a soft suspension so that you can work quietly or enjoy the surrounding scenery
                    without discomfort.</p>
                <h2>CONVENIENCE AND CUSTOMER CARE</h2>
                <p>Barcelona is located in a subtropical climate zone. So it's always hot here. Besides, we rarely have
                    cloudy weather. Therefore, the main thing that is appreciated is water. This is especially noted by
                    those coming from colder areas. We always put several bottles of cool water into our cars. It is
                    provided absolutely free of charge, so that customers do not feel uncomfortable. In addition, this
                    small, at first glance, addition saves a lot of your time.</p>
                <p>Another nice option that all machines are equipped with is the free WI-FI. Upon arrival, you can call
                    your loved ones via Skype or telegram to inform them of a successful landing. And for those who have
                    arrived in Barcelona on working need it is a great opportunity to make an appointment with business
                    partners. You do not need to spend a lot of money on calls in roaming or buy a SIM card, activate it
                    and refill it. We have already solved this problem for you by equipping each car with a free access
                    point.</p>
                <h2>WELL-BEHAVED AND QUALIFIED STAFF</h2>
                <p>We have mannered staff. Remember how it was every time you called a taxi? Drivers there are always
                    talking all the time and don't let you focus on the business. We took care of it. The chauffeur
                    won't bother you with talking if he sees you're busy. But if you get bored, you can always talk to
                    him. This is especially true if the transfer from Barcelona airport takes longer and the road will
                    be long.</p>
                <p>Our excursions to famous places in Spain and all over Europe are accompanied by professional guides.
                    They know the history and all the interesting places you want to go. And the excursion can be
                    conducted not only from the car. If the group would like, the car can stop, and you - come closer to
                    the sights. The guide will tell you why this or that place is interesting.</p>
                <h2>FAIR PRICES AND CONVENIENT PAYMENT</h2>
                <p>Our prices make the visitors happy. As a rule, ordering a car in Barcelona is quite expensive. In
                    addition, a lot of problems that accompany this case, push away tourists from this service. We went
                    the other way: maximum transparency and honest cooperation. All prices are listed on our website.
                    They are always relevant and you can see the cost of ordering a car.</p>
                <p>You will need to fill in as many items as you can when booking your car. This way, we can give you
                    the most accurate price. Don't forget to enter your return phone number and email address. Our
                    manager will contact you to discuss any additional questions.</p>
                <p>Payment is made both locally and online. For Barcelona Driver it is important that customers trust
                    us. That's why we have done everything to make it easy to pay for our services.</p>
                <p>The cost is calculated based on the number of people, hours, kilometers and type of car. It seems to
                    us that this is the most correct method of determining the price of a trip.</p>
                <h2>CUSTOMER CONFIDENCE</h2>
                <p>Our services have already been used by many people. They are extremely satisfied and in future
                    visits, if they need to order a transfer, they contact us. In addition, they actively advise us to
                    their loved ones. You can find their feedback on the website.</p>
                <p>We are proud to have been able to build such an honest and useful business for our clients!</p>
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
                    <li><a href="#scroll1">About us</a></li>
                    <li><a href="#scroll2">Vehicle fleet</a></li>
                    <li><a href="#scroll3">Price list</a></li>
                    <li><a href="#scroll4">Reviews</a></li>
                    <li><a href="#scroll5">Экскурсии</a></li>
                    <li><a href="#scroll6">Фотограф</a></li>
                    <li><a href="#scroll7">Шоппинг</a></li>
                </ul>
            </nav>
            <ul class="footer-soc-btns">
                <li class="">
                    <a href="#" rel="nofollow">
                        <img src="img/facebook.png" alt="facebook">
                    </a>
                </li>
                <li class="">
                    <a class="mtm" href="https://vk.com/barcelonadriver" rel="nofollow">
                        <img src="img/vk.png" alt="vk">
                    </a>
                </li>
                <li class="">
                    <a href="https://www.instagram.com/barcelonadriver/" rel="nofollow">
                        <img src="img/snapchat.png" alt="instagram">
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
                <a href="https://wa.me/34635055656" rel="nofollow" target="blank" title="Click here to write to us at Whatsapp">
                    <img src="img/whatup.png" alt="Whatsapp">
                </a>
                <a href="viber://chat?number=34635055656" rel="nofollow" target="blank" title="Click here to write to us at Viber">
                    <img src="img/viber.png" alt="Viber">
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
                                <option value="1" selected>El Prat Airport</option>
                                <option value="2" disabled>Barcelona</option>
                                <option value="3">Sitges</option>
                                <option value="4">Vilanova</option>
                                <option value="5">Cunit</option>
                                <option value="6">Comarruga</option>
                                <option value="7">Calafell</option>
                                <option value="8">Torredembarra</option>
                                <option value="9">Salou</option>
                                <option value="10">Cambrils</option>
                                <option value="11">Port Aventura</option>
                                <option value="12">Cruise Port</option>
                                <option value="13">Badalona</option>
                                <option value="14">Montcada i Reixac</option>
                                <option value="15">Terrassa</option>
                                <option value="16">Mataró</option>
                                <option value="17">La Roca Village</option>
                                <option value="18">Calella</option>
                                <option value="19">Malgrat de Mar</option>
                                <option value="20">Santa Susanna</option>
                                <option value="21">Lloret de Mar</option>
                                <option value="22">Tossa de Mar</option>
                                <option value="23">Castell-Platja d'Aro</option>
                                <option value="24">Girona Airport</option>
                                <option value="25">Figueres</option>
                            </select>
                        </div>
                        <img src="img/refresh-button-white.png" alt="&#8596;" class="one_ref">
                        <div class="bef1 bef5" data-from="куда">
                            <select class="route" name="" id="second_select_2">
                                <option value="1" disabled>El Prat Airport</option>
                                <option value="2" selected>Barcelona</option>
                                <option value="3">Sitges</option>
                                <option value="4">Vilanova</option>
                                <option value="5">Cunit</option>
                                <option value="6">Comarruga</option>
                                <option value="7">Calafell</option>
                                <option value="8">Torredembarra</option>
                                <option value="9">Salou</option>
                                <option value="10">Cambrils</option>
                                <option value="11">Port Aventura</option>
                                <option value="12">Cruise Port</option>
                                <option value="13">Badalona</option>
                                <option value="14">Montcada i Reixac</option>
                                <option value="15">Terrassa</option>
                                <option value="16">Mataró</option>
                                <option value="17">La Roca Village</option>
                                <option value="18">Calella</option>
                                <option value="19">Malgrat de Mar</option>
                                <option value="20">Santa Susanna</option>
                                <option value="21">Lloret de Mar</option>
                                <option value="22">Tossa de Mar</option>
                                <option value="23">Castell-Platja d'Aro</option>
                                <option value="24">Girona Airport</option>
                                <option value="25">Figueres</option>
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
                        </div>
                        <div class="fl">
                            <input type="radio" name="book-transfer" class="check-with-label2" id="transfer-person-2">
                            <label class="label-for-check2" for="transfer-person-2" value="person 1-4 luxury car">
                                <div class="h3 person-val">1-4 человека<br>люкс</div>
                                <div class="h1 trans-price"></div>
                                <div class="no-price"></div>
                            </label>
                        </div>
                        <div class="fl">
                            <input type="radio" name="book-transfer" class="check-with-label2" id="transfer-person-3">
                            <label class="label-for-check2" for="transfer-person-3" value="person 4-6 normal car">
                                <div class="h3 person-val">1-7 человек<br> минивен</div>
                                <div class="h1 trans-price"></div>
                                <div class="no-price"></div>
                            </label>
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
                        <button class="btn btn--grad btn--exc smpl-order">заказать</button>
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
                        <button class="btn btn--grad btn--exc smpl-order">заказать</button>
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
                        <button class="btn btn--grad btn--exc smpl-order">заказать</button>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/main.js"></script>
<script src="js/eng.js"></script>


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
