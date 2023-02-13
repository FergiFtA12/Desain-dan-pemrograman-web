<?php

//scope

$x1=10;

function tampil1x()
{
    global $x1;
    $x2=12;
    echo"ini nilai x2 yang terdapat pada function= $2";
    echo"</br>";

    // jika kita panggil nilai dari function
    echo "ini nilai x1 dipanggil melalui function=$x1";
}
tampilx();
echo"</br>";

echo "ini nilai x1 = $x1";
?>