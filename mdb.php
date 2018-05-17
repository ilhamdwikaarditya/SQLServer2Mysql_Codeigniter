<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdb extends CI_Model {
	function query($tabel="",$sql="",$limit=10000){
		
		$kolom	= $this->db->query("SHOW COLUMNS FROM $tabel");
		$TXclm	= "";
		$NOclm	= 0;
		foreach($kolom->result() as $cek_kolom){
			$NOclm++;
			$TXclm	.= $NOclm==1	? $cek_kolom->Field	: ",".$cek_kolom->Field	;
		}
		
		
		$DB2	= $this->load->database('mssql',TRUE);
		$query	= $DB2->query($sql);
		$line	= "";
		$jumlah_data	= $query->num_rows();

		if ($query->num_rows() == 0 ){
			continue;
		}
		$no_urut	= 0;
		$output = ''.$line;
		foreach ($query->result_array() as $row){
			$no_urut++;
			$val_str = '';
			$i = 0;
			foreach ($row as $v){
				if ($v === NULL){
					$val_str .= 'NULL';
				}else{
					$val_str .= $this->db->escape($v);
				}
				$val_str .= ', ';
				$i++;
			}
			$val_str = preg_replace( "/, $/" , "" , $val_str);

			if($no_urut%$limit==1){
				$output .= 'INSERT INTO '.$tabel.'('.$TXclm.') VALUES '.$line;
				if($no_urut!=$jumlah_data){
					$output .= ' ('.$val_str.'),'.$line ;
				}else{
					$output .= ' ('.$val_str.')|*|'.$line ;
				}
			}elseif($no_urut%$limit>1 and $no_urut!=$jumlah_data){
				$output .= ' ('.$val_str.'),'.$line ;
			}elseif($no_urut%$limit==0 or $no_urut==$jumlah_data){
				$output .= ' ('.$val_str.')|*|'.$line;
			}
		}

		$output .= $line.$line;
		
		$texts	= explode("|*|",$output);
		foreach($texts as $text){
			if(!empty($text)){
				$this->db->query($text);
			}
		}
		return $tabel;
	}
	
}