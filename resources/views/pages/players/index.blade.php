@extends('master.main')

@section('content')
    <h1>Players</h1>
{{--    @foreach($players as $player)--}}
{{--        <p>--}}
{{--            {{$player->id}}--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            {{$player->name}}--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            {{$player->birth_date}}--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            {{$player->created_at}}--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            {{$player->updated_at}}--}}
{{--        </p>--}}
{{--    @endforeach--}}
    @component('components.table.table', ['players'=>$players])
    @endcomponent


@endsection
