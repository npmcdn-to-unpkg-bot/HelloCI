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
        <link rel="stylesheet" charset="utf-8" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" charset="utf-8" href="/public/css/common.css">
    </head>

    <body>
        <nav class="<?= isset($brand_color) ? $brand_color : "" ?>" role="navigation">
            <div class="nav-wrapper container">
                <?php if(isset($layers) and is_array($layers)){ ?>
                    <div class="col s12">
                        <?php foreach($layers as $layer => $href){ ?>
                        <a href="<?= empty($href) ? "#" : site_url($href) ?>" class="breadcrumb"><?= ucfirst($layer) ?></a>
                        <?php } ?>
                        <a href="#" class="breadcrumb"><?= $title ?></a>
                    </div>
                <?php } else { ?>
                    <a href="#" class="brand-logo"><?= $title ?></a>
                <?php } ?>
            </div>
        </nav>

        <main>
