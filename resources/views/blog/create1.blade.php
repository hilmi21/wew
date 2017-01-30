@extends('layouts.master')

@section('title', 'Welcome To The Hell !')

@section('content')



<h1>Welcome The Creators</h1>

    <form action="/blog" method="post">
        <p>Tittle :</p><input type="text"  name="tittle" value="{{ old('tittle')}}"> <br>

        @if($errors->has('tittle'))
            <p> {{ $errors->first('tittle')}}  </p>
        @endif

        <p>Description :</p><textarea name="description" rows="8" cols="80">{{ old('description')}}</textarea> <br>

        @if($errors->has('description'))
            <p> {{ $errors->first('description')}}  </p>
        @endif

        <input type="submit" name="submit" value="create">
        {{ csrf_field() }}
    </form>

@endsection
