<!-- Get Header Template -->
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
                the_content();
            }
        }
    ?>

    </article>

<!-- Get Footer Template -->
<?php
    get_footer();
?>
