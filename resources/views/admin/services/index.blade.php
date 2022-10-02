<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="col-4">
            <p>All Services</p>
            <a href="../siteadmin/services/create/new" class="button">Add Service</a>
        </div>            
        @forelse($services as $service)
            <ol>
                <li class="heading-list"><a href="../siteadmin/services/{{ $service->slug }}" class="posts-heading">{{ ucfirst($service->slug) }}</a></li>
            </ol>
        @empty
            <p class="text-warning">No blog Posts available</p>
        @endforelse
    </div>
</body>
</html>