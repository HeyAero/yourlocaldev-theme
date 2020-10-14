<?php

get_header();
the_post();

?>

<div id="mainContent" class="">
    <div id="main-content-div">
        <div class="row align-items-center">
            <div class="col-md-5 d-flex justify-content-center">
                <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/airballoon.png" id="air-img" class="animate__animated animate__pulse animate__slower animate__infinite infinite">
            </div>
            <div class="col-md-7">
                <h1>Computer Science Graduate.</h1>
                <h1>Self Taught Web Developer.</h1>
                <h1>Graphics Designer.</h1>
                <h1>Web Nerd.</h1>
                <div class="mt-5">
                    <a href="https://www.fiverr.com/heyaero" class="button-main fiverr"><i class="fa fa-briefcase" aria-hidden="true"></i>HIRE ME ON FIVERR</a>
                </div>
                <div class="mt-5">
                    <a href="https://github.com/HeyAero/" class="button-main github"><i class="fa fa-github" aria-hidden="true"></i>GITHUB</a>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-first text-center my-5">
            <div class="container">
                <h1>About Me</h1>
            </div>
        </div>
        <div id="houseDiv" class="row align-items-center">
            <div class="col-md-7 px-5 pb-5">
                <h2>I'm Aaron, a web freelancer currently on the job hunt. I offer freelance on Fiverr as I build up my skills.</h2>
                <p>I am a University of York Graduate specialising in Computer Science. I currently reside in the North-West of the UK. Currently I am learning more about the WordPress CMS, E-Commerce plugins such as WooCommerce and looking into back-end frankworks.</p>
                <p>I plan to learn more about front-end development frameworks such as Vue.js and Angular. I also want to learn about back-end development frameworks such as Laravel.</p>
                <div class="my-4">
                    <a href="/about" class="button-main">LEARN MORE ABOUT ME</a>
                </div>
            </div>
            <div class="col-md-5">
                <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/house.png" id="house-img" class="">
            </div>
        </div>
        <div class="jumbotron jumbotron-second text-center">
            <div class="container">
                <h1>Porfolio</h1>
            </div>
        </div>
        <div id="undergroundDiv" class="row align-items-center">
            <div class="col-md-5 py-5 text-center">
                <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/items-grouped.png" id="house-img" class="">
            </div>
            <div class="col-md-7 px-5 pb-5">
                <h2>Check out my portfolio page where you can see the websites I have made in my own time.</h2>
                <p>I have built up a portfolio of different websites using the WordPress CMS. Some include the use of third party E-Commerce plugins such as WooCommerce. </p>
                <p>Some of the websites include the source code, visit my GitHub page to see more.</p>
                <div class="my-5">
                    <a href="/portfolio" class="button-main mr-3">VIEW PORTFOLIO</a>
                    <a href="https://github.com/HeyAero/" class="button-main github"><i class="fa fa-github" aria-hidden="true"></i>GITHUB</a>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-third text-center">
            <div class="container">
                <h1>My Skills</h1>
            </div>
        </div>
        <div id="mineDiv" class="row align-items-center">
            <div class="col-md-7 px-5 pb-5">
                <h2>Visit my skills page to learn about what I am capable of doing and using.</h2>
                <p>My intrested in web development began at University. I have since built up skills in different languages, front-end and back-end development, graphics design and lots more.</p>
                <p>Check out my skills page too see the full list.</p>
                <div class="my-5">
                    <a href="/skills" class="button-main mr-3">VIEW SKILLS</a>
                </div>
            </div>
            <div class="col-md-5 py-5 text-center">
                <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/mine-cart.png" id="house-img" class="">
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
wp_reset_postdata();