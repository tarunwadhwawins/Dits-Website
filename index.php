<?php
    require_once('core/dbconnection.php');
?>
<!doctype html>
<html lang="en">
   <head>
      <?php include_once('common/commonmeta.php'); ?>
      <script>    (function(c,l,a,r,i,t,y){        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);    })(window, document, "clarity", "script", "6o3xa9tkvm");</script>
      <!--common css-->
      <?php include_once('common/commoncss.php'); ?>
      <!---->
     
   </head>
   <body class="home">
      <!--navigation-->
      <?php include_once('common/header.php'); ?>
      <!--slider-->
<section class=homeSlider>
<img src="assets/images/homebanner.jpg" title="Custom Software Development" alt="Custom Software Development" />
<div class=sliderContent>

<h1 id=bannerExtTwo><span id=bannerExtOne>Custom Software</span> <br>Development Solution</h1>
<p id=bannerExtThree>A remote software development company providing offshore development services enabling <br> business rapidity and competence with web and mobile solutions</p>
<div class=bannerButton id=bannerExtFour> <a href="<?php echo $url; ?>portfolio" class="btn btn-custom siteBtn">Our Portfolio </a> <a href="javascript:void(0);"  data-toggle="modal" data-target="#exampleModal" class="btn btn-custom siteBtn addCountry">Get in touch</a> </div>
</div>
<div class="scroll wow"><a href="#services"><span></span></a></div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <?php include_once('common/popup-form.php'); ?>
      </div>
<section class=aboutUs>
<div class=container>
<div class=row>
<div class="col-md-3 offset-md-1 col-sm-12">
<div class=aboutUsTitle>
<h2><span class=blue>Who</span> We Are</h2>
</div>
</div>
<div class="col-md-8 col-sn-12">
<div class=aboutUsDesc>
<p> <b>Ditstek Innovations</b>, “DITS” is a Web and Mobile Development Custom Software outsourcing company offering customized and robust solutions to various clients across USA, Germany, Canada, UK, UAE, Australia, Sweden, South Africa etc. with strong multi years continuing partnerships which include dedicated teams, product development, Maintenance of existing solutions, R&amp;D and technology consulting. While providing the full stack remote development services, we have been empowering the customers with technology with impactful, industry-specific IT software solutions.</p>
<p>We offer highly cost-effective and optimized solutions that facilitate our clients to achieve their business outcomes with speed and convenience.We build on our legacy knowledge and apply it our expertise areas such as Full-stack Development, .Net Consulting and Development, Custom Application Development, Technology Consulting, CRM, Business Process Automation Software, Web Enterprise Applications, Mobile Application Development, Outsourced Product Development, and Open Source Technologies etc. DITS also provides remote developers and dedicated developers to nurture and apply their competencies, helping brands build impactful engineering solutions with trailblazing technologies.</p>
<p>The team comprises of passionate, purpose-led individuals with disruptive thinking to deliver technology while addressing the clients' toughest challenges, all while seeking to revolutionize the IT industry and create positive social change.</p>
<ul>
<li><a href="<?php echo $url; ?>about">Know More About Us <i class="fa fa-angle-double-right"></i></a></li>
<li><a href="<?php echo $url; ?>portfolio">View Our Work <i class="fa fa-angle-double-right"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class=softwareSolutions id=services>
<div class=container>
<div class=row>
<div class=col-sm-12>
<div class=softwareSolutionsDesc>
<span>Cost-effective</span>
<h2> Software Development and <br> Support Solutions </h2>
</div>
</div>
<div class=col-sm-12>
<div class=serviceSection>
<div class="row mg-0">
<div class="col-md-4 col-sm-6 pad-0">
<div class=services><a href="<?php echo $url; ?>services/software-development-services" title="Software Development Services">
<div class="spriteImage softDev"></div>
<div class=servicesDesc>
<h3>Software Development Services</h3>
<p>We provide an offshore dedicated team which seamlessly integrates with your dev team. A loyal custom software development company with niche skills and deep expertise in Microsoft, Opensource and Mobile application development.</p>
</div>
</a>
</div>
</div>
<div class="col-md-4 col-sm-6 pad-0">
<div class=services><a href="<?php echo $url; ?>services/full-stack-development-services" title="Full Stack Development">
<div class="spriteImage fullDev"></div>
<div class=servicesDesc>
<h3>Full Stack Development</h3>
<p>Our experience in developing customized Enterprise software solutions targeting the specific business needs of niche domains / verticals like healthcare, retail, logistics, workflow management. These solutions help in improved productivity, overall efficiency, team.</p>
</div>
</a>
</div>
</div>
<div class="col-md-4 col-sm-6 pad-0">
<div class="services last borRgt"><a href="<?php echo $url; ?>services/front-end-development" title="Front End Development">
<div class="spriteImage frontEnd"></div>
<div class=servicesDesc>
<h3>Front End Development</h3>
<p>Building intuitive interfaces is a complex problem, yet essential to product success. Guiding users through the journey’s your product supports requires a thoughtful approach to both user experience (UX) and user interface design (UI).</p>
</div>
</a>
</div>
</div>
<div class="col-md-4 col-sm-6 pad-0">
<div class="services borBtm"><a href="<?php echo $url; ?>services/dedicated-development-team" title="Dedicated Development Team">
<div class="spriteImage devTeam"></div>
<div class=servicesDesc>
<h3>Dedicated Development Team</h3>
<p>DITS assists clients in discovering and implementing end to end business solutions to address industry-specific challenges. At DITS, we help select the most appropriate solutions to match specific business goals, optimize operations, and provide better cost and resource efficiency.</p>
</div>
</a>
</div>
</div>
<div class="col-md-4 col-sm-6 pad-0">
<div class="services borBtm"><a href="<?php echo $url; ?>services/hire-remote-developers" title="Hire Remote Developers">
<div class="spriteImage hireDev"></div>
<div class=servicesDesc>
<h3>Hire Remote Developers</h3>
<p> Ensuring high-quality software, DITS DevOps engineers adopt an approach that emphasizes communication, leverages collaboration, fine-tune each step of the delivery process by automating end to end delivery pipeline facilitating continuous integration and development </p>
</div>
</a>
</div>
</div>
<div class="col-md-4 col-sm-6 pad-0">
<div class="services last borRgt borBtm"><a href="<?php echo $url; ?>services/hire-asp-net-developers" title="Hiring Asp.Net Developers">
<div class="spriteImage netDev"></div>
<div class=servicesDesc>
<h3>Hiring Asp.Net Developers</h3>
<p>We provide QA Software Testing Services and Consulting team for manual and automation testing to perform comprehensive, multi-stage testing that drives innovation and software performance. DITS expertise covers the full software testing lifecycle delivering complete quality assurance services.</p>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=row>
<div class=col-sm-12>
<div class=enquireDesc>
<h3>Interested in Services ?</h3>
<p>Get a <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal"> QUOTE </a> on how we can help with your next project</p>
<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="btn btn-custom siteBtn">Enquire Now <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
</section>
      <section class="logoSlider">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="logoTitle">
                     <h2>Technologies We Use</h2>
                  </div>
                  <div class="logoCarousel">
                     <div class="owl-carousel owl-theme" id="logoCarousel">
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/amazon-db.png" alt="image" title="Amazon Db"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/ant-design.png" alt="image" title="Ant Design"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/asp.net-webform.png" alt="image" title="Asp.net Webform"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/boilerplate.png" alt="image" title="boilerplate"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/cordova.png" alt="image" title="Cordova"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/c-sharp.png" alt="image" title="c-sharp"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/cypruss.png" alt="image" title="cypruss"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/indesign.png" alt="image" title="InDesign"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/invision.png" alt="image" title="Invision"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/ionic.png" alt="image" title="Ionic"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/amazon-db.png" alt="image" title="Amazon Db"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/iot.png" alt="image" title="Iot"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/nebular.png" alt="image" title="Nebular"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/polymer.png" alt="image" title="Polymer"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/semantic.png" alt="image" title="Semantic"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/sketch.png" alt="image" title="Sketch"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/sql-lite.png" alt="image" title="sql-lite"/></div>
                        </div>
                        <div class="item">
                           <div class="thumbImage"><img src="assets/technology/Net-MVC.png" alt="image" title="Net-MVC"/></div>
                        </div>
						<div class="item">
                           <div class="thumbImage"><div class="asp-net-core commonImage"></div>
							</div>
                        </div>
                        <div class="item">
                           <div class="thumbImage"><img src="assets/technology/Web-API.png" alt="image" title="Web-API"/></div>
                        </div>
                        <div class="item">
                           <div class="thumbImage"><img src="assets/technology/node.png" alt="image" title="node"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><div class="angular commonImage"></div>
							 </div>
                        </div>
                        <div class="item">
                           <div class="thumbImage"><img src="assets/technology/react.png" alt="image" title="react"/></div>
                        </div>
                        <div class="item">
                           <div class="thumbImage"><img src="assets/technology/SQL-serve.png" alt="image" title="SQL-serve"/></div>
                        </div>
                        <div class="item">
                           <div class="thumbImage"><img src="assets/technology/mano-db.png" alt="image" title="Mongodb"/></div>
                        </div>
                        <div class="item">
                           <div class="thumbImage">
							   <div class="vue-js commonImage"></div>
							</div>
                        </div>
                        <div class="item">
                           <div class="thumbImage"><img src="assets/technology/azure.png" alt="image" title="Azure"/></div>
                        </div>
						    <div class="item">
                           <div class="thumbImage"><img src="assets/technology/Jenkins.png" alt="image" title="Jenkins"/></div>
                        </div>
						    <div class="item">
                           <div class="thumbImage"><img src="assets/technology/Devops.png" alt="image" title="Devops"/></div>
                        </div>
						    <div class="item">
                           <div class="thumbImage"><div class="typescripu commonImage"></div>
								</div>
                        </div>
						    <div class="item">
                           <div class="thumbImage"><img src="assets/technology/Php.png" alt="image" title="Php"/></div>
                        </div>
						    <div class="item">
                           <div class="thumbImage"><img src="assets/technology/Laravel.png" alt="image" title="Laravel"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/SQL-serve-Reporting-serve.png" alt="image" title="SQL-serve-Reporting-serve"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/PostgreSQL.png" alt="image" title="PostgreSQL"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage">
							   <div class="adobeIll commonImage"></div>
							 </div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><div class="coreldraw commonImage"></div>
							 </div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><div class="bootstrap commonImage"></div>
							  </div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/sass.png" alt="image" title="Sass"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><img src="assets/technology/less.png" alt="image" title="less"/></div>
                        </div>
						  <div class="item">
                           <div class="thumbImage"><div class="html-5 commonImage"></div>
							  </div>
                        </div>
						<div class="item">
                           <div class="thumbImage"><img src="assets/technology/jquery.png" alt="image" title="Jquery"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/JSON.png" alt="image" title="Json"/></div>
                        </div>
						 <div class="item">
                           <div class="thumbImage"><img src="assets/technology/ajax.png" alt="image" title="Ajax"/></div>
                        </div>
						<div class="item">
                           <div class="thumbImage"><div class="javascript commonImage"></div>
							</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<section class=method>
<div class=container>
<div class=row>
<div class=col-md-6>
<div class=methodDesc>
<h2>Methodology</h2>
<p>Agile methodologies are front and center of DITS, and working <br> in close collaboration – between the development team and business stakeholders – is Fundamental. <b>DITS, an Agile Enterprise Software Development Company</b> endeavors to implement the Agile Model Driven approach to every customer and their project.</p>
<p>As per the requirement and the nature of customized software in development, we, as an offshore development team have been using various methodologies like Waterfall, Kanban, Agile, Scrum, code versioning tools like GIT, Github, Bitbucket, TFS, SVN, Project management tools like JIRA, Trello, Basecamp, Plan.io, Pivotal Tracker ensuring that we build and deliver a promising robust and scalable software.</p>
<a href="<?php echo $url; ?>methodology" class=viewMore>View More <i class="fa fa-angle-double-right"></i></a>
</div>
</div>
<div class=col-md-6>
<div class="animation-container-home animation-principles-home">
<div class="animation-holder-home visible full-visible">
<span class="animation-element-home stepOne wow fadeInLeft" data-wow-delay=0.5s></span>
<span class="animation-element-home stepTwo wow fadeInLeft" data-wow-delay=1.3s></span>
<span class="animation-element-home stepThree wow fadeInLeft" data-wow-delay=2.1s></span>
<span class="animation-element-home stepFour wow fadeInLeft" data-wow-delay=2.9s></span>
<span class="animation-element-home stepFive wow fadeInLeft" data-wow-delay=3.7s></span>
<span class="animation-element-home stepSix wow fadeInLeft" data-wow-delay=4.5s></span>
<span class="animation-element-home stepSeven wow fadeInLeft" data-wow-delay=5.3s></span>
<span class="animation-element-home stepEight wow fadeInLeft" data-wow-delay=6.1s></span>
<span class="animation-element-home stepNine wow fadeInLeft" data-wow-delay=6.9s></span>
</div>
</div>
</div>
</div>
</div>
</section>

      <section class="counterSection">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="counterTitle">
                     <h2>What we've achieved in the last 3 Years</h2>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6  borderRgt">
                  <div class="counters">
                    <span class="counter-count" data-count="3">-</span>		
                     <p>Years In Business </p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6  borderRgt">
                  <div class="counters">
                     <span class="counter-count" data-count="20">-</span>	
                     <p>Customers Served</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6  borderRgt">
                  <div class="counters">
                    <span class="counter-count" data-count="30">-</span>
                     <p> Projects Delivered</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6 ">
                  <div class="counters">
                    <span class="counter-count" data-count="35">-</span>
                     <p>Employees </p>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
<section class=testimonials>
<div class=container-fluid>
<div class=row>
     <div class="col-sm-12 col-md-12 col-lg-4 pad-0">
                  <div class="testimonialDesc">
                     <span>Our Happy </span>
					  <h3>Clients</h3>
                  </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-8 pad-0">
<div class=testimonialCarousel>
<div class="owl-carousel owl-theme" id=testimonialCarousel>
<div class=item>
<div class=testDesc>
<p>Princy- Hard to believe it has already been a year. We greatly appreciate the work that you and everyone at Ditstek does for us. The development has improved month by month and has expanded what we can do and the efficiency with which it gets done. Please share with your employees our thanks for the many things they have done to make our work easier to perform. We look forward to the continued success of our collaboration over the next year!</p>
<h5> Dave Armstrong</h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>I’ve worked with the Ditstek team for years on a number of projects. They are professional, committed, engaged, creative and responsive. I fully endorse their work and would be willing to speak personally with any potential hiring agent with more details.</p>
<h5>Tom Rupsis</h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>This team just saved me, they did an amazing job over the last 6 weeks and built a totally customised website and backend.I strongly recommend this team to anyone that need a tuff job to be done. hardly waiting to hire them again. 4 letters: the BEST</p>
<h5> Lionel Hagege- Facepinpoint</h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>I have worked with over 60 out-sourced developers over the past 10 years and I can without hesitation that Saddam is the best, most competent and hard working developer that I have ever worked with!</p>
<h5> Daniel Gochin </h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>I have worked with Princy on multiple projects. She and her entire team work efficiently and effectively to produce results. They were able to streamline processes for us and eliminate many hours of data entry per month. I would definitely recommend her and her team.</p>
<h5> Erin McCutcheon </h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>I really could not have asked for more. We had a large project and he’s been one of the key reasons it has been successful. His technical skills are top notch, his communication is outstanding, and he delivers exactly what he promises every time. He maintains a regular work schedule, which makes my life much easier. He provides solid technical guidance for things that are outside my skillset, and he has a lot of patience for my questions when I’m trying to understand some technical aspects of the project.</p>
<h5> Granite Peak Systems </h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>I have worked with Princy and her dev team at Ditstek Innovations for a long time now. She is a responsive, determined professional who puts customers first. Being a part of the Tech crunch 2017, she and her team were my development partners and as always I look forward to working with her for years to come.</p>
<h5> Lionel Hagege </h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>A brilliant provider on all levels. Great communication, excellent work ethic and a top notch developer. Highly recommended!</p>
<h5>Daniel Gochin</h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>Princy and Harmesh were wonderful to work with. They are very patient and have very creative solutions for your projects. I would recommend their firm to anyone and plan to work with them again.</p>
<h5> Erin McCutcheon</h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>As always, A pleasure to work with Ravi and his team. Fantastic job as always, i recommend</p>
<h5> Lionel Hagege </h5>
</div>
</div>
<div class=item>
<div class=testDesc>
<p>The team really did a good job on the project. They understood the domain very well. They were able to make critical optimizations that really helped the project.</p>
<h5> Kingman Ho </h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
      
      <!--footer-->
      <?php include_once('common/footer.php'); ?>
      <!--scripts-->
      <?php include_once('common/commonscripts.php'); ?>
      <!---->
      	   <script>
	    // wow js
	  
     new WOW().init();
		   
		 //stats count
		var a = 0;
			$(window).scroll(function() {

			  var oTop = $('.counterSection').offset().top - window.innerHeight;
			  if (a == 0 && $(window).scrollTop() > oTop) {
				$('.counter-count').each(function() {
				  var $this = $(this),
					countTo = $this.attr('data-count');
				  $({
					countNum: $this.text()
				  }).animate({
					  countNum: countTo
					},

					{

					  duration: 5000,
					  easing: 'swing',
					  step: function() {
						$this.text(Math.floor(this.countNum));
					  },
					  complete: function() {
						$this.text(this.countNum);
						//alert('finished');
					  }

					});
				});
				a = 1;
			  }

			});
      		
	   </script>
	   
	   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNB5R2R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
   </body>
</html>