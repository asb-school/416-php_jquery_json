<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Sorter Service</title> 
	<link rel="stylesheet" href="jquery_mobile.css" />
	<script src="jquery.js"></script>
	<script src="jquery_mobile.js"></script>
	<script src="main.js"></script>
    <script>
    //<![CDATA[

    // For jQuery. jQuery Mobile uses a different method
    $(document).ready(document_ready_jquery);

    // Function for each load of the input items page
    $('#input_items').live('pageinit', input_items_init);
    $('#list_items').live('pageinit', list_items_init);

    //]]>
    </script>
</head> 

<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="start">

	<div data-role="header">
		<h1>Start</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Sort service</h2>
		
		<p>Welcome to the sorting service</p>	
		
		<p><a href="#get_num_items" data-role="button">Number of Items</a></p>	
		<p><a href="#start" data-role="button">Menu</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h1>(C) 2012 Nobody</h1>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- Start of first page: #one -->
<div data-role="page" id="get_num_items">
	<div data-role="header">
		<h1>Number of Items</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Sort service - Number of items</h2>
		
		<p>How many items?</p>	
		
        <form id="get_num_items_form" action="main.php#input_items" method="get" data-ajax="false">
			<div data-role="fieldcontain">
	         <label for="name">Numer of items:</label>
	         <input type="text" name="num_items" id="num_items" value="" />
			</div>

		    <div class="ui-body ui-body-b">
		    <fieldset class="ui-grid-a">
				    
				    <div class="ui-block-b"><button type="submit" data-theme="a">Submit</button></div>
	        </fieldset>
		    </div>
        </form>

		<p><a href="#input_items" data-role="button">Input Items</a></p>	
		<p><a href="#start" data-role="button">Menu</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h1>(C) 2012 Nobody</h1>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- Start of first page: #one -->
<div data-role="page" id="input_items">
	<div data-role="header">
		<h1>Input Items</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Sort service - Input items</h2>

       	
		<p>Enter items below</p>

        <p>Total number of items is <?= $_REQUEST["num_items"] ?></p>
		
      <form id="input_items_form" data-ajax="false">

      	
			<div data-role="fieldcontain">
	         			<input type="hidden" name="number_of_items" value="<?php echo $_REQUEST['num_items']; ?>" />
			</div>

			<div data-role="fieldcontain" class="input_items_collection">
			</div>

			


			<div id="sorted_list" data-role="fieldcontain">

			</div>

		    <div class="ui-body ui-body-b">
		    <fieldset class="ui-grid-a">
				    <div class="ui-block-b"><button type="submit" id="sort_btn" data-theme="a">Sort</button></div>

	        </fieldset>
		    </div>
	
      </form>

		<!--<p><a href="#list_items" data-role="button">List Items</a></p>	-->
		<p><a href="#start" data-role="button">Menu</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h1>(C) 2012 Nobody</h1>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- Start of first page: #one -->
<div data-role="page" id="list_items">
	<div data-role="header">
		<h1>Input Items</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Sort service - Item list</h2>
		


		<p>Items are shown below</p>	

		<p>Input item1: <?php print_r($_REQUEST); ?> </p>

        <form action="main.php#list_items" method="post">
			<div data-role="fieldcontain">
	         <p><label for="xval1">Value 1:</label><input type="text" name="xval1" id="xval1" value="0" /></p>
	         <p><label for="xval2">Value 2:</label><input type="text" name="xval2" id="xval2" value="0" /></p>
             <p><button type="submit" id="test_op">Test Op</button></p>
             <div data-role="fieldcontain" id="list_items_op_result"></div>
			</div>
            <div data-role="fieldcontain" class="list_items_collection"></div>



		    <div class="ui-body ui-body-b">
		    <fieldset class="ui-grid-a">
				    <div class="ui-block-a"><button type="submit" data-theme="d">Cancel</button></div>
				    <div class="ui-block-b"><button type="submit" data-theme="a">Submit</button></div>
	        </fieldset>
		    </div>
        </form>


		
		<p><a href="#start" data-role="button">Menu</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h1>(C) 2012 Nobody</h1>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>Sorter Service - Start</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>One</h2>
		
		<p>I have an <code>id</code> of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>	
		
		<p>This is a multi-page boilerplate template that you can copy to build your first jQuery Mobile page. This template contains multiple "page" containers inside, unlike a <a href="page-template.html"> single page template</a> that has just one page within it.</p>	
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>
		<p>You link to internal pages by referring to the <code>id</code> of the page you want to show. For example, to <a href="#two" >link</a> to the page with an <code>id</code> of "two", my link would have a <code>href="#two"</code> in the code.</p>	

		<h3>Show internal pages:</h3>
		<p><a href="#two" data-role="button">Show page "two"</a></p>	
		<p><a href="#popup" data-role="button" data-rel="dialog" data-transition="pop">Show page "popup" (as a dialog)</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- Start of second page: #two -->
<div data-role="page" id="two" data-theme="a">

	<div data-role="header">
		<h1>Sorter Service - Second Entry</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Two</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to page "one"</a></p>	
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- Start of third page: #popup -->
<div data-role="page" id="popup">

	<div data-role="header" data-theme="e">
		<h1>Dialog</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>Popup</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>		
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back to page "one"</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

</body>
</html>
