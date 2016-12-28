<!-- begin #content -->
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
<li><a href="javascript:;">Home</a></li>
<li><a href="javascript:;">Finance</a></li>
<li class="active">Category </li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Finance| Category</h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
<!-- begin col-6 -->
<div class="col-md-12">
<!-- begin panel -->
<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
<div class="panel-heading">
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
</div>
<h4 class="panel-title">Finance Category List</h4>
</div>
<div class="panel-body">
<div class="well">
<!--<fieldset>-->
<!-- <legend>Payroll Categories</legend>-->
<div class="row">
<div class="col-md-4"><a href="<?php echo base_url('FinCategoryCtrl/Create_fin_Category'); ?>" class="btn btn-primary btn-sm" role="button">Create Finance Category</a></div>
</div><br>
<div class="">
<div class="table-responsive">
<table class="table table-bordered">
<thead>
    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
    <th>Category</th>
    <th>Action</th>
    </tr>
    </thead>
<tr>
<th>Applicant Registration</th>
<td><a href="<?php echo base_url('FinCategoryCtrl/Edit_fin_Category?var1=Applicant Registration'); ?>"> <button class="btn btn-xs btn-primary" ><i class="fa fa-edit"></i></button> </a><button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
</tr>
<tr>
<th>Donation</th>
<td><a href="<?php echo base_url('FinCategoryCtrl/Edit_fin_Category?var1=Donation'); ?>"> <button class="btn btn-xs btn-primary" ><i class="fa fa-edit"></i></button> </a><button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
</tr>
<tr>
<th>Hostel</th>
<td><a href="<?php echo base_url('FinCategoryCtrl/Edit_fin_Category?var1=Hostel'); ?>"> <button class="btn btn-xs btn-primary" ><i class="fa fa-edit"></i>  </button> </a><button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
</tr>

</table>

</div>

</div>
<!--</fieldset>-->
</div>
<!--end well-->
</div>
<!-- end panel -->
</div>
<!-- end col-12-->

<div>
<!-- end row -->
</div>
<!-- end #content -->
