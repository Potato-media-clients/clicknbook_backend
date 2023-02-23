<footer class="footer">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6">

               <!--<span class="copy-right-text">-->
                   
                 <h5>Copyright © {{date('Y')}}  by <a href="https://www.potato-co.com/" style="color:#2dbccc;" > POTATO TECH </a></h5>

               <!--</span>-->

                <?php

                $awebooking = get_awebooking_info();

                if(!empty($awebooking)){

                ?>


                <?php

                }

                ?>

            </div>

            <div class="col-md-6" style="margin-top:12px;">

                <div class="text-md-right footer-links d-none d-sm-block">

                    <a href="https://clicknbook.co/about-us">{{__('About Us')}}</a>

                    <!--<a href="javascript:void(0);">{{__('Help')}}</a>-->

                    <a href="https://clicknbook.co/contact-us">{{__('Contact Us')}}</a>
                    
                    <a href="https://clicknbook.co/blog">{{__('Blog')}}</a>

                    
                    <a href="https://clicknbook.co/refund-policy/">{{__('Refund Policy')}}</a>
                    
                    <a href="https://clicknbook.co/privacy-policy/">{{__('Privacy Policy')}}</a>
                    
                    <a href="https://clicknbook.co/about-us">{{__('Terms and Conditions')}}</a>
                    
                </div>

            </div>

        </div>

    </div>

</footer>

