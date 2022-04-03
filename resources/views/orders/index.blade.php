@extends('orders.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Добавить новый заказ</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Номер заказа</th>
            <th>Имя заказчика</th>
            <th>Имя заказа</th>
            <th>Детали заказа</th>
            <th width="400px">Action</th>
        </tr>

        @foreach ($data as $key =>  $order)
        <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->product_detail }}</td>

                <td>
                    <form action="{{ route('orders.destroy',$order->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Редактировать</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
                @endforeach
            </tr>

    </table>



@endsection
