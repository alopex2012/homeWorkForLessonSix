<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework for Lesson 6</title>
    <style>
        body {
            max-width: 800;
        }
    </style>
</head>

<body>

    <h5>Заняття 6. Модифікатори доступу. Конструктор. Геттери та сеттери.</h5>
    <hr>

    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    echo "<pre>",
    "
    1.	Не підглядаючи в мій код, внесіть такі ж правки до класу User.
    2.	Спробуйте спричинити метод, що використовуєтьсяназавжди зовні класу. Переконайтеся, що це викликатиме помилку.
    ",
    "</pre>";

    $user1 = new Lessons\User();
    $user1->setName("John");
    $user1->setAge(25);
    echo "Ім'я користувача: " . $user1->getName() . "<br />";
    echo "Вік користувача: " . $user1->getAge() . "<br />";
    $user1->setAge(70);
    echo "Вік користувача: " . $user1->getAge() . "<br />";
    //echo user1->isAgeCorrect(); //Виклик приватного метода ззовні призводит до помилки 

    echo "<hr />";

    echo "<pre>",
    "
    3.  Зробіть клас Student із властивостями $name та $course (курс студента, від 1-го до 5-го).
    4.	У класі Student зробіть public метод transferToNextCourse, який перекладатиме студента на наступний курс.
    5.	Виконайте в методі transferToNextCourse перевірку на те, що наступний курс не більше 5.
    6.	Винесіть перевірку курсу в окремому приватному методі.
    ",
    "</pre>";
    $student1 = new Lessons\Student("Rick", 5);
    $student1->showInfo();
    $student1->transferToNextCourse(); //Спроба перевести студента на наступній курс
    $student1->showInfo();

    echo "<hr />";

    echo "<pre>",
    "
    7.	Зробіть клас Employee, у якому будуть такі громадські характеристики - name, age, salary.
    Зробіть те щоб ці властивості заповнювалися в конструкторі під час створення об'єкта.
    8.	Створіть об'єкт класу Employee з ім'ям eric, віком 25, зарплатою 1000.
    9.	Створіть об'єкт класу Employee з ім'ям kyle, віком 30, зарплатою 2000.
    10.	Виведіть на екран суму зарплат створених вами користувачів.
    ",
    "</pre>";
    $employee1 = new Lessons\Employee_public("Eric", 25, 1000);
    $employee1->showInfo();
    $employee2 = new Lessons\Employee_public("Kyle", 30, 2000);
    $employee2->showInfo();
    echo "Сума зарплат працівників {$employee1->getName()} та {$employee2->getName()} складає: " . ($employee1->getSalary() + $employee2->getSalary()) . "$" . "<br />";

    echo "<hr />";

    echo "<pre>",
    "
    11.	Зробіть клас Employee, де будуть наступні приватні властивості: name, age та salary.
    12.	Зробіть геттери та сетери для всіх властивостей класу Employee.
    13.	Доповніть клас Employee приватним методом isAgeCorrect, який перевірятиме вік на коректність 
    (від 1 до 100 років). Цей метод повинен використовуватися в сеттері setAge перед встановленням нового
    віку (якщо вік не коректний – він не повинен змінюватися).
    14.	Нехай зарплата наших працівників зберігається у доларах. Зробіть так, щоб гетер getSalary додав у
    кінець числа із зарплатою значок долара. Говорячи іншими словами у якості salary зарплата буде зберігатися
    просто числом, але геттер буде повертати її з доларом на кінці.
    ",
    "</pre>";

    $employee3 = new Lessons\Employee_private();
    $employee3->setName("Bob");
    $employee3->setAge(63);
    $employee3->setSalary(2800);
    $employee3->showInfo();
    $employee3->setAge(107); //Спроба присвоїти значення, що не відповідає умовам.
    $employee3->showInfo();

    echo "<hr />";
    ?>

</body>

</html>