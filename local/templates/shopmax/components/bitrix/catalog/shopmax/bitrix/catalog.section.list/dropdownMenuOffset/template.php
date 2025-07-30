<?php
if (!(empty($arResult))):?>

<div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
    <?php foreach ($arResult['SECTIONS'] as $section):
        $url = $section['SECTION_PAGE_URL'];

        // Добавляем параметр сортировки если он есть
        if (isset($arParams['ADDITIONAL_PARAMS']['sort'])) {
            $url .= (strpos($url, '?') === false ? '?' : '&') . 'sort=' . urlencode($arParams['ADDITIONAL_PARAMS']['sort']);
        }
        ?>
        <a class="dropdown-item" href="?category=<?=strtolower($section["NAME"])?>"><?= $section["NAME"] ?></a>
    <?php endforeach; ?>
    <a class="dropdown-item" href="?">All</a>
</div>
<?php endif; ?>