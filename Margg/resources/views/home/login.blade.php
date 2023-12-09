<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="/authenticate" method="post">
        @csrf
        @method('post')
        @if($errors->any())
        <ul>
            {!!implode('',$errors->all('<li>:message</li>'))!!}
        </ul>
        @endif
        <input name="email" placeholder="Email" type="email">
        <input name="password" placeholder="Password" type="password">
        <button>Let`s go!</button>
    </form>
</body>

</html>