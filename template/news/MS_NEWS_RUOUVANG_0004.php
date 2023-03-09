<?php 
    $home_news_new = $action_news->getListNewsNew_hasLimit(4);
?>
<div class="gb-tintucmoinhat-blog_ruouvang">
    <h3>Tin tức mới nhất</h3>
    <div class="gb-blog-left-recent-posts_ruouvang">
        <ul>
            <?php 
            foreach ($home_news_new as $item) {
                $rowLang = $action_news->getNewsLangDetail_byId($item['news_id'],$lang);
            ?>
            <li>
                <div class="gb-item-recent-posts_ruouvang">
                    <div class="gb-item-recent-posts_ruouvang-img">
                        <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $item['news_img'] ?>" alt="<?= $rowLang['lang_news_name'] ?>"></a>
                    </div>
                    <div class="gb-item-recent-posts_ruouvang-text">
                        <h2><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a></h2>
                        <div class="gb-news-blog_ruouvang-item-text-des">
                            <p><?= substr($rowLang['lang_news_des'], 0, 200) ?></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>