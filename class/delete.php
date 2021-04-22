<?php 
require_once 'config.php';

class delete extends config {
    public $task;

    public function __construct($task){
        $this->task = $task;
    }

    public function deleteTask(){
        $con = $this->con();
        $sql = "DELETE FROM `tbl_todolist`WHERE `id` = $this->task";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>