<?php
    require 'helper/config.php';

    class PlayBoxModel{
        static function select(){
            global $koneksi;
            $sql = "SELECT * FROM player";
            $result = mysqli_query($koneksi, $sql);
            $rows = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
            }
            return $rows;
        }

        static function create($nama, $tanggal, $play_time, $end_time, $harga) {            
            global $koneksi;
            $query = "INSERT INTO player (nama, tanggal, play_time, end_time, harga) VALUES (?, ?, ?, ?, ?)";
            $stmt = $koneksi->prepare($query);
            $stmt->bind_param("ssssi", $nama, $tanggal, $play_time, $end_time, $harga);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

        static function detail($id) {
            global $koneksi;
            $query = "SELECT * FROM player WHERE id =".$id;
            $result = mysqli_query($koneksi, $query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            else { 
                $data = [];
            }
                return $data;
        }

        static function update($id, $nama, $tanggal, $play_time, $end_time, $harga) {
            global $koneksi;
            $query = "UPDATE player set nama = ?, tanggal = ?, play_time = ?, end_time = ?, harga = ? WHERE id = ?";
            $stmt = $koneksi->prepare($query);
            $stmt->bind_param("ssssii", $nama, $tanggal, $play_time, $end_time, $harga, $id);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

        static function delete($id) {
            global $koneksi;
            $query = "DELETE FROM player WHERE id = ?";
            $stmt = $koneksi->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->affected_rows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

    }
?>