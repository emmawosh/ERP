<!-- <!DOCTYPE html>
<html>
<style>
th,td {
  padding: 5px;
}
</style>
<body> -->
<?php include_once ("header.php");?>
<h2>The XMLHttpRequest Object</h2>

<form action=""> 
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select a customer:</option>
    <option value="ALFKI">Alfreds Futterkiste</option>
    <option value="NORTS ">North/South</option>
    <option value="WOLZA">Wolski Zajazd</option>
  </select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<script>
function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "hullerAjax.php?q="+str);
  xhttp.send();
}
</script>
</body>
</html>