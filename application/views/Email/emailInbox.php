<style>
     .well h1{
	       font-size: 15px;
	   }
</style>
          <link href="<?php echo base_url(); ?>assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
	  <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet" />
	  <!--<link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet" />-->
	  
	   <script src="<?php echo base_url(); ?>assets/js/inbox.demo.min.js"></script>

            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Email</a></li>
                    </ol>
                    <h1 class="page-header">Messages | Inbox</h1>
                    <div class="row">
                        <div class="col-md-12">
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                           <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                        </div>
                            <h4 class="panel-title">Messages</h4>
                    </div>
                    <div class="well" style="background-color: rgb(217,224,231);">
                            <div class="wrapper bg-silver text-center ">
                                    <a href="<?php echo base_url('EmailCtrl/composeMail'); ?>" class="btn btn-success p-l-40 p-r-40 btn-sm" style="margin-right: 803px;">
                                        Compose
                                    </a>
                                 </div>
			<div class="p-20">
			<!-- begin row -->
			<div class="row">
                           
                              <!--<div class="vertical-box-column width-250" >-->
                                 
                            <!--</div>-->
			      
			    <!-- begin col-2 -->
			    <div class="col-md-2">
                                      
<!--			        <form>-->
<!--                                    <div class="input-group m-b-15">-->
<!--                                        <input type="text" class="form-control input-sm input-white" placeholder="Search Mail" />-->
<!--                                        <span class="input-group-btn">-->
<!--                                            <button class="btn btn-sm btn-inverse" type="button"><i class="fa fa-search"></i></button>-->
<!--                                        </span>-->
<!--                                    </div>-->
<!--			        </form>-->
			        <div class="hidden-sm hidden-xs">
                        <h5 class="m-t-20">Email</h5>
                        <ul class="nav nav-pills nav-stacked nav-inbox">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-inbox fa-fw m-r-5"></i> Inbox (10)
                                </a>
                            </li>
                            <li><a href="#"><i class="fa fa-inbox fa-fw m-r-5"></i> Sent</a></li>
                            <li><a href="#"><i class="fa fa-pencil fa-fw m-r-5"></i> Draft</a></li>
                            <li><a href="#"><i class="fa fa-trash-o fa-fw m-r-5"></i> Trash</a></li>
                            <li><a href="#"><i class="fa fa-star fa-fw m-r-5"></i> Archive</a></li>
                        </ul>
                        <h5 class="m-t-20">Folders</h5>
                        <ul class="nav nav-pills nav-stacked nav-inbox">
                            <li><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Newsletter</a></li>
                            <li><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Friend</a></li>
                            <li><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Company</a></li>
                            <li><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Downloaded</a></li>
                        </ul>
                    </div>
                </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-10">
			        <div class="email-content">
                        <table class="table table-email">
                            <thead>
                                <tr>
                                    <th class="email-select"><a href="#" data-click="email-select-all"><i class="fa fa-square-o fa-fw"></i></a></th>
                                    <th colspan="2">
                                        <div class="dropdown">
                                            <a href="#" class="email-header-link" data-toggle="dropdown">View All <i class="fa fa-angle-down m-l-5"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="active"><a href="#">All</a></li>
                                                <li><a href="#">Unread</a></li>
                                                <li><a href="#">Contacts</a></li>
                                                <li><a href="#">Groups</a></li>
                                                <li><a href="#">Newsletters</a></li>
                                                <li><a href="#">Social updates</a></li>
                                                <li><a href="#">Everything else</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <a href="#" class="email-header-link" data-toggle="dropdown">Arrange by <i class="fa fa-angle-down m-l-5"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="active"><a href="#">Date</a></li>
                                                <li><a href="#">From</a></li>
                                                <li><a href="#">Subject</a></li>
                                                <li><a href="#">Size</a></li>
                                                <li><a href="#">Conversation</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Leap Motion
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Maecenas ultrices interdum leo, eu aliquam diam mattis sed.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Leap Motion
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Ut tristique dapibus nibh, sed scelerisque magna vehicula a.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Stefie Chin
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Etiam pretium neque vitae vulputate fermentum.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Alan Tan
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Duis et justo in nisl tristique lobortis id at ligula.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Yu Ming Tan
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Harvinder Signh
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Aliquam diam risus, condimentum ut diam in, fermentum euismod sem.
                                    </td>
                                    <td class="email-date">12/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Yu Ming Tan
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Fiona Loh
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Praesent dapibus ultricies magna, ac laoreet ante pellentesque nec. 
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Derrick Tew
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Nullam eget nibh et dui vestibulum aliquam vitae a lacus.
                                    </td>
                                    <td class="email-date">10/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Terry Dew
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Nulla eget placerat ante, sed hendrerit felis. Praesent vitae convallis erat.
                                    </td>
                                    <td class="email-date">09/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        John Doe
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
                                    </td>
                                    <td class="email-date">08/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Leap Motion
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Ut tristique dapibus nibh, sed scelerisque magna vehicula a.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
                                    <td class="email-sender">
                                        Stefie Chin
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a> 
                                        Etiam pretium neque vitae vulputate fermentum.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="email-footer clearfix">
                            737 messages
                            <ul class="pagination pagination-sm m-t-0 m-b-0 pull-right">
                                <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
			        </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
			</div>
                    
                </div>
            </div>
        </div>
        </div>
    </div>
	 
	