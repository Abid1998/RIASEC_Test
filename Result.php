<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
ini_set('display_errors', 0);
// Assuming you have these values in session variables
$R= $_SESSION['R'];
$I= $_SESSION['I'];
$A=$_SESSION['A'];
$S=$_SESSION['S'];
$E=$_SESSION['E'];
$C=$_SESSION['C'];



if($R==0 and $I==0 and $A==0 and $S==0 and $E==0 and $C==0)
{
    header("Location: index.php");
}

// Create an associative array to map values to their respective variables
$scoreArray = [
    'R' => $R,
    'I' => $I,
    'A' => $A,
    'S' => $S,
    'E' => $E,
    'C' => $C
];
// Sort the array in descending order while preserving the keys (the variable names)
arsort($scoreArray);

// Get the top 3 values with their respective variable types
$top3 = array_slice($scoreArray, 0, 3, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Result</h3>
                        <div class="row">
                       
                            <!-- <div class="col-md-3">
                                
                            </div> -->
                            <div class="col-md-8">
                                <div class="row">
                                <div class="col-md-4">
                                <h5>Correct Answer :
                                    <?php echo $_SESSION['RTotal'] + $_SESSION['ITotal'] + $_SESSION['ATotal']+ $_SESSION['STotal']+$_SESSION['ETotal']+ $_SESSION['CTotal'];?>
                                </h5>
                                </div>
                                    <div class="col-md-4">
                                        <h5>My Interest Code:</h5>
                                            <p>R=Realistic Total: <?php echo $R;?> </p>
                                            <p>I=Investigative Total: <?php echo $I;?> </p>
                                            <p>A=Artistic	Total: <?php echo $A;?> </p>
                                             <p>S=Social Total: <?php echo $S;?> </p>
                                             <p>E=Enterprising Total: <?php echo $E;?> </p>
                                             <p>C=Conventional Total: <?php echo $C;?> </p>
                                    </div>
                                    <div id="code" class="col-md-2">
                                        <div class="row">
                                        <?php
                                //    ============Interest Code ====================
                                foreach ($top3 as $key => $value) {
                                    if($value!=0){
                                    echo "<span style='font-size:18px;'><strong>". $key ." </strong><span>";
                                   // echo "$key =  $value";
                                }
                            }
                                // =======================================
                                    ?>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 end">
                        <form action="" method="post">
                            <button type="submit" class="btn btn-sm btn-success end">Back to Home</button>
                        </form>
                        <?php
                       if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            session_destroy();
                            header("Location: index.php");
                        }
                        ?>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>

    <?php

// Loop through and display the top 3 values with types


foreach ($top3 as $key => $value) {
  "$key:  = $value";


     echo "<div class='container'>";
    if($key=='R' and $value!=0){
        $_SESSION['RTotal']=$value;
        $_SESSION['RCode']=$key;
        echo "<div class='row shadow px-2 my-3 '>
        <div class='col-md-4  p-3 my-2 px-2'>
        <h4>Realistic</h4>
        <p>ये लोग अक्सर यांत्रिक (Machenical) या एथलेटिक प्रकार की नौकरियों में अच्छे होते हैं। Realistic लोग कॉलेज में किस चिज की पढाई कर सकते हैं…</p></div>
    
        <div class='col-md-4  p-3 my-2'>
        <strong>Education</strong>
        <ul>
        <li>Agriculture</li>
        <li>Health Assistant</li>
        <li>Computers</li>
        <li>Construction</li>
        <li>Mechanic/Machinist</li>
        <li>Engineering</li>
        <li>Food and Hospitality</li>
        </ul>
        </div>
    
        <div class='col-md-4  p-3 my-2'>
        <strong>Related Pathways</strong>
        <ul>
        <li>Natural Resources</li>
        <li>Health Services</li>
        <li>Industrial and Engineering Technology</li>
        <li>Art and Communication</li>
        </ul>
        </div>
        
        </div><hr>";
    }

    if($key=='I' and $value!=0){
    $_SESSION['ITotal']=$value;
    $_SESSION['ICode']=$key;
  
        echo "<div class='row shadow px-2 my-3 '>
        <div class='col-md-4  p-3 my-2 px-2'>
        <h4>Investigative</h4>
        <p>ये लोग देखना, सीखना, विश्लेषण करना और समस्या हल करना पसंद करते हैं। Investigative लोग कॉलेज में किस चिज की पढाई कर सकते हैं…</p></div>
    
        <div class='col-md-4  p-3 my-2'>
        <strong>Education</strong>
        <ul>
        <li>Marine Biology</li>
        <li>Engineering</li>
        <li>Chemistry</li>
        <li>Zoology</li>
        <li>Medicine/Surgery</li>
        <li>Consumer Economics</li>
        <li>Psychology</li>
        </ul>
        </div>
    
        <div class='col-md-4  p-3 my-2'>
        <strong>Related Pathways</strong>
        <ul>
        <li>Health Services</li>
        <li>Business</li>
        <li>Public and Human Services</li>
        <li>Industrial and Engineering Technology</li>
        </ul>
        </div>
        
        </div><hr>";
    }

    if($key=='A' and $value!=0){
        $_SESSION['ATotal']=$value;
        $_SESSION['ACode']=$key;
        echo "<div class='row shadow px-2 my-3 '>
    <div class='col-md-4  p-3 my-2 px-2'>
    <h4>Artistic</h4>
    <p>ये लोग असंरचित परिस्थितियों में काम करना पसंद करते हैं जहां वे अपनी क्रिएटिविटी का इस्तेमाल कर सकें। Artistic लोग कॉलेज में किस चिज की पढाई कर सकते हैं…</p></div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Education</strong>
    <ul>
    <li>Communications</li>
    <li>Cosmetology</li>
    <li>Fine and Performing Arts</li>
    <li>Photography</li>
    <li>Radio and TV</li>
    <li>Architecture</li>
    <li>Interior Design </li>
    </ul>
    </div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Related Pathways</strong>
    <ul>
    <li>Public and Human Services</li>
    <li>Arts and Communication</li>
    </ul>
    </div>
    
    </div><hr>";
    }
    if($key=='S' and $value!=0){
        $_SESSION['STotal']=$value;
        $_SESSION['SCode']=$key;
        echo "<div class='row shadow px-2 my-3 '>
    <div class='col-md-4  p-3 my-2 px-2'>
    <h4>Social</h4>
    <p>ये लोग दूसरे लोगों के साथ काम करना पसंद करते हैं, चीजों के बजाय। Social लोग कॉलेज किस चिज की पढाई कर सकते हैं…</p></div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Education</strong>
    <ul>
    <li>Counseling</li>
    <li>Nursing</li>
    <li>Physical Therapy</li>
    <li>Travel</li>
    <li>Advertising</li>
    <li>Public Relations</li>
    <li>Education</li>
    </ul>
    </div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Related Pathways</strong>
    <ul>
    <li>Health Services</li>
    <li>Public and Human Services</li>
    </ul>
    </div>
    
    </div><hr>";
    }
    if($key=='E' and $value!=0){
        $_SESSION['ETotal']=$value;
        $_SESSION['ECode']=$key;
        echo "<div class='row shadow px-2 my-3 '>
    <div class='col-md-4  p-3 my-2 px-2'>
    <h4>Enterprising</h4>
    <p>ये लोग दूसरों के साथ काम करना पसंद करते हैं और मनाने और प्रदर्शन करने का आनंद लेते हैं। Enterprising लोग कॉलेज में किस चिज की पढाई कर सकते हैं…</p></div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Education</strong>
    <ul>
    <li>Fashion Merchandising</li>
    <li>Real Estate</li>
    <li>Marketing/Sales</li>
    <li>Law</li>
    <li>Political Science</li>
    <li>International Trade</li>
    <li>Banking/Finance</li>
    </ul>
    </div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Related Pathways</strong>
    <ul>
    <li>Business</li>
    <li>Public and Human Services</li>
    <li>Arts and Communication</li>
    </ul>
    </div>
    
    </div><hr>";
    }
    if($key=='C' and $value!=0){
        $_SESSION['CTotal']=$value;
        $_SESSION['CCode']=$key;
        echo "<div class='row shadow px-2 my-3 '>
    <div class='col-md-4  p-3 my-2 px-2'>
    <h4>Conventional</h4>
    <p>ये लोग बहुत विस्तार-उन्मुख, संगठित और डेटा के साथ काम करना पसंद करते हैं। Conventional लोग कॉलेज में किस चिज की पढाई कर सकते हैं…</p></div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Education</strong>
    <ul>
    <li>Accounting</li>
    <li>Court Reporting</li>
    <li>Insurance</li>
    <li>Administration</li>
    <li>Medical Records</li>
    <li>Banking</li>
    <li>Data Processing</li>
    </ul>
    </div>

    <div class='col-md-4  p-3 my-2'>
    <strong>Related Pathways</strong>
    <ul>
    <li>Health Services</li>
    <li>Business</li>
    <li>Industrial and Engineering Technology</li>
   
    </ul>
    </div>
    
    </div><hr>";
    }
    echo "</div>";

  

}

//Code Generate Page Reload only one time page Load
if($_SESSION['load']==0){
    echo "<script>
    setTimeout(function() {
        location.reload();
    }, 50);
    </script>";
    $_SESSION['load']=1;
}


?>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>