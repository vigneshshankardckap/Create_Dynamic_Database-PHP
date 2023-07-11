
**Dynamic DB Crud Operation**


Feature Options:
a. Add DB: Easily create a new database by providing a name for the desired database.
b. Add Table: Define tables within your databases by specifying the database, table name, and field names along with their respective data types (e.g., Int, Varchar, DateTime, Text).
c. Add Row: Insert records into your selected database and table by selecting the appropriate database, table, and columns for data entry.

Add DB Operation:
Collect the user's input for the database name and dynamically create the specified database based on their input.
    Inputs:
        DB Name - Text

Add Table:
Gather essential information from the user, such as the database name (selected from a dropdown displaying all user-defined databases), table name, and field names with their corresponding data types. Based on this input, create the table with the defined fields within the selected database.
     Inputs:
        DB Name - Select
        Table Name - Select
        Column (Text) and Column Type(Int, Varchar DateTime and Text Enough - Dropdown)
Add Row:
Obtain user input, including the database name (selected from the available databases), the table name (displayed based on the selected database), and the column values for data entry. Store the provided records in the selected database and table
      Inputs:
         DB Name - Select
         Table Name - Select
         Table Column - Text

The entire implementation should follow the OOPS and MVC Framework.
Optimized and Standardized Code: Implementing clean, efficient, and standardized coding practices
