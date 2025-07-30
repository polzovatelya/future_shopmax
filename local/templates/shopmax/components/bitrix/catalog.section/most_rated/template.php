


<?php if (!(empty($arResult["ITEMS"]))): ?>
<div class="row">
    <div class="col-md-12 block-3">
        <div class="nonloop-block-3 owl-carousel">
            <?php foreach($arResult["ITEMS"] as $item): ?>
                <div class="item">
                    <div class="item-entry">
                        <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="product-item md-height bg-gray d-block">
                            <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>" class="img-fluid">
                        </a>
                        <h2 class="item-title"><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item['NAME']?></a></h2>
                        <strong class="item-price">
                            <?php $formatedPrice = number_format($item['ITEM_PRICES'][0]['PRICE'], 2, '.', '');?>
                                <?php if ($item['PROPERTIES']['SALE']):?>
                                    <?php $discountPrice = number_format($item['ITEM_PRICES'][0]['PRICE']*0.5, 2,'.', '');?>
                                    <del>$<?=$formatedPrice?> </del>$<?=$discountPrice?>
                                <?php else:?>
                                    $<?=$formatedPrice?>
                                <?php endif;?>
                            </strong>
                        <?php if (!empty($item['PROPERTIES']['RATING'])): ?>
                                <div class="star-rating">
                                    <?php for ($i = 0; $i < $item['PROPERTIES']['RATING']; $i++): ?>
                                        <span class="icon-star2 text-warning"></span>
                                    <?php endfor; ?>
                                </div>
                           <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php endif; ?>
