<?php
/**
 * Created by PhpStorm.
 * User: n.plyusnina
 * Date: 14/04/2019
 * Time: 11:14
 */

require ('../core/connect_db.php');

if (mysqli_ping($dbc))
{
    echo 'Server MySQL '. mysqli_get_host_info($dbc).' on '. mysqli_get_host_info($dbc);
}