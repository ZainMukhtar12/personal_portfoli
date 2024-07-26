@extends('layout.app')

@section('content')
<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row">
            <div class="row d-flex align-items-stretch">
            <!-- <div class="row d-flex"> -->
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                  <div class="about-img">
                                    <img src="images/about-me.png" class="img-fluid rounded b-shadow-a" alt="">
                                  </div>
                                </div>
                                <!-- Details next to profile image -->
                                <div class="col-sm-6 col-md-7">
                                  <div class="about-info">
                                    <p><span class="title-s">Name: </span> <span>Rishabh Mishra</span></p>
                                    <p><span class="title-s">Job Role: </span> <span>Senior Data Analyst</span></p>
                                    <p><span class="title-s">Experience: </span> <span>5 Years 3 Months</span></p>
                                    <p><span class="title-s">Address: </span> <span>Bengaluru, India</span></p>
                                  </div>
                                </div>
                              </div>

                            <div class="skill-mf">
                                <p class="title-s">Skills</p>
                                <span>SQL</span> <span class="pull-right">95%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>

                                <span>PYTHON</span> <span class="pull-right">85%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>

                                <span>Data Visualization</span> <span class="pull-right">90%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>

                                <span>Statistical Analysis</span> <span class="pull-right">85%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>

                                <span>Machine Learning</span> <span class="pull-right">80%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">

                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>

                            <p>With over 5 years of comprehensive experience in the field of data science & analytics, accompanied by a bachelor's degree in engineering.
                                Proficient in data analysis, statistical analysis, hypothesis testing, customer behaviour analysis, &amp; machine learning.
                                Demonstrated success in leading impactful projects and providing effective mentorship.</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Profile:</span> <span>Data Science &amp; Analytics</span></li>
                                <li class="d-flex"><span>Domain:</span> <span>Retail, Ecommerce, BFSI &amp; Digital Marketing</span></li>
                                <li class="d-flex"><span>Education:</span> <span>Bachelor of Engineering</span></li>
                                <li class="d-flex"><span>Language:</span> <span>English, Hindi</span></li>
                                <li class="d-flex"><span>BI Tools:</span> <span>Microsoft Power BI, Looker &amp; Tableau</span></li>
                                <li class="d-flex"><span>Other Skills:</span> <span>Cloud, PySpark, Excel, Git, JIRA, Google Analytics &amp; SEO</span></li>
                                <li class="d-flex"><span>Interest:</span> <span>Traveling, Travel Photography, Teaching</span></li>

                            </ul>
                        </div>
                    </div>


                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="30">0</span> <span>+</span>
                                <span>&nbsp; Projects completed</span>
                            </p>
                            <p><a href="https://www.linkedin.com/in/rishabhnmishra/" class="btn btn-primary py-3 px-3">LinkedIn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


