<?php

// @@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'headerC.php';

// @@@@@@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@

// retreiving all accounts in database
$accounts = $manager->getAllAccounts();

if (isset($_POST['delete']) && !empty($_POST['account'])){
// Instantiation of a new account object
  $account = $manager->getAccount($_POST['account']);
// Deleting the account
  $manager->deleteAccount($account);
  header('location:homeC.php');
}

include PATH .'/views/delete.php';

// @@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'footerC.php';
