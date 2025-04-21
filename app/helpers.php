<?php

use App\Models\Banner;


function getBanner($key) {
    return Banner::where('key', $key)->first()->image;
}

function getBannerList($key, $limit = null, $order = 'asc') {
    $query = Banner::where('key', $key);
    if ($limit) {
        $query->limit($limit);
    }
    return $query->orderBy('created_at', $order)->get();
}
