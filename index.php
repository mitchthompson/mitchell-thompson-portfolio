<?php include 'includes/header.php' ?>
<main>
<div class="jumbotron intro">
        <div class="container box-1 about">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-section">
                    <h2>Hello.</h2>
                    <p>My name is Mitchell Thompson, and I am Seattle-based web and mobile developer. I have a diverse set of skills, and I enjoy building everything from small business sites, rich dynamic web apps, and versatile native mobile apps. I have some of my recent <a class="box-3" href="#box-3">projects</a> available that show my <a class="box-2" href="#box-2">skills</a> in action. Feel free to <a class="box-4" href="#box-4">contact</a> me or connect with me on <a target="_blank" href="http://www.linkedin.com/in/mitchell-thompson">LinkedIn</a> if you have any questions or just want chat about what we can do together.</p> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <a href="#" class="hire box-6 btn btn-primary center-block" role="button">I'm looking to hire   <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <a href="#" class="hire box-5 btn btn-primary center-block" role="button">I need an app  <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div><!--container-->
</div>
<div id="boxes" class="jumbotron boxes">
    <div class="container box box-2">
        <div class="row">
            <div class="skills col-sm-10 col-xs-12">
                <h2>WHAT I CAN DO</h2>
                <div class="col-xs-6">
                    <ul class="skill_list list-unstyled">
                        <li><span><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> HTML/CSS</i></span></li>
                        <li><span><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Javascript</i></span></li>
                        <li><span><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> jQuery</i></span></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Bootstrap</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> React</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> CMS</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Wordpress</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> NPM</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> PHP</i></li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <ul class="skill_list list-unstyled">
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Android Dev</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Firebase</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Java</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> XML</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> SQL</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Material Design</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Version Control</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> GitHub</i></li>
                        <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> VSTS</i></li>
                    </ul>
                </div>
            </div><!--skills-->
            <div class="skills col-xs-12">
                <p>My skill set is varied, spanning front-end to back-end development. I've worked on projects designing and developing Java based Android apps using a real-time firebase database. I am adept at designing, developing, and launching websites that incorporate modern styling implementations like responsive and adaptive design. I'm skilled in creating interactive and dynamic web applications using MVC design. I am familiar with Agile methodologies like Scrum, and using tools like Github on collaborative team projects. I can build a website from scratch or build a custom template for use on a Content Management System like Wordpress. I'm savvy working with custom css and designing with frameworks like Bootstrap. Most of all, I'm always eager to try new methods and technologies to build things that are functional and fun.</p>    
            </div><!--skills-->
            
        </div><!--row -->
    </div><!--container-->
    
    <?php include 'includes/projects.php' ?>
    
    <div class="container box box-4">
        <h2>Contact</h2>
        <div class="row contact"> 
            <div class="contact col-sm-2">
                <img class="img-responsive" src="images/mitchellthompson.jpg">
            </div>
            <div class="contact-form col-sm-10">
                    <form role="form" class='form-horizontal' id="contact" method="post" action="includes/formhandler.php">
                      <div class="form-group">
                        <label for="name" class="col-sm-2">Name</label>
                        <div class="col-sm-10">
                            <input type="name" name="name" class="form-control" id="inputName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputReason" class="col-sm-2">Reason</label>
                          <div class="col-sm-10">
                              <select id="inputReason" name="reason" class="form-control">
                                  <option value="" disabled selected>Reason for contacting...</option>
                                  <option>I need a web or mobile app</option>
                                  <option>I have a job opportunity</option>
                                  <option>Let's get coffee!</option>
                                  <option>Other</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputComments" class="col-sm-2">Comments</label>
                          <div class="col-sm-10">
                            <textarea name="comments" id="inputComments" class="form-control" rows="3" placeholder="Questions or comments"></textarea>
                          </div>
                      </div>
                          <button type="submit" value="submit" class="btn btn-default btn-lg pull-right">Submit</button>
                    </form>   
            </div><!--contact-form -->
            <div id="contact-success" class="text-center col-xs-8 col-md-offset-2"></div>
        </div><!--row -->
    </div><!--container-->
    
    <div class="container box box-5">
        <h2>Project Exploration</h2>
        <div class="row contact-website"> 
            <div class="col-md-8">
                <p><span>Interested in working together?</span> Fill out the Project Exploration form with the basics about your project. I will respond within a few business days. Until then, check out some of my recent <a class="box-3" href="#box-3">projects</a>.</p>
                <form role="form" class='form-horizontal' method="post" action="includes/formhandler.php" id="project-exploration">
                  <div class="form-group">
                    <label for="name" class="col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputWebsite" class="col-sm-2">Website</label>
                    <div class="col-sm-10">
                        <input type="text" name="website" class="form-control" id="inputWebsite">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTimeline" class="col-sm-2">Timeline</label>
                    <div class="col-sm-10">
                        <input type="text" name="timeline" class="form-control" id="inputTimeline">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputBudget" class="col-sm-2">Budget</label>
                    <div class="col-sm-10">
                        <input type="text" name="budget" class="form-control" id="inputBudget">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="inputReason" class="col-sm-2">Reason</label>
                      <div class="col-sm-10">
                          <select id="inputReason" name="reason" class="form-control">
                              <option value="" disabled selected>New app or redesign?</option>
                              <option>This will be a brand new app</option>
                              <option>This will be a resdesign of an existing app</option>
                              <option>It's complicated..</option>
                              <option>Other</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputComments" class="col-sm-2">About</label>
                      <div class="col-sm-10">
                        <textarea name="comments" id="inputComments" class="form-control" rows="3" placeholder="Tell me about your project..."></textarea>
                      </div>
                  </div>
                      <button type="submit" class="btn btn-default btn-lg pull-right">Submit</button>
                </form>
                <div id="exploration-success" class="text-center col-xs-8 col-md-offset-2"></div>
            </div><!--col-md-8-->
        </div><!--row -->
    </div><!--container-->  
    
    <div class="container box box-6">
        <h2>Connect</h2>
        <div class="row hire-me">
            <div class="col-sm-5">
                <p>Connect with me on <a target="_blank" href="http://www.linkedin.com/in/mitchell-thompson">LinkedIn</a>, check out some of my code on <a target="_blank" href="http://github.com/mitchthompson">Github</a>, or see some of my <a class="box-3" role="button" href="#box-3">recent projects</a>. I have a <a class="box-4" href="#box-4">contact form</a> but <a target="_blank" href="http://www.linkedin.com/in/mitchell-thompson">LinkedIn</a> would work best.</p>
                <ul class="list-unstyled">
                    <li><p>Download Resume</p>
                        <ul class="resume list-unstyled">
                            <li><a target="_blank" href="http://www.mitchlthompson.com/doc/WebResume_ThompsonMitchell.pdf">PDF</a></li>
                            <li><a target="_blank" href="http://www.mitchlthompson.com/doc/WebResume_ThompsonMitchell.docx">Word</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--col-sm-12-->
            <div class="col-sm-7">   
                <img class="img-responsive" src="images/Resume.png">
            </div>
        </div><!--row -->
    </div><!--container-->
    
</div><!--jumbotron-->    
<?php include 'includes/footer.php' ?>
