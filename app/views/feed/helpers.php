<?php
function make_cool($old_name)
{
    $prod_name_arr = explode(' ', $old_name);
    $mod_rus_pos = array_search('ПОРТЕР', $prod_name_arr);
    $mod_rus_pos2 = array_search('ПОРТЕР2', $prod_name_arr);

    $filtered = array_filter($prod_name_arr, static function ($elem) {
        return $elem != "PORTER" && $elem != "ПОРТЕР" && $elem != "PORTER2" && $elem != "ПОРТЕР2";
    });
    $matches = preg_grep("/^\d+.+$/", $filtered);
    $cat_number = trim(implode(' ', $matches));

    $mod_name = 'Портер';
    if ($mod_rus_pos2) {
        $mod_name = 'Портер 2';
    }

    $name_arr_pos = array_search($cat_number, $filtered);
    if ($name_arr_pos) {
        unset($filtered[$name_arr_pos]);
    }

    $brand_match = preg_grep("/\b[a-zA-z]+\b/i", $filtered);
    $brand = trim(implode(' ', $brand_match));
    $brand_arr_pos = array_search($brand, $filtered);
    if ($brand_arr_pos) {
        unset($filtered[$brand_arr_pos]);
    } else {
        $brand = 'Оригинал';
    }

    $prod_name = trim(implode(' ', $filtered));
    $h1 = $prod_name . ' Хендай' . ' ' . $mod_name . ' ' . $cat_number . ' ' . $brand;
    
    // $title = 'Купить ' . $h1 . ' -запчасти, цены, схемы.';
    // $description = $prod_name . ' Хендай ' . $mod_name . ' в наличии. Интернет магазин запчастей на Портер в Москве. Гарантия возврата и доставка по всей России.';
    $ret = ['name' => $h1, 'brand' => $brand, 'cat_number' => $cat_number, 'model' => $mod_name];
    return $ret;
}