@extends('layout/layout')
@section('content')
<style>
    form{
        border: 3px dotted rgb(58, 58, 58);
        border-radius: 20px;
        margin: 20px;
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        width: 90%;
        height: 70%;
        background-image: url(https://thumbs.dreamstime.com/z/background-grass-butterfly-flower-24099056.jpg) ;
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center

    }
    .list{
        margin: 10px;
        padding: 20px;
    }
    .list label{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 20px;
        margin-right: 15px;
    }
    .list input,textarea{
        border: 2px solid grey;
        background-color: rgb(234, 248, 244);
        font-size: 20px;
        width: 450px;
    }
     button{
        box-shadow: 2px 2px gray;
        border: 2px dotted rgb(58, 58, 58);
        width: 80px;
        height: 35px;
    }
    .list input,textarea:hover{
        cursor: pointer;
        color: rgb(81, 107, 133);
    }
</style>
<form action="">
    <div class="list"><label for="title">TITLE: </label><input  type="text" name="title" placeholder="Enter the title" ></div>
        <div class="list"><label for="date">DATE: </label><input type="date" name="date"></div>
            <div class="list"><label for="description">DESCRIPTION: </label><textarea name="desc" placeholder="Notes"></textarea></div>
<button type="submit">ADD</button>
        </form>
@endsection