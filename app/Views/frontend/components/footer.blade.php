<?php

$logo_footer = get_option('footer_logo');

if (empty($logo_footer)) {

    $logo_footer = get_option('logo');

}

$list_social = get_option('list_social');

$copy_right  = get_option('copy_right');

$screen = current_screen();

$setup_mailc_api = get_option('mailchimp_api_key');

$setup_mailc_list_id = get_option('mailchimp_list');

enqueue_script('nice-select-js');

enqueue_style('nice-select-css');

?>
<?php

$langs = get_languages(true);

$currencies = list_currencies();

$current_lang = get_current_language();

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
    $HideOnMobile="hidden";
}else{
    $HideOnMobile="";
    
}
?>

</div>

<footer {{$HideOnMobile}} id="" class=" d-xs-none {{ $screen == 'home-search-result' ? 'hide-footer' : '' }}" style="padding-top:0px ;padding-bottom:0px; height:40px!important; border-top: 1px solid #DDDDDD;position: fixed;left: 0; bottom: 0;width: 100%; background-color:#FFFFFF; z-index:99999999999999; " DIR="LTR">


        <div class="copy-right d-flex">
     

                               <div class="row" style="width:100%; padding-left:0px !important">
                 
            <div class="col-2"><h5 style="text-align:right; font-size: 14px;line-height: 1.43;color: #484848;"><b>Copyright © 2023 by ® <span style="color:#01c1c9;">clickNbook</span></b></h5></div>
            <div class="col-1"><h5 style="text-align:left; font-size: 14px;line-height: 1.43;color: #484848;"><a href="https://clicknbook.co/refund-policy/" style="color:#000000;" >Refund Policy </a></h5></div>
            <div class="col-1"><h5 style="text-align:left; font-size: 14px;line-height: 1.43;color: #484848;"><a href="https://clicknbook.co/privacy-policy/" style="color:#000000;" >Privacy Policy </a></h5></h5></div>
            <div class="col-1"><h5 style="text-align:left; font-size: 14px;line-height: 1.43;color: #484848;"><a href="https://clicknbook.co/terms-and-conditions" style="color:#000000;" >Terms</a></h5></div>
            <div class="col-5 text-center">
               <img src="https://clicknbook.co/storage/u-155/2022/10/30/vmp-removebg-preview (1).jpg" width="175">
                
            </div>
            <div class="col-2"><h5>            <ul class="list-unstyled topnav-menu mb-0 text-right" style="padding-right:10px;">

                @if(count($langs) || count($currencies))

                @if($current_lang == 'en')

                    <li class="dropdown global-list">

                        <a class="nav-item nav-item--global" href="javascript: void(0)" data-toggle="modal"
                           data-target="#hh-modal-global">
                            <i class="fa fa-globe" style="font-size:20px; color:#01c1c9;"></i>&nbsp;
                            <i class="ti-angle-up" style="font-size:10px; color:black;"></i>

                        </a>

                    </li>

                @else

                 <li class="dropdown global-list">

                        <a class="nav-item nav-item--global" href="javascript: void(0)" data-toggle="modal"data-target="#hh-modal-global">
                            <i class="fa fa-globe" style="font-size:20px; color:black;"></i>&nbsp;&nbsp;
                            <i class="ti-angle-up" style="color:black;"></i>
                        </a>

                    </li>

                @endif

                @endif</ul>
</h5></div>
           </div>
           
           
           
            
<div id="hh-modal-global" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header no-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i>

                </button>

            </div>

            <div class="modal-body" >

                @if(count($langs))

                    <h4 class="title mt-0">{{__('Select Language')}}</h4>

                    <ul class="list-unstyled list-languages row mt-3">

                        @foreach($langs as $key => $lang)

                            @if($current_lang == $lang['code'])

                                <li class="col-6 col-md-4 mb-3 item current">

                                    <a href="javascript: void(0)">{{__($lang['name'])}}</a>

                                </li>

                            @else

                                <li class="col-6 col-md-4 mb-3 item">

                                    <a href="{{add_query_arg('lang', $lang['code'], current_url())}}">{{$lang['name']}}</a>

                                </li>

                            @endif

                        @endforeach

                    </ul>

                @endif

                @if(count($currencies))

                    <h4 class="title mt-0">{{__('Select Currency')}}</h4>

                    <ul class="list-unstyled list-currencies row mt-3">

                        @foreach($currencies as $key => $currency)

                            @if($currency['unit'] == current_currency('unit'))

                                <li class="col-6 col-md-4 mb-3 item current">

                                    <a href="javascript: void(0)">

                                        <span class="symbol">{{$currency['unit']}} - {{$currency['symbol']}}</span>

                                        <!-- <span class="name">{{get_translate($currency['name'])}}</span> -->
                                        </a>

                                </li>

                            @else

                                <li class="col-6 col-md-4 mb-3 item">

                                    <a href="{{add_query_arg('currency', $currency['unit'], current_url())}}">

                                        <span class="symbol">{{$currency['unit']}} - {{$currency['symbol']}}</span>

                                        <!-- <span class="name">{{get_translate($currency['name'])}}</span> -->

                                    </a>

                                </li>

                            @endif

                        @endforeach

                    </ul>

                @endif

            </div>

        </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->


        </div>

</footer>

</div>

<?php do_action('footer'); ?>

<?php do_action('init_footer'); ?>

<?php do_action('init_frontend_footer'); ?>

<script src="{{asset('js/frontend.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" crossorigin="anonymous"></script>
<script>
 $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: true,
   focusOnSelect: true
 });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });
</script>

</body>

</html>

