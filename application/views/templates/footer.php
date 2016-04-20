        </main>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text"><?= isset($footer_title) ? $footer_title : $title ?></h5>
                        <p class="grey-text text-lighten-4">
                            <?= isset($footer_description) ? $footer_description : "한국디지털미디어고등학교 인트라넷 디미고인" ?>
                        </p>
                    </div>

                    <?php if(isset($links) and is_array($links)){ ?>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">링크</h5>
                        <ul>
                            <?php foreach($links as $text => $href){ ?>
                            <li><a class="grey-text text-lighten-3" href="<?= $href ?>"><?= $text ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    © 2016 DIMIGOIN
                    <a class="grey-text text-lighten-4 right" href="http://dimigo.hs.kr">학교 사이트로 이동</a>
                </div>
            </div>
        </footer>

        <script charset="utf-8" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    </body>
</html>
