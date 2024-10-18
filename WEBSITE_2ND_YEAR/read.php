 <?

 // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch and display data from students table
        $sql_students = "SELECT * FROM students";
        $result_students = $conn->query($sql_students);

        if ($result_students->num_rows > 0) {
            echo "<h2>Student Information</h2>";
            echo "<table>";
            echo "<tr><th>Student ID</th><th>Name</th><th>University</th><th>Program</th>
              <th>Student Number</th><th>Address</th><th>Contact Number</th><th>Date of Admission</th>
              <th>Adviser</th></tr>";
            while ($row = $result_students->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["student_id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["university"] . "</td>";
                echo "<td>" . $row["program"] . "</td>";
                echo "<td>" . $row["student_number"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["contact_number"] . "</td>";
                echo "<td>" . $row["date_of_admission"] . "</td>";
                echo "<td>" . $row["adviser"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<h2>Student Information</h2>";
            echo "0 results";
        }
        ?>