<?php

require __DIR__ . "/ControllerDB.php";

class accountService extends ControllerDB{

	public function insert($account)
	{
		$stmt = $this->connection->prepare("INSERT INTO `account` ( 'username', `password`) VALUES (?, ?)");

        $username = $account->getUsername();
        $password = $account->getPassword();

        $stmt->bind_param("ss", $username,$password); 

        $process = $stmt->execute();

        if ($process) {
            $stmt->close();
            return true;
        }
        
        $this->errorMessage = $stmt->error;
        $stmt->close();
        return false;
	}
}

require __DIR__ . "/../Models/accountModel.php";
	$account = new accountModel();
    $account->setUsername("baikinpesepeda");
    $account->setPassword("baik");

    $service = new accountService;

    $process = $service->insert($account);

    if ($process) {
        print_r("Process successful");
    } else {
        print_r("Process failed");
    }
?>