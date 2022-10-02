<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="col-4">
            <p>All pages</p>
            <a href="../siteadmin/pages/create/new" class="button">Add page</a>
        </div>            
        @forelse($pages as $page)
            <ol>
                <li class="heading-list"><a href="../siteadmin/pages/{{ $page->slug }}" class="posts-heading">{{ ucfirst($page->slug) }}</a></li>
            </ol>
        @empty
            <p class="text-warning">No blog Posts available</p>
        @endforelse
    </div>
</body>
</html>