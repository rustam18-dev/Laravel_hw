@extends('blocks.app')
@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Вывод информации из базы данных
        </h3>
        <table class="table table-striped table-dark">
            <tr> <th>Название</th>  <th>Описание</th>  <th>Цена</th>  <th>Дата заявки</th>  </tr>
            @foreach($product as $products)
                <tr> <th>{{$products->title}}</th>  <th>{{$products->description}}</th>  <th>{{$products->price}}</th>  <th>{{$products->created_at->toFormattedDateString()}}</th>  </tr>
            @endforeach
        </table>
@endsection
