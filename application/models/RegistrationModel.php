<?php


namespace Application\Models;


use Core\Model;

class RegistrationModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registration($email, $password, $twoPassword, $name, $age, $sex)
    {
        if (!empty($email) and !empty($password) and !empty($twoPassword) and !empty($name) and !empty($age) and !empty($sex)) {
            if (trim($password) === trim($twoPassword)) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $validationEmail = $this->dataConnect->prepare('SELECT COUNT(*)FROM users WHERE email=:email');
                $validationEmail->bindParam(":email", $email);
                $validationEmail->execute();
                if ($validationEmail->fetchColumn() == '0') {
                    var_dump($_POST);
                    $insertRegistrationData = $this->dataConnect->prepare('INSERT INTO users(email, password, name, age, sex) VALUES (:email, :password, :name, :age, :sex)');
                    $insertRegistrationData->bindParam(":email", $email);
                    $insertRegistrationData->bindParam(":password", $password);
                    $insertRegistrationData->bindParam(':name', $name);
                    $insertRegistrationData->bindParam(':age', $age);
                    $insertRegistrationData->bindParam(':sex', $sex);
                    $insertRegistrationData->execute();
                    if ($insertRegistrationData) {
                        echo 'Добавлено';
                    } else {
                        echo 'Нет';
                    }
                }
            } else {
                return 1;// что-то там вернуть пользователю.
            }
        }

    }
}