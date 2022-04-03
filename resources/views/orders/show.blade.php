@extends('orders.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Все заказы</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Назад</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Имя заказа:</strong>
                {{ $order->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Название заказа:</strong>
                {{ $order->product_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Деьали заказа:</strong>
                {{ $order->product_detail }}
            </div>
        </div>
    </div>
@endsection
