@extends('layout/layout')
@if(session('status')){{session('status')}} @endif
@section('content')
<div class="notes">
<table>

    <div class="head">
        <tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>DESCRIPTION</th>
    <th>CREATED AT</th>
    <th>UPDATED AT</th>
    <th>ACTION</th>
        </tr>
    </div>
    <div class="list">
        @if(count($data)>0)
    @foreach ($data as $item)
        <tr>
        <td>{{$item->id}}</td>
    <td>{{$item->title}}</td>
    <td>{{$item->desc}}</td>
    <td>{{$item->created_at}}</td>
    <td>{{$item->updated_at}}</td>
    <td>
        <a href="{{'/edit/'.$item->id}}">EDIT</a>
        <a href="{{'/delete/'.$item->id}}">DELETE</a>
    </td>
        </tr>
    
    @endforeach
            
        @else
            <h1>Data not found</h1>
        @endif
        </tr>
    </div>
</table>
</div>
@endsection