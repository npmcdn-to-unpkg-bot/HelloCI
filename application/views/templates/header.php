<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="<?= $title ?>">
        <meta property="og:type" content="website">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" charset="utf-8" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link rel="stylesheet" charset="utf-8" href="https://cdn.materialdesignicons.com/1.5.54/css/materialdesignicons.min.css">
        <link rel="stylesheet" charset="utf-8" href="/public/css/common.css">
    </head>

    <body>
        <nav class="<?= isset($brand_color) ? $brand_color : "" ?>" role="navigation">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo white-text text-darken-3"><?= $title ?></a>
            </div>
        </nav>

        <main class="section">
