<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script charset="utf-8" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        <link rel="stylesheet" charset="utf-8" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    </head>

    <body>
        <nav class="<?= $brand_color ?? "" ?>" role="navigation">
            <div class="nav-wrapper container">
                <a href="<?= $parent ?? '#' ?>" class="brand-logo"><?= $logo ?? $title ?></a>
            </div>
        </nav>

        <main>
