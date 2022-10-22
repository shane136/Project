<link rel="stylesheet" type="text/css" href="../assets/css/voter.css">
<script src="../assets/js/voter.js"></script>

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
        <button onclick="showPanel(0,'#f44336')">Tab 1</button>
        <button onclick="showPanel(1,'#4caf50')">Tab 2</button>
        <button onclick="showPanel(2,'#2196f3')">Tab 3</button>
        <button onclick="showPanel(3,'#ff5722')">Tab 4</button>
    </div>
    <div class="tabPanel">Tab 1:Content</div>
    <div class="tabPanel">Tab 2:Content</div>
    <div class="tabPanel">Tab 3:Content</div>
    <div class="tabPanel">Tab 4:Content</div>
</div>

				
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
				</div>
			
		</div>
	</div>
</div>

