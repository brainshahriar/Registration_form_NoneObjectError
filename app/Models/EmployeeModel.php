<?php
namespace App\Models;
use \CodeIgniter\Model;
class EmployeeModel extends Model{
    protected $table='signup';
    protected $primaryKey='id';
    protected $allowedFields=['name','email','phone','course','cv'];
 

    protected $validationRules = [
        'name'=>'required|alpha_numeric_space|min_length[3]',
        'email'=>'required|valid_email|is_unique[signup.email]',
        'phone'=>'required|exact_length[11]|numeric',
        'course'=>'required',
        'cv'=>'required',
    ];
    protected $validationMessages=[
        'email'=>[
            'is_unique'=>'Sorry. That email has already been taken',
            'required'=>'Email is required',
            'valid_email'=>'Valid email required',
        ]
        ];
}