<?php

require_once '../repository/UserRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        $userRepository = new UserRepository();
        $view = new View('users_index');
        $view->title = 'Users';
        $view->users = $userRepository->readallUsers();
        $view->heading = '';
        $view->display();
    }

    public function register()
    {
        $view = new View('user_register');
        $view->title = 'Register';
        $view->heading = '';
        $view->display();
    }

    public function profile()
    {
        $userRepository = new UserRepository();
        $view = new View('user_profile');
        $view->title = 'Profile';
        $view->heading = '';
        $view->userdata = $userRepository->userSignedIn();
        $view->display();
    }

    public function doRegister()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $passwort = $_POST['password'];
        $passwort = password_hash($passwort, PASSWORD_DEFAULT);
        $userRepository = new UserRepository();
        $userRepository->create($username, $firstname, $lastname, $email, $passwort);
    }

    public function logout() {
        unset($_SESSION);
        session_destroy();
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }

    public function doLogin(){

        if (isset($_POST['username']) && isset($_POST['password'])) {
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $userRepository = new UserRepository();
                $userRepository->login($username, $password);

            } else {
                $_SESSION['message'] = 'username or password are are wrong';
                $_SESSION['loginerror'] = true;
                header('Location:'.$_SERVER['HTTP_REFERER']);
            }
        } else {
            $_SESSION['message'] = 'username or password are are wrong';
            $_SESSION['loginerror'] = true;
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    }
    public function upload() {
        $userRepository = new UserRepository();
        $upload_folder = '/images/user_images/'; //Das Upload-Verzeichnis
        $filename = pathinfo($_FILES['datei']['name'], PATHINFO_FILENAME);
        $extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));


        //Überprüfung der Dateiendung
        $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
        if(!in_array($extension, $allowed_extensions)) {
            header('Location: profile?uploaderror=type');
            die();
        }

        //Überprüfung der Dateigröße
        $max_size = 500*1024; //500 KB
        if($_FILES['datei']['size'] > $max_size) {
            header('Location: profile?uploaderror=size');
            die();
        }

        //Überprüfung dass das Bild keine Fehler enthält
        if(function_exists('exif_imagetype')) { //Die exif_imagetype-Funktion erfordert die exif-Erweiterung auf dem Server
            $allowed_types = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
            $detected_type = exif_imagetype($_FILES['datei']['tmp_name']);
            if(!in_array($detected_type, $allowed_types)) {
                header('Location: profile?uploaderror=type');
                die();
            }
        }

        //Pfad zum Upload
        $new_path = $upload_folder.$filename.'.'.$extension;

        //Neuer Dateiname falls die Datei bereits existiert
        if(file_exists($new_path)) { //Falls Datei existiert, hänge eine Zahl an den Dateinamen
            $id = 1;
            do {
                $new_path = $upload_folder.$filename.'_'.$id.'.'.$extension;
                $id++;
            } while(file_exists($new_path));
        }

        if($_SESSION['uploaderror'] == '') {
            //Alles okay, verschiebe Datei an neuen Pfad
            move_uploaded_file($_FILES['datei']['tmp_name'], $new_path);
            $userRepository->uploadPicture($new_path);
            header('Location: profile');
        } else {
            header('Location: profile');
        }
    }
}
