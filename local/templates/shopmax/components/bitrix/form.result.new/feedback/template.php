<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $arResult
 */

if ($arResult["isFormErrors"] == "Y"):?><?= $arResult["FORM_ERRORS_TEXT"]; ?><?php endif; ?>

<?= $arResult["FORM_HEADER"] ?>

    <div class="p-3 p-lg-5 border">
        <?
        foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
        {
            if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
            {
                echo $arQuestion["HTML_CODE"];
            }
            else
            {
                $fieldHtml = $arQuestion['HTML_CODE'];

                $fieldHtml = preg_replace(
                    '/class="[^"]*"/',
                    'class="form-control"',
                    $fieldHtml
                );
                ?>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="text-black"><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?></label>
                        <?=$fieldHtml?>
                    </div>
                </div>
                <?
            }
        } //endwhile
        ?>

        <div class="form-group row">
            <div class="col-lg-12">

                <input
                    <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?>
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                        name="web_form_submit"
                        value="<?=
                        htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ?
                            GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>"
                />
            </div>
        </div>
    </div>

<!--    <p>-->
<!--        --><?php //= $arResult["REQUIRED_SIGN"]; ?><!-- - --><?php //= GetMessage("FORM_REQUIRED_FIELDS") ?>
<!--    </p>-->
<?= $arResult["FORM_FOOTER"] ?>