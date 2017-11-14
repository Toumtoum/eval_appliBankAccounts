<?php

// @@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'headerC.php';

// @@@@@@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@

// retreiving all accounts in database
$accounts = $manager->getAllAccounts();

if (isset($_POST['transfer']) && !empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['amount'])){

  if ($_POST['from'] == $_POST['to']){
    echo "you have to choose different accounts";
  }
  else {
    // create an instance of creditor object and update his Sold
    $debitor = $manager->getAccount($_POST['from']);
    $debitor->debit($_POST['amount']);
    $manager->update($debitor);

    // create an instance of debitor object and update his Sold
    $creditor = $manager->getAccount($_POST['to']);
    $creditor->credit($_POST['amount']);
    $manager->update($creditor);

  }
}

include PATH .'/views/transfer.php';

// @@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'footerC.php';
