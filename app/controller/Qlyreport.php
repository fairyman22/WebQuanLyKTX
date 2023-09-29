<?php
class Qlyreport extends Controller{
    public $model_home;
    public $data = [];
    public function __construct(){
        $this->model_home = $this->model('Report');
    }

    public function index(){
        $this->data['content'] = 'staff/dashboard_NV.php';
        $this->render('layout/admin_layout', $this->data);
    }
    public function showthemrp(){
        $this->data['content'] = 'student/formreport';
        $this->render('layout/student_layout', $this->data);
    }
    public function detail($id=0){
        $this->data['info'] = $this->model_home->getDetail($id);
        $this->data['content'] = 'home/test';
        $this->render('layout/admin_layout', $this->data);
        
    }
    public function test(){
        
        $this->render('layout/admin_layout', $this->data);
    }
   
}
?>