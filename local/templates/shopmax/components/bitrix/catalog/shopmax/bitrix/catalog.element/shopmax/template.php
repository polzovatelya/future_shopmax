<!---->
<!--<pre>-->
<!--        --><?php //=print_r($arResult)?>
<!--    </pre>-->

<?php if (!(empty($arResult))): ?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="item-entry">
                        <a href="<?= $arResult["ORIGINAL_PARAMETERS"]["DETAIL_URL"] ?>"
                           class="product-item md-height bg-gray d-block">
                            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                                 alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-black"><?= $arResult["NAME"] ?></h2>
                    <?php if (!empty($arResult['NEW_LABEL'])): ?>
                        <span style="
                                display: inline-block;
                                background: #ff0000;
                                color: white;
                                font-weight: bold;
                                padding: 2px 8px;
                                border-radius: 12px;
                                font-size: 12px;
                                margin-left: 8px;
                                vertical-align: middle;
                            ">NEW</span>
                    <?php endif; ?>
                    <?php if (!empty($arResult['PROPERTIES']['RATING']['VALUE'])): ?>
                        <div class="star-rating">
                            <?php for ($i = 0; $i < $arResult['PROPERTIES']['RATING']['VALUE']; $i++): ?>
                                <span class="icon-star2 text-warning"></span>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                    <p><?= $arResult["DETAIL_TEXT"] ?></p>
                    <p><strong class="text-primary h4">
                            <?php $formatedPrice = number_format($arResult['ITEM_PRICES'][0]['PRICE'], 2, '.', ''); ?>
                            <?php if ($arResult['PROPERTIES']['SALE']): ?>
                                <?php $discountPrice = number_format($arResult['ITEM_PRICES'][0]['PRICE'] * 0.5, 2, '.', ''); ?>
                                <del>$<?= $formatedPrice ?> </del>$<?= $discountPrice ?>
                            <?php else: ?>
                                $<?= $formatedPrice ?>
                            <?php endif; ?>
                        </strong>
                    </p>
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder=""
                                   aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>
                    </div>
                    <button class="wishlist-btn buy-now btn btn-sm height-auto px-4 py-3 btn-primary" data-product-id="<?= $arResult['ID'] ?>">
                       Add to wishlist
                    </button>

<!--                    <script>-->
<!--                        // Инициализация кнопки избранного-->
<!--                        document.querySelectorAll('.wishlist-btn').forEach(btn => {-->
<!--                            btn.addEventListener('click', function() {-->
<!--                                const productId = this.dataset.productId;-->
<!--                                if (typeof window.toggleWishlist === 'function') {-->
<!--                                    window.toggleWishlist(productId);-->
<!--                                }-->
<!--                            });-->
<!--                        });-->
<!--                    </script>-->


                </div>
            </div>
        </div>
    </div>
<?php endif; ?>