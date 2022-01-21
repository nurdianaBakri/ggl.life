<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Soal2 extends CI_Controller
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
            'content' => 'soal2/form', 
            'action' => site_url('Soal2/action'),
			'angka' => set_value('angka'), 
		);
        $this->load->view('sb-admin', $data);
    }

	// To check sentence is palindrome or not
	function action()
	{
        $len = $this->input->post('angka'); 
    
        for ($i=$len; $i>=1; $i--) {
            if ($i%2 != 0) {
                for ($j=$len; $j>=$i; $j--) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
        for ($i=2; $i<=$len; $i++) {
            if ($i%2 != 0) {
                for ($j=$len; $j>=$i; $j--) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
    }
 
		
 

} 
