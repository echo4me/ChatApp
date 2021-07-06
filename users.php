   <?php 
    session_start(); 
    $unique_id = $_SESSION['unique_id'];
    if(!isset($_SESSION['unique_id'])){
        header("Location:login.php");
    }
   ?>
   <?php  
   include_once "header.php"; 
   include_once "php/config.php";
   ?>
   <body>
     <div class="wrapper">
         <section class="users">
               <header>
                   <?php 
                   $sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `unique_id` = '$unique_id' ");
                   if(mysqli_num_rows($sql)){
                       $row =mysqli_fetch_assoc($sql);
                   }
                   ?>
                   <div class="content">
                    <img src="php/images/<?= $row['image']?>" alt="logo" width="50" height="50">
                    <div class="details">
                        <span><?= $row['fname'].' '.$row['lname']?></span>
                        <p><?= $row['status']?></p>
                    </div>
                   </div>
                   <a href="php/logout.php?logout_id=<?=$unique_id ?>" class="logout">Logout</a>
               </header>
               <div class="search">
                   <span class="text">Select an user to start chat</span>
                   <input type="text" placeholder='enter name to search ..'>
                   <button><i class="fas fa-search"></i></button>
               </div>
               <div class="users-list">
                   <!-- add users here by ajax -->
                   
               </div>
         </section>
     </div>
     <script src="js/users.js"></script>
   </body>
</html>