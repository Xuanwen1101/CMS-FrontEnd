<?php

include('admin/includes/database.php');
include('admin/includes/config.php');
include('admin/includes/functions.php');

include('main_header.php')

?>


<main class="main">

  <h2 class="title">Projects</h2>

  <?php

  $query = 'SELECT *
    FROM projects
    ORDER BY date DESC';
  $result = mysqli_query($connect, $query);

  ?>


  <div class="objects-container">
    <?php while ($record = mysqli_fetch_assoc($result)) : ?>

      <div class="object-item">

        <?php if ($record['photo']) : ?>

          <img src="admin/image.php?type=project&id=<?php echo $record['id']; ?>&width=350&height=250" alt="Image for the project <?php echo $record['title']?>">

        <?php endif; ?>

        <h3 class="object-title"><?php echo $record['title']; ?></h3>

        <div class="object-content">
          <?php echo $record['content']; ?>
        </div>



      </div>


    <?php endwhile; ?>

  </div>

</main>


<?php

include('main_footer.php')

?>