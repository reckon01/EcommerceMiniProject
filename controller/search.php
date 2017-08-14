<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt";
?>
    <article>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail"><img src="../images/search products/hp.jpg" alt="bags"  height="200">
            <div class="caption" height="350px"> 
            <h3 align="center">HP Laptop</h3>
            <p align="center"><del>Rs. 32000</del> Rs. 23500</p>
            <p align="center">
            <?php 
			if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
            <a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=7&pname=hp+laptop++++++++++++++++&manu=Hp+pvt+Ltd&price=23500&catid=1&subcatid=2&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
     <?php
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
                </p>
</div>
  </div>
   </div>
        
        
        <div class="col-md-4">
          <div class="thumbnail"><img src="../images/search products/redmi2_006.jpg" alt="air conditionar" height="200">
            <div class="caption" height="350px"> 
            <h3 align="center">Redmi 2 Prime</h3>
            <p align="center"><del>Rs. 9500</del> Rs. 6999</p>
             <p align="center">
			 <?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			 <a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=8&pname=redmi+2+prime++++++++++++&manu=redmi+india&price=6999&catid=1&subcatid=1&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p>
			 <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
      </p>
            </div>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="../images/search products/sari.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">Banaras Sari</h3>
             <p align="center"><del>Rs. 4500</del> Rs. 2150</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=9&pname=banaras+sari+++++++++++++&manu=silkcart+india&price=2150&catid=3&subcatid=1&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="../images/search products/book.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">I too had a Love Story novel</h3>
             <p align="center"><del>Rs.180</del> Rs. 76</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=10&pname=i+too+had+luv+story+novel&manu=penguin+india&price=76&catid=4&subcatid=2&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="../images/search products/j&j.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">johnson's Baby Oil</h3>
             <p align="center"><del>Rs. 480</del> Rs. 350</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=11&pname=johnson's+baby+oil+++++++manu=johnsons&johnsons&price=350&catid=5&subcatid=2&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="../images/search products/jersey.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">Real Madrid Jersy</h3>
             <p align="center"><del>Rs. 1050</del> Rs. 540</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=12&pname=real+madrid+jersey++++++manu=silkcart+india&price=540&catid=6&subcatid=2&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
                <div class="col-md-4">
          <div class="thumbnail"><img src="../images/search products/purpose_album.jpg" alt="bags"  height="200">
            <div class="caption" height="350px"> 
            <h3 align="center">Purpose Album Blu ray Disk</h3>
            <p align="center"><del>Rs. 720</del> Rs. 480</p>
            <p align="center">
            <?php 
			if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
            <a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=13&pname=purpose+album+bluray+disk&manu=i-tunes+india&price=480&catid=8&subcatid=1&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
     <?php
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
                </p>
</div>
  </div>
   </div>
   
           <div class="col-md-4">
          <div class="thumbnail"><img src="../images/search products/sunglass.jpg" alt="bags"  height="200">
            <div class="caption" height="350px"> 
            <h3 align="center">Sunglass</h3>
            <p align="center"><del>Rs. 1580</del> Rs. 560</p>
            <p align="center">
            <?php 
			if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
            <a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=14&pname=stanning+sunglass++++++++&manu=lenskart&price=560&catid=2&subcatid=4&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
     <?php
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
                </p>
</div>
  </div>
   </div>
   
           <div class="col-md-4">
          <div class="thumbnail"><img src="../images/search products/jeans.jpg" alt="bags"  height="200">
            <div class="caption" height="350px"> 
            <h3 align="center">Men's jeans</h3>
            <p align="center"><del>Rs. 2500</del> Rs. 1620</p>
            <p align="center">
            <?php 
			if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
            <a href="http://localhost/OnlineStore/view/add_to_cart.php?pid=15&pname=men's+stylish+jeans++++++&manu=crocodile+pvt.+ltd&price=1620&catid=2&subcatid=1&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
     <?php
			}else{
				?>
                <a href="http://localhost/OnlineStore/menu/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
                </p>
</div>
  </div>
   </div>
        
        
      </div>
	    </article>
















<?php
include_once "../menu/foot.txt";
?>