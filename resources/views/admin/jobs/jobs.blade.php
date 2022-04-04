@extends('admin.layout.master')

<?php
$do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';

if($do == 'Manage'){
?>
@section('showusers')
<h1 class="text-center">Manage Jops</h1>
    <div class="container">
        <div class="table-responsive">
            <table class="main-table manage-members text-center table table-bordered">
                <tr>
                    <td>#ID</td>
                    <td>Avatar</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Address</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Control</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td class='avatar-img'>
                        <img src="{{URL::assets('images/img.jpg'')" alt=''> 
                    </td>
                    <td>Devloper</td>
                    <td>ojwrp;otgjrwpi;ohjpio;r</td>
                    <td>Sana'a</td>
                    <td>2022/1/3</td>
                    <td>2022/1/20</td>
                    <td>
                        <a href="jobs?do=Edit&jobid=1" class="btn btn-success">
                            <i class='fa fa-edit'></i> Edit
                        </a>
                        <a href="jobs?do=Delete&jobid=" class='btn btn-danger confirm'>
                            <i class='fa fa-close'></i> Delete
                        </a>
                        <a href="jobs?do=Activate&jobid=" class='btn btn-info activate'>
                            <i class='fa fa-check'></i> Activate
                        </a>
                        
                    </td>
                </tr>
            </table>
        </div>
        <a href="jobs?do=Add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</a>
    </div>
@stop
<?php }elseif($do == 'Add'){ // Add Page ?>
@section('addusers')
<h1 class="text-center">Add New Job</h1>
<div class="container">
    <div class="form-container">
    <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
        <!-- Start UserName -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Job Name</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="name" class="form-control" required="required" placeholder="name job">
                </div>
            </div>
        <!-- End UserName -->
        <!-- Start Email -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="description" class="form-control" required="required" placeholder="Description Company">
                </div>
            </div>
        <!-- End Email -->
        <!-- Start Address -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="address" class="form-control" required="required" placeholder="Job Address">
                </div>
            </div>
        <!-- End Address -->
        <!-- Start Start Date -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-10 col-md-9">
                    <input type="date" name="start" class="form-control" required="required" placeholder="Start Date">
                </div>
            </div>
        <!-- End Start Date -->
        <!-- Start End Date -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-10 col-md-9">
                    <input type="date" name="end" class="form-control" required="required" placeholder="Start Date">
                </div>
            </div>
        <!-- End End Date -->
        <!-- Start Avatar Field -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Company Avatar</label>
                <div class="col-sm-10 col-md-9">
                    <input type="file" name="avatar" class="form-control" required="required">
                </div>
            </div>
        <!-- End Avatar Field -->
        <!-- Start Submit -->
        <div class="mb-2 row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Add Job" class=" btn btn-primary ">
                </div>
            </div>
        <!-- End Submit -->
    </form>
    </div>
</div> 
@stop
<?php }elseif($do == 'Edit'){ // Edit Page ?>
 @section('editusers')
    <h1 class="text-center">Edit Job</h1>
    <div class="container">
        <div class="form-container">
        <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
            <!-- Start UserName -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Job Name</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="name" class="form-control" required="required" placeholder="name job">
                </div>
            </div>
            <!-- End UserName -->
            <!-- Start Email -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="description" class="form-control" required="required" placeholder="Description Company">
                </div>
            </div>
            <!-- End Email -->
            <!-- Start Address -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="address" class="form-control" required="required" placeholder="Job Address">
                </div>
            </div>
            <!-- End Address -->
            <!-- Start Start Date -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-10 col-md-9">
                    <input type="date" name="start" class="form-control" required="required" placeholder="Start Date">
                </div>
            </div>
            <!-- End Start Date -->
            <!-- Start End Date -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-10 col-md-9">
                    <input type="date" name="end" class="form-control" required="required" placeholder="Start Date">
                </div>
            </div>
            <!-- End End Date -->
            <!-- Start Avatar Field -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Company Avatar</label>
                <div class="col-sm-10 col-md-9">
                    <input type="file" name="avatar" class="form-control" required="required">
                </div>
            </div>
            <!-- End Avatar Field -->
            <!-- Start Submit -->
            <div class="mb-2 row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Add Job" class=" btn btn-primary ">
                </div>
            </div>
            <!-- End Submit -->
        </form>
        </div>
    </div>  
    @stop  
<?php
} // End Edit Page?>
