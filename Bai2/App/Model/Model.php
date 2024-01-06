<?
    
/**
 * Hàm này trả về mảng tuần tự
 * @return array
 */

// model
function get_courses()
{
    include 'Data.php';

    return array_values($courses);
}
get_courses();
// var_dump(get_courses());


/**
 *  @param string $khoa
 * hàm này kiểm tra coi có khóa học nào k
 */
function find_by_khoa($khoa)
{
    global $courses;
    include 'Data.php';

    return array_key_exists($khoa, $courses) ? $courses[$khoa] : "Không có khóa học nào !!";
}

?>