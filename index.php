<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hw_15 ZHEZHERA DMITRIY</title>
</head>
<body>
<p>
    <a href="form.html">ADD NEW PERSON</a>

    <?php
    include 'connect.php';


    $query ="SELECT * FROM Persons";

    $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк

        echo "<ul>";
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            echo "<li>    <a href='$row[0]_$row[1]'>";
            echo ("$row[0]  $row[1]");
            echo "</a></li>";
        }
        echo "</ul>";

        // очищаем результат
        mysqli_free_result($result);
    }

    mysqli_close($conn);

    ?>
</p>


</body>
</html>
