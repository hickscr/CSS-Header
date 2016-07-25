<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<title>NHLBI <?php print $appName; ?> Standard Application Header</title>

<meta charset="UTF-8" />

<link rel="stylesheet" href="jquery-ui-1.10.3.custom/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"  ></link>
<link rel="shortcut icon" href="http://www.nhlbi.nih.gov/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="ui/css/enterprise.css" type="text/css" /></link>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">

<!-- use if neccessary  <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->


<script type="text/javascript" src="ui/js/modernizr.min.js"></script>
<script type="text/javascript" src="ui/js/enterprise_1.js"></script>
<script type="text/javascript" src="ui/js/enterprise_2.js"></script>
<script type="text/javascript" src="ui/js/enterprise_3.js"></script>
<script type="text/javascript" src="ui/js/enterprise_4.js"></script>
<script type="text/javascript" src="ui/js/enterprise_5.js"></script>
<script type="text/javascript">
	jQuery
			.extend(
					Drupal.settings,
					{
						"extlink" : {
							"extClass" : "ext",
							"extSubdomains" : 0,
							"extExclude" : "",
							"extInclude" : "",
							"extCssExclude" : "",
							"extCssExplicit" : "",
							"extAlert" : 0,
							"extAlertText" : "This link will take you to an external web site.",
							"mailtoClass" : "mailto"
						}
					});
</script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Add excape 'esc' button to close the modal -->
<script type="text/javascript">

    $(function () {
        $('.modal-dialog').modal({
            show: false,
            keyboard: true,
            backdrop: 'static'
        });
    })
</script>
<!-- modal window -->

<link rel="stylesheet" href="DataTables/media/css/jquery.dataTables_themeroller.css" type="text/css"  ></link>
<link rel="stylesheet" href="ui/css/common.css" />
<link rel="stylesheet" href="ui/css/lookup.css" />
<link rel="stylesheet" href="ui/css/jquery.multiselect.css" />
<link rel="stylesheet" href="ui/css/clinical/erap.css" />


<!-- To close the window. Work on Safari, not FF -->
<script language="javascript" type="text/javascript"> 
function windowClose() { 
window.open('','_parent',''); 
window.close();
} 
</script>


<!-- text size control --> 
<script type="text/javascript">
    function zoomin(zlevel) {
        var _body = parent.parent.document.body;

        if (jQuery.browser.msie) {
            _body.style.zoom = zlevel;              
        }
        else
        {
            if (typeof _body.style.MozTransform == "string")    
                _body.style.MozTransform = "scale(" + (zlevel) + ")";
            else if (typeof _body.style.zoom == "string")
                _body.style.zoom = (zlevel*100) + "%";              
        }
    }
</script>

<!-- print control --> 
<script type="text/javascript">
function myFunction() {
    window.print();
}
</script>


<!-- Text sizer  -->


</head>

<body>

<?php include 'appHeaderIncludes/AppHeaderVars.php'; ?>
	
<div id="container">  
        
<?php include 'appHeaderIncludes/alertBar.inc'; ?>

<?php include 'appHeaderIncludes/globalBar.inc'; ?>

<?php include 'appHeaderIncludes/appMenuBar.inc'; ?>

<?php include 'appHeaderIncludes/breadcrumbBar.inc'; ?>
    
<!--    
    	
<section id="content">
	
    <div class="row">
    
		<div class="col-sm-16">    

            <h1>Clinical Trials</h1>   
            
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam malesuada venenatis justo, non mattis leo rutrum sit amet. Phasellus tempor mollis nibh. Praesent ut nulla condimentum, iaculis purus at, gravida dui. Nulla facilisi. Aliquam sem magna, tempus eget nisl nec, ullamcorper congue neque. Pellentesque elementum nisl leo, quis porttitor libero mattis id. Vestibulum non felis diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In ac nisl vel mi ultrices semper. Maecenas convallis porttitor vulputate. Praesent fringilla aliquam quam, ut convallis est suscipit vitae. Ut feugiat a leo vel fermentum. Cras et risus elit.</p>

<p>Proin semper non lectus euismod sodales. Duis vel mauris vel felis mattis lacinia. Ut aliquam massa et magna pretium eleifend. Curabitur libero felis, scelerisque non facilisis sed, posuere at metus. Praesent vel risus porta odio egestas tempus. Proin feugiat, ligula fermentum maximus interdum, libero est porta velit, et euismod ipsum nunc sed purus. Fusce sagittis libero quis metus facilisis tempor. Nunc massa ex, faucibus non tortor eu, consectetur porttitor massa. Sed sollicitudin mauris nunc. Duis dictum eleifend sem.
</p>

<p>
Pellentesque scelerisque aliquam libero ac posuere. Etiam ornare, lorem ut ultrices eleifend, felis nisl fringilla ante, eget porta mi orci eu mauris. Curabitur nunc metus, facilisis ac urna eu, vehicula ornare sem. Etiam sodales massa quis pretium vehicula. Etiam semper ipsum lacus, ac commodo massa luctus sit amet. Ut feugiat cursus est eget aliquet. Aenean molestie mattis auctor. Integer venenatis vel leo non tincidunt. Integer ac purus vel neque dignissim mollis id nec purus. Maecenas pulvinar aliquam libero id eleifend. Fusce laoreet convallis risus non condimentum. Suspendisse sed turpis ac elit tincidunt scelerisque quis id diam. Curabitur non semper lorem, vel sollicitudin turpis. Praesent rutrum pharetra lobortis. Ut volutpat dui at condimentum ornare. Nam eget nulla id nisl suscipit blandit.
</p>

<p>
In a nibh et mauris dignissim gravida in nec lectus. Mauris luctus dui eget viverra vulputate. Donec vitae congue nisi. Etiam dictum pretium aliquam. Sed vulputate nulla orci, et facilisis turpis porta dictum. Vivamus vehicula, odio eget bibendum euismod, eros libero lobortis turpis, non imperdiet enim mauris ut arcu. Vivamus id tristique justo. Integer pulvinar placerat sapien id porttitor. Aliquam bibendum dolor vel sollicitudin porttitor. Vestibulum luctus semper cursus. Cras velit purus, mollis non aliquet sed, tincidunt sit amet ligula. Donec sit amet lacus metus. Fusce volutpat enim ante, faucibus ultricies nunc mattis ut. Etiam finibus viverra convallis. Curabitur vel sapien sodales turpis consequat molestie sed eget ex.
</p>

<p>
Duis nec mauris in risus porta tincidunt eget sed ligula. Etiam vehicula metus urna. Nam feugiat aliquam faucibus. Nunc vestibulum, nunc id vulputate eleifend, mi sem hendrerit sapien, a placerat nunc lorem ut eros. Morbi turpis nulla, tempus et faucibus vitae, egestas a dui. Donec mollis feugiat odio, non sagittis libero tempus nec. Aliquam sed ante porta, sagittis augue ut, dictum turpis. Duis ut dolor interdum, cursus urna vitae, placerat enim. Nulla sed urna id lacus mattis ornare ut et magna. Integer eu dolor placerat, rutrum lacus sed, cursus lectus. Maecenas cursus tincidunt aliquam. Vestibulum sed nibh enim. Vivamus pellentesque ante neque, sit amet bibendum tortor tempor et. Pellentesque congue dui risus, id fringilla libero accumsan eget. Nunc sit amet pellentesque metus, eget lacinia libero. Nunc porttitor metus non volutpat placerat.</p>

        
  
       
   
			</div>
            
		</div>
        
</section>

-->
    
</div>



<!-- Modal - Get Started -->
<!-- Modal HTML -->
<div id="myDashboardStarted" class="modal fade" aria-labelledby="Description for Get Started with <?php print $appName; ?>" style="background-color:#EBEBEB;" tabindex="-1">
    <div class="modal-dialog">
        
<div class="modal-content">
        	<div class="modal-header">
				<div class="white-modal-header">
   
					<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button> 
          
					<h5 class="modal-title headerfive">Get Started with Clinical Dashborad</h5>
				</div>

					<h3 class="modal-title headerthree">Get Started with Clinical Dashborad</h3>

				</div>       
        
			<div class="modal-body custom-height-modal">

        <ul style="list-style:none">
         <li><a href="">Manual (PDF)</a></li>
         <li><a href="">Video tutorials</a> </li>
         <li><a href="">Training Classes</a></li>
         </ul>

         </div>

      </div>
    
    
    </div>
</div>
<!-- End - Get Started -->


<!-- Modal - Help -->
 <!-- Modal HTML -->
<div id="myDashboardHelp" class="modal fade" aria-labelledby="Description for Help" style="background-color:#EBEBEB;" tabindex="-1">
    <div class="modal-dialog">
        
        <div class="modal-content" style="">
        
			<div class="modal-header">
     
				<div class="white-modal-header">
   
				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button> 
				<h5 class="modal-title headerfive"><?php print $appName; ?> Help</h5>
          
          
				</div>
          
				<div class="black-modal-header"> 
       
				<button type="button" class="button-black-modal-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
				<button type="button" class="button-black-modal-right"><i class="fa fa-chevron-right" aria-hidden="true"></i> </button> 
 
  
				<div id="custom-search-input">
				<div class="input-group col-md-12">
					<span class="input-group-btn">	
                    	<button class="btn btn-primary" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</span>
	
    				<input type="text" class="search-query form-control" placeholder="Search" />
                               
					<span id="custom-remove-input">
						<button class="btn btn-primary" type="button" data-dismiss="modal">
					<i class="fa fa-times"></i></button>
					
				
                	</span>
                                
				</div>
			</div>
        </div>
        
          <h3 class="modal-title headerthree"><?php print $appName; ?> Help</h3>
        
        </div>
        
        <div class="modal-body custom-height-modal">
        
        <div class="custom-search-list-modal-one">
        
        <!-- This is Demo - This wil change to search custom box to dislay search result -->
       <ul style="list-style:none; width:100px;">
	   <li style="padding:5px 0px;"><a href="">Help Topic 1</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 2</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 3</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 4</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 5</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 6</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 7</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 8</a></li>
          </ul>
         </div>
         
         <div class=""> 
             <ul style="list-style:none; margin-top:-10px;">
	   <li style="padding:5px 0px;"><a href="">Help Topic 9</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 10</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 11</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 12</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 13</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 14</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 15</a></li>
       <li style="padding:5px 0px;"><a href="">Help Topic 16</a></li>
          </ul>
          </div>

         </div>
    </div>
    
        
        
    </div>
</div>
<!-- End - Help -->


<!-- Modal - About <?php print $appName; ?> -->
 <!-- Modal HTML -->
<div id="myDashboardAbout" class="modal fade" aria-labelledby="Description for About <?php print $appName; ?>" style="background-color:#EBEBEB;" tabindex="-1">
    <div class="modal-dialog">
        
        
        <div class="modal-content" style="">
        
			<div class="modal-header">
     
				<div class="white-modal-header">
   
					<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button> 
					<h5 class="modal-title headerfive">About <?php print $appName; ?> </h5>
    
				</div>
     
				<div class="modal-body custom-height-modal" style="text-align:center">
        
					<h3 class="modal-title headerthree"><?php print $appName; ?> </h3>

				<br/><br/>
				<p>Optional Tagline</p>

				<p>Version Number</p>

	

				<p><img src="ui/images/NHLBI_Standard_Lockup_Logo_Black.png" alt="NHLBI logo and HHS logo" /></p>
        
				</div>
        
		</div>
        </div>
        </div>
        
        
    </div>
<!-- End - ABout <?php print $appName; ?> -->


<!-- Modal - Term of Use -->
 <!-- Modal HTML -->
<div id="myDashboardUse" class="modal fade" aria-labelledby="Description for Term of Use" style="background-color:#EBEBEB;" tabindex="-1">
    <div class="modal-dialog">
        
        
        <div class="modal-content" style="">
        
			<div class="modal-header">
     
				<div class="white-modal-header">
   
				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button> 
				<h5 class="modal-title headerfive">Term of Use </h5>
      
				</div>
     
				<div class="modal-body custom-height-modal">
        
        <ul style="list-style:none;">
	   <li style="padding:5px 0px;"><a href="">Accessibility</a></li>
       <li style="padding:5px 0px;"><a href="">Privacy</a></li>
       <li style="padding:5px 0px;"><a href="">FOIA</a></li>
       <li style="padding:5px 0px;"><a href="">OIG</a></li>
  
          </ul>


			</div>  
        
		</div>
        
    </div>
</div>
</div>

<!-- End - Term of Use -->


<!-- System Requirement -->
 <!-- Modal HTML -->
<div id="myDashboardSystem" class="modal fade" aria-labelledby="Description for System Requirement" style="background-color:#EBEBEB;" tabindex="-1">
    <div class="modal-dialog">
        
        <div class="modal-content" style="">
			<div class="modal-header">
     
   				 <div class="white-modal-header">
   
          				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
           
           				<h5 class="modal-title headerfive">System Requirement</h5>
                     
       			</div>
      			
                <div class="modal-body custom-height-modal" style="text-align:center">
        
               		<h3 class="modal-title headerthree"><?php print $appName; ?> </h3>

					<br/><br/>
					<p>Requires one of the following web browsers to run correctly</p>

					<p>Internet Explorer version 9.0 or higher</p>

					<p>Mozilla Firefox</p>
					<p>Google Chrome</p>

					<p>Safari</p>

					<br/>

					<button type="button" class="test" data-dismiss="modal">Test My System</button> 
  
				</div>
 
		</div>
        
    </div>
</div>
</div>

<!-- End - System Requirement -->
<!-- End Modal Popup Window -->
</body>
</html>