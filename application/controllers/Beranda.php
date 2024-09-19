<?php 
/** 
 * summary
 */
class Beranda extends CI_controller
{
     public function index()
     {
          $data['judul']= 'Halaman Beranda';
        $this->load->view('templates/header',$data);
        $this->load->view('Beranda/index');
        $this->load->view('templates/footer');




     }
}
 ?>