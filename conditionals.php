<?php 
    # CONDITIONALS

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
     */

    //  $num = 6;

    //  if($num == 5) {
    //      echo '5 passed';
    //  } elseif($num == 6){
    //     echo '6 passed';
    //  } else {
    //      echo 'did not pass';
    //  }

    # NESTING IF

    $num = 2;

    // if($num > 4){
    //     if($num < 10){
    //         echo "$num passed";
    //     }
    // }

    /*
        LOGICAL OPERATORS

        and && 
        or ||
        xor
    */
    
        // if($num > 4 XOR $num < 10){
        //     echo "$num passed";
        // }

    # SWITCH 

    $favColor = 'Blue';

    switch($favColor){
        case stristr($favColor,"Red"):
            echo 'Your Favorite Color is Red';
            break;
        case stristr($favColor,"Blue"):
            echo 'Your Favorite Color is Blue';
            break;
        case stristr($favColor,"Green"):
            echo 'Your Favorite Color is Green';
            break;
        default:
            echo 'Your Favorite Color is something else';
    }
?>