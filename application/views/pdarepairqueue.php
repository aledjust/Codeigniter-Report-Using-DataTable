<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="span9">
		<div id="data1">
			<div class="hero-unit">
				<h1><?= $menu_name; ?></h1>
				<p><?= $menu_desc; ?></p>
			</div>

			<div class="clear"></div>

			<form class="form-inline">
				<label class="dropdown">
					Start Handover date PDI-VQ
					<input id="txtStartDate" class="datepicker" data-date-format="mm/dd/yyyy">
				</label>
				<label class="dropdown" style="margin-left:15px;">
					End Handover date PDI-VQ
					<input id="txtEndDate" class="datepicker" data-date-format="mm/dd/yyyy">
				</label>			
				<?= form_button('btnsrc', 'Search', array('id' => 'btnsrc', 'class' => 'btn', 'style' => 'margin-left:5px;')); ?>
			</form>
			<form class="form-inline">				
				<?= form_button('btnExportExcel', 'Export to excel', array('id' => 'btnExportExcel', 'class' => 'btn')); ?>
			</form>

			<div class="clear"></div>

			<div class="row-fluid">
				<div>
					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="list">
						<thead>
							<tr>
								<th>FRAME NO</th>
								<th>VEHICLE NO</th>
								<th>COLOUR</th>
								<th>MODEL</th>
								<th>TYPE</th>
								<th>HANDOVER PDI-VQ</th>
								<th>NRK PDI</th>
								<th>NRK VQ</th>
								<th>HISTORY</th>
								<th>PROBLEM</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
			<!--/row-->
				
<script type="text/javascript">
	$(document).ready(function() {
		$.fn.dataTableExt.oApi.fnReloadAjax = function(oSettings, sNewSource, fnCallback, bStandingRedraw)
        {
            if (sNewSource !== undefined && sNewSource !== null) {
                oSettings.sAjaxSource = sNewSource;
            }

            // Server-side processing should just call fnDraw
            if (oSettings.oFeatures.bServerSide) {
                this.fnDraw();
                return;
            }

            this.oApi._fnProcessingDisplay(oSettings, true);
            var that = this;
            var iStart = oSettings._iDisplayStart;
            var aData = [];

            this.oApi._fnServerParams(oSettings, aData);

            oSettings.fnServerData.call(oSettings.oInstance, oSettings.sAjaxSource, aData, function(json) {
                /* Clear the old information from the table */
                that.oApi._fnClearTable(oSettings);

                /* Got the data - add it to the table */
                var aData = (oSettings.sAjaxDataProp !== "") ?
                        that.oApi._fnGetObjectDataFn(oSettings.sAjaxDataProp)(json) : json;

                for (var i = 0; i < aData.length; i++)
                {
                    that.oApi._fnAddData(oSettings, aData[i]);
                }

                oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();

                that.fnDraw();

                if (bStandingRedraw === true)
                {
                    oSettings._iDisplayStart = iStart;
                    that.oApi._fnCalculateEnd(oSettings);
                    that.fnDraw(false);
                }

                that.oApi._fnProcessingDisplay(oSettings, false);

                /* Callback user function - for event handlers etc */
                if (typeof fnCallback == 'function' && fnCallback !== null)
                {
                    fnCallback(oSettings);
                }
            }, oSettings);
        };        
    
        var dTable = $('#list').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "bInfo": false,
			"sScrollX": "100%",
			"sScrollXInner": "150%",
			"bScrollCollapse": true,
            "sAjaxSource": "<?= base_url(); ?>getrepairquelist?startInsDate=&endInsDate=",
			"oLanguage"  : {
				"sSearch" : "Search",
				"sInfoFiltered" : ""
			},
			"fnDrawCallback": function( oSettings ) {
				$('.dataTables_filter input').attr("id", "sSearchExcel");				
				$('.contentImg').on({
					mousemove: function(e) {
						$(this).addClass('transitionImg');
					},
					mouseenter: function(ex) {
						$(this).addClass('transitionImg');
					},
					mouseleave: function() {
						$(this).removeClass('transitionImg');
					}					
				});
			}
        });

        $('#btnsrc').click(function(d) {
            var startInsDate = $('#txtStartDate').val();
			var endInsDate = $('#txtEndDate').val();
			
			if(endInsDate != "" && startInsDate == "")
			{
				alert("please fill start date");
				$('#txtStartDate').focus();
				return;
			}			
			else if(startInsDate != "" && endInsDate == "")
			{
				endInsDate = startInsDate;
			}
			
            var tarTab = "<?= base_url(); ?>getrepairquelist?startInsDate=" + startInsDate + "&endInsDate=" + endInsDate;				
            
			dTable.fnReloadAjax(tarTab);
            d.preventDefault();
        });    
		
		$('.datepicker').datepicker();     
        
    });
</script>       

<script src="<?= base_url(); ?>asset/jQuery/jquery.fileDownload.js"></script>
<script src="<?= base_url(); ?>asset/jQuery/jquery-3.1_0.js"></script>    
<script type='text/javascript'>var jq31 = $.noConflict(true);</script>


<script>
	jq31(document).ready(function() {
		jq31('#btnExportExcel').click(function() {
			var sSearch = jq31('#sSearchExcel').val();
			var startInsDate = jq31('#txtStartDate').val();
			var endInsDate = jq31('#txtEndDate').val();
			
			if(endInsDate != "" && startInsDate == "")
			{
				alert("please fill start date");
				jq31('#txtStartDate').focus();
				return;
			}			
			else if(startInsDate != "" && endInsDate == "")
			{
				endInsDate = startInsDate;
			}
			
            var tarTab = "<?= base_url(); ?>exportrepairquelist?startInsDate=" + startInsDate + "&endInsDate=" + endInsDate + "&sSearch=" + sSearch;
			
            $.fileDownload(tarTab);
			return false;
        });
	});
</script>  


		</div>
           
    </div><!--/span-->