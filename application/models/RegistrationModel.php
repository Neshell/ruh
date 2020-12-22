<?php


namespace Application\Models;


use Core\Model;

class RegistrationModel extends Model
{
    private $robotId;

    public function __construct()
    {
        parent::__construct();
    }

    public function registration($email, $password, $twoPassword, $name, $age, $sex)
    {
        if (!empty($email) && !empty($password) && !empty($twoPassword) && !empty($name) && !empty($age)) {
            if ($password == $twoPassword) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $validationEmail = $this->dataConnect->prepare('SELECT COUNT(*)FROM users WHERE email=:email');
                $validationEmail->bindParam(":email", $email);
                $validationEmail->execute();
                if ($validationEmail->fetchColumn() == '0') {
                    $createRobot = $this->dataConnect->prepare('INSERT INTO bodyPart (head, body, hand, leg) VALUES (1, 2, 3, 4)');
                    $createRobot->execute();
                    $this->robotId = $this->dataConnect->lastInsertId();

                    $insertRegistrationData = $this->dataConnect->prepare('INSERT INTO users(email, password, name, age, sex, robot_id) VALUES (:email, :password, :name, :age, :sex, :robot_id)');
                    $insertRegistrationData->bindParam(":email", $email);
                    $insertRegistrationData->bindParam(":password", $password);
                    $insertRegistrationData->bindParam(':name', $name);
                    $insertRegistrationData->bindParam(':age', $age);
                    $insertRegistrationData->bindParam(':sex', $sex);
                    $insertRegistrationData->bindParam(':robot_id', $this->robotId);
                    $insertRegistrationData->execute();
                    if ($insertRegistrationData){
                        $return = 'Аккаунт создан';
                    }
                } else {
                    $message = 'Такой email уже занят.';
                }
            } else {
                $message = 'Пароль не совпадает.';
            }
        } else {
            $message = 'Все поля должны быть заполнены';
        }
        if (!empty($message)) {
            $return = $message;
        }
        return $return;
    }
}