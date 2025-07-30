<?php
if (!(empty($arResult))):
    shuffle($arResult['ITEMS']);
    $banner = $arResult['ITEMS'][0];

    ?>
<!--    <pre>-->
<!--        --><?php //= print_r($arResult) ?>
<!--    </pre>-->
    <div class="row">
        <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
                <h2 class="sub-title"><?= $banner["PREVIEW_TEXT"] ?></h2>
                <h1><?= $banner["NAME"] ?></h1>
                <p><a href="<?= $banner["DETAIL_PAGE_URL"]?>"
                      class="btn btn-black rounded-0"><?= $banner["PROPERTIES"]["TEXT_BTN"]["VALUE"] ?></a></p>
            </div>
        </div>
        <div class="col-md-6 order-1 align-self-end">
            <img src="<?= $banner["PREVIEW_PICTURE"]["SRC"] ?>" alt="Image" class="img-fluid">
        </div>
    </div>
<?php endif; ?>