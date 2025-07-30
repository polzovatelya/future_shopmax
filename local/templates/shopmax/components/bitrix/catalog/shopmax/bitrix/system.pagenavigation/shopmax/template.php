<?php if ($arResult["NavPageCount"] > 1): ?>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="site-block-27">
                <ul>
                    <?php // Кнопка "Назад" ?>
                    <?php if ($arResult["NavPageNomer"] > 1): ?>
                        <li>
                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&lt;</a>
                        </li>
                    <?php else: ?>
                        <li class="disabled"><span>&lt;</span></li>
                    <?php endif; ?>

                    <?php // Нумерация страниц ?>
                    <?php for ($i = 1; $i <= $arResult["NavPageCount"]; $i++): ?>
                        <?php if ($i == $arResult["NavPageNomer"]): ?>
                            <li class="active"><span><?=$i?></span></li>
                        <?php else: ?>
                            <li>
                                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$i?>"><?=$i?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php // Кнопка "Вперед" ?>
                    <?php if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
                        <li>
                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&gt;</a>
                        </li>
                    <?php else: ?>
                        <li class="disabled"><span>&gt;</span></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>