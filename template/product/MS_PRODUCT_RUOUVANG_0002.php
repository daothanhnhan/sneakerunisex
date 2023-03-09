<?php if ($row['product_price_sale'] != 0) { ?>
<p class="prices_ruouvang">
	<span class="prices_ruouvang-old" style="color: #d3d3d3;"><del><?= number_format($row['product_price']) ?> VNĐ</del></span>
    <span class="prices_ruouvang-old"><?= number_format($row['product_price']-($row['product_price']*($row['product_price_sale']/100))) ?> VNĐ</span>
</p>
<?php } else { ?>
<p class="prices_ruouvang">
	<span class="prices_ruouvang-old"><?= number_format($row['product_price']-($row['product_price']*($row['product_price_sale']/100))) ?> VNĐ</span>
</p>
<?php } ?>