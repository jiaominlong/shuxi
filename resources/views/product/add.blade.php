@extends('mapp')

@section('head')
    <title>添加产品</title>
@endsection

@section('content')
    <div data-role="page" id="foo">
        <div data-role="header">
            <h1>添加产品</h1>
        </div>
        <div data-role="main" class="ui-content">
            <form action="">
                <div class="ui-field-contain">
                    <label for="">产品名称：</label>
                    <input type="text" name="product_name">
                </div>
                <div class="ui-field-contain">
                    <label for="">价格：</label>
                    <input type="text" name="product_price">
                </div>
                <div class="ui-field-contain">
                    <label for="">折扣：</label>
                    <input type="text" name="product_discount">
                </div>
                <div class="ui-field-contain">
                    <input type="submit" name="product_name" value="添加产品">
                </div>
            </form>
        </div>
        <div data-role="footer">
            <h2>Page Footer</h2>
        </div>
    </div>

@endsection


@section('footer')
    footer
@endsection