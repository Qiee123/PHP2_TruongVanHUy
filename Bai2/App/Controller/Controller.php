<?
include '../Model/Model.php';

// controller

$list_of_courses = get_courses();

$khoa = (!empty($_GET['khoa'])) ? $_GET['khoa'] : '';
$courses_name = find_by_khoa($khoa);

include '../View/View.php';

?>
