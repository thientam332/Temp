@extends('layouts')


@section('conten')
    <p>hello</p>
    <input type="text">
    <h1 style="color:blueviolet">Allll</h1>
    <br>
    <div>
        @if($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
    </div>
    <form action="/store3" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="name" placeholder="Input Todos">
            <button type="submit">submit</button>
        </div>
    </form>
    
@endsection