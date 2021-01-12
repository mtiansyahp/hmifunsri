<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class M_Recruitment extends CI_Model
{
	public function fetch_data($nim)
	{
		$sql = "SELECT * FROM `tb_dataoprec` WHERE nim='$nim'";
		$result=$this->db->query($sql)->result_array();
		return $result;
	}
	public function insert_data($nama, $nim, $angkatan, $kelas, $dom, $alamat, $lokasi_tes, $dinas/*, $check*/)
	{
		$sql = "INSERT INTO `tb_dataoprec`(`nama_lengkap`, `nim`, `angkatan`, `kelas`, `domisili`, `alamat`, `lokasi_tes`, `dinas`) VALUES ('$nama','$nim','$angkatan','$kelas','$dom','$alamat','$lokasi_tes','$dinas')";
		// , '$check', `non_dinas`
		$result=$this->db->query($sql);
		return $result;
	}
	public function insert_transport($nim, $nama, $dom, $transport)
	{
		$sql = "INSERT INTO `tb_datatransport`(`nim`, `nama`, `dom`, `transport`) VALUES ('$nim','$nama','$dom','$transport')";
		$result=$this->db->query($sql);
		return $result;
	}
	public function insert_databaju($nim, $nama, $kelas,$ukuran)
	{
		$sql = "INSERT INTO `tb_databaju`(`nama_lengkap`, `nim`, `ukuran`, `kelas`) VALUES ('$nama','$nim','$ukuran','$kelas')";
		$result=$this->db->query($sql);
		return $result;
	}
}
 ?>