<?php
/*
Template Name: home

*/
?>

<?php
get_header();
?>

    <main>
      
    
        <div class="home-page__intro">
            <div class="wrapper home-page__intro-wrapper">
                <h1 class="home-page__intro-text">
                    авторские тренинги<br>
                    михаила царько
                </h1>

                <div class="intro__courses-list">

                <?php 
                // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'intro-slider',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                            ?>

                    <div class="intro__courses-item">

                       <div class="list-wrapper">
                        <h2 class="intro__courses-name">morning</h2>
                        <h2 class="intro__courses-name intro__courses-name--big "><?php the_title(
                        ); ?></h2>
                        <div class="intro__courses-info">
                            <?php the_content();?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="intro__courses-more">Подробнее</a>
                       </div>   
                       <div class="intro__courses-background">
                       <?php the_post_thumbnail(
            );?>
                        </div>
                    </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?>
                




                    <!-- <li class="intro__courses-item intro__courses-item--bio">
                        <div class="list-wrapper">
                            <h2 class="intro__courses-name">био</h2>
                            <h2 class="intro__courses-name intro__courses-name--big">энергетика</h2>
                            <p class="intro__courses-info intro__courses-info--big">старт курса 10-го сентября</p>
                            <a href="bioenergy.html" class="intro__courses-more">Подробнее</a>
                        </div>
                       
                    </li>
                    <li class="intro__courses-item intro__courses-item--look">

                        <div class="list-wrapper">
                            <h2 class="intro__courses-name intro__courses-name--big">
                                взгляд<br>в себя
                            </h2>
                            <p class="intro__courses-info intro__courses-info--big">старт курса 10-го сентября</p>
                            <a href="look_inside.html" class="intro__courses-more">Подробнее</a>
                        </div>
                       
                    </li>
                    <li class="intro__courses-item">
                        <div class="list-wrapper">
                            <h2 class="intro__courses-name">йога практика</h2>
                            <h2 class="intro__courses-name intro__courses-name--big">
                                yoga<br>workout
                            </h2>
                        <p class="intro__courses-info">Dolor sit amet, consectetur adipiscing elit</p> 
                            <a href="" class="intro__courses-more">Подробнее</a>
                        </div>

                       
                    </li>
                    <li class="intro__courses-item">
                        <div class="list-wrapper">
                            <h2 class="intro__courses-name">йога практика</h2>
                            <h2 class="intro__courses-name intro__courses-name--big">
                                yoga<br>workout
                            </h2>
                            <p class="intro__courses-info">Dolor sit amet, consectetur adipiscing elit</p>
                            <a href="" class="intro__courses-more">Подробнее</a></div>
                        
                    </li> -->
                </div>
                <div class="intro__courses-slider-btns"></div>
            </div>
         
        
    </div>
        
   
    

      <section class="experience">
    <div class="wrapper experience-wrapper">
        <h2 class="section-title experience__author-name">
            михаил царько
        </h2>
        <p class="section-subtitle experience__author-position">йога-инструктор,
        ведущий практик</p>

        <ul class="experience__list">
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2021_1.svg" alt="2021">
                <p class="paragraph">Участник ежегодного фестиваля Тантрис «Интеграция тантрическихи энергетических техник»</p>
            </li>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2021_2.svg" alt="2021">
                <p class="paragraph">Ученик Sonu Ji, продолжаю заниматься под руководством наставника</p>
            </li>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2020.svg" alt="2020">
                <p class="paragraph">Сертифицированный инструктор йоги по стандарту Yoga Alliance USA (RTTC Yoga School, курс TTC200, Индия 2020, обучение на англ. яз)            </li>
                </p>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2019.svg" alt="2019">
                <p class="paragraph">Сертифицированный массажист, массажная школа в г. Владивосток</p>               
            </li>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2018_1.svg" alt="2018">
                <p class="paragraph">Регулярный практик в центре Yoga Barn, о. Бали. 2018-2020</p>
            </li>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2018_2.svg" alt="2018">
                <p class="paragraph">Курс энергетического массажа от Севы Прем, Крым 2018</p>
            </li>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2015_1.svg" alt="2015">
                <p class="paragraph">Практик Випасаны по системе Гоенка и буддийских медитаций</p>
            </li>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2015_2.svg" alt="2015">
                <p class="paragraph">Проходил ретриты: 2015 - Индия, 2017 - Таиланд, 2019 - Бали</p>
            </li>
            <li class="experience__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/2012.svg" alt="2012">
                <p class="paragraph">Практик цигун и био-энергетики: с 2012 года, обучение по системе Чжунь Юань Цигун в 2015, Космоэнергетике - 2017</p>
            </li>
        </ul>
        <div class="experience__photo">
            <picture>
                <source media="(min-width:1020px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/desktop/Michael-photo-desktop.svg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/home/experiance/Michail_photo.svg" alt="Фото Михаила Царько">
    
            </picture>
        </div>
       
    </div>
    
</section>


      
<section class="home-courses">

  


    <div class="wrapper home-courses__wrapper">
        <div class="home-courses__info-text">
            <h2 class="section-title home-courses__title">
                авторские программы
            </h2>
            <p class="home-courses__paragraph paragraph">
                Сотни часов активных практик в разных странах позволили Михаилу  выделить самые результативные техники и  собрать их воедино в уникальные тренинги. 
            </p>
            <p class="home-courses__paragraph paragraph">
                Каждый из курсов -  концентрат знаний, который Вы получаете из первых рук не выезжая из своего города.
            </p>

            <a href="" class="home-courses__more-btn">все программы</a>
        </div>
       

        <div class="home-courses__list">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
        <div class="home-courses__item">
                
        
        <a href="">
            <?php the_post_thumbnail(
                array(212, 199),
                array(
                    'class' => 'home-courses__item-img'
                )

            );?>
                  
                </a>


                <a href="">
                    <p class="home-courses__item-name section-title">
                    <?php the_title(); ?>
                </p></a>
                
                <div class="home-courses__item-description paragraph">
                    <?php the_content(); ?>
                </div>
                <a class="home-courses__item--more-btn" href="#">
                    подробнее
                </a>
            </div>

<?php 
	}
} 

wp_reset_postdata(); // Сбрасываем $post
?>



            



            
        </div>
        <div class="home-courses__slider-btns"></div>
    
    </div>
</section>


      
<section class="home-about">
<div class="wrapper home-about__wrapper">
    <h2 class="section-title home-about__title">
        фото
    </h2>
    <p class="section-subtitle home-about__subtitle">
        наших мероприятий
    </p>
    <div class="home-about__photo-gallery" id="my_nanogallery2"
    
    >
    <a href="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo1_desktop.svg" >
                <picture>
                    <source media="(min-width: 600px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo1_desktop.svg">
                      <img class="product-item__photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo1_mobile.svg" alt="">
                      </picture>
            </a>

        <a class="desktop-hidden" href="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo3_mobile.svg" >
            <picture>
                <source media="(min-width: 600px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo3_mobile.svg">
                  <img class="product-item__photo desktop-hidden" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo3_mobile.svg" alt="">
                  </picture>
        </a>

        <a  href="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo2_desktop.svg" >
            <picture>
                <source media="(min-width: 600px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo2_desktop.svg">
                  <img class="product-item__photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo2_mobile.svg" alt="">
            </picture>
        </a>    

        <a href="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-4.svg">
            <picture>
                <source media="(min-width:600px" srcset="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-4.svg">
                <img class="product-item__photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-4.svg" alt="">
            </picture>
        </a>
        <a href="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-5.svg">
            <picture>
                <source media="(min-width:600px" srcset="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-5.svg">
                <img class="product-item__photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-5.svg" alt="">
            </picture>
        </a>
        <a href="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-6.svg">
            <picture>
                <source media="(min-width:600px" srcset="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-6.svg">
                <img class="product-item__photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_about/photo-6.svg" alt="">
            </picture>
        </a>    
    </div>


</div>
</section>




      <section class="home-reviews">
    <div class="wrapper home-reviews__wrapper">
        <h2 class="section-title home-reviews__title">
            отзывы
        </h2>
        <p class="section-subtitle home-reviews__subtitle">
            о наших мероприятиях
        </p> 
    <ul class="home-reviews__list">
        <li class="home-reviews__item">
            <div class="home-reviews__item-inner">
         
            </div>
            <img class="home-reviews__reviewer-photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_review/reviewer1_img.svg" alt="">
       
                <p class="home-reviews__reviewer-name">Ирина, 27 лет</p>
                <p class="home-reviews__course-name">Курс “Взгляд в себя”</p>
                <div class="home-reviews__reviewer-socials">
                    <a class="home-reviews__reviewer-socials--IG" href=""></a>
                    <a class="home-reviews__reviewer-socials--TG" href=""></a>
                    <a class="home-reviews__reviewer-socials--VK" href=""></a>
                </div>
                <p class="home-reviews__review-text">
                    Все доступно и просто для понимания, что всем рекомендую пройти, так как курс построен грамотно не большие уроки. Разложить по полочкам. Советую всем этот курс.
                    <br>
                    <br>
                    Успехов в познании. 
                </p>
       
           
        </li>
        <li class="home-reviews__item">
            <div class="home-reviews__item-inner">
         
            </div>
            <img class="home-reviews__reviewer-photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_review/reviewer_img.svg" alt="">
            <p class="home-reviews__reviewer-name">Екатерина</p>
            <p class="home-reviews__course-name">Практика на гвоздях</p>
            <div class="home-reviews__reviewer-socials">
                <a class="home-reviews__reviewer-socials--IG" href=""></a>
                <a class="home-reviews__reviewer-socials--TG" href=""></a>
                <a class="home-reviews__reviewer-socials--VK" href=""></a>
            </div>
            
            <p class="home-reviews__review-text">Спасибо тебе, что провёл для нас практику: это было потрясающе. И теория, и подготовка, и атмосфера. Было не страшно, смело было довериться тебе. Причём всем участникам, даже кто тебя совсем не знал. И в принципе не знаю, что их ждёт. Рекомендую точно всем, кто давно хотел, но не решался</p>
        </li>

       
        <li class="home-reviews__item">
            <div class="home-reviews__item-inner">
         
            </div>
            <img class="home-reviews__reviewer-photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_review/reviewer4_img.svg" alt="">
            <p class="home-reviews__reviewer-name">Татьяна
            </p>
            <p class="home-reviews__course-name">Практика Взгляд в себя</p>
            <div class="home-reviews__reviewer-socials">
                <a class="home-reviews__reviewer-socials--IG" href=""></a>
                <a class="home-reviews__reviewer-socials--TG" href=""></a>
                <a class="home-reviews__reviewer-socials--VK" href=""></a>
            </div>
          
                <p class="home-reviews__review-text">Миша! Благодарю за волшебную практику. Чувствовала и слышалапо-новому. Ощущения разные, приятные и головокружительные. Нужно повторить
                    Миша! Благодарю за волшебную практику. Чувствовала и слышалапо-новому. Ощущения разные, приятные и головокружительные. Нужно повторить.
                </p>   
            
 
        </li>

        <li class="home-reviews__item">
            <div class="home-reviews__item-inner">
         
            </div>
            <img class="home-reviews__reviewer-photo" src="<?php bloginfo('template_url'); ?>/assets/img/home/home_review/reviewer3_img.svg" alt="">
            <p class="home-reviews__reviewer-name">Екатерина
            </p>
            <p class="home-reviews__course-name">Курс “Биоэнергетика”</p>
            <div class="home-reviews__reviewer-socials">
                <a class="home-reviews__reviewer-socials--IG" href=""></a>
                <a class="home-reviews__reviewer-socials--TG" href=""></a>
                <a class="home-reviews__reviewer-socials--VK" href=""></a>
            </div>
            <p class="home-reviews__review-text">Миша, благодарю тебя за практику по биоэнергетике. За помощь мне. У меня до сих пор отличное самочувствие. В позвоночнике легкость. Ясность в голове. Разница в состоянии очевидная до и после.    </p>
        </li>
        
    </ul>
    <div class="home-reviews__slider-btns">
        <a  class="home-reviews__more-btn">другие отзывы</a>
    </div>
    
    </div>
</section>
      <section class="home-timetable">
    <div class="home-timetable__popup home-timetable__popup--hidden">
        <form class="home-timetable__form" action="url" method="post">
            <button type="button" class="home-timetable__form--close">&#10006;</button>
           <label class="home-timetable__form-name" for="">
            <span class="label-text">Ваше имя</span>
            <input type="text" name="name" required>
           </label>
           <label class="home-timetable__form-email" for="">
            <span class="label-text">Email</span>
            <input type="email" name="email" required>
           </label>
           <label class="home-timetable__form-mobile" for="">
            <span class="label-text">Номер телефона</span>
            <input type="tel" name="mobile" required>
           </label>
           <button class="home-timetable__form-submit">Записаться</button>
        </form>
    </div>
    <div class="wrapper home-timetable__wrapper">
        <h2 class="section-title home-timetable__title">
            расписание
        </h2>
        <p class="section-subtitle home-timetable__subtitle">
            регулярных
            <br>
            online классов
        </p>
        <p class="home-timetable__text">В настоящий момент практики проходят на основе donation оплаты</p>
      

        <div class="home-timetable__classes-list">
            <div  class="home-timetable__classes-wrap">
                <div class="home-timetable__classes">
                <h3 class="home-timetable__classes-name">
                    Online тренировка биоэнергетики
                </h3>
                <p class="home-timetable__classes-time">Вторник, 17:00
                </p>
                </div>
                <button type="button" class="home-timetable__classes-enroll-btn" data-name="Биоэнергетика">
                    записаться</button>
            </div>
            <div class="home-timetable__classes-wrap">
                <div class="home-timetable__classes">
                <h3 class="home-timetable__classes-name">пост ковид йога</h3>
                <p class="home-timetable__classes-time">среда, 8:30</p>
                </div>
                <button class="home-timetable__classes-enroll-btn">
                    записаться</button>
            </div>
            <div class="home-timetable__classes-wrap">
                <div class="home-timetable__classes">
                <h3 class="home-timetable__classes-name">Ecstatic Dance Online
                </h3>
                <p class="home-timetable__classes-time">
                    последняя суббота месяца
                </p>
                </div>
                <button class="home-timetable__classes-enroll-btn" data-name="Ecstatic Dance">
                    записаться</button>
            </div>


            <div  class="home-timetable__classes-wrap">
                <div class="home-timetable__classes">
                <h3 class="home-timetable__classes-name">
                    Online тренировка биоэнергетики
                </h3>
                <p class="home-timetable__classes-time">Вторник, 17:00
                </p>
                </div>
                <button type="button" class="home-timetable__classes-enroll-btn" data-name="Биоэнергетика">
                    записаться</button>
            </div>
            <div class="home-timetable__classes-wrap">
                <div class="home-timetable__classes">
                <h3 class="home-timetable__classes-name">пост ковид йога</h3>
                <p class="home-timetable__classes-time">среда, 8:30</p>
                </div>
                <button class="home-timetable__classes-enroll-btn" data-name="Пост ковид йога">
                    записаться</button>
            </div>
            <div class="home-timetable__classes-wrap">
                <div class="home-timetable__classes">
                <h3 class="home-timetable__classes-name">Ecstatic Dance Online
                </h3>
                <p class="home-timetable__classes-time">
                    последняя суббота месяца
                </p>
                </div>
                <button class="home-timetable__classes-enroll-btn" data-name="Ecstatic Dance">
                    записаться</button>
            </div>
        </div>
        <div class="home-timetable__more-btn">больше занятий</div>
        <div class="home-timetable__lector-photo">
            <img  src="<?php bloginfo('template_url'); ?>/assets/img/home/home_timetable/michael_photo.svg" alt="">
        </div>
        
    </div>
</section>
      
    </main>
 
<?php
get_footer();
?>
