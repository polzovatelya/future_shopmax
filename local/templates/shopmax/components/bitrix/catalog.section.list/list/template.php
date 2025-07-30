<?php
if (!(empty($arResult))): ?>
    <div class="border p-4 rounded mb-4">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
        <ul class="list-unstyled mb-0">
            <?php foreach ($arResult['SECTIONS'] as $section): ?>
                <li class="mb-1"><a href="<?= $section["SECTION_PAGE_URL"] ?>"
                                    class="d-flex"><span><?= $section["NAME"] ?></span> <span
                                class="text-black ml-auto"><?= $section["ELEMENT_CNT"] ?></span></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
