<?php
class Spk_model extends CI_Model {
	private $table_name1= 'data_training';
	private $table_name2= 'jenis_kriteria';
	private $table_name3= 'kriteria';
	private $table_name4= 'likelihood';
	private $table_name5= 'selected';
	private $kriteria1= 'Banyak_penduduk';
	private $kriteria2= 'Harga';
	private $kriteria3= 'Target';
	private $kriteria4= 'Kelengkapan';
	private $kriteria5= 'Pesaing';
	private $kriteria6= 'Potensi';
	private $kriteria7= 'Ketertarikan';
	private $kriteria8= 'Angkutan';
	private $Kategori= 'Strategis';
	private $bobot='bobot';
	function __construct(){
		parent::__construct();
		//session_start();
	}
	function GetSUMKR1($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria1, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}
	function GetSUMKR2($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria2, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}
	function GetSUMKR3($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria3, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}
	function GetSUMKR4($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria4, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}
	function GetSUMKR5($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria5, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}
	function GetSUMKR6($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria6, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}
	function GetSUMKR7($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria7, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}
	function GetSUMKR8($id_jenis_kriteria,$id_kategori){
			$this->db->where($this->kriteria8, $id_jenis_kriteria)->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}

	function GetSUMKT($id_kategori){
			$this->db->where($this->Kategori, $id_kategori);
			$hasil=$this->db->get($this->table_name1);
			return $hasil;
			}

	function GetBobot($id_kriteria){
			$this->db->where('id', $id_kriteria);
            return $this->db->get($this->table_name3);
            }
    function GetSUMK(){

    	$this->db->select_sum('bobot');
    	$this->db->from($this->table_name3);

            return $this->db->get();
            }
    function GetNilai($id_jenis){
    		$this->db->select('nilai');
			$this->db->where('id_jenis', $id_jenis);
            return $this->db->get($this->table_name2);
            }
    function GetSUMJK(){
    		$this->db->select_sum('nilai');
    		$this->db->from($this->table_name2);
            return $this->db->get();
            }

	function GetDataTraining(){
            return $this->db->get($this->table_name1);
            }
	
	function GetJenisKriteriaList(){
            return $this->db->get($this->table_name2);
            }

      function GetLikelihood(){
    		$this->db->join($this->table_name2,'id_likelihood=id_jenis');
    		return $this->db->get($this->table_name4);
    		}
	
	function GetJenisKriteria($id_kriteria){
            return $this->db->where('id_kriteria',$id_kriteria)->get($this->table_name2);
            } 
    function GetSelected(){
    		$this->db->join($this->table_name3,'id=id_kriteria');
    		$this->db->join($this->table_name5,'id_input=id_jenis');
    		return $this->db->get($this->table_name2);
    		}        
    function HapusData(){
		$this->db->empty_table($this->table_name4);
	}
	function HapusData2(){
		$this->db->empty_table($this->table_name5);
	}
	function InsertData($likelihood){
		$this->db->insert($this->table_name4, $likelihood);
		return $this->db->insert_id();
	}
	function InsertData2($selected){
		$this->db->insert($this->table_name5, $selected);
		return $this->db->insert_id();
	}
}
?>