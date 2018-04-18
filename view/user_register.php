<form type="submit">
    <a>username:</a>
    <input onblur="this.placeholder = 'username'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="username" type="text" name="username">
    <a>firstname:</a>
    <input onblur="this.placeholder = 'firstname'" onfocus="this.placeholder= ''" class="nav_login_inputs"  type="text" name="firstname">
    <a>lastname:</a>
    <input onblur="this.placeholder = 'lastname'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="username" type="text" name="lastname">
    <a>email:</a>
    <input onblur="this.placeholder = 'user@example.com'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="username" type="text" name="username">
    <a>password:</a>
    <input onblur="this.placeholder = 'password'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="username" type="text" name="username">

</form>





<?php

$form = new Form('/user/doCreate');

echo $form->text()->label('Vorname')->name('firstName');
echo $form->text()->label('Nachname')->name('lastName');
echo $form->text()->label('Mail')->name('email');
// echo $form->password()->label('Password')->name('password');
echo $form->submit()->label('Benutzer erstellen')->name('send');

$form->end();
