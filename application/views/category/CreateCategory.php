    <style>
    .imp{
    color:red;
    }
   
    
    </style>
    
    <!-- begin #content -->
    <div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Finance</a></li>
        <li class="active">Category</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Finance | Category</h1>
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
        <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
    </div>
     <?php if($mode=='add'){?>
    <h4 class="panel-title"> Create Finance Category</h4>
    <?php } ?>
    <?php if($mode=='edit'){?>
    <h4 class="panel-title"> Update Finance Category</h4>
    <?php } ?>
    </div>
    <div class="panel-body">
    <div class="well">
<form class="form-horizontal">
     <fieldset>
             <div class="form-group">
                <label class="col-md-2 control-label">Category Name : </label>
                <div class="col-md-4">
                    <input type="text" class="form-control input-sm" placeholder="" value="<?php if($mode=='edit'){ echo $val1 ;} ?>"/>
                </div>
             </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Description :</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" placeholder="" value="" />
                    </div>
                </div>
             <div class="form-group">
                <label class="col-md-2 control-label">Is this under income?</label>
                <div class="col-md-4">
                    <label class="">
                        <input type="checkbox" class="" value="income" <?php if($mode=='edit'){ echo 'checked="checked"' ;}?> name="optcheck">
                    </label>
                </div>
             </div>
             <br>
                <div class="col-md-offset-3 col-md-1">
                 <?php if($mode=='add'){ ?>
                 <button type="button" class="btn btn-sm btn-primary">Create</button>
                 <?php } ?>
                   <?php if($mode=='edit'){ ?>
                 <button type="button" class="btn btn-sm btn-primary">Update</button>
                 <?php } ?>
                </div>
                 <div class="col-md-3">
                    <button type="button" class="btn btn-sm btn-danger ">Cancel</button>
                 </div>
             </fieldset>
     </form>                    
      </div>
    </div>
    </div>
    <!-- end panel -->
    </div>
    <!-- end col-12-->

    <div>
    <!-- end row -->
    </div>
    <!-- end #content -->