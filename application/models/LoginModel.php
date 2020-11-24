<?php


namespace Application\Models;

use PDO;


class LoginModel extends \Core\Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        if (!empty($email) && !empty($password)) {
            $checkIssetEmail = $this->dataConnect->prepare('SELECT COUNT(*)FROM users WHERE email=:email');
            $checkIssetEmail->bindParam(":email", $email);
            $checkIssetEmail->execute();
            if ($checkIssetEmail->fetchColumn() != '0') {
                $verifyEmail = $this->dataConnect->prepare('SELECT * FROM users WHERE email=:email');
                $verifyEmail->bindParam(":email", $email);
                $verifyEmail->execute();
                $returnData = $verifyEmail->fetch(PDO::FETCH_ASSOC);
                if ($email == $returnData['email'] && password_verify($password, $returnData['password'])) {
                    $return = 'Ок';
                }
            } else {
                $message = 'Нет такого аккаунта';
            }
        } else {
            $message = 'Заполните все поля';
        }
        return $return;
    }


}