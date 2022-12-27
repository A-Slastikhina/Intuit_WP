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
            био энергетика
         </h1>
            <h1 class="programm-intro__text">
            старт курса 10-го сентября
         </h1>
        
        <div class="programm-intro__item programm-intro__item--bio">
            <div class="list-wrapper">
                <h2 class="programm-section__courses-name">био</h2>
                <h2 class="programm-section__courses-name programm-section__courses-name--big"><?php the_title();?></h2>
                <p class="programm-section__courses-info programm-section__courses-info--big"><?php echo get_post_meta(get_the_ID(),'bioenergy', true);?></p>
             
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
            <img src="img/bioenergy/bioenergy_content_img.svg" alt="">
        </div>

        <div class="programm-content__specification">
            <h2 class="section-title programm-section__section-title">
                содержание
                <br>
                курса
            </h2>
                <div class="programm-content__specification-text-block">
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
                        'post_type'   => 'bioenergy-descr',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                            ?>

                    <div class="programm-content__paragraph-sec-col">
                  
                    <div class="programm-content__paragraph">
                   <?php the_content();?>
                    </div>
                  <p class="programm-content__paragraph">
                  </p>

                  </div>
                  <div class="programm-content__paragraph-third-col">
                      <p class="programm-content__paragraph">
                      <?php echo get_post_meta(get_the_ID(),'bioenergy-descr3', true);?>
                      </p>
                      <p class="programm-content__paragraph">
                      <?php echo get_post_meta(get_the_ID(),'bioenergy-descr4', true);?>
                      </p>
                      <p class="programm-content__paragraph">
                      <?php echo get_post_meta(get_the_ID(),'bioenergy-descr5', true);?>
                      </p>
                  </div>
          <!-- </div> -->
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?>
                


                    <!-- <div class="programm-content__paragraph-sec-col">
                  
                        <p class="programm-content__paragraph">
                            Биоэнергетика — это 100% практический курс для развития Ваших способностей. 
                            Курс подходит начинающим, готовым проявить достаточную интенсивность в занятиях, также может существенно расширить и дополнить навыки опытных практиков из областей: цигун, рейки, космоэнергетика.
                        </p>
                        <p class="programm-content__paragraph">
                            Знания 100% практичны, применимы и легко интегрируемы в Вашу жизнь.   Важный критерий – это проверяемость результатов. Мы четко знаем что делаем, и, при занятии в группе, Вы убедитесь, что цели, поставленные участниками в ходе тренировок, достигаются на вполне осязаемом уровне.

                        </p>

                        </div>
                        <div class="programm-content__paragraph-third-col">
                            <p class="programm-content__paragraph">
                            Например, мы смотрим ауру, и все студенты видят одно и то же. Значит, можно сделать вывод, что мы наблюдаем вполне реальное явление, а не что-то выдуманное из головы. 
                            </p>
                            <p class="programm-content__paragraph">
                                Весь опыт студентов в процессе практики мы пропускаем через такой фильтр, отсекая реальное развитие от представлений и догадок.
                            </p>
                            <p class="programm-content__paragraph">
                                В процессе прохождения курса Вы узнаете много интересного о себе, об окружающем миреи о том, как это все устроено в целом!
                            </p>
                        </div>
                </div> -->
              
        </div>
    </div>
</section>
       <section class="programm-course">
    <div class="wrapper programm-course__wrapper">

        <div class="programm-course__description">
            <div class="programm-course__description-part">
                <h2 class="section-title programm-section__title programm-section__title--bio">
                    программа курса
                </h2>
        
                <p class="programm-course__description-text">
                    Наша программа разделена на 3 основные блока. Вводный, Основной и Сенсорный. Занятия проходят 3 раза в неделю по дням: Вт, Чт и Суббота в 16:00 по Москве. 
                    <br>
                    <br>
                    Длительность занятия: 2 часа. После каждого занятия студент получает домашнее задание, самостоятельное выполнение ДЗ способствует закреплению материала. Студенты также состоят в общем чате, поддерживая и мотивируя друг друга.
                </p>
            </div>

            <div class="programm-course__request">
               <!--
                 <a href="">
                    <div class="programm-course__next"></div>
                </a>
               -->
              
                     <button type="button" class="programm-course__next">
                    Следующий курс начинается
                    <br>10 сентября 2022 года
                   </button>
         
              

                <p class="programm-course__request-text">
                    Оставь заявку сейчас и получи 
                    <br>
                     предложение с общей скидкой -30%
                </p>
                <button type="button" class="programm-course__request-btn">бронирую со скидкой</button>
            </div>
            
        </div>
      
        <div class="programm-course__intro">
            <h2 class="section-title programm-section__title programm-section__title--intro">
                вводное занятие
            </h2>

            <div class="programm-course__intro-content programm-course__intro-content--initiatory">
                <div class="programm-course__list programm-course__list--intro">
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--1">
                            чувствительность к энергии, техника безопасности
                        </p>
                        <p class="programm-course__intro-item-text">
                            Учимся чувствовать энергию, рассматриваем понятие энергополя, нарабатываем чувствительность рук

                        </p>
                    </div>
                    <div class="programm-course__intro-item">
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
                    </div>
                </div>
            </div>
            <div class="programm-course__purchase"> 
                <div class="programm-course__purchase-info">
                    <span class="programm-course__purchase-text programm-course__purchase-text--blue">стоимость: </span>
                    <span class="programm-course__purchase-text">в группе — 3000 ₽. индивидуально — 10000 ₽</span>
                </div>
                <button type="button" class="programm-course__purchase-btn">хочу участвовать!</button>
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
                <div class="programm-course__list programm-course__list--chakri">
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--1">
                            Работа с чакрами
                        </p>
                        <p class="programm-course__intro-item-text">
                            Основы энергетического взаимодействия и балансировки через чакры. Соответствие по цветам. Связи по чакрам. Перестройка на уровень партнера. Сканы, физиогномика.
                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--2">
                            Видение ауры
                        </p>
                        <p class="programm-course__intro-item-text">
                            Отработка навыка видения ауры. 
                            <br>
                            <br>
                            Интерпретация увиденного. Трансформация формы энергии и наблюдение изменений
                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--3">
                            здоровье
                        </p>
                        <p class="programm-course__intro-item-text">
                            Общие принципы и связи здоровья с энергетикой человека. 
                            Практика на очищениеи восстановление функций<br>
                            Методы целительства и техника безопасности

                        </p>
                    </div>
                </div>

                <div class="programm-course__list programm-course__list--water">
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--4">
                            Заряд воды 
                            <br>и носителей
                        </p>
                        <p class="programm-course__intro-item-text">
                            Общие принципы заряда воды, еды. Возможность наделенияих свойствами влияния, и качествами.

                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--5">
                            создание<br> амулетов
                        </p>
                        <p class="programm-course__intro-item-text">
                            Разная структура предметов — разные свойства. 
                            <br>
                            Усиление свойств природных камней.
                            Заряд предметов энергией в качестве аккумулятора.
                            <br>
                            Заряд свойством и энергией
                            <br>
                            Базовая логика и механизм влияния амулета

                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--6">
                            энергетические<br>потоки
                        </p>
                        <p class="programm-course__intro-item-text">                           
                            Виды потоков: потоки мест силы, потоки сил природы, универсальные космические потоки, эгрегориальные потоки.
                            <br>
                            Открытие и закрытие потоков, работа в потоках. Способы применения потоков

                        </p>
                    </div>
                </div>

                <div class="programm-course__list programm-course__list--elements">
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--7">
                            элементы 
                            <br>стихий
                        </p>
                        <p class="programm-course__intro-item-text">
                            Практика 4-х стихий для очищения. Практическое применение энергии стихий. 
                            <br>
                            <br>
                            Баланс стихий и техника безопасности
                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--8">
                            экология
                            <br>пространства
                        </p>
                        <p class="programm-course__intro-item-text">
                            Принципы циркуляции энергии в пространстве, методы работы с пространством.


                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--9">
                            разбор
                            <br>ошибок
                        </p>
                        <p class="programm-course__intro-item-text">                           
                            Разбор 5-и реальных ситуаций.
                            <br>
                            Виды ошибок по направлениям: базовая энергетическая практика, работа на местах силы, работа с внешними воздействиями
                        </p>
                    </div>
                </div>
            </div>

            <div class="programm-course__purchase"> 
                <div class="programm-course__purchase-info">
                    <span class="programm-course__purchase-text programm-course__purchase-text--blue">стоимость: </span>
                    <span class="programm-course__purchase-text">в группе — 14000 ₽. индивидуально — 58000 ₽</span>
                </div>
                <button type="button" class="programm-course__purchase-btn">хочу участвовать!</button>
            </div>
    </div>
    </div>
    <div class="programm-course__border-deco"></div>

    <!--
        сенсорика и интуиция
    -->
    <div class="wrapper programm-course__container programm-course__container--sensoric">
        <div class="programm-course__intro">
            <h2 class="section-title programm-section__title">
                сенсорика и интуиция
            </h2>

            <div class="programm-course__intro-content programm-course__intro-content--sensoric">
                <div class="programm-course__list programm-course__list--sensoric">
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--1">
                            работа на расстоянии
                        </p>
                        <p class="programm-course__intro-item-text">
                            Чувствование людей на расстоянии по фото и по настройке.
                            <br>
                            Определение состояния человека. Определение уровня энергии
                            и состояния чакр. Отработка навыка посылания энергии...
                        </p>
                    </div>
                    <div class="programm-course__intro-item">
                        <p class="programm-course__intro-item-title programm-course__intro-item-title--2">
                            интуиция и сенсорика
                        </p>
                        <p class="programm-course__intro-item-text">
                            Общие принципы. Что нам мешает слышать интуицию?
                            Техники просмотра будущего и ответов: Внутренний экран, Техника расстановки
                            Сканы по фото, и по настройке — практика и отработка
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
                    </div>
                </div>
            </div>
            <div class="programm-course__purchase"> 
                <div class="programm-course__purchase-info">
                    <span class="programm-course__purchase-text programm-course__purchase-text--blue">стоимость: </span>
                    <span class="programm-course__purchase-text">в группе — 3000 ₽. индивидуально — 10000 ₽</span>
        
                </div>
                <button type="button" class="programm-course__purchase-btn">хочу участвовать!</button>
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
            <div class="programm-photo__photo-gallery" id="my_nanogallery5">
                 
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
                    <div class="programm-reviews__item-inner">
                
                    </div>
                    
                    <?php 
                        
                        $photo = get_post_meta(get_the_ID(),'bioenergy-rev-img', true);
                        $fullImg = pods_image_url($photo, 'large');

                        echo '<img class ="programm-reviews__reviewer-photo"  src="'.$fullImg .'" alt = "Фото">'
                        ?>                       
                 



                    <!-- <img class="programm-reviews__reviewer-photo" src="img/bioenergy/bioenrgy_reviews/diana-photo.svg" alt="">             -->
                        <p class="programm-reviews__reviewer-name">
                            <?php the_title();?>
                        </p>
                        <p class="programm-reviews__course-name">
                        <?php echo get_post_meta(get_the_ID(),'bioenergy-rev-progr', true);?>
                        </p>
                        <div class="programm-reviews__reviewer-contacts">
                            <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--IG" href=""></a>
                            <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--TG" href=""></a>
                            <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--VK" href=""></a>
                        </div>
                        <div class="programm-reviews__review-text">
                            <?php the_content();?>
                    </div>
                          
                </li>

                 <?php
                    }

                    wp_reset_postdata(); // сброс
                                    
                ?>
                        
                    



            <!-- <li class="programm-reviews__item">
                <div class="programm-reviews__item-inner">
             
                </div>
                <img class="programm-reviews__reviewer-photo" src="img/bioenergy/bioenrgy_reviews/diana-photo.svg" alt="">
           
                    <p class="programm-reviews__reviewer-name">Диана</p>
                    <p class="programm-reviews__course-name">Курс “Биоэнергетика”</p>
                    <div class="programm-reviews__reviewer-contacts">
                        <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--IG" href=""></a>
                        <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--TG" href=""></a>
                        <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--VK" href=""></a>
                    </div>
                    <p class="programm-reviews__review-text">
                        Хочу от всего Сердца поблагодарить Тебя Михаил! За Твою чистоту, доброту и мастерство, 
                        <br>за Твою уникальность, умение тонко чувствовать и видеть. 
                        <br>Занятия по биоэнергетике...по вторникам, это просто невыразимо круто,  полезно 
                        и практически сразу приносит свои плоды! После практики отметила изменение 
                        сознательного восприятия на более тонкое, медиумичное, а это значит – каналы 
                        прочистились  и отладились электро магнитные поля,  идеальная подготовка к медитации.
                    </p>
           
               
            </li>
            <li class="programm-reviews__item">
                <div class="programm-reviews__item-inner">
             
                </div>
                <img class="programm-reviews__reviewer-photo" src="img/bioenergy/bioenrgy_reviews/diana-photo.svg" alt="">
                <p class="programm-reviews__reviewer-name">Диана</p>
                <p class="programm-reviews__course-name">Курс “Биоэнергетика”</p>
                <div class="programm-reviews__reviewer-contacts">
                    <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--IG" href=""></a>
                    <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--TG" href=""></a>
                    <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--VK" href=""></a>
                </div>
                
                <p class="programm-reviews__review-text">
                    Хочу от всего Сердца поблагодарить Тебя Михаил! За Твою чистоту, доброту и мастерство, 
                        <br>за Твою уникальность, умение тонко чувствовать и видеть. 
                        <br>Занятия по биоэнергетике...по вторникам, это просто невыразимо круто,  полезно 
                        и практически сразу приносит свои плоды! После практики отметила изменение 
                        сознательного восприятия на более тонкое, медиумичное, а это значит – каналы 
                        прочистились  и отладились электро магнитные поля,  идеальная подготовка к медитации.
                </p>
            </li>
    
           
            <li class="programm-reviews__item">
                <div class="programm-reviews__item-inner">
             
                </div>
                <img class="programm-reviews__reviewer-photo" src="img/bioenergy/bioenrgy_reviews/ekaterina-photo.svg" alt="">
                <p class="programm-reviews__reviewer-name">Екатерина
                </p>
                <p class="programm-reviews__course-name">Курс “Биоэнергетика”</p>
                <div class="programm-reviews__reviewer-contacts">
                    <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--IG" href=""></a>
                    <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--TG" href=""></a>
                    <a class="programm-reviews__reviewer-socials programm-reviews__reviewer-socials--VK" href=""></a>
                </div>
              
                    <p class="programm-reviews__review-text">
                        Миша, благодарю тебя за практику по биоэнергетике. За помощь мне. У меня до сих пор отличное самочувствие. В позвоночнике легкость. Ясность в голове. Разница в состоянии очевидная до и после. 
                    </p>   
                
     
            </li>
    
            <li class="programm-reviews__item">
                <div class="programm-reviews__item-inner">
             
                </div>
                <img class="programm-reviews__reviewer-photo" src="img/bioenergy/bioenrgy_reviews/ekaterina2-photo.svg" alt="">
                <p class="programm-reviews__reviewer-name">Екатерина
                </p>
                <p class="programm-reviews__course-name">Курс “Биоэнергетика”</p>
                <div class="programm-reviews__reviewer-contacts">
                    <a class="programm-reviews__reviewer-socials--IG" href=""></a>
                    <a class="programm-reviews__reviewer-socials--TG" href=""></a>
                    <a class="programm-reviews__reviewer-socials--VK" href=""></a>
                </div>
                <p class="programm-reviews__review-text">
                    Миша, благодарю тебя за практику по биоэнергетике. За помощь мне. У меня до сих пор отличное самочувствие. В позвоночнике легкость. Ясность в голове. Разница в состоянии очевидная до и после.    </p>
            </li>
             -->
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
            <img src="img/enroll/notebook.svg" alt="">
            </div>
            <div class="course-enrollment__text-part">
                <h2 class="section-title course-enrollment__title">
                    запись на курс
                </h2>
                <p class="course-enrollment__text">
                    Дата ближайшего курса
                    <br>
                    10 сентября 2022
    
                </p>
            </div>
            <div class="course-enrollment__form-part">
                <form action="post" class="course-enrollment__form">
                    <input class="course-enrollment__input" type="text" name="name" id="course-enrollment__form-name" placeholder="Имя:">
                    <input class="course-enrollment__input course-enrollment__input--contacts" type="text" name="contacts" id="course-enrollment__form-contacts" placeholder="whatsapp / telegram">
                    <button type="submit" class="course-enrollment__submit-btn">
                        записаться</button>
                </form>
            </div>
        </div>
       
    </div>
</section>

    </main>
<?php get_footer();?>