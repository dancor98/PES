<?php

namespace Model;

class Carreras extends ActiveRecord
{

    protected static $tabla = 'postulaciones';
    protected static $columnasDB = [
        'id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'cedula',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'correo',
        'departamento_id',
        'pretencion_salarial',
        'mensaje',
        'cv'

    ];

    public $id;
    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $cedula;
    public $fecha_nacimiento;
    public $genero;
    public $telefono;
    public $correo;
    public $departamento_id;
    public $pretencion_salarial;
    public $mensaje;
    public $cv;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido_paterno = $args['apellido_paterno'] ?? '';
        $this->apellido_materno = $args['apellido_materno'] ?? '';
        $this->cedula = $args['cedula'] ?? null;
        $this->fecha_nacimiento = $args['fecha_nacimiento'] ?? '';
        $this->genero = $args['genero'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->departamento_id = $args['departamento_id'] ?? null;
        $this->pretencion_salarial = $args['pretencion_salarial'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
        $this->cv = $args['cv'] ?? '';
    }

    //Mensajes de Validacion
    public function comprobar()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El nombre es obligatorio';
        }
        if (preg_match('/[0-9]/', $this->nombre)) {
            self::$alertas['error'][] = 'El nombre no debe contener números';
        }
        if (!$this->apellido_paterno) {
            self::$alertas['error'][] = 'El apellido paterno es obligatorio';
        }
        if (preg_match('/[0-9]/', $this->apellido_paterno)) {
            self::$alertas['error'][] = 'El apellido paterno no debe contener números';
        }
        if (!$this->apellido_materno) {
            self::$alertas['error'][] = 'El apellido materno es obligatorio';
        }
        if (preg_match('/[0-9]/', $this->apellido_materno)) {
            self::$alertas['error'][] = 'El apellido materno no debe contener números';
        }
        if (!$this->cedula) {
            self::$alertas['error'][] = 'La cedula es obligatoria';
        }
        if (!preg_match('/^[0-9]+$/', $this->cedula)) {
            self::$alertas['error'][] = 'La cedula debe contener solo números';
        }
        if (strlen($this->cedula) < 9) {
            self::$alertas['error'][] = 'La cedula tiene que tener un minimo de 9 digitos, verifique que no existan espacios';
        }

        return self::$alertas;
    }
}