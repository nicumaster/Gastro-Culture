<?php
$form = new Form('/user/doCreate');
?>
    <a>username:</a>
    <input onblur="this.placeholder = 'username'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="username" type="text" name="username"/>
    <a>firstname:</a>
    <input onblur="this.placeholder = 'firstname'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="firstname" type="text" name="firstname"/>
    <a>lastname:</a>
    <input onblur="this.placeholder = 'lastname'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="lastname" type="text" name="lastname"/>
    <a>email:</a>
    <input onblur="this.placeholder = 'user@example.com'" onfocus="this.placeholder= ''"  class="nav_login_inputs" placeholder="user@example.com" type="text" name="email"/>
    <a>password:</a>
    <input onblur="this.placeholder = 'password'" onfocus="this.placeholder= ''" class="nav_login_inputs" placeholder="password" type="text" name="password"/>
    <button onclick="<?php meldung(); ?>" class="submit_button_register" type="submit">register</button>
<?php
echo $form->end();

function meldung(){
    echo "<div class='alert alert-succes'><strong>Registrierung Erfolgreich!<strong/><div/>";
}

?>



<!--
<?php


$form = new Form('/user/doCreate');

echo $form->text()->label('username')->name('username')->class('nav_login_inputs')->onblur('this.placeholder="example_46"')->onfocus('this.placeholder= ""')->placeholder('firstname');
echo $form->text()->label('firstname')->name('firstname');
echo $form->text()->label('lastname')->name('lastname');
echo $form->text()->label('email')->name('email');
echo $form->text()->label('password')->name('password');
// echo $form->password()->label('Password')->name('password');
echo $form->submit()->label('Benutzer erstellen')->name('send');

$form->end();
?>
-->
