			<form action="/njsba/mr_poc/svc/Service/Complete" enctype="multipart/form-data" method="post">
				<div class="enter-po-number">Enter PO Number (required):</div>
				<input type="text" name="textline" size="30">
				<div class="select-po-file">Select a PO file to upload (must be a PDF file):</div>
				<input class="custom-file-input" placeholder="No file selected"  type="file" name="datafile" accept="application/pdf">
			</form>