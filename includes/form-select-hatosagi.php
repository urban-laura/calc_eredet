<?php

$dijak_classes = array('-Válasszon-', 'Személygépjárművek', 'Motorkerékpárok', 'Kisteherautók (3,5t össztömegig)', 'Tehergépkocsi', 'Autóbuszok', 'Mezőgazdasági vontató, lassú jármű', 'Pótkocsi');

$options = '';

foreach ($dijak_classes as $class)
{	
	$options .= '<option>' . $class . '</option>';
}

$output = str_replace('###hatosagi_dijak###', $options, $output);
