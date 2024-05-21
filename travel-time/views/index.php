<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Projet</title>
    <link rel="stylesheet" href="temp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="pagephp+css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="vanilla-zoom.min.css">
    <script src="https://kit.fontawesome.com/186800f6ec.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- start header -->
    <header>
        <div class="container" id="cont">
            <a href="#" class="logo">
                <img src="../img/travel.jpg" alt="">
            </a>
            <nav>
                <i class="fa-solid fa-bars azm"></i>
                <ul>
                    <li><a class="active" href="#cont">Home</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#porfoli">Portfolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contac">Contact</a></li>
                    <li><a href="login.php">Sign In</a></li>
                    <li><a href="registration.php">Sign up</a></li>
            </ul>
            </nav>
        </div>
    </header>
    <!-- end header -->

            <!-- start landing -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="landing">
            
            
            <div class="overlay"></div>
            <div class="text carousel-item">
                <div class="content">
                    <h2>Hello Tunisia <br>we are here</h2>
                    <p>There’s so much to see and do in each region of Tunisia:
                         a wide variety of landscapes, a coastline spanning 1,250km, studded with islands and archipelagos,
                          a fantastic array of traditions and customs and a rich historical heritage.
                         We are delighted to introduce you to these regions by breaking them down into three areas: the north, the centre and the south</p>
                </div>


            <!-- bullets -->
            <div class="carousel-indicators">
                <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class=""
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
                class=""
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
                class="active"
                aria-current="true"
              ></button>
            </div>
        </div>
    </div>
        <div class="component" id="service">
            <div class="holding">
                <h2>Services</h2>
                <p>Welcome To Our Company Those Are Our Services <br>enjoy
                </p>
            </div>
        </div>
        <div class="services">
            <div class="container">
                <div class="box">
                    <i class="fa-solid fa-display"></i>
                    <div class="text">
                        <h3>Transport</h3>
                        <p>ExploreTunisia.com offers comprehensive transportation solutions to ensure seamless travel throughout your Tunisian adventure.
                             From airport transfers to intercity buses and private car rentals, we've got you covered.
                             Our reliable and comfortable transportation options make it easy to navigate Tunisia's diverse landscapes and reach your desired destinations with ease..</p>
                    </div>
                </div>
                <div class="box">
                    <i class="fa-solid fa-camera"></i>
                    <div class="text">
                        <h3>guide</h3>
                        <p>Enhance your Tunisian experience with our expert guides who are passionate about sharing the rich history,
                             culture, and natural wonders of their homeland. Whether you're exploring ancient ruins,
                              wandering through bustling markets, or embarking on outdoor adventures, our knowledgeable guides 
                              provide invaluable insights and personalized recommendations to make your journey unforgettable..</p>
                    </div>
                </div>
                <div class="box" id="activeone">
                    <i class="fa-solid fa-gear"></i>
                    <div class="text">
                        <h3>Health and Safety</h3>
                        <p>Your well-being is our top priority at ExploreTunisia.com. 
                            We provide essential health and safety information to ensure a worry-free travel experience. 
                            From tips on staying hydrated in the desert to recommendations for local healthcare providers, 
                            we're committed to keeping you informed and prepared for any situation that may arise during your stay in Tunisia.</p>
                    </div>
                </div>
                <div class="box" id="active">
                    <i class="fa-solid fa-pencil"></i>
                    <div class="text">
                        <h3>Visa and Documentation</h3>
                        <p>Planning your trip to Tunisia is hassle-free with our visa and documentation assistance. 
                            Our team provides guidance on visa requirements, application procedures, and necessary documentation, 
                            helping you navigate the process smoothly and efficiently. With our expert support,
                             you can focus on anticipating the adventures that await you in Tunisia.</p>
                    </div>
                </div>
                
            </div>
        </div>


            <!-- porfolio -->
            <div class="porfolio" id="porfoli">
                <div class="container">
                    <div class="component">
                        <div class="holding">
                            <h2>Portfolio</h2>
                            <p>Welcome To Our Company Those Are Our Services <br>enjoy
                            </p>
                        </div>
                    </div>
                    <ul class="shuffle">
                    <li class="active">All</li>
                    <li>App</li>
                    <li>Photos</li>
                    <li>Web</li>
                    <li>Print</li>
                    </ul>
                </div>
                <div class="iamges-container">
                    <div class="box" id="a">
                        <img src="../img/srdjan-popovic-AUViwMbS-6Y-unsplash.jpg" alt="">
                        <div class="text">
                            <h4>KAIROUAN</h4>
                            <p>Discover Kairouan's ancient charm, 
                                UNESCO World Heritage site,
                                 and Islamic heritage. Explore its medina,
                                  the majestic Great Mosque, Aghlabid Basins,
                                   and the exquisite mausoleum of Sidi Saheb, 
                                   all while witnessing the artistry of Tunisia's renowned carpet workshops.
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../img/A2.jpg" alt="">
                        <div class="text">
                            <h4>TUNIS</h4>
                            <p>Explore the dynamic city of Tunis,
                                 blending modernity with rich history. 
                                 Wander through the UNESCO-listed medina,
                                  where ancient buildings house museums, restaurants, and tea rooms.
                                 Discover picturesque neighborhoods with 1900s facades,
                                  alongside chic restaurants and entertainment hubs in the modern quarters.</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../img/taha-loukil-JwAoI3MBGh8-unsplash.jpg" alt="">
                        <div class="text">
                            <h4>DJERBA</h4>
                            <p>Djerba, an island of dual Mediterranean and Saharan charm,
                                 captivates visitors with its timeless allure. From Homer's "lotus" to modern-day holiday clubs,
                                  its exceptional atmosphere is shared with neighboring Zarzis.
                                 Explore unique heritage, enjoy outdoor activities, and embark on Sahara excursions, 
                                 all within this spellbinding destination.</p>
                        </div>
                    </div>
                    <div class="box" id="onee">
                        <img src="../img/ferdaous-fellah-UIUUXRoEj6Q-unsplash.jpg" alt="">
                        <div class="text">
                            <h4>Sidi Bou Said</h4>
                            <p>a picturesque village near Tunis,
                                 enchants with its whitewashed buildings and cobblestone streets adorned with vibrant blue accents.
                                  Perched atop a cliff overlooking the Mediterranean Sea, it offers breathtaking views and a serene atmosphere. 
                                Famous for its artistic heritage and traditional Moorish architecture,
                                 Sidi Bou Said is a must-visit destination for those seeking beauty and tranquility.</p>
                        </div>
                    </div>
                    <div class="box" id="two">
                        <img src="../img/juan-ordonez-SIvfVmejLyY-unsplash.jpg" alt="">
                        <div class="text">
                            <h4>The Mosque of Ez-Zitouna</h4>
                            <p>
                                The Mosque of Ez-Zitouna stands as a majestic symbol of spiritual devotion in Tunisia.
                                 With its intricate architecture and serene ambiance, 
                                 this historic mosque invites visitors to immerse themselves in centuries of Islamic heritage.
                                 As one of the oldest and most revered mosques in North Africa, 
                                 Ez-Zitouna offers a profound glimpse into Tunisia's cultural and religious identity.</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../img/elena-mozhvilo-78MC1uRvgS4-unsplash.jpg" alt="">
                        <div class="text">
                            <h4>TATAOUINE</h4>
                            <p>
                                Tataouine and Medenine reveal the desert's rugged beauty: 
                                vast rocky plains lead to majestic mountains and desert plateaus.
                                 Witness astonishing Ksour architecture, ancient fortified granaries,
                                 and Berber villages like Chenini and Douiret perched atop mountains. 
                                 Explore this region of extraordinary landscapes and rich historical traditions.</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="../img/seif-eddin-khayat-hemKJeufgdo-unsplash.jpg" alt="">
                        <div class="text">
                            <h4>MAHDIA</h4>
                            <p>A small city of rich tradition,
                                 where women don gold jewelry and houses display intricate embroidered hangings.
                                  Former capital of the Fatimid dynasty, its medina hugs a peninsula surrounded by azure waters,
                                   offering sumptuous beaches and a captivating blend of history and charm.
                            </p>
                        </div>
                    </div>
                    <div class="box" id="last">
                        <img src="../img/muhammad-fattouh-4WEgRPhuido-unsplash.jpg" alt="">
                        <div class="text">
                            <h4>HAMMAMET</h4>
                            <p>Hammamet: Summer's bustling resort with beaches and lively nightlife,
                                 yet retaining authentic charm. Medina's poetic allure meets modernity in Yasmine Hammamet,
                                  while nature lovers delight in nearby forests and lemon groves.</p>
                        </div>
                    </div>
                </div>
                <a href="">More</a>
            </div>
           <!-- Slider -->  
           <section class="clean-block slider dark mb-3">
            <div class="container">
                <div class="holding">
                    <h2>Slider</h2>
                    <p>Welcome To Our Company Those Are Our Services <br>enjoy
                    </p>
                </div>
            </div>
                <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="../img/image1.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="../img/image4.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="../img/image6.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
           <!-- End Slider -->  

            <!-- vedio section -->
            <div class="vedio-content">
                <video src="../vd/the dreamer.mp4" autoplay muted loop controls></video>
                <div class="text">
                    <h2>Tunisia By The Dreamer</h2>
                    <p>Here We Are Going To See Tunisia Throught The Eyes Of The best Youtuber "The Dramer" So Lets Be Thankful For His Hard Work</p>
                    <button>The Dreamer Channel</button>
                </div>
            </div>

            <!-- about section -->
            <div class="about-section" id="about">
                <div class="component">
                    <div class="holding">
                        <h2>About Us</h2>
                        <p>Welcome Here You Will Discover Who is Behind This Work
                        </p>
                    </div>
                </div>
                <div>
                    <div class="disc">
                        <div class="text">
                            <h2>The Team </h2>
                            <p> Achref Hamraoui and Arij Jaoua are the developers of this website </p>
                        </div>
                        <img src="../img/chermiti-mohamed-Fua_fPDuTws-unsplash.jpg" alt="">
                    </div>
                    
                </div>
                
            </div>

            <!-- start stat -->

            <div class="stat">
                <div class="container">
                    <div class="box">
                        <i class="fa-solid fa-hotel"></i>
                        <div class="hotels">850</div>
                        <P>Hotels</P>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-flag"></i>
                        <div class="hotels">24</div>
                        <P>states</P>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-umbrella-beach"></i>
                        <div class="hotels">56</div>
                        <P>Beach</P>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-bowl-food"></i>
                        <div class="hotels">Unlimited</div>
                        <P>Food</P>
                    </div>
                </div>
            </div>

           

                    <!-- moneysection -->
            <div class="pricing" id="price">
                <div class="component">
                    <div class="holding">
            

                <div class="contact" id="contac">
                    <p>Contact Us For More Details</p>
                    <a href="mailto: achrefhamraoui1@gmail.com">Email</a>
                </div>
            </div> 
                

            <!-- footer -->
            <footer class="page-footer dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <h5>Get started</h5>
                            <ul>
                                <li><a href="#cont">Home</a></li>
                                <li><a href="login.html">Sign up</a></li>
                                <li><a href="registration.html">Sign in</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>About us</h5>
                            <ul>
                                <li><a href="#service">Services</a></li>
                                <li><a href="#porfoli">Portfolio</a></li>
                                <li><a href="#about">About</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#contac">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <p>© 2024 arij jaoua et achref hamraoui group 2 bi</p>
                </div>
            </footer>
     


</body>
</html>