<footer class="footer">
    <div class="wrapper footer__wrapper">
        <p class="footer__copyright mobile-hidden">© Intuit flow, 2022, Все права защищены</p>
        <div class="footer__content">
            <div class="footer__socials mobile-hidden">
                <p class="footer__socials-text">М.Царько в соцсетях:</p>
               
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
                            'post_type'   => 'footer-social-links',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                            ?>


                <div class="footer__socials-inner">
                                <a class="footer__socials-link" href="<?php echo get_post_meta(get_the_ID(),'link', true);?>">                           
                                <?php                        
                                    $photo = get_post_meta(get_the_ID(),'icon', true);
                                    $fullImg = pods_image_url($photo, 'large');
                                    echo '<img class="footer__socials-img" src="'.$fullImg .'" alt = "Фото">'
                                ?> 
                                    <!-- <img src="" alt=""> -->
                                </a>
                                <a class="footer__socials-hover" href="<?php echo get_post_meta(get_the_ID(),'link-hover', true);?>">
                                <?php                        
                                    $photo = get_post_meta(get_the_ID(),'icon-hover', true);
                                    $fullImg = pods_image_url($photo, 'large');
                                    echo '<img class="footer__socials-img--hover" src="'.$fullImg .'" alt = "Фото">'
                                ?> 
                                </a>
                            
                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                                                
                            ?>    
                    
                
                <!-- <div class="footer__socials-inner">
                    <a class="footer__socials-link footer__socials-link--tg" href=""></a>
                    <a class="footer__socials-hover footer__socials-hover--tg" href=""></a>
                </div>
                <div class="footer__socials-inner">
                    <a class="footer__socials-link footer__socials-link--youtube" href=""></a>
                    <a class="footer__socials-hover footer__socials-hover--youtube" href=""></a>
                </div>
               
                <div class="footer__socials-inner">
                <a class="footer__socials-link footer__socials-link--fb" href=""></a>
                <a class="footer__socials-hover footer__socials-hover--fb" href=""></a>

                </div>
                <div class="footer__socials-inner">
                <a class="footer__socials-link footer__socials-link--vk" href=""></a>
                <a class="footer__socials-hover footer__socials-hover--vk" href=""></a>

                </div> -->
            </div>
            <div class="footer__link footer__link--organizer">
                <a  href="#">Организаторам</a>
            </div>
            <div class="footer__link footer__link--contacts">
                <a href="#">Контакты</a>
            </div>
           
        </div>
       
    </div>
    <!-- <script  type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="js/app.min.js"></script> -->
   
</footer>

<?php
wp_footer();
?>


    </body>
</html>