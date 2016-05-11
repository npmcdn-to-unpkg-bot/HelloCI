<div class="parallax-container">
    <div class="section container">
        <br><br>

        <h1 class="header center pink-text text-lighten-1">DIMIGO.IN</h1>
        <div class="row center">
            <a class="btn-large waves-effect waves-light pink lighten-1" href="<?= site_url('signup') ?>">회원가입</a>
            &nbsp;&nbsp;
            <a class="btn-large waves-effect waves-light pink lighten-1" href="<?= site_url('login') ?>">로그인</a>
        </div>

        <br><br>
    </div>

    <div class="parallax"><img src="http://dimigo.hs.kr/layouts/dimigo_v2/images/sub.bg/03.jpg"></div>
</div>

<?php
$url = 'http://dimigo.in/pages/dimibob_getdata.php?d=' . date('Ymd');
$data = json_decode(file_get_contents($url), true); if(isset($data)){
?>

<div class="container section">
    <table>
        <tbody>
            <?php foreach(['breakfast' => "아침", 'lunch' => "점심", 'dinner' => "저녁", 'snack' => "간식"] as $key => $meal) if(isset($data[$key]) and is_string($data[$key])){ ?>

            <tr>
                <td><?= $meal ?></td>
                <td>
                    <?php foreach(preg_split("(/|\\*)", $data[$key]) as $food) if(trim($food) != ''){ ?>
                    <div class="chip"><?= $food ?></div>&nbsp;
                    <?php } ?>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<?php } ?>

<script type="text/javascript">
    $(function(){
        $('.parallax').parallax();
    });
</script>
