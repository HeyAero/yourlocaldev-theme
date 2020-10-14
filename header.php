<!DOCTYPE html>
<html>
    <head>
       <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, inisital-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div id="topNav" class="fixed-top">
        <div class="container d-flex align-items-center text-center" id="nav-bar-content">
            <div class="mr-auto">
                <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/name.png" style="height:75px; padding-bottom: 20px; padding-left: 20px;">
            </div>
            <div class="d-none d-none-sm d-md-flex align-items-center">
                <div class="px-3">
                    <a href="/home">
                        <i class="fa fa-home fa-2x sidebar-button"></i>
                        <p>HOME</p>
                    </a>
                </div>
                <div class="px-3">
                    <a href="/about">
                        <i class="fa fa-user fa-2x sidebar-button"></i>
                        <p>ABOUT</p>
                    </a>
                </div>
                <div class="px-3">
                    <a href="/portfolio">
                        <i class="fa fa-folder-open fa-2x sidebar-button"></i>
                        <p>PORTFOLIO</p>
                    </a>
                </div>
                <div class="px-3">
                    <a href="/skills">
                        <i class="fa fa-cogs fa-2x sidebar-button"></i>
                        <p>SKILLS</p>
                    </a>
                </div>
                <div class="px-3">
                    <a href="/contact">
                        <i class="fa fa-envelope fa-2x sidebar-button"></i>
                        <p>CONTACT</p>
                    </a>
                </div>
            </div>
            <div id="mobileMenuButton" class="d-block d-sm-block d-md-none phone-menu-button">
                <a><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
        <div id="mobileMenu" class="container d-none text-center">
            <div class="px-3">
                <a href="/">
                    <i class="fa fa-home fa-2x sidebar-button"></i>
                    <p>HOME</p>
                </a>
            </div>
            <div class="px-3">
                <a href="/about">
                    <i class="fa fa-user fa-2x sidebar-button"></i>
                    <p>ABOUT</p>
                </a>
            </div>
            <div class="px-3">
                <a href="/portfolio">
                    <i class="fa fa-folder-open fa-2x sidebar-button"></i>
                    <p>PORTFOLIO</p>
                </a>
            </div>
            <div class="px-3">
                <a href="/skills">
                    <i class="fa fa-cogs fa-2x sidebar-button"></i>
                    <p>SKILLS</p>
                </a>
            </div>
            <div class="px-3">
                <a href="/contact">
                    <i class="fa fa-envelope fa-2x sidebar-button"></i>
                    <p>CONTACT</p>
                </a>
            </div>
        </div>
    </div>