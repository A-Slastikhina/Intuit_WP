<?php get_header(); ?>

<?php
/*
Template Name: about

*/
?>

<main>
      <section class="about__intro">
    <div class="wrapper about__intro-wrapper">
     
        <h1 class="home-page__intro-text">
            <?php echo get_post_meta(get_the_ID(),'subtitle', true);?>
            <br>
            <?php the_title();?>
        </h1>

        
            <div class="about__intro-item">
               <div class="list-wrapper">
                <h2 class="intro__courses-name">
                    <?php echo get_post_meta(get_the_ID(),'subtitle', true);?>
                </h2>
                <h2 class="intro__courses-name intro__courses-name--big intro__courses-name">
                    <?php the_title();?>
                </h2>
                <div class="intro__courses-info">
                    <?php the_content();?>
                </div>
               
               </div>
               <div class="programm-intro__background">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>               
                
            </div>
           
    </div>
 

</section>

      <section class="about__experience">
    <div class="wrapper about__experience-wrapper">
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


      <section class="why-yoga">
    <div class="wrapper why-yoga-wrapper">
        
        <div class="why-yoga__text-part">
            <h2 class="section-title why-yoga__title">
                что меня привело в йогу
            </h2>
            <p class="why-yoga__paragraph why-yoga__paragraph--italic">
                “Все что мы способны увидеть в других - это отражение нас самих”
            </p>
            <div class="why-yoga__paragraph--frst-col-sec-row">
                <p class="why-yoga__paragraph">
                    По возвращении в Казахстан я продолжил совершенствовать свои навыки, делиться прекрасным опытом и состоянием мира с теми, кто меня окружает. Я делаю это через множество практик, которые помогают раскрыть душу, наполнить вас ощущением уверенности и энергией.
                    <br>
                    <br>
                    За последний год я проводил практики в Казахстане, Москве, Крыму, Дубае и Турции.</p>
                    
                    <p class="why-yoga__paragraph">Видеть ваши улыбки, осознания и реальную пользу которую получают мои ученики - это лучшая награда, и часть моего предназначения.
                        <br>
                        <br>
                        Всегда рад встречам и сотрудничеству!
                    </p>
            </div>
            <div class="why-yoga__paragraph--sec-col-sec-row">
                <p class="why-yoga__paragraph">
                    В 18 лет я познакомился с практикой цигун, и сразу слишком серьезно к ней отнесься, я уехал на 3 месяца практиковать в лес, ни с кем не общался, без телефона и интернета.Способности от практики открылись очень сильно, но вернувшись в социум мне было очень сложно жить с таким уровнем чувствительности и способностей - тогда я решил оставить практику цигун, и ушел в тему йоги и интегрального развития.
                </p>
               <span class="why-yoga__download-presentation">
                <a href="" download="презентация">
                    скачать
                    <br>
                    презентацию практик
                </a>
               </span>  
            </div>
          
                
            </div>
    
    </div>
</section>
      <section class="about__bright-experiance">
    <div class="about__bright-wrapper">
        <div class="about__bright-img">
            <?php
                global $post;
                $about_bright_exp = get_post(348);
                setup_postdata($about_bright_exp);
                echo get_the_post_thumbnail($about_bright_exp->ID); 
                wp_reset_postdata();
            ?>         
        </div>

        <div class="about__bright-inner">
            <h2 class="section-title bright__title">
                <?php
                    global $post;
                    $about_bright_exp = get_post(348);
                    setup_postdata($about_bright_exp);
                    echo get_the_title($about_bright_exp->ID);
                    wp_reset_postdata();
                ?> 
            </h2>
                <div class="about__bright-text-part">
                             
                        <div class="bright__paragraph">
                            <?php
                                global $post;
                                $about_bright_exp = get_post(348);
                                setup_postdata($about_bright_exp);
                                the_content();
                                wp_reset_postdata();
                            ?> 
                        </div>
             
                </div>
              
        </div>
    </div>
</section>
      <section class="about-secrets">
    <div class="wrapper about-secrets__wrapper">
        <h2 class="section-title about-secrets__title">
            раскрываю секреты
        </h2>
        <p class="section-subtitle about-secrets__subtitle">
            ответы на ваши вопросы
        </p>

        <div class="about-secrets__text-part">
            <div class="about-secrets__text-item about-secrets__text-item--frst-col">
                <p class="about-secrets__item-title">
                    Путешествия
                </p>
                <p class="about-secrets_item-paragraph">
                    Я начал путешествовать, и это увлечение, включая жизнь в разных культурах и языковых средах во многом сформировало мое видение реальности и неоднозначности одной конкретной культуры. Я увидел что в каждом способе жизни, культуре и местности есть как свои плюсы - прекрасные и красивые, так и минусы - заблуждения целых народов.
                    <br>
                    <br>
                    И важно уважать свою среду, но понимать что все находится в непрерывном развитии, и нет проявленных эталонов совершенства в чем либо, особенно в технологиях к которым мы сейчас так привязываемся. Единственное совершенство - в Любви!
                </p>
            </div>

            <div class="about-secrets__text-item">
                <p class="about-secrets__item-title">
                    Деньги и успех
                </p>
                <p class="about-secrets_item-paragraph">
                    Следующим открытием стало то, что живя в плотном плане нужно себя обеспечивать всеми необходимыми благами.
                    <br>
                    <br>
                    И я быстро понял что "карьерная модель": учеба в школе/вузе - и работа за зарплату, для меня выглядит скорее как тупиковый путь (в СНГ), и я стал заниматься бизнесом: в основном IT, авторскими турами в Таиланд, недвижимостью на Бали.
                    <br>
                    <br>
                    Именно деловая среда и необходимость развиваться в материальном плане дала мне устойчивость и внутренний стержень, без которых занимаясь практиками можно улетать далеко и на долго!)
                </p>
            </div>

        </div>
    </div>
</section>
      <section class="about-photo">
  <div class="wrapper about-photo__wrapper">
    <h2 class="section-title about-photo__title">
        фото
    </h2>
    <div class="about__photo-slider">

        
            <div class="about-photo__gallery">
            <?php
                global $post;
                $about_gallery_post = get_post(329);
                setup_postdata($about_gallery_post);
                the_content();
                wp_reset_postdata();
            ?> 
            </div>
       

       
    </div>

    <div class="about__photo-slider-btns">
        <a href="" class="about__photo-slider-btn">другие фото</a>
    </div>

  </div>
</section>
<section class="home-timetable">
<div class="home-timetable__popup home-timetable__popup--hidden">

<div class="home-timetable__form-part">
    <button type="button" class="home-timetable__form--close">&#10006;</button>

    <form action="" class="home-timetable__form"  method="post">
        <?php 
            echo do_shortcode('[contact-form-7 id="300" title="Форма записи на курсы home-page"]')
        ?>

         <!-- <label for="">
            <input class="home-timetable__input--prog_name" type="text" name="course-name" id="">
        </label>
        <label for="">
            <input class="home-timetable__input _req" type="text" name="name" id="course-enrollment__form-name" placeholder="Имя:">
        </label>
        <label for="">
            <input class="home-timetable__input home-timetable__input--contacts _req" type="text" name="contacts" id="course-enrollment__form-contacts" placeholder="whatsapp / telegram">
        </label>
        <label for="">
            <input class="home-timetable__input home-timetable__input--email" type="email" name="email" id="" placeholder="email">
        </label>
        <button type="submit" class="home-timetable__form-submit">
            записаться</button> -->
    </form>
   
</div>

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
                        'post_type'   => 'home-timetable-item',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>


            <div  class="home-timetable__classes-wrap">
            <div class="home-timetable__classes">
            <a class="home-timetable__classes-name" href="">
            <?php the_title();?>
            </a>
            <p class="home-timetable__classes-time">
            <?php echo get_post_meta(get_the_ID(),'class-time', true);?>
                        </p>
            </p>
            </div>
            <button type="button" class="home-timetable__classes-enroll-btn" data-name=" <?php the_title();?>">
                записаться</button>
            </div>

                <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?>
            </div>
        <div class="home-timetable__more-btn">
            <a href="">больше занятий
            </a> 
        </div>
        <div class="home-timetable__lector-photo">
            <img  src="<?php bloginfo('template_url'); ?>/assets/img/home/home_timetable/michael_photo.svg" alt="">
        </div>
        
    </div>
</section>
    </main>

<?php get_footer(); ?>