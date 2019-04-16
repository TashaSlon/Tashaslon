<?php
/**
 * Created by PhpStorm.
 * User: n.plyusnina
 * Date: 14/04/2019
 * Time: 11:02
 */

$dbc = mysqli_connect('31.31.198.18', 'u0699097_Tasha','rty78iop', 'u0699097_tashaslon')
    or die (mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');