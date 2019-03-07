<?php
require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Hello\SayHello;
echo SayHello::sayWorld();