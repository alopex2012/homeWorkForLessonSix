<?php


class User
{
    private $name;
    private $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        } else {
            throw new InvalidArgumentException("Вказане значення {$age} не відповідає умовам!" . "<br/>");
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    private function isAgeCorrect($age)
    {
        return ($age >= 18 and $age <= 60);
    }
}
