<?php
    
    class Login extends Database {

        protected function getUser($email, $password) {
            $stmt = $this->connect()->prepare('SELECT userEmail FROM users WHERE userEmail = ?;');

            if(!$stmt->execute(array($email, $password))) {
                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../login.php?error=usernotfound");
                exit();
            }
            
            $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPassword = password_verify($password, $passwordHashed[0]["userPassword"]);

            if($checkPassword == false) {
                $stmt = null;
                header("location: ../login.php?error=wrongpassword");
                exit();
            }
            else if($checkPassword == true) {
                $stmt = $this->connect()->prepare('SELECT * FROM users WHERE userEmail = ? AND userPassword = ?;');

                if(!$stmt->execute(array($email, $password))) {
                    $stmt = null;
                    header("location: ../login.php?error=stmtfailed");
                    exit();
                }

                if($stmt->rowCount() == 0) {
                    $stmt = null;
                    header("location: ../login.php?error=usernotfound");
                    exit();
                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION["user_ID"] = $user[0]["userID"];
                $_SESSION["user_Name"] = $user[0]["userName"];
            }
            
            $stmt = null;
        }
    }
?>