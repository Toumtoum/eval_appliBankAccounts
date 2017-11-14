<?php

class AccountsManager{

  private $_db;

  public function __construct ($db){

    $this->setDb($db);

  }

// Add new account in DB

  public function insert(Accounts $account){

    $req = $this->_db->prepare('INSERT INTO accounts (name,sold) VALUES (:name,:sold)');
    $req -> execute(['name' => $account->getName(),
                              'sold' => $account->getSold()]);
  }

// Update account (change sold of account after operation)

  public function update(Accounts $account){

    $req = $this->_db->prepare('UPDATE accounts set sold = :sold WHERE id = :id');
    $req -> execute(['sold' => $account->getSold(),
                                'id' => $account->getId()]);
  }

// Get all accounts and returns them into objects

  public function getAllAccounts(){

    $req = $this->_db->query('SELECT * FROM accounts');
    $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Accounts', array(array('id','name','sold')));
    $accounts = $req->fetchAll();
    return $accounts;

  }

// Get one account depe,ding on his id and return him into object

  public function getAccount($id){

    $req = $this->_db->prepare('SELECT * FROM accounts WHERE id = :id' );
    $req->execute(["id" => $id]);
    $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Accounts', array(array('id','name','sold')));
    $account = $req->fetch();
    return $account;
  }

// Delete account

  public function deleteAccount(Accounts $account){

     $req=$this->_db->prepare('DELETE FROM accounts WHERE id = :id');
     $req->execute(["id" => $account->getId()]);

 }

  public function setDb(PDO $db){

    $this->_db = $db;

  }
}
