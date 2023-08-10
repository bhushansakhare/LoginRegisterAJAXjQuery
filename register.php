<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <script>
    function submitData() {
      // Collect form data
      var name = document.querySelector('input[name="name"]').value;
      var username = document.querySelector('input[name="username"]').value;
      var password = document.querySelector('input[name="password"]').value;
      var mobile = document.querySelector('input[name="mobile"]').value;
      var email = document.querySelector('input[name="email"]').value;
      var action = document.querySelector('input[name="action"]').value;

      // Make an AJAX request to the PHP script
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "function.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Handle the response from the server
          alert(xhr.responseText);
        }
      };
      var data = "action=" + encodeURIComponent(action) +
                 "&name=" + encodeURIComponent(name) +
                 "&username=" + encodeURIComponent(username) +
                 "&password=" + encodeURIComponent(password) +
                 "&mobile=" + encodeURIComponent(mobile) +
                 "&email=" + encodeURIComponent(email);
      xhr.send(data);
    }
  </script>
</head>
<body>
  <h2>Register</h2>
  <form autocomplete="off" action="" method="post">
    <input type="hidden" name="action" value="register">
    <label for="name">Name</label>
    <input type="text" name="name"> <br>
    <label for="username">Username</label>
    <input type="text" name="username"> <br>
    <label for="password">Password</label>
    <input type="password" name="password"> <br>
    <label for="mobile">Mobile</label>
    <input type="text" name="mobile"> <br>
    <label for="email">Email</label>
    <input type="text" name="email"> <br>
    <button type="button" onclick="submitData();">Register</button>
  </form>
  <br>
  <a href="login.php">Go To Login</a>
</body>
</html>
