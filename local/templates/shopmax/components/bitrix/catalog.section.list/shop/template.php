<?php if (!(empty($arResult))): ?>


    <?php $tripleSection = intdiv(count($arResult['SECTIONS']),3)?>
    <?php $remainder = count($arResult['SECTIONS']) - $tripleSection*3?>
    <div class="row align-items-stretch">
    <?php for ($i = 0; $i < $tripleSection*3; $i+=3): ?>
        <div class="col-lg-8 mb-4">
            <div class="product-item sm-height full-height bg-gray">
                <a href="<?=$arResult['SECTIONS'][$i]["SECTION_PAGE_URL"]?>" class="product-category"><?=$arResult['SECTIONS'][$i]["NAME"]?><span> <?=$arResult['SECTIONS'][$i]["ELEMENT_CNT"] . " items"?></span></a>
                <img src="<?=$arResult['SECTIONS'][$i]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
                <a href="<?=$arResult['SECTIONS'][$i+1]["SECTION_PAGE_URL"]?>" class="product-category"><?=$arResult['SECTIONS'][$i+1]["NAME"]?><span><?=$arResult['SECTIONS'][$i+1]["ELEMENT_CNT"] . " items"?></span></a>
                <img src="<?=$arResult['SECTIONS'][$i+1]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
            <div class="product-item sm-height bg-gray mb-4">
                <a href="<?=$arResult['SECTIONS'][$i+2]["SECTION_PAGE_URL"]?>" class="product-category"><?=$arResult['SECTIONS'][$i+2]["NAME"]?><span><?=$arResult[$i+2]["ELEMENT_CNT"] . " items"?></span></a>
                <img src="<?=$arResult['SECTIONS'][$i+2]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
        </div>
    <?php endfor; ?>
    <?php for ($i = $tripleSection*3; $i < count($arResult['SECTIONS']); $i++): ?>
        <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
                <a href="#" class="product-category"><?=$arResult['SECTIONS'][$i]["NAME"]?><span><?=$arResult['SECTIONS'][$i]["ELEMENT_CNT"] . " items"?></span></a>
                <img src="<?=$arResult['SECTIONS'][$i]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
        </div>
    <?php endfor; ?>
    </div>
<?php endif; ?>
<!--<pre>-->
<!--    --><?php //=print_r($arResult['SECTIONS'])?>
<!--</pre>-->
