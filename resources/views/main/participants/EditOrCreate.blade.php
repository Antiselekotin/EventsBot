@extends('layouts.main_layout')

@section('content')
    <div class="container mt-2">
        @include('main.includes.message_indicator')
        @php /** @var \App\Models\Organizations $item */ @endphp
        @if($item->exists)
        <form action="{{route('main.participants.update', $item->id)}}" class="d-flex" method="POST">
        @method('PATCH')
        @else
        <form action="{{route('main.participants.store')}}" class="d-flex" method="POST">
        @endif
            @csrf
            <div class="col-8">
                @include('main.participants.includes.edit_or_show_main_bar')
            </div>
            <div class="col-3 offset-1">
                @include('main.participants.includes.edit_or_show_side_bar')
            </div>
        </form>
    </div>
@endsection
