
<?php
if(empty($arResult)) {
    return "";
}

$result = '<div class="col-md-12 mb-0">';
$elemCount = count($arResult);
foreach ($arResult as $index => $item) {
    $link = (!empty($item['LINK']) && $index<($elemCount-1)) ? $item['LINK'] : '#';
    $title = $item["TITLE"] ?? "";
    if ($item["LINK"] !== "" && $index !== ($elemCount-1)) {
        $result .= '<a href="' . $link . '">' . $title . '</a><span class="mx-2 mb-0">/</span>';
    } else{
        $result .= '<strong class="text-black">'. $title . '</strong>';
    }

}
$result .= '</div>';
return $result;
?>
<!--<div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>-->