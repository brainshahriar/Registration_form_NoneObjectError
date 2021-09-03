<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\EmployeeModel;
class Employee extends BaseController
{
    public $empModel;
	public function __construct()
	{
        helper("form");
		$this->empModel=new EmployeeModel();
	}
    public function addEmp()
    {
        if($this->request->getMethod()=='post')
        {
            $data=[
                'name' => $this->request->getVar('name',FILTER_SANITIZE_STRING),
                'email' => $this->request->getVar('email',FILTER_SANITIZE_EMAIL),
                'phone' => $this->request->getVar('phone'),
                'course' => $this->request->getVar('course',FILTER_SANITIZE_STRING),
                'cv' => $this->request->getVar('cv'),
                

            ];
            if($this->empModel->save($data)===true)
            {
                session()->setTempdata('success','Trainer added successfully',2);
                return redirect()->to(current_url());
            }
        }
        
        
      
        return view('employee/empadd',['errors'=> $this->empModel->errors()]);
    }
}
?>
