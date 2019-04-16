<?php
/**
 * Created by PhpStorm.
 * User: n.plyusnina
 * Date: 14/04/2019
 * Time: 14:57
 */

$page_title = 'Ошибки';
include ('includes/header.html');

function fail($str)
{
    echo "<p>Укажите задачу $str.</p>";
    echo '<p><a href="Add.php">Ввести задачу</a>';
    echo '</body></html>';
    exit();
}

//передача данных веб-формы
if(isset($_POST['task']))
{
    if (!empty(trim($_POST['task_name'])))
    {
        $task_name = addslashes($_POST['$task_name']);
    }
    else {fail('Задача');}

    if (!empty(trim($_POST['task_prioritet'])))
    {
        $task_name = addslashes($_POST['$task_prioritet']);
    }
    else {fail('Приоритет');}

    require ('../core/connect_db.php');

    $sql = "INSERT INTO tasks
    (task_name, task_prioritet)
    VALUES 
    ($task_name, $task_prioritet)";

    $result = mysqli_query($dbc, $sql);
}

if (mysqli_affected_rows($dbc)!= 1)
{
    echo '<p>Ошибка</p>'.mysqli_error($dbc);
    mysqli_close($dbc);
}
else
{
    mysqli_close($dbc);
    header('Location: Tasks.php');
}