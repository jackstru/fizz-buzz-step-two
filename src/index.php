<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<title>FizzBuzz</title>
	<style>
        fieldset {
            padding: 2rem;
            margin: 2rem;
        }

        label {

        }

        input {
            margin: 1rem;
            padding: .5rem 0;

        }
	</style>
</head>
<body>
<?php
use FizzBuzz\FizzBuzz;
require 'FizzBuzz.php';
$output = "";
$oldstart = "";
$oldend = "";

if (isset($_POST['submit'])) {
    $oldstart = isset($_POST['start']) ? $_POST['start'] : '';
    $oldend = isset($_POST['end']) ? $_POST['end'] : '';
    $start = (int)$_POST['start'];
    $end = (int)$_POST['end'];
    $fizzbuzz = new FizzBuzz();
    if (strlen($_POST['start']) < 1 || strlen($_POST['end']) < 1) {
        $output = "Please enter start and end numbers ";
    } else {
        $output = $fizzbuzz->outputFizzBuzz($start, $end);
    }
}
?>
<Form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
	<fieldset>
		<legend>Enter a Number Range for Fizz Buzz</legend>
		<lablel for="start">Enter a Starting Number</lablel>
		<input name="start" id="start" value="<?= htmlentities($oldstart); ?>" type="number"/>
		<br/>
		<label for="end">Enter and Ending Number</label>
		<input name="end" id="end" value="<?= htmlentities($oldend); ?>" type="number"/>
	</fieldset>
	<input type="submit" name="submit" value="Submit"/>
</Form>
<h2>Output</h2>
<?php
echo $output;
?>
</body>
</html>

