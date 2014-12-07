<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Qauloo Home - Kellen Huber</title>


<style type="text/css">@import url("css/styles.css");</style>
</head>

<body>

<!--beginning container-->

<div class="container">
<!--beginning header-->
	<div id="header">
    	<div id="header_content">
       		<div id="logo"><img class="logo" src="img/qualoo_logo.jpg" alt="logo"/></div>
         </div>
         
         <div id="navigation">
                <ul class="nav">
            		<li><a href="home.php" class="landing">Home</a></li>
                	<li><a href="#">About Us</a></li>
                	<li class="services"><a href="#">Products &amp; Services</a></li>
                	<li><a href="#">Contact</a></li>
             	</ul>
             </div>
    </div>
<!--ending header-->
<!--beginning content-->

		<div class="content">

           <div class="button">
           		<ul class="register">
             
            		<li><a href="#">Become a Customer</a></li>
                
             	</ul>
            
            	<ul class="login">
             
            		<li><a href="client.php">My Account</a></li>
                
             	</ul>
                
              </div>
              
                 
              <div class="searchbar_container">
            
            	<form action="#" class="right">
                
                	<input type="text" class="searchbar" name="Search"/>
                	<input type="submit" name="Search" value="Search" />
                    
                </form>
                
              </div> 
                            <div class="clear"></div>        
            
			 
			<div id="sidebar">
            	<div class="sub_title"><p>Welcome</p></div>
            		<ul class="side">
            			<li><a href="catalog.php" class="landing">Catalog</a></li>
                		<li><a href="cart.php">My Cart</a></li>
                		<li><a href="#">Careers</a></li>
                		<li><a href="#">Locations</a></li>
             		</ul>
            </div>
            
            
            <div class="catalog"><p>Featured Product</p></div>
            	<div class="product">
            	  <?php
				  
						$link = mysql_connect("sulley.cah.ucf.edu","ke648704","knights123!");
						mysql_select_db("ke648704",$link);
			
						$result = mysql_query("SELECT * FROM products WHERE ProductID = 10");

						while($row = mysql_fetch_array($result))
						  {
 							 echo '<div> 
  										<div class="feature_image"><a href="catalog.php"><img class="product_feature" src= "' .$row['Product_Image']. '" alt= "plate" width="250px" height="250px"/></a>
										</div>
 				
										<div class="feature">' . $row['Product_Name'] . '</div>
									</div> 
		
										<div class="clear"></div>';
  }
?>
     <div><p class="left">The featured product we have today are some strawberry white dinner plates, these plates are microwave proof, dishwasher safe. We are selling a set of tweleve plates for only $24.99</p></div>

            	</div>
           <div class="sub_product">    
           		<ul class="sub_product_ul">
            		<li><a href="catalog.php" >
                
                		<img class="sub_image" src="img/plates.png" alt="dinnerplates" width="293" height="277"/>
                        
                	</a></li>
            	
            	</ul>
            </div>
            
            	<div class="sub_product">
                	<ul class="sub_product_ul">
            			<li><a href="catalog.php" >
                
                		<img class="sub_image" src="img/pan_home.png" alt="pans" width="293" height="277"/>
                        
                	</a></li>
            	
            		</ul>
            </div>
            
              
            <div class="sub_product">
                <ul class="sub_product_ul">
            		<li><a href="catalog.php" >
                
                		<img class="sub_image" src="img/knives_home.png" alt="knives_home" width="293" height="277"/>
                        
                	</a></li>
            	
            	</ul>
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