<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental-Health</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/navigation.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
<!-- Header -->
<?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) : the_row(); ?>
        <header class="header">
            <img src="<?php $img = get_sub_field( 'img' ); echo $img['url'];?>" alt="Path" class="img-fluid path1">
            
            <!-- Logo -->
            <?php if ( have_rows( 'a' ) ) : ?>
                <?php while ( have_rows( 'a' ) ) : the_row(); ?>
                    <a href="#" class="logo">
                        <img src="<?php $aimg = get_sub_field( 'aimg' ); echo $aimg['url'];?>" alt="" class="img-fluid">
                    </a>
                <?php endwhile; ?>
		    <?php endif; ?>

            <!-- Hamburger -->
            <div class="hamburger" id="hamburger">
                <div class="bar" id="top"></div>
                <div class="bar" id="middle"></div>
                <div class="bar" id="bottom"></div>
            </div>
            <!-- end Hamburger -->

            <!-- Menu -->
            <?php if ( have_rows( 'menu' ) ) : ?>
			    <?php while ( have_rows( 'menu' ) ) : the_row(); ?>
                    <ul class="menu">
                        <li class="menu-item"><a href="#">
                            <?php $link_1 = get_sub_field( 'link_1' ); ?>
                            <?php if ( $link_1 ) { ?>
                                <a href="<?php echo $link_1['url']; ?>" target="<?php echo $link_1['target']; ?>"><?php echo $link_1['title']; ?></a>
                            <?php } ?>
                        </a></li>
                        <li class="menu-item"><a href="#">
                            <?php $link_2 = get_sub_field( 'link_2' ); ?>
                            <?php if ( $link_2 ) { ?>
                                <a href="<?php echo $link_2['url']; ?>" target="<?php echo $link_2['target']; ?>"><?php echo $link_2['title']; ?></a>
                            <?php } ?>
                        </a></li>
                        <li class="menu-item"><a href="#">
                            <?php $link_3 = get_sub_field( 'link_3' ); ?>
                            <?php if ( $link_3 ) { ?>
                                <a href="<?php echo $link_3['url']; ?>" target="<?php echo $link_3['target']; ?>"><?php echo $link_3['title']; ?></a>
                            <?php } ?>
                        </a></li>
                        <li class="menu-item"><a href="#">
                            <?php $link_4 = get_sub_field( 'link_4' ); ?>
                            <?php if ( $link_4 ) { ?>
                                <a href="<?php echo $link_4['url']; ?>" target="<?php echo $link_4['target']; ?>"><?php echo $link_4['title']; ?></a>
                            <?php } ?>
                        </a></li>
                    </ul>
                <?php endwhile; ?>
		    <?php endif; ?>  
            <!-- end menu-->

            <img src="<?php $img2 = get_sub_field( 'img2' ); echo $img2['url'];?>" alt="Path" class="img-fluid path8">
        </header>
    <?php endwhile; ?>
<?php endif; ?>
<!-- End Header -->