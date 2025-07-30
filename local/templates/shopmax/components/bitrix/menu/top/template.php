<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?php if (!empty($arResult)): ?>
    <div class="main-nav d-none d-lg-block">
        <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
                <?php foreach ($arResult as $key => $item): ?>
                    <?php if (is_numeric($key) && isset($item['TEXT'])): // Основные пункты меню ?>
                        <li class="
                            <?= (!empty($item['subitems']) ? 'has-children' : '') ?>
                            <?= ($item['SELECTED'] ? 'active' : '') ?>
                        ">
                            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>

                            <?php if (!empty($item['subitems'])): ?>
                                <ul class="dropdown">
                                    <?php foreach ($item['subitems'] as $subKey => $subitem): ?>
                                        <?php if (is_numeric($subKey) && isset($subitem['TEXT'])): ?>
                                            <li class="<?= (!empty($subitem['subitems']) ? 'has-children' : '') ?>">
                                                <a href="<?= $subitem['LINK'] ?>"><?= $subitem['TEXT'] ?></a>

                                                <?php if (!empty($subitem['subitems'])): ?>
                                                    <ul class="dropdown">
                                                        <?php foreach ($subitem['subitems'] as $subSubItem): ?>
                                                            <li>
                                                                <a href="<?= $subSubItem['LINK'] ?>"><?= $subSubItem['TEXT'] ?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
<?php endif; ?>