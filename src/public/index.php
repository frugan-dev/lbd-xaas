<?php

declare(strict_types=1);

define('_ROOT', dirname(__DIR__).'/private/app');
define('_BOOT', __DIR__);
define('_PUBLIC', _BOOT);

(require _ROOT.'/bootstrap.php')->run();
