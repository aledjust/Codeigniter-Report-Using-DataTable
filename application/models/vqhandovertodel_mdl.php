<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vqhandovertodel_mdl extends CI_Model{
    #code
    function __construct(){
        parent:: __construct();		
    }
		
	function table_vqhandovertodel()
	{
		$aColumns = array('Model','FrmNo','Kode','Keterangan','Colour','Repair','Status','NrkVq','NrkDelivery','InspectionDate');
		
		$sIndexColumn = "RowId";
		$primary = "RowId";
		
		$sTable = "txhandovertodel";
		
		$sWhere = '';
		$quality = $_GET['qf'];
		if($quality == '1'){
			$sWhere = ' WHERE Status = 1';
		}
		else if($quality == '0'){
			$sWhere = ' WHERE Status = 0';
		}
		else {
			$sWhere = '';
		}
		
		/*
		 * Filtering Date
		*/
		$StartInsDate = $_GET['startInsDate'];
		$EndInsDate = $_GET['endInsDate'];
		if($StartInsDate <> '' && $EndInsDate <> ''){
			if($sWhere == ''){
				$sWhere .= " WHERE ( Convert(VARCHAR(10),InspectionDate,101) >= Convert(Varchar(10),'$StartInsDate',101) 
							AND Convert(VARCHAR(10),InspectionDate,101) <= Convert(Varchar(10),'$EndInsDate',101) ) ";
			}
			else
			{
				$sWhere .= " AND ( Convert(VARCHAR(10),InspectionDate,101) >= Convert(Varchar(10),'$StartInsDate',101) 
							AND Convert(VARCHAR(10),InspectionDate,101) <= Convert(Varchar(10),'$EndInsDate',101) ) ";
			}
		}
		
		/*
		 * Ordering
		*/
		$sOrder = " ORDER BY InspectionDate DESC";
		if(isset($_GET['iSortCol_0'])){
			$sOrder = "ORDER BY ";
			for($i = 0 ; $i < intval($_GET['iSortingCols']); $i++){
				if($_GET['bSortable_' . intval($_GET['iSortCol_' . $i])] == "true"){
					$sOrder .= $aColumns[intval($_GET['iSortCol_' . $i])] . "
										" . stripslashes($_GET['sSortDir_' . $i]) . ", ";
				}
			}
			
			$sOrder = substr_replace($sOrder, "", -2);
			if($sOrder == "ORDER BY"){
				$sOrder = "ORDER BY $primary ASC";
			}
		}
		
		/*
		 * Filtering
		*/
		if(isset($_GET['sSearch']) && $_GET['sSearch'] != ""){
			if($sWhere == ''){
				$sWhere .= "WHERE (";
				for($i = 0; $i < count($aColumns); $i++){
					$sWhere .= $aColumns[$i] . " LIKE '%" . stripslashes($_GET['sSearch']) . "%' OR ";
				}
				$sWhere = substr_replace($sWhere, "", -3);
				$sWhere .= ')';
			} else {
				$sWhere .= " AND (";
				for($i = 0; $i < count($aColumns); $i++){
					$sWhere .= $aColumns[$i] . " LIKE '%" . stripslashes($_GET['sSearch']) . "%' OR ";
				}
				$sWhere = substr_replace($sWhere, "", -3);
				$sWhere .= ')';
			}
		}
		
		$sLimit = "";
		if(isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1'){
			if($_GET['iDisplayStart'] == 0){
				$endn = $_GET['iDisplayStart'] + $_GET['iDisplayLength'];
				$sLimit = " WHERE RowNumber BETWEEN " . $_GET['iDisplayStart'] . " AND " . $endn;
			} else {
				$start = $_GET['iDisplayStart'] + 1;
				$endn = $start + ($_GET['iDisplayLength'] -1);
				$sLimit = " WHERE RowNumber BETWEEN " . $start . " AND " . $endn;
			}
		}
		
		/*
		  * Individual column filtering
		 */
		 for($i = 0; $i < count($aColumns); $i++){
			 if(isset($_GET['bSearchable_' . $i]) && $_GET['bSearchable_' . $i] == "true" && $_GET['sSearch_' . $i] != ''){
				 if($sWhere == ""){
					 $sWhere = "WHERE ";
				 } else {
					 $sWhere .= " AND ";
				 }
				 $sWhere .= $aColumns[$i] . " LIKE '%" . stripslashes($_GET['sSearch_' . $i]) . "%' ";
			 }
		 }
		 
		 /* SQL queries
		  * Get data to display
		 */
		 $sQuery = "
				 WITH xtra AS
				 (
					SELECT " . str_replace(" , ", " ", implode(", ", $aColumns)) . ",
					ROW_NUMBER() OVER (ORDER BY $sIndexColumn) AS 'RowNumber'
					FROM $sTable $sWhere
				 )
				 
				 SELECT * FROM xtra
				 $sLimit
				 $sOrder;
				";
		//return $sQuery;
		$rResult = $this->db->query($sQuery);
		
		/* Data set length after filtering */
		$sQuery = "SELECT COUNT('". $sIndexColumn . "') AS Dum FROM $sTable $sWhere ";
		$rResultFilterTotal = $this->db->query($sQuery);
		foreach($rResultFilterTotal->result() as $aResultFilterTotal){
			$iFilteredTotal = $aResultFilterTotal->Dum;
		}
		
		/* Total data set length */
		$sQuery = "SELECT COUNT(" . $sIndexColumn . ") AS Count FROM $sTable ";
		$rResultTotal = $this->db->query($sQuery);
		$aResultTotal = $rResultTotal->row();
		$iTotal = $aResultTotal->Count;
		
		/* 
		 * Output
		 */
		 $output = array(
			"sEcho" => intval($_GET['sEcho']),
			"iTotalRecords" => $iTotal,
			"iTotalDisplayRecords" => $iFilteredTotal,
			"aaData" => array()
		 );
		 
		foreach($rResult->result_array() AS $aRow){
			$row = array();
			 
			 // Add the row ID and class to the object
			 for($i = 0 ; $i < count($aColumns); $i++){
				 if($aColumns[$i] == "version") {
					 /* special output formatting for 'version' column */
					 $row[] = ($aRow[$aColumns[$i]] == "0") ? '-' : $aRow[$aColumns[$i]];					 
				 }
				 else if($aColumns[$i] == $sIndexColumn) {
					 /* general output */
					 $row[] = "<a href='#' id='" . $aRow[$primary] . "'>" . $aRow[$sIndexColumn] . "</a>";					 
				 }
				 else if($aColumns[$i] == 'Status') {
					 if($aRow['Status'] == '1'){
						 $row[] = "GOOD";
					 } else {
						 $row[] = "NOT GOOD";
					 }
				 } else if($aColumns[$i] != ' ') {
					 /* general output */
					 $row[] = $aRow[$aColumns[$i]];					 
				 }
			 }
			$output['aaData'][] = $row;
		}
		 
		 return json_encode($output);
	}
	
	function ExportExcel()
	{
		$aColumns = array('Model','FrmNo','Kode','Keterangan','Colour','Repair','Status','NrkVq','NrkDelivery','InspectionDate');
		
		$sIndexColumn = "RowId";
		$primary = "RowId";
		
		$sTable = "txhandovertodel";
		
		$sWhere = '';
		$quality = $_GET['qf'];
		if($quality == '1'){
			$sWhere = ' WHERE Status = 1';
		}
		else if($quality == '0'){
			$sWhere = ' WHERE Status = 0';
		}
		else {
			$sWhere = '';
		}
		
		/*
		 * Filtering Date
		*/
		$StartInsDate = $_GET['startInsDate'];
		$EndInsDate = $_GET['endInsDate'];
		if($StartInsDate <> '' && $EndInsDate <> ''){
			if($sWhere == ''){
				$sWhere .= " WHERE ( Convert(VARCHAR(10),InspectionDate,101) >= Convert(Varchar(10),'$StartInsDate',101) 
							AND Convert(VARCHAR(10),InspectionDate,101) <= Convert(Varchar(10),'$EndInsDate',101) ) ";
			}
			else
			{
				$sWhere .= " AND ( Convert(VARCHAR(10),InspectionDate,101) >= Convert(Varchar(10),'$StartInsDate',101) 
							AND Convert(VARCHAR(10),InspectionDate,101) <= Convert(Varchar(10),'$EndInsDate',101) ) ";
			}
		}
				
		/*
		 * Filtering
		*/
		if(isset($_GET['sSearch']) && $_GET['sSearch'] != ""){
			if($sWhere == ''){
				$sWhere .= "WHERE (";
				for($i = 0; $i < count($aColumns); $i++){
					$sWhere .= $aColumns[$i] . " LIKE '%" . stripslashes($_GET['sSearch']) . "%' OR ";
				}
				$sWhere = substr_replace($sWhere, "", -3);
				$sWhere .= ')';
			} else {
				$sWhere .= " AND (";
				for($i = 0; $i < count($aColumns); $i++){
					$sWhere .= $aColumns[$i] . " LIKE '%" . stripslashes($_GET['sSearch']) . "%' OR ";
				}
				$sWhere = substr_replace($sWhere, "", -3);
				$sWhere .= ')';
			}
		}
		
		$sQuery = "SELECT Model, FrmNo, Kode, Keterangan, Colour, Repair, 
				   CASE WHEN Status = '1' THEN 'GOOD' ELSE 'NOT GOOD' END AS Status,
				   NrkVq, NrkDelivery, InspectionDate FROM $sTable $sWhere";
		
		$rResult = $this->db->query($sQuery);
		
		return $rResult;
	}
}