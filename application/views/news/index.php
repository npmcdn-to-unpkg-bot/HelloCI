<div class="container section row grid">
    <?php foreach($news as $news_item){ ?>
    <div class="col s12 m6 l4 grid-item">
        <div class="hoverable card">
            <div class="card-content">
                <span class="card-title"><?= $news_item['title'] ?></span>
                <p><?= $news_item['text'] ?></p>
            </div>
            <div class="card-action">
                <a href="<?= site_url('news/' . $news_item['slug']) ?>">View article</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
