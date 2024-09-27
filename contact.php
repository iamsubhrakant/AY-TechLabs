<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Hello, world!</h1>

      <form action="sendmail.php" method="POST">
        <div class="mb-3">
          <label for="fullname" class="form-label">Full Name</label>
          <input type="text" name="full_name" id="fullname" required class="form-control" />
        </div>

        <div class="mb-3">
          <label for="email_address" class="form-label">Email Address</label>
          <input type="email" name="email" id="email_address" required class="form-control" />
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" name="subject" id="subject" required class="form-control" />
        </div>

        <div class="mb-3">
          <label for="message"> Message</label>
          <textarea name="message" id="message" required class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
          <button type="submit" name="submitContact" class="btn btn-primary">Send Mail</button>
        </div>

      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var messageText = "<?= $_SESSION['status'] ?? ''; ?>'";
        if (messageText !='') {

            Swal.fire({
                title: "Thank You!",
                text: messageText,
                icon: "success"
            });

            <?php unset($_SESSION['status']); ?>
        }
    </script>

</body>

</html>
