<div class="container section">
    <div class="red-text"><?= validation_errors(); ?></div>
    <?= form_open('login'); ?>

    <h5>ID</h5>
    <?= form_error('id'); ?>
    <input type="text" name="id" value="<?= set_value('id'); ?>" size="50" />

    <h5>비밀번호</h5>
    <?= form_error('password'); ?>
    <input type="password" name="password" value="<?= set_value('password'); ?>" size="50" />

    <div><input type="submit" value="Submit" /></div>
</div>
