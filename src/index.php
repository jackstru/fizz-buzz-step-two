
<?php

use FizzBuzz\FizzBuzz;
require 'FizzBuzz.php';

if(isset($_POST['submit']))
{
    $start = (int) $_POST['start'];
    $end = (int) $_POST['end'];
    $fizzbuzz = new FizzBuzz();
    echo $fizzbuzz->outputFizzBuzz($start,$end);
}
?>
<Form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <lablel for="start">Enter a Starting Number</lablel>
    <input name="start" value=""/>
    <label for="end">Enter and Ending Number</label>
    <input name="end" value=""/>
    <input type="submit" name="submit" value="submit"/>
</Form>

