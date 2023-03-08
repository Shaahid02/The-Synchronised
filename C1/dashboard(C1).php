
<html>
<head>
  <title>Patient Dashboard</title>
  <style>
    /* Dashboard styles here */
    body {
      font-family: "Segoe UI", sans-serif;
      font-size: 16px;
      margin: 0;
      padding: 0;
      background-color: #282c34;
      color: #fff;
    }
    h1 {
      text-align: center;
      margin-top: 50px;
      font-size: 3rem;
      text-transform: uppercase;
      letter-spacing: 3px;
    }
    .search-form {
      text-align: center;
      margin-top: 50px;
    }
    label {
      font-weight: bold;
      margin-right: 10px;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 1.2rem;
    }
    .input {
      padding: 10px;
      font-size: 1.2rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      color: #333;
    }
    #submit {
      padding: 10px 20px;
      font-size: 1.2rem;
      border: none;
      border-radius: 5px;
      background-color: #0095ff;
      color: #fff;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }
    #submit:hover {
      background-color: #007acc;
    }
    table {
      margin: 50px auto;
      border-collapse: collapse;
      width: 80%;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }
    th {
      background-color: #0095ff;
      font-weight: bold;
      text-align: left;
      padding: 15px;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 1.2rem;
    }
    td {
      border-bottom: 1px solid #ddd;
      padding: 15px;
      font-size: 1.1rem;
    }
    tr:hover td {
      background-color:#3A86B7;
    }
    .error {
      color: #ff3d3d;
      font-weight: bold;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>

  <h1>Patient Dashboard</h1>

  <div class="search-form">
    <form name="searchform" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="search">Search Patient:</label>
      <input type="text" name="search" id="search" class="input" value="" />
      <input type="submit" name="submit" id="submit" value="Search" />
    </form>
    <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            <?php
            // Connect to MySQL server
            $conn = mysqli_connect("localhost", "username", "password", "mydb");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Handle patient search
            if (isset($_GET['search'])) {
                $search_query = $_GET['search'];
                $query = "SELECT * FROM patients WHERE name LIKE '%$search_query%' OR email LIKE '%$search_query%'";
            } else {
                // Fetch all patients
                $query = "SELECT * FROM patients";
            }

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td><a href='login.php?id=" . $row['id'] . "'>View</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No patients found.</td></tr>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </table>
  </div>
  <script>
        const rows = document.querySelectorAll("tr");

// Add a click event listener to each row
rows.forEach(row => {
  row.addEventListener("click", () => {
    // Get the value of the first cell in the clicked row
    const id = row.cells[0].innerText;
    
    switch (id) {
      case "John Doe":
        window.location.href = "file1.php";
        break;
      case "Jane Smith":
        window.location.href = "file2.php";
        break;
      case "Michael Johnson":
        window.location.href = "file3.php";
        break;
      // Add more cases for additional rows as needed
      default:
        break;
      }
  });
});
</script>
</body>
</html>

