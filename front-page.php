<?php

get_header();
the_post();

?>

<div id="landingPage">

    <div id="welcomeDiv" class="welcome-div container text-center">
        <div class="row justify-content-center">
            <h1 class="animate__animated animate__fadeIn animate__slower">Hello there.</h1>
        </div>
        <div class="row justify-content-center">`
            <h1 class="animate__animated animate__fadeIn animate__slower">I'm Aaron. Web Developer.</h1>
        </div>
        <div class="row justify-content-center mt-5">
            <button id="welcomeButton" class="round-button animate__animated animate__fadeIn animate__slower animate__delay-2s"><span><i class="fa fa-angle-double-down" aria-hidden="true"></i></span></button>
        </div>
    </div>

    <div id="welcomeDiv2" class="d-none welcome-div-after">
        <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/earth.png" class="d-none d-sm-none d-md-block earth-img animate__animated animate__fadeIn animate__slower">
        <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/ship.png" class="d-none d-sm-none d-md-block ship-img animate__animated animate__slideInUp">
        <div class="welcome-div container text-center">
        <div class="row justify-content-center">
            <h1 class="animate__animated animate__fadeIn animate__slower">I like to make Websites</h1>
        </div>
            <div class="row justify-content-center">
                <h1 class="animate__animated animate__fadeIn animate__slower">that are out of this World.</h1>
            </div>
            <div class="row justify-content-center mt-5">
                <button id="launchSite" class="round-button animate__animated animate__fadeIn animate__slower animate__delay-2s"><span><i class="fa fa-angle-double-down" aria-hidden="true"></i></span></button>
            </div>
        </div>
    </div>

    <canvas class="canvas-holder" id="bgCanvas"></canvas>
</div>
<?php

get_footer();
wp_reset_postdata();

