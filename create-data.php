<?php

$servername = "127.0.0.1";
$database = "data";
$username = "api";
$password = "1234";
//$conn = new PDO("mysqli:host=$servername;dbname=$database", $username, $password);

$conn = mysqli_connect($servername,$username,$password,$database);
//print_r($conn);

$data = array(

array(

'id' => '1234',
'name' => 'xenon',
'arch' => 64,
'threads' => 16

),

array(

'id' => '1235',
'name' => 'i7',
'arch' => 64,
'threads' => 8

),

array(

'id' => '1236',
'name' => 'i5',
'arch' => '64',
'threads' => 4

),

array(

'id' => '1237',
'name' => 'i3',
'arch' => 64,
'threads' => 2

),

array(

'id' => '1238',
'name' => 'arm',
'arch' => 32,
'threads' => 4

),

array(

'id' => '1239',
'name' => 'arm',
'arch' => 64,
'threads' => 8

)

);

//print_r($data);


foreach($data as $d) {

$id = $d['id'];
$name = $d['name'];
$arch = $d['arch'];
$threads = $d['threads'];

$query = <<<SQL
INSERT INTO data (id,name,arch,threads) VALUES ("$id","$name",$arch,$threads);
SQL;

    if ($result = mysqli_query($conn, $query)) {

    } else {
        print ( mysqli_error($conn));
    }
}









/*
$query = 
<<<SQL
create table data(
    id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    arch INT NOT NULL,
    threads INT NOT NULL,
    PRIMARY KEY ( id )
 );
SQL;

if ($result = mysqli_query($conn, $query)) {

  } else {
      print ( mysqli_error($conn));
  }
*/