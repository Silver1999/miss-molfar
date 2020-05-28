<!DOCTYPE html>
<html class="page page--index" lang="ru">
<head>
    <title>Miss Molfar — Molfar Beauty Forum</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/><!-- facebook open graph tags -->
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://online.molfarforum.com/"/>
    <meta property="og:title" content="Miss Molfar — Molfar Beauty Forum"/>
    <meta property="og:description" content="Конкурс красоты для участниц beauty-форума Molfar"/>
    <meta property="og:image" content="img/og-image.jpg"/>
    <meta property="og:image:secure_url" content="img/og-image.jpg"/><!-- twitter card tags -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:domain" value="online.molfarforum.com"/>
    <meta name="twitter:title" value="Miss Molfar — Molfar Beauty Forum"/>
    <meta name="twitter:description" value="Конкурс красоты для участниц beauty-форума Molfar"/>
    <meta name="twitter:image" content="img/og-image.jpg"/>
    <meta name="twitter:url" value="https://online.molfarforum.com/"/><!-- favicon --><!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-XXXXXXX'); // enter your code
    </script>
    <link rel="stylesheet" href="css/styles.min.css?v=1586338379280"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<div class="page__wrapper">
    <button class="menu"><span>Меню</span>
        <svg class="menu__icon" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24" viewBox="0 0 24 24">
            <g class="menu__toggle">
                <path class="menu__line menu__line--1" d="M3,6v2h18V6H3z"></path>
                <path class="menu__line menu__line--2" d="M3,13h18v-2H3V13z"></path>
                <path class="menu__line menu__line--3" d="M3,18h18v-2H3V18z"></path>
            </g>
        </svg>
    </button>
    <header class="header">
        <div class="header__container container">
            <nav class="header__nav"><a class="header__link header__link--logo" href="https://2020.molfarforum.com/">Главная
                    <svg class="icon icon--molfar" width="121.67" height="30">
                        <use xlink:href="img/svg/symbol/sprite.svg#molfar"></use>
                    </svg>
                </a>
                <ul class="header__list header__list--links">
                    <li class="header__link-wrapper header__link-wrapper--mobile"><a class="header__link">Главная</a>
                    </li>
                    <li class="header__link-wrapper"><a class="header__link" href="/link1">link1</a>
                    </li>
                    <li class="header__link-wrapper"><a class="header__link" href="/link2">link2</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="page__content" role="main">
        <section class="hero hero--index">
            <div class="hero__container container">
                <header class="heading hero__heading">
                    <h1 class="heading__title">Miss Molfar
                    </h1>
                    <p class="heading__text">Конкурс красоты<br/>для участниц beauty-форума Molfar
                    </p><a class="button button--white" href="#registration">Принять участие</a>
                </header>
            </div>
        </section>
        <section class="org">
            <div class="org__container container">
                <svg class="icon icon--sff_logo" width="340" height="70">
                    <use xlink:href="img/svg/symbol/sprite.svg#sff_logo"></use>
                </svg>
                <header class="heading org__heading">
                    <p class="heading__text"><b>Организатор Miss Molfar</b> — модельное агентство Star Face Family.
                    </p>
                    <p class="heading__text">Один из основных проектов агентства — имиджевый конкурс красоты и моды <b>Star
                            Face of the Season</b>
                    </p>
                </header>
                <div class="org__wrapper">
                    <div class="org__img-wrapper lazyload">
                    </div>
                </div>
            </div>
            <svg class="moving-text moving-text--org" id="text-container" viewBox="0 0 500 96" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path id="text-curve" d="M0 79.5h1203"></path>
                <text y="0" font-size="96">
                    <textpath class="moving-text__textpath moving-text__textpath--org" id="text-path" href="#text-curve"
                              startOffset="200">Star Face Family
                    </textpath>
                </text>
            </svg>
        </section>
        <section class="for-you">
            <div class="for-you__container container">
                <header class="heading for-you__heading">
                    <h2 class="heading__title">Чего ждать от конкурса
                    </h2>
                </header>
                <ul class="for-you__list">
                    <li class="for-you__wrapper for-you__wrapper--desktop loading"><img class="for-you__img lazyload"
                                                                                        data-srcset="/img/for-you/img/for-you (1)_720.jpg 360w, /img/for-you/img/for-you (1)_1080.jpg 720w, /img/for-you/img/for-you (1)_1280.jpg 1080w"
                                                                                        data-src="/img/for-you/img/for-you (1)_720.jpg"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                        alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--cover loading">
                        <p class="for-you__text">Работа с профессиональными стилистами, парикмахерами и визажистами
                        </p><img class="for-you__img lazyload"
                                 data-srcset="/img/for-you/img/for-you (2)_720.jpg 360w, /img/for-you/img/for-you (2)_1080.jpg 720w, /img/for-you/img/for-you (2)_1280.jpg 1080w"
                                 data-src="/img/for-you/img/for-you (2)_720.jpg"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 alt="Работа с профессиональными стилистами, парикмахерами и визажистами" title=""/>
                    </li>
                    <li class="for-you__wrapper loading"><img class="for-you__img lazyload"
                                                              data-srcset="/img/for-you/img/for-you (3)_720.jpg 360w, /img/for-you/img/for-you (3)_1080.jpg 720w, /img/for-you/img/for-you (3)_1280.jpg 1080w"
                                                              data-src="/img/for-you/img/for-you (3)_720.jpg"
                                                              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                              alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--cover loading">
                        <p class="for-you__text">Профессиональные фотосессии
                        </p><img class="for-you__img lazyload"
                                 data-srcset="/img/for-you/img/for-you (4)_720.jpg 360w, /img/for-you/img/for-you (4)_1080.jpg 720w, /img/for-you/img/for-you (4)_1280.jpg 1080w"
                                 data-src="/img/for-you/img/for-you (4)_720.jpg"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 alt="Профессиональные фотосессии" title=""/>
                    </li>
                    <li class="for-you__wrapper loading"><img class="for-you__img lazyload"
                                                              data-srcset="/img/for-you/img/for-you (6)_720.jpg 360w, /img/for-you/img/for-you (6)_1080.jpg 720w, /img/for-you/img/for-you (6)_1280.jpg 1080w"
                                                              data-src="/img/for-you/img/for-you (6)_720.jpg"
                                                              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                              alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--cover loading">
                        <p class="for-you__text">Тысячи лайков в Instagram
                        </p><img class="for-you__img lazyload"
                                 data-srcset="/img/for-you/img/for-you (5)_720.jpg 360w, /img/for-you/img/for-you (5)_1080.jpg 720w, /img/for-you/img/for-you (5)_1280.jpg 1080w"
                                 data-src="/img/for-you/img/for-you (5)_720.jpg"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 alt="Тысячи лайков в Instagram" title=""/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--desktop loading"><img class="for-you__img lazyload"
                                                                                        data-srcset="/img/for-you/img/for-you (7)_720.jpg 360w, /img/for-you/img/for-you (7)_1080.jpg 720w, /img/for-you/img/for-you (7)_1280.jpg 1080w"
                                                                                        data-src="/img/for-you/img/for-you (7)_720.jpg"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                        alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--desktop loading"><img class="for-you__img lazyload"
                                                                                        data-srcset="/img/for-you/img/for-you (8)_720.jpg 360w, /img/for-you/img/for-you (8)_1080.jpg 720w, /img/for-you/img/for-you (8)_1280.jpg 1080w"
                                                                                        data-src="/img/for-you/img/for-you (8)_720.jpg"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                        alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper loading"><img class="for-you__img lazyload"
                                                              data-srcset="/img/for-you/img/for-you (9)_720.jpg 360w, /img/for-you/img/for-you (9)_1080.jpg 720w, /img/for-you/img/for-you (9)_1280.jpg 1080w"
                                                              data-src="/img/for-you/img/for-you (9)_720.jpg"
                                                              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                              alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--desktop loading"><img class="for-you__img lazyload"
                                                                                        data-srcset="/img/for-you/img/for-you (10)_720.jpg 360w, /img/for-you/img/for-you (10)_1080.jpg 720w, /img/for-you/img/for-you (10)_1280.jpg 1080w"
                                                                                        data-src="/img/for-you/img/for-you (10)_720.jpg"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                        alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--cover loading">
                        <p class="for-you__text">Признание от комьюнити Beauty-форума Molfar
                        </p><img class="for-you__img lazyload"
                                 data-srcset="/img/for-you/img/for-you (11)_720.jpg 360w, /img/for-you/img/for-you (11)_1080.jpg 720w, /img/for-you/img/for-you (11)_1280.jpg 1080w"
                                 data-src="/img/for-you/img/for-you (11)_720.jpg"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 alt="Признание от комьюнити Beauty-форума Molfar" title=""/>
                    </li>
                    <li class="for-you__wrapper loading"><img class="for-you__img lazyload"
                                                              data-srcset="/img/for-you/img/for-you (12)_720.jpg 360w, /img/for-you/img/for-you (12)_1080.jpg 720w, /img/for-you/img/for-you (12)_1280.jpg 1080w"
                                                              data-src="/img/for-you/img/for-you (12)_720.jpg"
                                                              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                              alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--cover loading">
                        <p class="for-you__text">Призы и подарки для каждой участницы
                        </p><img class="for-you__img lazyload"
                                 data-srcset="/img/for-you/img/for-you (13)_720.jpg 360w, /img/for-you/img/for-you (13)_1080.jpg 720w, /img/for-you/img/for-you (13)_1280.jpg 1080w"
                                 data-src="/img/for-you/img/for-you (13)_720.jpg"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 alt="Призы и подарки для каждой участницы" title=""/>
                    </li>
                    <li class="for-you__wrapper loading"><img class="for-you__img lazyload"
                                                              data-srcset="/img/for-you/img/for-you (14)_720.jpg 360w, /img/for-you/img/for-you (14)_1080.jpg 720w, /img/for-you/img/for-you (14)_1280.jpg 1080w"
                                                              data-src="/img/for-you/img/for-you (14)_720.jpg"
                                                              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                              alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--desktop loading"><img class="for-you__img lazyload"
                                                                                        data-srcset="/img/for-you/img/for-you (15)_720.jpg 360w, /img/for-you/img/for-you (15)_1080.jpg 720w, /img/for-you/img/for-you (15)_1280.jpg 1080w"
                                                                                        data-src="/img/for-you/img/for-you (15)_720.jpg"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                        alt="" role="presentation"/>
                    </li>
                    <li class="for-you__wrapper for-you__wrapper--cover loading">
                        <p class="for-you__text">Вечеринка-награждение
                        </p><img class="for-you__img lazyload"
                                 data-srcset="/img/for-you/img/for-you (16)_720.jpg 360w, /img/for-you/img/for-you (16)_1080.jpg 720w, /img/for-you/img/for-you (16)_1280.jpg 1080w"
                                 data-src="/img/for-you/img/for-you (16)_720.jpg"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 alt="Вечеринка-награждение" title=""/>
                    </li>
                </ul>
            </div>
        </section>
        <section class="procedure">
            <div class="procedure__container container">
                <header class="heading procedure__heading">
                    <h2 class="heading__title">Конкурс проходит в три этапа
                    </h2>
                </header>
                <ol class="procedure__list">
                    <li class="procedure__wrapper">
                        <p class="procedure__text procedure__text--stage">Первый этап
                        </p>
                        <p class="procedure__text procedure__text--title">Отборочный
                        </p>
                        <p class="procedure__text">Онлайн-отбор по заполеным анкетам на сайте. Количество допущеных
                            участниц определяет жюри
                        </p>
                    </li>
                    <li class="procedure__wrapper">
                        <p class="procedure__text procedure__text--stage">Второй этап
                        </p>
                        <p class="procedure__text procedure__text--title">Подготовительный
                        </p>
                        <p class="procedure__text">Проработка образов для участниц стилистами конкурса. Постановка
                            дефиле и сценических выходов
                        </p>
                    </li>
                    <li class="procedure__wrapper">
                        <p class="procedure__text procedure__text--stage">Третий этап
                        </p>
                        <p class="procedure__text procedure__text--title">Финальный
                        </p>
                        <p class="procedure__text">Проводится конкурсные дефиле, оценка независимым жюри и
                            вечеринка-награждение
                        </p>
                    </li>
                </ol>
            </div>
        </section>
        <section class="for-whom">
            <div class="for-whom__container container">
                <header class="heading for-whom__heading">
                    <h2 class="heading__title">От вас нужно только участие
                    </h2>
                </header>
                <div class="for-whom__wrapper">
                    <p class="for-whom__text">Мы предоставим вам визажистов, парикмахеров и стилистов конкурса для
                        проработки образов, а также одежду. К участницам есть только два требования: возраст 18-40 лет и
                        рост от 165 сантиметров
                    </p><a class="for-whom__link" href="#registration">Заполняйте анкету</a>
                </div>
                <div class="for-whom__wrapper for-whom__wrapper--img">
                    <div class="for-whom__img-wrapper lazyload">
                    </div>
                </div>
            </div>
            <svg class="moving-text moving-text--for-whom" id="text-container" viewBox="0 0 500 96" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path id="text-curve" d="M0 79.5h1203"></path>
                <text y="0" font-size="96">
                    <textpath class="moving-text__textpath moving-text__textpath--for-whom" id="text-path"
                              href="#text-curve" startOffset="200">Miss Molfar
                    </textpath>
                </text>
            </svg>
        </section>
        <section class="how-it-look">
            <div class="how-it-look__container container">
                <header class="heading how-it-look__heading">
                    <h2 class="heading__title">Как это выглядит
                    </h2>
                </header>
                <ol class="how-it-look__list">
                    <li class="how-it-look__wrapper">
                        <div class="how-it-look__inner">
                            <p class="how-it-look__text how-it-look__text--stage">Первое дефиле
                            </p>
                            <p class="how-it-look__text how-it-look__text--title">Национальная одежда
                            </p>
                        </div>
                        <div class="how-it-look__img-wrapper loading"><img class="how-it-look__img lazyload"
                                                                           data-srcset="img/how-it-look/img/national-dress_720.jpg 360w, img/how-it-look/img/national-dress_1080.jpg 720w, img/how-it-look/img/national-dress_1440.jpg 1080w"
                                                                           data-src="img/how-it-look/img/national-dress_720.jpg"
                                                                           src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                           alt="Первое дефиле" title=""/>
                        </div>
                    </li>
                    <li class="how-it-look__wrapper">
                        <div class="how-it-look__inner">
                            <p class="how-it-look__text how-it-look__text--stage">Второе дефиле
                            </p>
                            <p class="how-it-look__text how-it-look__text--title">Профессиональный лук
                            </p>
                        </div>
                        <div class="how-it-look__img-wrapper loading"><img class="how-it-look__img lazyload"
                                                                           data-srcset="img/how-it-look/img/professional-look_720.jpg 360w, img/how-it-look/img/professional-look_1080.jpg 720w, img/how-it-look/img/professional-look_1440.jpg 1080w"
                                                                           data-src="img/how-it-look/img/professional-look_720.jpg"
                                                                           src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                           alt="Второе дефиле" title=""/>
                        </div>
                    </li>
                    <li class="how-it-look__wrapper">
                        <div class="how-it-look__inner">
                            <p class="how-it-look__text how-it-look__text--stage">Финальное дефиле
                            </p>
                            <p class="how-it-look__text how-it-look__text--title">Вечерний выход
                            </p>
                        </div>
                        <div class="how-it-look__img-wrapper loading"><img
                                    class="how-it-look__img lazyload how-it-look__img how-it-look__img--evening-dress"
                                    data-srcset="img/how-it-look/img/evening-dress_720.jpg 360w, img/how-it-look/img/evening-dress_1080.jpg 720w, img/how-it-look/img/evening-dress_1440.jpg 1080w"
                                    data-src="img/how-it-look/img/evening-dress_720.jpg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="Финальное дефиле" title=""/>
                        </div>
                    </li>
                </ol>
            </div>
        </section>
        <section class="nomination">
            <div class="nomination__container container">
                <div class="nomination__img-wrapper"><img class="nomination__img"
                                                          src="/img/nomination/img/tiara-diadem_fixed.png" alt="Тиара"
                                                          title=""/>
                </div>
                <ol class="nomination__list">
                    <li class="nomination__wrapper nomination__wrapper--main-title">
                        <p class="nomination__text nomination__text--nomination"><b>Главная номинация</b>
                        </p>
                        <p class="nomination__text nomination__text--title">Miss Molfar
                        </p>
                    </li>
                    <li class="nomination__wrapper">
                        <p class="nomination__text nomination__text--nomination"><b>Вторая номинация</b>
                        </p>
                        <p class="nomination__text nomination__text--title">Miss Molfar 1st runner up
                        </p>
                    </li>
                    <li class="nomination__wrapper">
                        <p class="nomination__text nomination__text--nomination"><b>Третья номинация</b>
                        </p>
                        <p class="nomination__text nomination__text--title">Miss Molfar 2nd runner up
                        </p>
                    </li>
                    <li class="nomination__wrapper">
                        <p class="nomination__text nomination__text--nomination"><b>Четвёртая номинация</b>
                        </p>
                        <p class="nomination__text nomination__text--title">Miss Molfar Audience Choice Award
                        </p>
                    </li>
                    <li class="nomination__wrapper">
                        <p class="nomination__text nomination__text--nomination"><b>Пятая номинация</b>
                        </p>
                        <p class="nomination__text nomination__text--title">Miss Molfar Internet Audience Choice Award
                        </p>
                    </li>
                </ol>
                <div class="nomination__wrapper nomination__wrapper--special">
                    <p class="nomination__text nomination__text--special"><b>Подарки для каждой участницы</b>
                    </p>
                    <p class="nomination__text">у наших спонсоров есть много подарков для вас, так что ни одна учасница
                        не останется без вознаграждения
                    </p>
                </div>
            </div>
        </section>
        <section class="registration" id="registration">
            <div class="registration__container container">
                <header class="heading registration__heading">
                    <h2 class="heading__title">Регистрируйтесь
                    </h2>
                </header>
                <form class="form registration__form" method="post" id="upload_form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p class="form__success">Отправлено!
                    </p>
                    <p class="form__line"><input class="form__input"  type="text" placeholder="Имя" name="firstname"
                                                 id="firstname">
                        <label class="form__label" for="firstname">Имя
                        </label>
                        <span class="alert"  id="firstname_valid" style="display: none"></span>
                    </p>
                    <p class="form__line"><input class="form__input" type="text" placeholder="Фамилия" name="lastname"
                                                 id="lastname">
                        <label class="form__label" for="lastname">Фамилия
                        </label>
                        <span class="alert"  id="lastname_valid" style="display: none"></span>
                    </p>
                    <p class="form__line"><input class="form__input" type="date" placeholder="Дата рождения"
                                                 name="birth-date" id="birth-date">
                        <label class="form__label" for="birth-date">Дата рождения
                        </label>
                        <span class="alert"  id="birth-date_valid" style="display: none"></span>
                    </p>
                    <p class="form__line"><input class="form__input" type="text" placeholder="Город" name="city"
                                                 id="city">
                        <label class="form__label" for="city">Город
                        </label>
                        <span class="alert"  id="city_valid" style="display: none"></span>
                    </p>
                    <p class="form__line"><input class="form__input" type="text" placeholder="Ссылка на Instagram"
                                                 name="ig-link" id="ig-link">
                        <label class="form__label" for="ig-link">Ссылка на Instagram
                        </label>
                        <span class="alert"  id="ig_valid" style="display: none"></span>
                    </p>
                    <p class="form__line"><input class="form__input" type="tel" placeholder="Телефон" name="tel"
                                                 id="tel">
                        <label class="form__label" for="tel">Телефон
                        </label>
                        <span class="alert"  id="tel_valid" style="display: none"></span>
                    </p>
                    <p class="form__line"><input class="form__input" type="email" placeholder="Э-почта" name="email"
                                                 id="email">
                        <label class="form__label" for="email">Э-почта
                        </label>
                        <span class="alert"  id="email_valid" style="display: none"></span>
                    </p>
                    <p class="form__line"><input class="form__input" type="text"
                                                 placeholder="Принимали участие в конкурсах красоты?" name="expirience"
                                                 id="expirience">
                        <label class="form__label" for="expirience">Опыт в конкурсах красоты?
                        </label>
                        <span class="alert"  id="expirience_valid" style="display: none"></span>
                    </p>
                    <p class="form__line">
                        <input class="form__file" type="file" name="a_file[]" id="select_file" multiple/>
                        <label class="form__label form__label--file" for="select_file">Добавьте 2 фото — в полный рост и
                            портрет
                        </label>
                        <span class="alert"  id="file_valid" style="display: none"></span>
                    </p>
                    <p class="form__line form__line--checkbox"><input class="form__checkbox" type="checkbox"
                                                                      id="checkbox" required="required"
                                                                      />
                        <label class="form__label form__label--checkbox" for="checkbox">Я ознакомлена с <a
                                    class="form__link"
                                    href="https://drive.google.com/file/d/1rpU_UXI0Ws90UtZpZSltBIQH2ymgDCvv/view?usp=sharing"
                                    target="_blank" rel="noopener">правилами конкурса</a> и даю разрешение на обработку
                            моих персональных данных
                        </label>
                    </p>
                    <button class="button button--red form__button" id="submit"><span>Подать заявку</span>
                    </button>
                </form>
                <div class="registration__wrapper registration__wrapper--img lazyload">
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__container container">
            <div class="footer__wrapper">
                <ul class="footer__list footer__list--lang">
                    <li class="footer__link-wrapper is-inactive"><a class="footer__link footer__link--lang" href="href">укр</a>
                    </li>
                    <li class="footer__link-wrapper is-inactive"><a class="footer__link footer__link--lang" href="href">eng</a>
                    </li>
                    <li class="footer__link-wrapper"><a class="footer__link footer__link--lang">рус</a></li>
                </ul>
                <div class="footer__link-wrapper"><a class="footer__link" href="#">Политика конфиденциальности</a></div>
            </div>
            <div class="footer__made-by"
                 style="background-image: url(https://2020.molfarforum.com/web-site/img/made-in_ru.svg)"><a
                        class="footer__link footer__link--svg" href="https://kontora.design" target="_blank"
                        rel="noopener" title="Сделано в «Дизайн-Конторе»">Сделано в «Дизайн-Конторе»
                    <svg class="icon icon--kontora" width="36" height="36">
                        <use xlink:href="img/svg/symbol/sprite.svg#kontora"></use>
                    </svg>
                </a></div>
        </div>
    </footer>
</div>
<script src="js/scripts.min.js?v=1586338379280"></script>
<script>
        $(document).ready(function(){

            $('#upload_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"{{ route('ajaxupload.action') }}",
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        if(data.message=="Success") {
                            document.getElementById("upload_form").classList.add('form--success');
                            document.getElementById("upload_form").reset();
                            setTimeout(function () {
                                document.getElementById("upload_form").classList.remove('form--success');
                            }, 3000);
                            data.message="";
                        }
                        function validate(id,eroor){
                            $(id).html(eroor);
                            $(id).css('display', 'block').css('color','red');
                            $(id).addClass(data.class_name);
                        }
                        validate('#firstname_valid',data.firstname);
                        validate('#lastname_valid',data.lastname);
                        validate('#city_valid',data.city);
                        validate('#email_valid',data.email);
                        validate('#ig_valid',data.iglink);
                        validate('#birth-date_valid',data.birthdate);
                        validate('#tel_valid',data.tel);
                        validate('#expirience_valid',data.expirience);
                        validate('#file_valid',data.file);
                    },
                })
            });

        });
</script>
</body>
</html>
