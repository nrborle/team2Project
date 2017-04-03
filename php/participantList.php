<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}
 ?>

<section id="speakers">
   <table>
   <caption>Speakers List</caption>
      <thead><tr><th></th><th>Name</th><th>Squadron</th></tr></thead>
      <tbody>
		<tr class = "alternate1"><td>1</td><td><input type="text" name="P1" id = "P1"></td><td><input type="text" name="S1" id = "S1"></td></tr>
		<tr class = "alternate2"><td>2</td><td><input type="text" name="P2" id = "P2"></td><td><input type="text" name="S2" id = "S2"></td></tr>
		<tr class = "alternate1"><td>3</td><td><input type="text" name="P3" id = "P3"></td><td><input type="text" name="S3" id = "S3"></td></tr>
		<tr class = "alternate2"><td>4</td><td><input type="text" name="P4" id = "P4"></td><td><input type="text" name="S4" id = "S4"></td></tr>
		<tr class = "alternate1"><td>5</td><td><input type="text" name="P5" id = "P5"></td><td><input type="text" name="S5" id = "S5"></td></tr>
		<tr class = "alternate2"><td>6</td><td><input type="text" name="P6" id = "P6"></td><td><input type="text" name="S6" id = "S6"></td></tr>
		<tr class = "alternate1"><td>7</td><td><input type="text" name="P7" id = "P7"></td><td><input type="text" name="S7" id = "S7"></td></tr>
		<tr class = "alternate2"><td>8</td><td><input type="text" name="P8" id = "P8"></td><td><input type="text" name="S8" id = "S8"></td></tr>
		<tr class = "alternate1"><td>9</td><td><input type="text" name="P9" id = "P9"></td><td><input type="text" name="S9" id = "S9"></td></tr>
		<tr class = "alternate2"><td>10</td><td><input type="text" name="P10" id = "P10"></td><td><input type="text" name="S10" id = "S10"></td></tr>
		<tr class = "alternate1"><td>11</td><td><input type="text" name="P11" id = "P11"></td><td><input type="text" name="S11" id = "S11"></td></tr>
		<tr class = "alternate2"><td>12</td><td><input type="text" name="P12" id = "P12"></td><td><input type="text" name="S12" id = "S12"></td></tr>
		<tr class = "alternate1"><td>13</td><td><input type="text" name="P13" id = "P13"></td><td><input type="text" name="S13" id = "S13"></td></tr>
		<tr class = "alternate2"><td>14</td><td><input type="text" name="P14" id = "P14"></td><td><input type="text" name="S14" id = "S14"></td></tr>
		<tr class = "alternate1"><td>15</td><td><input type="text" name="P15" id = "P15"></td><td><input type="text" name="S15" id = "S15"></td></tr>
     </tbody>
   </table>
</section>
