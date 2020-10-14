<?php

get_header();
the_post();

?>

<div id="contactMe">
    <div class="container">
        <div class="post-card">
            <div class="d-flex">
                <div class="mt-auto mr-auto">
                    <h1 style="color:black;">Contact Me</h1>
                </div>
                <div class="d-none d-sm-none d-md-inline">
                    <img src="http://yourlocaldev.com/wp-content/uploads/2020/10/stamp.png" style="width: 10em;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm">
                    If you would like to get in touch about freelance work, a CV request or anything else email
                    me or contact me via the social links I have provided. I will promise to get back to you
                    within 24 hours.
                </div>
                <div class="col-sm">
                    Email: aaron@yourlocaldev.com
                    <hr>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/aaron-yates-27007316b/">LinkedIn</a></li>
                        <li><a href="https://www.fiverr.com/heyaero">Fiverr</a></li>
                        <li><a href="https://github.com/HeyAero">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
wp_reset_postdata();

