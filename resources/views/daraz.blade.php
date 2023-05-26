<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping in Nepal | Best Deals, Prices & Discounts - Daraz.com.np</title>
    <link rel="shortcut icon" href="{{ url('images/darazsmalllogo.jpeg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="upperbox">
            <div class="uppernavbg">
                <div class="uppernavpadding">
                    <div class="uppernav">
                        <a href=""><button id="active" class="uppernavbutton">SAVE MORE ON APP</button></a>
                        <a href=""><button class="uppernavbutton">RECHARGE &amp; PAYMENT</button></a>
                        <a href=""><button class="uppernavbutton">SELL ON DARAZ</button></a>
                        <a href=""><button class="uppernavbutton">CUSTOMER CARE</button></a>
                        <a href=""><button class="uppernavbutton">TRACK MY ORDER</button></a>
                        <a href=""><button class="uppernavbutton">LOGIN</button></a>
                        <a href=""><button class="uppernavbutton">SIGNUP</button></a>
                        <a href=""><button class="uppernavbutton">CHANGE LANGUAGE</button></a>
                    </div>
                </div>
            </div>

            <div class="logobg">
                <div class="logopadding">
                    <div class="logo">
                        <a href="{{ url('/')}}"><img height="50px" width="100px" src="{{ url('images/darazlogo.png')}}" alt=""></a>
                    </div>
                    <div class="searchpadding">
                        <div class="search">
                            <input class="searcharea" type="search" name="search" placeholder="Search in Daraz">
                        </div>
                        <div class="searchbutton">
                            <button class="mainsearchbutton"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <div class="cartpadding">
                            <div class="cart">
                                <button class="cartbutton"><img height="40px" src="{{('images/cart.jpg')}}" alt=""></button>
                            </div>
                        </div>
                        <div class="offerpadding">
                            <marquee behavior="scroll" direction="left" scrollamount="15" width="150px">
                                <img height="35px" width="180px" src="{{ url('images/marquee.png')}}" alt="">
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="catagoriespadding">
                    <div class="catagoriesbackground">
                        <div class="catagoriesarea">
                            <div class="catagories">
                                <label><button id="Firstcatagorybutton" class="catagoriesbutton">Women's
                                        Fashion</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Heath &amp; Beauty</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Men's Fashion</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Men's Fashion</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Watches,Bags,Jewellery</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Electronic Devices</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton"> TV &amp; Home Appliances</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Electronic Accessories</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton"> TV &amp; Home Appliances</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Groceries &amp; Pets</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Babies &amp; Toys</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Home &amp; Lifestyle</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Sports &amp; Outdoor</button></label>
                            </div>
                            <div class="catagories">
                                <label><button class="catagoriesbutton">Motors,Tools &amp; DIY</button></label>
                            </div>
                        </div>

                        <div class="sliderpadding">
                            <div class="sliderimg">
                                <img height="350px" width="650px" src="{{ url('images/daraz-slider.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offerpadding">
                <div class="offer">
                    <img class="offerimg" height="130px" width="860px" src="{{ url('images/offer.png')}}" alt="offerimg">
                </div>
            </div>

            <div class="minicatagories">
                <div class="minicatagoriesbuttonpadding">
                    <label><button class="minicatagoriesbutton"><span><i class="fa-solid fa-store"></i></span>
                            Mart</button></label>
                    <label><button class="minicatagoriesbutton"><span><i class="fa-solid fa-child-dress"></i></span>
                            Beauty</button></label>
                    <label><button class="minicatagoriesbutton"><span><i class="fa-solid fa-house"></i></span> Home
                            &amp; Living</button></label>
                    <label><button class="minicatagoriesbutton"><span><i class="fa-solid fa-bolt"></i></span> Proudly
                            Nepal</button></label>
                    <label><button class="minicatagoriesbutton"><span><i class="fa-solid fa-mars"></i></span> Men's
                            Fashion</button></label>
                </div>
            </div>
        </div>

        <div class="onsalenowpadding">
            <div class="onsalenowbox">
                <div class="onsalenowtitle">
                    <div class="onsalenowspan">
                        <span class="onsalenow">On Sale Now</span>
                        <span class="onsalenowending">Ending in</span>
                        <div class="saletimer">
                            <span id="saletimepadding" class="saletime">03</span>
                            <span class="saletime">45</span>
                            <span class="saletime">25</span>
                        </div>
                        <div class="flashtimetitle">
                            <h2 class="flashtimeheading"><b>Flash Time</b></h2>
                        </div>
                        <div class="shopmorepadding">
                            <div class="shopmore">
                                <button class="shopmorebutton">Shop More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="productspadding">
            <div class="products">
                <div class="productitempadding">
                    <div class="productsitem">
                        <img height="155px" src="{{ url('images/products/i7.jpg')}}" alt="">
                        <br>
                        <span class="producttitle">i7 Pro Max Smart Watch Hi
                            WatchPro 7 For Men & Women
                        </span>
                        <br><br>
                        <span class="price">Rs.1000</span>
                        <br>
                        <span class="cutprice">Rs 2,499</span> <span class="discountinpercent">-52%</span>
                    </div>

                    <div class="newproduct">
                        <div class="productsitem">
                            <img height="155px" src="{{ url('images/products/k8-smart-watch.jpg')}}" alt="">
                            <br>
                            <span class="producttitle">K8 Smart Watch For IOS And Android
                            </span>
                            <br><br>
                            <span class="price">Rs.5,699</span>
                            <br>
                            <span class="cutprice">Rs 5,999</span> <span class="discountinpercent">-RS.500 OFF</span>
                        </div>
                    </div>
                    
                    <div class="newproduct">
                        <div class="productsitem">
                            <img height="155px" src="{{ url('images/products/u78-plus-smartwatch.jpeg')}}" alt="">
                            <br>
                            <span class="producttitle">U78 PLUS SMART WATCH
                            </span>
                            <br><br>
                            <span class="price">Rs.3,499</span>
                            <br>
                            <span class="cutprice">Rs 3,999</span> <span class="discountinpercent">-52%</span>
                        </div>
                    </div>
            
                    <div class="newproduct">
                        <div class="productsitem">
                            <img height="155px" src="{{ url('images/products/apple-watch.jpg')}}" alt="">
                            <br>
                            <span class="producttitle">Apple Watch SE 44mm
                            </span>
                            <br><br>
                            <span class="price">Rs.62,000</span>
                            <br>
                            <span class="cutprice">Rs 65,000</span> <span class="discountinpercent">-Rs.300</span>
                        </div>
                    </div>
                </div>


                <div class="productitempadding">
                    <div class="productsitem">
                        <img height="155px" src="{{ url('images/products/iphone11promax.jpg')}}" alt="">
                        <br>
                        <span class="producttitle">Iphone 11pro Max 128GB
                        </span>
                        <br><br>
                        <span class="price">Rs.157,600</span>
                        <br>
                        <span class="cutprice">Rs 160,000</span> <span class="discountinpercent">-1.5% OFF</span>
                    </div>
                    
                    <div class="newproduct">
                        <div class="productsitem">
                            <img height="155px" src="{{ url('images/products/iphone12promax.png')}}" alt="">
                            <br>
                            <span class="producttitle">iPhone 12 Pro Max 128 GB
                            </span>
                            <br><br>
                            <span class="price">Rs.RS. 179900</span>
                            <br>
                            <span class="cutprice">Rs 185990</span> <span class="discountinpercent">-3.27% OFF</span> 
                        </div>
                    </div>

                    <div class="newproduct">
                        <div class="productsitem">
                            <img height="155px" src="{{ url('images/products/iphone-13-pro-max-blue.png')}}" alt="">
                            <br>
                            <span class="producttitle">iPhone 13 Pro Max 512GB
                            </span>
                            <br><br>
                            <span class="price">Rs.239,755</span>
                            <br>
                            <span class="cutprice">Rs 244,650</span> <span class="discountinpercent">-2.3% OFF</span>
                        </div>
                    </div>

                    <div class="newproduct">
                        <div class="productsitem">
                            <img height="155px" src="{{('images/products/iphone14promax.jpeg')}}" alt="">
                            <br>
                            <span class="producttitle">Iphone 14pro Max 5G 128GB
                            </span>
                            <br><br>
                            <span class="price">Rs.196,000 </span>
                            <br>
                            <span class="cutprice">Rs 200,000</span> <span class="discountinpercent">-2% OFF</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>