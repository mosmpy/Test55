<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title></title>

<style>

		/* Styles that are also copied for Preview */
		body {
			margin: 10px 0 0 10px;
		}
		
		.control-label {
			display: inline-block !important;
			pasdding-top: 5px;
			text-align: right;
			vertical-align: baseline;
			padding-right: 10px;
		}
		
		.droppedField {
			padding-left:5px;
		}

		.droppedField > input,select, button, .checkboxgroup, .selectmultiple, .radiogroup {
			margin-top: 10px;
			
			margin-right: 10px;
			margin-bottom: 10px;
		}

		.action-bar .droppedField {
			float: left;
			padding-left:5px;
		}

	
</style>
</head>
<body><legend>Form builder demo</legend>
		<!--[if lt IE 9]>
		<div class="row-fluid" id="form-title-div">
			<label>Type form title here...</label>
		</div>
		<![endif]-->
	  
	  
	  <div class="row-fluid" style="z-index: 23;">
		<div id="selected-column-1" class="span5 droppedFields" style="z-index: 24;"><div class="checkboxgroup droppedField" style="z-index: 32;" id="CTRL-DIV-1001">
			<label class="control-label" style="vertical-align:top">ลูกชิ้น</label>
			<div style="display: inline-block; z-index: 11;" class="ctrl-checkboxgroup"><label class="checkbox">ลูกชิ้นปลา<input type="checkbox" name="ลูกชิ้น" value="option1"></label><label class="checkbox">ลูกชิ้นเนื้อ<input type="checkbox" name="ลูกชิ้น" value="option1"></label></div>
		</div></div>
		<div id="selected-column-2" class="span5 droppedFields" style="z-index: 25;"></div>
	  </div>
	  <!-- Action bar - Suited for buttons on form -->
	  <div class="row-fluid" style="z-index: 26;">
		<div id="selected-action-column" class="span10 action-bar droppedFields" style="min-height: 80px; z-index: 27;"></div>
	  </div>
	<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Multiple Checkboxes (inline) -->
<div class="control-group">
  <label class="control-label" for="checkboxes">Inline Checkboxes</label>
  <div class="controls">
    <label class="checkbox inline" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      1
    </label>
    <label class="checkbox inline" for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      2
    </label>
    <label class="checkbox inline" for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
      3
    </label>
    <label class="checkbox inline" for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
      4
    </label>
  </div>
</div>

</fieldset>
</form>

</body></html>