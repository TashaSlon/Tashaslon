<?php
/**
 * Created by PhpStorm.
 * User: n.plyusnina
 * Date: 14/04/2019
 * Time: 13:10
 */

$page_title = 'Список задач';
include ('includes/header.html');
require ('../core/connect_db.php');

$sql = 'SELECT * FROM tasks';
$result = mysqli_query($dbc, $sql);

//проверка не пустая ли таблица
if (mysqli_num_rows($result) > 0)
{
    echo '<table>
            <tr>
                <th>Задача</th>
                <th>Проритет</th>
                <th>Создана</th>
            </tr>';
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
       echo '<tr><td>'.
            $row['task_name'].
           '</td><td>'.
            $row['task_prioritet'].
           '</td><td>'.
            $row['task_create'].
           '</td></tr>';
    }
    echo '</table>';
}
else
{
    echo '<p>У вас пока нет задач</p>';
}

echo '<p><a href="Add.php">Добавить задачу</a></p>';
mysqli_close($dbc);
echo '</body></html>';