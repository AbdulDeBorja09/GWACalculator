@extends('layouts.app')

@section('content')
<div class="home-div ">
    <div class="homepage">
        <h1 class="greetings">Good day <span class="user">{{ Auth::user()->name }}</span>, welcome to your dashboard!
        </h1>
        <div class="container">
            <div class="top">
                <ion-icon name="home"></ion-icon>
                <h1>Home</h1>
            </div>
            <div class="homemenu-row ">
                <a class="homemenu-box shadow-sm text-center" href="{{url('compute')}}">
                    <img src="{{url('/image/calc.svg')}}" alt="">
                    <h1>calculator</h1>
                </a>
                <a class="homemenu-box shadow-sm text-center" href="{{url('manage')}}">
                    <img src="{{url('/image/history.svg')}}" alt="">
                    <h1>Manage</h1>
                </a>
                <a class="homemenu-box shadow-sm  text-center" href="{{url('profile')}}">
                    <img src="{{url('/image/profile.svg')}}" alt="">

                    <h1>profile</h1>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection