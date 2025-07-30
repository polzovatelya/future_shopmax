
<?php if (!(empty($arResult))): ?>
<div class="row">
<!--            <pre>-->
<!--                --><?php //=print_r($arResult)?>
<!--            </pre>-->
    <?php foreach($arResult['ITEMS'] as $item): ?>
            <div class="col-lg-4 col-md-6 item-entry mb-4">
                <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="product-item md-height bg-gray d-block">
                <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item['NAME']?></a></h2>
                <strong class="item-price">
                    <?php $formatedPrice = number_format($item['PROPERTIES']['PRICE']['VALUE'], 2, '.', '');?>
                    <?php if ($item['PROPERTIES']['SALE']['VALUE']):?>
                        <?php $discountPrice = number_format($item['PROPERTIES']['PRICE']['VALUE']*0.5, 2,'.', '');?>
                        <del>$<?=$formatedPrice?> </del>$<?=$discountPrice?>
                    <?php else:?>
                        $<?= $formatedPrice?>
                    <?php endif;?>
                </strong>
                <?php if (!empty($item['PROPERTIES']['RATING']['VALUE'])): ?>
                    <div class="star-rating">
                        <?php for ($i = 0; $i < $item['PROPERTIES']['RATING']['VALUE']; $i++): ?>
                            <span class="icon-star2 text-warning"></span>
                        <?php endfor; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
</div>
<?php endif; ?>
