<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">

<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<title>Untitled Document</title>
<style>

.wrapper{
width: 1000px;
height:200px;
margin-left:auto;
margin-right:auto;
padding-top:20px;
}
.maincontent{
width:680px;
float:right;	
	
}
.logo{
width:379px;
height:60px;
margin-left:auto;
margin-right:auto;
margin-bottom:26px;
position: relative;
-moz-box-shadow: 0 14px 10px -12px rgba(0,0,0,0.7);
-webkit-box-shadow: 0 14px 10px -12px rgba(0,0,0,0.7);
box-shadow: 0 14px 10px -12px rgba(0,0,0,0.7);
}
.sidebar{
	width:240px;
	float:left;
	margin-left:20px;
	}
p
{
float:left;
	margin-left:20px;
}
ul.tabs {
    margin: 0;
    padding: 0;
    float: left;
    list-style: none;
    height: 19px; /*--Set height of tabs--*/
    border-bottom: 1px solid #E2E2E2;
    border-left: 1px solid #E2E2E2;
    width: 100%;
    margin-bottom:20px;
}
ul.tabs li {
    float: left;
    margin: 0;
    padding: 0;
    height: 18px; /*--Minus 1px from the height of  ul--*/
    line-height: 18px; /*--aligns text within the tab--*/
    border: 1px solid #E2E2E2;
    margin-bottom: -1px; /*--Pull the list item down 1px--*/
    overflow: hidden;
    position: relative;
    background: #f2f2f2;
    margin-right:5px;
    min-width:73px;
    text-align:center;
     
}
ul.tabs li:first-child{ /*--Removes the left border from the first child of the list--*/
border-left:none;   
     
}
ul.tabs li a {
    text-decoration: none;
    color: #333333;
    display: block;
    font-size: 11px;
 
    padding-right:5px;
    padding-left:5px;
 
    outline: none;
}
ul.tabs li a:hover {
    background: #fff;
}
html ul.tabs li.active, html ul.tabs li.active a:hover  { /*--Makes sure that the active tab does not listen to the hover properties--*/
    background: #fff;
    border-bottom: 1px solid #fff; 
    color:#3B5998;
}
ul.tabs li.active a{
    color:#3B5998;  
}	
</style>
</head>

<body>
<div class="wrapper">

	 <div class="maincontent">
    
    	   <div class="logo"><img src="images/logo.png" width="379" height="60" alt="webdesigntuts+ logo">
		   
		   </div>
        
        <ul class="tabs">
            <li><a href="#tab1">All</a></li>
            <li><a href="#tab2">About</a></li>
            <li><a href="#tab3">Write For Us</a></li>
            <li><a href="#tab4">Other Blogs</a></li>
		</ul>

            <div class="tab_container">
                   <div id="tab1" class="tab_content">
    
                          <div class="post">
                                  <h4>area1</h4>    
                          </div><!--End Blog Post-->
        
                   </div>
   
                   <div id="tab2" class="tab_content">
    
                                   <h3>area2</h3>

    
                   </div><!--End Tab 2 -->
    
                    <div id="tab3" class="tab_content">

                                   <h3>area3</h3>
    
                    </div><!--End Tab 3 -->
    
                    <div id="tab4" class="tab_content">

                                   <h3>area4</h3>
     
     
                    </div><!--End Tab 4 -->

              </div><!--End Tab Container -->
    
       </div><!--End Main Content-->
    
    <div class="sidebar">
    
            <form action="" method="get">
            <input name="search" class="search" placeholder="Filter webdesigntuts+ posts">
            </form>
            
             
            <br />
			<p>zcz</p>
        
    
    
    </div><!--End Sidebar-->


</div><!--End Wrapper -->
<script>
 $(document).ready(function() {

	
	$(".tab_content").hide(); //On page load hide all the contents of all tabs
	$("ul.tabs li:first").addClass("active").show(); //Default to the first tab
	$(".tab_content:first").show(); //Show the default tabs content

	//When the user clicks on the tab
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove the active class
		$(this).addClass("active"); //Add the active tab to the selected tab
		$(".tab_content").hide(); //Hide all other tab content

		var activeTab = $(this).find("a").attr("href"); //Get the href's attribute value (class) and fade in the corresponding tabs content
		$(activeTab).fadeIn(); //Fade the tab in
		return false;
	});

	
	

});
</script>

</body>
</html>
