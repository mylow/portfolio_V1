<!doctype html>
<html>
<head>
    <title>Seattle Hiroshima Club Case Study | my-low.com</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
    
    <link rel="stylesheet" href="assets/main.css">
    
    <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
<header>
    <nav class="main">
        <ul>
            <li><a href="/index.php#home">home</a></li>
            <li><a href="/index.php#work">work</a></li>
            <li><a href="/index.php#contact">contact</a></li>
        </ul>
    </nav>
    <nav class="secondary">
        <ul>
            <li><a href="https://www.linkedin.com/in/my-low/" target="_blank">linkedin</a></li>
            <li><a href="https://github.com/mylow" target="_blank">github</a></li>
            <li><a href="milo_sherman_resume.pdf" target="_blank">resume</a></li>
        </ul>
    </nav>
</header>
<header class="header-small">
    <div id="nav-toggle" onclick="$toggle">
        <span><i class="fas fa-bars"></i></span>
    </div>
    <nav class="main-small">
        <ul>
            <li><a href="/index.php#home"  id="small-toggle">home</a></li>
            <li><a href="/index.php#work" id="small-toggle">work</a></li>
            <li><a href="/index.php#contact" id="small-toggle">contact</a></li>
        </ul>
    </nav>
    <nav class="secondary-small">
        <ul>
            <li>
                <a href="https://www.linkedin.com/in/my-low/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/mylow" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </li>
            <li>
                <a href="milo_sherman_resume.pdf" target="_blank">
                    <i class="far fa-file"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>
<main>
<div id="home" class="case-study-main">
    <span class="top-link">&zwnj;</span>
    <h1>A website for the Seattle Hiroshima Club</h1>
    <h2>Role: <span>Lead Developer</span></h2>
    <h2>Responsibilities: <span>Design mockup website in HTML &amp; CSS based off of wireframes. Create PHP templates from mockup website and setup Wordpress on the development server. Make website responsive using CSS media queries.</span></h2>
    <h2>Project Goal: <span>Work with graphic designers to create a WordPress website for a non-profit organization while practicing a team workflow process.</span></h2>
    <h2>Live Site: <a href="http://www.seahiro.org" target="_blank">seahiro.org</a></h2>
    <h2>Code: <a href="https://github.com/mylow/seattle-hiroshima-club" target="_blank">github.com/mylow</a></h2>
</div>
<div id="case-study">
    <h2>Functional Requirements</h2>
        <ul>
            <li>Simple and short URL</li>
            <li>Search engine specific to the site</li>
            <li>Mobile friendly</li>
            <li>3 category login for Board, Members, and Public</li>
            <li>Photos (slideshow gallery)</li>
            <li>Videos (link to youtube videos hosted on site)</li>
            <li>Membership Application Forms</li>
            <li>Survey pop-up</li>
            <li>Simple clean design, (attractive to a younger audience)</li>
            <li>Money handling (donation, PayPal,  future for merchandise?)</li>
            <li>Calendar (to track and update events) (all in one events calendar - app)</li>
            <li>Database to keep track of member info</li>
            <li>Social Media Buttons/ Link( For future use)</li>
        </ul>
    <h2>Information Architecture</h2>
    <p>The Seattle Hiroshima Club (SHC) does not currently have a website, as the last version was taken down. Our web team has begun the process of redesigning a website for the SHC from scratch. The primary purpose of the website is information and exposure, with functions for board members and potential donors or members to get involved. However, the client also expressed the importance of educational information regarding the events of Hiroshima. This additional purpose created a duality of sorts, which required our team to analyze the proper division of categories for the SHC website. In conducting our information architecture workshop, our team decided upon these factors:</p>
        <ul>
            <li>The Seattle Hiroshima Club information and cultural Hiroshima information should decidedly remain separate, to give proper honor to the event and separate the Club from it.</li>
            <li>The top navigation bar needs to remain simple, clear and concise to aid club members, as most are near the age of 80.</li>
            <li>Detailed board member information and members-only information should be kept to a private login unless the client decides otherwise.</li>
            <li>A division between SHC events and getting involved with the SHC may or may not be necessary.</li>
            <li>The contact page, and contact information regarding specific board members, in particular, may or may not be kept private, depending on the wishes of the client.</li>
            <li>There is a large lack of content that has slowed the process of organizing tabs and specific pages.</li>
        </ul>
    <img src="images/shc_sitemap_1.jpg"/>
    <p>As we worked through these questions and added more post-it notes, it became clear that our top nav tabs needed to be adjusted or changed entirely to adhere to the client’s vision. A particular challenge for our team was deciding how to approach the events of Hiroshima, which we ultimately concluded was best as its own section.</p>
    <p>Other challenges arose when our team differentiated between the upper search bar/login area, top nav, and courtesy nav sections. The SHC offers different levels of involvement and membership, which will be expanded upon in “Get Involved”, but there also needs to be a visible member login in the upper search bar area to expedite the process of logging in for members. It was also discussed that a courtesy nav might help users by listing out each top nav tab and its subcategories entirely, such as seen on the <a href="http://www.seattleartmuseum.org/">Seattle Art Museum</a> website.</p>

    <p>Eventually, our team reached a satisfying top-down architecture that provided a clean division of ideas for each tab. A rough sketch of the top-down architecture was created next, in which we left the post-it notes behind and instead created a rough sketch of the site map. This process involved more editing than the last, in order to simplify our ideas. Rather than asking questions to generate content ideas and division, we focused on visual organization. This sketch led to our finalized site map which is shown below.</p>
    <img src="images/shc_sitemap_2.jpg"/>
    <h2>Final site map</h2>
    <img src="images/shc_sitemap_3.jpg"/>
    <h2>Wireframing</h2>
    <p>The next step was creating wireframes for both desktop web browsers and mobile phone web browsers.</p>
    <p>The website was built on a 12 column grid with a max-width of 960px for its ease of working well on all most computer monitors. As well as it looking better with a sidebar on some pages. We realized that our target audience would be adults with an average age of 56 so we took into account how the majority of them would be accessing this website from their computers at home and not by phones. Although the website is mobile friendly, we built it for desktop browsers first.</p>
    
    <h3>Desktop Wireframes</h3>
    <img src="images/SHC_desktop_wireframes_Page_1.png"/>
    <p>Most websites have large image sliders on their homepages and we wanted this website to be no different. Images engage users and keep them interested in what is there. We also wanted to have several Call-to-Actions on our homepage that would stand out to the users so they could hopefully get as much information about the organization as possible without searching around for it.</p>
    <p>The full PDF of the desktop wireframes is <a href="images/SHC_desktop_wireframes.pdf" target="_blank" >available here.</a></p>
    
    <h3>Mobile Wireframes</h3>
    <img src="images/SHC_mobile_wireframes_Page_1.png" class='tall-image'/>
    <p>The goal of every mobile website is to keep all of the regular information that would normally be accessible on the desktop version of the website intact. We spent a lot of time working with how we wanted to achieve this on our website and what would be the best way to make it mobile friendly. We chose 600px as a good breaking point and continued to support devices all the way down to 400px with media queries. </p>
    <p>The full PDF of the mobile wireframes is <a href="images/SHC_mobile_wireframes.pdf" target="_blank" >available here.</a></p>
    
    <h2>Visual Designs</h2>
    <p>While finalizing the design portion of the website and figuring out how we wanted it to look and feel we landed on choosing three main colors. We chose green for the background, yellow for headers and footers, and red for some call-to-actions and other aspects of the website. We stuck with simple sans-serif fonts for the majority of copy to keep a clean look and modern feel. Below is an idea of what we were trying to aim for.</p>
    <img src="images/SHC_visual_design_Page_1_Page_1.png"/>
    
    
    <h2>Site Development</h2>
    <p>I wanted the website to be built using BootStrap for its ease with being compatible for many different screen sizes. However, the website also needed to hold a lot of information and we needed a way for the client to add information and content to the website later on down the road so we chose to go with using a Content Management System as well. We went with WordPress for reasons being how they have so many free plugins and how it was the most cost-effective option for a non-profit organization.</p>
    <p>To start the prototyping I created template pages. I made one that would hold content that was pre-filled like a home page or about page. I made a 2nd template page that would update with blog posts when the client would want to add something to the website. I made both desktop and mobile versions of these basic templates with HTML and CSS.</p>
    <p>After completing this I converted the templates into PHP using includes for headers, menus, and footers to help with page loading times and also to get it ready for WordPress.</p>
    <p>To use BootStrap on WordPress we needed to use a NavWalker, I had never used one of these before so I found a good one on GitHub and modified it for our needs. This can be viewed on <a href="https://github.com/mylow/seattle-hiroshima-club/blob/master/wp_bootstrap_navwalker.php" target="_blank">my GitHub here</a></p>
    <p>I wrote various WordPress functions to do different things from setting up our header and footer navigation menus to adding the title tag to whatever page the user was on. Examples of which are shown below.</p>
    <pre><code class="php">function register_navs() {
    register_nav_menus(
        array(
            'main-menu' => __( 'SHC-menu' ),
            'footer' => __('SHC-footer' ),
        )
    );
}</code></pre>
    
    <pre><code class="php">function get_my_title_tag() {
    global $post;
        if (is_front_page()) { // front page
            bloginfo('description'); // get site tagline
        } elseif (is_page() || is_single() ){
            the_title(); //the page or post title
        } else {
            bloginfo('description');
        }
    
    echo ' ';
    echo ' | ';
    bloginfo('name'); // site name
    
}</code></pre>
    
    <p>The creation of the main navigation menu with the integration of the BootStrap navwalker is shown below here. This tells WordPress to create a menu called "SHC-menu" and to make it the primary menu. It also puts it inside of a div and gives it a class as well as the menu items inside of it classes.</p>
    <pre><code class="php">wp_nav_menu( array(
    'menu'              => 'SHC-menu',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'bs-example-navbar-collapse-1',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker())
);</code></pre>
    <p>Various other tasks were done while working on this website, like adding small transition effects when hovering on menu items, or Call-to-Actions. These were all done in CSS and where small lines of code but contributed greatly to the overall flow and feel of the website.</p>
    
    <h2>Troubleshooting</h2>
    <p>One problem that arose while building this site was with one of the plugins we were using to set up user accounts and have separate logins for each user. Although this can be done already through WordPress we wanted a separate plugin so that there would not be any confusion to the new webmaster when we handed the website off as WordPress sites can get dozens of fake bot requests a day through their usual user signup. The plugin that we used had great features however when signing up there was only an option to enter a name, email address, and a password. There was no option to enter this information more than once to make sure you were typing it incorrectly the first time. As most of our users would be older we wanted to make sure that they were typing their password incorrectly so I added some JavaScript to add another field where they would enter the password again and it would check to make sure it matched the original field input</p>
    <p>The tricky part about this was that it was all in a plugin and I did not have access to add more fields to it. The way I solved this problem was by using JavaScript to first add classes to several different elements that went into the plugin and then to append my own elements through JavaScript to the original built-in plugin fields. Below is how I did this.</p>
    
    <pre><code class="javascript">
    $("div.feup-pure-control-group:eq(0)").after("&lt;h5>&lt;/h5>");
    
    $("h5").first().addClass("repeat-email-label");
    
    $(".ewd-feup-text-input").first().addClass("email-1");
    
    $(".repeat-email-label").append('
        &lt;div class="feup-pure-control-group">
        &lt;label for = "Username" id = "ewd-feup-register-username-div" class = "ewd-feup-field-label"> 
        Confirm Email:&lt;span class = "req-symbol" > * &lt; /span>
        &lt;/label>&lt;input type="email" class="ewd-feup-text-input email-2" name="Username" placeholder="Confirm Email...">
        &lt;/div>
        &lt;h6 class = "email-wrong" >&lt; /h6>
    ');</code></pre>
</div> 
<?php include 'includes/footer.php'; ?>