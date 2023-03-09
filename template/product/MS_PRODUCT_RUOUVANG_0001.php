<?php 
    $home_pro_hot = $action_product->getListProductHot_hasLimit(12);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-tieubieu-product_ruouvang">
    <div class="container">
        <div class="gb-tieubieu-product_ruouvang-title">
            <h3>SẢN PHẨM TIÊU BIỂU</h3>
        </div>
        <div class="row">
            <?php 
            $d = 0;
            foreach ($home_pro_hot as $item) {
                $d++;
                $row = $item;
                $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
            ?>
            <div class="col-sm-3">
                <div class="gb-product_ruouvang-item">
                    <div class="gb-product_ruouvang-item-img">
                        <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $row['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>" class="img-responsive"></a>
                    </div>
                    <div class="gb-product_ruouvang-item-text">
                        <h2><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h2>
                        <!--PRICE-->
                        <?php include DIR_PRODUCT."MS_PRODUCT_RUOUVANG_0002.php";?>
                    </div>
                    <div class="gb-product_ruouvang-item-yeumua">
                        <!--YÊU THÍCH-->
                        <?php include DIR_CART."MS_CART_RUOUVANG_0003.php";?>
                        <!--MUA HÀNG-->
                        <?php include DIR_CART."MS_CART_RUOUVANG_0001.php";?>
                    </div>
                </div>
            </div>
            <?php
                if ($d%4==0) {
                    echo '<hr style="width:100%;border:0;" />';
                }
            }
            ?>
        </div>
    </div>
</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-tieubieu-product_ruouvang-slide').owlCarousel({
            loop:true,
            margin:30,
            navSpeed:500,
            nav:true,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            responsive:{
                0:{
                    items:1,
                    nav: false
                },
                600:{
                    items: 3,
                    nav:true
                },
                992:{
                    items: 4,
                    nav:true
                }
            }
        });
    });
</script>