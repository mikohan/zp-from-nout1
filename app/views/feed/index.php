<?php
// ob_start();
ini_set('max_execution_time', 600);
ini_set("memory_limit", "512M");
include __DIR__ . '/helpers.php';

header('Content-type: application/xml');
header("Content-Type: text/xml; charset=utf-8");


$nal = isset($_GET['nal']) ?? 0;
$price_min = intval($_GET['price_min']);
$price_max = intval($_GET['price_max']);



# Описание магазина
$shop_name = 'Запчасти Портер';
$desc = "Запчасти для Портер1 и Портер2 в Москве";
$site = 'https://zapchastiporter.ru';
$cost = 1500;
$curr = "RUR";
$date_obj = new DateTime();
$date = $date_obj->format('Y-m-d');


// Getting categoreis from API
$cats = & $data2;
$categories = '';
foreach ($cats as $category) {
    $parent_ck = $category['parent'] ?? false;
    $parent = $parent_ck ? 'parentId="' . $category['parent'] . '"' : '';
    $id = $category['id'];
    $categories .= '<category id="' . $id . '" ' . $parent . '>' . $category['name'] . '</category>';
}
$products = & $data;

/*Name - Фильтр масляный на Портер 1, SPEEDMATE, 2630042040
Vendor - производителль = SPEEDMATE
Model - Марка + модель = Хендай портер
VendorCode - кат номер = 2630042040
Description - Большой склад в Москве. Пришлем видео и фото по запросу. Подбор запчастей по VIN. Самовывоз за 1 час. 20 лет на рынке. 100% гарантия возврата.
Фильтры:
от 20
10-20
5-10
1-5
В фиде исключить колеса и шины / масла и жидкости / инструменты / крепеж
*/
$offers = '';
$i = 0;
foreach ($products as $product) {
    $in_stock = intval($product['nal']);
    if ($in_stock == 0) {
        continue;
    }
    // One C id
    // $id = $product['1d_id'] ?? false;
    // if (!$id) {
    //     continue;
    // }
    // Price
    $price = $product['price'] ?? false;
    if (!$price) {
        continue;
    }


    $meta = make_cool($product['ang_name']);

    $name = str_replace("&", " ", $product['ang_name']);
    $product_id = $product['id'];

    $model = $meta['model'];
    $make = 'Хендай';
    $brand = str_replace("&", " " ,$meta['brand']);
    $cat_number = $meta['cat_number'];

    $url = ANG_HTTP . "/part/" . $product['1c_id'] . "/" . str2url($product['ang_name']) . "/";
    $imgs = [ANG_HTTP . "/public/img/parts/" . get_image($product['1c_id'])];

    $pictures = '';
    $j = 0;
    foreach ($imgs as $img) {
        $pictures .= "<picture>{$img}</picture>";
    }

    $category_id = $product['parent'];


    // Filtering by price
    if (($price_min <= $price) && ($price <= $price_max)) {
        $offers .= <<<HTML
    <offer id="{$product_id}">
        <name>{$name}</name>
        <url>{$url}</url>
        <price>{$product['price']}</price>
        <currencyId>{$curr}</currencyId>
        <categoryId>{$category_id}</categoryId>
        {$pictures}
        <model>{$make} {$model}</model>
        <vendorCode>{$cat_number}</vendorCode>
        <vendor>{$brand}</vendor>
        <description>Большой склад в Москве. Пришлем видео и фото по запросу. Подбор запчастей по VIN. Самовывоз за 1 час. 20 лет на рынке. 100% гарантия возврата.</description>
        <delivery>true</delivery>
        <pickup>true</pickup>
        <delivery-options>
        <option cost="{$cost}" days="1-3" order-before="18" />
        </delivery-options>
        <pickup-options>
        <option cost="0" days="1" />                        
        </pickup-options>
        <store>true</store>   
    </offer>
HTML;
    }

    // if ($i == 94) {
    //     break;
    // }
    $i++;
}

$out = <<<HTML
<?xml version="1.0" encoding="utf-8"?>
<yml_catalog date="{$date}">
    <shop>
        <name>{$shop_name}</name>
        <company>{$desc}</company>
        <url>{$site}</url>
        <currencies>
            <currency id="RUR" rate="1" />
        </currencies>
        <categories>
            {$categories}
            </categories>
        <offers>
            {$offers}
            </offers>
        </shop>
    </yml_catalog>
HTML;


echo $out;