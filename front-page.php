<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<div class="container-flex">
    <div class="row top-banner">
        <img width="2048" height="945"
             src="<?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-2048.jpg'; ?>"
             class="img-fluid" alt=""
             srcset="<?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-2048.jpg'; ?> 2048w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-300.jpg'; ?> 300w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-768.jpg'; ?> 768w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-1024.jpg'; ?> 1024w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-1000.jpg'; ?> 1000w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-500.jpg'; ?> 500w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-600.jpg'; ?> 600w"
             sizes="(max-width: 2048px) 100vw, 2048px">
      <!--  <div class="col-md-6 offset-md-1 banner-overlay bg-scouts-purple pt-2 pb-2 pl-4 pr-4 pt-md-5 pb-md-3 pl-md-5 pr-md-5 rounded"
             id="top-banner-overlay">
            <h2>Skills for Life</h2>
            <p>As Scouts, we believe in preparing young people with Skills for Life. We encourage young people to do
                more, learn more and be more. Each week, we help over 460,000 young people across the UK enjoy fun and
                adventure while developing the skills they need to succeed, now and in the future. </p>
            <div class="btn_row">
                <a href="/?page_id=<?= get_option( "sfl_fom_target" ) ?>" id="sfl_fom"
                   class="btn btn-big btn-big-border btn-scouts-purple">Find out more</a>
                <a href="/?page_id=<?= get_option( "sfl_jt_target" ) ?>" id="sfl_jt"
                   class="btn btn-big btn-scouts-white-teal">Join today</a>
            </div> -->
        </div>
    </div>
</div>
<div class="container welcome-section pt-4 pb-3">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1><span class="scouts-blue"><?php echo get_bloginfo( 'name', 'raw' ) ?></span></h1>
            <?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
        </div>

</div>
<?php get_footer(); ?>
</body>
</html>
