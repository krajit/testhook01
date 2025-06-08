<?php

$callbacks = [
    [
        'hook' => \core\hook\output\after_standard_main_region_html_generation::class,
        'callback' => [\local_testhook01\callbacks::class, 'inject_hello_message_new'],
        'priority' => 100,
    ],

];