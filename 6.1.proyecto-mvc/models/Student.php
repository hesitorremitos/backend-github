<?php

require_once 'Connection.php';

class Student extends Connection{
    public $ci;
    public $name;
    public $last_name;
    public $birth_date;
    public $cellphone;
    public $created_at;
    public $updated_at;
    public $course_id;
}