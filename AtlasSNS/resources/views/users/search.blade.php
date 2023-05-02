@extends('layouts.login')

@section('content')
  <form action="{{ route('users.search')}}">
  @csrf
    <div class="form-group">
      {!! Form::input('text', 'keyword', null, ['required', 'class' => 'form-control', 'placeholder' => 'ユーザー名']) !!}
    </div>
  <button type="submit" class="btn btn-success pull-right"><img src="">検索</button>
  </form>

@if(isset($keyword))
  <div class="alert alert-info mt-3">
    "{{$keyword}}"の検索結果
  </div>
@endif

@foreach($users as $user)
    <p>{{$user->username}} ({{$user->mail}})</p>
@endforeach

@endsection
