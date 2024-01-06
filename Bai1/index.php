<?

$courses = [
    'khoa1' => "Lập trình cơ bản với PHP",
    'khoa2' => "Dự án PHP2 bằng mô hình MVC",
    'khoa3' => "Kiểm thử cơ bản(tester)"
];
// echo $courses['khoa1'];

// $array = [
//     "1",
//     "2",
//     "3",
// ];
// echo $array[0];

/**
 * Hàm này trả về mảng tuần tự
 * @return array
 */

// model
function get_courses()
{
    global $courses;

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

    return array_key_exists($khoa, $courses) ? $courses[$khoa] : "Không có khóa học nào !!";
}

// controller

$list_of_courses = get_courses();

$khoa = (!empty($_GET['khoa'])) ? $_GET['khoa'] : '';
$courses_name = find_by_khoa($khoa);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h3 {
            color: #333;
            text-align: center;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        select {
            padding: 8px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h3>Bài lab1.1 php2 <br> <? echo $courses_name ?></h3>

    <form action="">
        <select name="khoa" id="">
            <?php foreach ($courses as $key => $value) : ?>
                <option value="<?= $key ?>"><?= $value ?> </option>
            <? endforeach; ?>
        </select>
        <button type="submit">Chọn khóa học</button>
    </form>
</body>

</html>