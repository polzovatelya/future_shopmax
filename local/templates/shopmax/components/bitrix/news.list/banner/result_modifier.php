<?php
$arPrepItem = [];
if (!(empty($arResult))){
    foreach($arResult["ITEMS"] as $arItem)

        if(empty($arItem["PREVIEW_PICTURE"]["SRC"])) {
            $arItem["PREVIEW_PICTURE"]["SRC"] = SITE_TEMPATE_PATH . " /assets/images/model_7.png";
        }
        if(strlen($arItem["PREVIEW_TEXT"]) > 70) {
            $arItem["PREVIEW_TEXT"] = TruncateText($arItem["PREVIEW_TEXT"], 70);
        }
        if(empty($arItem["PROPERTIES"]["LINK_BTN"]["VALUE"])) {
            $arItem["PROPERTIES"]["LINK_BTN"]["VALUE"] = '#';
        }
}
?>