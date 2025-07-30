<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contact");
?>

    <div class="site-blocks-cover inner-page" data-aos="fade">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_DIR . "include/contact_img.php"
            )
        );?>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="custom-border-bottom py-3">
        <div class="container">
            <div class="row">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "shopmax",
                    array(
                        "COMPONENT_TEMPLATE" => "shopmax",
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
                ); ?>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Get In Touch</h2>
                </div>
                <div class="col-md-7">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:form.result.new",
                        "feedback",
                        Array(
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHAIN_ITEM_LINK" => "",
                            "CHAIN_ITEM_TEXT" => "",
                            "EDIT_URL" => "",
                            "IGNORE_CUSTOM_TEMPLATE" => "N",
                            "LIST_URL" => "",
                            "SEF_MODE" => "N",
                            "SUCCESS_URL" => "/contact/success/",
                            "USE_EXTENDED_ERRORS" => "N",
                            "VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
                            "WEB_FORM_ID" => "1"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>