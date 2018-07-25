<html>
<head>
    <title>{{ config('backpack.base.project_name') }} @yield("error_title") </title>
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
</head>
<body>
<div class="container">
    @yield("error_detail")
</div>
</body>
</html>
