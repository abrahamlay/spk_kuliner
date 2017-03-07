<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spk_hitung extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
function __construct()
		{
		parent::__construct();
		
		$this->load->library(array('table','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('spk_model','',TRUE);
		//session_start();
		}
		
	function index(){
			$data['title']="Calculation";
			//$data['profil'] = $this->EntityUser->get_profile($_SESSION['username'],$_SESSION['password'])->row();
			$data['kr1']=  $this->spk_model->GetJenisKriteria(1)->result();
			$data['kr2']=  $this->spk_model->GetJenisKriteria(2)->result();
			$data['kr3']=  $this->spk_model->GetJenisKriteria(3)->result();
			$data['kr4']=  $this->spk_model->GetJenisKriteria(4)->result();
			$data['kr5']=  $this->spk_model->GetJenisKriteria(5)->result();
			$data['kr6']=  $this->spk_model->GetJenisKriteria(6)->result();
			$data['kr7']=  $this->spk_model->GetJenisKriteria(7)->result();
			$data['kr8']=  $this->spk_model->GetJenisKriteria(8)->result();
	

			$this->load->view('header.php',$data);
			$this->load->view('calculation.php',$data);
			$this->load->view('footer.php',$data);		
	}
		
	

	function calculate(){
		$offset=0;
		$data['title']="Result";

		$data['kr'][1]=$this->input->post('kr1');
		$data['kr'][2]=$this->input->post('kr2');
		$data['kr'][3]=$this->input->post('kr3');
		$data['kr'][4]=$this->input->post('kr4');
		$data['kr'][5]=$this->input->post('kr5');
		$data['kr'][6]=$this->input->post('kr6');
		$data['kr'][7]=$this->input->post('kr7');
		$data['kr'][8]=$this->input->post('kr8');


		//$Kr1lk1=$this->spk_model->GetSUMKR1(1,21)->result();
		$data['total']=$this->spk_model->GetDataTraining()->num_rows();
		$data['PYA']=  $this->spk_model->GetSUMKT(21)->num_rows();
		$data['PTIDAK']=  $this->spk_model->GetSUMKT(22)->num_rows();


		for($i=1;$i<=3;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR1($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][1]==$i){
				$data['SLCYA'][1]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=1;$i<=3;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR1($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
		if($data['kr'][1]==$i){
				$data['SLCTIDAK'][1]=$data['LhoodTIDAK'][$i];
			}
		}
		for($i=4;$i<=6;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR2($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][2]==$i){
				$data['SLCYA'][2]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=4;$i<=6;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR2($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
			if($data['kr'][2]==$i){
				$data['SLCTIDAK'][2]=$data['LhoodTIDAK'][$i];
			}
		}
		for($i=7;$i<=8;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR3($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][3]==$i){
				$data['SLCYA'][3]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=7;$i<=8;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR3($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
			if($data['kr'][3]==$i){
				$data['SLCTIDAK'][3]=$data['LhoodTIDAK'][$i];
			}
		}
		for($i=9;$i<=11;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR4($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][4]==$i){
				$data['SLCYA'][4]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=9;$i<=11;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR4($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
			if($data['kr'][4]==$i){
				$data['SLCTIDAK'][4]=$data['LhoodTIDAK'][$i];
			}
		}
		for($i=12;$i<=13;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR5($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][5]==$i){
				$data['SLCYA'][5]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=12;$i<=13;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR5($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
			if($data['kr'][5]==$i){
				$data['SLCTIDAK'][5]=$data['LhoodTIDAK'][$i];
			}
		}
		for($i=14;$i<=16;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR6($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][6]==$i){
				$data['SLCYA'][6]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=14;$i<=16;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR6($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
			if($data['kr'][6]==$i){
				$data['SLCTIDAK'][6]=$data['LhoodTIDAK'][$i];
			}
		}
		for($i=17;$i<=18;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR7($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][7]==$i){
				$data['SLCYA'][7]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=17;$i<=18;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR7($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
			if($data['kr'][7]==$i){
				$data['SLCTIDAK'][7]=$data['LhoodTIDAK'][$i];
			}
		}
		for($i=19;$i<=20;$i++){
		$data['P21'][$i]=  $this->spk_model->GetSUMKR8($i,21)->num_rows();
		$data['LhoodYA'][$i]=($data['P21'][$i])/$data['PYA'];
		if($data['kr'][8]==$i){
				$data['SLCYA'][8]=$data['LhoodYA'][$i];
			}
		}
		
		for($i=19;$i<=20;$i++){
		$data['P22'][$i]=  $this->spk_model->GetSUMKR8($i,22)->num_rows();
		$data['LhoodTIDAK'][$i]=($data['P22'][$i])/$data['PTIDAK'];
			if($data['kr'][8]==$i){
				$data['SLCTIDAK'][8]=$data['LhoodTIDAK'][$i];
			}
		}
		//input data likelihood ke DB
		$this->spk_model->HapusData();
		$this->spk_model->HapusData2();
		for($i=1;$i<=20;$i++){
            $Likelihood[$i] = array('id_likelihood'=>$i,
                                    'ya' => $data['LhoodYA'][$i],
                                    'tidak' => $data['LhoodTIDAK'][$i],
                                    );
            $id[$i] = $this->spk_model->InsertData($Likelihood[$i]);
		}
		$data['POSTYA']=$data['PYA']/$data['total'];
		$data['POSTTIDAK']=$data['PTIDAK']/$data['total'];
	for($i=1;$i<=8;$i++){
			$data['POSTYA']=$data['POSTYA']*$data['SLCYA'][$i];
			$data['POSTTIDAK']=$data['POSTTIDAK']*$data['SLCTIDAK'][$i];
			}

		
		


			$data['jkr']=  $this->spk_model->GetJenisKriteriaList();
			// generate table data
			$tmpl = array (
                    'table_open'          => '<table class="table table-hover">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr>',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );

			$this->table->set_template($tmpl);
			$this->load->library('table');
			$this->table->set_empty("&nbsp;");
			// $new_order = ($order_type == 'asc' ? 'desc' : 'asc');
			$this->table->set_heading('No',
				'Jenis_Kriteria',
				'Likelihood YA ',	
				'Likelihood TIDAK ',
				'Nilai'			
			);
			$i = 0 + $offset;
			// foreach ($jkr as $jenis ) {
			// 	$data['jenis'][1]
			// }
			$lkhood=$this->spk_model->GetLikelihood()->result();
			foreach ($lkhood as $likedata) {
				
				$this->table->add_row($likedata->id_jenis,
									$likedata->jenis_kriteria,
									$likedata->ya,
									$likedata->tidak,
									$likedata->nilai
					);
				
			}
			$data['table'] = $this->table->generate();

			
		for($i=1;$i<=8;$i++){
            $Selected[$i] = array('id_input'=>$data['kr'][$i],
                                    'sel_ya' => $data['SLCYA'][$i],
                                    'sel_tidak' => $data['SLCTIDAK'][$i],
                                    );
            $id2[$i] = $this->spk_model->InsertData2($Selected[$i]);
		}

		$select=$this->spk_model->GetSelected()->result();
			$this->table->set_template($tmpl);
			$this->load->library('table');
			$this->table->set_empty("&nbsp;");
			// $new_order = ($order_type == 'asc' ? 'desc' : 'asc');
			$this->table->set_heading('No',
				'Nama Kriteria','Bobot',
				'Jenis_Kriteria',
				'Selected Likelihood YA ',
				'Selected Likelihood TIDAK '
			);
			$i = 0 + $offset;
			
		foreach ($select as $selected) {
			
				$this->table->add_row($selected->id,
						$selected->Nama_kriteria,
						$selected->bobot,
						$selected->jenis_kriteria,
						$selected->sel_ya,
						$selected->sel_tidak
				);
			}
		$data['table2'] = $this->table->generate();

		$this->table->set_template($tmpl);
			$this->load->library('table');
			$this->table->set_empty("&nbsp;");
			// $new_order = ($order_type == 'asc' ? 'desc' : 'asc');
			$this->table->set_heading(
				'Posterior YA ',
				'Posterior TIDAK '
			);
			$i = 0 + $offset;
		
				$this->table->add_row(
									$data['POSTYA'],
									$data['POSTTIDAK']
				);
		$data['table3'] = $this->table->generate();

	//Pengitungan nirmalisasi bobot
		$TotBobot=$this->spk_model->GetSUMK()->row();
		$TotNilai=$this->spk_model->GetSUMJK()->row();

		for ($i=1;$i<=8;$i++){
			$data['bobot'][$i]=$this->spk_model->GetBobot($i)->row();
			//$data['normBobot'][$i]=$data['bobot'][$i]/$TotBobot;
		}

		$this->table->set_template($tmpl);
			$this->load->library('table');
			$this->table->set_empty("&nbsp;");
			// $new_order = ($order_type == 'asc' ? 'desc' : 'asc');
			$this->table->set_heading(
				'Normalisasi Bobot'
			);
			$i = 0 + $offset;
		for($i=1;$i<=8;$i++){
			$data['NormBo'][$i]=$data['bobot'][$i]->bobot/$TotBobot->bobot;
				for($j=1;$j<=20;$j++){
					if($data['kr'][$i]==$j){
				
				$data['SelBo'][$i]=$data['bobot'][$i]->bobot;
					}
			}
				$this->table->add_row(
									// $data['bobot'][$i]
					$data['NormBo'][$i]
					
				);
			}
		$data['table4'] = $this->table->generate();

$this->table->set_template($tmpl);
			$this->load->library('table');
			$this->table->set_empty("&nbsp;");
			// $new_order = ($order_type == 'asc' ? 'desc' : 'asc');
			$this->table->set_heading(
				'Kesimpulan'
			);
			$i = 0 + $offset;
		// for($i=1;$i<=8;$i++){ 
		// 	// $data['']	$data['S'][$i]
		// 	$data['S']=$data['bobot'][$i]->bobot^$data['SelBo'][$i];
			
		// 		if ($i==2 or $i==5){
				
		// 					$data['S']=$data['S']*$data['bobot'][$i]->bobot^-($data['SelBo'][$i]);
		// 		}else{
		// 					$data['S']=$data['S']*$data['bobot'][$i]->bobot^$data['SelBo'][$i];
		// 		}
		
		// 	}

			if($data['POSTYA']>$data['POSTTIDAK']){$HASIL='STRATEGIS';}
			else{$HASIL='STRATEGIS';}

			$this->table->add_row(
				$HASIL
				);
		$data['table5'] = $this->table->generate();

			$this->load->view('header.php',$data);
			$this->load->view('result.php',$data);
			$this->load->view('footer.php',$data);		
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */