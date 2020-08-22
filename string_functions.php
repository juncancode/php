<?php
    #substr()
    # Returns a portion of a string

    // $output = substr('Hello', 1, 3);
    // $output = substr('Hello', -2);
    // echo $output;

    #strlen()
    # Returns the length of a string

    // $output = strlen('Hello World');
    // echo $output;

    # strpos()
    # Finds the position of the first occurence of a substring

    // $output = strpos("hello world", "o");
    // echo $output;

    # strrpos()
    # Find the position of the last occurence of a substring
    // $output = strrpos('Hello World', 'd');
    // echo $output;

    #trim()
    # Strips whitespace

    // $text = "Hello World";
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);

    # strtoupper
    # Makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

     # strtolower
    # Makes everything uppercase

    // $output = strtolower('Hello World');
    // echo $output;

    # ucwords()
    # Captialize every word

    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # Replace all occurances of a search string with a replacement

    // $text = "Hello World";
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # Check if string

    // $val = '22';
    // $output = is_string($val);

    // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4 , '22.4','',' ',0,'0');

    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo "{$value} is a string<br/>";
    //     }
    // }

    # gzcompress()
    # Compress a string

    $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi sed reprehenderit, quidem nostrum harum velit enim dolore quaerat laboriosam aspernatur vero ullam eligendi expedita incidunt! Fuga laboriosam soluta explicabo. Quos ea, corporis iure eligendi repellat nihil quas aut expedita ullam incidunt beatae assumenda modi, magnam blanditiis explicabo, odio ab minus.";

    $compressed = gzcompress($string);

    echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;
?>