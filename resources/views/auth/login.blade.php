<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>custom Authentication</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offser-4" style="margin-top: 20px">
                <h3>Login</h3>
                <form action="{{ route('login-user') }}" method="POST">
                    @if (Session::has('success'))
                    <div alert alert-success>{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('fail'))
                    <div alert alert-danger>{{ Session::get('fail') }}</div>
                    @endif
                    @csrf
                    <div class="form-gorup">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" name="email" value="">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-gorup">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" value="">
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-gorup mt-3">
                        <button class="btn btn-black btn-primary" type="submit">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
