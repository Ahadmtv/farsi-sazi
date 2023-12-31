<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        banner(array(
            'title'=>'',
            'subtitle'=>'',
            'photo'=>''
        ));
?>

        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo site_url('/استاد ها'); ?>"> رفتن به لیست استاد ها
                    </a>
                </p>
            </div>

            <div class="generic-content">
                <div class="row group">
                    <div class="one-third"><?php the_post_thumbnail(); ?></div>
                    <div class="two-third"><?php the_content(); ?></div>
                </div>
            </div>
            <?php
            $relatedPrograms = get_field('related_program');
            if ($relatedPrograms) {
            ?>
                <hr class="section-break">
                <h2>رشته های مرتبط با موضوع</h2>
                <?php
                foreach ($relatedPrograms as $program) {
                ?>
                    <li class="list-item"><a href='<?php echo get_permalink($program) ?>'><?php echo get_the_title($program) ?></a></li>
            <?php

                }
            }

            ?>
        </div>







<?php
    }
}
get_footer();


?>