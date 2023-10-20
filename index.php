<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Малювання фігур</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
        require 'Shape.php';
        require 'Square.php';
        require 'Rectangle.php';
        require 'Circle.php';
    ?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h1>Квадрат</h1>
            <form method="post">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="width" class="form-label">Ширина</label>
                        <input type="text" class="form-control" id="width" name="square_width" placeholder="" value="<?php if (isset($_POST['square_width'])) echo $_POST['square_width'] ?>" required="">
                    </div>
                    <div class="col-sm-6">
                        <label for="color" class="form-label">Цвет</label>
                        <input type="text" class="form-control" id="color" name="square_color" placeholder="" value="<?php if (isset($_POST['square_color'])) echo $_POST['square_color'] ?>" required="">
                    </div>
                </div>
                <hr class="my-4">
                <button class="btn btn-outline-primary" name="draw_square" value="<?php if (isset($_POST['draw_square'])) $_POST['draw_square'] = true ?>" type="submit">Рисовать</button>
            </form>
            <?php
                if (isset($_POST['draw_square'])) {
                        $width = $_POST["square_width"];
                        $height = $_POST["square_width"];
                        $color = $_POST["square_color"];

                    if (!is_numeric($width) || !is_numeric($height)) {
                        echo 'Ширина должна быть числом.';
                        die();
                    }

                    $square = new Square($width, $height, $color);

                    echo "<div>";
                    $square->draw();
                    echo "Площадь: " . $square->area() . "<br>";
                    echo "Периметр: " . $square->perimeter() . "<br>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class="col-md-4">
            <h1>Прямоугольник</h1>
            <form method="post">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="width" class="form-label">Ширина</label>
                        <input type="text" class="form-control" id="width" name="rectangle_width" placeholder="" value="<?php if (isset($_POST['rectangle_width'])) echo $_POST['rectangle_width'] ?>" required="">
                    </div>

                    <div class="col-sm-6">
                        <label for="height" class="form-label">Высота</label>
                        <input type="text" class="form-control" id="height" name="rectangle_height" placeholder="" value="<?php if (isset($_POST['rectangle_height'])) echo $_POST['rectangle_height'] ?>" required="">
                    </div>

                    <div class="col-sm-6">
                        <label for="color" class="form-label">Цвет</label>
                        <input type="text" class="form-control" id="color" name="rectangle_color" placeholder="" value="<?php if (isset($_POST['rectangle_color'])) echo $_POST['rectangle_color'] ?>" required="">
                    </div>
                </div>
                <hr class="my-4">
                <button class="btn btn-outline-primary" name="draw_rectangle" value="<?php if (isset($_POST['draw_rectangle'])) $_POST['draw_rectangle'] = true ?>" type="submit">Рисовать</button>
            </form>
            <?php
                if (isset($_POST['draw_rectangle'])) {
                    $width = $_POST["rectangle_width"];
                    $height = $_POST["rectangle_height"];
                    $color = $_POST["rectangle_color"];

                    if (!is_numeric($width) || !is_numeric($height)) {
                        echo 'Ширина и высота должны быть числами.';
                        die();
                    }

                    $rectangle = new Rectangle($width, $height, $color);

                    echo "<div>";
                    $rectangle->draw();
                    echo "Площадь: " . $rectangle->area() . "<br>";
                    echo "Периметр: " . $rectangle->perimeter() . "<br>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class="col-md-4">
            <h1>Круг</h1>
            <form method="post">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="diameter" class="form-label">Диаметр</label>
                        <input type="text" class="form-control" id="diameter" name="circle_diameter" placeholder="" value="<?php if (isset($_POST['circle_diameter'])) echo $_POST['circle_diameter'] ?>" required="">
                    </div>
                    <div class="col-sm-6">
                        <label for="color" class="form-label">Цвет</label>
                        <input type="text" class="form-control" id="color" name="circle_color" placeholder="" value="<?php if (isset($_POST['circle_color'])) echo $_POST['circle_color'] ?>" required="">
                    </div>
                </div>
                <hr class="my-4">
                <button class="btn btn-outline-primary" name="draw_circle" value="<?php if (isset($_POST['draw_circle'])) $_POST['draw_circle'] = true ?>" type="submit">Рисовать</button>
            </form>
            <?php
                if (isset($_POST['draw_circle'])) {
                    $width = 0;
                    $height = 0;
                    $diameter = $_POST["circle_diameter"];
                    $color = $_POST["circle_color"];

                    if (!is_numeric($diameter)) {
                        echo 'Диаметр должен быть числом.';
                        die();
                    }

                    $circle = new Circle($width, $height, $color, $diameter);

                    echo "<div>";
                    $circle->draw();
                    echo "Площадь: " . $circle->area() . "<br>";
                    echo "Периметр: " . $circle->perimeter() . "<br>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>