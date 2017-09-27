<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div id="content">
    <div class="container no-padding">
        <div class="row">
            <!-- Carousel Slideshow -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                </ol>
                <div class="clearfix"></div>
                <!-- End Carousel Indicators -->
                <!-- Carousel Images -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/slideshow/slide1.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/slide2.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/slide3.jpg">
                    </div>
                </div>
                <!-- End Carousel Images -->
                <!-- Carousel Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- End Carousel Controls -->
            </div>
            <!-- End Carousel Slideshow -->
        </div>
    </div>
    <div class="container background-gray-lighter">
        <div class="row">
            <h2 class="animate fadeIn text-center margin-top-50">Вас вітає Чернігівський дитячий садок №72</h2>
            <hr class="margin-top-15">
            <p class="animate fadeIn text-center" id="interview">Вашій дитині вже два роки?</p>
            <p class="text-center animate fadeInUp margin-bottom-50">
                <button id="but1" class="btn btn-success temp1">Так!</button>
            </p>
        </div>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#but1").click(function(){
                if($("#but1").hasClass("temp1")){
                    $("#interview").fadeOut(300,function(){$("#interview").text("Ви зацікавлені в її гармонійному  розвитку?").fadeIn(1000)});
                    $("#but1").fadeOut(300,function(){$("#but1").text("Звісно!").fadeIn(1000)}).removeClass("temp1").addClass("temp2");
                }else if($("#but1").hasClass("temp2")){
                    $("#interview").fadeOut(300,function(){$("#interview").text("Бажаєте співпрацювати з кваліфікованими фахівцями?").fadeIn(1000)});
                    $("#but1").fadeOut(300,function(){$("#but1").text("Авжеж!").fadeIn(1000)}).removeClass("temp2").addClass("temp3");
                }else if($("#but1").hasClass("temp3")){
                    $("#interview").fadeOut(300,function(){$("#interview").text("Вам не байдуже,  в яких стінах вона буде рости і розвиватися, хто буде про неї піклуватися, допоможе знайти друзів і пізнати прекрасний світ дитинства?").fadeIn(1000)});
                    $("#but1").fadeOut(300,function(){$("#but1").text("Безумовно!").fadeIn(1000)}).removeClass("temp3").addClass("temp4");
                }else if($("#but1").hasClass("temp4")){
                    $("#interview").fadeOut(300,function(){$("#interview").text("Тоді Ви зайшли за вірною адресою!").fadeIn(1000)});
                    $("#but1").fadeOut(300,function(){$("#but1").removeClass("btn-success").addClass("btn-primary btn-lg").text("Зареєструвати дитину!").fadeIn(1000)}).removeClass("temp4").addClass("temp5");
                }else {

                    window.open("https://reg.isuo.org/preschools/view/id/48077",'_blank');
                }
            });
        });
    </script>
    <div class="container">
        <div class="row margin-vert-30">
            <!-- Main Text -->
            <div class="col-md-9 welcome">
                <p class="col-md-12">   Рада вітати Вас на сторінках нашого сайту. Впевнена, якщо Ви читаєте ці рядки, значить,
                    Вам цікаво, чим живе і дихає наш дитячий садок. І, повірте, нам є про що розповісти.
                    Це свята і будні, наповнені дитячими посмішками, це перші перемоги і відкриття наших дітей,
                    навіть сльози при розставанні з мамою, це те, чим ми живемо кожен день, кожну хвилину.
                    Наш дружний колектив професіоналів намагається створити всі умови, щоб дітям було цікаво і
                    комфортно в дитячому садку. Ми прагнемо до створення атмосфери затишку та доброзичливості,
                    відкритості та взаємодовіри.</p>
                <p class="col-md-6">   На сайті Ви можете дізнатися: останні новини про життя дитячого саду і дітей в групі,
                    інформацію про програми виховання і навчання дітей дошкільного віку, поради фахівців,
                    подивитися фотографії, задати питання по вихованню та навчанню дітей. Я завжди відкрита для
                    спілкування, готова розділити з Вами радість за успіхи Вашого малюка, вислухати побажання,
                    відповісти на питання. Давайте спілкуватися! Разом ми багато зможемо вирішити!</p>
                <img class="animate fadeInUp col-md-6" src="assets/img/frontpage/responsive_homepage.png" alt="">

                <br>
            </div>
            <!-- End Main Text -->
            <!-- Side Column -->
            <div class="col-md-3">
                <h3 class="title">Години прийому завідуючої</h3>
                <h6 style="margin: 0;">Понеділок</h6>
                <h4 style="margin: 0;">8:00 - 10:00</h4>
                <hr>
                <h6 style="margin: 0;">Середа</h6>
                <h4 style="margin: 0;">10:00 - 12:00</h4>
                <hr>
                <h6 style="margin: 0;">П’ятниця</h6>
                <h4 style="margin: 0;">14:00 - 16:00</h4>
                <hr>
                <h4>Час роботи:</h4>
                <h6 style="margin: 0;">Понеділок - П’ятниця</h6>
                <h4 style="margin: 0;">8:00 - 17:00</h4>
                <p>
                    <small>Перерва: 13:00 - 14:00</small>
                </p>
            </div>
            <!-- End Side Column -->
        </div>
    </div>

    <hr class="margin-top-20">


    <div class="container no-padding">
        <h4 style="text-align: center">Батьки про нас</h4>
        <div class="row animate fadeInRight">
            <!-- Testimonials - Default Full Width -->
            <div class="col-md-12">
                <div class="carousel slide testimonials" id="testimonials1">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#testimonials-rotate">
                        </li>
                        <li data-slide-to="1" data-target="#testimonials1">
                        </li>
                        <li data-slide-to="2" data-target="#testimonials1">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-12">
                                <p>
                                    Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                                <div class="testimonial-info">
                                    <img alt="" src="assets/img/profiles/53.jpg" class="img-circle img-responsive" />
                                        <span class="testimonial-author">
                                            Cristina Hall
                                            <em>
                                                Javascript Developer, Business Inc.
                                            </em>
                                        </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="item">
                            <div class="col-md-12">
                                <p>
                                    Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                </p>
                                <div class="testimonial-info">
                                    <img alt="" src="assets/img/profiles/99.jpg" class="img-circle img-responsive" />
                                        <span class="testimonial-author">
                                            Anthony Watkins
                                            <em>
                                                Web Developer, Amazing Designs Ltd.
                                            </em>
                                        </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="item">
                            <div class="col-md-12">
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                                <div class="testimonial-info">
                                    <img alt="" src="assets/img/profiles/78.jpg" class="img-circle img-responsive" />
                                        <span class="testimonial-author">
                                            Jonathan Baker
                                            <em>
                                                CEO & Founder, Virtuoso Inc.
                                            </em>
                                        </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-arrows pull-right">
                    <a class="left" href="#testimonials1" data-slide="prev">
                        <span class="fa fa-arrow-left"></span>
                    </a>
                    <a class="right" href="#testimonials1" data-slide="next">
                        <span class="fa fa-arrow-right"></span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- End Testimonials - default full width -->
        </div>
    </div>

    <hr class="margin-top-20">

</div>
</div>
</div>
