 <div class="row">
     <?php
     foreach($users as $user) {
         if($user->user_picture == NULL) {
             echo "<div class='col-sm-3'>
            <img src='/images/user.png' width='75', height='100'><br>";
         }
         else {
             echo "<div class='col-sm-3'>
            <img src='" . $user->user_picture . "' width='75', height='100'><br>";
         }

     echo  $user->username."<br>
         ".$user->firstname." ".$user->lastname."<br>
         ".$user->email."<br>
         \n </div>";
     }
     ?>
 </div>
