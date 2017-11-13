<?php

class AccountsManager{

  protected $db;

  public function ___construct ($db){

    $this->setDb($db);

  }

// Add new account in DB

  public function insert(Accounts $account){

    $req = $this->db->preapre('INSERT INTO accounts VALUES (:name,:accountNumber,:sold)');
    $req = $this->db->execute(['name' => $account->getName(),
                              'accountNumber' => $account->getAccountNumber(),
                              'sold' => $account->getSold()]);
  }

// Update account (change sold of account after operation)

  public function update(Accounts $account){

    $req = $this->db->prepare('UPDATE accounts set sold = :sold WHERE id = :id');
    $req = $this->db->execute(['sold' => $account->getSold(),
                                'id' => $account->getId()]);
  }

// Get all accounts and returns them into objects

  public function getAllAccounts(){

    $req = $this->db->query('SELECT * FROM accuonts' );
    $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Accounts', array('id','name','accountNumber','sold'));
    $accounts = $request->fetchAll();
    return $accounts;

  }

// Get one account depe,ding on his id and return him into object

  public function getAccount($id){

    $req = $this->db->prepare('SELECT * FROM accuonts WHERE id = :id' );
    $req->execute(["id" => $id]);
      $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Accounts', array('id','name','accountNumber','sold'));
      $account = $request->fetch();
      return $account;
  }

// Delete account

function deleteAccount(Accounts $account){

     $req = $this->db->prepare('DELETE FROM accounts WHERE id = :id');
     $req->execute(["id" => $article->getId()]);
     
 }

}
