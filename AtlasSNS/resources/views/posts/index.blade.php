@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>


<!-- <p class="pull-right"><a class="" href=""><img src="images/post.png"></a></p> -->
<h2 class="page-header"><img src="images/icon1.png"></h2>
{!! Form::open(['url' => '/create']) !!}
    <div class="form-group">
      {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください']) !!}
    </div>
    <button type="submit" class="btn btn-success pull-right"><img src="images/post.png"></button>
{!! Form::close() !!}
@endsection
