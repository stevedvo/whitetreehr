<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?>
<!-- *** Slider Starts *** -->
<div id="page">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <?php if (startpoint_get_option('startpoint_slidevideo1') != '') { ?>
                    <div class="videoWrapper">
                        <?php echo startpoint_get_option('startpoint_slidevideo1'); ?>
                    </div>
                <?php } else { ?>
                    <?php if (startpoint_get_option('startpoint_slideimage1') != '') { ?>
                        <img src="<?php echo startpoint_get_option('startpoint_slideimage1'); ?>" alt="" title="" />
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg" alt="" title="" />
                        <?php
                    }
                }
                ?>

                <div class="grey_box" style="background-color: #fff; border: 0px solid red; height: 250px; width: 100%; max-width: 4000px; margin: 0 auto; position: absolute; top: 70%;z-index: 2;">
                    <div class="container">
                        <div class="text-container">
                    <?php if (startpoint_get_option('startpoint_sliderheading1') != '') { ?>
                                <h3><?php echo startpoint_get_option('startpoint_sliderheading1'); ?></h3>
                            <?php } else { ?>
                                <h3><?php _e('ELEGANT & STYLISH', 'start-point'); ?></h3>
                            <?php } ?>
                            <div class="clearfix"></div>
                            <?php if (startpoint_get_option('startpoint_sliderdes1') != '') { ?>
                                <h1><?php echo startpoint_get_option('startpoint_sliderdes1'); ?></h1>
                            <?php } else { ?>
                                <h1><?php _e('Showcase an Image In FullWidth.', 'start-point'); ?></h1>
                            <?php } ?>
                            <?php if (startpoint_get_option('startpoint_Slider_butotntext1') != '') { ?>
                                <p><a href="<?php echo startpoint_get_option('startpoint_Slider_buttonlink1'); ?>"><?php echo startpoint_get_option('startpoint_Slider_butotntext1'); ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- ***Slide 1 Text end *** -->
                </div>

            </li>
        </ul>
    </div>
    <!--*** Slider Ends ***-->
    <div class="clearfix"></div>

    <!--*** Three Column Feature Starts ***-->
    <div class="three-column-wrapper" id="section2">
        <div class="container">
            <div class="row">
                <div class="three-column-container">
                    <div class="col-md-4 box1 animated left-to-right">
                        <!-- *** Three column Box 1 *** -->
                        <div class="three-column-box">

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font1') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font1'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-bookmark fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title1') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link1') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link1'); ?>">
                                            <?php
                                        } else {

                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title1'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link1') != '') { ?>
                                        </a>
                                        <?php
                                    } else {

                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Showcase Your Business ', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc1') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc1'); ?></p>
                            <?php } else { ?>
                                <p><?php _e('You can showcase your business services to users form 3 Column Feature Area. Go to Theme Option Panel for making the changes.', 'start-point'); ?></p>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-md-4 box2 animated bottom-to-top">
                        <!-- *** Three column Box 2 *** -->
                        <div class="three-column-box">
                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font2') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font2'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-bookmark fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title2') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link2') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link2'); ?>">
                                            <?php
                                        } else {

                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title2'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link2') != '') { ?>
                                        </a>
                                        <?php
                                    } else {

                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Use Font Awesome Icons', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc2') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc2'); ?></p>
                            <?php } else { ?>
                                <p><a href="<?php echo esc_url('http://fortawesome.github.io/Font-Awesome/icons/'); ?>" target="_blank"><?php _e('Go to Font Awesome', 'start-point'); ?></a><?php _e(' and pick the icon of your choice. Copy the class of icon and paste it in Theme Option Panel.', 'start-point'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 box3 animated right-to-left">
                        <!-- *** Three column Box 3 *** -->
                        <div class="three-column-box">
                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font3') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font3'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-bookmark fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title3') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link3') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link3'); ?>">
                                            <?php
                                        } else {

                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title3'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link3') != '') { ?>
                                        </a>
                                        <?php
                                    } else {

                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Elegant One Page Theme', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc3') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc3'); ?></p>
                            <?php } else { ?>
                                <p><?php _e('A perfect theme for your business. Aesthetic layout, easy to create website, handy to customize style. Reinvent your website.', 'start-point'); ?> </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Three Column Feature Ends *** -->
    <div class="clearfix"></div><!--*** Three Column Feature Starts ***-->
    <div class="three-column-wrapper" id="section2">
        <div class="container">
            <div class="row">
                <div class="three-column-container">
                    <div class="col-md-4 box1 animated left-to-right">
                        <!-- *** Three column Box 1 *** -->
                        <div class="three-column-box">

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font4') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font4'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-bookmark fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title4') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link4') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link4'); ?>">
                                            <?php
                                        } else {

                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title4'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link4') != '') { ?>
                                        </a>
                                        <?php
                                    } else {

                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Showcase Your Business ', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc4') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc4'); ?></p>
                            <?php } else { ?>
                                <p><?php _e('You can showcase your business services to users form 3 Column Feature Area. Go to Theme Option Panel for making the changes.', 'start-point'); ?></p>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-md-4 box2 animated bottom-to-top">
                        <!-- *** Three column Box 2 *** -->
                        <div class="three-column-box">
                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font5') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font5'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-bookmark fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title5') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link5') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link5'); ?>">
                                            <?php
                                        } else {

                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title5'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link5') != '') { ?>
                                        </a>
                                        <?php
                                    } else {

                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Use Font Awesome Icons', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc5') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc5'); ?></p>
                            <?php } else { ?>
                                <p><a href="<?php echo esc_url('http://fortawesome.github.io/Font-Awesome/icons/'); ?>" target="_blank"><?php _e('Go to Font Awesome', 'start-point'); ?></a><?php _e(' and pick the icon of your choice. Copy the class of icon and paste it in Theme Option Panel.', 'start-point'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 box3 animated right-to-left">
                        <!-- *** Three column Box 3 *** -->
                        <div class="three-column-box">
                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font6') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font6'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-bookmark fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title6') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link6') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link6'); ?>">
                                            <?php
                                        } else {

                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title6'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link6') != '') { ?>
                                        </a>
                                        <?php
                                    } else {

                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Elegant One Page Theme', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc6') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc6'); ?></p>
                            <?php } else { ?>
                                <p><?php _e('A perfect theme for your business. Aesthetic layout, easy to create website, handy to customize style. Reinvent your website.', 'start-point'); ?> </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Three Column Feature Ends *** -->
    <div class="clearfix"></div>



    <!-- *** Gallery starts *** -->
    <!-- *** Gallery Available in Pro Version. Download at inkthemes.com -->
    <!-- *** Gallery Ends *** -->




</div>
<div class="container">
    <p id="back-top" style="display: block;">
        <a href="#top"><span><i class="fa fa-arrow-up"></i></span></a>
    </p>
</div>
<!-- *** Contact us Section Ends *** -->
<?php get_footer(); ?>