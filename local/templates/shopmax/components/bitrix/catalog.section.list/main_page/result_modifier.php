<?php ?>
<!--<pre>-->
<!--    --><?php //=print_r($arResult)?>
<!--</pre>-->

<?php
$arPrepItem = [];
if (!(empty($arResult))) {
    foreach ($arResult["SECTIONS"] as $arItem) {
        if ($arItem["UF_SHOW_ON_MAIN"]) {
            $arPrepItem[] = $arItem;
        }
    }
    $arResult = $arPrepItem;
}
?>