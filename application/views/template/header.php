<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
</head>

<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="<?= base_url() ?>" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="https://cdn-icons-png.flaticon.com/512/3313/3313480.png" style="width:32px; height:32px">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href=" <?= BASE_URL() ?>" class="nav-link px-2 link-dark">School</a></li>
                    <li><a href="<?= BASE_URL("About") ?>" class="nav-link px-2 link-dark">About</a></li>
                    <li><a href="<?= BASE_URL("Admin") ?>" class="nav-link px-2 link-dark">Admin</a></li>
                </ul>
            </div>
        </div>
    </header>