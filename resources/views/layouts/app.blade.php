<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
    <div class="page new-skin">

        <!-- preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- background -->
        <div class="background gradient">
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        <!--
			Container
		-->
        <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

            <!--
				Header
			-->
            <header class="header">

                <!-- header profile -->
                <div class="profile">
                    <div class="image">
                        <a href="#">
                            <img src="profile.jpg" alt="Ryan Adlard">
                        </a>
                    </div>
                    <div class="title">Umair Tufail</div>
                    <div class="subtitle subtitle-typed">
                        <div class="typing-title">
                            <p>Web Developer</p>
                            <p>Full Stack Developer</p>
                            <p>Amazon certified</p>

                            <p>Freelancer</p>
                        </div>
                    </div>
                </div>

                <!-- menu btn -->
                <!--<a href="#" class="menu-btn"><span></span></a>-->

                <!-- menu -->
                @include('partials.menu')
			</header>

            <!--
				Card - Started
			-->
            <div class="card-started" id="home-card">

                <!--
					Profile
				-->
                <div class="profile">

                    <!-- profile image -->
                    <div class="slide" style="background-image: url(images/bg.jpg);"></div>

                    <!-- profile photo -->
                    <div class="image">
                        <img src="profile.jpg" alt="" />
                    </div>

                    <!-- profile titles -->
                    <div class="title">Umair Tufail</div>
                    <!--<div class="subtitle">Web Designer</div>-->
                    <div class="subtitle subtitle-typed">
                        <div class="typing-title">
                            <p>Web Developer</p>
                            <p>Full Stack Developer</p>
                            <p>Amazon certified</p>

                            <p>Freelancer</p>
                        </div>
                    </div>

                    <!-- profile socials -->
                    <div class="social">
                        <!-- <a target="_blank" href="https://dribbble.com/"><span class="fa fa-dribbble"></span></a> -->
                        <a target="_blank" href="https://www.instagram.com/tufailumair1999"><span class="fa fa-instagram"></span></a>
                        <a target="_blank" href="https://github.com/mumairtufail"><span class="fa fa-github"></span></a>
                        <a target="_blank" href="https://www.linkedin.com/in/umair-laravel-dev"><span class="fa fa-linkedin"></span></a>
                        <!-- <a target="_blank" href="https://stackoverflow.com/"><span
                                class="fa fa-stack-overflow"></span></a> -->
                    </div>

                    <!-- profile buttons -->
                    <div class="lnks">
                        <a href="#" class="lnk">
                            <span class="text">Download CV</span>
                        </a>
                        <a href="#" class="lnk discover">
                            <span class="text">Contact Me</span>
                        </a>
                    </div>

                </div>

            </div>

            <!--
				Card - About
			-->
            <div class="card-inner animated active" id="about-card">
                <div class="card-wrap">

                    <!--
						About
					-->
                    <div class="content about">

                        <!-- title -->
                        <div class="title">About Me</div>

                        <!-- content -->
                        <div class="row">
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="text-box">
                                    <p>
                                        Welcome to my portfolio! I’m Umair, and I transform ambitious ideas into
                                        impactful digital products. Over the years, I’ve built and launched a variety of
                                        successful solutions—ranging from ride-sharing mobile apps and robust ecommerce
                                        platforms to enterprise management systems, scalable SaaS applications for
                                        trucking and construction firms, dynamic quiz-based learning tools, and even
                                        finance and real estate portals that streamline complex processes. Each project
                                        reflects my commitment to user-centered design, efficient architecture, and
                                        seamless performance. Let’s bring your vision to life.
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="info-list">
									<ul>
										<li><strong>Age . . . . .</strong> 24</li>
										<li><strong>Residence . . . . .</strong> USA</li>
										<li><strong>Freelance . . . . .</strong> Available</li>
										<li><strong>Address . . . . .</strong> California, USA</li>
									</ul>
								</div>
							</div> -->
                            <div class="clear"></div>
                        </div>

                    </div>

                    <!--
						Services
					-->
                    <div class="content services">
                        <!-- title -->
                        <div class="title">My Services</div>

                        <!-- content -->
                        <div class="row service-items border-line-v">
                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                <div class="service-item">
                                    <div class="icon">
                                        <span class="fa fa-code"></span>
                                    </div>
                                    <div class="name">
                                        <span>Web Development</span>
                                    </div>
                                    <div class="desc">
                                        <p>Building modern, mobile-ready, and user-focused websites to help you stand
                                            out online.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                <div class="service-item">
                                    <div class="icon">
                                        <span class="fa fa-server"></span>
                                    </div>
                                    <div class="name">
                                        <span>Backend Development</span>
                                    </div>
                                    <div class="desc">
                                        <p>Crafting scalable, secure, and high-performing backend architectures using
                                            PHP, Laravel, Python, and more.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                <div class="service-item">
                                    <div class="icon">
                                        <span class="fa fa-laptop"></span>
                                    </div>
                                    <div class="name">
                                        <span>Frontend Development</span>
                                    </div>
                                    <div class="desc">
                                        <p>Designing visually appealing, responsive UIs using HTML, CSS, Bootstrap, and
                                            JavaScript frameworks.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                <div class="service-item">
                                    <div class="icon">
                                        <span class="fa fa-comments"></span>
                                    </div>
                                    <div class="name">
                                        <span>Chatbots & AI Integration</span>
                                    </div>
                                    <div class="desc">
                                        <p>Implementing intelligent chatbots to enhance customer support, automate
                                            tasks, and improve user engagement.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- service item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                <div class="service-item">
                                    <div class="icon">
                                        <span class="fa fa-cloud"></span>
                                    </div>
                                    <div class="name">
                                        <span>AWS Deployments & Server Management</span>
                                    </div>
                                    <div class="desc">
                                        <p>Streamlining application deployment, scaling, and maintenance on AWS for
                                            reliable and optimized performance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <!--
						Price Tables
					-->
                    <!-- <div class="content pricing">

						<div class="title">Pricing</div>

						<div class="row pricing-items">

							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="fa fa-battery-half"></i></div>
									<div class="name">Basic</div>
									<div class="amount">
										<span class="dollar">$</span>
										<span class="number">22</span>
										<span class="period">hour</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>Web Development</li>
											<li>Advetising</li>
											<li>Game Development</li>
											<li class="disable">Music Writing</li>
											<li class="disable">Photography <strong>new</strong></li>
										</ul>
									</div>
									<div class="lnks">
										<a href="#" class="lnk">
											<span class="text">Buy Basic</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="fa fa-battery-full"></i></div>
									<div class="name">Pro</div>
									<div class="amount">
										<span class="dollar">$</span>
										<span class="number">48</span>
										<span class="period">hour</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>Web Development</li>
											<li>Advetising</li>
											<li>Game Development</li>
											<li>Music Writing</li>
											<li>Photography <strong>new</strong></li>
										</ul>
									</div>
									<div class="lnks">
										<a href="#" class="lnk">
											<span class="text">Buy Pro</span>
										</a>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div> -->

                    <!--
						Fun Fact
					-->


                    <!--
						Clients
					-->


                    <!-- Quote -->
                    <div class="content quote">

                        <!-- title -->
                        <div class="title">
                            <span>Quote</span>
                        </div>

                        <!-- content -->
                        <div class="row">
                            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                <div class="revs-item">
                                    <div class="text">
                                        <div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                    <div class="user">
                                        <div class="img">
                                            <img src="images/profile.png" alt="Ryan Adlard" />
                                        </div>
                                        <div class="info">
                                            <div class="name">Umair Tufail</div>
                                            <div class="company">Web Designer</div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>

                </div>
            </div>

            <!--
				Card - Resume
			-->
            <div class="card-inner" id="resume-card">
                <div class="card-wrap">

                    <!--
            Resume
        -->
                    <div class="content resume">

                        <!-- title -->
                        <div class="title">Resume</div>

                        <!-- content -->
                        <div class="row">

                            <!-- experience -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="resume-title border-line-h">
                                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                                    <div class="name">Experience</div>
                                </div>
                                <div class="resume-items">
                                    <div class="resume-item border-line-h active">
                                        <div class="date">Nov 2023 – Current</div>
                                        <div class="name">Backend Developer</div>
                                        <div class="company">Tecjaunt, Lahore, Pakistan</div>
                                        <!-- <p>
                                <strong>Construction App:</strong> Built a SaaS construction app backend using Laravel and FastAPI. Integrated OpenAI’s Whisper API for voice-to-text reporting and deployed on Amazon EC2 for reliable performance.<br>
                                <strong>LAR Flight Booking:</strong> Implemented a Laravel-based Flight Booking Management System, integrating Amadeus APIs for seamless flight bookings.<br>
                                <strong>E-Commerce:</strong> Developed a dynamic e-commerce backend with robust role/permission management for multiple stores and user types.<br>
                                <strong>Employee Management System (EMS):</strong> Created an EMS with feedback features, dynamic roles, optimized queries, and Gmail SMTP integration. Deployed on hPanel.
                            </p> -->
                                    </div>
                                    <div class="resume-item border-line-h">
                                        <div class="date">May 2023 – Sep 2023</div>
                                        <div class="name">Backend Developer</div>
                                        <div class="company">Vebtual Limited, Lahore, Pakistan</div>
                                        <!-- <p>
                                <strong>Duniya Digital:</strong> Developed a responsive blogging platform supporting a seamless reading experience across all devices.<br>
                                <strong>Blue Sky CRM:</strong> Built a Laravel-based CRM with an intuitive UI, dynamic inventory management, and streamlined client-specific purchasing for construction projects. (Live at BlueSkyTie.com)
                            </p> -->
                                    </div>
                                </div>
                            </div>

                            <!-- education -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="resume-title border-line-h">
                                    <div class="icon"><i class="fa fa-university"></i></div>
                                    <div class="name">Education</div>
                                </div>
                                <div class="resume-items">
                                    <div class="resume-item border-line-h">
                                        <div class="date">Mar 2022 – Jan 2024</div>
                                        <div class="name">ADP Computer Science</div>
                                        <div class="company">Superior University, Lahore, Pakistan</div>
                                        <p>
                                            Relevant Courses: Programming Fundamentals, Object-Oriented Programming,
                                            Data Structures & Algorithms, Web Development, Mobile App Development,
                                            Databases, Software Engineering, Freelancing.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>

                    </div>

                    <!--
            Skills
        -->
                    <div class="content skills">

                        <!-- title -->
                        <div class="title">My Skills</div>

                        <!-- content -->
                        <div class="row">

                            <!-- skill item: Backend & DevOps -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="skills-list">
                                    <div class="skill-title border-line-h">
                                        <div class="icon"><i class="fa fa-server"></i></div>
                                        <div class="name">Backend & DevOps</div>
                                    </div>
                                    <ul>
                                        <li class="border-line-h">
                                            <div class="name">Laravel / PHP</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:90%;"></div>
                                            </div>
                                        </li>
                                        <li class="border-line-h">
                                            <div class="name">FastAPI / Python</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:80%;"></div>
                                            </div>
                                        </li>
                                        <li class="border-line-h">
                                            <div class="name">MySQL / Database Design</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:85%;"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">AWS (EC2, Lightsail, Amplify)</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:75%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- skill item: Languages -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="skills-list dotted">
                                    <div class="skill-title border-line-h">
                                        <div class="icon"><i class="fa fa-flag"></i></div>
                                        <div class="name">Languages</div>
                                    </div>
                                    <ul>
                                        <li class="border-line-h">
                                            <div class="name">English</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:90%;"></div>
                                            </div>
                                        </li>
                                        <li class="border-line-h">
                                            <div class="name">Urdu</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">Punjabi</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:80%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- skill item: Coding -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="skills-list circles">
                                    <div class="skill-title border-line-h">
                                        <div class="icon"><i class="fa fa-code"></i></div>
                                        <div class="name">Additional Coding Skills</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="name">HTML / CSS</div>
                                            <div class="progress p95">
                                                <span>95%</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">JavaScript / Bootstrap</div>
                                            <div class="progress p85">
                                                <span>85%</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">Git / Version Control</div>
                                            <div class="progress p90">
                                                <span>90%</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">OpenAI / Whisper / LangChain</div>
                                            <div class="progress p70">
                                                <span>70%</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- skill item: Knowledge -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="skills-list list">
                                    <div class="skill-title border-line-h">
                                        <div class="icon"><i class="fa fa-list"></i></div>
                                        <div class="name">Knowledge</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="name">SaaS Application Development</div>
                                        </li>
                                        <li>
                                            <div class="name">Voice-to-Text Integration (Whisper API)</div>
                                        </li>
                                        <li>
                                            <div class="name">Third-Party API Integrations (Amadeus, etc.)</div>
                                        </li>
                                        <li>
                                            <div class="name">Role & Permission-Based Access Control</div>
                                        </li>
                                        <li>
                                            <div class="name">E-Commerce & CMS Solutions</div>
                                        </li>
                                        <li>
                                            <div class="name">Dynamic Inventory & Client Management</div>
                                        </li>
                                        <li>
                                            <div class="name">Responsive Web Applications</div>
                                        </li>
                                        <li>
                                            <div class="name">Optimized Database Schema Design</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>

                    </div>

                    <!--
            Testimonials
        -->
                    <div class="content testimonials">
                        <!-- title -->
                        <div class="title">Testimonials</div>

                        <!-- content -->
                        <div class="row testimonials-items">
                            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                <div class="revs-carousel default-revs">
                                    <div class="owl-carousel">
                                        <div class="item">
                                            <div class="revs-item">
                                                <div class="text">
                                                    "Umair’s backend expertise transformed our construction management
                                                    process. The voice-enabled reporting system and seamless AWS
                                                    deployment have greatly improved our workflows."
                                                </div>
                                                <div class="user">
                                                    <div class="img"><img src="images/man1.jpg" alt="" /></div>
                                                    <div class="info">
                                                        <div class="name">John Doe</div>
                                                        <div class="company">Project Manager, Construction SaaS</div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="revs-item">
                                                <div class="text">
                                                    "The e-commerce backend Umair built is incredibly flexible.
                                                    Role-based management for multiple stores has streamlined our
                                                    operations and user experience."
                                                </div>
                                                <div class="user">
                                                    <div class="img"><img src="images/man1.jpg" alt="" /></div>
                                                    <div class="info">
                                                        <div class="name">Sarah Lee</div>
                                                        <div class="company">E-Commerce Director</div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="revs-item">
                                                <div class="text">
                                                    "Duniya Digital’s seamless responsive design and performance are a
                                                    testament to Umair’s skill. Our readers love the smooth experience
                                                    on every device."
                                                </div>
                                                <div class="user">
                                                    <div class="img"><img src="images/man1.jpg" alt="" /></div>
                                                    <div class="info">
                                                        <div class="name">Mark Thompson</div>
                                                        <div class="company">Co-founder, Duniya Digital</div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>

                </div>
            </div>


            <!--
				Card - Works
			-->
            <div class="card-inner" id="works-card">
    <div class="card-wrap">

        <!-- Works -->
        <div class="content works">

            <!-- title -->
            <div class="title">Recent Works</div>

            <!-- filters -->
            <div class="filter-menu filter-button-group">
                <div class="f_btn active">
                    <label><input type="radio" name="fl_radio" value="grid-item" />All</label>
                </div>
                <div class="f_btn">
                    <label><input type="radio" name="fl_radio" value="websites" />Websites</label>
                </div>
                <div class="f_btn">
                    <label><input type="radio" name="fl_radio" value="mobile" />Mobile Apps</label>
                </div>
            </div>

            <!-- content -->
            <div class="row grid-items border-line-v">

<!-- BlueSkyTie CRM (Website) -->
<div class="col col-d-6 col-t-6 col-m-12 grid-item websites border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-blueskytie" class="has-popup-media">
                <img src="bluesky.png" alt="BlueSkyTie CRM" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-blueskytie" class="name has-popup-media">BlueSkyTie CRM</a>
            <div class="category">Website</div>
        </div>
    </div>
</div>
<div id="popup-blueskytie" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="bluesky.png" alt="BlueSkyTie CRM">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>BlueSkyTie CRM</h1>
                <div class="blog-detail">Tech Stack: Laravel, MySQL, AWS EC2</div>
                <div class="blog-content">
                    <p>
                        A customized CRM and dashboard solution for a construction company. It enables seamless management of products, orders, and labor assignments, all controlled through secure user logins. With dynamic role-based permissions, each user experiences a personalized and secure environment.
                    </p>
                    <ul class="list-style">
                        <li>Role & Permission Based Access Control</li>
                        <li>Intuitive Dashboard for Orders and Inventory</li>
                        <li>Deployed on AWS EC2, currently live</li>
                    </ul>
                    <p>Delivered on schedule and continually serving its users effectively.</p>
                </div>
                <a href="https://blueskytie.com/" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Duniya Digital (Website) -->
<div class="col col-d-6 col-t-6 col-m-12 grid-item websites border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-dunyadigital" class="has-popup-media">
                <img src="dunyadigital.png" alt="Duniya Digital" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-dunyadigital" class="name has-popup-media">Duniya Digital</a>
            <div class="category">Website</div>
        </div>
    </div>
</div>
<div id="popup-dunyadigital" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="dunyadigital.png" alt="Duniya Digital">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>Duniya Digital</h1>
                <div class="blog-detail">Tech Stack: Laravel, PHP, Responsive Design</div>
                <div class="blog-content">
                    <p>
                        A dynamic blog platform for a renowned Pakistani news channel, providing readers with the latest articles in news, entertainment, and more. Its responsive layout ensures a smooth reading experience on any device.
                    </p>
                    <ul class="list-style">
                        <li>Fully Responsive for All Devices</li>
                        <li>Seamless Content Management</li>
                        <li>Fast, Scalable, and Reliable Backend</li>
                    </ul>
                    <p>Delivered as planned and currently accessible to the public.</p>
                </div>
                <a href="https://dunyadigital.co/" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- NavyTrades (Website) -->
<!-- <div class="col col-d-6 col-t-6 col-m-12 grid-item websites border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-navytrades" class="has-popup-media">
                <img src="navytrades.png" alt="NavyTrades" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-navytrades" class="name has-popup-media">NavyTrades</a>
            <div class="category">Website</div>
        </div>
    </div>
</div>
<div id="popup-navytrades" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="navytrades.png" alt="NavyTrades">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>NavyTrades</h1>
                <div class="blog-detail">Tech Stack: PHP, MySQL, Custom CMS</div>
                <div class="blog-content">
                    <p>
                        NavyTrades is a specialized listing platform for trade professionals, offering easy navigation and quick data retrieval. Its custom CMS and optimized queries provide an efficient user experience.
                    </p>
                    <ul class="list-style">
                        <li>Custom CMS Development</li>
                        <li>Optimized Database Queries</li>
                        <li>User-Centric Interface</li>
                    </ul>
                    <p>Delivered promptly and currently live, serving its target audience effectively.</p>
                </div>
                <a href="https://navytrades.com/" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div> -->

<!-- 911 Limo App Dashboard (Website) -->
<!-- <div class="col col-d-6 col-t-6 col-m-12 grid-item websites border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-limoapp" class="has-popup-media">
                <img src="911limo.png" alt="911 Limo App Dashboard" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-limoapp" class="name has-popup-media">911 Limo App Dashboard</a>
            <div class="category">Website</div>
        </div>
    </div>
</div>
<div id="popup-limoapp" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="911limo.png" alt="911 Limo App Dashboard">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>911 Limo App Dashboard</h1>
                <div class="blog-detail">Tech Stack: Laravel, AWS Amplify</div>
                <div class="blog-content">
                    <p>
                        A backend dashboard providing real-time insights into ride bookings, fleet management, and user activities for a limo service. Its serverless architecture ensures scalability and reliability.
                    </p>
                    <ul class="list-style">
                        <li>Real-Time Data Monitoring</li>
                        <li>Scalable Serverless Architecture</li>
                        <li>Third-Party API Integrations</li>
                    </ul>
                    <p>Delivered within the set timeline and now live, enhancing operational efficiency.</p>
                </div>
                <a href="https://dashboard.911limoapp.com/login" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div> -->

<!-- Splash and Drip (Website) -->
<div class="col col-d-6 col-t-6 col-m-12 grid-item websites border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-splashdrip" class="has-popup-media">
                <img src="splashanddrip.png" alt="Splash and Drip" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-splashdrip" class="name has-popup-media">Splash and Drip</a>
            <div class="category">Website</div>
        </div>
    </div>
</div>
<div id="popup-splashdrip" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="splashanddrip.png" alt="Splash and Drip">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>Splash and Drip</h1>
                <div class="blog-detail">Tech Stack: PHP, Bootstrap</div>
                <div class="blog-content">
                    <p>
                        An e-commerce platform for car wash and detailing services. Its responsive design, secure payment integration, and straightforward navigation make booking services effortless.
                    </p>
                    <ul class="list-style">
                        <li>Responsive E-Commerce Interface</li>
                        <li>Secure Payment Integration</li>
                        <li>Simple and Intuitive Navigation</li>
                    </ul>
                    <p>Delivered on time and currently live, enhancing the customer experience.</p>
                </div>
                <a href="https://splashanddrip.co.uk/" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Hakidd (Website) -->
<div class="col col-d-6 col-t-6 col-m-12 grid-item websites border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-hakidd" class="has-popup-media">
                <img src="hakidd.png" alt="Hakidd" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-hakidd" class="name has-popup-media">Hakidd</a>
            <div class="category">Website</div>
        </div>
    </div>
</div>
<div id="popup-hakidd" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="hakidd.png" alt="Hakidd">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>Hakidd</h1>
                <div class="blog-detail">Tech Stack: Laravel, MySQL</div>
                <div class="blog-content">
                    <p>
                        An e-commerce platform offering flexible product listings, user-friendly admin controls, and customizable layouts. SEO optimizations help drive traffic and improve visibility.
                    </p>
                    <ul class="list-style">
                        <li>Customizable Content Templates</li>
                        <li>SEO Optimized</li>
                        <li>Role-Based Administration</li>
                    </ul>
                    <p>Launched on time, currently live and successfully handling sales.</p>
                </div>
                <a href="https://www.hakidd.com/" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- My Moving Journey (Website) -->
<div class="col col-d-6 col-t-6 col-m-12 grid-item websites border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-mymovingjourney" class="has-popup-media">
                <img src="movingjourney.png" alt="My Moving Journey" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-mymovingjourney" class="name has-popup-media">My Moving Journey</a>
            <div class="category">Website</div>
        </div>
    </div>
</div>
<div id="popup-mymovingjourney" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="movingjourney.png" alt="My Moving Journey">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>My Moving Journey</h1>
                <div class="blog-detail">Tech Stack: PHP, AJAX, Responsive Frontend</div>
                <div class="blog-content">
                    <p>
                        A platform that helps individuals plan their relocation process. From packing checklists to scheduling movers, it provides a guided, step-by-step user experience on any device.
                    </p>
                    <ul class="list-style">
                        <li>Interactive Planning Tools</li>
                        <li>Responsive & Mobile Friendly</li>
                        <li>Multi-step User Journeys</li>
                    </ul>
                    <p>Delivered on time and now live, simplifying the moving process for users.</p>
                </div>
                <a href="https://mymovingjourney.com/" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Staging Environment (Mobile App) -->
<!-- <div class="col col-d-6 col-t-6 col-m-12 grid-item mobile border-line-h">
    <div class="box-item">
        <div class="image">
            <a href="#popup-staging" class="has-popup-media">
                <img src="staging.png" alt="Staging Environment" />
                <span class="info">
                    <span class="ion ion-images"></span>
                </span>
            </a>
        </div>
        <div class="desc">
            <a href="#popup-staging" class="name has-popup-media">Staging Environment</a>
            <div class="category">Mobile App</div>
        </div>
    </div>
</div>
<div id="popup-staging" class="popup-box mfp-fade mfp-hide">
    <div class="content">
        <div class="image">
            <img src="staging.png" alt="Staging Environment">
        </div>
        <div class="desc">
            <div class="post-box">
                <h1>Mobile App Staging</h1>
                <div class="blog-detail">Tech Stack: React Native, Laravel, AWS Amplify</div>
                <div class="blog-content">
                    <p>
                        A staging environment for a mobile application, providing a testing ground for new features and enhancements before going live. Ensures high-quality user experiences upon official release.
                    </p>
                    <ul class="list-style">
                        <li>Testing Ground for New Features</li>
                        <li>Seamless AWS Integration</li>
                        <li>Optimized for Rapid Iterations</li>
                    </ul>
                    <p>Regularly updated and accessible for internal stakeholders, ensuring continuous improvement.</p>
                </div>
                <a href="https://staging.drukbteexjele.amplifyapp.com/dashboard" target="_blank" class="button">
                    <span class="text">View Project</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div> -->

<div class="clear"></div>
</div>

        </div>

    </div>
</div>


            <!--
				Card - Blog
			-->

            <!-- blog cards -->
            <div class="card-inner blog" id="blog-card">
                <div class="card-wrap">

                    <!-- Blog -->
                    <div class="content blog">

                        <!-- title -->
                        <div class="title">
                            <span>Blog</span>
                        </div>

                        <!-- content -->
                        <div class="row border-line-v">
                            <!-- blog item -->
                            <div class="col col-d-6 col-t-6 col-m-12">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="blog-post-new.html">
                                            <img src="images/blog/blog1.jpg" alt="By spite about do of allow" />
                                            <span class="info">
                                                <span class="ion ion-document-text"></span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post-new.html">
                                            <span class="date">April 28, 2020</span>
                                        </a>
                                        <a href="blog-post-new.html" class="name">By spite about do of allow</a>
                                        <div class="text">
                                            <p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril
                                                ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog item -->
                            <div class="col col-d-6 col-t-6 col-m-12">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="blog-post-new.html">
                                            <img src="images/blog/blog2.jpg" alt="By spite about do of allow" />
                                            <span class="info">
                                                <span class="ion ion-document-text"></span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post-new.html">
                                            <span class="date">April 28, 2020</span>
                                        </a>
                                        <a href="blog-post-new.html" class="name">By spite about do of allow</a>
                                        <div class="text">
                                            <p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril
                                                ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog item -->
                            <div class="col col-d-6 col-t-6 col-m-12">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="blog-post-new.html">
                                            <img src="images/blog/blog3.jpg" alt="By spite about do of allow" />
                                            <span class="info">
                                                <span class="ion ion-document-text"></span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post-new.html">
                                            <span class="date">April 28, 2020</span>
                                        </a>
                                        <a href="blog-post-new.html" class="name">By spite about do of allow</a>
                                        <div class="text">
                                            <p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril
                                                ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog item -->
                            <div class="col col-d-6 col-t-6 col-m-12">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="blog-post-new.html">
                                            <img src="images/blog/blog1.jpg" alt="By spite about do of allow" />
                                            <span class="info">
                                                <span class="ion ion-document-text"></span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post-new.html">
                                            <span class="date">April 28, 2020</span>
                                        </a>
                                        <a href="blog-post-new.html" class="name">By spite about do of allow</a>
                                        <div class="text">
                                            <p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril
                                                ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="pager">
                            <nav class="navigation pagination">
                                <div class="nav-links">
                                    <span class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="next page-numbers" href="#">Next</a>
                                </div>
                            </nav>
                        </div>

                    </div>

                </div>
            </div>

            <!--
				Card - Contacts
			-->
            <div class="card-inner contacts" id="contacts-card">
    <div class="card-wrap">

        <!--
            Contacts Info
        -->
        <div class="content contacts">

            <!-- title -->
            <div class="title">Get in Touch</div>

            <!-- content -->
            <div class="row">
                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                    <!-- <div class="map" id="map"></div> -->
                    <div class="info-list">
                        <ul>
                            <li><strong>Address . . . . .</strong> Lahore, Pakistan</li>
                            <li><strong>Email . . . . .</strong> mumairtufail786@gmail.com</li>
                            <li><strong>Phone . . . . .</strong> +92 335 4455494</li>
                            <li><strong>Freelance . . . . .</strong> Available</li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>

        <!--
            Contact Form
        -->
        <div class="content contacts">

            <!-- title -->
            <div class="title">Contact Form</div>

            <!-- content -->
            <div class="row">
                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                    <div class="contact_form">
                        <form id="cform" method="post">
                            <div class="row">
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="name" placeholder="Full Name" required />
                                    </div>
                                </div>
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="email" name="email" placeholder="Email Address" required />
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        <textarea name="message" placeholder="Your Message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="align-left">
                                <a href="#" class="button" onclick="$('#cform').submit(); return false;">
                                    <span class="text">Send Message</span>
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </form>
                        <div class="alert-success" style="display:none;">
                            <p>Thanks, your message has been sent successfully.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>

    </div>
</div>

        </div>

        <div class="s_overlay"></div>
        <div class="content-sidebar">
            <div class="sidebar-wrap search-form">
                <aside id="secondary" class="widget-area">
                    <section id="search-2" class="widget widget_search">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </section>
                    <section class="widget widget_recent_entries">
                        <h2 class="widget-title">
                            <span class="widget-title-span"><span class="first-word">Recent</span> Posts</span>
                        </h2>
                        <ul>
                            <li>
                                <a href="#">Creativity Is More Than</a>
                            </li>
                            <li>
                                <a href="#">Designing the perfect</a>
                            </li>
                            <li>
                                <a href="#">Music Player Design</a>
                            </li>
                            <li>
                                <a href="#">A Song And Dance Act</a>
                            </li>
                            <li>
                                <a href="#">By spite about do of allow</a>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widget_recent_comments">
                        <h2 class="widget-title">
                            <span class="widget-title-span"><span class="first-word">Recent</span> Comments</span>
                        </h2>
                        <ul>
                            <li class="recentcomments">
                                <span class="comment-author-link">JOHN SMITH</span> on <a href="#">Creativity Is More
                                    Than</a>
                            </li>
                            <li class="recentcomments">
                                <span class="comment-author-link">ADAM SMITH</span> on <a href="#">Creativity Is More
                                    Than</a>
                            </li>
                            <li class="recentcomments">
                                <span class="comment-author-link">admin</span> on <a href="#">Designing the perfect</a>
                            </li>
                            <li class="recentcomments">
                                <span class="comment-author-link">admin</span> on <a href=#">Designing the perfect</a>
                            </li>
                            <li class="recentcomments">
                                <span class="comment-author-link">James</span> on <a href="#">Designing the perfect</a>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widget_archive">
                        <h2 class="widget-title">
                            <span class="widget-title-span">
                                <span class="first-letter">Archives</span>
                            </span>
                        </h2>
                        <ul>
                            <li>
                                <a href="#">November 2018</a>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widget_categories">
                        <h2 class="widget-title">
                            <span class="widget-title-span"><span class="first-letter">Categories</span></span>
                        </h2>
                        <ul>
                            <li class="cat-item cat-item-2">
                                <a href="#">Design</a>
                            </li>
                            <li class="cat-item cat-item-3">
                                <a href="#">Music</a>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widget_meta">
                        <h2 class="widget-title">
                            <span class="widget-title-span"><span class="first-letter">Meta</span></span>
                        </h2>
                        <ul>
                            <li><a href="#">Log in</a></li>
                            <li><a href="#">Entries feed</a></li>
                            <li><a href="#">Comments feed</a></li>
                            <li><a href="#">WordPress.org</a></li>
                        </ul>
                    </section>
                </aside>
            </div>
            <span class="close"></span>
        </div>

    </div>
    @include('partials.scripts')

</body>

</html>