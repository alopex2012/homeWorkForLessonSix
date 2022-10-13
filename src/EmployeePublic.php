<?php


class EmployeePublic
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

    public function getInfo()
    {
        return ("Employee: <br/>" .
            "Name " . $this->getName() . "<br />" .
            "Age " . $this->getAge() . "<br />" .
            "Salary " . $this->getSalary() . "<br />");
    }
}
