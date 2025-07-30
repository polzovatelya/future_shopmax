<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="row">
    <div class="col-md-12">
        <h3 class="footer-heading mb-4">Quick Links</h3>
    </div>
    <?php if (!empty($arResult['COLUMNS'])): ?>
        <?php foreach ($arResult['COLUMNS'] as $column): ?>
            <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                    <?php foreach ($column as $item): ?>
                        <li><a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
