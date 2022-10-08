<?php

namespace Lessons;

class Employee_private
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        } else {
            echo "Вказане значення {$age} не відповідає умовам!" . "<br/>";
        }
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary . "$";
    }

    private function isAgeCorrect($age)
    {
        return ($age >= 1 and $age < 100);
    }

    public function showInfo()
    {
        echo "Employee: <br/>";
        echo "Name " . $this->getName() . "<br />";
        echo "Age " . $this->getAge() . "<br />";
        echo "Salary " . $this->getSalary() . "<br />";
    }
}
