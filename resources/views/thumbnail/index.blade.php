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

    <form action="{{ route('thumbnail-download') }}" class="form-signin" method="post">
        @csrf

        <img class="mb-4"
            src="https://yt3.ggpht.com/ccPr80rfkOgsE0TMP8S8vEfP85gl12XzUGtySPFFYNMhxlQ62W7ijksmUIXv6fCBC1jBmoEqaA=s900-c-k-c0x00ffffff-no-rj"
            alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">YouTube Thumbnail Downloader</h1>

        <input id="thumbnail" class="form-control" type="text" name="url" placeholder="Please Paste URL">

        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Submit</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>

</body>

</html>
