 <div class="panel panel-default">
     <div class="panel-body">
         <table class="table table-striped table-condensed">
             <thead>
             <tr>
                 <th>Profile picture</th>
                 <th>username</th>
                 <th>email</th>
             </tr>
             </thead>
             <tbody>
             <?php

             // Schleife über alle Kontakte, die jeweils in einer Tabellenzeile angezeigt werden.
             foreach($users as $user) {
                 echo "<tr>
                <td><img src='" . $user->user_picture . "' width='75', height='100'></td>
				<td>".$user->username."</td>
				<td>".$user->email."</td>
				</tr>\n";
             }
             ?>
             </tbody>
         </table>
     </div>
 </div>