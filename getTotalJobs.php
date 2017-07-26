<?php 
require_once('./_conf/db_conn.php');

echo 'Get total jobs count: <br/>';

$query = 'SELECT count(id) as TotalJobCount FROM job_structured_info';

$result = mysqli_query($db_conn, $query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

echo '[M1GA] 資料職缺數:' . $row['TotalJobCount'];

mysqli_close($db_conn);



