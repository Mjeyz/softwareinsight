<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="{{url('siteadmin/services')}}" class="button">Go back</a>
            <h1 class="display-one">{{ ucfirst($service->banner_heading) }}</h1>
            <p>{!! $service->banner_paragraph !!}</p> 
            <hr>
            <br><br>
            <form id="delete-frm" class="" action="" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete Post</button>
            </form>
        </div>
    </div>
</body>
</html>