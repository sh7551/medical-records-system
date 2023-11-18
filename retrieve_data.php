<?php
// Include the file with your database connection code
include 'db_connection.php';

// Check if a button is clicked
if (isset($_POST['retrieve_receptionists'])) {
    // Retrieve and display Receptionists records
    $query = "SELECT * FROM receptionists";
    // Execute the query
    $result = mysqli_query($con, $query);

    // Check for errors
    if (!$result) {
        echo "Error description: " . mysqli_error($con);
    } else {
        // Process and display results
        echo "<h2>Receptionists Records</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Receptionist ID</th>
                    <th>Receptionist First Name</th>
                    <th>Receptionist Last Name</th>
                    <th>Receptionist Password</th>
                    <th>Receptionist ID Number</th>
                    <th>Receptionist Phone Number</th>
                    <th>Receptionist Email Address</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['receptionist_id']}</td>
                    <td>{$row['receptionist_first_name']}</td>
                    <td>{$row['receptionist_last_name']}</td>
                    <td>{$row['receptionist_password']}</td>
                    <td>{$row['receptionist_id_number']}</td>
                    <td>{$row['receptionist_phone_number']}</td>
                    <td>{$row['receptionist_email']}</td>
                </tr>";
        }

        echo "</table>";
    }

} elseif (isset($_POST['retrieve_patients'])) {
    // Retrieve and display Patients records
    $query = "SELECT * FROM patients";
    // Execute the query
    $result = mysqli_query($con, $query);

    // Check for errors
    if (!$result) {
        echo "Error description: " . mysqli_error($con);
    } else {
        // Process and display results
        echo "<h2>Patients Records</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient First Name</th>
                    <th>Patient Last Name</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['patient_id']}</td>
                    <td>{$row['patient_first_name']}</td>
                    <td>{$row['patient_last_name']}</td>
                </tr>";
        }

        echo "</table>";
    }

} elseif (isset($_POST['retrieve_medical_records'])) {
    // Retrieve and display Medical Records
    $query = "SELECT * FROM medical_records";
    // Execute the query
    $result = mysqli_query($con, $query);

    // Check for errors
    if (!$result) {
        echo "Error description: " . mysqli_error($con);
    } else {
        // Process and display results
        echo "<h2>Medical Records</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Patient ID</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Address and Phone Number</th>
                    <th>Shots Given</th>
                    <th>Illnesses</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['patient_id']}</td>
                    <td>{$row['date_of_birth']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['address_and_phone']}</td>
                    <td>{$row['shots_given']}</td>
                    <td>{$row['illnesses']}</td>
                </tr>";
        }

        echo "</table>";
    }

} elseif (isset($_POST['retrieve_appointments_procedures'])) {
    // Retrieve and display Appointments and Procedures records
    $query = "SELECT * FROM appointments_procedures";
    // Execute the query
    $result = mysqli_query($con, $query);

    // Check for errors
    if (!$result) {
        echo "Error description: " . mysqli_error($con);
    } else {
        // Process and display results
        echo "<h2>Appointments and Procedures</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Patient ID</th>
                    <th>Appointment Date</th>
                    <th>Appointment Type</th>
                    <th>Procedure Date</th>
                    <th>Procedure Type</th>
                    <th>Doctor's Name</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['patient_id']}</td>
                    <td>{$row['appointment_date']}</td>
                    <td>{$row['appointment_type']}</td>
                    <td>{$row['procedure_date']}</td>
                    <td>{$row['procedure_type']}</td>
                    <td>{$row['doctor_name']}</td>
                </tr>";
        }

        echo "</table>";
    }
}

// Close the database connection if needed
mysqli_close($con);
?>
