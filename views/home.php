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

      <h3>Creating Dynamic Database</h3>

      <div class="btn">

        <form action="/createDb" method="Post">
          <button class="database">Create Database</button>
        </form>

        <form action="/CreateTable" method="Post">
          <button class="table">Create Table </button>
        </form>

        <form action="/insertRecords" method="Post">
          <button class="records">Insert Records</button>
        </form>

      </div>
    </div>
  </div>

</body>

</html>