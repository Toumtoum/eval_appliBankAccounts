<?php

// @@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'headerC.php';

// @@@@@@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@

// retreiving all accounts in database
$accounts = $manager->getAllAccounts();

include PATH .'/views/home.php';

// @@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'footerC.php';
