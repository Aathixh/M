<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
</head>

<body>
    <h1>Welcome to Admin Register</h1>
    <form action="{{route('regpage')}}" method="post">
        @csrf
        @method('post')
        @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <input type="text" required placeholder="Name" name="Admin_name">
        <input type="email" required placeholder="Email" name="Admin_email">
        <input type="number" required placeholder="Phone Number" name="Admin_phn_num">
        <input type="password" required placeholder="Password" name="password">
        <input type="password" required placeholder="Re-enter Password" name="password_confirmation">
        <button type="submit">Submit</button>
    </form>
</body>

</html>