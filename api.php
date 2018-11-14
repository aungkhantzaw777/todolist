<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "todo";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn, $dbname);


@$task = $_GET['task'];
@$action = $_GET['action'];
@$index = $_GET['index'];
@$id = $_GET['id'];


switch ($action) {
	case '1':
		ShowTask();
		break;
	case '2':
		InsertTask($task);
		ShowTask();
		break;
	case '3':
		DelTask($id);
		ShowTask();
		break;
	
	default:
		echo 'error occur';
		break;
}

function ShowTask()
{
	global $conn;
	$sql = "SELECT * FROM task";
	$ResultTask = mysqli_query($conn,$sql) or die('error');
	while($row = mysqli_fetch_assoc($ResultTask))
	{
		$task[] = $row;
	}
	echo json_encode($task);
}

function InsertTask($name)
{
	global $conn;
	$sql = "INSERT INTO task(TaskName) values('$name')";
	$ResultTask = mysqli_query($conn,$sql) or die('insert sql error');
}

function DelTask($id)
{
	global $conn;
	$sql = "DELETE FROM task where id = '$id'";
	$ResultTask = mysqli_query($conn,$sql);
}

function TestInsertTask()
{

}


 ?>