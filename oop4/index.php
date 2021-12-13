<?php

class student
{
    public $name;
    public $result;

    function __construct($name, $result)
    {
        echo '<br>Student ' . $name . ':';
        foreach($result as $subject=>$item){
            echo '<br>' . $subject . ': ' . $item;
        }
        echo  '<hr>';
    }
}

$student1 = new student('Josh', array('math' => 4, 'biology' => 4));
$student2 = new student('Mark', array('math' => 5, 'biology' => 5));