<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}
 ?>

<section id="timekeeper">
<h1>Timekeeper Data</h1>
<div style="overflow-x:auto;">
<table style="width:750px">
<caption>Timekeper 1</caption>
  <tr class = "head">
    <th rowspan="3">Speaker</th>
    <th colspan="2">Prepared Speech</th>
    <th colspan="2">Impromtu speech</th>
  </tr>
  <tr class = "head">
    <th colspan="2">Duration</th>
    <th colspan="2">Duration</th>
  </tr>
  <tr  class = "head">
    <th>min</th>
    <th>sec</th>
    <th>min</th>
    <th>sec</th>
  </tr>
  <!-- <form action="/wherever the wind blows.abc"> -->
    <tr class = "alternate1">
      <td>1.</td>
      <td><input type="text" name="T1_1_p_min" id="T1r1c1" min="0"></td>
      <td><input type="text" name="T1_1_p_sec" id="T1r1c2" min="0"></td>

      <td><input type="text" name="T1_1_i_min" id="T1r1c3" min="0"></td>
      <td><input type="text" name="T1_1_i_sec" id="T1r1c4" min="0"></td>
    </tr>
    <tr class = "alternate2">
      <td>2.</td>
      <td><input type="text" name="T1_2_p_min" id="T1r2c1" min="0"></td>
      <td><input type="text" name="T1_2_p_sec" id="T1r2c2" min="0"></td>

      <td><input type="text" name="T1_2_i_min" id="T1r2c3" min="0"></td>
      <td><input type="text" name="T1_2_i_sec" id="T1r2c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>3.</td>
      <td><input type="text" name="T1_3_p_min" id="T1r3c1" min="0"></td>
      <td><input type="text" name="T1_3_p_sec" id="T1r3c2" min="0"></td>

      <td><input type="text" name="T1_3_i_min" id="T1r3c3" min="0"></td>
      <td><input type="text" name="T1_3_i_sec" id="T1r3c4" min="0"></td>
    </tr>
    <tr class = "alternate2">
      <td>4.</td>
      <td><input type="text" name="T1_4_p_min" id="T1r4c1" min="0"></td>
      <td><input type="text" name="T1_4_p_sec" id="T1r4c2" min="0"></td>

      <td><input type="text" name="T1_4_i_min" id="T1r4c3" min="0"></td>
      <td><input type="text" name="T1_4_i_sec" id="T1r4c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>5.</td>
      <td><input type="text" name="T1_5_p_min" id="T1r5c1" min="0"></td>
      <td><input type="text" name="T1_5_p_sec" id="T1r5c2" min="0"></td>

      <td><input type="text" name="T1_5_i_min" id="T1r5c3" min="0"></td>
      <td><input type="text" name="T1_5_i_sec" id="T1r5c4" min="0"></td>
    </tr>
    <tr class = "alternate2">
      <td>6.</td>
      <td><input type="text" name="T1_6_p_min" id="T1r6c1" min="0"></td>
      <td><input type="text" name="T1_6_p_sec" id="T1r6c2" min="0"></td>

      <td><input type="text" name="T1_6_i_min" id="T1r6c3" min="0"></td>
      <td><input type="text" name="T1_6_i_sec" id="T1r6c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>7.</td>
      <td><input type="text" name="T1_7_p_min" id="T1r7c1" min="0"></td>
      <td><input type="text" name="T1_7_p_sec" id="T1r7c2" min="0"></td>

      <td><input type="text" name="T1_7_i_min" id="T1r7c3" min="0"></td>
      <td><input type="text" name="T1_7_i_sec" id="T1r7c4" min="0"></td>
    </tr>
    <tr class = "alternate2">
      <td>8.</td>
      <td><input type="text" name="T1_8_p_min" id="T1r8c1" min="0"></td>
      <td><input type="text" name="T1_8_p_sec" id="T1r8c2" min="0"></td>

      <td><input type="text" name="T1_8_i_min" id="T1r8c3" min="0"></td>
      <td><input type="text" name="T1_8_i_sec" id="T1r8c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>9.</td>
      <td><input type="text" name="T1_9_p_min" id="T1r9c1" min="0"></td>
      <td><input type="text" name="T1_9_p_sec" id="T1r9c2" min="0"></td>

      <td><input type="text" name="T1_9_i_min" id="T1r9c3" min="0"></td>
      <td><input type="text" name="T1_9_i_sec" id="T1r9c4" min="0"></td>
    </tr>
    <tr class = "alternate2">
      <td>10.</td>
      <td><input type="text" name="T1_10_p_min" id="T1r10c1" min="0"></td>
      <td><input type="text" name="T1_10_p_sec" id="T1r10c2" min="0"></td>

      <td><input type="text" name="T1_10_i_min" id="T1r10c3" min="0"></td>
      <td><input type="text" name="T1_10_i_sec" id="T1r10c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>11.</td>
      <td><input type="text" name="T1_11_p_min" id="T1r11c1" min="0"></td>
      <td><input type="text" name="T1_11_p_sec" id="T1r11c2" min="0"></td>

      <td><input type="text" name="T1_11_i_min" id="T1r11c3" min="0"></td>
      <td><input type="text" name="T1_11_i_sec" id="T1r11c4" min="0"></td>
    </tr>
    <tr class = "alternate2">
      <td>12.</td>
      <td><input type="text" name="T1_12_p_min" id="T1r12c1" min="0"></td>
      <td><input type="text" name="T1_12_p_sec" id="T1r12c2" min="0"></td>

      <td><input type="text" name="T1_12_i_min" id="T1r12c3" min="0"></td>
      <td><input type="text" name="T1_12_i_sec" id="T1r12c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>13.</td>
      <td><input type="text" name="T1_13_p_min" id="T1r13c1" min="0"></td>
      <td><input type="text" name="T1_13_p_sec" id="T1r13c2" min="0"></td>

      <td><input type="text" name="T1_13_i_min" id="T1r13c3" min="0"></td>
      <td><input type="text" name="T1_13_i_sec" id="T1r13c4" min="0"></td>
    </tr>
    <tr class = "alternate2">
      <td>14.</td>
      <td><input type="text" name="T1_14_p_min" id="T1r14c1" min="0"></td>
      <td><input type="text" name="T1_14_p_sec" id="T1r14c2" min="0"></td>

      <td><input type="text" name="T1_14_i_min" id="T1r14c3" min="0"></td>
      <td><input type="text" name="T1_14_i_sec" id="T1r14c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>15.</td>
      <td><input type="text" name="T1_15_p_min" id="T1r15c1" min="0"></td>
      <td><input type="text" name="T1_15_p_sec" id="T1r15c2" min="0"></td>

      <td><input type="text" name="T1_15_i_min" id="T1r15c3" min="0"></td>
      <td><input type="text" name="T1_15_i_sec" id="T1r15c4" min="0"></td>
    </tr>
    <tr>
      <!-- <td><input type="submit" value="Submit"></td> -->
    </tr>
  <!-- </form> -->
</table>
</div>
<br>
<br>

<div style="overflow-x:auto;">
<table style="width:750px">
<caption>Timekeper 2</caption>
  <tr class = "head">
    <th rowspan="3">Speaker</th>
    <th colspan="2">Prepared Speech</th>
    <th colspan="2">Impromtu speech</th>
  </tr>
  <tr class = "head">
    <th colspan="2">Duration</th>
    <th colspan="2">Duration</th>
  </tr>
  <tr  class = "head">
    <th>min</th>
    <th>sec</th>
    <th>min</th>
    <th>sec</th>
  </tr>
  <!-- <form action="/wherever the wind blows.abc"> -->
    <tr class = "alternate1">
      <td>1.</td>
      <td><input type="text" name="T2_1_p_min" id="T2r1c1" min="0"></td>
      <td><input type="text" name="T2_1_p_sec" id="T2r1c2" min="0"></td>

      <td><input type="text" name="T2_1_i_min" id="T2r1c3" min="0"></td>
      <td><input type="text" name="T2_1_i_sec" id="T2r1c4" min="0"></td>
    </tr>
    <tr>
      <td>2.</td>
      <td><input type="text" name="T2_2_p_min" id="T2r2c1" min="0"></td>
      <td><input type="text" name="T2_2_p_sec" id="T2r2c2" min="0"></td>

      <td><input type="text" name="T2_2_i_min" id="T2r2c3" min="0"></td>
      <td><input type="text" name="T2_2_i_sec" id="T2r2c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>3.</td>
      <td><input type="text" name="T2_3_p_min" id="T2r3c1" min="0"></td>
      <td><input type="text" name="T2_3_p_sec" id="T2r3c2" min="0"></td>

      <td><input type="text" name="T2_3_i_min" id="T2r3c3" min="0"></td>
      <td><input type="text" name="T2_3_i_sec" id="T2r3c4" min="0"></td>
    </tr>
    <tr>
      <td>4.</td>
      <td><input type="text" name="T2_4_p_min" id="T2r4c1" min="0"></td>
      <td><input type="text" name="T2_4_p_sec" id="T2r4c2" min="0"></td>

      <td><input type="text" name="T2_4_i_min" id="T2r4c3" min="0"></td>
      <td><input type="text" name="T2_4_i_sec" id="T2r4c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>5.</td>
      <td><input type="text" name="T2_5_p_min" id="T2r5c1" min="0"></td>
      <td><input type="text" name="T2_5_p_sec" id="T2r5c2" min="0"></td>

      <td><input type="text" name="T2_5_i_min" id="T2r5c3" min="0"></td>
      <td><input type="text" name="T2_5_i_sec" id="T2r5c4" min="0"></td>
    </tr>
    <tr>
      <td>6.</td>
      <td><input type="text" name="T2_6_p_min" id="T2r6c1" min="0"></td>
      <td><input type="text" name="T2_6_p_sec" id="T2r6c2" min="0"></td>

      <td><input type="text" name="T2_6_i_min" id="T2r6c3" min="0"></td>
      <td><input type="text" name="T2_6_i_sec" id="T2r6c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>7.</td>
      <td><input type="text" name="T2_7_p_min" id="T2r7c1" min="0"></td>
      <td><input type="text" name="T2_7_p_sec" id="T2r7c2" min="0"></td>

      <td><input type="text" name="T2_7_i_min" id="T2r7c3" min="0"></td>
      <td><input type="text" name="T2_7_i_sec" id="T2r7c4" min="0"></td>
    </tr>
    <tr>
      <td>8.</td>
      <td><input type="text" name="T2_8_p_min" id="T2r8c1" min="0"></td>
      <td><input type="text" name="T2_8_p_sec" id="T2r8c2" min="0"></td>

      <td><input type="text" name="T2_8_i_min" id="T2r8c3" min="0"></td>
      <td><input type="text" name="T2_8_i_sec" id="T2r8c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>9.</td>
      <td><input type="text" name="T2_9_p_min" id="T2r9c1" min="0"></td>
      <td><input type="text" name="T2_9_p_sec" id="T2r9c2" min="0"></td>

      <td><input type="text" name="T2_9_i_min" id="T2r9c3" min="0"></td>
      <td><input type="text" name="T2_9_i_sec" id="T2r9c4" min="0"></td>
    </tr>
    <tr>
      <td>10.</td>
      <td><input type="text" name="T2_10_p_min" id="T2r10c1" min="0"></td>
      <td><input type="text" name="T2_10_p_sec" id="T2r10c2" min="0"></td>

      <td><input type="text" name="T2_10_i_min" id="T2r10c3" min="0"></td>
      <td><input type="text" name="T2_10_i_sec" id="T2r10c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>11.</td>
      <td><input type="text" name="T2_11_p_min" id="T2r11c1" min="0"></td>
      <td><input type="text" name="T2_11_p_sec" id="T2r11c2" min="0"></td>

      <td><input type="text" name="T2_11_i_min" id="T2r11c3" min="0"></td>
      <td><input type="text" name="T2_11_i_sec" id="T2r11c4" min="0"></td>
    </tr>
    <tr>
      <td>12.</td>
      <td><input type="text" name="T2_12_p_min" id="T2r12c1" min="0"></td>
      <td><input type="text" name="T2_12_p_sec" id="T2r12c2" min="0"></td>

      <td><input type="text" name="T2_12_i_min" id="T2r12c3" min="0"></td>
      <td><input type="text" name="T2_12_i_sec" id="T2r12c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>13.</td>
      <td><input type="text" name="T2_13_p_min" id="T2r13c1" min="0"></td>
      <td><input type="text" name="T2_13_p_sec" id="T2r13c2" min="0"></td>

      <td><input type="text" name="T2_13_i_min" id="T2r13c3" min="0"></td>
      <td><input type="text" name="T2_13_i_sec" id="T2r13c4" min="0"></td>
    </tr>
    <tr>
      <td>14.</td>
      <td><input type="text" name="T2_14_p_min" id="T2r14c1" min="0"></td>
      <td><input type="text" name="T2_14_p_sec" id="T2r14c2" min="0"></td>

      <td><input type="text" name="T2_14_i_min" id="T2r14c3" min="0"></td>
      <td><input type="text" name="T2_14_i_sec" id="T2r14c4" min="0"></td>
    </tr>
    <tr class = "alternate1">
      <td>15.</td>
      <td><input type="text" name="T2_15_p_min" id="T2r15c1" min="0"></td>
      <td><input type="text" name="T2_15_p_sec" id="T2r15c2" min="0"></td>

      <td><input type="text" name="T2_15_i_min" id="T2r15c3" min="0"></td>
      <td><input type="text" name="T2_15_i_sec" id="T2r15c4" min="0"></td>
    </tr>
    <tr>
      <!-- <td><input type="submit" value="Submit"></td> -->
    </tr>
  <!-- </form> -->
</table>
</div>
</section>
