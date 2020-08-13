<?php 
    #Array - Variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('Kevin','Jeremy','Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    //echo count($cars);
    // print_r($cars);
    // var_dump($cars);

    // echo $people[3];
    // echo $ids[2];
    // echo $cars[4];

    // Associative arrays
    $people = array('Brad' => 35, 'Jose' => 32, 'Rose' => 37);
    
    $ids = [22 => 'Brad', 44 => 'Jose', 69 => 'Rose'];
    // echo $people['Brad'];
    // echo $ids[22];
    $people['Jerri'] = 42;
    // echo $people['Jerri'];
    // print_r($people);
    // echo '<br/>';
    // var_dump($people);

    //Multi-Dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 5),
        array('Hyundai', 50, 30),
    );

    echo $cars[2][2];
?>