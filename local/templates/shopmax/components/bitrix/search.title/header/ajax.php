<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
//print_r($arResult['CATEGORIES']);
if (!empty($arResult['CATEGORIES']) && $arResult['CATEGORIES_ITEMS_EXISTS']):?>
    <div class="search-suggestions visible">
        <?php foreach ($arResult['CATEGORIES'] as $category_id => $arCategory): ?>
            <?php foreach ($arCategory['ITEMS'] as $arItem): ?>
                <div class="search-suggestion-item">
                    <a href="<?= $arItem['URL'] ?>"><?= $arItem['NAME'] ?></a>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
<?php endif;
