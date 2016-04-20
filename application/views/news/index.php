<div class="container">
    <?php foreach($news as $news_item){ ?>
    <div class="card hoverable">
        <div class="card-content">
            <span class="card-title"><?= $news_item['title'] ?></span>
            <p class="truncate"><?= $news_item['text'] ?></p>
        </div>
        <div class="card-action">
            <a href="<?= site_url('news/' . $news_item['slug']) ?>">View article</a>
        </div>
    </div>
    <?php } ?>
</div>
