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
                    <p>Best American Trampolines is led by a team of dedicated experts with in-depth knowledge of the national marketplace. </p>
                    <ul class="social">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                        <li><a href=""><span class="fa fa-pinterest"></span></a></li>
                    </ul>    
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-6">
                        <div class="widget-contact">
                            <p class="t-sm">We’d love to hear from you:</p>
                            <p class="t-sm"><a href="#">info@bestamericantrampolines.com</a></p>
                        </div>
                        </div>
                        <div class="col-xs-5">
                        <div class="widget-contact">
                            <p class="t-sm">Call us to find our more:</p>
                            <p class="t-sm">local: <a href="#"> 972-475-0092</a></p>
                            <p class="t-sm">toll free: <a href="#"> 866-690-3272</a></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>  
        <div class="footnotes">
            <div class="row">
                <div class="col-sm-6">
                    <p class="copyright t-mini">© Best American Trampolines, Inc., 2002-2014</p>
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

<script src="scripts/libs/bootstrap.min.js"></script>
<script src="scripts/libs/jarallax.js"></script>
<script src="scripts/libs/animations.js"></script>
<script src="scripts/libs/owl.carousel.min.js"></script>
<script src="scripts/libs/waypoints.min.js"></script>
<script src="scripts/libs/jquery.counterup.min.js"></script>
<script src="scripts/libs/jquery.elevatezoom.js"></script>
<script src="scripts/plugins.js"></script>
<script src="scripts/main.js"></script>
    <script type="text/javascript">
        (function($){
            $(function(){

                $('.slider-testi .owl-item > div').each(function(){
                    var index = $(this).closest('.owl-item').index();
                    var img = $(this).data('avatar');
                    var name = $(this).data('name');
                    var pos = $(this).data('position');

                    $('.owl-page:eq('+index+') > span').html('<div class="avatar-details"><div class="col-md-5"><img src="'+img+'" class="img-circle img-grayscale"></div><div class="col-md-7"><div class="avatar-profile row"><p>'+name+'</p><p><span>'+pos+'</span></p></div></div>');

                });
            });
        })(jQuery);
    </script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</div>
</body>
</html>
