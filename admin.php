<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Qauloo Admin - Kellen Huber</title>



<style type="text/css">@import url("css/styles.css");</style>
</head>

<body>
<?php
?>
<!--beginning container-->

<div class="container">
<!--beginning header-->
	<div id="header">
    	<div id="header_content">
       		<div id="logo"><img class="logo" src="img/qualoo_logo.jpg" alt="logo" /></div>
         </div>
         <div id="navigation">
                <ul class="nav">
            		<li><a href="home.php">Home</a></li>
                	<li><a href="#">About Us</a></li>
                	<li class="services"><a href="#">Products &amp; Services</a></li>
                	<li><a href="#">Contact</a></li>
             	</ul>
             </div>
    </div>
<!--ending header-->
<!--beginning content-->

		<div class="content">
            
			 
			<div id="sidebar">
            	<div class="sub_title"><p>Welcome</p></div>
            		<ul class="side">
            			<li><a href="catalog.php">Catalog</a></li>
                		<li><a href="cart.php">My Cart</a></li>
                		<li><a href="#">Careers</a></li>
                		<li><a href="#">Locations</a></li>
             		</ul>
            </div>
                        <div class="catalog"><p>Admin</p></div>
            	<div class="client_profile">
            	  
                  
           		<div class="admin_navigation">
                	<ul class="admin_nav">
            			<li><a href="#">Add a Product</a></li>
                		<li><a href="#">Edit a Product</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Orders</a></li>
             		</ul>
          		</div>  
                
                <form action="action.php" class="admin" method="post" name="addProduct" id="addProduct">
                
					<label class="text">Product Name:<input name="product_name" type="text" size="45" maxlength="30"/></label>
                    
						<br />
                        
                        <br />
                        
                    <label class="text">Description:<input name="description" type="text" size="45" maxlength="30"/></label>
                    
  						<br />
                        
                        <br />
                        
                     <label class="text">Catagory:
                     
                     	<select>
                        
                        	<option value="furinture">Furinture</option>
                            
  							<option value="kitchen">Kitchen Supplies</option>
                            
                        </select>
                        
                       </label>
                       
  							<br />
                        
                        	<br />
                        <label class="text">SKU:<input name="sku" type="text" size="15" maxlength="10"/></label>
                        
                        	<br />
                        
                        
                        	<br />
  						<label class="text">Stock:<input name="stock" type="text" size="15" maxlength="10"/></label>
                        
                        	<br />
                        
                        
                        	<br />
                            
                         <label class="text">Cost:<input name="cost" type="text" size="15" maxlength="10"/></label>
                        
                        	<br />
                        
                        
                        	<br />
                            
                         <label class="text">Price:<input name="price" type="text" size="15" maxlength="10"/></label>
   
                        	<br />
                        
                        
                        	<br />
                            
                          <label class="text">Upload File Image:<input name="upload" type="button" value="Upload"/></label>
                        
                        	<br />
                        
                        
                        	<br />
                            
                    <input  class="center" name="submit" type="submit" value="Add to Catalog"/>
                    
				</form>
               </div>

		</div>
<!--ending content-->
<!--beginning footer-->

	<div id="footer">
    	<div class="divider"></div>
        
        <div id="static_nav">
        	<a href="home.php">Home</a>
            |
            <a href="#p">About Us</a>
            |
            <a href="#">Products and Services</a>
            |
            <a href="#">Contact</a>
            |
         </div>
         
    		<p class="discalimer_left">This site is not official and is an assignment for a UCF Digital Media course</p>
            
            <p class="discalimer_right">Designed by Kellen Huber</p>
    
    </div>
<!--ending footer-->
 
</div>
<!--ending container-->

</body>
</html>