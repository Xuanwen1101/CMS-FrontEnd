<?php

include('admin/includes/database.php');
include('admin/includes/config.php');
include('admin/includes/functions.php');

include('main_header.php')

?>


<main class="main">

  <h2 class="title">Xuanwen Zheng's Portfolio</h2>

  <?php

  $contentquery = 'SELECT *
    FROM contents
    ORDER BY title DESC';
  $content = mysqli_query($connect, $contentquery);

  ?>

  <h3 class="hidden">Contents</h3>

  <div class="objects-container">
    <?php while ($contentrecord = mysqli_fetch_assoc($content)) : ?>

      <div class="object-item">

        <?php if ($contentrecord['photo']) : ?>

          <img src="admin/image.php?type=content&id=<?php echo $contentrecord['id']; ?>&width=350&height=250">

        <?php endif; ?>

        <h4 class="object-title"><?php echo $contentrecord['title']; ?></h4>

        <div class="object-content">
          <?php echo $contentrecord['content']; ?>
        </div>

      </div>

    <?php endwhile; ?>

  </div>

  <h3 class="secondary-title">Skills</h3>

  <?php

  $skillquery = 'SELECT *
    FROM skills
    ORDER BY id DESC';
  $skill = mysqli_query($connect, $skillquery);

  ?>

  <div class="skills-container">
    <?php while ($skillrecord = mysqli_fetch_assoc($skill)) : ?>

      <div class="skill-item">

        <?php if ($skillrecord['photo']) : ?>

          <img src="admin/image.php?type=skill&id=<?php echo $skillrecord['id']; ?>&width=150&height=150">

        <?php endif; ?>

        <h4 class="skill-title"><?php echo $skillrecord['title']; ?></h4>


      </div>

    <?php endwhile; ?>

  </div>


  <h3 class="secondary-title">Educations</h3>

  <?php

  $educationquery = 'SELECT *
    FROM educations
    ORDER BY id DESC';
  $education = mysqli_query($connect, $educationquery);

  ?>

  <div class="objects-container">
    <?php while ($educationrecord = mysqli_fetch_assoc($education)) : ?>

      <div class="object-item">

        <?php if ($educationrecord['photo']) : ?>

          <img src="admin/image.php?type=education&id=<?php echo $educationrecord['id']; ?>&width=390&height=250">

        <?php endif; ?>

        <h4 class="object-title"><?php echo $educationrecord['school']; ?></h4>

        <h5 class="object-subtitle"><?php echo $educationrecord['degree']; ?> in <?php echo $educationrecord['major']; ?></h5>

        <div class="object-date-container">
          <div class="object-date">
            <?php echo $educationrecord['start_date']; ?>
          </div>
          <div class="object-date">
            <?php echo $educationrecord['end_date']; ?>
          </div>
        </div>

      </div>

    <?php endwhile; ?>

  </div>


  <h3 class="secondary-title">Work Experience</h3>

  <?php

  $workquery = 'SELECT *
    FROM works
    ORDER BY id DESC';
  $work = mysqli_query($connect, $workquery);

  ?>

  <div class="objects-container">
    <?php while ($workrecord = mysqli_fetch_assoc($work)) : ?>

      <div class="object-item">

        <?php if ($workrecord['photo']) : ?>

          <img src="admin/image.php?type=work&id=<?php echo $workrecord['id']; ?>&width=350&height=250">

        <?php endif; ?>

        <h4 class="object-title"><?php echo $workrecord['title']; ?></h4>

        <h5 class="object-subtitle"><?php echo $workrecord['company_name']; ?> in <?php echo $workrecord['location']; ?></h5>

        <div class="object-date-container">
          <div class="object-date">
            <?php echo $workrecord['start_date']; ?>
          </div>
          <div class="object-date">
            <?php echo $workrecord['end_date']; ?>
          </div>
        </div>

        <div class="object-content">
          <?php echo $workrecord['description']; ?>
        </div>
      </div>

    <?php endwhile; ?>

  </div>


</main>

<?php

include('main_footer.php')

?>