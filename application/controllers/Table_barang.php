<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Table_barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Table_barang_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {

		$data = array(
            'content' => 'table_barang/table_barang_list',
        );
        $this->load->view('sb-admin', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Table_barang_model->json();
    }

    public function read($id) 
    {
        $row = $this->Table_barang_model->get_by_id($id);
        if ($row) {
            $data = array( 
		'kode_barang' => $row->kode_barang,
		'nama_barang' => $row->nama_barang,
		'gambar_barang' => $row->gambar_barang,
		'harga' => $row->harga,
	    );
            $data['content'] = 'table_barang/table_barang_read';

            $this->load->view('sb-admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_barang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'content' => 'table_barang/table_barang_form', 
            'action' => site_url('table_barang/create_action'),
	    'id' => set_value('id'),
	    'kode_barang' => set_value('kode_barang'),
	    'nama_barang' => set_value('nama_barang'),
	    'harga' => set_value('harga'),
	    'gambar_barang' => set_value('gambar_barang'),
	);
        $this->load->view('sb-admin', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'gambar_barang' => $this->input->post('gambar_barang',TRUE),
	    );

            $this->Table_barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('table_barang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Table_barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'content' => 'table_barang/table_barang_form',  
                'action' => site_url('table_barang/update_action'),
		'id' => set_value('id', $row->id),
		'kode_barang' => set_value('kode_barang', $row->kode_barang),
		'nama_barang' => set_value('nama_barang', $row->nama_barang),
		'harga' => set_value('harga', $row->harga),
		'gambar_barang' => set_value('gambar_barang', $row->gambar_barang),
	    );
            $this->load->view('sb-admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'gambar_barang' => $this->input->post('gambar_barang',TRUE),
	    );

            $this->Table_barang_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('table_barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Table_barang_model->get_by_id($id);

        if ($row) {
            $this->Table_barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('table_barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_barang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_barang', 'kode barang', 'trim|required');
	$this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required'); 
	$this->form_validation->set_rules('gambar_barang', 'gambar barang', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
