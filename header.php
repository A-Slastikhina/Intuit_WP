<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Главная</title>

    <?php
        wp_head();
    ?>



</head>
    <body>
      <header class="header" >
    <div class=" wrapper header__menu">
        <div class="header__addition">
            <div class="header__addition-logo header__addition-logo--light"></div>
            <p class="header__addition-text">Авторские тренинги<br>Михаила Царько</p>
        </div>

    <ul class="header__list">
        <li class="header__item header__item--home">
            <a class="header__item-link--home" href="home"></a>
        </li>
        <li class="header__item">
            <a class="header__item-link" href="about">о михаиле</a>
        </li>
        <li class="header__item">
            <a class="header__item-link" href="#">йога классы</a>
        </li>
        <li class="header__item">
            <a class="header__item-link" href="bioenergy.html">био энергетика</a>
        </li>
        <li class="header__item">
            <a class="header__item-link" href="look_inside.html">мероприятия</a>
        </li>
        <li class="header__item">
            <a class="header__item-link" href="#">блог</a>
        </li>
        <li class="header__item header__item--socials">
            <div class="site-socials__list">
                <a class="site-socials__item site-socials__item--WA" href=""></a>
                <a class="site-socials__item site-socials__item--IG" href=""></a>
                <button class="site-socials__item site-socials__item--lang" type="button"></button>
            </div>
        </li>
    </ul>
    <button type="button" class="header__popup-btn header__popup-btn--top"></button>
    <div class="header__popup hidden-popup">
        <div class="wrapper">
            <button type="button" class="header__popup-btn--close">&#10006;</button>

            <ul class="header__popup-list">
                <li class="header__popup-item header__item--home">
                    <a class="header__item-link--home" href="home"></a>
                </li>
                <li class="header__popup-item">
                    <a href="about">о михаиле</a>
                </li>
                <li class="header__popup-item">
                    <a href="#">йога классы</a>
                </li>
                <li class="header__popup-item">
                    <a href="bioenergy.html">био энергетика</a>
                </li>
                <li class="header__popup-item">
                    <a href="look_inside.html">мероприятия</a>
                </li>
                <li class="header__popup-item">
                    <a href="#">блог</a>
                </li>
            </ul>
        </div>
        
    </div>
    </div>
</header> 