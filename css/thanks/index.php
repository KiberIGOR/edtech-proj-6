<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
include_once $ROOT . 'version.php';
?>
<!DOCTYPE html>
<html>

<head>
    <?php if (!empty($_SERVER['DOCUMENT_URI'])) : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] . str_replace(substr($_SERVER['DOCUMENT_URI'], 1, -9), '', $_SERVER['REQUEST_URI']) ?>">
    <?php else : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] ?>">
    <?php endif; ?>

    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Закрытый акселератор EdTech Evolution | «Гиперкуб» в «Сколково»">
    <meta property="og:description" content="Закрытый акселератор EdTech Evolution">
    <meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">

    <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.synergy.ru/libs/bootstrap/bootstrap-4.5.2.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M62HCD');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M62HCD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    
    
    
    <div class="wrapper">
        

<header class="header active nobtn">
    <div class="container">
        <div class="header__box">
            <div class="header__logo">
                <div class="header__logo-box">
                    <img src="img/header/logo-skolk.jpg" alt="Сколково" class="header__logo-skolk">
                    <img src="img/header/logo.svg" alt="Synergy - Больше чем образование" class="header__logo-syn">
                </div>
            </div>
            <div class="header__descktop-menu">
                <a href="#concept" class=" scroll">Концепция</a>
                <a href="#advantage" class=" scroll">Преимущества</a>
                <?php /*?><a href="#program" class=" scroll">Программа</a><?php */ ?>
            </div>
            <div class="header__phone">
                <?php /*?><a href="tel:<?= $phone_link ?>" class="header__phone-box"><img src="img/header/phone.svg" alt="" class="header__phone-logo"></a><?php */ ?>
                <?php /*?><a href="tel:<?= $phone_link ?>" class="header__phone-number"><?= $phone ?></a><?php */ ?>
                <a href="#popup-reg" data-fancybox class="header__button">Начать учиться</a>
            </div>
            <nav class="header__nav">
                <a href="#concept" class="header__nav-link scroll" style="animation-delay: 0.2s;">Концепция</a>
                <a href="#advantage" class="header__nav-link scroll" style="animation-delay: 0.3s;">Преимущества</a>
                <a href="#program" class="header__nav-link scroll" style="animation-delay: 0.4s;">Программа</a>
                <!-- <a href="tel:<?= $phone_link ?>" class="header__nav-link scroll" style="animation-delay: 0.4s;"><?= $phone ?></a> -->
                <a href="#popup-reg" data-fancybox class="header__nav-button scroll red" style="animation-delay: 0.5s;">Оставить заявку</a>
            </nav>
            <div class="header__menu">
                <svg class="ham hamRotate hamR" viewBox="0 0 100 100" onclick="this.classList.toggle('active')">
                    <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                    <path class="line middle" d="m 70,50 h -40" />
                    <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                </svg>
            </div>
        </div>
    </div>
</header>
<section class="thanks">
  <div class="container">
    <div class="thanks__inner">
      <img src="img/thanks/submit.png" alt="" class="thanks__img">
      <div class="thanks__title">Спасибо!</div>
      <div class="thanks__subtitle">Ваша заявка отправлена.</div>
      <div class="thanks__text">
        В ближайшее время специалист свяжется с вами и ответит на Ваши вопросы.
      </div>
      <a class="thanks__button" href="https://synergy.ru/lp/edtech">На главную</a>
    </div>
  </div>
</section>
<section class="footer">
	<div class="container">

		<div class="footer__content">

			<div class="footer__synDigital">
				Разработано и&nbsp;продвигается&nbsp;&mdash;
				<a href="https://sydi.ru/" target="_blank">Synergy&nbsp;Digital</a>
			</div>

			<div class="footer__privacyPolicy">
				<a class="fancybox-privacy-link footer__developer-link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a>
			</div>

		</div>

	</div>
</section>

    </div>

    <div hidden>
        

        <div class="popup popup-reg" id="popup-reg">
    
<form action="<?= $action ?>&form=popup-reg" class="form vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставьте заявку, чтобы получить консультацию по акселератору</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Оставить заявку</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div> -->
                <div class="form__footer-text">Отправляя данную форму, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой обработки персональных данных </a>и на получение рассылок</div>
            </label>
        </div>
    </div>
</form>

</div>

        

        <a href="//sydi.ru/"></a>
    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js" defer="defer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Скрипт ALM Lander -->
    <script src="https://syn.su/js/lander.js" defer></script>
    <script src="js/script.js"></script>

</body>

</html>