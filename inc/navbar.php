<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../simpleblog/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../simpleblog/addpost.php">Add Post</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../simpleblog/register.php">Sign Up</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../simpleblog/login.php">Login</a>
      </li>

      <li class="nav-item">
          <?php if (isset($_SESSION['username']) == true): ?>
            <a class="nav-link" href="../simpleblog/logout.php">Logout</a>
          <?php endif; ?>
      </li>

    </ul>
  </div>
</nav>