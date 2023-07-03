<?php get_header(); ?>

<section class="page">
    <div class="container">
        <div class="left-div">
            <p><i class="fa-regular fa-briefcase"></i> FullStack Developer</p>
            <p><i class="fa-sharp fa-solid fa-house"></i> London, UK</p>
            <p><i class="fa-solid fa-envelope"></i> ex@mail.com</p>
            <p><i class="fa-solid fa-phone"></i> 1224435534   </p>
            <hr>
            <div class="skills">
                <h4><i class="fa-solid fa-asterisk"></i> Skills</h4>
                <ul>
                    <?php
                    // Query and display skills
                    $skills_query = new WP_Query(array(
                        'post_type' => 'skills',
                        'posts_per_page' => -1,
                    ));

                    if ($skills_query->have_posts()) :
                        while ($skills_query->have_posts()) :
                            $skills_query->the_post();
                    ?>
                            <li><?php the_title(); ?></li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
            <div class="lang">
                <h4><i class="fa-solid fa-globe"></i> Languages</h4>
                <ul>
                    <?php
                    // Query and display languages
                    $languages_query = new WP_Query(array(
                        'post_type' => 'languages',
                        'posts_per_page' => -1,
                    ));

                    if ($languages_query->have_posts()) :
                        while ($languages_query->have_posts()) :
                            $languages_query->the_post();
                    ?>
                            <li><?php the_title(); ?></li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <div class="right-div">
            <div class="experience">
                <h1><i class="fa-solid fa-suitcase"></i> Work Experience</h1>
                <?php
                // Query and display experiences
                $experiences_query = new WP_Query(array(
                    'post_type' => 'experiences',
                    'posts_per_page' => -1,
                ));

                if ($experiences_query->have_posts()) :
                    while ($experiences_query->have_posts()) :
                        $experiences_query->the_post();
                ?>
                        <div class="experience-info">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_content(); ?></p>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="education">
                <h1><i class="fa-solid fa-certificate"></i> Education</h1>
                <?php
                // Query and display education
                $education_query = new WP_Query(array(
                    'post_type' => 'education',
                    'posts_per_page' => -1,
                ));

                if ($education_query->have_posts()) :
                    while ($education_query->have_posts()) :
                        $education_query->the_post();
                ?>
                        <div class="experience-info">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_content(); ?></p>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="download">
         <button class="button-12"><a href="https://www.mediafire.com/file/nee6mdjk59olr1v/new_resume_001.pdf/file" download>Download Resume (PDF)</a></button>
        
    </div>
    

</section>

<?php get_footer(); ?>
