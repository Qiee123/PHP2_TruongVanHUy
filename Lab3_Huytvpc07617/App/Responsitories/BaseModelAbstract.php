<?
    namespace App\Responsitories;

    abstract class BaseModelAbstract {
        protected $model;

        public function getModel(){
            return $this-> model;
        }

    }
?>
