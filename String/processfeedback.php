<?php
/**
 * Course 221 - Web Development with PHP Course
 * 
 * @copyright ActiveLearning, Inc. - www.activelearning.ph
 * @author Gavin C. Lim
*/
?>

<html>
<head>
<title>Feedback Submitted</title>
</head>
<body>
<?php
	// Safely capture form input
	$name = trim($_REQUEST['name'] ?? '');
	$email = trim($_REQUEST['email'] ?? '');
	$feedback = trim($_REQUEST['feedback'] ?? '');

	// In modern PHP, we don’t need magic quotes check anymore
	// Just sanitize input directly
	$name = htmlentities(strtoupper($name));
	$email = htmlentities($email);
	$feedback = nl2br(htmlentities($feedback));

	// Display the submitted feedback
	echo "Name: $name<br /><br />\n";
	echo "Email: $email<br /><br />\n";
	echo "Feedback:<br />\n";
	echo "$feedback<br /><br />\n";
?>
Your feedback has been submitted.
</body>
</html>
