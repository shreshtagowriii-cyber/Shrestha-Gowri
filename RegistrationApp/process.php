<!DOCTYPE html>
<html>
<head><title>Registration Successful</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<div class="container">
<h2>Registration Successful</h2>
<p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
<p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
<p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
<p><strong>Address:</strong> <?php echo $_POST['address']; ?></p>
<p><strong>Course Selected:</strong> <?php echo $_POST['course']; ?></p>
</div>
</body>
</html>
