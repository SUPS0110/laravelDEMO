
@push('css')
    <link rel="stylesheet" href="{{url('css/style.css')}}">
@endpush
@extends('layout/layout')
@section('content')
<h1>
    hello how are you?
    {{$data}};
</h1>
@endsection