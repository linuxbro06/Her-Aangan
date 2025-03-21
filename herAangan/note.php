<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'login_regiser';
$username = 'root';
$password = '';

try {
    
    // Establish a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the period data from the POST request
        $period_names = $_POST['note'];
        $start_date = $_POST['date'];
       
       
        $stmt = $pdo->prepare("INSERT INTO pregnancy_note (note, date ) VALUES (?, ?)");


            $stmt->execute([$period_names, $start_date]);


            if(isset($_POST['submit']) ){
                        
                echo "<div class='alert alert-success' role='alert'>
                A simple success alert—check it out!
              </div>";
               }
        header("Location:pregnancy.php");

    }

    // Fetch all periods from the database
    $stmt = $pdo->query("SELECT * FROM periods ORDER BY start_date DESC");
    $periods = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
catch (PDOException $e) {
    // Handle database connection or query errors
    echo "Error: " . $e->getMessage();
    header("Location:submit_periods.php");
}
?>


<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'login_regiser';
$username = 'root';
$password = '';

try {
    
    // Establish a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the period data from the POST request
        $period_names = $_POST['weight'];
        $start_date = $_POST['date'];
       
       
        $stmt = $pdo->prepare("INSERT INTO weight (weight, date ) VALUES (?, ?)");


            $stmt->execute([$period_names, $start_date]);


            if(isset($_POST['submit']) ){
                        
                echo "<div class='alert alert-success' role='alert'>
                A simple success alert—check it out!
              </div>";
               }
        header("Location:pregnancy.php");

    }

    // Fetch all periods from the database
    $stmt = $pdo->query("SELECT * FROM periods ORDER BY start_date DESC");
    $periods = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
catch (PDOException $e) {
    // Handle database connection or query errors
    echo "Error: " . $e->getMessage();
    header("Location:submit_periods.php");
}
?>