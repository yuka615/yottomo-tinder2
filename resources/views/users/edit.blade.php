@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
               
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="/resources/views/profiles/myprofile">MyProfile</a></li>
                <li><a href="#">Like</a></li>
                <li><a href="#">Future</a></li>
                <li><a href="#">ズッ友</a></li>
            </ul>
        
        
        <div class="form-group">
            私は
            {!! Form::date('birthday', \Carbon\Carbon::now()) !!}
            生まれで、出身地は
            {!! Form::text('birthplace') !!}
            だよ。<br>
            性格は
            {!! Form::text('character1') !!}
            と思っているんだけど、まわりからは
            {!! Form::text('character2') !!}
            って言われるよ。<br>
            そんな私の趣味は、
            {!! Form::text('hobby') !!}
            で、チャームポイントは
            {!! Form::text('charmpoint') !!}
            なんだ。<br>
            将来の夢は
            {!! Form::text('dream') !!}
            で、好きなアプリは
            {!! Form::text('app') !!}
            だよ。<br>
            最後に一言、
            {!! Form::text('content') !!}
            。よろしくね！
        </div>
        
        <div class="form-group">
            〇〇ランキング<br>
            {!! Form::label('rank1', '第一位:') !!}
            {!! Form::text('rank1') !!}
            <br>
            {!! Form::label('rank2', '第二位:') !!}
            {!! Form::text('rank2') !!}
            <br>
            {!! Form::label('rank3', '第三位:') !!}
            {!! Form::text('rank3') !!}
        </div>
        
        <!--button-->
        {{ Form::button('<span class="glyphicon glyphicon-refresh"> 更新</span>', array('class'=>'btn btn-info', 'type'=>'submit')) }}
   
        </div>
    </div>
   
@endsection