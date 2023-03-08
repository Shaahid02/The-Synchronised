<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
      margin-top: 100px;
    }
    label {
      font-weight: bold;
      margin-right: 10px;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 2rem;
    }
    input {
      padding: 10px;
      font-size: 1.5rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      color: #333;
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
	<div class="container">
		<h1>Patient Dashboard</h1>
		<div class="search-form">
    
      <label for="search">Search Patient:</label>
      <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names...">
      
    </form>
    <table id="myTable">
      <thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Jane Doe</td>
					<td>jane@example.com</td>
					<td>555-1234</td>
					
				</tr>
				<tr>
					<td>John Doe</td>
					<td>john@example.com</td>
					<td>555-5678</td>
					
				</tr>
				<tr>
					<td>Jane Smith</td>
					<td>janesmith@example.com</td>
					<td>555-9012</td>
					
				</tr>
        <tr>
					<td>Michael Johnson</td>
					<td>mikej@example.com</td>
					<td>555-9012</td>
					
				</tr>
			</tbody>
		</table>
	</div>
  <script>
		function searchTable() {
		  // Declare variables
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("searchInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("myTable");
		  tr = table.getElementsByTagName("tr");

		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
		    td = tr[i].getElementsByTagName("td")[0];
		    if (td) {
		      txtValue = td.textContent || td.innerText;
		      if (txtValue.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      } else {
		        tr[i].style.display = "none";
		      }
		    } 
		  }
		}
	</script>
    <script>
        const rows = document.querySelectorAll("tr");

// Add a click event listener to each row
rows.forEach(row => {
  row.addEventListener("click", () => {
    // Get the value of the first cell in the clicked row
    const id = row.cells[0].innerText;
    
    switch (id) {
      case "Jane Doe":
        window.location.href = "details1.php";
        break;
      case "John Doe":
        window.location.href = "details2.php";
        break;
      case "Jane Smith":
        window.location.href = "details3.php";
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
