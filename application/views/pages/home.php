<div class="parallax-container">
    <div class="section container">
        <br><br>

        <h1 class="header center pink-text text-lighten-1">DIMIGO.IN</h1>
        <div class="row center">
            <a class="btn-large waves-effect waves-light pink lighten-1" href="<?= site_url('news') ?>">News archive</a>
        </div>

        <br><br>
    </div>

    <div class="parallax"><img src="http://dimigo.hs.kr/layouts/dimigo_v2/images/sub.bg/03.jpg"></div>
</div>

<div class="container section">
    <table>
        <tbody>
            <?php foreach([
                "아침" => "치킨너겟 쌀밥 호박고추장찌개 메추리알곤약볶음 시금치나물 포기김치 사과",
                "점심" => "삼치조림 잡곡밥 순두부찌개 잡채 명엽채볶음 숙주나물 깍두기 꽈배기",
                "저녁" => "핫도그버거 볶음밥 크림스프 오이피클 깍두기 나쵸 쵸코우유",
                "간식" => "츄러스 치즈빵 오렌지쥬스"
            ] as $meal => $foods){ ?>

            <tr>
                <td><?= $meal ?></td>
                <td>
                    <?php foreach(explode(" ", $foods) as $food){ ?>
                    <div class="chip"><?= $food ?></div>&nbsp;
                    <?php } ?>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
