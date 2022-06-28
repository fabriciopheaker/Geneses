<?php

namespace App\model;


class UserModel extends Model
{
  /** @var array no update or create */
  protected static $safe = ["id"];

  /** @var string $entity database table */
  protected static $entity = "Users";



  public function bootstrap()
  {
    # code...
  }

  public function load(int $id, string $columns = "*")
  {
    $load = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE id = :id", "id={$id}");
    if ($this->fail() || !$load->rowCount()) {
      echo $this->message("usuario não encontrado para o Id informado");
      return null;
    }
    return $load->fetchObject(__CLASS__);
  }



  public function find(string $email, string $columns = "*")
  {
    $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE email = :email", "email={$email}");
    if ($this->fail() || !$find->rowCount()) {
      echo $this->message("usuario não encontrado para o email informado");
      return null;
    }
    return $find->fetchObject(__CLASS__);
  }

  public function all($limite = 30, $offset = 0)
  {
  }

  public function save()
  {
  }
  public function destroy()
  {
  }
  private function required()
  {
  }
}
