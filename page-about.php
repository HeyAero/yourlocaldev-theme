<?php

get_header();
the_post();

?>

<div id="aboutMe">
    <div class="row align-items-center">
        <div class="col-md-5 d-flex justify-content-center">
            <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/me.png" style="height: 400px;">
        </div>
        <div class="about-me-desc col-md-7 p-5">
            <h1>I'm Aaron, a self taught web developer currently offering Freelance work whilst on the job hunt.</h1>
            <p class="pt-3">My interest in web development stretches back 4 years ago, since then I have learnt about many aspects about web development.</p>
            <p>I have aspirations to become a full-stack developer and in my free time I use learning resources such as Laracast to learn about back-end development.</p>
            <p>My interests outside the world of web developing include gaming, cycling and skiing.</p>
        </div>
    </div>
    <div class="jumbotron jumbotron-first text-center my-5">
        <div class="container">
            <h1>A Brief Timeline</h1>
        </div>
    </div>
    <div class="row align-items-center p-5">
        <div class="col-sm-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="http://yourlocaldev.com/wp-content/uploads/2020/10/timeline1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">University - 2015-2019</h5>
                    <hr>
                    <p class="card-text">Over the course of 3 years I studied Computer Science @ the University of York.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="http://yourlocaldev.com/wp-content/uploads/2020/10/timeline2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Ski Instructor - 2019-2020</h5>
                    <hr>
                    <p class="card-text">I was a part time ski instructor @ Austria in the beautiful resort of Zell am See.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="http://yourlocaldev.com/wp-content/uploads/2020/10/timeline3.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Freelancer - 2020-Current</h5>
                    <hr>
                    <p class="card-text">During my freetime I have made a number of projects using the WordPress CMS. I have created custom themes from scratch and basic plugins to create custom post types. I am now learning about React.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-first text-center my-5">
        <div class="container">
            <h1>Experience</h1>
        </div>
    </div>
    <div class="row align-items-center p-5 text-center">
        <div class="col-md d-flex justify-content-center">
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="http://yourlocaldev.com/wp-content/uploads/2020/10/cfg-badge.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Code First Girls (Lead Instructor) - 2018-2019</h5>
                    <hr>
                    <p class="card-text">I was a volunteer lead instructor for Code First: Girls. I presented, hosted sessions to teach women interested in technology and coding. The language they learn on the course I lead is web development (HTML, CSS, Bootstrap Javascript, jQuery). Code First: Girls is a not for profit social enterprise. Since 2013 they have delivered £4.2 million worth of free education to young women across the UK. They have one purpose - to increase the number of women in tech. They do this to help address the gender imbalance in the tech industry, where women currently only represent about 17% of the workforce.</p>
                </div>
            </div>
        </div>
        <div class="col-md d-flex justify-content-center">
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="http://yourlocaldev.com/wp-content/uploads/2020/10/timeline3.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Freelancer - 2020-Current</h5>
                    <hr>
                    <p class="card-text">Since I returned from my trip away to Austria, I have been self-studying Front and (some) Back-End Development. With what I have learnt I have been able to make projects in my free time which you can view on my GitHub & Portfolio page. Now I currently learning how to use and develop using React. So I can create dynamic single page applications.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
wp_reset_postdata();
