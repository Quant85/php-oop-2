<?php
/**
 * Person 
 * l'utente fisico con le sue proprietà anagrafiche viene proiettato in maniera astratta nel sistema
 * @author Antonio Quattrocchi
 * @copyright 2021 A.Q.
 */

class Person {

  public $name;
  public $lastname;
  public $gender;
  public $dataOfBirth;
  public $age;
  public $address;

  public function __construct(string $name, string $lastname, string $gender, string $dataOfBirth, int $age, string $address)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->gender = $gender;
    $this->dataOfBirth = $dataOfBirth;
    $this->age = $age;
    $this->address = $address;
  }
}