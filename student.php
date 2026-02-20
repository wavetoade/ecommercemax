<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "babbage_student";

    $conn = new mysqli(hostname: $host, username: $user, password: $pass, database: $db);
    if ($conn->connect_error) {
        die("<div class='error'>Connection failed: " . $conn->connect_error . "</div>");
    }

    $nextSID = 1;
    $result = $conn->query(query: "SELECT MAX(student_id) AS student_id FROM student_record");
    if ($result && $row = $result->fetch_assoc()) {
        $nextSID = $row["student_id"] + 1;
    }
      
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Form</title>
    <style>
        @font-face {
        font-family: gothamblack;
        src: url(GOTHAM-BLACK.TTF);
       }
       @font-face {
        font-family: gothambold;
        src: url(GOTHAM-BOLD.TTF);
       }
       @font-face {
        font-family: gothambook;
        src: url(Gotham-Book.otf);
       }
        body{
            background-image: url(bg1.jpg);
            background-size: cover;
            margin: auto;
        }
        .main{
            /*background-image: linear-gradient(lightblue, navy);*/
            background-color: navy;
            width: 250px;
            border-radius: 20px;
            font-family: gothambold;
            height: 450px;
            margin-left: 40px;
            padding: 0px 30px;
            box-shadow: 2px 2px 20px navy;
            top: 120;
            z-index: 1000;
            position: sticky;
        }
        input[type=submit]{
             background-color: white;
             border: none;
             border-radius: 5px;
             padding: 5px 10px;
            transition: 0.5s ease;
            font-family: gothambold;
            margin-top: 10px;
            width: 122px;
            font-size: 15px;
            border: 1px solid navy;
        }
        input[type=submit]:hover{
            background-color: navy;
            color: white;
            border: 1px solid white;
            
        }
        .buttons{
            margin-top: 10px;
        }
        input[type=text]{
            border: 1px solid navy;
            border-radius: 7px;
            padding: 7px 5px;
            width: 250px;
            font-size: 12px;
            font-family: gothambook;
            box-shadow: inset 2px 2px 5px gray;
        }
        input[type=number]{
            border: 1px solid navy;
            border-radius: 7px;
            padding: 7px 5px;
            width: 250px;
            font-size: 12px;
            font-family: gothambook;
            box-shadow: inset 2px 2px 5px gray;
        }
        input[type=text]:focus{
        }
        span{
            color: white;
        }
        h1{
            color: white;
            font-family: gothamblack;
            text-align: center;
        }
        span{
            font-size: 13px;
        }
        .tablez{
            border-collapse: collapse;
            height: 50px;
            min-width: 900px;
            font-family: gothambold;
            margin-left: 50px;
        
            border-radius: 10px;
            overflow: hidden;
        }
        .containers{
            display: flex;
            margin-top: 40px;
        }
        .tablez thead tr{
            background-color: navy;
            color: white;
        }
        .tablez th, .tablez td {
            padding: 10px 12px;
        }
        .tablez tbody tr{
            border-bottom: 1px solid navy;
            transition: 0.5s ease;
            background-color: white;
            font-family: gothambook;

        }
        .tablez tbody tr:hover{
            background-color: rgb(236, 234, 234);
        }
        .tablez tbody tr:last-of-type{
            border-bottom: 2px solid navy;
        }
        tbody{
            font-size: 14px;
        }
        form span{
            font-size: 14px;
            line-height: 1.4;
        }
        tr.hide {
            display: none;
        }
        .controls #search{
            margin-bottom: 10px;
        }
        #sortColumn{
            padding: 8px 5px;
            color: white;
            background-color: navy;
            font-family: gothambook;
            border-radius: 7px;
            border: none;
        }
        .head{
            display: flex;
            background-color: navy;
            position: sticky;
            top: 0;
            z-index: 1000;
            height: 80px;
            align-items: center;
            width: 1350px;
        }
        .head-img{
            margin-left: 20px;
        }
        .head-nav .head-ul{
            display: flex;
            
        }
        .head-ul li{
            list-style: none;
            margin-right: 40px;
        }
        li a{
            text-decoration: none;
            color: white;
            font-family: gothambold;
        }
        .head-nav{
            margin-left: auto;
        }
        .head-text{
            margin-left: 10px;
        }
        .sdo-text{
            font-family: gothambook;
            font-size: 15px;
        }
        .lhs-text{
            font-family: gothamblack;
            font-size: 25px;
        }
        .controls{
            top: 120;
            z-index: 1000;
            position: sticky;
            margin-left: 50px;
            font-family: gothambook;
        }        
        .search-text{
            color: navy;
        }
        </style>
</head>
<body>
    <header class="head">
        <div class="head-img">
        <img src="sdo.png" alt="sdoqclogo" id="sdo-logo" height="60px">
        <img src="lhs.png" alt="lagrohighschoollogo" id="lhs-logo" height="65px">
    </div>
    <div class="head-text">
        <span class="sdo-text">SCHOOLS DIVISION OFFICE OF QUEZON CITY</span> <br>
        <span class="lhs-text">LAGRO HIGH SCHOOL</span>
    </div>
    <div class="head-nav">
        <ul class="head-ul">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    </header>

    <div class="containers">
    <div class="main">
    <h1>Student Registration</h1>

        <form action="add.php" method="post">
        
            <div>
                <span>Student ID: </span> <br> <input type="number" id="student_id" readonly name="student_id" value="<?= $nextSID;  ?>"> 
                </div>

            <div>
                <span>Name:</span><br><input type="text" id="name" name="name" required>
                </div>

            <div>
                <span>Grade & Section: </span><br><input type="text" id="grade_section" name="grade_section" required>
           </div>

            <div>
                <span>Address: </span> <br><input type="text" id="address" name="address" required>
            </div>
            <div>
            <span>Contact No.: </span> <br><input type="number" id="contact_no" name="contact_no" required>
            </div>
     

        
        <div class="buttons">
        <input type="submit" name="Register" value="REGISTER">
        <input type="submit" name="Update" value="UPDATE">
        </form>
        </div>
    </div>
<div>
<div class="controls">
    <span class="search-text">Search by:</span>
<select id="sortColumn">
      <option value="student_id" data-type="number">Student ID</option>
      <option value="name" data-type="string">Name</option>
      <option value="grade_section" data-type="string">Grade and Section</option>
      <option value="address" data-type="string">Address</option>
      <option value="contact_no" data-type="number">Contact No.</option>
    </select>
    <input type="text" id="search" placeholder="Search...">

  </div>
    <table class="tablez">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Grade & Section</th>
                <th>Address</th>
                <th>Contact No.</th>
            </tr>
        </thead>
<tbody>
    <?php

        $sql = "SELECT * FROM student_record";
        $result = $conn->query(query: $sql);

        if($result -> num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row["student_id"]}</td>
                    <td>{$row["name"]}</td>
                    <td>{$row["grade_section"]}</td>
                    <td>{$row["address"]}</td>
                    <td>{$row["contact_no"]}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }

    ?>
    </tbody>
    </table>
    <script>
        fetch('fetch_student.php')
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector("table tbody");
            tbody.innerHTML = ""; 
            data.forEach(student => {
            const row = document.createElement("tr");
            row.innerHTML = `
            <td>${student.student_id}</td>
            <td>${student.name}</td>
            <td>${student.grade_section}</td>
            <td>${student.address}</td>
            <td>${student.contact_no}</td>
            `;
            tbody.appendChild(row);
            });
        })
        .catch(error => console.error ("Error fetching data:", error));

    document.addEventListener("DOMContentLoaded", function () {
    const rows = document.querySelectorAll("table tbody tr");

  rows.forEach((row) => {
    row.addEventListener("click", function () {
      const cells = row.querySelectorAll("td");
      document.getElementById("student_id").value = cells[0].textContent;
      document.getElementById("name").value = cells[1].textContent;
      document.getElementById("grade_section").value = cells[2].textContent;
      document.getElementById("address").value = cells[3].textContent;
      document.getElementById("contact_no").value = cells[4].textContent;
    });
  });
});

// for SEARCH FUNCTION

document.addEventListener("DOMContentLoaded", function () {
    const inputSearch = document.getElementById("search");
    const sortSearch = document.getElementById("sortColumn");

    inputSearch.addEventListener("input", filterTable);
    sortSearch.addEventListener("change", filterTable);

    function filterTable() {
        const term = inputSearch.value.toLowerCase();
        const category = sortSearch.value.toLowerCase();
        const rows = document.querySelectorAll("table tbody tr");

        function getColumnIndex(columnName) {
            switch (columnName) {
                case "student_id": return 1;
                case "name": return 2;
                case "grade_section": return 3;
                case "address": return 4;
                case "contact_no": return 5;
                default: return 1;
            }
        }

        const columnIndex = getColumnIndex(category);

        rows.forEach(row => {
            const cell = row.querySelector(`td:nth-child(${columnIndex})`);
            if (cell && cell.textContent.toLowerCase().startsWith(term)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }
})




 /*
document.getElementById("search").addEventListener("keyup", function() {
      let filter = this.value.toLowerCase();
      let rows = document.querySelectorAll(".tablez tbody tr");
      rows.forEach(row => {
        let text = row.innerText.toLowerCase();
        row.classList.toggle("hide", !text.includes(filter));
      });
    });




    // for search
   
    const searchInput = document.getElementById("search");
    const columnSelect = document.getElementById("sortColumn");
    const table = document.querySelectorAll(".tablez");

    /**
     * LIVE SEARCH + SORT FUNCTION
     * ------------------------------------------------
     * - Listens for typing in the search box (keyup)
     * - Filters rows based on search text in chosen column
     * - After filtering, sorts the visible rows alphabetically/numerically

    searchInput.addEventListener("keyup", function() {
      let colIndex = parseInt(columnSelect.value); // selected column
      let filter = searchInput.value.toLowerCase(); // search text
      let rows = Array.from(table.querySelectorAll("tbody tr"));

      // 1. Filter rows
      rows.forEach(row => {
        let cell = row.cells[colIndex].innerText.toLowerCase();
        row.style.display = cell.includes(filter) ? "" : "none";
      });

      // 2. Get only visible rows for sorting
      let visibleRows = rows.filter(row => row.style.display !== "none");

      // 3. Sort visible rows based on chosen column
      visibleRows.sort((a, b) => {
        let x = a.cells[colIndex].innerText.trim();
        let y = b.cells[colIndex].innerText.trim();

        // numeric sort if both are numbers, otherwise text sort
        if (!isNaN(x) && !isNaN(y)) {
          return x - y;
        } else {
          return x.localeCompare(y);
        }
      });

      // 4. Re-attach sorted visible rows to the table body
      let tbody = table.tBodies[0];
      visibleRows.forEach(row => tbody.appendChild(row));
    });
    */
  </script>


    </div>
</body>
</html>