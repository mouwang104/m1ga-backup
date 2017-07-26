<?php
require_once('./_conf/db_conn.php');

echo 'Get total jobs count: <br/>';

//$query = 'SELECT count(id) as TotalJobCount FROM job_structured_info';

$query = '
SELECT jd.jobno, c.cust_name, c.invoice, jd.description, jd.others
  FROM company c, job_description jd
 WHERE c.invoice = jd.invoice 
 LIMIT 100;
';

$result = mysqli_query($db_conn, $query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

echo '[M1GA] 整理職缺資料';
echo '<pre>';
print_r($row);
echo '</pre>';
//echo '[M1GA] 資料職缺數:' . $row['TotalJobCount'];

mysqli_close($db_conn);
