<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('marco@-ssad.com'));
var_dump(App\Validate::url('https://devitm.com'));
var_dump(App\Validate::password('sTestkj90820'));