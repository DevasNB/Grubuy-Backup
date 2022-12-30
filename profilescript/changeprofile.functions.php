<?php
class SendProfile extends Database
{
 
    protected function setUserEdited($profile_website, $profile_location, $profile_phone, $profile_birthday, $profile_image)
    {

        $stmt = $this->connect()->prepare('UPDATE users SET userWebSite = ?, userLocation = ?, userPhone = ?, userBirthday = ?, userImage = ? WHERE userID = ?;');

        if (!$stmt->execute(array($profile_website, $profile_location, $profile_phone, $profile_birthday, $profile_image, $_SESSION["user_ID"]))) {
            $stmt = null;
            header("location: ../editprofile.php?error=stmtfailed");
            exit();
        }
    }
}
