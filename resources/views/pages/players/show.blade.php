@extends('master.main')

@section('content')
    <h1>Players</h1>
    @component('components.table.table', ['players'=>$player])
    @endcomponent


@endsection
