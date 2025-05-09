<?php
// Model.php
require_once 'Koneksi.php';

class Model {
    protected $koneksi;

    public function __construct() {
        $this->koneksi = (new Koneksi())->getKoneksi();
    }

    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = implode(", ", array_map(fn($value) => "'$value'", array_values($data)));
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
        return $this->koneksi->query($query);
    }

    public function update($table, $data, $where) {
        $set = implode(", ", array_map(fn($key, $value) => "$key = '$value'", array_keys($data), $data));
        $query = "UPDATE $table SET $set WHERE $where";
        return $this->koneksi->query($query);
    }

    public function delete($table, $where) {
        $query = "DELETE FROM $table WHERE $where";
        return $this->koneksi->query($query);
    }

    public function getAll($table) {
        $query = "SELECT * FROM $table";
        return $this->koneksi->query($query);
    }

    public function getById($table, $where) {
        $query = "SELECT * FROM $table WHERE $where";
        return $this->koneksi->query($query)->fetch_assoc();
    }
}
?>