<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="t-footer">
    <div class="container"> 
        <div class="section section-warning">
            <div class="col-sm-1">
                <span class="icon-warning">&nbsp;</span>
            </div>
            <div class="col-sm-5">
                <p class="t-sm">Landing on the head or neck can cause serious injury, paralysis, or death, even when landing in the middle of the bed.</p>
            </div>
            <div class="col-sm-5 pull-right">
                <p class="t-sm">Use trampoline only with mature, knowledgable supervision. You should NEVER exceed one jumper ata time on your backyard trampoline</p>
            </div>
        </div>
        <aside class="widget-footer">
            <div class="row">
                <div class="col-sm-6">

                <?php
                $copy_edit =  of_get_option('copyright_editor', 'no entry'); 
                str_replace(' ', '', $copy_edit);
                ?>

                <?php if($copy_edit!=""){?>
                    <p><?php echo $copy_edit; ?></p>
                <?php } ?>
                    <ul class="social">

                        <?php
                        $fb_link =  of_get_option('link_facebook', 'no entry'); 
                        str_replace(' ', '', $fb_link);
                        $tweet_link =  of_get_option('link_twitter', 'no entry'); 
                        str_replace(' ', '', $tweet_link);
                        $gp_link =  of_get_option('link_gplus', 'no entry'); 
                        str_replace(' ', '', $gp_link);
                        $pint_link =  of_get_option('link_pinterest', 'no entry'); 
                        str_replace(' ', '', $pint_link);
                        ?>

                        <?php if($fb_link!=""){?>
                        <li><a href="<?php echo $fb_link; ?>"><span class="fa fa-facebook"></span></a></li>
                        <?php } ?>
                        <?php if($tweet_link!=""){?>
                        <li><a href="<?php echo $tweet_link; ?>"><span class="fa fa-twitter"></span></a></li>
                        <?php } ?>
                        <?php if($gp_link!=""){?>
                        <li><a href="<?php echo $gp_link; ?>"><span class="fa fa-google-plus"></span></a></li>
                        <?php } ?>
                        <?php if($pint_link!=""){?>
                        <li><a href="<?php echo $pint_link; ?>"><span class="fa fa-pinterest"></span></a></li>
                        <?php } ?>
                    </ul>    
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-6">
                    <div class="widget-contact">

                        <?php
                        $email_ads =  of_get_option('email_add', 'no entry'); 
                        str_replace(' ', '', $email_ads);?>

                        <p class="t-sm">We’d love to hear from you:</p>
                        <?php if($email_ads!=""){?>
                        <p class="t-sm"><a href="#"><?php echo $email_ads; ?></a></p>
                        <?php } ?>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="widget-contact">

                        <?php
                        $local_df =  of_get_option('local_dfw', 'no entry'); 
                        str_replace(' ', '', $local_df);
                        $toll_fr =  of_get_option('toll_free', 'no entry'); 
                        str_replace(' ', '', $toll_fr);
                        ?>

                        <p class="t-sm">Call us to find our more:</p>
                        <?php if($local_df!=""){?>
                        <p class="t-sm">local: <a href="#"> <?php echo $local_df; ?></a></p>
                        <?php } ?>
                        <?php if($toll_fr!=""){?>
                        <p class="t-sm">toll free: <a href="#"> <?php echo $toll_fr; ?></a></p>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            </div>
        </aside>  
        <div class="footnotes">
            <div class="row">
                <div class="col-sm-6">

                    <?php
                    $copyright_p =  of_get_option('copyright_text', 'no entry'); 
                    str_replace(' ', '', $copyright_p);?>

                    <?php if($copyright_p!=""){?>
                        <p class="copyright t-mini"><?php echo $copyright_p; ?></p>
                    <?php } ?>
                </div>
                <div class="col-sm-6">
                <ul class="nav navbar-nav nav-footer pull-right">
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Sitemap</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>  
</div>


<script src="<?php echo THEME_DIR_URI ?>scripts/libs/bootstrap.min.js"></script>
<script src="<?php echo THEME_DIR_URI ?>scripts/libs/jarallax.js"></script>
<script src="<?php echo THEME_DIR_URI ?>scripts/libs/animations.js"></script>
<script src="<?php echo THEME_DIR_URI ?>scripts/libs/owl.carousel.min.js"></script>
<script src="<?php echo THEME_DIR_URI ?>scripts/libs/waypoints.min.js"></script>
<script src="<?php echo THEME_DIR_URI ?>scripts/libs/jquery.counterup.min.js"></script>
<script src="<?php echo THEME_DIR_URI ?>scripts/plugins.js"></script>
<script src="<?php echo THEME_DIR_URI ?>scripts/main-ck.js"></script>
    <script type="text/javascript">
        (function($){
            $(function(){

                $('.slider-testi .owl-item > div').each(function(){
                    var index = $(this).closest('.owl-item').index();
                    var img = $(this).data('avatar');
                    var name = $(this).data('name');
                    var pos = $(this).data('position');

                    $('.owl-page:eq('+index+') > span').html('<div class="avatar-details"><div class="col-sm-5"><img src="'+img+'" class="img-circle img-grayscale"></div><div class="col-sm-6"><div class="avatar-profile row"><p>'+name+'</p><p><span>'+pos+'</span></p></div></div>');

                });
            });
        })(jQuery);
    </script>
<?php wp_footer(); ?>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

</body>
</html>

	
