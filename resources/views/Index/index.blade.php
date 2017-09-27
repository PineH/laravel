<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户列表</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">

</head>
<body>
<table class="table table-hover">
    <tr>
        <td>用户姓名</td>
        <td>用户年龄</td>
        <td>用户性别</td>
    </tr>
    @forelse ($list as $user)
        <tr>
            <td>{{$user->uname }}</td>
            <td>{{$user->uage}}</td>
            <td>{{$user->usex}}</td>
        </tr>
    @empty
        <tr>
            <td colspan="3">没有用户</td>
        </tr>
    @endforelse
</table>
</body>
</html>