<?
    namespace App\Core;

    use PDO;
    
    class Database
    {
        public function __construct()
        {
            $servername = "localhost";
            $username = "huytv_pc07617";
            $password = "192383T&";
    
            try {
                $conn = new PDO("mysql:host=$servername;dbname=asm_php2_ product_warranty", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Kết nối thành công!";
                return $conn;
            } catch (\PDOException $e) { 
                echo "Kết nối thất bại!: " . $e->getMessage();
            }
        }
    }
    

?>