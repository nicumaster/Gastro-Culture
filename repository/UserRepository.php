<?php

require_once '../lib/Repository.php';

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class UserRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'users';

    /**
     * Erstellt einen neuen benutzer mit den gegebenen Werten.
     *
     * Das Passwort wird vor dem ausführen des Queries noch mit dem SHA1
     *  Algorythmus gehashed.
     *
     * @param $firstName Wert für die Spalte firstName
     * @param $lastName Wert für die Spalte lastName
     * @param $email Wert für die Spalte email
     * @param $password Wert für die Spalte password
     *lkjljkl
     * @throws Exception falls das Ausführen des Statements fehlschlägt
     */
    public function readallUsers() {
        $query = "SELECT * FROM $this->tableName";
        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        if (!$result) {
            throw new Exception($statement->error);
        }
        // Datensätze aus dem Resultat holen und in das Array $rows speichern
        $rows = array();
        while ($row = $result->fetch_object()) {
            $rows[] = $row;
        }
        $statement->close();
        return $rows;
    }

    public function create($username, $firstname, $lastname, $email, $password)
    {
        $query = "INSERT INTO $this->tableName (username, firstname, lastname, email, password) VALUES (?,?,?,?,?)";
        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('sssss', $username, $firstname, $lastname, $email, $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        $statement->close();
        header('Location: /user');
    }

    public function login($username, $password)
    {
        $message = "User Repository";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $query = "SELECT username, password FROM users WHERE username=?";
        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('s', $username);
        $statement->execute();

        $userResult = $statement->get_result();
        if (!$userResult) {
            echo "<div class='alert alert-error'><strong>wrong username</strong><div/>";

        }
        if ($userResult) {

            $user = $userResult->fetch_object();

            if (password_verify($password, $user->password)) {
                echo "<div class='alert alert-success'><strong>login erfolgreich</strong><div/>";
            } else {
                echo "<div class='alert alert-error'><strong>wrong password</strong><div/>";
            }


        }
        $statement->close();
    }
}
