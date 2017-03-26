<?php


function printScoreSheet($judge, $type,  $prevInput){

	$title = "Judge $judge";
	if($type == "P"){
		$title .= " Prepared Speech";
		$sheet_id = "J".$judge."P";
		$section_id = "judge_".$judge."_prepared";
	}
	else if($type =="I"){
		$title .= " Impromptu Speech";
		$sheet_id = "J".$judge."I";
		$section_id = "judge_".$judge."_impromptu";
	}
?>
<section id = "<?php echo $section_id?>">
<table id="<?php echo $sheet_id ?>">
	<caption><?php echo $title ?></caption>
	<thead><th>Introduction</th>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C0">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C1">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C2">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C3">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C4">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C5">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C6">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C7">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C8">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C9">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C10">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C11">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C12">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C13">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal1_C14">0</td>
</thead>
<tr class = "alternate1"><td>Aroused interest</td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R0C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R0C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R0C14"></td>
</tr>
<tr><td>Effective and appropriate presentation</td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R1C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R1C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R1C14"></td>
</tr>
<thead><th>Body of Speech</th>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C0">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C1">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C2">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C3">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C4">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C5">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C6">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C7">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C8">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C9">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C10">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C11">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C12">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C13">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal2_C14">0</td>
</thead>
<tr class = "alternate1"><td>Information complete & logically presented</td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R2C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R2C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R2C14"></td>
</tr>
<tr><td>Knowledgeable about the subject</td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R3C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R3C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R3C14"></td>
</tr>
<tr class = "alternate1"><td>Speech developed with originality</td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R4C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R4C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R4C14"></td>
</tr>
<tr><td>Proper and effective use of language</td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R5C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R5C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R5C14"></td>
</tr>
<tr class = "alternate1"><td>Kept to topic</td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R6C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R6C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R6C14"></td>
</tr>
<tr><td>Correct grammar</td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R7C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R7C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R7C14"></td>
</tr>
<thead><th>Conclusion</th>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C0">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C1">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C2">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C3">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C4">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C5">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C6">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C7">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C8">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C9">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C10">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C11">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C12">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C13">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal3_C14">0</td>
</thead>
<tr class = "alternate1"><td>Left audience with an appreciation of topic</td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R8C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R8C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R8C14"></td>
</tr>
<tr><td>Sums up material</td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R9C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R9C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R9C14"></td>
</tr>
<tr class = "alternate1"><td>Logical: a capsule of what has been said</td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R10C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R10C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R10C14"></td>
</tr>
<thead><th>Delivery and Style</th>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C0">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C1">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C2">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C3">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C4">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C5">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C6">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C7">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C8">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C9">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C10">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C11">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C12">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C13">0</td>
<th class="subtotal" id="<?php echo $sheet_id ?>subtotal4_C14">0</td>
</thead>
<tr class = "alternate1"><td>Spoke to audience with enthusiasm, confidence and eye contact</td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R11C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R11C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R11C14"></td>
</tr>
<tr><td>Rate of delivery</td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R12C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R12C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R12C14"></td>
</tr>
<tr class = "alternate1"><td>Proper stance, audible, correct pronunciation & enunciation</td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C0" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C0"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C0"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C1" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C1"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C1"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C2" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C2"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C2"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C3" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C3"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C3"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C4" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C4"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C4"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C5" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C5"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C5"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C6" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C6"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C6"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C7" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C7"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C7"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C8" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C8"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C8"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C9" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C9"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C9"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C10" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C10"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C10"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C11" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C11"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C11"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C12" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C12"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C12"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C13" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C13"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C13"></td>
<td><input type="number" name="<?php echo $sheet_id ?>R13C14" min="0" max="10"<?php if($prevInput){echo "value=\"".$tableData["R13C14"]."\"";}?> class="cell" id="<?php echo $sheet_id ?>R13C14"></td>
</tr>
<thead><th>Score</th>
<th class="total" id="<?php echo $sheet_id ?>total_C0">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C1">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C2">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C3">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C4">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C5">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C6">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C7">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C8">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C9">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C10">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C11">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C12">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C13">0.0</td>
<th class="total" id="<?php echo $sheet_id ?>total_C14">0.0</td>
</thead>
</table>
</section>

<?php
}
?>
