<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */
$createDate = MakeTimeStamp($arResult['DATE_CREATE']);
$arResult['NEW_LABEL'] = ((time() - $createDate) < (30 * 86400));
$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();