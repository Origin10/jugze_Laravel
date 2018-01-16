<!doctype html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{!! Form::open(['url' =>'foo/bar']) !!}<br>

{!! Form::label('e-mail', 'E-Mail',['class'=>'class']) !!}

{!! Form::text('e-mail','default',['class'=>'class']) !!}<br>

{!! Form::label('notes', 'notes',['class'=>'class']) !!}

{{ Form::textarea('notes',null,['class'=>'field','raw'=>4,'cols'=>'5']) }}<br>

{{ Form::hidden('name','secret') }}<br>

{!! Form::label('interest[]', '打球',['class'=>'class']) !!}
{!! Form::checkbox('interest[]','ball', true) !!}
{!! Form::label('interest[]', '打遊戲',['class'=>'class']) !!}
{!! Form::checkbox('interest[]','game') !!}
<br>

{!! Form::label('sexual', '男',['class'=>'class']) !!}
{!! Form::radio('sexual','male',true) !!}
{!! Form::label('sexual', '女',['class'=>'class']) !!}
{!! Form::radio('sexual','female',true) !!}
<br>

{{ Form::select('size',['L'=>'Lage','S'=>"Small"],"S") }}

{{ Form::submit('Click Me!') }}<br>

{{ Form::reset('reset Me!') }}<br>




{!! Form::close() !!}<br>




</body>
</html>