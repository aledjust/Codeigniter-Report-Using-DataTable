<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hpm extends CI_Controller {
	
	function __construct(){
        parent:: __construct();
		$this->load->database();
		$this->load->helper(array('form', 'url', 'text_helper', 'date', 'security'));
		$this->load->library(array('session'));
    }
	
	/* ======================================================== 
	 * This function for each view of page
	 * Region Function Load View 
	*/
	public function index()
	{
		$data = array();
		$data['menu_name'] = 'Dashboard';
		$data['menu_desc'] = 'Hello user, Aled, Basit, Angel...';
		$this->load->view('header');
		$this->load->view('landing', $data);
		$this->load->view('footer');
	}
	
	public function vqhandovertodel()
	{
		$data = array();
		$data['menu_name'] = 'VQ Handover To Del';
		$data['menu_desc'] = 'Vehiqle quality handover to delivery';
		$this->load->view('header');
		$this->load->view('vqhandovertodel', $data);
		$this->load->view('footer');
	}
	public function vqreturnfrompdi()
	{
		$data = array();
		$data['menu_name'] = 'VQ Return From PDI';
		$data['menu_desc'] = 'Vehiqle quality return from pdi';
		$this->load->view('header');
		$this->load->view('vqreturnfrompdi', $data);
		$this->load->view('footer');
	}
	public function delhandoverfromvq()
	{
		$data = array();
		$data['menu_name'] = 'Del handover from VQ';
		$data['menu_desc'] = 'Delivery handover from vehiqle quality';
		$this->load->view('header');
		$this->load->view('delhandoverfromvq', $data);
		$this->load->view('footer');
	}
	public function pdireturnfromvq()
	{
		$data = array();
		$data['menu_name'] = 'PDI Return from VQ';
		$data['menu_desc'] = 'Pdi return from vehiqle quality';
		$this->load->view('header');
		$this->load->view('pdireturnfromvq', $data);
		$this->load->view('footer');
	}
	public function pdarepairqueue()
	{
		$data = array();
		$data['menu_name'] = 'Repair Que List';
		$data['menu_desc'] = 'Repair queue list';
		$this->load->view('header');
		$this->load->view('pdarepairqueue', $data);
		$this->load->view('footer');
	}
	
	/* EndRegion Function Load View */
	
	
	
	/* ======================================================== 
	 * This function for each get datasource of datatable
	 * Region Function Get Datasource
	*/
	function Getvqhandovertodel()
	{
		$this->load->model('vqhandovertodel_mdl');
		echo $this->vqhandovertodel_mdl->table_vqhandovertodel();
	}	
	function Getvqreturnfrompdi()
	{
		$this->load->model('vqreturnfrompdi_mdl');
		echo $this->vqreturnfrompdi_mdl->table_vqreturnfrompdi();
	}	
	function Getdelhandoverfromvq()
	{
		$this->load->model('delhandoverfromvq_mdl');
		echo $this->delhandoverfromvq_mdl->table_delhandoverfromvq();
	}	
	function Getpdireturnfromvq()
	{
		$this->load->model('pdireturnfromvq_mdl');
		echo $this->pdireturnfromvq_mdl->table_pdireturnfromvq();
	}	
	function Getrepairquelist()
	{
		$this->load->model('pdarepairqueue_mdl');
		echo $this->pdarepairqueue_mdl->table_pdarepairqueue();
	}
	
	/* EndRegion Function Get Datasource */
	
	
	/* ======================================================== 
	 * This function for each export excel of report
	 * Region Function export excel of report
	*/
	function Exportvqhandovertodel()
	{
		$this->load->model('vqhandovertodel_mdl');
		$sQuery = $this->vqhandovertodel_mdl->ExportExcel();
		//print_r($sQuery);
		$this->load->library('Excel_generator');
		
		$aColumns = array('Model','FrmNo','Kode','Keterangan','Colour','Repair','Status','NrkVq','NrkDelivery','InspectionDate');
		
		$this->excel_generator->set_query($sQuery);
		$this->excel_generator->set_headertitle("VQ HANDOVER TO DEL REPORT");
		$this->excel_generator->set_headertitlefontsize(16);
		$this->excel_generator->set_headertitlestart("A1");
		$this->excel_generator->set_headertitleend("J1");
        $this->excel_generator->set_header(array('MODEL', 'FRAME NO', 'CODE', 'DESCRIPTION', 'COLOUR', 'REPAIR', 'STATUS', 'NRK VQ', 'NRK DELIVERY', 'INSPECTION DATE'));
        $this->excel_generator->set_column($aColumns);
        $this->excel_generator->set_width(array(25, 25, 25, 30, 25, 25, 15, 30, 15, 25));
        $this->excel_generator->exportTo2007('VQ HANDOVER TO DEL REPORT');
	}
	function Exportvqreturnfrompdi()
	{
		$this->load->model('vqreturnfrompdi_mdl');
		$sQuery = $this->vqreturnfrompdi_mdl->ExportExcel();
		//print_r($sQuery);
		$this->load->library('Excel_generator');
		
		$aColumns = array('Model','FrmNo','Kode','Keterangan','Colour','Problem','JenisKerusakan','Remark','NrkVq','NrkDelivery','InspectionDate');
		
		$this->excel_generator->set_query($sQuery);
		$this->excel_generator->set_headertitle("VQ RETURN FROM PDI REPORT");
		$this->excel_generator->set_headertitlefontsize(16);
		$this->excel_generator->set_headertitlestart("A1");
		$this->excel_generator->set_headertitleend("K1");
        $this->excel_generator->set_header(array('MODEL', 'FRAME NO', 'CODE', 'DESCRIPTION', 'COLOUR', 'PROBLEM', 'RAVAGE', 'REMARK', 'NRK VQ', 'NRK DELIVERY', 'INSPECTION DATE'));
        $this->excel_generator->set_column($aColumns);
        $this->excel_generator->set_width(array(25, 25, 25, 30, 25, 25, 30, 30, 15, 25, 25));
        $this->excel_generator->exportTo2007('VQ RETURN FROM PDI REPORT');
	}
	function Exportdelhandoverfromvq()
	{
		$this->load->model('delhandoverfromvq_mdl');
		$sQuery = $this->delhandoverfromvq_mdl->ExportExcel();
		//print_r($sQuery);
		$this->load->library('Excel_generator');
		
		$aColumns = array('Model','FrmNo','Kode','Keterangan','Colour','Repair','Status','NrkVq','NrkDelivery','InspectionDate');
		
		$this->excel_generator->set_query($sQuery);
		$this->excel_generator->set_headertitle("DEL HANDOVER FROM VQ REPORT");
		$this->excel_generator->set_headertitlefontsize(16);
		$this->excel_generator->set_headertitlestart("A1");
		$this->excel_generator->set_headertitleend("J1");
        $this->excel_generator->set_header(array('MODEL', 'FRAME NO', 'CODE', 'DESCRIPTION', 'COLOUR', 'REPAIR', 'STATUS', 'NRK VQ', 'NRK DELIVERY', 'INSPECTION DATE'));
        $this->excel_generator->set_column($aColumns);
        $this->excel_generator->set_width(array(25, 25, 25, 30, 25, 25, 30, 30, 30, 25, 25));
        $this->excel_generator->exportTo2007('DEL HANDOVER FROM VQ REPORT');
	}
	function Exportpdireturnfromvq()
	{
		$this->load->model('pdireturnfromvq_mdl');
		$sQuery = $this->pdireturnfromvq_mdl->ExportExcel();
		//print_r($sQuery);
		$this->load->library('Excel_generator');
		
		$aColumns = array('Model','FrmNo','Kode','Keterangan','Colour','Problem','JenisKerusakan','Remark','NrkVq','NrkDelivery','InspectionDate');
		
		$this->excel_generator->set_query($sQuery);
		$this->excel_generator->set_headertitle("PDI RETURN FROM VQ REPORT");
		$this->excel_generator->set_headertitlefontsize(16);
		$this->excel_generator->set_headertitlestart("A1");
		$this->excel_generator->set_headertitleend("K1");
        $this->excel_generator->set_header(array('MODEL', 'FRAME NO', 'CODE', 'DESCRIPTION', 'COLOUR', 'PROBLEM', 'RAVAGE', 'REMARK', 'NRK VQ', 'NRK DELIVERY', 'INSPECTION DATE'));
        $this->excel_generator->set_column($aColumns);
        $this->excel_generator->set_width(array(25, 25, 25, 30, 25, 25, 30, 30, 15, 25, 25));
        $this->excel_generator->exportTo2007('PDI RETURN FROM VQ REPORT');
	}
	function Exportrepairquelist()
	{
		$this->load->model('pdarepairqueue_mdl');
		$sQuery = $this->pdarepairqueue_mdl->ExportExcel();
		//print_r($sQuery);
		$this->load->library('Excel_generator');
		
		$aColumns = array('FrmNo','VehicleNo','Colour','Model','Type','HandoverPdiToVq','NrkPdi','NrkVq','History','Problem','Status');
		$imgPath = "asset/img/honda.png";
		$this->excel_generator->my_constants();
		$this->excel_generator->set_query($sQuery);
		$this->excel_generator->set_headertitle("REPAIR QUE LIST");
		$this->excel_generator->set_smalltextheader("PRE DELIVERY INSPECTION- HONDA PROSPECT MOTOR INDONESIA");
		$this->excel_generator->set_imagefile($imgPath);
		$this->excel_generator->set_headertitlefontsize(28);
		$this->excel_generator->set_headertitlestart("C1");
        $this->excel_generator->set_header(array('FRAME NO', 'VEHICLE NO', 'COLOUR', 'MODEL', 'TYPE', 'HANDOVER FROM PDI-VQ', 'NRK PDI', 'NRK VQ', 'HISTORY', 'PROBLEM', 'STATUS'));
        $this->excel_generator->set_column($aColumns);
        $this->excel_generator->set_width(array(25, 25, 25, 30, 25, 25, 30, 30, 30, 25, 25));
        $this->excel_generator->exportTo2007Custom('REPORT QUEUE LIST');
	}
}
