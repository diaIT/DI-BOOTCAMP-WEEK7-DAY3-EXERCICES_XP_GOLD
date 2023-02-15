<!--Create a simple PHP login form to provide the authentication for your web pages:-->

<form action="..." method="post">
  <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
  <input type="text" name="username" placeholder="username" required />
  <input type="password" name="password" placeholder="password" required />
  <button type="submit" name="login">Login</button>
</form>