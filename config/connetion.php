<?php
    class claseConectar{
        public $conexion;
        protected $db;
        private $host = "localhost";
        private $uid    =   "root";
        private $pwd    =   "";
        private $dataBase   =   "";

        public function procedimientoConectar () {
            $this->conexion =   mysqli_connect($this->host, $this->uid, $this->pdw, $this->dataBase);
            mysqli_query($this->conexion, "SET NAMES 'utf8'");
            if ($this->conexion == false) die ("Error al conectarse a la base de datos.");
            $this->db   =   mysqli_select_db($this->conexion, $this->dataBase);
            if ($this->dataBase == false) die ("Error con la base de datos.");
            return $this->conexion;
        }
    }
?>