<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>

<?php
        $x = $_GET['ID'];
        include 'db.php';
?>

        <form action="update_plan.php" method="get">

        <p>SELECT NEW PLAN</p>
        <select id="membership" name="membership">
                  <option value="title" hidden>Select Plan</option>
                  <option value="Basic">Basic - 1 martial art, 2 sessions per week - £25.00</option>
                  <option value="Intermediate">Intermediate - 1 martial art, 3 sessions per week - £35.00</option>
                  <option value="Advanced">Advanced - Any 2 martial arts, 5 sessions per week - £45.00</option>
                  <option value="Elite">Elite - Unlimited Classes - £60.00</option>
                  <option value="PrivateTuition">Private martial arts tuition - £15.00</option>
                  <option value="Junior">Junior membership - Can attend all-kids martial arts sessions - £25.00</option>
                  <option value="SelfDefenseCourse">Six-week beginners self-defense course (2 × 1-hour session per week) - £180.00</option>
                  <option value="FitnessRoom">Use of fitness room - per visit - £6.00</option>
                  <option value="FitnessTraining">Personal fitness training - per hour - £35.00</option>
              </select> 

        <input type="Submit" value="UPDATE">
        <input type="hidden" name="ID" value = "<?php echo $x; ?>">
        
        <hr>

        </form>

</body>
</html>