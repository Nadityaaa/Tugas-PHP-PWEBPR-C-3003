<?php
    require ("D:/xampp/htdocs/PlayBox/helper/config.php");

    class UserModel{
        static function select(){
            global $koneksi;
            $sql = "SELECT * FROM user";
            $result = mysqli_query($koneksi, $sql);
            $rows = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
            }
            return $rows;
        }

        static function create($nama, $email, $password) {            
            global $koneksi;
            $query = "INSERT INTO user (nama, email, password) VALUES (?, ?, ?)";
            $stmt = $koneksi->prepare($query);
            $stmt->bind_param("sss", $nama, $email, $password);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

        static function detail($id) {
            global $koneksi;
            $query = "SELECT * FROM user WHERE id = '$id'";
            $result = mysqli_query($koneksi, $query);
            if ($result->num_rows > 0) {
                $data = mysqli_fetch_object($result);
            }
            else { 
                $data = [];
            }
                return $data;
        }

        static function update($id, $nama, $email, $password, $deskripsi, $image) {
            global $koneksi;
            $query = "UPDATE user set nama = ?, email = ?, deskripsi = ?, image = ? WHERE id = ?, password = ?" ;
            $stmt = $koneksi->prepare($query);
            $stmt->bind_param("ssssis", $nama, $email, $deskripsi, $image, $id, $password);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }
    }
?>