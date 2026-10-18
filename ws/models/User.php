<?php

require_once "interfaces/iToJson.php";

class User implements IToJson {
    private string $name;
    private string $apellidos;
    private string $mail;
    private string $password;
    private string $phone;
    private string $sex;

    public function __construct(string $name, string $apellidos, string $mail, string $password, string $phone, string $sex) {
        $this->name = $name;
        $this->apellidos = $apellidos;
        $this->mail = $mail;
        $this->password = $password;
        $this->phone = $phone;
        $this->sex = $sex;
    }

    public function getName() {
        return $this->name;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getSex() {
        return $this->sex;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setApellidos(string $apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setMail(string $mail) {
        $this->mail = $mail;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }

    public function setSex(string $sex) {
        $this->sex = $sex;
    }

    public function toJson() {
        return json_encode([
            "name" => $this->name,
            "apellidos" => $this->apellidos,
            "mail" => $this->mail,
            "password" => $this->password,
            "phone" => $this->phone,
            "sex" => $this->sex
        ]);
    }
}