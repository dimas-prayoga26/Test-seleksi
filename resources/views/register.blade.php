<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
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

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        @if($errors->has('password_confirmation'))
            <span>{{ $errors->first('password_confirmation') }}</span>
        @endif
        <br>

        <button type="submit">Register</button>
    </form>
</body>
</html>