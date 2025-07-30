<?php

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<?php
$INPUT_ID = trim($arParams['~INPUT_ID']);
if ($INPUT_ID == '')
{
	$INPUT_ID = 'title-search-input';
}
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams['~CONTAINER_ID']);
if ($CONTAINER_ID == '')
{
	$CONTAINER_ID = 'title-search';
}
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if ($arParams['SHOW_INPUT'] !== 'N'):?>
<div class="search-wrap">
    <div class="container">
	<form action="<?php echo $arResult['FORM_ACTION']?>">
        <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
		<input id="<?php echo $INPUT_ID?>" type="text" name="q" value="" class="form-control" maxlength="50" autocomplete="off" />
<!--        <div class="search-suggestions" id="title-search"></div>-->
	</form>
    <div class="search-suggestions" id="title-search"></div>
    </div>
</div>
<?php endif?>
<script>
	//BX.ready(function(){
	//	new JCTitleSearch({
	//		'AJAX_PAGE' : '<?php //echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>//',
	//		'CONTAINER_ID': '<?php //echo $CONTAINER_ID?>//',
	//		'INPUT_ID': '<?php //echo $INPUT_ID?>//',
	//		'MIN_QUERY_LEN': 2
	//	});
	//});
</script>
<?php
Asset::getInstance()->addString(
'<script>
    window.searchParams = {
        inputId: "'.$INPUT_ID.'",
        containerId: "'.$CONTAINER_ID.'",
        ajaxUrl: "'.CUtil::JSEscape(POST_FORM_ACTION_URI).'"
    };
</script>'
);
?>