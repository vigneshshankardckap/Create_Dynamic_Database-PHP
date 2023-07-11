
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
    <h3>Creating table and column</h3>
    <div class="inserttable">


        <form action="/CreateTable" method="post" class="">

            <label>Database name</label> <br>
            <select name="database" class="selectdb">
                <?php foreach ($dbNames as $db):?>
                    <option><?php echo $db["Database"]?></option>
                <?php endforeach;?>
            </select> <br>

            <label for="">Table Name</label><br>
            <input type="text" name="tableName" class=" tableinput tablename"><br>

            <label for="">Add Column </label> <br>
            <div class="addColumn">
                <input type="text" name="columnName[]" class=" tableinput addcolumn">
                <select name="dataTypes[]" class="datatypes">
                    <option value="int">Number</option>
                    <option value="varchar(255)">Text</option>
                    <option value="timestamp">Date Time</option>
                </select>
            </div>
            <button type="submit" class="tablebtn">Create Table</button><br>
        </form>

        <button class="addMore">Add More Column</button>

    </div>

</div>
</div>

<script>

    //select the div
    let columnDiv=document.querySelector(".addColumn");

    let addMore=document.querySelector(".addMore");

    //  store the dataTypes and values into array
    let dataTypes = ['int','varchar(255)','timestamp'];
    let showDataTypes = ['Number','Text','Date Time']

    //target the addMore button and write the addEventListener
    addMore.addEventListener("click",()=>{

        let inputColumn = document.createElement('input');
        inputColumn.name = "columnName[]";
        inputColumn.className="tableinput"
        columnDiv.append(inputColumn);

        let createType=document.createElement('select');
        createType.name="dataTypes[]";
        createType.className="datatypes"
        columnDiv.append(createType);

        for(let i=0; i<dataTypes.length;i++){
            let createOption=document.createElement('option');
            createOption.value=dataTypes[i];
            createOption.text=showDataTypes[i];
            createType.append(createOption);
        }

    })
</script>
</body>
</html>
