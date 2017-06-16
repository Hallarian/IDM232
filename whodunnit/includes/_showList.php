<h3>Other Whodunnit Shows</h3>
  <p>

  <?php
      $query = "SELECT * FROM shows";

  $result = mysqli_query($connection, $query);

            if (!$result) {
              die("Database query failed.");
            }

            // while ($row = mysqli_fetch_assoc($result)) {
              // var_dump($row);
              // echo "<hr />";
            // }

            while ($row = mysqli_fetch_assoc($result)) {
  ?>

  <div class="showList">
    <div class="thumbNail">
      <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
    </div>
    <br>
    <div class="thumbDesc">
      <h3><?php echo $row['name']; ?></h3>
      <p><?php echo $row['description']; ?></p>
    </div>
  </div>
  <p>

  <?php
          }
  ?>