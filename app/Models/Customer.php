<?php
  declare(strict_types=1);

  $path = dirname(__DIR__, 1);
  $path .= '/Models/UserModel.php';
  require_once $path;

  class Customer extends User {

    public $userLevel="";

    public function setUserLevel($level) {
        $this->userLevel = $level;
    }
    
    public function getUserLevel() {
        return $this->userLevel;
    }
  }
?>