<?php

if(isset($sidebar)) :
	$this->load->view($sidebar);
endif;

$this->load->view($content);

if(isset($footer)) :
	$this->load->view($footer);
endif;

?>