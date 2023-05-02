@extends('layout/layout')
@section('content')   
@if ($errors->any())
@foreach($errors->all() as $item)
{{$item}}
<br>
@endforeach
@endif
<form action="@if(! isset($data)){{"/savedata"}}  @else {{"/update-data"}} @endif" method="post">
    <div class="list">
     @if(isset($data))<input name="id" value="{{$data->id}}" type="number" hidden> @endif
        <label for="title">TITLE: </label>
        <input  type="text" name="title" value="@if(isset($data)){{$data->title}} @endif" placeholder="Enter the title">
    </div>
            <div class="list">
                <label for="description" >DESCRIPTION: </label>
                <textarea name="desc" placeholder="Notes">@if(isset($data)){{$data->desc}} @endif </textarea>
            </div>
            @csrf
<button type="submit">ADD</button>

     </form>
    
@endsection