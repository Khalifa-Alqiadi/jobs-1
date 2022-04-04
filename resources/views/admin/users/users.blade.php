@extends('admin.layout.master')

<?php
$do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';

if($do == 'Manage'){
?>
@section('showusers')
<h1 class="text-center">Manage User</h1>
    <div class="container">
        <div class="table-responsive">
            <table class="main-table manage-members text-center table table-bordered">
                <tr>
                    <td>#ID</td>
                    <td>Avatar</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Registred Date</td>
                    <td>Control</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td class='avatar-img'>
                        <img src='images/img.jpg' alt=''> 
                    </td>
                    <td>khalifa</td>
                    <td>khalifa.alqiadi@gmail.com</td>
                    <td>2022/1/3</td>
                    <td>
                        <a href="users?do=Edit&userid=1" class="btn btn-success">
                            <i class='fa fa-edit'></i> Edit
                        </a>
                        <a href="users.php?do=Delete&userid=" class='btn btn-danger confirm'>
                            <i class='fa fa-close'></i> Delete
                        </a>
                        <a href="users.php?do=Activate&userid=" class='btn btn-info activate'>
                            <i class='fa fa-check'></i> Activate
                        </a>
                        
                    </td>
                </tr>
            </table>
        </div>
        <a href="users?do=Add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</a>
    </div>
@stop
<?php }elseif($do == 'Add'){ // Add Page ?>
@section('addusers')
<h1 class="text-center">Add New Member</h1>
<div class="container">
    <div class="form-container">
    <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
        <!-- Start UserName -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="username" class="form-control" autocomplete="off" required="required" placeholder="Username To Login Into Shop">
                </div>
            </div>
        <!-- End UserName -->
        <!-- Start Email -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="email" class="form-control" required="required" placeholder="Email Must Be Valid">
                </div>
            </div>
        <!-- End Email -->
        <!-- Start Password -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10 col-md-9">
                    <input type="password" name="password" class="password form-control" autocomplete="new-password" required="required" placeholder="Password Must Be Hard & Complex">
                    <i class="show-pass fa fa-eye fa-1x"></i>
                </div>
            </div>
        <!-- End Password -->
        <!-- Start Avatar Field -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">User Avatar</label>
                <div class="col-sm-10 col-md-9">
                    <input type="file" name="avatar" class="form-control" required="required">
                </div>
            </div>
        <!-- End Avatar Field -->
        <!-- Start Submit -->
        <div class="mb-2 row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Add Member" class=" btn btn-primary ">
                </div>
            </div>
        <!-- End Submit -->
    </form>
    </div>
</div> 
@stop
<?php }elseif($do == 'Edit'){ // Edit Page ?>
 @section('editusers')
    <h1 class="text-center">Edit Member</h1>
    <div class="container">
        <div class="form-container">
        <form class="form-horizontal" action="?do=Update" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="userid" value="" />
            <!-- Start UserName -->
                <div class="mb-2 row">
                    <label class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10 col-md-9">
                        <input type="text" name="username" value="" class="form-control" autocomplete="off" required="required">
                    </div>
                </div>
            <!-- End UserName -->
            <!-- Start Email -->
            <div class="mb-2 row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10 col-md-9">
                        <input type="text" name="email" value="" class="form-control" required="required">
                    </div>
                </div>
            <!-- End Email -->
            <!-- Start Password -->
            <div class="mb-2 row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10 col-md-9">
                        <input type="hidden" name="oldpassword" value=""> 
                        <input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="Leave Bland If You Dont WantTo Change">
                    </div>
                </div>
            <!-- End Password -->
            <!-- Start Avatar Field -->
            <div class="mb-2 row">
                    <label class="col-sm-2 col-form-label">User Avatar</label>
                    <div class="col-sm-10 col-md-9">
                        <input 
                            type="file" 
                            name="avatar" 
                            value=""
                            class="form-control" 
                            required="required">
                    </div>
                </div>
            <!-- End Avatar Field -->
            <!-- Start Submit -->
            <div class="mb-2 row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Update" class=" btn btn-primary ">
                    </div>
                </div>
            <!-- End Submit -->
        
        </form>
        </div>
    </div>  
    @stop  
<?php
} // End Edit Page?>
