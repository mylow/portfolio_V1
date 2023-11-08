<?php include 'includes/header.php'; ?>
<div id="home">
    <span class="top-link">&zwnj;</span>
    <h1>I'm Milo Sherman,<br> a <span>Front-End Developer</span> focusing on <span>minimalism</span> and <span>simplicity</span> in websites.<br> Currently based in <span>Seattle</span>.</h1>
    
</div>
<div id="work">
    <span class="top-link">&zwnj;</span>
    <h1 class="main-title">work</h1>

    <section>
    <h1>Website for the Seattle Hiroshima Club </h1>
    <ul>
        <li>Worked on a team to build a website for a local non-profit organization</li>
        <li>Designed custom PHP templates from HTML &amp; CSS to be used as a theme on Wordpress</li>
        <li>Purchased and set up a database plugin for Wordpress so that the non-profit can let members make accounts and view pages that would not always be accessible to the general public</li>
        <li>Set up a PayPal account to be used in connection with the Woo Commerce Wordpress plugin to allow members to pay dues as well as others to donate directly to them</li>
        <li>Used media queries to make the website responsive and compatible with different screen sizes</li>
    </ul>
        <h5>HTML, CSS, JavaScript, PHP, WordPress, BootStrap</h5>
    
        <button><a href="http://www.seahiro.org" target="_blank">view website</a></button>
        <button><a href="shc_case.php">view case study</a></button>
        
    </section>
    
    <section>
    <h1>Website construction for Javelin Shelving </h1>
    <ul>
        <li>Created a complete restructure of the website to give it a more professional look while making it easier to navigate </li>
        <li>Wrote several main categories for the content, decided the best order and flow and then added the rest of the content to the main categories </li>
        <li>Designed a one-page fluid responsive site to give it a more modern look and feel while making all of the necessary information even more accessible </li>
        <li>Used Photoshop and Illustrator to edit and revise images on the website</li>
    </ul>
        <h5>HTML, CSS, JavaScript</h5>
        
        <button><a href="/javelin" target="_blank">view website</a></button>
        
    </section>
    
    <section>
    <h1>Search 200 most recent tweets from any user using Twitter API </h1>
    <ul>
        <li>Used a simplified and minified Twitter API to pull the last 200 tweets from a specific user</li>
        <li>Parsed the way twitter writes it's time into a more readable format</li>
        <li>Showed the Twitter user's avatar using avatars.io to work on mobile as well</li>
        <li>Used media queries to make the website responsive and compatible with different screen sizes</li>
    </ul>
        <h5>HTML, CSS, JavaScript, PHP, Twitter API</h5>
        
        <button><a href="/twitter" target="_blank">view website</a></button>
        
    </section>
    
    <section>
    <h1>Website redesign and CMS implementation for LucaLight </h1>
    <ul>
        <li>Created a custom Wordpress theme to maintain the original look and feel of the website</li>
        <li>Added plugins that would be useful and add functionality  to the website as well as be easy to maintain for the owner, like a photo gallery </li>
        <li>Used media queries to make the website responsive and compatible with different screen sizes</li>
    </ul>
        <h5>HTML, CSS, JavaScript, PHP, WordPress</h5>
        
        <button><a href="http://www.lucalight.com" target="_blank">view website</a></button>
        
    </section>
    
    <section>
    <h1>Full website construction process for Seattle Eyewear </h1>
        <ul>
        <li>Created website objectives, and user needs to have a clear idea of what the purpose of the site would be</li>
        <li>Made a list of the functional specifications to gather information like branding, look and feel, what information would be on the site, tools the customers/user would have access to, etc... </li>
        <li>Used Illustrator and Photoshop to create wireframes and visual designs</li>
        <li>Created a protosite that would showcase the outcome of all these pieces of the project going into a website</li>
    </ul>
        <h5>HTML, CSS, JavaScript, Bootstrap, Illustrator, Photoshop</h5>
    </section>
    <!--<div id="resume-button">
        <button class="buttonc" type="submit" onclick="window.open('milo_sherman_resume.pdf')" ><span>Resume</span></button>
    </div>  -->  
</div>
<div id="contact">
    <span class="top-link">&zwnj;</span>
    <h1 class="main-title">contact</h1>
    <div class="container">
        <form id="ajax-contact" method="post" action="assets/mailer.php">
 
        <div class="form-group">
            <input type="text" id="name" name="name" required="required" />
            <label class="control-label" for="input">Name</label>
            <i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="email" id="email" name="email" required="required" />
            <label class="control-label" for="input">Email Address</label>
            <i class="bar"></i>
        </div>
        <div class="form-group">
            <textarea id="message" name="message" required="required"></textarea>
            <label class="control-label" for="textarea">Message</label>
            <i class="bar"></i>
        </div>
            <div id="form-messages"></div>
        <div class="field">
        <button class="buttonc" type="submit"><span>Send</span></button>
        </div>     
    </form>  
    </div>
</div>
<?php include 'includes/footer.php'; ?>