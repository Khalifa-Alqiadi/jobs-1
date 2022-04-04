@extends('admin.layout.master')

<?php
$do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';

if($do == 'Manage'){
?>
@section('showusers')
<h1 class="text-center">Manage Companies</h1>
    <div class="container">
        <div class="table-responsive">
            <table class="main-table manage-members text-center table table-bordered">
                <tr>
                    <td>#ID</td>
                    <td>Avatar</td>
                    <td>Name</td>
                    <td>Bio</td>
                    <td>Address</td>
                    <td>Registred Date</td>
                    <td>Control</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td class='avatar-img'>
                        <img src='images/img.jpg' alt=''> 
                    </td>
                    <td>YemenSoft</td>
                    <td>ojwrp;otgjrwpi;ohjpio;r</td>
                    <td>Sana'a</td>
                    <td>2022/1/3</td>
                    <td>
                        <a href="companies?do=Edit&comid=1" class="btn btn-success">
                            <i class='fa fa-edit'></i> Edit
                        </a>
                        <a href="companies?do=Delete&userid=" class='btn btn-danger confirm'>
                            <i class='fa fa-close'></i> Delete
                        </a>
                        <a href="companies?do=Activate&userid=" class='btn btn-info activate'>
                            <i class='fa fa-check'></i> Activate
                        </a>
                        
                    </td>
                </tr>
            </table>
        </div>
        <a href="companies?do=Add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</a>
    </div>
@stop
<?php }elseif($do == 'Add'){ // Add Page ?>
@section('addusers')
<h1 class="text-center">Add New Company</h1>
<div class="container">
    <div class="form-container">
    <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
        <!-- Start UserName -->
            <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Company Name</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="name" class="form-control" required="required" placeholder="name company">
                </div>
            </div>
        <!-- End UserName -->
        <!-- Start Email -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Bio</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="bio" class="form-control" required="required" placeholder="Bio Company">
                </div>
            </div>
        <!-- End Email -->
        <!-- Start Password -->
        <div class="mb-2 row">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" name="address" class="form-control" required="required" placeholder="Company Address">
                </div>
            </div>
        <!-- End Password -->
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
                    <input type="submit" value="Add Company" class=" btn btn-primary ">
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
        <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
            <!-- Start UserName -->
                <div class="mb-2 row">
                    <label class="col-sm-2 col-form-label">Company Name</label>
                    <div class="col-sm-10 col-md-9">
                        <input type="text" name="name" class="form-control" required="required" placeholder="name company">
                    </div>
                </div>
                <!-- End UserName -->
                <!-- Start Email -->
                <div class="mb-2 row">
                        <label class="col-sm-2 col-form-label">Bio</label>
                        <div class="col-sm-10 col-md-9">
                            <input type="text" name="bio" class="form-control" required="required" placeholder="Bio Company">
                        </div>
                    </div>
                <!-- End Email -->
                <!-- Start Password -->
                <div class="mb-2 row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10 col-md-9">
                            <input type="text" name="address" class="form-control" required="required" placeholder="Company Address">
                            <i class="show-pass fa fa-eye fa-1x"></i>
                        </div>
                    </div>
                <!-- End Password -->
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
                            <input type="submit" value="Add Member" class=" btn btn-primary ">
                        </div>
                    </div>
                <!-- End Submit -->
            </form>
        </div>
    </div>  
    @stop  
<?php
} // End Edit Page?>
