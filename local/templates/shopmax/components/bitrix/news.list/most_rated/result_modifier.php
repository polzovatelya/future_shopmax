<?php
$maxRating = 0;

// Найдём максимальный рейтинг
foreach ($arResult["ITEMS"] as $item) {
    $rating = (float)$item["PROPERTIES"]["RATING"]["VALUE"];
    if ($rating > $maxRating) {
        $maxRating = $rating;
    }
}
$arPrepItems = [];
foreach ($arResult["ITEMS"] as $item) {
    $rating= (float)$item["PROPERTIES"]["RATING"]["VALUE"];
    $bestRating = ($rating == $maxRating && $rating > 0);
    if ($bestRating) {
        $arPrepItems[] = $item;
    }
}
$arResult = $arPrepItems;
?>

<!--<pre>-->
<!--    --><?php //=print_r($arResult["ITEMS"][0]["BEST_RATING"]);?>
<!--</pre>-->
