<?php

class Accounts{

  protected $id;
  protected $name;
  protected $accountNumber;
  protected $sold;

  const defaultSold = 1000;

  // @@@@@@@@@@@@@@@@@@@@@ Constructor  @@@@@@@@@@@@@@@@@@@@@@@@

  public function __construct(array $donnes){
    $this->hydrate($donnes);
  }

  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  // @@@@@@@@@@@@@@@@@@@@@ Setters  @@@@@@@@@@@@@@@@@@@@@@@


    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of Account Number
     *
     * @param mixed accountNumber
     *
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Set the value of Sold
     *
     * @param mixed sold
     *
     * @return self
     */
    public function setSold($sold)
    {
      if(empty($sold)){
        $this->sold = self::defaultSold;
      }
      else{
        $this->sold = $sold;
      }
        return $this;
    }



// @@@@@@@@@@@@@@@@@@@@@ Getters  @@@@@@@@@@@@@@@@@@@@@@@

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of Account Number
     *
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Get the value of Sold
     *
     * @return mixed
     */
    public function getSold()
    {
        return $this->sold;
    }

}
