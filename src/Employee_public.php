<?php

namespace Lessons;

class Employee_public
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
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

    public function showInfo()
    {
        echo "Employee: <br/>";
        echo "Name " . $this->getName() . "<br />";
        echo "Age " . $this->getAge() . "<br />";
        echo "Salary " . $this->getSalary() . "<br />";
    }
}
