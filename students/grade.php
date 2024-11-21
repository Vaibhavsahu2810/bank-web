<?php
// Database connection
include 'db_connect.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to map grades to points
function getGradePoints($grade) {
    $gradePoints = [
        'A' => 10,
        'B' => 8,
        'C' => 6,
        'D' => 4
    ];
    return isset($gradePoints[$grade]) ? $gradePoints[$grade] : 0;
}

// Function to calculate SPI
function calculateSPI($courses) {
    $totalCredits = 0;
    $weightedPoints = 0;

    foreach ($courses as $course) {
        $gradePoints = getGradePoints($course['grade']);
        $credits = $course['credits'];
        $weightedPoints += $gradePoints * $credits; // Weighted grade points
        $totalCredits += $credits;                 // Total credits
    }

    return ($totalCredits > 0) ? round($weightedPoints / $totalCredits, 2) : 0;
}

// Input: Roll Number (from the request, e.g., GET or POST)

$rollNumber = $_POST['rollNumber'];

if ($rollNumber) {
    // Query to fetch student's enrolled courses, grades, and credits
    $sql = "SELECT c.CourseName, sc.Grade, c.Credits 
            FROM StudentCourses sc
            JOIN Courses c ON sc.CourseCode = c.CourseCode
            WHERE sc.RollNumber = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rollNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the student has any courses
    if ($result->num_rows > 0) {
        $courses = [];
        while ($row = $result->fetch_assoc()) {
            $courses[] = [
                'course' => $row['CourseName'],
                'grade' => $row['Grade'],
                'credits' => $row['Credits']
            ];
        }

        // Calculate SPI
        $spi = calculateSPI($courses);

        // Display Grade Sheet
        echo "<h3>Grade Sheet for Roll Number: $rollNumber</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Course</th><th>Grade</th><th>Credits</th></tr>";
        foreach ($courses as $course) {
            echo "<tr>
                    <td>{$course['course']}</td>
                    <td>{$course['grade']}</td>
                    <td>{$course['credits']}</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><strong>SPI: </strong>$spi</p>";
    } else {
        echo "<p>No courses found for Roll Number: $rollNumber</p>";
    }

    $stmt->close();
} else {
    echo "<p>Please provide a Roll Number as input.</p>";
}

$conn->close();
?>

