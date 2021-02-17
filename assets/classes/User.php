<?php

include_once __DIR__ . "/Person.php";

/**
 * class User
 * è un utente registrato che oltre a poter visionare il contenuto del blog come un qualunque Person" può commentare ed interagire con gl'altri utenti del blog
 * @author Antonio Quattrocchi
 * @copyright 2021 A.Q.
 */

class User extends Person {
  public $accountId;
  public $accountName;
  public $accountPassword;
  public $phonewNumber;
  public $email;
  public $active;
  public $messageId;//box dei messaggi dell'utente
  public $postSaveId;//box dei post salvati dall'utente
  public $lastLogin;
  public $loked;
  public $accountGroup;
  public $img;

  public function __construct(string $name, string $lastname, string $gender, string $dataOfBirth, int $age, string $address, string $accountId, string $accountName,string $accountPassword, string $phonewNumber, string $email, bool $active, int $messageId, int $postSaveId, string $lastLogin, bool $loked, bool $isAdmin,bool $isModerator,bool $isWriter, string $img )
  {
    parent::__construct($name,$lastname,$gender, $dataOfBirth,$age,$address);
    
    $this->accountId = $accountId;
    $this->accountName = $accountName;
    $this->accountPassword = $accountPassword;
    $this->phonewNumber = $phonewNumber;
    $this->email = $email;
    $this->active = $active;
    $this->messageId = $messageId;
    $this->postSaveId = $postSaveId;
    $this->lastLogin = $lastLogin;
    $this->loked = $loked;
    $this->isAdmin = $isAdmin;
    $this->isModerator = $isModerator;
    $this->isWriter = $isWriter;
    $this->img = $img;
  }

  public function getFullName() {
    return "Nome: {$this->name}  <br> Cognome: {$this->lastname}";
  }
}