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
          <ul class="intro-courses__mobile-list">
            
         
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
                        'post_type'   => 'intro-mobile-slider',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
             ?>

                        <li class="intro-courses__mobile-item">

                        <p class=" intro-courses__mobile-title">
                        <?php echo get_post_meta(get_the_ID(),'slide-subtitle', true);?>
                        </p>
                        <p class=" intro-courses__mobile-title"><?php the_title(); ?></p>

                        <div class="intro-courses__mobile-backround">
                        <?php                        
                        $photo = get_post_meta(get_the_ID(),'slide-img', true);
                        $fullImg = pods_image_url($photo, 'large');
                        echo '<img  src="'.$fullImg .'" alt = "Фото">'
                        ?>                    
                        </div>


                        </li>
                     
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?> 

          </ul>
          <div class="intro-courses__mobile-sliderbtns"></div>
          <div class="wrapper home-page__intro-wrapper">
            
            
          
          <ul class="intro__courses-list">
                 
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

                        <li class="intro__courses-item">
                            
                            <div class="list-wrapper">
                            <h2 class="intro__courses-name">
                            <?php echo get_post_meta(get_the_ID(),'subtitle', true);?>
                            </h2>
                            <h2 class="intro__courses-name intro__courses-name--big intro__courses-name--ff">
                                <?php the_title(); ?>
                            </h2>
                            <div class="intro__courses-info">
                            
                            <?php the_content();?>
                            
                            </div>
                            <a href="<?php echo get_post_meta(get_the_ID(),'course-link', true);?>" class="intro__courses-more">Подробнее</a>
                            </div>
                            <div class="intro__courses-background">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                            
                        </li>

                        <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?> 
          
              </ul>
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
     

      <ul class="home-courses__list">
        <?php
            global $post;

            $myposts = get_posts(array(
                'numberposts' => -1,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'ASC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'home-courses-slider',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
             ) );

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
        ?>    

            <li class="home-courses__item">
                <div class="home-courses__item-content">
                    <a href="">

                    <?php                        
                $photo = get_post_meta(get_the_ID(),'slide-img', true);
                $fullImg = pods_image_url($photo, 'large');
                echo '<img class ="home-courses__item-img"  src="'.$fullImg .'" alt = "Фото">'
                     ?>                    
                    </a>
                    <a href="">
                        <p class="home-courses__item-name section-title">
                            <?php the_title(); ?>
                        </p>
                    </a>
                
                    <div class="home-courses__item-description paragraph">
                        <?php the_content(); ?>
                    </div>
                    <a class="home-courses__item--more-btn" href="#">
                        подробнее
                    </a>
                </div>
                </li>  
            <?php 
	        }
            } 
            wp_reset_postdata(); // Сбрасываем $post
            ?>
       
      </ul>
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

      <div  class="home-about__photo-gallery">
      <?php
      global $post;
$home_gallery_post = get_post(154);
setup_postdata($home_gallery_post);
the_content();
wp_reset_postdata();
?>
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
                'post_type'   => 'home-review',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
             ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                    ?>

      <li class="home-reviews__item">
          <div class="home-reviews__item-inner _js-reviews__item-inner">  
          </div>
          <div class="home-reviews__item-content">
          <?php                        
                $photo = get_post_meta(get_the_ID(),'home-rev-img', true);
                $fullImg = pods_image_url($photo, 'large');
                echo '<img class ="home-reviews__reviewer-photo"  src="'.$fullImg .'" alt = "Фото">'
            ?>   
              <p class="home-reviews__reviewer-name _js-reviews__reviewer-name">
              <?php the_title();?>
              </p>
              <p class="home-reviews__course-name _js-reviews__course-name">
              <?php echo get_post_meta(get_the_ID(),'home-rev-progr', true);?>
            </p>
              <div class="home-reviews__reviewer-socials _js-reviews__reviewer-socials">
                  <a class="home-reviews__reviewer-socials--IG" href="<?php echo get_post_meta(get_the_ID(),'ig-link', true);?>"></a>
                  <a class="home-reviews__reviewer-socials--TG" href="<?php echo get_post_meta(get_the_ID(),'tg-link', true);?>"></a>
                  <a class="home-reviews__reviewer-socials--VK" href="<?php echo get_post_meta(get_the_ID(),'vk-link', true);?>"></a>
              </div>
              <div class="home-reviews__review-text _js-reviews__review-text">
              <?php the_content();?>
            </div>
          </div>

              <div class="home-reviews__arrow-btn _js-reviews__arrow-btn"></div>
         
      </li>

      <?php
            }

            wp_reset_postdata(); // сброс
                                    
        ?>

      
  </ul>
  <div class="home-reviews__slider-btns">
      <a  class="home-reviews__more-btn">другие отзывы</a>
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
                  <input class="home-timetable__input" type="text" name="name" id="course-enrollment__form-name" placeholder="Имя:">
              </label>
              <label for="">
                  <input class="home-timetable__input home-timetable__input--contacts" type="text" name="contacts" id="course-enrollment__form-contacts" placeholder="whatsapp / telegram">
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
          <!-- <div class="home-timetable__classes-wrap">
              <div class="home-timetable__classes">
              <a class="home-timetable__classes-name" href="">пост ковид йога</a>
              <p class="home-timetable__classes-time">среда, 8:30</p>
              </div>
              <button class="home-timetable__classes-enroll-btn">
                  записаться</button>
          </div>
          <div class="home-timetable__classes-wrap">
              <div class="home-timetable__classes">
              <a class="home-timetable__classes-name" href="">Ecstatic Dance Online
              </a>
              <p class="home-timetable__classes-time">
                  последняя суббота месяца
              </p>
              </div>
              <button class="home-timetable__classes-enroll-btn" data-name="Ecstatic Dance">
                  записаться</button>
          </div>


          <div  class="home-timetable__classes-wrap">
              <div class="home-timetable__classes">
              <a class="home-timetable__classes-name" href="">
                  Online тренировка биоэнергетики
              </a>
              <p class="home-timetable__classes-time">Вторник, 17:00
              </p>
              </div>
              <button type="button" class="home-timetable__classes-enroll-btn" data-name="Биоэнергетика">
                  записаться</button>
          </div>
          <div class="home-timetable__classes-wrap">
              <div class="home-timetable__classes">
              <a class="home-timetable__classes-name" href="">bioenergy in english</a>
              <p class="home-timetable__classes-time">суббота, в 12 дубайское время</p>
              </div>
              <button class="home-timetable__classes-enroll-btn">
                  записаться</button>
          </div>
          <div class="home-timetable__classes-wrap">
              <div class="home-timetable__classes">
              <a class="home-timetable__classes-name" href="">индивидуальное занятие
              </a>
              <p class="home-timetable__classes-time">
                  запишись в любое удобное время
              </p>
              </div>
              <button class="home-timetable__classes-enroll-btn" data-name="Ecstatic Dance">
                  записаться</button>
          </div> -->

                <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?>
      </div>
      <div class="home-timetable__more-btn">
        <a href="">больше занятий</a>
      </div>
      <div class="home-timetable__lector-photo">
          <img  src="<?php bloginfo('template_url'); ?>/assets/img/home/home_timetable/michael_photo.svg" alt="">
      </div>
      
  </div>
</section>
    
  </main>


<?php
get_footer();
?>