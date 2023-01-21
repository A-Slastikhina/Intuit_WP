<?php get_header(); ?>

<?php 
/* 
Template Name: bioenergy
*/
?>

<main>
       <section class="programm-intro programm-intro--bio">
    <div class="wrapper programm-section__wrapper">
     
        <h1 class="programm-intro__text">
        <?php echo get_post_meta(get_the_ID(),'subtitle', true);?>
        <?php the_title();?>
         </h1>
            <h1 class="programm-intro__text">
            <?php the_content();?>
         </h1>
        
        <div class="programm-intro__item ">
            <div class="list-wrapper">
                <h2 class="programm-section__courses-name">
                <?php echo get_post_meta(get_the_ID(),'subtitle', true);?>
                </h2>
                <h2 class="programm-section__courses-name programm-section__courses-name--big programm-section__courses-name--ff">
                    <?php the_title();?>
                </h2>
                <div class="programm-section__courses-info programm-section__courses-info--big">
                <?php the_content();?>
                </div>             
            </div>
                <div class="programm-intro__background">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
        </div>
           
    </div>

    </section>
       <section class="programm-content">
    <div class="programm-content__wrapper">
            
           

        <div class="programm-content__img">
                    <?php
                        global $post;
                        $bio_content = get_post(341);
                        setup_postdata($bio_content);
                        echo get_the_post_thumbnail($bio_content->ID); 
                        wp_reset_postdata();
                    ?> 
       
        </div>

        <div class="programm-content__specification">
            <h2 class="section-title programm-section__section-title">
                    <?php
                        global $post;
                        $bio_content = get_post(341);
                        setup_postdata($bio_content);
                        echo get_the_title($bio_content->ID);
                        wp_reset_postdata();
                    ?> 
            </h2>
                <div class="programm-content__specification-text-block">
                

                    <div class="programm-content__paragraph-sec-col">
                  
                    <div class="programm-content__paragraph">
                        <?php
                            global $post;
                            $bio_content = get_post(341);
                            setup_postdata($bio_content);
                            the_content();
                            wp_reset_postdata();
                        ?> 
                    </div>
                 

                  </div>
                 
           </div> 
                       
                
        </div>
    </div>
</section>

<section class="programm-course">
    <div class="wrapper programm-course__wrapper">
        <h2 class="section-title programm-section__title programm-section__title--bio">
                <?php 
                global $post;
                $bio_info_post = get_post(238);
                setup_postdata( $bio_info_post);
                echo get_the_title($bio_info_post->ID);
                wp_reset_postdata();
                ?>
        </h2>
        <div class="programm-course__description">
            <div class="programm-course__description-part">
               
        
                <div class="programm-course__description-text">
                <?php
                  
                    $bio_info_post = get_post(238);
                    setup_postdata( $bio_info_post);
                    the_content();
                    wp_reset_postdata();
                ?>
                </div>

            </div>

            <div class="programm-course__request">
               <!--
                 <a href="">
                    <div class="programm-course__next"></div>
                </a>
               -->
              
                    <button type="button" class="programm-course__next">
                     <?php
                        global $post;
                        $bio_info_post = get_post(238);
                        setup_postdata( $bio_info_post);
                        echo get_post_meta(238,'paragraph', true);
                        wp_reset_postdata();
                    ?>
                   </button>
         
              

                <p class="programm-course__request-text">
                    Оставь заявку сейчас и получи 
                    <br>
                     предложение с общей скидкой -30%
                </p>
                <button type="button" class="programm-course__purchase-btn" data-course_part="Биоэнергетика - Со скидкой">бронирую со скидкой</button>
            </div>
            
        </div>
      
        
        <div class="programm-course__intro">
            <h2 class="section-title programm-section__title programm-section__title--intro">
                вводное занятие
            </h2>

            <div class="programm-course__intro-content programm-course__intro-content--initiatory">
                
                <div class="programm-course__list programm-course__list--intro">
                <div class="programm-course__list-images">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/bioenergy/bioenergy_programm/vvodnoe-img.svg" alt="">          
                </div>
               <?php $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'bio-prog-vvodnoe',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>

                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title"
                        data-number="<?php echo get_post_meta(get_the_ID(), 'number', true); ?>">
                        <?php the_title();?>
                        </p>
                        <div class="programm-course__intro-item-text">
                        <?php the_content();?> 
                        </div>
                    </div>
                <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?>
                
                    <!-- <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--2">
                            связь способностей с вниманием
                        </p>
                        <p class="programm-course__intro-item-text">
                            Нарабатываем навык управления вниманием. Учимся сканировать свое тело и пространство через углубление внимания, важность внимания и состояния “обнуления”
                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--3">
                            прием 
                            <br>и отдача энергии
                        </p>
                        <p class="programm-course__intro-item-text">
                            Генерация и распознавание свойств энергии, методы передачи энергии
                        </p>
                    </div> -->
                </div>
            </div>
            <div class="programm-course__purchase"> 
                <div class="programm-course__purchase-info">
                    <span class="programm-course__purchase-text programm-course__purchase-text--blue">стоимость: </span>
                    <span class="programm-course__purchase-text">в группе — 3000 ₽. индивидуально — 10000 ₽</span>
                </div>
                <button type="button" class="programm-course__purchase-btn" data-course_part="Биоэнергетика - Вводное занятие">хочу участвовать!</button>
            </div>
           
        </div>

    </div>
    <div class="programm-course__border-deco"></div>
 <!--
    основные темы
 -->
    <div class="wrapper programm-course__container programm-course__container--main">
        <div class="programm-course__intro">
            <h2 class="section-title programm-section__title">
                основные темы
            </h2>

            <div class="programm-course__intro-content programm-course__intro-content--main">
              
                <div class="programm-course__list programm-course__list--main">
                    <div class="programm-course__list-images">
                        <img class="programm-course__list-img" src="<?php bloginfo('template_url'); ?>/assets/img/bioenergy/bioenergy_programm/chakri-img.svg" alt="">
                        <img class="programm-course__list-img" src="<?php bloginfo('template_url'); ?>/assets/img/bioenergy/bioenergy_programm/zarad_vodi-img.svg" alt="">
                        <img class="programm-course__list-img" src="<?php bloginfo('template_url'); ?>/assets/img/bioenergy/bioenergy_programm/elements-img.svg" alt="">
                    </div>

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
                        'post_type'   => 'bio-prog-main',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>


                    <div class="programm-course__intro-item">
                       
                        <p class="programm-course__intro-item-title" 
                        data-number="<?php echo get_post_meta(get_the_ID(), 'number', true); ?>">
                        <?php the_title();?>
                        </p>
                        <div class="programm-course__intro-item-text">
                        <?php the_content();?>                        
                        </div>
                    </div>

                    <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                    ?>


                </div>


            </div>

            <div class="programm-course__purchase"> 
                <div class="programm-course__purchase-info">
                    <span class="programm-course__purchase-text programm-course__purchase-text--blue">стоимость: </span>
                    <span class="programm-course__purchase-text">в группе — 14000 ₽. индивидуально — 58000 ₽</span>
                </div>
                <button type="button" class="programm-course__purchase-btn" data-course_part="Биоэнергетика - Основные темы">хочу участвовать!</button>
            </div>
        </div>
    </div>
    <div class="programm-course__border-deco"></div>

    <!--
        сенсорика и интуиция
    -->
    <div class="wrapper programm-course__container programm-course__container--adv">
        <div class="programm-course__intro">
            <h2 class="section-title programm-section__title">
                сенсорика и интуиция
            </h2>

            <div class="programm-course__intro-content">
                <div class="programm-course__list programm-course__list--adv">
                <div class="programm-course__list-images">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/bioenergy/bioenergy_programm/vvodnoe-img.svg" alt="">          
                </div>
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
                        'post_type'   => 'bio-prog-sensoric',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>


                    <div class="programm-course__intro-item">
                       
                        <p class="programm-course__intro-item-title" 
                        data-number="<?php echo get_post_meta(get_the_ID(), 'number', true); ?>">
                        <?php the_title();?>
                        </p>
                        <div class="programm-course__intro-item-text">
                        <?php the_content();?>                        
                        </div>
                    </div>

                    <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                    ?>

                </div>
            </div>
            <div class="programm-course__purchase"> 
                <div class="programm-course__purchase-info">
                    <span class="programm-course__purchase-text programm-course__purchase-text--blue">стоимость: </span>
                    <span class="programm-course__purchase-text">в группе — 3000 ₽. индивидуально — 10000 ₽</span>
        
                </div>
                <button type="button" class="programm-course__purchase-btn"data-course_part="Биоэнергетика - Сенсорика">хочу участвовать!</button>
            </div>
            <div class="programm-course__addition"> 
                <span class="programm-course__addition-homework programm-course__addition-homework--black">
                    Важная часть занятий — домашние задания,
                </span>
                <span class="programm-course__addition-homework">
                    которые закрепляют навыки<br>
                    и дают возможность обсудить результаты с учителем и другими практикующими.
    
                </span>
            </div>
            
           
        </div>

    </div>
    <div class="programm-course__border-deco"></div>
    </div>

    <div class="programm-course__popup programm-course__popup--hidden">

<div class="programm-course__form-part">
    <button type="button" class="programm-course__form--close">&#10006;</button>

    <form autocomplete="off" action="sender.php" class="programm-course__form"  method="post">
        <?php
        echo do_shortcode('[contact-form-7 id="407" title="Форма Биоэнергетика ХОЧУ УЧАСТВОВАТЬ"]');
        ?>

        <!--
         <label for="">
            <input autocomplete="off" class="programm-course__input--prog_name" type="text" name="course-name" id="">
        </label>
         <label for="">
            <input autocomplete="off" class="programm-course__input _req" type="text" name="name" id=""   placeholder="Имя:">
        </label>
        <label for="">
            <input autocomplete="off" class="programm-course__input home-timetable__input--contacts _req _tel" type="text"  name="contacts" id=""  placeholder="whatsapp / telegram">
        </label>
        <label for="">
            <input autocomplete="off" class="programm-course__input home-timetable__input--email _req _email" type="email" name="email" id="" placeholder="email">
        </label>
        <button type="submit" class="programm-course__form-submit">
            записаться</button> -->
    </form>
   
</div>

</div>
</section>
       
<section class="programm-photo">
    <div class="programm-photo__wrapper">
        <h2 class="section-title programm-photo__title">
            фото  и видео
        </h2>
        <p class="section-subtitle">
            прошедших практик
        </p>

        <div class="programm-photo__photo-container">
            <div class="programm-photo__photo-gallery">
            <?php
                global $post;
                $bio_gallery_post = get_post(245);
                setup_postdata($bio_gallery_post);
                the_content();
                wp_reset_postdata();
            ?> 
            </div>
        </div>

    </div>
</section>
       <section class="programm-reviews">
    <div class="wrapper programm-reviews__wrapper">
        <h2 class="section-title programm-reviews__title">
            отзывы участников
        </h2>
        <p class="section-subtitle programm-reviews__subtitle">
            о нашем курсе
        </p> 

        <ul class="programm-reviews__list">

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
                'post_type'   => 'bioenergy-review',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
             ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                    ?>

            <li class="programm-reviews__item">
                <div class="programm-reviews__item-inner _js-reviews__item-inner">
             
                </div>
                <div class="programm-reviews__item-content">

                    <?php                        
                    $photo = get_post_meta(get_the_ID(),'bioenergy-rev-img', true);
                    $fullImg = pods_image_url($photo, 'large');
                    echo '<img class ="programm-reviews__reviewer-photo"  src="'.$fullImg .'" alt = "Фото">'
                    ?>   
                        <p class="programm-reviews__reviewer-name _js-reviews__reviewer-name">
                        <?php the_title();?>
                        </p>
                        <p class="programm-reviews__course-name _js-reviews__course-name">
                        <?php echo get_post_meta(get_the_ID(),'bioenergy-rev-progr', true);?>
                        </p>
                        <div class="programm-reviews__reviewer-contacts _js-reviews__reviewer-socials">
                            <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--IG" href="<?php echo get_post_meta(get_the_ID(),'ig-link', true);?>"></a>
                            <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--TG" href="<?php echo get_post_meta(get_the_ID(),'tg-link', true);?>"></a>
                            <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--VK" href="<?php echo get_post_meta(get_the_ID(),'vk-link', true);?>"></a>
                        </div>
                        <div class="programm-reviews__review-text _js-reviews__review-text">
                        <?php the_content();?>
                        </div>
                </div>
                <div class="programm-reviews__arrow-btn _js-reviews__arrow-btn"></div>
               
            </li>

      <?php
            }

            wp_reset_postdata(); // сброс
                                    
        ?>
           

        </ul>
        <div class="programm-reviews__slider-btns">
            <a  class="programm-reviews__more-btn">другие отзывы</a>
        </div>

    </div>
</section>
       <section class="course-enrollment">
    <div class="wrapper course-enrollment__wrapper">
        <div class="course-enrollment__content">
            <div class="course-enrollment__img-part">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/enroll/notebook.svg" alt="">
            </div>
            <div class="course-enrollment__text-part">
                <h2 class="section-title course-enrollment__title">
                    запись на курс
                </h2>
                <p class="course-enrollment__text">
                    Дата ближайшего курса
                    <br>
                    <?php echo get_post_meta(get_the_ID(),'next-course', true);?>
    
                </p>
            </div>
            <div class="course-enrollment__form-part">
                <form action="" method="post" class="course-enrollment__form">
                <?php 
                     echo do_shortcode('[contact-form-7 id="491" title="Запись на курс Биоэнергетика"]')
                ?>
                    <!-- <input class="course-enrollment__input" type="text" name="name"  placeholder="Имя:">
                    <input class="course-enrollment__input course-enrollment__input--contacts" type="text" name="contacts" required placeholder="whatsapp / telegram">
                    <button type="submit" class="course-enrollment__submit-btn">
                        записаться</button> -->
                </form>
            </div>
        </div>
       
    </div>
</section>

    </main>

    <?php get_footer();?>