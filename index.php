<?php require('core/init.php'); ?>
<?php
// GET Template and assign Vars
$template = new Template('templates/frontpage.php');

// Assign Variables
$template->heading = 'This is the template heading';

//Display template
echo $template;
