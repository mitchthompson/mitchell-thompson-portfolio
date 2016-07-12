<?php include 'includes/header.php' ?>
<main>
<div class="jumbotron intro">
        <div class="container box-1 about">
            <div class="row">
                <div class="col-md-12">
                    <p>Hello! My name is Mitchell Thompson, and I am Seattle-based Web Developer. I have a diverse set of skills, and I enjoy building everything from small business sites to rich dynamic web apps. You can check out some of my recent <a class="box-3" href="#box-3">projects</a> to see my <a class="box-2" href="#box-2">skills</a> at work. Feel free to <a class="box-4" href="#box-4">contact</a> me if you have any questions or just want chat about what we can do together.</p> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <a href="#" class="btn btn-primary center-block hire" role="button">I'm looking to hire   <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                    <a href="#" class="box-5 btn btn-primary center-block hire" role="button">I need a website  <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div><!--container-->
</div>
<div id="boxes" class="jumbotron boxes">
    <div class="container box box-2">
        <div class="row">
            <div class="skills col-xs-10 col-xs-offset-1 text-center">
                <h2>WHAT I CAN DO</h2>
                <ul class="skill_list list-unstyled">
                    <li><span><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> HTML/CSS</i></span></li>
                    <li><span><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Javascript</i></span></li>
                    <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Bootstrap</i></li>
                    <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Wordpress</i></li>
                    <li><span><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> jQuery</i></span></li>
                    <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> PHP</i></li>
                    <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> Java</i></li>
                    <li><i class="fa fa-check-square-o fa-2x" aria-hidden="true"> SQL</i></li>
                </ul>
                <p>My skill set is varied, spanning front-end to back-end development. I am adept at designing, developing, and launching websites that incorporate modern styling implementations like responsive and adaptive design. I'm skilled in creating interactive and dynamic web applications using MVC design. I am familiar with Agile methodologies like Scrum, and using tools like Github on collaborative team projects. I can build a website from scratch or build a custom template for use on a Content Management System like Wordpress. I'm savvy working with custom css and designing with frameworks like Bootstrap. Most of all, I'm always eager to try new methods and technologies to build things that are functional and beautiful.</p>
                
            </div><!--skills-->
            
        </div><!--row -->
    </div><!--container-->
    
    <div class="container box box-3">
        <div class="row projects text-center">
            <div class="project col-md-4 col-sm-12">
                <h3>Purple Pickle</h3>
                <a data-target="#purple-pickle" data-toggle="modal" data-image="images/purplepickle.png"><img class="img-responsive" src="images/purplepickle.png"></a>
                <div class="modal fade" id="purple-pickle" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="modal-title" id="modalLabel">Purple Pickle</h3>
                            </div><!--modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="images/purplepickle.png"> <br>
                                        <a class="live-project btn btn-primary" href="http://www.mitchlthompson.com/purplepickle/" target="_blank">Live Demo</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat quam enim, in dictum urna ultrices gravida. Aliquam tellus est, ullamcorper in dapibus quis, posuere ut tortor. Donec tincidunt sed magna quis feugiat. Integer gravida augue nec imperdiet pulvinar. Praesent vitae gravida mi. </p>
                                        <p>Wordpress, HTML, CSS, PHP, Responsive Design</p>
                                    </div>
                                </div>
                            </div><!--modal-body-->
                        </div><!--modal-content-->
                    </div><!--modal-dialog-->
                </div><!--modal-->
            </div><!--project-->
            <div class="project col-md-4 col-sm-12">
                <h3>Weather Bits</h3>
                <a data-target="#weatherbits" data-toggle="modal" data-image="images/weatherbits.png"><img class="img-responsive" src="images/weatherbits.png"></a>
                <div class="modal fade" id="weatherbits" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="modal-title" id="modalLabel">Weather Bits</h3>
                            </div><!--modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="images/weatherbits.png"> <br>
                                        <a class="live-project btn btn-primary" href="http://www.mitchlthompson.com/weatherbits/" target="_blank">Live Demo</a>
                                        <a class="live-project btn btn-primary" href="https://github.com/mitchthompson/weatherbits" target="_blank">Github Repo</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat quam enim, in dictum urna ultrices gravida. Aliquam tellus est, ullamcorper in dapibus quis, posuere ut tortor. Donec tincidunt sed magna quis feugiat. Integer gravida augue nec imperdiet pulvinar. Praesent vitae gravida mi.</p>
                                        <p>HTML, CSS, PHP, Bootstrap, MySQL Database, Javascript, jQuery, Responsive Design, Github</p>
                                    </div>
                                </div>
                            </div><!--modal-body-->
                        </div><!--modal-content-->
                    </div><!--modal-dialog-->
                </div><!--modal-->
            </div><!--project-->
            <div class="project col-md-4 col-sm-12">
                <h3>Purple Pickle</h3>
                <a data-target="#project3" data-toggle="modal" data-image="images/purplepickle.png"><img class="img-responsive" src="images/purplepickle.png"></a>
                <div class="modal fade" id="project3" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="modal-title" id="modalLabel">Purple Pickle</h3>
                            </div><!--modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="images/purplepickle.png"> <br>
                                        <a class="live-project btn btn-primary" href="http://www.mitchlthompson.com/purplepickle/" target="_blank">Live Demo</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat quam enim, in dictum urna ultrices gravida. Aliquam tellus est, ullamcorper in dapibus quis, posuere ut tortor. Donec tincidunt sed magna quis feugiat. Integer gravida augue nec imperdiet pulvinar. Praesent vitae gravida mi. </p>
                                        <p>Wordpress, HTML, CSS, PHP, Responsive Design</p>
                                    </div>
                                </div><!--row-->
                            </div><!--modal-body-->
                        </div><!--modal-content-->
                    </div><!--modal-dialog-->
                </div><!--modal-->
            </div><!--project -->
            <div class="project col-md-4 col-sm-12">
                <h3>Weather Bits</h3>
                <a data-target="#project4" data-toggle="modal" data-image="images/weatherbits.png"><img class="img-responsive" src="images/weatherbits.png"></a>
                <div class="modal fade" id="project4" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="modal-title" id="modalLabel">Weather Bits</h3>
                            </div><!--modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="images/weatherbits.png"> <br>
                                        <a class="live-project btn btn-primary" href="http://www.mitchlthompson.com/weatherbits/" target="_blank">Live Demo</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat quam enim, in dictum urna ultrices gravida. Aliquam tellus est, ullamcorper in dapibus quis, posuere ut tortor. Donec tincidunt sed magna quis feugiat. Integer gravida augue nec imperdiet pulvinar. Praesent vitae gravida mi. </p>
                                        <p>HTML, CSS, PHP, MySQL Database, Javascript, jQuery Responsive Design</p>
                                    </div>
                                </div>
                            </div><!--modal-body-->
                        </div><!--modal-content-->
                    </div><!--modal-dialog-->
                </div><!--modal-->
            </div><!--project-->    
        </div><!--row projects-->
    </div><!--container-->
    
    <div class="container box box-4">
        <div class="row contact">  
            <div class="contact col-sm-2">
                <img class="img-thumbnail" src="images/mitchellthompson.jpg">
            </div>
            <div class="contact-form col-sm-10">
                    <form role="form" class='form-horizontal'>
                      <div class="form-group">
                        <label for="name" class="col-sm-2">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputReason" class="col-sm-2">Reason</label>
                          <div class="col-sm-10">
                              <select id="inputReason" class="form-control">
                                  <option value="" disabled selected>Reason for contacting...</option>
                                  <option>I need a website</option>
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
                          <button type="submit" class="btn btn-default btn-lg pull-right">Submit</button>
                    </form>   
            </div><!--contact-form -->   
        </div><!--row -->
    </div><!--container-->
    
    <div class="container box box-5">
        <div class="row contact">  
            <div class="contact col-sm-4">
                <p>Let's make something awesome together. I'll just need some basic info to get started.</p>
            </div>
            
            <div class="contact-form col-sm-8">
                    <form role="form" class='form-horizontal'>
                      <div class="form-group">
                        <label for="name" class="col-sm-2">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="inputPhone" class="col-sm-2">Phone</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputPhone">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputReason" class="col-sm-2">Reason</label>
                          <div class="col-sm-10">
                              <select id="inputReason" class="form-control">
                                  <option value="" disabled selected>New site or redesign?</option>
                                  <option>This will be a brand new site</option>
                                  <option>This will be a resdesign of an existing site</option>
                                  <option>It's complicated..</option>
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
                          <button type="submit" class="btn btn-default btn-lg pull-right">Submit</button>
                    </form>
                      
            </div><!--contact-form -->   
        </div><!--row -->
    </div><!--container-->
    <div class="container">
        <div class="row text-center">
            <a href="#top"><i class="back fa fa-arrow-up fa-2x" aria-hidden="true"></i>  <i class="back fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
        </div><!--row -->
    </div><!--container-->
</div><!--jumbotron-->    
<?php include 'includes/footer.php' ?> 
