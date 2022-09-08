<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        'a' => '~', 'b' => '$', 'c' => '^', 'd' => '#', 'e' => '+',
        'f' => '!', 'g' => '%', 'h' => '_', 'i' => '=', 'j' => '*',
        'k' => 'P', 'l' => 'Q', 'm' => 'R', 'n' => 'S', 'o' => 'T' ,
        'p' => 'T', 'q' => 'U', 'r' => 'V', 's' => 'W', 't' => 'X',
        'u' => ')', 'v' => '(', 'w' => '{', 'x' => ',', 'y' => '`', 'z' => '"',
        '6' => 'F', '7' => 'G', '8' => 'H', '9' => 'I', '0' => 'J',
        '1' => 'U', '2' => 'V', '3' => 'W', '4' => 'X', '5' => 'Y'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil enkripsi adalah = " , $enkripsi;
     
};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>