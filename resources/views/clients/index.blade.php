@extends('blocks.app')
@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Вывод информации из базы данных
        </h3>
        <table class="table table-striped table-dark">
            <tr> <th>Имя</th>  <th>Фамилия</th>  <th>Номер</th>  <th>Адрес</th>  <th>Дата заявки</th>  </tr>
            @foreach($client as $clients)
                <tr> <th>{{$clients->first_name}}</th>  <th>{{$clients->last_name}}</th>  <th>{{$clients->phone_number}}</th>  <th>{{$clients->address}}</th>  <th>{{$clients->created_at->toFormattedDateString()}}</th>  </tr>
            @endforeach
        </table>
@endsection
