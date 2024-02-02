<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="submit" method="post" class="form-group">
            @csrf
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span><br>

            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </span><br>

            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
            <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
            </span><br>

            <label for="">Conform Password</label>
            <input type="password" name="cnfpassword" class="form-control">
            <span class="text-danger">
                @error('cnfpassword')
                {{$message}}
                @enderror
            </span><br>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>

</html>