<?php get_header(); ?>



<!-- banner ---------------------->
<?php if ( have_rows( 'banner' ) ) : ?>
	<?php while ( have_rows( 'banner' ) ) : the_row(); ?>
        <section class="banner">
            <div class="banner-text">
                <h1><?php the_sub_field( 'h1' ); ?></h1>
                <p><?php the_sub_field( 'p' ); ?></p>
                <div class="button">
                    <button><?php the_sub_field( 'button' ); ?></button>
                </div>
            </div>
            <?php if ( get_sub_field( 'img1') ) { ?>
                <img src="<?php the_sub_field( 'img1' ); ?>" alt="banner-img" class="img-fluid">
            <?php } ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!-- end banner ---------->
   
<!-- about ------------------------->
<?php if ( have_rows( 'about' ) ) : ?>
	<?php while ( have_rows( 'about' ) ) : the_row(); ?>
        <section class="about">
            <img src="<?php $img1 = get_sub_field( 'img1' ); echo $img1['url'];?>" alt="path2" class="img-fluid path2">

            <div class="row">
                <div class="col-md-6">
                    <?php if ( have_rows( 'gallery' ) ) : ?>
                        <?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
                            <div class="gallery">
                                <img src="<?php $one = get_sub_field( 'one' ); echo $one['url'];?>" alt="about-img" class="img-fluid elps">  
                                <img src="<?php $two = get_sub_field( 'two' ); echo $two['url'];?>" alt="about-img" class="img-fluid img ">
                            </div>
                        <?php endwhile; ?>
		            <?php endif; ?>    
                </div>
                <div class="col-md-6">
                    <?php if ( have_rows( 'text' ) ) : ?>
			            <?php while ( have_rows( 'text' ) ) : the_row(); ?>
                            <div class="about-text">
                                <h2><?php the_sub_field( 'h2' ); ?></h2>
                                <p><?php the_sub_field( 'p' ); ?></p>
                                <div class="button">
                                    <button><?php the_sub_field( 'button' ); ?></button>
                                </div>
                            </div>
                        <?php endwhile; ?>
		            <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end about---->

<!--education------------------------>
<?php if ( have_rows( 'education' ) ) : ?>
	<?php while ( have_rows( 'education' ) ) : the_row(); ?>
        <section class="education">
            <h2><?php the_sub_field( 'hh2' ); ?></h2>
            
            <!--tabheader-->
            <?php if ( have_rows( 'tabheader' ) ) : ?>
			    <?php while ( have_rows( 'tabheader' ) ) : the_row(); ?>
                    <div class="tab-header"> 
                        <div class="active">
                            <?php if ( have_rows( 'h3' ) ) : ?>
                                <?php while ( have_rows( 'h3' ) ) : the_row(); ?>
                                    <h3>
                                        <?php if ( get_sub_field( 'img_1') ) { ?>
                                            <img src="<?php the_sub_field( 'img_1' ); ?>" alt="trophy" class="img-fluid icon">
                                        <?php } ?>
                                        <?php the_sub_field( 'htext' ); ?>
                                        <?php if ( get_sub_field( 'img_2') ) { ?>
                                            <img src="<?php the_sub_field( 'img_2' ); ?>" alt="trophy" class="img-fluid icon">
                                        <?php } ?>
                                    </h3>
                                <?php endwhile; ?>
		                    <?php endif; ?>
                        </div>
                        <div>
                            <?php if ( have_rows( 'h3_2' ) ) : ?>
                                <?php while ( have_rows( 'h3_2' ) ) : the_row(); ?>
                                    <h3>
                                        <?php if ( get_sub_field( 'img_1') ) { ?>
                                            <img src="<?php the_sub_field( 'img_1' ); ?>" alt="trophy" class="img-fluid icon">
                                        <?php } ?>
                                        <?php the_sub_field( 'h_text' ); ?>
                                        <?php if ( get_sub_field( 'img_2') ) { ?>
                                            <img src="<?php the_sub_field( 'img_2' ); ?>" alt="trophy" class="img-fluid icon">
                                        <?php } ?>
                                    </h3>
                                <?php endwhile; ?>
                            <?php endif; ?>    
                        </div>
                        <div>
                            <?php if ( have_rows( 'h3_3' ) ) : ?>
                                <?php while ( have_rows( 'h3_3' ) ) : the_row(); ?>
                                    <h3>
                                        <?php if ( get_sub_field( 'img_22') ) { ?>
                                            <img src="<?php the_sub_field( 'img_22' ); ?>" alt="trophy" class="img-fluid icon">
                                        <?php } ?>
                                        <?php the_sub_field( 'h_text2' ); ?>
                                        <?php if ( get_sub_field( 'img_3') ) { ?>
                                            <img src="<?php the_sub_field( 'img_3' ); ?>" alt="trophy" class="img-fluid icon">
                                        <?php } ?>
                                    </h3>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--endtabheader-->

            <!--tabbody-->
            <?php if ( have_rows( 'tabbody' ) ) : ?>
			    <?php while ( have_rows( 'tabbody' ) ) : the_row(); ?>
                    <div class="tab-body">
                        <div class="active">
                            <p><?php the_sub_field( 'p1' ); ?></p>
                            <button><?php the_sub_field( 'b1' ); ?></button>
                        </div>
                        <div>
                            <p><?php the_sub_field( 'p2' ); ?></p>
                            <button><?php the_sub_field( 'b2' ); ?></button>
                        </div>
                        <div>
                            <p><?php the_sub_field( 'p3' ); ?></p>
                            <button><?php the_sub_field( 'b3' ); ?></button>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--end tabbody-->

            <img src="<?php $img = get_sub_field( 'img' ); echo $img['url'];?>" alt=""class="img-fluid ellipse" style="display:none">
            <img src="<?php $img2 = get_sub_field( 'img2' ); echo $img2['url'];?>" class="thots" alt="" style="display:none">
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end education------>

<!--Our  Warm Line ------------------------>
<?php if ( have_rows( 'warm' ) ) : ?>
	<?php while ( have_rows( 'warm' ) ) : the_row(); ?>
        <section class="warm" style="">
            <div class="row">
                <div class="col-md-6 one">
                    <?php if ( have_rows( 'text' ) ) : ?>
                        <?php while ( have_rows( 'text' ) ) : the_row(); ?>
                            <div class="warm-text">
                                <h2><?php the_sub_field( 'h2' ); ?></h2>
                                <p><?php the_sub_field( 'p' ); ?></p>
                                <div class="button">
                                    <button><?php the_sub_field( 'button' ); ?></button>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>      
                </div>
                <div class="col-md-6 two">
                    <?php if ( have_rows( 'images' ) ) : ?>
                        <?php while ( have_rows( 'images' ) ) : the_row(); ?>
                            <div class="warm-img">
                                <img src="<?php $one = get_sub_field( 'one' ); echo $one['url'];?>" alt="warm-img" class="img-fluid ellip">  
                                <img src="<?php $two = get_sub_field( 'two' ); echo $two['url'];?>" alt="warm-img" class="img-fluid img">
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end our warm line----->

<!--suppport------------------------------------->
<?php if ( have_rows( 'support' ) ) : ?>
	<?php while ( have_rows( 'support' ) ) : the_row(); ?>
        <section class="support">
            <img src="<?php $imgg = get_sub_field( 'imgg' ); echo $imgg['url'];?>" alt="ellipse" class="img-fluid ellipse">
            
            <div class="support-img">
                <img src="<?php $img_inner = get_sub_field( 'img_inner' ); echo $img_inner['url'];?>" alt="support-img" class="img-fluid earth">
            </div>

            <?php if ( have_rows( 'text' ) ) : ?>
			    <?php while ( have_rows( 'text' ) ) : the_row(); ?>
                    <div class="support-text">
                        <h2><?php the_sub_field( 'h2' ); ?></h2>
                        <h3><?php the_sub_field( 'h3' ); ?></h3>
                        <p><?php the_sub_field( 'p' ); ?></p>
                        <div class="button">
                            <button><?php the_sub_field( 'buttonn' ); ?></button>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>     
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end support------------>

<!--gallery ---------------------------------------->
<?php if ( have_rows( 'gallery' ) ) : ?>
	<?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
        <section class="gallery">
            <?php if ( have_rows( 'i1' ) ) : ?>
                <?php while ( have_rows( 'i1' ) ) : the_row(); ?>
                    <div class="gallery-items1">
                        <img src="<?php $img_1 = get_sub_field( 'img_1' ); echo $img_1['url'];?>" alt="gallery-pics" class="img-fluid kids">
                        <img src="<?php $img_2 = get_sub_field( 'img_2' ); echo $img_2['url'];?>" alt="gallery-pics" class="img-fluid lincon">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'i2' ) ) : ?>
			    <?php while ( have_rows( 'i2' ) ) : the_row(); ?>
                    <div class="gallery-items2">
                        <img src="<?php $img_3 = get_sub_field( 'img_3' ); echo $img_3['url'];?>" alt="gallery-pics" class="img-fluid">
                        <?php if ( have_rows( 'textt' ) ) : ?>
			                <?php while ( have_rows( 'textt' ) ) : the_row(); ?>
                            <div class="gallery-text">
                                <h2><?php the_sub_field( 'h2' ); ?></h2>
                                <p><?php the_sub_field( 'p' ); ?></p>
                                <div class="button">
                                    <button><?php the_sub_field( 'button' ); ?></button>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'i3' ) ) : ?>
			    <?php while ( have_rows( 'i3' ) ) : the_row(); ?>
                    <div class="gallery-items3">
                        <img src="<?php $img_4 = get_sub_field( 'img_4' ); echo $img_4['url'];?>" alt="gallery-pics" class="img-fluid">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end gallery-------------->

<!--team-------------------------------------------->
<?php if ( have_rows( 'team' ) ) : ?>
	<?php while ( have_rows( 'team' ) ) : the_row(); ?>   
        <section class="team">
            <?php if ( have_rows( 'textt' ) ) : ?>
                <?php while ( have_rows( 'textt' ) ) : the_row(); ?>
                    <div class="team-text">
                        <h2><?php the_sub_field( 'h2' ); ?></h2>
                        <p><?php the_sub_field( 'p' ); ?></p>
                        <div class="button">
                            <button class="one"><?php the_sub_field( 'buttn' ); ?></button>
                        </div>
                        <img src="<?php $imgg = get_sub_field( 'imgg' ); echo $imgg['url'];?>" alt="team-img" class="img-fluid smile">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?> 
            <?php if ( have_rows( 'inner' ) ) : ?>
			    <?php while ( have_rows( 'inner' ) ) : the_row(); ?>
                    <div class="team-inner">
                        <h2><?php the_sub_field( 'hh2' ); ?></h2>
                        <p><?php the_sub_field( 'pp2' ); ?></p>
                        <div class="button">
                            <button class="two"><?php the_sub_field( 'bn2' ); ?></button>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end team----------------->

<!--volunteer-------------------------------->
<?php if ( have_rows( 'volunteer' ) ) : ?>
	<?php while ( have_rows( 'volunteer' ) ) : the_row(); ?>
        <section class="volunteer">
            <?php if ( have_rows( 'txt' ) ) : ?>
                <?php while ( have_rows( 'txt' ) ) : the_row(); ?>
                    <div class="volunteer-text">
                        <h2><?php the_sub_field( 'h2' ); ?></h2>
                        <p><?php the_sub_field( 'p' ); ?></p>
                        <div class="button">
                            <button class="one"><?php the_sub_field( 'bn' ); ?></button>
                        </div>
                    </div>
                <?php endwhile; ?>
		    <?php endif; ?>

            <img src="<?php $img_ = get_sub_field( 'img_' ); echo $img_['url']; ?>" alt="volunteer-pic" class="img-fluid">
            
            <?php if ( have_rows( 'txt2' ) ) : ?>
			    <?php while ( have_rows( 'txt2' ) ) : the_row(); ?>
                    <div class="volunteer-text second">
                        <h2><?php the_sub_field( 'h_2' ); ?></h2>
                        <p><?php the_sub_field( 'p_2' ); ?></p>
                        <div class="button">
                            <button class="two"><?php the_sub_field( 'bn_2' ); ?></button>
                        </div>
                    </div>
                <?php endwhile; ?>
		    <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end volunteer------------>
      


<?php get_footer(); ?>