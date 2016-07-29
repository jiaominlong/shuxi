@extends('mapp')

@section('content')
    <div data-role="page">
        <div data-role="header">
            <h1>已完成功能列表</h1>
        </div>
        <div data-role="main" class="ui-content">
            <ul data-role="listview" class="ui-listview">
                <li><a href="{{ url('add_order') }}">添加订单</a></li>
                <li><a href="{{ url('add_product') }}">添加产品</a></li>
            </ul>
        </div>
    </div>

@endsection