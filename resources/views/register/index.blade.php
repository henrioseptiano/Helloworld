@extends('layout.layouts')


@section('title','Register')


@section('content')

<div class='container'>
    <div class="panel">
        <div class="panel-heading">
            Register Form
        </div>
        <div class="panel-body">
            {!! Form::open(['url' => '/registerprocess', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            {!! Form::token() !!}
                <div class="row">
                    <div class="col-sm-2 center-block">
                        {!! Form::label('username','Username',['class' => 'pull-right control-label']) !!}
                    </div>
                    <div class="col-sm-6 center-block">
                        {!! Form::text('username','',['class' => 'form-control pull-left']) !!}
                    </div>
                    <div class="col-sm-4 center-block">
                    </div>
                </div>
                <div class="row">
                   &nbsp;
                </div>
                <div class="row">
                    <div class="col-sm-2 center-block">
                        {!! Form::label('password','Password',['class' => 'pull-right control-label']) !!}
                    </div>
                    <div class="col-sm-6 center-block">
                        {!! Form::password('password',['class' => 'form-control pull-left']) !!}
                    </div>
                    <div class="col-sm-4 center-block">
                    </div>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-sm-6 center-block">
                        {!! Form::submit('Register',['class' => 'btn btn-info pull-right']) !!}
                    </div>
                    <div class="col-sm-6 center-block">
                        <a href='/login'>{!! Form::button('Back',['class' => 'btn btn-default pull-left']) !!}</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
