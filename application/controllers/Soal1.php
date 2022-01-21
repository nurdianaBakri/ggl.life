<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Soal1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->load->library('form_validation');
    }

    public function index()
    {
		$data = array(
            'button' => 'Hasil',
            'content' => 'soal1/form', 
            'action' => site_url('soal1/action'),
			'angka' => set_value('angka'), 
		);
        $this->load->view('sb-admin', $data);
    }

	// To check sentence is palindrome or not
	function action()
	{ 
		$star = $this->input->post('angka');

		for( $a=$star;$a>0;$a--){
		for($i=1; $i<=$a; $i++){
			echo "&nbsp";
		}
		for($a1=$star;$a1>=$a;$a1--){
			echo"*";
		}
		echo"<br>";
		}

	}
 

} 
