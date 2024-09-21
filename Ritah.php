

<?php
// Function to calculate age from date of birth
function calculateAge($dob) {
    $dobDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($dobDate)->y;
    return $age;
}

// Capture input
$name = "Amunsiimire Ritah";          
$dob =  "2001-09-16";      
$homeAddress = "Rwene,Kabale";

// Calculate age
$age = calculateAge($dob);

// Output the welcome statement and age reminder
echo "Welcome home, $name!<br>";
echo "Your home address is: $homeAddress.<br>";
echo "Today, you are $age years old!";

?> 
