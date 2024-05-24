<?php
    require 'helper/config.php';

    class UserModel{
        static function getdata($email)
        {
            global $koneksi;
            $query = "select * from user";
            $result = mysqli_query($koneksi, $query);
            $data = array();
            if ($result->num_rows > 0) {
            while($a = $result->fetch_array()) {
                $data[]=$a;
            }
            }
            return $data;
        }

        static function signup($nama, $email, $password)
        {
            global $koneksi;
            $query = "insert into user (nama, email, password) values (?,?,?)";
            $stmt = $koneksi->prepare($query);
            $stmt->bind_param("sss", htmlspecialchars($nama), htmlspecialchars($email), htmlspecialchars($password));
            $stmt->execute();
            $result = $stmt->affected_rows > 0 ? true : false;
            $stmt->close();
            return $result;
        }
    }
?>