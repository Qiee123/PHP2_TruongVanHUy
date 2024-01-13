<?

namespace App\Core;

class Base
{
    const PI = 2.14;

    private $_name = "Đây là bài lab lab 3";

    public function getName()
    {

        return $this->_name;
    }

    public function setName($language)
    {

        echo self::PI . "<br>" . "Sử dụng const "   . "<br>";
        $this->_name = $language;
    }

    public static function getVAT()
    {

        // trả về 1 giá trị đc returrn, khi cần echo ra 
        return self::PI;
    }
   
}
