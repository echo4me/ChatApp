<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("Location: users.php");
    }
?>
<?php  include_once "header.php"; ?>
   <body>
     <div class="wrapper">
         <section class="form login">
            <h1>Realtime Chat App</h1>
            <form action="#">
                <div class="error-txt"></div>
                
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Email address">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
            <div class="link">Not yet signup? <a href="index.php">Signup Now</a></div>
         </section>
     </div>
     <script src="js/js.js"></script>
     <script src="js/login.js"></script>
   </body>
</html>