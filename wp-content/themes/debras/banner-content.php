<section class="desktopView">

<?php if( get_option('db_banner_image') != "" && get_option('db_banner_video') == "" ): ?>

    <img src="<?php echo get_option('db_banner_image'); ?>" class="img-responsive" />

<?php endif; ?>

<?php if( get_option('db_banner_image') == "" && get_option('db_banner_video') == "" ): ?>

    <img src="<?php echo get_template_directory_uri(); ?>/img/hero-bg.jpg" class="img-responsive" />

<?php endif; ?>

<?php
if( get_option('db_banner_video') != "" ): ?>
    
    <div class="videoBanner">
    
    
    <iframe width="560" height="315" src="<?php echo stripslashes(get_option('db_banner_video')); ?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
    
    
    
    </div>

<?php endif; ?>

</section>

<section class="mobileView">

    <?php if( get_option('db_banner_image') != "" ): ?>
    
        <img src="<?php echo get_option('db_banner_image'); ?>" class="img-responsive" />
    
    <?php endif; ?>
    
    <?php if( get_option('db_banner_image') == "" ): ?>
    
        <img src="<?php echo get_template_directory_uri(); ?>/img/hero-bg.jpg" class="img-responsive" />
    
    <?php endif; ?>

</section>  