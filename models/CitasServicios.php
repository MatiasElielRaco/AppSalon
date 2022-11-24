<?php

namespace Model;

class CitasServicios extends ActiveRecord {

    protected static $tabla = "citasservicios";
    protected static $columnasDB = ["id", "citaID", "servicioID"];

    public $id;
    public $citaID;
    public $servicioID;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? null;
        $this->citaID = $args["citaID"] ?? "";
        $this->servicioID = $args["servicioID"] ?? "";
    }


}