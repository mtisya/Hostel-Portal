<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<span id="spryselect1">
<label for="gender">gender</label>
<br />
<br />
<select name="gender" id="gender"><option>male<option>female</option>
</select>
<span class="selectRequiredMsg">Please select an item.</span></span>
<p>
  <script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
  </script>
  <span id="spryselect1">
  <label for="semester">semester</label>
  <br />
  </span></p>
<p><span>
  <select name="semester" id="semester">
    <option>I
      <option>II
        <option>III</option>
    </select>
  <span class="selectRequiredMsg">Please select an item.</span></span>
  <p>
<script type="text/javascript">
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
  </script>
</body>
</html>