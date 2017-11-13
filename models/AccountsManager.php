<?php

class AccountsManager{

  private $_db;

  public function __construct ($db){

    $this->setDb($db);

  }

// Add new account in DB

  public function insert(Accounts $account){

    $req = $this->_db->preapre('INSERT INTO accounts VALUES (:name,:accountNumber,:sold)');
    $req = $this->_db->execute(['name' => $account->getName(),
                              'accountNumber' => $account->getAccountNumber(),
                              'sold' => $account->getSold()]);
  }

// Update account (change sold of account after operation)

  public function update(Accounts $account){

    $req = $this->_db->prepare('UPDATE accounts set sold = :sold WHERE id = :id');
    $req = $this->_db->execute(['sold' => $account->getSold(),
                                'id' => $account->getId()]);
  }

// Get all accounts and returns them into objects

  public function getAllAccounts(){

    $req = $this->_db->query('SELECT * FROM accounts');
    $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Accounts', array(array('id','name','accountNumber','sold')));
    $accounts = $req->fetchAll();
    return $accounts;

  }

// Get one account depe,ding on his id and return him into object

  public function getAccount($id){

    $req = $this->_db->prepare('SELECT * FROM accounts WHERE id = :id' );
    $req->execute(["id" => $id]);
    $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Accounts', array('id','name','accountNumber','sold'));
    $account = $req->fetch();
    return $account;
  }

// Delete account

  public function deleteAccount(Accounts $account){

     $req=$this->_db->prepare('DELETE FROM accounts WHERE id = :id');
     $req->execute(["id" => $article->getId()]);

 }

  public function setDb(PDO $db){

    $this->_db = $db;

  }
}
