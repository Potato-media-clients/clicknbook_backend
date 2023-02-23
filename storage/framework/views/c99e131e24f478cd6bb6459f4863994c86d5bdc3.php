<?php echo $__env->make('frontend.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php

enqueue_style('home-slider');

enqueue_script('home-slider');



enqueue_style('mapbox-gl-css');

enqueue_style('mapbox-gl-geocoder-css');

enqueue_script('mapbox-gl-js');

enqueue_script('mapbox-gl-geocoder-js');



enqueue_style('daterangepicker-css');

enqueue_script('daterangepicker-js');

enqueue_script('daterangepicker-lang-js');



enqueue_style('iconrange-slider');

enqueue_script('iconrange-slider');



enqueue_script('owl-carousel');

enqueue_style('owl-carousel');

enqueue_style('owl-carousel-theme');



?>

<div class="home-page pb-5">

    <div class="container">


<h2 class="h3 mt-4 mb-3"><?php echo e(__('Cancalations Policy')); ?></h2>

<div class="hh-list-of-blog">

    <div class="row">


            <div class="col-12 col-md-4">

                <div class="hh-blog-item style-2">

                     <img src="<?php echo e(asset('images/pngwing.com.png')); ?>" height="200px" >
  
                        <div class="font-weight-bold category"><?php echo e(__('Policy Type')); ?>


                        <span class="ml-2 small-info bg-danger">  Strict </span>

                        </div>


                        <div  class="description">
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                The ClickNbook Strict cancellation policy allows guests to receive a full refund if they cancel within 48 hours of booking and at least 14 days before a listing's check-in time.
                                </li>
                                <li class="list-group-item">
                                In the event of a cancellation within 48 hours, the guest is only entitled to 50% refund, regardless of how far out the check-in date is.
                                </li>
                                <li class="list-group-item">
                                A 50% refund will also be given if the cancellation takes place at least seven days prior to the booking date. Furthermore, the cleaning fee will be refunded to them, but the service fee is not. Refunds are not available if the guest cancels less than 7 days prior to the arrival date
                                </li>
                                <li class="list-group-item">
                                Due to the potential financial loss, guests cancel fewer bookings, and hosts have more time to find new bookings for canceled dates, thereby lowering revenue loss from cancellations.
                                </li>
                                <li class="list-group-item">
                                A property with such a policy may be less likely to be booked, and its visibility in ClickNbook search results could be lowered which could lower the overall booking rate.
                                </li>
                                

                        </ul>
                        </div>

                    <div class="w-100 mt-2"></div>

                

                </div>

            </div>


            <div class="col-12 col-md-4">

<div class="hh-blog-item style-2">




                    <img src="<?php echo e(asset('images/moderate.png')); ?>" height="200px" >



    
        <div class="font-weight-bold category"><?php echo e(__('Policy Type')); ?>


        <span class="ml-2 small-info bg-warning">  Moderate</span>

        </div>


        <div  class="description">
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                With a moderate policy, ClickNbook hosts are less susceptible to cancellations. cancellation made at least 5 days before check- in will result in a full refund of the accommodation fees.
                                </li>
                                <li class="list-group-item">
                                A guest who cancels their booking within 5 days of the booking start date will forfeit their first night's stay as well as the ClickNbook service fee. Additionally, only half of the booking fees will be refunded. For remaining nights in the room, the guest will get a 50% refund if they decide to cancel after checking in. They will, however, be responsible for paying for any nights spent.
                                </li>
                                <li class="list-group-item">
                                Guests are prohibited from canceling at the last minute to avoid financial penalties. Hosts are better protected against cancellation losses, and the nature of the cancellation policy may attract more serious guests.
                                </li>
                                <li class="list-group-item">
                                Although Hosts are still exposed to cancellations within a week of a reservation, they will still receive a lower cancellation rebate than their original booking fee.
                                </li>
                                <li class="list-group-item">
                                If the cancellation occurs, it may be difficult to find another booking to fill the dates.
                                </li>
                              
                                

                        </ul>
                        </div>

    <div class="w-100 mt-2"></div>



</div>

</div>


<div class="col-12 col-md-4">

                <div class="hh-blog-item style-2">



                <img src="<?php echo e(asset('images/flexible.png')); ?>"  height="200px" >



                    
                        <div class="font-weight-bold category"><?php echo e(__('Policy Type')); ?>


                        <span class="ml-2 small-info bg-success"> Flexible </span>

                        </div>


                        <div  class="description">
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                The ClickNbook Flexible cancellation policy is the most lenient option for guests. In this policy, guests are eligible for a full refund when canceling a reservation at least 24 hours before check-in (local time of the property).
                                </li>
                                <li class="list-group-item">
                                If the guest cancels a reservation less than 24 hours before check-in, they will still need to pay for the first night‘s stay, plus the ClickNbook service fee.
                                </li>
                                <li class="list-group-item">
                                If the guest decides to cancel his/her stay after arriving, he/she is eligible for a full refund for any remaining nights of the reservation.
                                </li>
                                <li class="list-group-item">
                                ClickNbook's search engines rank this option higher. You have a greater chance of bookings and keeping your calendar full. Because there is no commitment required from guests, and have more flexibility.
                                </li>
                                <li class="list-group-item">
                                The downside is that hosts are not protected against cancellations and stand to lose revenue since they bear all the risk.
                                </li>
                              


                        </ul>
                        </div>

                    <div class="w-100 mt-2"></div>

                

                </div>

            </div>






    </div>

</div>





      
    </div>
</div>

<?php echo $__env->make('frontend.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/homepage/refund_policy.blade.php ENDPATH**/ ?>