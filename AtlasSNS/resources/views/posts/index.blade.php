@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>

<!-- <p class="pull-right"><a class="" href=""><img src="images/post.png"></a></p> -->
<h2 class="page-header"><img src="images/icon1.png"></h2>
{!! Form::open(['url' => '/create']) !!}
    <div class="form-group">
      {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください']) !!}
      <button type="submit"><img src="images/post.png" alt="button" width="80" height="80"></button>
    </div>
{!! Form::close() !!}
    <div>
      @foreach ($list as $list)
      <tr>
        <td>{{ $list->post }}</td>
        <td>{{ $list->created_at }}</td>
        <td><a class="btn btn-primary" href="/post/{{$list->id}}/update-form">更新</a></td>
        <td><a class="btn btn-danger" href="/post/{{$list->id}}/delete" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">削除</a></td>
      </tr>
      @endforeach
    </div>
@endsection
