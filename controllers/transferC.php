<?php

// @@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'headerC.php';

// @@@@@@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@

if (isset($_POST['transfer']) && !empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['amount'])){

  if ($_POST['from'] == $_POST['to']){
    echo "you have to choose different accounts";
  }
  else {
    // create an instance of creditor object and update his Sold
    $debitor = $manager->getAccount($_POST['from']);
    $test = $debitor->debit($_POST['amount']);
    $manager->update($debitor);

    // create an instance of debitor object and update his Sold
    if ($test){
    $creditor = $manager->getAccount($_POST['to']);
    $creditor->credit($_POST['amount']);
    $manager->update($creditor);
    header('location:homeC.php');
    }

      else {?>
        <div class="error"><p>OPERATION DENIED</p></div>
      <?php }


  }
}

// retreiving all accounts in database
$accounts = $manager->getAllAccounts();

include PATH .'/views/transfer.php';

// @@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'footerC.php';
