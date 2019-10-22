<?php

class FileDB {

    private $file_name;
    private $data;

    public function __construct($file_name) {
        $this->file_name = $file_name;
    }

    public function __load() {
        $this->data = file_to_array($this->file_name);
    }

    public function setData($data_array) {
        $this->data = $data_array;
    }

    public function save() {
        return array_to_file($this->data, $this->file_name);
    }

    public function getData() {
        return $this->data;
    }

    public function getRow($table, $row_id) {
        if (isset($this->data[$table])) {
            return $this->data[$table][$row_id];
        }
    }

    public function addRow($table, $row, $row_id = null) {
        if ($row_id !== null) {
            $table;
            $row;
        } else {
            $table;
            $row;
            $row_id;
        }
    }
}
