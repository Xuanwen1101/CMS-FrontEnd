<?php

include('admin/includes/database.php');
include('admin/includes/config.php');
include('admin/includes/functions.php');


include('main_header.php')

?>


<main class="main">
  
  <h2 class="title">Contact</h2>
  <div class="objects-container">
  <form action="admin/contact.php" method="POST">
    <div class="form__field">
      <label class="form__label" for="name">Name:</label>
      <input class="form__input" type="text" name="name" id="name">
    </div>
    <div class="form__field">
      <label class="form__label" for="email">Email:</label>
      <input  class="form__input" type="text" name="email" id="email">
    </div>
    <div class="form__field">
      <label class="form__label" for="message">Message:</label>
      <textarea class="form__textarea" name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <input class="form__button" type="submit" value="Send">
  </form>
  </div>

</main>


<?php

include('main_footer.php')

?>