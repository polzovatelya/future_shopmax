<?php
if (!empty($arResult)) {
    // Разбиваем массив на 3 колонки
    $columnsCount = 3;
    $itemsPerColumn = ceil(count($arResult) / $columnsCount);
    $arResult['COLUMNS'] = array_chunk($arResult, $itemsPerColumn);
}
?>