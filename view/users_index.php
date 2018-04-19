 <div class="row">
     <?php
     foreach($users as $user) {
     echo "<div class=\"col-sm-3\">
         ".$user->username."<br>
         ".$user->username."<br>
         ".$user->firstname." ".$user->lastname."<br>
         ".$user->email."<br>
         \n </div>";
     }
     ?>
 </div>
