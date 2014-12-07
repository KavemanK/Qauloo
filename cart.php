<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Qauloo Cart - Kellen Huber</title>



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
            			<li><a href="catalog.php">Catalog</a></li>
                		<li><a href="cart.php" class="landing">My Cart</a></li>
                		<li><a href="#">Careers</a></li>
                		<li><a href="#">Locations</a></li>
             		</ul>
            </div>
            
           <div class="catalog"><p>Cart</p></div> 
           
           <div class="cart_profile">
            	<div class="item">
                
                 <img class="cart_image" src="img/roaster.png" alt="roaster" width="50" height="70"/>
                 
                <div class="item_name"><p>Roaster Frying pan</p></div>
                
                <div class="item_price"><p>Price:$24.99</p></div>
                
                <div class="item_price"><p>This is a great frying pan. 18 Gauge Steel.</p></div>
                 
                <div class="box"><p>Quantity:</p></div>
                
                <form class="box_quantity" action="#"><input type="button" class="change" name="change" value="Change Quantity" /></form>
                        
                        <form class="box" action="#">
                        	<input type="text" class="number" name="number" value="1" />
                         </form>
                         
                      <div class="divider_total"></div>
                      
                                <div class="total">
                                	<p>Subtotal:$24.99</p>
                                    <p>Tax:$0.64</p>
                                	<p>Total:$25.63</p>
                                </div>

                </div>
                
            </div> 
            
            <div class="checkout_profile">
            	 
                
                <form action="action.php" class="checkout" method="post" name="addProduct" id="addProduct">
                	
                    <label class="text">Shipping Information</label>
							
                            <br />
                            
                        	<br />
                    
                    <label class="text">Address:<input name="product_name" type="text" size="45" maxlength="25"/></label>
                   		
                            <br />
                            
                        	<br />
                    
                     <label class="text">Address 2:<input name="product_name" type="text" size="45" maxlength="25"/></label>
                    		
                            <br />
                            
                        	<br />
                    
                    
                    <label class="text">State:<input name="product_name" type="text" size="10" maxlength="2"/></label>
                    		
                            <br />
                            
                        	<br />
                            
                    <label class="text">Zip Code:<input name="product_name" type="text" size="10" maxlength="5"/></label>
                        	
                            <br />
                            
                        	<br />
                    <input type="button" name="submit" class="checkout" id="shipping"/>
                	
                    <label class="text">Billing Information</label>
							
                            <br />
                            
                        	<br />
                    
                    <label class="text">Address:<input name="product_name" type="text" size="45" maxlength="25"/></label>
                   		
                            <br />
                            
                        	<br />
                    
                     <label class="text">Address 2:<input name="product_name" type="text" size="45" maxlength="25"/></label>
                    		
                            <br />
                            
                        	<br />
                    
                    
                    <label class="text">State:<input name="product_name" type="text" size="10" maxlength="2"/></label>
                    		
                            <br />
                            
                        	<br />
                            
                    <label class="text">Zip Code:<input name="product_name" type="text" size="10" maxlength="5"/></label>
                        	
                            <br />
                            
                        	<br />
                            
                    <label class="text">Billing same as Shipping?</label>
                    <input type="radio" name="bill" value="bill"/> Yes
                    		
                            <br/>
                            
                            <br/>
                            
                    <label class="text">Payment Method:</label>
                    <input type="radio" name="credit" value="credit"/> Credit Card
                    <input type="radio" name="paypal" value="paypal"/><img src="https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif" align="middle" style="margin-right:7px;" alt="paypal"/><span style="font-size:11px; font-family: Arial, Verdana;">The safer, easier way to pay.</span>
                    		
                            <br/>
                            
                            
                    <input  class="center" name="checkout" type="submit" value="Purchase"/>
                    
                    
                    
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