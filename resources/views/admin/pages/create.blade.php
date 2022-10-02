<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
</head>
<body>
<div class="login-form">
    <a href="{{ url('/siteadmin/pages') }}">Go back</a>
    <div class="">
        <h1>Add new page</h1>
        <p>Fill and submit this form to create a post</p>
        <form action="" method="POST">
            @csrf
            <input type="text" name="slug" class="form-control col-12" style="margin-bottom: 30px" id="" placeholder="page slug here">
            <input type="text" name="banner_heading" class="form-control col-12" style="margin-bottom: 30px" id="" placeholder="Banner Heading here">
            <textarea type="text" name="banner_paragraph" class="form-control col-12 pb-20" style="margin-bottom: 30px"  id="" placeholder="Banner Paragraph here"></textarea>
            <input type="text" name="main_content_heading" class="form-control col-12 pb-20" style="margin-bottom: 30px" id="" placeholder="Main content Heading here">
            <textarea type="text" name="main_content_paragraph" class="form-control col-12 pb-20" style="margin-bottom: 30px" id="" placeholder="Main content paragraph here"></textarea>
            <textarea type="text" name="pages_main_content" class="form-control col-12 pb-20" id="" style="margin-bottom: 30px" placeholder="pages main content here"></textarea>
            <button type="submit" class="btn btn-primary col-12">Submit page</button>
        </form>
    </div>
</div>
</body>
</html>