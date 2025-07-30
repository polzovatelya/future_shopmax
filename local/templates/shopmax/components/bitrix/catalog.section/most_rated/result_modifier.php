<?php
$maxRating = 0;

$ids = array_column($arResult['ITEMS'], 'ID');
$res = CIBlockElement::GetList(
    [],
    ['ID' => $ids],
    false,
    false,
    ['ID', 'IBLOCK_ID', 'PROPERTY_SALE', 'PROPERTY_RATING']
);

$props = [];
while ($ob = $res->Fetch()) {
    $props[$ob['ID']] = [
        'SALE' => $ob['PROPERTY_SALE_VALUE'],
        'RATING' => (!empty($ob['PROPERTY_RATING_VALUE']))?$ob['PROPERTY_RATING_VALUE']:0,

    ];
}

foreach ($arResult['ITEMS'] as &$item) {
    if (isset($props[$item['ID']])) {
        $item['PROPERTIES'] = array_merge(
            (array)$item['PROPERTIES'],
            $props[$item['ID']]
        );
    }
}
// Найдём максимальный рейтинг
foreach ($arResult["ITEMS"] as $item) {
    $rating = (float)$item["PROPERTIES"]["RATING"];
    if ($rating > $maxRating) {
        $maxRating = $rating;
    }
}
$arPrepItems = [];
foreach ($arResult["ITEMS"] as $item) {
    $rating= (float)$item["PROPERTIES"]["RATING"];
    $bestRating = ($rating == $maxRating && $rating > 0);
    if ($bestRating) {
        $arPrepItems[] = $item;
    }
}

$arResult['ITEMS'] = $arPrepItems;
?>

<!--<pre>-->
<!--    --><?php //=print_r($arResult["ITEMS"][0]["BEST_RATING"]);?>
<!--</pre>-->
