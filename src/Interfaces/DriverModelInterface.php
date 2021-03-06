<?php
namespace SupraModel\Interfaces;

interface DriverModelInterface {

    public function setDebugMode($mode);

    public function getDebugMode();

    public function setTable($table);

    public function getTable();

    public function setTableIdentifier($id);

    public function getTableIdentifier();
}
