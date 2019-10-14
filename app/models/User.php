<?php

namespace models;

class User
{
  private $username;
  private $password;
  private $fullname;

  function __construct($username, $password, $fullname)
  {
    $this->username = $username;
    $this->password = $password;
    $this->fullname = $fullname;
  }

  function toJson()
  {
    // var_dump($this);
    return json_encode($this);
  }
}
