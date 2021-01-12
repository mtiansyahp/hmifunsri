<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class OpenRecruitment extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		session_start();
		$_SESSION['login_user']="guest";
		$this->load->view('header');
		$this->load->view('form_oprec');
		$this->load->view('footer');
	}

	public function insert(){
		$this->load->model('M_Recruitment');

		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$angkatan = $_POST['angkatan'];
		$kelas = $_POST['kelas'];
		$dom = $_POST['dom'];
		$alamat = $_POST['alamat'];
		$lokasi_tes = $_POST['lokasi_tes'];
		$transport = $_POST['transport'];
		$dinas = $_POST['dinas'];
		$ukuran = $_POST['ukuran'];
		$query1 = $this->M_Recruitment->insert_data($nama, $nim, $angkatan, $kelas, $dom, $alamat, $lokasi_tes, $dinas/*, $check*/);
		$query2 = $this->M_Recruitment->insert_transport($nim, $nama, $dom, $transport);
		$query3 = $this->M_Recruitment->insert_databaju($nim, $nama, $kelas,$ukuran);
		if($query1 && $query2 && $query3){
			echo "<script> alert('Pendaftaran berhasil, silahkan download dan cetak formulir'); location.href='print_form/$nim';</script>";
		}
		else{
			echo "<script> alert('Pendaftaran gagal, silahkan isi formulir'); location.href='index';</script>";
		}
	}
	public function print_form($nim){
		$this->load->library('dompdf_gen');
		$this->load->model('M_Recruitment');
		$get['data'] = $this->M_Recruitment->fetch_data($nim);
		$this->load->view('formulir_pendaftaran', $get);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("formulir_pendaftaran_".$nim.".pdf", array('Attachment' => 0 ));
		
		if(session_destroy()) {
			header("location: Welcome");
		}
		
	}
}
 ?>