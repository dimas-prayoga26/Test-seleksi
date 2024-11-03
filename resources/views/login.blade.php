<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}">
        @if($errors->has('email'))
            <span>{{ $errors->first('email') }}</span>
        @endif
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        @if($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
        @endif
        <br>

        <button type="submit">Login</button>
    </form>
</body>
</html>