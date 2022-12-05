<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $Usuario = [
        'nombre' => 'required|min_length[2]|max_length[20]',
        'usuario' => 'required|min_length[3]|max_length[20]',
        'password' => 'required|min_length[3]'
    ];

    public $Producto = [
        'codigo' => 'required|min_length[5]|max_length[5]|is_natural|greater_than[0]',
        'descripcion' => 'required|min_length[5]|max_length[20]',
        'stock' => 'required|min_length[1]|is_natural|greater_than[0]',
        'precio' => 'required|min_length[1]|greater_than[0]',
    ];
    public $Stock = [
        'entradastock' => 'required|min_length[1]|max_length[4]|is_natural|greater_than[0]'
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
