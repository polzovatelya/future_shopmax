<?php if (!(empty($arResult))): ?>
    <?php $tripleSection = intdiv(count($arResult),3)?>
    <?php $remainder = count($arResult) - $tripleSection*3?>
    <div class="row align-items-stretch">
<!--        <pre>-->
<!--            --><?php //=print_r($arResult)?>
<!--        </pre>-->
    <?php for ($i = 0; $i < $tripleSection*3; $i+=3): ?>
        <div class="col-lg-8 mb-4">
            <div class="product-item sm-height full-height bg-gray">
                <a href="<?=$arResult[$i]["SECTION_PAGE_URL"]?> " class="product-category"><?=$arResult[$i]["NAME"]?><span><?=$arResult[$i]["ELEMENT_CNT"] . "items"?></span></a>
                <img src="<?=$arResult[$i]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
                <a href="<?=$arResult[$i+1]["SECTION_PAGE_URL"]?>" class="product-category"><?=$arResult[$i+1]["NAME"]?><span><?=$arResult[$i+1]["ELEMENT_CNT"] . "items"?></span></a>
                <img src="<?=$arResult[$i+1]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
            <div class="product-item sm-height bg-gray mb-4">
                <a href="<?=$arResult[$i+2]["SECTION_PAGE_URL"]?>" class="product-category"><?=$arResult[$i+2]["NAME"]?><span><?=$arResult[$i+2]["ELEMENT_CNT"] . "items"?></span></a>
                <img src="<?=$arResult[$i+2]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
        </div>
    <?php endfor; ?>
    <?php for ($i = $tripleSection*3; $i < count($arResult); $i++): ?>
        <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
                <a href="<?=$arResult[$i]["SECTION_PAGE_URL"]?>" class="product-category"><?=$arResult[$i]["NAME"]?><span><?=$arResult[$i]["ELEMENT_CNT"] . "items"?></span></a>
                <img src="<?=$arResult[$i]["PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
            </div>
        </div>
    <?php endfor; ?>
    </div>
<?php endif; ?>