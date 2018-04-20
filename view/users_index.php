 <div class="panel panel-default">
     <div class="panel-body">
         <div class="row">
             <?php
             // Schleife über alle Kontakte, die jeweils in einer Tabellenzeile angezeigt werden.
             foreach($users as $user) {
                 if($user->user_picture == NULL) {
                     echo "<div id='userlist' class='col-sm-1'>
                    <td><img id='profilepic' src='images/user_images/user.png' width='75', height='100'><br>";
                 } else {
                     echo "<div id='userlist' class='col-sm-1'>
                    <td><img id='profilepic' src='" . $user->user_picture . "' width='75', height='100'><br>";
                 }
				 echo $user->username."<br>
				".$user->email."<br>
				</div>";
             }
             ?>
         </div>
     </div>
 </div>