<?php
/**
 * Created by PhpStorm.
 * User: n.plyusnina
 * Date: 14/04/2019
 * Time: 13:55
 */

$page_title = 'Добавление задачи';

include ('includes/header.html');

echo '<form action="adding.php" method="POST" accept-charset="utf-8">
        Задача: <input name="task_name" type="text"><br>
        Приоритет: 
        <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <p><input type="submit" value="Сохранить"></p>
       </form>';

echo '<p><a href="Tasks.php">Вернуться к списку задач</a></p>';
echo '</body></html>';