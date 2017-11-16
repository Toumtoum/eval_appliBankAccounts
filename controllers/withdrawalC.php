<?php

// @@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'headerC.php';

// @@@@@@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@

// retreiving all accounts in database
$accounts = $manager->getAllAccounts();

if (isset($_POST['withdraw']) && !empty($_POST['from']) && !empty($_POST['amount'])){

  if($_POST['amount'] > 0){
    // create an instance of creditor object and update his Sold
    $debitor = $manager->getAccount($_POST['from']);
    $test = $debitor->debit($_POST['amount']);
    if ($test){
    $manager->update($debitor);
    header('location:homeC.php');
    }
    else {?>
      <div class="error"><p>OPERATION DENIED</p></div>
    <?php }

  }

  else{
    {?>
      <div class="error"><p>YOU MUST ENTER A VALIDE AMOUNT</p></div>
    <?php }
  }
}

include PATH .'/views/withdrawal.php';

// @@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@

include 'footerC.php';
