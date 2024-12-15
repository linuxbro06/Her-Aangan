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
        $period_names = $_POST['period_name'];
        $start_dates = $_POST['start_date'];
        $end_dates = $_POST['end_date'];

        // Prepare an SQL statement for inserting data
        $stmt = $pdo->prepare("INSERT INTO periods (period_name, start_date, end_date) VALUES (?, ?, ?)");

        // Loop through each period entry and insert it into the database
        for ($i = 0; $i < count($period_names); $i++) {
            $period_name = $period_names[$i];
            $start_date = $start_dates[$i];
            $end_date = $end_dates[$i];

            // Execute the query to insert data
            $stmt->execute([$period_name, $start_date, $end_date]);
        }

        // Redirect after successful submission (or display a success message)
        echo "<p>Periods have been successfully added!</p>";
        header("Location:submit_periods.php");
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