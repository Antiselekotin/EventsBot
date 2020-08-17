@extends('layouts.main_layout')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя учасника</th>
            <th scope="col">Роль</th>
            <th scope="col">День</th>
            <th scope="col">Страна</th>
            <th scope="col">Город</th>
            <th scope="col">Информация</th>
            <th scope="col">Время</th>
            <th scope="col">Ссылки</th>
            <th scope="col">Изменить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($paginate as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->Role}}</td>
                <td>{{$item->day}}</td>
                <td>{{$item->country}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->info}}</td>
                <td>{{$item->time}}</td>
                <td>0</td>
                <td><a href="{{route('main.participants.edit', $item->id)}}"
                    class="badge badge-info">Изменить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex flex-column align-items-center">
        {{$paginate->links()}}
        <a href="{{route('main.participants.create')}}">
            <button class="btn btn-primary">Добавить</button>
        </a>
    </div>
@endsection
