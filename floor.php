<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mall Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Floor</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
        <h1>Shop Information</h1>
        <table>
            <thead>
                <tr>
                    <th>ShopID</th>
                    <th>ShopName</th>
                    <th>ShopDescription</th>
	      <th>FloorID</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // PHP code to fetch and display data
                $servername = "localhost:3306";
                $username = "root"; // Your MySQL username
                $password = ""; // Your MySQL password
                $schema = ""; // Your MySQL schema name
                $conn = new mysqli($servername, $username, $password, $schema);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query the database
                $sql = "SELECT * FROM Shops";
                $result = $conn->query($sql);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ShopID"] . "</td>";
                        echo "<td>" . $row["ShopName"] . "</td>";
                        echo "<td>" . $row["ShopDescripttion"] . "</td>";
          echo "<td>" . $row["FloorID"] . "</td>";
	
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>0 results</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    </main>
    <footer>
        <p>&copy; 2024 Mall Dashboard. All rights reserved.</p>
    </footer>
</body>
</html>

