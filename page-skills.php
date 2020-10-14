<?php

get_header();

?>

<div id="skillsPage">
    <div class="container text-center">
        <h1>My Skills</h1>
        <p class="mt-5">On this page you will able to have an overview of my skills and how advanced I am in each.</p>
        <!-- Programming -->
        <div class="skill-header text-left">
            <h2>Programming</h2>
            <hr class="mt-4 mb-5">
        </div>
        <div class="row mt-5 justify-content-center">
            <?php

                $args = array(
	                'numberposts'	=> -1,
                    'post_type' => 'skill',
                    'meta_key' => 'type',
                    'meta_value' => 'programming'
                );

                $the_query = new WP_Query( $args );
                while($the_query->have_posts()) {
                    $the_query->the_post();
                    $id = get_the_ID(); ?>
                    <div class="col-sm-2">
                        <div class="card-skills" style="width: 10rem;">
                            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <h5 class="card-title">Skill: <?php echo get_post_meta($id, 'Skill', true); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } wp_reset_postdata(); ?>
        </div>

        <!-- Design -->
        <div class="skill-header text-left">
            <h2>Design</h2>
            <hr class="mt-4 mb-5">
        </div>
        <div class="row mt-5 justify-content-center">
            <?php

                $args = array(
	                'numberposts'	=> -1,
                    'post_type' => 'skill',
                    'meta_key' => 'type',
                    'meta_value' => 'design'
                );

                $the_query = new WP_Query( $args );
                while($the_query->have_posts()) {
                    $the_query->the_post();
                    $id = get_the_ID(); ?>
                    <div class="col-md-2">
                        <div class="card-skills" style="width: 10rem;">
                            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <h5 class="card-title">Skill: <?php echo get_post_meta($id, 'Skill', true); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } wp_reset_postdata(); ?>
        </div>

        <!-- Tools & More -->
        <div class="skill-header text-left">
            <h2>Tools & More</h2>
            <hr class="mt-4 mb-5">
        </div>
        <div class="row mt-5 justify-content-center">
            <?php

                $args = array(
	                'numberposts'	=> -1,
                    'post_type' => 'skill',
                    'meta_key' => 'type',
                    'meta_value' => 'other'
                );

                $the_query = new WP_Query( $args );
                while($the_query->have_posts()) {
                    $the_query->the_post();
                    $id = get_the_ID(); ?>
                    <div class="col-sm-2">
                        <div class="card-skills" style="width: 10rem;">
                            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <h5 class="card-title">Skill: <?php echo get_post_meta($id, 'Skill', true); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php

get_footer();
