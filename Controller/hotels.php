<?php
require_once '_config.php';
include_once MODEL.'getFileNumber.php';

$c = getFileNumber('./assets/stock-images/hotels/');  

require_once VIEW.'_head.php';

require_once VIEW.'hotels.php';

require_once VIEW.'_footer.php';