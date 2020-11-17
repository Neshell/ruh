<?php


namespace Application\Models;


use Core\Model;

class MainModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registration($email, $password, $twoPassword)
    {
        if (!empty($email) and !empty($password) and !empty($twoPassword)) {
//            $password = password_hash($password, PASSWORD_DEFAULT);
            $validationEmail = $this->dataConnect->prepare('SELECT COUNT(*)FROM users WHERE email=:email');
            $validationEmail->bindParam(":email", $email);
            $validationEmail->execute();
            if ($validationEmail->fetchColumn() == '0') {
                $insertRegistrationData = $this->dataConnect->prepare('INSERT INTO users(email, password) VALUES (:email, :password)');
                $insertRegistrationData->bindParam(":email", $email);
                $insertRegistrationData->bindParam(":password", $password);
                $insertRegistrationData->execute();
                if ($insertRegistrationData) {
                    echo 'Добавлено';
                } else {
                    echo 'Нет';
                }
            }
        }
    }


}