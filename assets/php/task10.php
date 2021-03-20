<?php 
  include "header.php"; 

  // include connection settings
  require_once "connectdb.php";
?>
  
  <p>Enter module details to create a new module</p>

  <form method="post" action="">
    <fieldset>
      <legend>Create module</legend>

      <label for="module-code">Module Code</label>
      <input id="module-code" name="module-code" type="text" value="" />

      <label for="module-name">Module Name</label>
      <input id="module-name" name="module-name" type="text" value="" />

      <input type="submit" value="Submit" />
    </fieldset>
  </form>

  <?php

    // only add to the database if the form has been submitted
    if (!empty($_POST) && !empty($_POST['module-code']) && !empty($_POST['module-name'])) { 

      // save a reference to the module name
      $moduleCode = $_POST['module-code'];
      $moduleName = $_POST['module-name'];

      // insert SQL query
      $query = "INSERT INTO `modules` (`module_code`, `module_name`) VALUES ('".$moduleCode."', '".$moduleName."')";

      // perform the query
      $result = $db->query($query);

      // check the query was successful
      if ($result) {

        // output a count of how many rows were changed
        echo "<p>SQL successful, affected rows: " . $db->affected_rows . "</p>";

      // there was an SQL error
      } else {
          echo "SQL Error: " . $db->error;
      }
    }  
?>
<hr/>
<p><em>Current modules</em></p>
<ul>
<?php
    // get a list of all modules in the database
    $query = "SELECT * FROM `modules`";
    $result = $db->query($query);
    while ($row = $result->fetch_assoc()) {
      echo '
        <li><em>' . $row['module_code'] . '</em> = <strong>'.$row['module_name'].'</strong></li>
      ';
    }

?>
</ul>
<?php 
  include "footer.php"; 
?>