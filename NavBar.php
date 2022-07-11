
<nav class="bg-secondary p-2 text-dark bg-opacity-10">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
  <img src="assets/logo1.png" alt="" width="100" height="100" class="d-inline-block align-text-top"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
     
  

  <a class="navbar-brand" href="index.php"> </a>

  <ul class="nav justify-content-end">
     
    
    <?php 
        session_start();
        
        if(isset($_SESSION) && isset($_SESSION['id'])){
          echo "<li class='nav-item'>";
          echo  "<a class='btn btn-outline-success me-2' href='#'>".$_SESSION['username']."</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='btn btn-danger' href='LogOut.php'>Log Out</a>";
          echo "</li>";

        }
        else{
          echo "<li class='nav-item '>";
          echo "<a class='btn btn-outline-success me-2' href='LogIn.php'>Log In</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='btn btn-success' href='SignIn.php'>Sign up</a>";
          echo "</li>";
          session_destroy();
        }
      ?>
        </ul>    
  </div>
</nav>