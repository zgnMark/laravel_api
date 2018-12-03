@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>{{ $title }}</h1>
  <ul class="users">
    @foreach ($users as $user)
      <li>
        <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="avatar" width="50px" height="50px" />
        <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>
      </li>
    @endforeach
  </ul>

  {!! $users->render() !!}
</div>
@stop