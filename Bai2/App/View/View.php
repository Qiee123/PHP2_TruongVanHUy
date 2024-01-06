<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1 Bài 2</title>
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
  
    <h3>Bài lab1.1 php2 <br></h3>
    <?php echo isset($courses_name) ? $courses_name : ''; ?>

    <form action="">
        <?  
            include '../Model/Data.php';
        ?>
        <select name="khoa" id="">
            <?php foreach ($courses as $key => $value) : ?>
                <option value="<?= $key ?>"><?= $value ?> </option>
            <? endforeach; ?>
        </select>
        <button type="submit">Chọn khóa học</button>
    </form>
</body>

</html>