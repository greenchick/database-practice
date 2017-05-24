@extends('app')

@section('content')
  <div class="container">
    <h2 class="page-header">ToDo編集</h2>
    {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
    <div class="form-group">
      {!! Form::input('text','title',$todo->title,['required', 'class' => 'form-controll']) !!}
    </div>
    <button type="submit" class="btn btn-sccess pull-right">更新</button>
    {!! Form::close() !!}
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/bootstrap.min.js"></script>
  </div>
@endsection