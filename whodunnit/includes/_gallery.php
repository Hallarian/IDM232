<div class="blackBox">
<h2>Current &amp; Upcoming Shows</h2>
<div class="galleryContain">

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
<div class="gallery">
  <a target="_blank" href="<?php echo $row['image']; ?>">
    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
  </a>
  <div class="desc"><?php echo $row['name']; ?></div>
</div>
<?php
          }
?>

</div><!-- galleryContain END -->
</div><!-- blackBox END -->