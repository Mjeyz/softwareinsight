<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
</head>
<body>
    <div class="login-form">
        <form method="POST" action="{{ route('login.custom') }}">
            @csrf
            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <button type="submit">Signin</button>
        </form>
    </div>
</body>
</html>
