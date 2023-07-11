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
        <div class="tableform">
            <h3>insert Records</h3>
            <div class="inserttable">
                <form action="/getDatabase" method="post">
                    <label> Select DataBase</label> <br>
                    <div class="flex">
                    <div class="fetchtable">
                    <select name="database" class="selectdb">
                        <?php foreach ($dbNames as $db):?>
                            <option><?php  echo $db["Database"] ?></option>
                        <?php endforeach;?>
                    </select> <br>
                    </div>
                     <div class="getbtn">
                    <button class="getTableBtn">Submit</button>
                     </div>
                    </div>
                    </form>
                

                    <label for="">Select Table</label><br>
                    <select name="selectTable" class="selectdb" >
                        <?php  foreach ($tables as $table):?>
                            <?php var_dump($tables); ?>

                             <?php  var_dump($table);?>
                             
                               
                        <?php endforeach;?>
                    </select> <br>


                     <button class="addRecords">Add Records</button>




            </div>

        </div>
    </div>

</body>

</html>