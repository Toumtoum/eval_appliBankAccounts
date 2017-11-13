<?php

// @@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'headerC.php';

// @@@@@@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@

$accounts = $manager->getAllAccounts();


include PATH .'/views/home.php';

// @@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'footerC.php';
