<?php

get_header();
the_post();

?>

<div id="portfolioPage">
    <div class="jumbotron jumbotron-first text-center my-5">
        <div class="container">
            <h1>My Portfolio</h1>
        </div>
    </div>
    <div class="row align-items-center p-5 text-center">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem; height: 18rem; background-image: url('http://yourlocaldev.com/wp-content/uploads/2020/10/port1.png')">
                <div class="card-body">
                    <h2 class="card-title">Your Local Dev Website</h2>
                </div>
                <div class="card-footer">
                    <a href="https://github.com/HeyAero/yourlocaldev-theme" class="button-main github"><i class="fa fa-github" aria-hidden="true"></i>VIEW GITHUB</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem; height: 18rem; background-image: url('http://yourlocaldev.com/wp-content/uploads/2020/10/port2.png')">
                <div class="card-body">
                    <h2 class="card-title text-center">Airsoft Website</h2>
                </div>
                <div class="card-footer">
                    <div class="row mb-5">
                        <div class="col-md"><a href="#" class="button-main">VIEW SITE</a></div>
                    </div>
                    <a href="https://github.com/HeyAero/airsoftonetheme" class="button-main github"><i class="fa fa-github" aria-hidden="true"></i>VIEW GITHUB</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem; height: 18rem; background-image: url('http://yourlocaldev.com/wp-content/uploads/2020/10/port3.png')">
                <div class="card-body">
                    <h2 class="card-title text-center">LetsLead Gaming</h2>
                </div>
                <div class="card-footer">
                    <a href="https://github.com/HeyAero/letsleadgaming-theme" class="button-main github"><i class="fa fa-github" aria-hidden="true"></i>VIEW GITHUB</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
wp_reset_postdata();

