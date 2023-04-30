@extends('layout/layout')
@section('content')   
<form action="/savedata" method="post">
    <div class="list">
        <label for="title">TITLE: </label>
        <input  type="text" name="title" placeholder="Enter the title" >
    </div>
            <div class="list">
                <label for="description">DESCRIPTION: </label>
                <textarea name="desc" placeholder="Notes"></textarea>
            </div>
            @csrf
<button type="submit">ADD</button>

        </form>
    
@endsection