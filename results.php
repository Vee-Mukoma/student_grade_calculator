<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Results</title>
    <link rel="stylesheet" href="./CSS/results.css">
</head>
<body>
    <header>
        <h1>Student Grade Calculator</h1>
        <h2>COMPUTER SCIENCE</h2>
    </header>

    <?php
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php');
            exit();
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $regNo = $_POST['regNo'];
        $scores = [
            $score1 = $_POST['score1'],
            $score2 = $_POST['score2'],
            $score3 = $_POST['score3'],
            $score4 = $_POST['score4'],
            $score5 = $_POST['score5']
        ];

        $total = array_sum($scores);
        $average = $total / count($scores);
        $grade = '';

        if ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 60) {
            $grade = 'B';
        } elseif ($average >= 50) {
            $grade = 'C';
        } elseif ($average >= 40) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        if ($grade == 'D' || $grade == 'E') {
            $status = 'Fail';
        } else {
            $status = 'Pass';
        }

        $statusClass = ($status == 'Pass') ? 'status-pass' : 'status-fail';
    ?>

    <section id="results">
        <h1>Student Grade Results</h1>
        <p><strong>Name:</strong> <?php echo $fname . ' ' . $lname; ?></p>
        <p><strong>Registration Number:</strong> <?php echo $regNo; ?></p>
        <p><strong>Total Score:</strong> <?php echo $total; ?></p>
        <p><strong>Average Score:</strong> <?php echo number_format($average, 2); ?></p>
        <p><strong>Grade:</strong> <?php echo $grade; ?></p>
        <p><strong>Status:</strong> <?php echo $status; ?></p>

    </section>
</body>
</html>
