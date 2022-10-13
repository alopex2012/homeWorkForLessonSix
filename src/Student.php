<?php


class Student
{
    public $name;
    public $course;

    public function __construct($name, $course)
    {
        $this->name = $name;
        $this->age = $course;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->age;
    }

    public function transferToNextCourse()
    {
        if ($this->checkNextCourse()) {
            $this->course += 1;
        }
    }

    private function checkNextCourse()
    {
        return ($this->course < 5);
    }

    public function getInfo()
    {
        return ("Student: <br/>" .
            "Name " . $this->getName() . "<br />" .
            "Course " . $this->getCourse() . "<br />");
    }
}
