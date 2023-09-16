<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

// Establish a connection to the MySQL database
$conn = mysqli_connect('qko842703826330.db.42703826.9e2.hostedresource.net:3310', 'qko842703826330', 'g0YO/tXpC*s7k', 'qko842703826330');

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the character set for the database connection to utf8
mysqli_set_charset($conn, "utf8");

// Now you can use $conn to interact with the database with the utf8 character set
?>



<?php
$_SESSION['load']=0;

if (!isset($_SESSION['current_question_index'])) {
    $_SESSION['current_question_index'] = 0;
}

$currentQuestionIndex = $_SESSION['current_question_index'];

$query = "SELECT * FROM TblQuiz ORDER BY id ASC LIMIT $currentQuestionIndex, 1";//TblQuiz
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Store the current question details in variables
$question_id = $row['id'];
 $question_text = $row['question'];
$correct_option = $row['correct_option'];
  $question_type = $row['type'];

if (!isset($_SESSION['correct_count'])) {
    $_SESSION['correct_count'] = 0;
    $_SESSION['R']=0;
    $_SESSION['I']=0;
    $_SESSION['A']=0;
    $_SESSION['S']=0;
    $_SESSION['E']=0;
    $_SESSION['C']=0;
}


// if($currentQuestionIndex == 5)
// {
//     header("Location: Result.php");
// }

if (isset($_POST['Submit'])) {

 $selected_option = $_POST['selected_option'];

if($question_type=='R' and $selected_option == 1)
{
    $_SESSION['R']++;
}
elseif($question_type=='I' and $selected_option == 1)
{
    $_SESSION['I']++;
} 
elseif($question_type=='A' and $selected_option == 1)
{
    $_SESSION['A']++;
}
elseif($question_type=='S' and $selected_option == 1)
{
    $_SESSION['S']++;
}
elseif($question_type=='E' and $selected_option == 1)
{
    $_SESSION['E']++;
}
elseif($question_type=='C' and $selected_option == 1)
{
    $_SESSION['C']++;
}
elseif( $selected_option == '')
{
   echo '<script>alert("Please select option");</script>';
}
if($selected_option!='')
{
    $_SESSION['current_question_index']++;
}

  // Redirect to the next question or the result page if needed
  if ($_SESSION['current_question_index'] == 42) {
    header("Location: Result.php");
    exit;
} else {
    // Redirect to the next question
    header("Location: index.php");
    exit;
}

}


if (isset($_POST['Restart'])) 
{
    session_destroy();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIASEC Test</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body id="mainBody">
<?php include 'header.php'; ?>
<div class="pt-5 sd-">
    <div class="col-md-4 mx-auto my-5 shadow">
        <div class="p-5 mb-5  rounded-3">
            <h3>RIASEC टेस्ट</h3>
            <!-- <p>Question : <?php echo $question_id; ?></p> -->
            <p>Question : <?php  echo $currentQuestionIndex +1; ?></p>
            <p><?php echo $question_text; ?></p>
            <form method="post">
                <div class="row">
                    <div class="col-md-2 ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="selected_option" value="1" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="selected_option" value="0" id="flexRadioDefault2"
                                >
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Submit" name="Submit" class="btn btn-sm btn-primary my-2">
                <button type="submit" name="Restart" class="btn btn-sm btn-danger my-2">Restart</button>
            </form>
        </div>
    </div>
    </div>
    <div class="fixed-bottom">
    <?php include 'footer.php'; ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>