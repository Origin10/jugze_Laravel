<!doctype html>
{{--結構很完整的Html--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','default')</title>
</head>
<body>
    <h4>這是重複的內容</h4>
    @yield('content')

    @section('content2')
        <h4>default content2</h4>
    @show
    <h4>這是重複的footer</h4>
</body>
</html>