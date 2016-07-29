@extends('mapp')
@section('head')
    <link rel="stylesheet" href="packages/css/add_order.css">
    <title>添加订单</title>
@endsection

@section('content')
    <div data-role="page" id="add-page" >
        <div data-role="header">
            <h1>添加订单</h1>
        </div>
        <div data-role="main" class="ui-content">
            <form action="#">
                <div class="ui-field-contain">
                    <label for="">吃货</label>
                    <input type="text" name="username">
                </div>
                <div class="ui-field-contain product">
                    <label for="">订的啥</label>
                    <ul class="ui-listview product js-selected-product">

                    </ul>
                    <a href="#myPopup" data-rel="popup" class="order-btn-add">＋添加</a>
                </div>
                <div class="ui-field-contain">
                    <label for="" class="product-all-price">总金额：<em>0</em></label>
                    <label for="" class="product-price-discount">折后应付：<span>0</span></label>
                </div>
                <div class="ui-field-contain order-btn-group">
                    <div data-role="controlgroup" data-type="horizontal">
                        <input type="submit" value="登记吃货">
                        <a href="#" data-role="button">继续登记</a>
                        <a href="#" data-role="button" class="ui-btn-b">看看今天做啥</a>
                    </div>
                </div>
            </form>
        </div>

        <div data-role="popup" id="myPopup">
            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">关闭</a>
            <ul class="ui-listview product all-product js-select-product">
                {{--<li value="1">甜品1</li>--}}
                @foreach($all_product as $product)
                    <li value="{{ $product->id }}" data-price="{{ $product->product_price }}" data-discount="{{ $product->product_discount }}">{{ $product->product_name }}</li>
                @endforeach
            </ul>
        </div>

        <div data-role="footer" class="">
            <h2><a href="add_product" data-role="button" data-transition="slide">Go to Bar</a></h2>
        </div>
    </div>
@endsection


@section('footer')
    <script src="packages/js/add_order.js"></script>
        <script>
        $(document).on('pagebeforeshow', '#foo', function(){
//            alert($('#body-test').html());
        });
    </script>
@endsection
