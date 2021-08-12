<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon.ico">

    <title>YouTube Thumbnail Downloader</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center" style="background: #fff;">

    <div class="container">
        <div class="card text-center">

            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <img src="{{ $thumbnail}}" class="img-fluid" alt="Responsive image" width="280" height="336">
            </div>
            <div class="card-footer text-muted">
                <a href="{{ $thumbnail}}" target="_blank" class="btn btn-primary">Download</a>
            </div>
        </div>

    </div>

</body>

</html>
