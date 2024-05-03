<?php
    require "helper/config.php";

    class ImageModel{
        static function create($file, $deskripsi) {            
            global $koneksi;
            $query = "INSERT INTO dokumentasi (gambar, deskripsi) VALUES (?, ?)";
            $stmt = $koneksi->prepare($query);
            $stmt->bind_param("ss", $file, $deskripsi);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }
    }
?>