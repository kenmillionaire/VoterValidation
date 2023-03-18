<?php


$voterAge = 20; // Replace with actual voter's age
$hasPVC = true; // Replace with actual PVC status
$wardNumber = "020"; // Replace with actual ward number

if ($voterAge < 18) {
    echo "Voter is below 18 years, not eligible to vote.";
} else if (!$hasPVC) {
    echo "Voter does not have a PVC, not eligible to vote.";
} else if ($wardNumber !== "020") {
    echo "Voter's ward is not 020, not eligible to vote.";
} else {
    echo "Voter eligible to vote.";
}
 ?>



<!-- // $voterAge = 17; // Replace with actual voter's age
// $hasPVC = true; // Replace with actual PVC status
// $wardNumber = "020"; // Replace with actual ward number

// if ($voterAge < 18) {
//     echo "Voter is below 18 years, not eligible to vote.";
// } else if (!$hasPVC) {
//     echo "Voter does not have a PVC, not eligible to vote.";
// } else if ($wardNumber !== "020") {
//     echo "Voter's ward is not 020, not eligible to vote.";
// } else {
//     echo "Voter eligible to vote.";
// }
// -->








