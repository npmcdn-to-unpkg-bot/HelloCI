<div class="container section">
    <div class="red-text"><?= validation_errors(); ?></div>
    <?= form_open('signup'); ?>

    <h5>ID</h5>
    <?= form_error('id'); ?>
    <input type="text" name="id" value="<?= set_value('id'); ?>" size="50" />

    <h5>이름</h5>
    <?= form_error('name'); ?>
    <input type="text" name="name" value="<?= set_value('name'); ?>" size="50" />

    <h5>비밀번호</h5>
    <?= form_error('password'); ?>
    <input type="password" name="password" value="<?= set_value('password'); ?>" size="50" />

    <h5>비밀번호 확인</h5>
    <?= form_error('passconf'); ?>
    <input type="password" name="passconf" value="<?= set_value('passconf'); ?>" size="50" />

    <h5>이메일</h5>
    <?= form_error('email'); ?>
    <input type="email" name="email" value="<?= set_value('email'); ?>" size="50" />

    <div><input type="submit" value="Submit" /></div>
</div>
