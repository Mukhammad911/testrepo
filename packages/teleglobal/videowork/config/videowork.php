<?php

return [

    'DB_HOST' => env('DB_HOST', 'localhost'),
    'DB_DATABASE' => env('DB_DATABASE', 'tvapi'),
    'DB_USER' => env('DB_USER', 'tvapi'),
    'DB_PASSWORD' => env('DB_PASSWORD', 'dotafumiga'),
    'DEFAULT_TITLE' => env('DEFAULT_TITLE', 'Sunduk IPTV Monitor'),
    'BASEDIR' => env('BASEDIR', '/'),
    'PANEL_HEADER' => env('PANEL_HEADER', 'Sunduk IPTV Monitor'),
    'DIR_VOD' => env('DIR_VOD', '/home/jenkins/vod/vod/'),
    'DIR_VODWRK' => env('DIR_VODWRK', '/home/jenkins/vodwrk/vod/'),

    /* RPC SERVER */
    'RPC_AUTH' => env('RPC_AUTH', '111:222'),
    'RPC_SECRET' => env('RPC_SECRET', 'mamba123'),
    'RPC_HOST' => env('RPC_HOST', '127.0.0.1'),
    'RPC_PORT' => env('RPC_PORT', '6800'),
    'VOD_LINK_DIR_TORRENTS' => env('VOD_LINK_DIR_TORRENTS', 'admin.sunduk.tv:8085/torrents/'),

];