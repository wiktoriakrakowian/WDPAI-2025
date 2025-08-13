<?php
class User {
    private $email;
    private $password;
    private $name;
    private $surname;

    /**
     * User constructor.
     * @param $email
     * @param $password
     * @param $name
     * @param $surname
     */
    public function __construct(string $email, string $password, string $name, string $surname) {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email) {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password) {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname) {
        $this->surname = $surname;
    }
}