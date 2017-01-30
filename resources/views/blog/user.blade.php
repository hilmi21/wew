@extends('layouts.new.dataadmin')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>




    <hr>
    <h3>The Gamers Users</h3>
    <div class="container">
    <h4>User Profil Data</h4>
    @if($users->count())
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
            <thead align="center">
                   <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>Username</th>
                       <th>Email</th>
                       <th>Delete</th>
                   </tr>
               </thead>
              @foreach($users as $user)
                   <tr>
                      <td align="center">{{ $user->id }} </td>
                      <td> {{ $user->name }}</td>
                       <td> {{ $user->username }}</td>
                      <td> {{ $user->email }} </td>
                    <td>
                     <form action="/user/{{ $user->id }}" method="post">
                     <input type="submit" name="submit" value="delete">{{ csrf_field() }}
                     <input type="hidden" name="_method" value="DELETE">
                     </form>
                    </td>

                   </tr>
               @endforeach
            </table>
            <ul class="pagination">
                  {!! $users->render() !!}
                </ul>
        </div>
    @endif
    </div>




@endsection
