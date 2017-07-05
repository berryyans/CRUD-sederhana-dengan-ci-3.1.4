<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_data');
    $this->load->helper('url');
    $this->load->library('form_validation');
  }

  function index()
  {
    $data['mahasiswa'] = $this->m_data->tampil_data()->result();
    $this->load->view('v_home',$data);
  }

  function tambah()
  {
    $this->load->view('v_input');
  }

  function tambah_data()
  {

      $stambuk = $this->input->post('stambuk');
      $nama = $this->input->post('nama');
      $asal = $this->input->post('asal');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $kelamin = $this->input->post('kelamin');
      $alamat = $this->input->post('alamat');
      $no_hp = $this->input->post('no_hp');

      $data = array(
        'stambuk' => $stambuk,
        'nama' => $nama,
        'asal' => $asal,
        'tgl_lahir' => $tgl_lahir,
        'kelamin' => $kelamin,
        'alamat' => $alamat,
        'no_hp' => $no_hp
        );

        $this->m_data->input_data($data,'mahasiswa');
        redirect('crud/index');
  }

  function hapus($stambuk){
		$where = array('stambuk' => $stambuk);
		$this->m_data->hapus_data($where,'mahasiswa');
		redirect('crud/index');
	}

  function edit($stambuk)
  {
    $where = array('stambuk' => $stambuk );
    $data['mahasiswa'] = $this->m_data->edit_data($where, 'mahasiswa')->result();
    $this->load->view('v_edit', $data);
  }

  function update()
  {
      $stambuk = $this->input->post('stambuk');
      $nama = $this->input->post('nama');
      $asal = $this->input->post('asal');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $kelamin = $this->input->post('kelamin');
      $alamat = $this->input->post('alamat');
      $no_hp = $this->input->post('no_hp');

      $data = array(
        'stambuk' => $stambuk,
        'nama' => $nama,
        'asal' => $asal,
        'tgl_lahir' => $tgl_lahir,
        'kelamin' => $kelamin,
        'alamat' => $alamat,
        'no_hp' => $no_hp
        );

      $where = array('stambuk' => $stambuk );

      $this->m_data->update_data($where,$data,'mahasiswa');
      redirect('crud/index');
  }


}
