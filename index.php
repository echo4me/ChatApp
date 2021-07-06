<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("Location: users.php");
    }
?>
<?php  include_once "header.php"; ?>
   <body>
     <div class="wrapper">
         <section class="form signup">
            <h1>Realtime Chat App</h1>
            <form action="" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">Firstname</label>
                        <input type="text" name="fname" placeholder="First name" required>
                    </div>
                    <div class="field input">
                        <label for="">Lastname</label>
                        <input type="text" name="lname" placeholder="Last name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Email address" required>
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">image</label>
                        <input type="file" name="image" placeholder="Profile image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
            <div class="link">Already signup? <a href="login.php">Login now</a></div>
         </section>
     </div>
     <script src="js/js.js"></script>
     <script src="js/signup.js"></script>
   </body>
</html>