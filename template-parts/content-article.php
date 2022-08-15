<div class="container">
    <header class="content-header">
        <div class="meta mb-3"><span class="date"><?php the_date(); ?></span>
        <?php
            /*
             First param is the beginning of the tags
             Second param is closing the tag
             Third param - closing tag
            */

            the_tags('
            <span class="tag"><i class="fa fa-tag"></i>',
            '</span><span class="tag"><i class="fa fa-tag"></i>',
            '</span>
            ');
        ?>
            <span class="comment">
                <a href="#comments"><i class='fa fa-comment'></i>
                    <?php comments_number(); ?>
                </a>
            </span>
        </div>
    </header>
    <?php
    the_content();
    ?>

    <?php
    comments_template();
    ?>
</div>