<?php

// @@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'headerC.php';

// @@@@@@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@

include PATH .'/views/addAccount.php';

if (isset($_POST['create']) && !empty($_POST['name'])){
// Instantiation of a new account object
  $account = new Accounts($_POST);
  var_dump($account);
// Adding that object into table
  $manager->insert($account);
}

// @@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'footerC.php';