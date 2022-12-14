<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Карьера");
?>

    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <div class="divider"></div>
            <span>Карьера</span>
        </div>

        <h1>Карьера в SPAR</h1>

        <img src="<?=SITE_TEMPLATE_PATH;?>/images/career/hero.jpg" alt="" width="1181" height="440" decoding="async" class="career-hero">

        <div class="career-icons">
            <div class="card">
                <div class="icon">
                    <img decoding="async" src="<?=SITE_TEMPLATE_PATH;?>/svg/career/icon_1.svg" width="61" height="60" alt="">
                </div>
                <div class="career-text">
                    Достойная ЗП, возможность получить аванс. Премии и бонусы
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <img decoding="async" src="<?=SITE_TEMPLATE_PATH;?>/svg/career/icon_2.svg" width="61" height="60" alt="">
                </div>
                <div class="career-text">
                    Постоянное обучение и&nbsp;возможность карьерного роста
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <img decoding="async" src="<?=SITE_TEMPLATE_PATH;?>/svg/career/icon_3.svg" width="61" height="60" alt="">
                </div>
                <div class="career-text">
                    Компенсация дорожных расходов
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <img decoding="async" src="<?=SITE_TEMPLATE_PATH;?>/svg/career/icon_4.svg" width="61" height="60" alt="">
                </div>
                <div class="career-text">
                    Бесплатные обеды
                </div>
            </div>
        </div>

        <div class="vacancy">
            <h2>Вакансии</h2>

            <div class="vacancy-row">
                <div class="vacancy-list">
                    <div class="tab-list" data-component="vacancy-card">
                        <button class="tab active">Магазины</button>
                        <button class="tab">Производство</button>
                        <button class="tab">Склад</button>
                        <button class="tab">Офис</button>
                    </div>

                    <div class="vacancy-items">
                        <div class="vacancy-card">
                            Оператор пульта централизованного наблюдения<br/>
                            Помощник системного администратора (Help Desk)<br/>
                            Оператор приёмки<br/>
                            Продавец-кассир<br/>
                            Грузчик в магазин<br/>
                            Продавец кулинарии<br/>
                            Оператор сборки<br/>
                            Администратор направления размещения и контроля<br/>
                            Администратор направления приёмки<br/>
                            Администратор направления отгрузки<br/>
                        </div>
                        <div class="vacancy-card" style="display: none;">
                            Оператор пульта централизованного наблюдения<br/>
                            Помощник системного администратора (Help Desk)<br/>
                            Оператор приёмки<br/>
                        </div>
                        <div class="vacancy-card" style="display: none;">
                            Помощник системного администратора (Help Desk)<br/>
                            Оператор приёмки<br/>
                            Оператор сборки<br/>
                            Администратор направления приёмки<br/>
                        </div>
                        <div class="vacancy-card" style="display: none;">
                            Оператор приёмки<br/>
                            Продавец-кассир<br/>
                            Грузчик в магазин<br/>
                            Продавец кулинарии<br/>
                            Оператор сборки<br/>
                        </div>
                    </div>
                </div>

                <div class="vacancy-form">
                    <div class="title">Оставьте заявку и мы перезвоним</div>

                    <form method="post" enctype="multipart/form-data" autocomplete="off" action="" class="form career-form">
                        <input type="hidden" name="action" value="vacancy">
                        <label><input type="text" class="form-input form-input__base" name="firstname" placeholder="Имя и Фамилия"></label>
                        <label><input type="tel" class="form-input form-input__base" name="phone" placeholder="Телефон"></label>
                        <label><select name="city" class="form-input form-input__base">
                                <option value="0">Выберите город</option>
                                <option value="1">111</option>
                            </select></label>
                        <label><select name="job" class="form-input form-input__base">
                                <option value="0">Выберите должность</option>
                                <option value="1">1111</option>
                            </select></label>
                        <label class="file-wrapper">
                            <svg width="33" height="33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.35 14.31v6m0 0-3-3m3 3 3-3m2 8h-10a2 2 0 0 1-2-2v-14a2 2 0 0 1 2-2h5.58a1 1 0 0 1 .7.3l5.42 5.41a1 1 0 0 1 .3.7v9.6a2 2 0 0 1-2 2Z" stroke="#B6BDC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <input type="file" name="attachment">
                            Прикрепите резюме, если у вас оно есть
                        </label>

                        <label class="checkbox">
                            <input type="checkbox" name="agree" value="yes">
                            <span></span>
                            Соглашаюсь с условиями <a href="#">Политики конфиденциальности</a>
                        </label>

                        <div class="center-block">
                            <button class="btn btn-lime__fill send-button">Отправить</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="about-row">
                <div class="spar-about">
                    <p>SPAR - известная во всем мире сеть супермаркетов. SPAR работает в 48 странах на четырех континентах. Магазины SPAR можно встретить в Европе, Индии, Австралии, Китае и даже в Африке. SPAR основан в 1932 году в Нидерландах Адриааном ван Веллом как добровольная сеть бакалейщиков. Это был ответ независимых ритейлеров появлению крупных торговых сетей в Европе.
                    </p>
                    <p>Мы первые открыли супермаркет SPAR в Казахстане в 2022 году!</p>

                    <div class="spar-welcome">
                        Присоединяйтесь к нашей команде первооткрывателей!
                    </div>

                    <a href="/o-kompanii/" class="show-all"><span>Подробнее о компании </span> <svg width="20" height="13"><use xlink:href="#arrow"></use></svg></a>

                </div>

                <div class="hero hero-stiky">
                    <div class="hero-title">По вопросам трудоустройства</div>
                    <a href="tel:<?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_WORK");?>" class="hero-phone"><?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_WORK");?></a>
                    <div class="hero-bottom">
                        или на почту <a href="mailto:<?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_EMAIL");?>"><?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_EMAIL");?></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>