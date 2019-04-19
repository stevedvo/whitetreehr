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
<style>
#maindiv{
  border: 0px solid black;
  overflow: hidden;
  white-space: nowrap;
}

#div1 {
  display: inline-block;
  animation: marquee 30s linear infinite;
}

#div2 {
  display: inline-block;
  animation: marquee2 30s linear infinite;
  animation-delay: 15s;
}

@keyframes marquee {
  from {
    transform: translateX(50%);
  }
  to {
    transform: translateX(-150%);
  }
}

@keyframes marquee2 {
  from {
    transform: translateX(-50%);
  }
  to {
    transform: translateX(-250%);
  }
}
</style>
<script type="text/javascript">
    jQuery('#maindiv').width(jQuery('#div1').width());
</script>
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
                                <h1><?php echo startpoint_get_option('startpoint_sliderheading1'); ?></h1>
                            <?php } else { ?>
                                <h1><?php _e('ELEGANT & STYLISH', 'start-point'); ?></h1>
                            <?php } ?>
                            <div class="clearfix"></div>
                            <?php if (startpoint_get_option('startpoint_sliderdes1') != '') { ?>
                                <div id="maindiv">
                                  <div id="div1">
                                    &nbsp;<h3><?php echo startpoint_get_option('startpoint_sliderdes1'); ?></h3>
                                  </div>
                                  <div id="div2">
                                    &nbsp;<h3><?php echo startpoint_get_option('startpoint_sliderdes1'); ?></h3>
                                  </div>
                                </div>

                            <?php } else { ?>
                                <h3><?php _e('Showcase an Image In FullWidth.', 'start-point'); ?></h3>
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
                                <p><svg style="height: 50px; color: #a8a8aa"  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-users fa-w-20 fa-5x"><path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" class=""></path></svg></p>
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
                                <p><svg  style="height: 50px; color: #a8a8aa" aria-hidden="true" focusable="false" data-prefix="far" data-icon="cubes" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-cubes fa-w-16 fa-5x"><path fill="currentColor" d="M384 215.1V102.5c0-15-9.3-28.4-23.4-33.7l-92-34.5c-8.1-3.1-17.1-3.1-25.3 0l-92 34.5c-14.1 5.3-23.4 18.7-23.4 33.7v112.6L23.4 254.4C9.3 259.6 0 273.1 0 288.1v106.6c0 13.6 7.7 26.1 19.9 32.2l98.6 49.3c10.1 5.1 22.1 5.1 32.2 0L256 423.6l105.3 52.6c10.1 5.1 22.1 5.1 32.2 0l98.6-49.3c12.2-6.1 19.9-18.6 19.9-32.2V288.1c0-15-9.3-28.4-23.4-33.7L384 215.1zm-116 34.8V152l92-31.7v97.6l-92 32zM152 94.2l104-39 104 39v.2L256 131 152 94.3v-.1zm0 26.1l92 31.7v97.9l-92-32v-97.6zm-30 329.4l-96.8-48.4V308l96.8 39.3v102.4zM25.2 280.8v-.2l109.4-41 108.1 40.5v1.2l-108.1 43.9-109.4-44.4zm122 66.5l95.5-38.8V402l-95.5 47.8V347.3zm217.6 102.4L269.3 402v-93.4l95.5 38.8v102.3zm122-48.4L390 449.7V347.3l96.8-39.3v93.3zm0-120.5l-109.4 44.4-108.1-43.9v-1.2l108.1-40.5 109.4 41v.2z" class=""></path></svg></p>
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
                                <p><svg  style="height: 50px; color: #a8a8aa" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clipboard-list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-clipboard-list fa-w-12 fa-5x"><path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z" class=""></path></svg></p>
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
                                <p><svg  style="height: 50px; color: #a8a8aa" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chart-bar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-chart-bar fa-w-16 fa-5x"><path fill="currentColor" d="M424 352h16c4.4 0 8-3.6 8-8V104c0-4.4-3.6-8-8-8h-16c-4.4 0-8 3.6-8 8v240c0 4.4 3.6 8 8 8zm-96 0h16c4.4 0 8-3.6 8-8V200c0-4.4-3.6-8-8-8h-16c-4.4 0-8 3.6-8 8v144c0 4.4 3.6 8 8 8zm-192 0h16c4.4 0 8-3.6 8-8v-80c0-4.4-3.6-8-8-8h-16c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8zm96 0h16c4.4 0 8-3.6 8-8V136c0-4.4-3.6-8-8-8h-16c-4.4 0-8 3.6-8 8v208c0 4.4 3.6 8 8 8zm272 64H32V72c0-4.42-3.58-8-8-8H8c-4.42 0-8 3.58-8 8v360c0 8.84 7.16 16 16 16h488c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8z" class=""></path></svg></p>
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
                                <p><svg  style="height: 50px; color: #a8a8aa" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-edit fa-w-18 fa-5x"><path fill="currentColor" d="M417.8 315.5l20-20c3.8-3.8 10.2-1.1 10.2 4.2V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h292.3c5.3 0 8 6.5 4.2 10.2l-20 20c-1.1 1.1-2.7 1.8-4.2 1.8H48c-8.8 0-16 7.2-16 16v352c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16V319.7c0-1.6.6-3.1 1.8-4.2zm145.9-191.2L251.2 436.8l-99.9 11.1c-13.4 1.5-24.7-9.8-23.2-23.2l11.1-99.9L451.7 12.3c16.4-16.4 43-16.4 59.4 0l52.6 52.6c16.4 16.4 16.4 43 0 59.4zm-93.6 48.4L403.4 106 169.8 339.5l-8.3 75.1 75.1-8.3 233.5-233.6zm71-85.2l-52.6-52.6c-3.8-3.8-10.2-4-14.1 0L426 83.3l66.7 66.7 48.4-48.4c3.9-3.8 3.9-10.2 0-14.1z" class=""></path></svg></p>
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
                                <p><svg  style="height: 50px; color: #a8a8aa" aria-hidden="true" focusable="false" data-prefix="far" data-icon="ambulance" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-ambulance fa-w-20 fa-5x"><path fill="currentColor" d="M296 160h-56v-56c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v56h-56c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h56v56c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-56h56c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm328 208h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H56C25.1 0 0 25.1 0 56v304c0 30.9 25.1 56 56 56h8c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm208-96H242.7c-16.6-28.6-47.2-48-82.7-48s-66.1 19.4-82.7 48H56c-4.4 0-8-3.6-8-8V56c0-4.4 3.6-8 8-8h304c4.4 0 8 3.6 8 8v312zm48-224h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1z" class=""></path></svg></p>
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