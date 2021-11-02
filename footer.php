<!-- Footer------------------------------->
<?php if ( have_rows( 'footer' ) ) : ?>
	<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
        <section class="footer">
            <img src="<?php $fig_1 = get_sub_field( 'fig_1' ); echo $fig_1['url'];?>" alt="footer-pic" class="img-fluid first">
            <img src="<?php $fig_2 = get_sub_field( 'fig_2' ); echo $fig_2['url'];?>" alt="footer-pic" class="img-fluid second">
            <img src="<?php $fig_3 = get_sub_field( 'fig_3' ); echo $fig_3['url'];?>" alt="footer-pic" class="img-fluid third">
            <div class="footer-inner">
                <h2><?php the_sub_field( 'h2' ); ?></h2>
                <form action="">
                    <input type="email" placeholder="your email here" required>
                    <button><?php the_sub_field( 'bn' ); ?></button>
                </form>
                <?php if ( have_rows( 'text' ) ) : ?>
			        <?php while ( have_rows( 'text' ) ) : the_row(); ?>
                        <div class="footer-text">
                            <h3><?php the_sub_field( 'h3' ); ?></h3>
                            <p><?php the_sub_field( 'p_1' ); ?></p>
                            <p><?php the_sub_field( 'p_2' ); ?></p>
                        </div>
                    <?php endwhile; ?>
		        <?php endif; ?>
                <?php if ( have_rows( 'text_2' ) ) : ?>
                    <?php while ( have_rows( 'text_2' ) ) : the_row(); ?>
                        <div class="footer-text">
                            <h3><?php the_sub_field( 'h_3' ); ?></h3>
                            <a href="#">
                                <?php $link_1 = get_sub_field( 'link_1' ); ?>
                                <?php if ( $link_1 ) { ?>
                                    <a href="<?php echo $link_1['url']; ?>" target="<?php echo $link_1['target']; ?>"><?php echo $link_1['title']; ?></a>
                                <?php } ?></a>
                            <a href="#">
                                <?php $link_2 = get_sub_field( 'link_2' ); ?>
                                <?php if ( $link_2 ) { ?>
                                    <a href="<?php echo $link_2['url']; ?>" target="<?php echo $link_2['target']; ?>"><?php echo $link_2['title']; ?></a>
                                <?php } ?></a>
                            <a href="#">
                                <?php $link_3 = get_sub_field( 'link_3' ); ?>
                                <?php if ( $link_3 ) { ?>
                                    <a href="<?php echo $link_3['url']; ?>" target="<?php echo $link_3['target']; ?>"><?php echo $link_3['title']; ?></a>
                                <?php } ?></a>
                        </div>
                    <?php endwhile; ?>
		        <?php endif; ?>
                <?php if ( have_rows( 'text_3' ) ) : ?>
			        <?php while ( have_rows( 'text_3' ) ) : the_row(); ?>
                        <div class="footer-text">
                            <h3><?php the_sub_field( 'hh3_' ); ?></h3>
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <p><?php the_sub_field( 'p_1' ); ?></p>
                            <p><?php the_sub_field( 'p_2' ); ?></p>
                            <p><?php the_sub_field( '_p_3' ); ?></p>
                        </div>
                    <?php endwhile; ?>
		        <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!-- End Footer ------>


<?php wp_footer(); ?>

    <!-- Javascript -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
</body>
</html>