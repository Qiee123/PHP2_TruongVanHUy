<?
 require_once "vendor/autoload.php";


 use App\Model\BaseModel;
 use App\Controller\BaseController;
 use App\Core\Route;
 use App\Core\Base;
 use App\Core\Field;
 use App\Core\Form;


//  $Model = new BaseModel();

//  $Controller = new BaseController();
 
//  $Route = new Route();


 $base = new Base ;
//  echo $base->name;
 echo $base->getName(). "<br>";
$base ->setName("Đây là ví dụ về getName!");
echo $base ->getName();



// Lab3
// Sử dụng lớp AbstractField
$form = new Form();

$form->addField('text',  'name'."<br>", 'huytvpc07617');
$form->addField('email', 'email'."<br>", 'huytvpc07617@fpt.edu.vn');
$form->render();



?>