<?php 
require_once 'config.php';

class view extends config{

    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo "<h3>Pending Task</h3>";
        echo "<table class=' table table-dark'>";
        echo "<thead>";
        echo "<th>Task</th>";
        echo "<th>Time Added</th>";
        echo "<th>Actions</th>";
        echo "</thead>";
        foreach ($result as $data){
        echo "<tr>";     
        echo "<td>$data[item]</td>";
        echo "<td>$data[date_added]</td>";
        echo "<td>
             <a class='btn btn-info' href='index.php?edit=$data[id]'>Complete Task</a>
             <a class='btn btn-danger' href='index.php?delete=$data[id]'>Delete Task</a>
             </td>";
        echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
    }

    public function viewCompletedData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo "<h3>Completed Task</h3>";
        echo "<table class=' table table-light shadow'>";
        echo "<thead>";
        echo "<th>Task</th>";
        echo "<th>Time Added</th>";
        echo "<th>Time Completed</th>";
        echo "</thead>";
        foreach ($result as $data){
        echo "<tr>";     
        echo "<td>$data[item]</td>";
        echo "<td>$data[date_added]</td>";
        echo "<td>$data[date_completed]</td>";
        echo "</tr>";
        }
        echo "</table>";
    }

}
?>