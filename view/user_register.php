<?php
$form = new Form('/user/doRegister', 'post');
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
    <input onclick="msgRegisterSucces();" class="submit_button_register" type="submit" value="login"/>
<?php
echo $form->end();
?>

<script type="javascript">

function msgRegisterSucces(){
    alert("registration successfull !")
}

<<<<<<< HEAD
<script/>
=======
>>>>>>> e670b6089dc0d2c41cb4f2de6aed69fa24b357be
