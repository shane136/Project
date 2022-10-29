<link rel="stylesheet" type="text/css" href="../assets/css/voter.css">
<script src="../assets/js/voterTabs.js"></script>

<!-- Voter's List -->
<div id="voterStatusModal" class="modal fade bd-example-modal-xl">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			
				<div class="modal-header">						
					<h4 class="modal-title">Voter's Status List</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
		<div class="modal-body">

<div class="tabContainer">
    <div class="buttonContainer">
        <button onclick="showPanel('panelA')">Tab 1</button>
        <button onclick="showPanel('panelB')">Tab 2</button>
        <button onclick="showPanel('panelC')">Tab 3</button>
        <button onclick="showPanel('panelD')">Tab 4</button>
    </div>
    <div class="panel" id="panelA">Tab 1....</div>
    <div style="display: none;" class="panel" id="panelB">Tab 2.....</div>
    <div style="display: none;" class="panel" id="panelC">Tab 3.....</div>
    <div style="display: none;" class="panel" id="panelD">Tab 4.....</div>
</div>
			
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
				</div>
			
		</div>
	</div>
</div>

