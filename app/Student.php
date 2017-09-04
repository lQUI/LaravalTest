<?php

namespace App;

class Student
{
    var $firstName;
    var $lastName;
    var $age;

    function __construct ($firstName, $lastName, $age)
    {
        $this ->firstName = $firstName;
        $this ->lastName = $lastName;
        $this ->age = $age;
    }
}