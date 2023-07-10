<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>

<div class="container">

<div class="forms" method="Post">
<h3>Creating table and column</h3>
      
<form action="/inserttable" method="post" class="">

    <label for="">Select Database Name</label><br>  
          <select name="databasename" id="">

          <?php foreach($dbNames as $dbname): ?>
            <option value="<?php $names->Database ?>"> <?php echo $names->Database ?>  </option>

            <?php endforeach; ?>
          </select><br>

          <label for="">Table Name</label><br>
          <input type="text" name="tableName" class="tablename"><br>

          <label for="">Add Column </label> <br>
          <div class="addColumn">

                    <input type="text" name="columnName[]">
                    <select name="dataTypes[]">
                        <option value="int">Number</option>
                        <option value="varchar(255)">Text</option>
                        <option value="timestamp">Date Time</option>
                    </select>
                </div>

            <button type="submit">Create Table</button><br> 
         
      <button>Add More Column</button>


    </form>
</div>
</div>
    
</body>
</html>