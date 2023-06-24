
<?php


// Build a basic calculator that can add, subtract and multiply 2 numbers.
//Consider the following:
//- Styling is not required, focus on functionality.
//- Using OOP concepts is REQUIRED
//[ class, functions, constructor ]
//- Make it work dynamically. As the scenario goes,
// user enters 2 numbers, chooses the desired operation then hit the submit button to calculate.
class Calculator {
    private $fnum;
    private $snum;

    public function __construct($fnum,$snum) {
        $this->fnum = $fnum;
        $this->snum = $snum;
    }

    public function add() {
        return $this->fnum + $this->snum;
    }
    public function sub() {
        return $this->fnum - $this->snum;
    }
    public function multiply() {
        return $this->fnum * $this->snum;
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fnum = $_POST['Fnum'];
    $snum = $_POST['Snum'];
    $operation = $_POST['operation'];

    $calculate = new calculator($fnum,$snum);

    switch ($operation) {
        case 'add':
            $res = $calculate->add();
            break;
        case 'subtract':
            $res = $calculate->sub();
            break;
        case 'multiply':
            $res = $calculate->multiply();
            break;
        default:
            $res = "Invalid Operation";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>

<form method="POST">
    <label for="Fnum">First Number : </label>
    <input type="number" name="Fnum" id="Fnum" required>
    <label for="Fnum">Second Number : </label>
    <input type="number" name="Snum" id="Snum" required>
    <br>
    <label for="operation"> Operation</label>
    <select name="operation" id="operation">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="multiply">Multiply</option>
    </select>
    <br>

    <input type="submit" name="submit">

</form>
<?php if (isset($res)) : ?>
<h3> Result : <?= $res ?></h3>
<?php endif; ?>
</body>
</html>