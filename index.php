<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Md. Nadim Hossain</div>
                <div class="text-3">And I'm a <span> Front-End Developer</span></div>

            </div>
        </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="image/IMG_9099 copy.jpg---.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Md. Nadim Hossain</div>
                    <p> And i am Front-End-Developer. I am a students of computer science and engineering at City University, Bangladesh. I live in Dhaka,Bangladesh. When you visist my website, 
                        you know about my work,about my front-end-design. I love drink tea very much. I like to travel a lot.</p>

                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p> I am a Front-End Designer. I warking in this site last 2 years. 
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Apps Design</div>
                        <p> I am a Apps Designer. I warking in this site last 1 years. 
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Develop Website</div>
                        <p>I am a Web Designer. I warking in this site last 1 years. 
                        </p>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>
    <hr>
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>Hello Everyone, I am a Front-End-Developer. I am exprienced for this. I am working with developing last 3 yasrs. Last month i submit some project
                        in a company, and they accept my project. You can visit my all work for better known about my work.</p>
                    
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>40%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>30%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>20%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>


    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>
                        If you like my work and want to work with me, Please contact with me at the email below.
                    </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Md. Nadim Hossain</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Dhaka, Bangladesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">nadimhossaincse48@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span> Copyright <span class="far fa-copyright"></span> Md. Nadim Hossain </span>
    </footer>
    <script src="script.js"></script>

</body>

</html>