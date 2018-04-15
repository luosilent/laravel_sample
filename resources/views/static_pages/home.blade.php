@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Welcome</h1>
    <p class="lead">
      你现在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">娱乐 WebApp</a> 的主页。
    </p>
    <p>
      综合娱乐资讯、你想要的一切尽在这里。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop