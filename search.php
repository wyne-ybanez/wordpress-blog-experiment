<?php
    get_header();
?>

    <article class="content px-3 py-5 p-md-5">

    <?php
        /*
         Wordpress will query the database.
         Post will execute every single time there is a post.
        */
        if( have_posts() ){
            while(have_posts()){
                the_post();

                // file path, type
                get_template_part('template-parts/content', '404');
            }
        }
    ?>

    </article>

<?php
    get_footer();
?>