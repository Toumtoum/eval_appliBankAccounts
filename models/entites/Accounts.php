<?php

class Accounts{

  protected $id;
  protected $name;
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
      // use of htlmspecialchars to prevent potential sql injection
        $value = htmlspecialchars($name);
        $this->name = $value;

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
      else if (is_int($sold)){
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
     * Get the value of Sold
     *
     * @return mixed
     */
    public function getSold()
    {
        return $this->sold;
    }

// @@@@@@@@@@@@@@@@@@@@@ Methods  @@@@@@@@@@@@@@@@@@@@@@@

  public function credit(int $amount){

    $this->sold += $amount;

  }

  public function debit(int $amount){

    if ($amount < $this->sold){
    $this->sold -= $amount;
    return $this;
    }
    else {
      return false;
    }

  }

}
