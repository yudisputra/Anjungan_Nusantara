<?php

if(isset($header)) :
	$this->load->view($header);
endif;

$this->load->view($content);

if(isset($footer)) :
	$this->load->view($footer);
endif;

?>