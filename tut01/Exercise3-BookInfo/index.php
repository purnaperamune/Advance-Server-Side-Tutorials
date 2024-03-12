<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Finder</title>
</head>
<body>
  <h2>Search Books</h2>
  <?php

  $servername = "localhost";
  $username = "root"; 
  $password = ""; 
  $database = "AdvancedServerside_Tutes";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $search_title = $_POST['title'];
      $search_author = $_POST['author'];
      $search_year = $_POST['year'];

      $sql = "SELECT * FROM books WHERE 1=1";

      if (!empty($search_title)) {
          $sql .= " AND title LIKE '%$search_title%'";
      }

      if (!empty($search_author)) {
          $sql .= " AND author LIKE '%$search_author%'";
      }

      if (!empty($search_year)) {
          $sql .= " AND year_of_publication = $search_year";
      }

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "<h3>----- Found Books -----</h3>";
          echo "<table border='1'>";
          echo "<tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Year</th>
                  <th>Price</th>
                </tr>";

          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['title'] . "</td>";
              echo "<td>" . $row['author'] . "</td>";
              echo "<td>" . $row['year_of_publication'] . "</td>";
              echo "<td>" . $row['price'] . "</td>";
              echo "</tr>";
          }

          echo "</table>";
      } else {
          echo "No matching books found.";
      }

      $conn->close();
  } else {
      
  ?>
  <form method="post">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title">
      <br>
      <label for="author">Author:</label>
      <input type="text" id="author" name="author">
      <br>
      <label for="year">Year of Publication:</label>
      <input type="number" id="year" name="year">
      <br>
      <input type="submit" value="Search">
  </form>
<?php
}
?>
</body>
</html>