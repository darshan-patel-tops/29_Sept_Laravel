<?php include_once("header.php"); 



if (isset($_REQUEST['saveprod1'])) {
    $_SESSION['cartdata']['prod1']=array("prodtitle"=>$_REQUEST['pord1'],"prodprice"=>$_REQUEST['pord1price'],"prodqunatity"=>$_REQUEST['pord1qunatity']);
}

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="images/apple-iphone-13.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    <form method="post">
                        <input type="hidden"value="iphone13pro"  name="pord1" id="pord1">
                        <input type="hidden" value="100000" name="pord1price" id="pord1price">
                        <input type="hidden" value="10" name="pord1qunatity" id="pord1qunatity">
                        <input class="btn btn-primary" type="submit" value="add to cart" name="saveprod1" id="saveprod1">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/apple-iphone-13.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/apple-iphone-13.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/apple-iphone-13.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>