<?php 
session_start(); 
    $unique_id = $_SESSION['unique_id'];
    if(!isset($_SESSION['unique_id'])){
        header("Location:login.php");
    }
?>
<?php  include_once "header.php"; ?>
   <body>
     <div class="wrapper">
         <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <?php 
                   include "php/config.php";
                   $user_id = mysqli_real_escape_string($conn,$_GET['user_id']);
                   $sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `unique_id` = '$user_id' ");
                   if(mysqli_num_rows($sql)){
                       $row =mysqli_fetch_assoc($sql);
                   }
                ?>
                <img src="php/images/<?= $row['image'];?>" alt="logo" width="50" height="50">
                <div class="details">
                    <span><?= $row['fname']." ".$row['lname'] ?></span>
                    <p><?= $row['status']?></p>
                </div>
            </header>
            <div class="chat-box">
                <!-- insert chat messages -->
                
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="hidden" name="outgoing_id" value="<?= $unique_id; ?>">
                <input type="hidden" name="incoming_id" value="<?= $user_id ; ?>">
                <input type="text" name="message" class="input-field" placeholder="Type message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
         </section>
     </div>

     <script src="js/chat.js"></script>

   </body>
</html>