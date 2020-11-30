<?php
$servername = "127.0.0.1";
$database = "data";
$username = "api";
$password = "1234";
$conn = mysqli_connect($servername,$username,$password,$database);


if(isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = false;
}
if(isset($_GET['threads'])) {
    $threads = $_GET['threads'];
} else {
    $threads = false;
}
if(isset($_GET['arch'])) {
    $arch = $_GET['arch'];
} else {
    $arch = false;
}
if(isset($_GET['mode'])) {
    $mode = $_GET['mode'];
} else {
    $mode = false;
}



//return all
if(!$name && !$threads && !$arch && !$mode) {
$query = <<<SQL
SELECT * FROM data
SQL;

$return_json = array();

$result = mysqli_query($conn, $query);

if ($result) {
    while($row = mysqli_fetch_array($result)) {
     
    $return_json[] = array(

        'name' => $row['name'],
        'arch' => $row['arch'],
        'threads' => $row['threads']

    );



    }

  }
  else {
    echo mysql_error();
  }


$return_json = json_encode($return_json);
print_r($return_json);

}