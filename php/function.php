<?php 

function insertTodo(){
    if(!empty($_GET['items'])){
        $insert = new insert($_GET['items']);
        if($insert->insertTask()){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Insert Task Successful!</strong> Thank you for using this app.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
        }else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed to Insert Task</strong> Something went wrong.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>';
        }
    }
}


function deleteTodo(){
    if(!empty($_GET['delete'])){
        $delete = new delete($_GET['delete']);
        if($delete->deleteTask()){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Delete Task Successful! </strong> Thank you for using this app.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
        }else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed to Delete Task </strong> Something went wrong.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>';
        }
    }
}

function editTodo(){
    if(!empty($_GET['edit'])){
        $edit = new edit($_GET['edit']);
        if($edit->editTask()){
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Task Successfully Completed! </strong> Thank you for using this app.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
        }else{
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Failed to Complete Task </strong> Something went wrong.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>';
        }
    }
}

function viewTable() {
    $view = new view;
    $view->viewData();
    $view->viewCompletedData();
}

function listener(){
    insertTodo();
    deleteTodo(); 
    editTodo();
}

?>