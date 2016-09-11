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

			<!--<form class="form-inline">
				<label class="dropdown">
					Quality status 
					<?= form_dropdown('drpStatusInspeksi', array('all' => 'ALL', '1' => 'GOOD', '0' => 'NOT GOOD'), 'all','id=drpStatusInspeksi'); ?>					
				</label>
				<button type="button" class="btn" id="btnsrc">Search</button>
			</form>-->

			<div class="clear"></div>

			<div class="row-fluid">
				<div>
					<!--<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="list">
						<thead>
							<tr>
								<th>FRAME NUMBER</th>
								<th>ENGINE NUMBER</th>
								<th>KEY NUMBER</th>
								<th>INSPECTION DATE</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>-->
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
            "sAjaxSource": "<?= base_url(); ?>WHAT?qf=all"
        });

        $('#btnsrc').click(function(d) {
            var qF = $('#drpStatusInspeksi  option:selected').val();
            var tarTab = "<?= base_url(); ?>WHAT?qf=" + qF;
            dTable.fnReloadAjax(tarTab);
            d.preventDefault();
        });      
        
    });
</script>           
		</div>
           
    </div><!--/span-->