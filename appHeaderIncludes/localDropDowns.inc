<?php

$selection = array_column($appMenuSelection, 0);
	
$a = 0;

foreach($selection as $value) {


	
echo <<<EOT

<li  data-id="547" data-level="1" data-type="menu_item" data-class="main-menu-b" data-xicon="" data-caption="" data-alignsub="left" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega main-menu-b mega-align-left dropdown">
  
  						<a href="" class="dropdown-toggle">
EOT;

echo "$value";

echo <<<EOT

<span class="caret"></span>
  </a>
  
  <div  data-class="" data-width="" class="dropdown-menu">
  
  	<div class="mega-dropdown-inner">
  
    	<div  class="tb-megamenu-row row-fluid">
        
 		 <div  data-class="" data-width="12" style="width: 240px;" data-hidewcol="0" id="tb-megamenu-column-10" class="tb-megamenu-column span12  mega-col-nav">
         
 		 <div class="tb-megamenu-column-inner mega-inner clearfix">
         
         <ul class="tb-megamenu-subnav mega-nav level-1 items-4">

EOT;

$selection = array_values($appMenuSelection[$a++]);

$subselection = array_slice($selection, 1);  								

foreach($subselection as $value) {
	


echo <<<EOT

	
							        <li  data-id="736" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
        
  									

	$value

 <br/></li>									  


EOT;

}


echo <<<EOT

</ul>
</div>
</div>
</div>
</div>
</div>

<!--end drop down code-->
  
  							</li>
							
							
							
							
							
							
							
							
EOT;

	}
		
	;
	
	
						
?>

</li>
