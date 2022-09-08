<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        '~' => 'a', '$' => 'b', '^' => 'c', '#' => 'd', '+' => 'e',
        '!' => 'f', '%' => 'g', '_' => 'h', '=' => 'i', '*' => 'j',
        'P' => 'k', 'Q' => 'l', 'R' => 'm', 'S' => 'n', 'T' => 'o' ,
        'T' => 'p', 'U' => 'q', 'V' => 'r', 'W' => 's', 'X' => 't',
        ')' => 'u', '(' => 'v', '{' => 'w', ',' => 'x', '`' => 'y', '"' => 'z',
        'F' => '6', 'G' => '7', 'H' => '8', 'I' => '9', 'K' => '0',
        'U' => '1', 'V' => '2', 'W' => '3', 'X' => '4', 'Y' => '5'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang akan di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil deskripsi adalah = " , $enkripsi;

};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>