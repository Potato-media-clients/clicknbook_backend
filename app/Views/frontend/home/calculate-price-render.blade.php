<div class="total-render d-flex align-items-center">
    <h5>{{ __('Operations') }}</h5>
    <div class="price-wrapper ml-auto">
    <span class="price"> {{$numberNight}} * {{ $price_neight}} </span>
    </div>

</div>


<div class="total-render d-flex align-items-center">


    <h5>{{ __('Total') }}</h5>

    <div class="price-wrapper ml-auto">


        <span class="price">{!! balanceTags(convert_price($total)) !!}</span>

    </div>

</div>

<div class="total-render d-flex align-items-center">


    <h5>{{ __('Tax (10%)') }}</h5>

    <div class="price-wrapper ml-auto">
    <?php $tax =($total*0.1) ?>


        <span class="price">{{$tax}}</span>

    </div>

</div>


<hr style="color:black" />
<div class="total-render d-flex align-items-center">


    <h5>{{ __('Final Total') }}</h5>

    <div class="price-wrapper ml-auto">
    <?php $totalPrice =$total + ($total*0.1) ?>

    <span class="price">{!! balanceTags(convert_price($totalPrice)) !!}</span>

    </div>

</div>




