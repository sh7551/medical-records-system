<!-- index.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
    <title>Medical Records System</title>
</head>

<body>

    <h1>Medical Records System</h1>

    <form action="retrieve_data.php" method="post">
        <button type="submit" name="retrieve_receptionists">Retrieve Receptionists Records</button>
        <button type="submit" name="retrieve_patients">Retrieve Patients Records</button>
        <button type="submit" name="retrieve_medical_records">Retrieve Medical Records</button>
        <button type="submit" name="retrieve_appointments_procedures">Retrieve Appointments and Procedures</button>
    </form>

    <a href="home.php">HOME</a>

    <!-- PHP content -->
    <?php include 'retrieve_data.php'; ?>

</body>

</html>
