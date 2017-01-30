@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">welcome</div>

                @if(Auth::user() ->jabatan == 'ADMIN')
                <div class="panel-body">
                    Hello {{ Auth::user() ->name }}<br>
                    Email Anda : {{ Auth::user() ->email }}<br>
                    Anda Login Menggunakan Username : {{ Auth::user() ->username }}<br>
                    HALAMAN ADMIN<br>
                </div>
                @else
                <div class="panel-body">
                    Hello {{ Auth::user() ->name }}<br>
                    Email Anda : {{ Auth::user() ->email }}<br>
                    Anda Login Menggunakan Username : {{ Auth::user() ->username }}<br>
                    HALAMAN MEMBER<br>
                </div>
                @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
