<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="{{route('authLog')}}" method="post">
        @csrf
        @method('post')
        @if($errors->any())
        <ul>
            {!!implode('',$errors->all('<li>:message</li>'))!!}
        </ul>
        @endif
        <input name="Admin_email" placeholder="Email" type="email">
        <input name="Admin_password" placeholder="Password" type="password">
        <button>Login</button>
    </form>
</body>

</html>