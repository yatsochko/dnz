<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= $this->title ?></title>
        <!-- Meta -->
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div id="body_bg">
        <div id="pre_header" class="container">
            <div class="row margin-top-10 visible-lg">
                <div class="col-md-6">
                    <p>
                        <strong>Phone: </strong>&nbsp;095-54-56-376</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>
                        <strong>Email: </strong>yatsochko@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="primary-container-group">
            <!-- Background -->
            <div class="primary-container-background">
                <div class="primary-container"></div>
                <div class="clearfix"></div>
            </div>
            <!--End Background -->
            <div class="primary-container">
                <div id="header" class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/" title="">
                                <img src="/web/img/welcometokindergarten.png" alt="Logo"/>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Top Menu -->
                <div id="hornav" class="container no-padding">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="pull-right visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="/" class="fa-home">Головна</a>
                                    </li>
                                    <li style="margin: 0">
                                        <span class="fa-child">Заходьте - відкрито</span>
                                        <ul>
                                            <li><?= Html::a('Про нас', ['about']) ?></li>
                                            <li><?= Html::a('Наш режим', ['regime']) ?></li>
                                            <li><?= Html::a('Питання - відповідь', ['faq']) ?></li>
                                            <li><?= Html::a('Контакти', ['contact']) ?></li>
                                        </ul>
                                    </li>
                                    <li><a href="/news/" class="fa-calendar">Новини</a></li>
                                    <li>
                                        <span class="fa-heart">Здорові діти</span>
                                        <ul>
                                            <li><a href="/medecine/">Медицина</a></li>
                                            <li><a href="/food/">Харчування</a></li>
                                            <li><a href="/sport/">Фізкультура</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-user">Слово експерта</span>
                                        <ul>
                                            <li><a href="/psychologist/">Психолог</a></li>
                                            <li><a href="/speech/">Логопед</a></li>
                                            <li><a href="/music/">Музичний керівник</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-book">Педагогам</span>
                                        <ul>
                                            <li>
                                                <a href="/advice/">Методичні поради</a>
                                            </li>
                                            <li>
                                                <a href="/experience/">Педагогічний досвід</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/gallery/" class="fa-picture-o">Фотогалерея</a>
                                    </li>
                                    <li>
                                        <a href="/forum/" class="fa-comments-o">Форум</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    <?= $content ?>

    <div id="base">
        <div class="container padding-vert-30 margin-top-40">
            <div class="row">
                <!-- Sample Menu -->
                <div class="col-md-3 margin-bottom-20">
                    <h3 class="margin-bottom-10">Корисні посилання</h3>
                    <ul class="menu">
                        <li>
                            <a href="http://mon.gov.ua/" target="_blank">Міністерство освіти і науки
                                України</a>
                        </li>
                        <li>
                            <a href="http://osvita.ch.ua/" target="_blank">Управління освіти Чернігівської
                                міської ради</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- End Sample Menu -->
                <!-- Contact Details -->
                <div class="col-md-3 margin-bottom-20">
                    <h3 class="margin-bottom-10">Контактна інформація</h3>

                    <p>
                        <span class="fa-phone">Телефон: </span>(212)888-77-88
                        <br>
                        <span class="fa-envelope">Email: </span>
                        <a href="mailto:info@joomla51.com">info@joomla51.com</a>
                    </p>

                    <p>
                        <span class="fa-location-arrow">Адреса:</span>
                        <br>вул. Генерала Бєлова, 30а,
                        <br>Чернігів,
                        <br>Чернігівська область,
                        <br>Україна
                    </p>
                </div>
                <!-- End Contact Details -->
                <!-- Thumbs Gallery -->
                <div class="col-md-3 margin-bottom-20">
                    <h3 class="margin-bottom-10">Останні фото</h3>

                    <div class="thumbs-gallery">
                        <a class="thumbBox" rel="lightbox-thumbs" href="/assets/img/tempPhoto/lito1.jpg">
                            <img src="/assets/img/tempPhoto/lito1.jpg" style="width: 68px; height: 68px;"
                                 alt="image1.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image02.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image02.jpg" alt="image2.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image03.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image03.jpg" alt="image3.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image04.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image04.jpg" alt="image4.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image05.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image05.jpg" alt="image5.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image06.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image06.jpg" alt="image6.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image07.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image07.jpg" alt="image7.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image08.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image08.jpg" alt="image8.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs"
                           href="/assets/img/thumbsgallery/image09.jpg">
                            <img src="/assets/img/thumbsgallery/thumbs/image09.jpg" alt="image9.jpg">
                            <i></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- End Thumbs Gallery -->
                <!-- Disclaimer -->
                <div class="col-md-3 margin-bottom-20">
                    <h3 class="margin-bottom-10">Підписуйтесь на оновлення</h3>

                    <p>Вкажіть свій e-mail, оберіть тематику та не пропускайте жодної цікавої для Вас
                        інформації.
                    </p>

                    <div class="clearfix"></div>
                </div>
                <!-- End Disclaimer -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
                <!-- Footer Menu -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div id="copyright" class="col-md-4">
                    <p>(c) 2017 D. Yatsochko</p>
                </div>
                <div id="footermenu" class="col-md-8">
                    <ul class="list-unstyled list-inline pull-right">
                        <li>
                            <a href="/login/">Вхід</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>