<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="col-4">
            <p>All technologies</p>
            <a href="{{url('siteadmin/technologies/create/new')}}" class="button">Add technology</a>
        </div>            
        @forelse($technologies as $technology)
            <ol>
                <li class="heading-list"><a href="{{url('../siteadmin/technologies/' . $technology->id)}}" class="posts-heading">{{ ucfirst($technology->banner_heading) }}</a></li>
            </ol>
        @empty
            <p class="text-warning">No blog Posts available</p>
        @endforelse
    </div>
</body>
</html>