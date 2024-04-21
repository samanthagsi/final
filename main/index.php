<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cafe Graceland</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap" async defer></script>

        <!-- custom CSS file link -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/convo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <!-- header -->
        <header class="header">
            <a href="#" class="logo">
                <img src="assets/images/logo.png" class="img-logo" alt="cafe graceland logo">
            </a>

            <!-- main for smaller screen -->
            <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#home" class="text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#menu" class="text-decoration-none">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="text-decoration-none">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blogs" class="text-decoration-none">Press</a>
                        </li>
                        <li class="nav-item">
                            <a href="users/login.php" class="text-decoration-none">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="icons">
                <div class="glyphicon glyphicon-search" id="search-btn"></div>
                <div class="fa fa-shopping-cart" id="cart-btn" onclick="redirectCart()"></div>
            </div>

            <!-- cart -->
            <div class="cart">
                <h2 class="cart-title">Your order:</h2>
                <div class="cart-content">
                    
                </div>
                <div class="total">
                    <div class="total-title">Total: </div>
                    <div class="total-price">₱0</div>
                </div>
                <!-- buy -->
                <button type="button" class="btn-buy">Checkout</button>
            </div>
        </header>

        <!-- hero -->
        <section class="home" id="home">
            <div class="content">
                <h3>✶✧⋆Welcome to Graceland!✶✧⋆</h3>
                <p>
                    <strong>We are open from 6:30 AM to 5:00 PM.</strong>
                </p>
                <a href="#menu" class="btn btn-dark text-decoration-none">Order now!</a>
            </div>
        </section>
        <!-- menu -->
        <section class="menu" id="menu">
            <h1 class="heading">Graceland <span>Menu</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/americano.jpg" alt="" class="product-img">
                                <h3 class="product-title">Americano</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/latte.jpg" alt="" class="product-img">
                                <h3 class="product-title">Latte</h3>
                                <div class="price">₱45.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/mocha.jpg" alt="" class="product-img">
                                <h3 class="product-title">Mocha</h3>
                                <div class="price">₱50.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/matcha.jpg" alt="" class="product-img">
                                <h3 class="product-title">Matcha Latte</h3>
                                <div class="price">₱50.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/coldbrew.jpg" alt="" class="product-img">
                                <h3 class="product-title">Cold Brew</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/shaken.jpg" alt="" class="product-img">
                                <h3 class="product-title">Shaken Brown Sugar Cold Brew</h3>
                                <div class="price">₱55.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/chai.jpg" alt="" class="product-img">
                                <h3 class="product-title">Chai Latte</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/choco.jpg" alt="" class="product-img">
                                <h3 class="product-title">Hot Chocolate</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/icedtea.jpg" alt="" class="product-img">
                                <h3 class="product-title">Iced Black Tea</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/tea.jpg" alt="" class="product-img">
                                <h3 class="product-title">Chamomile Tea</h3>
                                <div class="price">₱30.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/tea.jpg" alt="" class="product-img">
                                <h3 class="product-title">Earl Grey Tea</h3>
                                <div class="price">₱30.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/milk.jpg" alt="" class="product-img">
                                <h3 class="product-title">Chocolate Milk</h3>
                                <div class="price">₱30.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <center>
                        <button id="showHideBtn" class="btn btn-dark">More</button>
                    </center> 
                </div>
            </div>
        </section>
        <!-- blog -->
        <section class="blogs" id="blogs">
            <h1 class="heading">Press</h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/art1.webp" alt="art">
                                </div>
                                <div class="content">
                                    <a href="https://www.nytimes.com/2022/08/29/dining/blank-street-coffee.html" target="_blank" class="title text-decoration-none">It's Not Just You - Cafe Graceland is Suddenly Inescapable</a>
                                    <span>by The New York Times</span>
                                    <p>Built around high-volume automated espresso systems, the rapidly expanding coffee shop has caught the attention of skeptical New Yorkers.</p>
                                    <center>
                                        <a href="https://www.nytimes.com/2022/08/29/dining/blank-street-coffee.html" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/art2.jpg" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://www.forbes.com/sites/cereal-entrepreneurs/2023/10/10/blank-street-coffee-is-everywhere-the-founders-have-maybe-one-regret/?sh=5522f6e339a7" target="_blank" class="title text-decoration-none">Cafe Graceland is Everywhere</a>
                                    <span>by Forbes</span>
                                    <p>Two young entrepreneurs turned a single coffee cart in Williamsburg into a V.C. funded chain on both sides of the Atlantic.</p>
                                    <center>
                                        <a href="https://www.forbes.com/sites/cereal-entrepreneurs/2023/10/10/blank-street-coffee-is-everywhere-the-founders-have-maybe-one-regret/?sh=5522f6e339a7" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/art3.jpg" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://www.fastcompany.com/90867251/blank-street-coffee-raises-20-million-from-general-catalyst-and-tiger-global" target="_blank" class="title text-decoration-none">Cafe Graceland raises $20M from General Catalyst and Tiger Global</a>
                                    <span>by Fast Company</span>
                                    <p>The fast-growing coffee chain plans to use the money to add breakfast to its micro cafés.</p>
                                    <center>
                                        <a href="https://www.fastcompany.com/90867251/blank-street-coffee-raises-20-million-from-general-catalyst-and-tiger-global" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- contact -->
        <section class="contact" id="contact">
            <h1 class="heading"><span>Contact</span> Us</h1>
            <div class="row">
                <div id="map" class="map pull-left"></div>
                <form name="contact" method="POST" action="https://formspree.io/f/xayzavgb">
                    <h3>Get in touch!</h3>
                    <div class="inputBox">
                        <span class="bi bi-send"></span>
                        <input type="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="inputBox">
                        <textarea name="message" placeholder="Your message...."></textarea>
                    </div>
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>
        </section>
        <!-- footer -->
        <section class="footer">
            <div class="footer-container">
                <div class="logo">
                    <img src="assets/images/logo.png" class="img"><br />
                    <p>hello@cafegraceland.com</p><br />
                    <p>917-618-4324</p><br />
                    <p>@cafegraceland</p><br />
                </div>
                <div class="support">
                    <h2>Support</h2>
                    <br /> 
                    <a href="#">Contact Us</a>
                    <a href="#">Customer Service</a>
                    <a href="#">Chatbot</a>
                    <a href="#">Submit a Ticket</a>
                </div>
                <div class="company">
                    <h2>Company</h2>
                    <br /> 
                    <a href="#">Our Story</a>
                    <a href="#">Careers</a>
                    <a href="#">Suppliers</a>
                </div>
                <div class="newsletters">
                    <h2>Newsletters</h2>
                    <br /> 
                    <p>Subscribe to receive our love letters!</p>
                    <div class="input-wrapper">
                        <input type="email" class="newsletter" placeholder="Your email address">
                        <i id="paper-plane-icon" class="fas fa-paper-plane"></i>
                    </div>
                </div>
                <div class="credit">
                    <hr /><br/>
                    <h2>Cafe Graceland © 2024 | All Rights Reserved.</h2>
                    <h2>Designed by <span>Samantha Grace Ignacio</span> | CISC 3300</h2>
                </div>
            </div>
        </section>

        <!-- chat bar -->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chat with us! &nbsp;
            </button>
            <div class="content">
                <div class="full-chat-block">
                    <!-- message Container -->
                    <div class="outer-container">
                        <div class="chat-container">
                            <!-- messages -->
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            </div>
                            <!-- user input box -->
                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input id="textInput" class="input-box" type="text" name="msg"
                                        placeholder="Press 'Enter' to send a message">
                                    <p></p>
                                </div>
                                <div class="chat-bar-icons">
                                    <i class="material-icons" onclick="sendButton();">&#xe163;</i>
                                </div>
                            </div>
                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS file link -->
        <script src="assets/js/responses.js"></script>
        <script src="assets/js/convo.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            // code for formspree
            window.onbeforeunload = () => {
                for(const form of document.getElementsByTagName('form')) {
                    form.reset();
                }
            }
            // code for google maps api
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 40.856496574, lng: -73.883996464},
                    zoom: 9
                });

                var marker = new google.maps.Marker({
                    position: {lat: 40.856496574, lng: -73.883996464},
                    map: map,
                    title: 'Your Location'
                });
            }
            // show more show less menu
            $(document).ready(function() {
                $(".row-to-hide").hide();
                $("#showHideBtn").text("SHOW MORE");
                $("#showHideBtn").click(function() {
                    $(".row-to-hide").toggle();
                    if ($(".row-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });
            // redirect cart
            function redirectCart() {
                // check if the user is logged in
                if(!"<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : '' ?>") {
                    // redirect the user to the login page
                    alert("You are not logged in. Please log into your account and try again.");
                    window.location.href = "users/login.php";
                }
            }
        </script> 
    </body>
</html>