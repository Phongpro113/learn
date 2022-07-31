<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('file/css/login.css')}}">
    <title>Document</title>
</head>
<body>

<div class="login-page">
{{--    <div class="form">--}}
        <form class="login-form" action="{{route('processLogin')}}" method="post">
            @csrf
            <div>
                <div class="login">
                    training
                    <br> <br>
                    <div>
                        <label for="" class="label">メール</label>
                        <input type="text" name="email" placeholder="email" class="input" />
                    </div>

                    <div>
                        <label for="" class="label">パスワード</label>
                        <input type="password" name="password" placeholder="password" class="input"/>
                        <br> <br>
                        <button type="submit" class="btn-login">ログイン</button>
                    </div>
                    <div>
                        @include('error.error')
                    </div>
                </div>

            </div>

        </form>
{{--    </div>--}}
</div>

{{--<script src="{{asset('file/js/login.js')}}"></script>--}}

</body>
</html>
