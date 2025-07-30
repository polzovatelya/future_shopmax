<?php
$arPrepItems = [];
function normalizeMenuUrl($url) {
    return rtrim(str_replace('/index.php', '', $url), '/');
}

$currentPage = $APPLICATION->GetCurPage();

if (!empty($arResult)) {
    foreach ($arResult as $item) {
        $item['SELECTED'] = false;

        if (isset($item['LINK']) && rtrim($item['LINK'], '/') == rtrim($currentPage, '/')) {
            $item['SELECTED'] = true;
        }


        if ($item["DEPTH_LEVEL"] === 1) {
            // Добавляем основной пункт меню
            $arPrepItems[] = $item;
            $lastParentIndex = count($arPrepItems) - 1;
        }
        elseif ($item["DEPTH_LEVEL"] === 2) {
            // Добавляем подпункт второго уровня
            if (!isset($arPrepItems[$lastParentIndex]['subitems'])) {
                $arPrepItems[$lastParentIndex]['subitems'] = [];
            }
            $arPrepItems[$lastParentIndex]['subitems'][] = $item;
            $lastChildIndex = count($arPrepItems[$lastParentIndex]['subitems']) - 1;
        }
        elseif ($item["DEPTH_LEVEL"] === 3) {
            // Добавляем подпункт третьего уровня
            if (!isset($arPrepItems[$lastParentIndex]['subitems'][$lastChildIndex]['subitems'])) {
                $arPrepItems[$lastParentIndex]['subitems'][$lastChildIndex]['subitems'] = [];
            }
            $arPrepItems[$lastParentIndex]['subitems'][$lastChildIndex]['subitems'][] = $item;
        }
    }
}
$arResult = $arPrepItems;
?>