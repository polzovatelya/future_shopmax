<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

if (!empty($arResult['ITEMS'])) {
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
    foreach ($arResult['ITEMS'] as &$item) {
        if(strlen($item["PREVIEW_TEXT"]) > 70) {
            $item["PREVIEW_TEXT"] = TruncateText($item["PREVIEW_TEXT"], 70) . "...";
        }
        $createDate = MakeTimeStamp($item['DATE_CREATE']);
        $item['NEW_LABEL'] = (time() - $createDate) < (30 * 86400);
    }
}