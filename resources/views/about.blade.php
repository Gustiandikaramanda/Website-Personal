@extends('template')

<link rel="stylesheet" href="{{url('css/about.css')}}">

@section('title','About Me')
@section('main')
    <div class="about">
        <h1>About <span class="colored">Me</span></h1>
        <div class="about-me">
            <div>
                <h2>I can design all 
                    your needs</h2>
                <a href="/contact">Hire Me</a>
            </div>
            <p><span class="colored">+30</span>Projects</p>
        </div>
        <div class="bar"></div>
        <div class="experience-and-education">
            <div class="head">
                <h2>Resume of <span class="colored">Experience</span> and <span class="colored">Education</span></h2>
            </div>
            <div class="experience-and-education-container">
                <div class="experience">
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <div>
                            <h3>Video Jurnalist </h3>
                            <h4> Dompet Dhuafa</h4>
                            <p></P>
                            <p>Create corporate event coverage content, edit corporate videos.</p>
                            <div class="year">2022</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <div>
                            <h3>Desainer Grafis </h3>
                            <h4> Mulia Berbagi Berkah Sejahtera</h4>
                            <p></P>
                            <p>create Instagram content, create banners for corporate purposes.</p>
                            <div class="year">2021-2022</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <div>
                            <h3> Part Time Barista </h3>
                            <h4> Lampaoe Coffe And Culture</h4>
                            <p></P>
                            <p>Make orders for customers, make manual brew coffee, coffee cupping, and serve waiters wholeheartedly.</p>
                            <div class="year">2022-Now</div>
                        </div>
                    </div>
                </div>
                <div class="education">
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div>
                            <h3> Informatics Engineering </h3>
                            <h4> Institut Teknologi Indonesia</h4>
                            <p></P>
                            <p>Bachelor Degree 1</p>
                            <div class="year">2020-Now</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div>
                            <h3> Computer and Network Engineering </h3>
                            <h4> SMKS Al-Hasra</h4>
                            <p></P>
                            <p>vocational secondary school</p>
                            <div class="year">2017-2020</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div>
                            <h3> Junior High School </h3>
                            <h4> SMP Negeri 18 Depok</h4>
                            <p></P>
                            <div class="year">2014-2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bar"></div>
        <div class="skills">
            <div class="head">
                <h2>Mastered <span class="colored">skills</span> and <br><span class="colored">techniques</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum incidunt, distinctio aut voluptate aliquam ducimus nisi corporis officia ad voluptatem.</p>
            </div>
            <div class="skills-container">
                <div class="skill-item">
                    <h4>Photoshop</h4>
                    <div class="prog">
                        <span class="fill" style="width: 90%"></span>
                        <span class="percentage" style="left: 90%">90%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>Corel Draw</h4>
                    <div class="prog">
                        <span class="fill" style="width: 85%"></span>
                        <span class="percentage" style="left: 85%">85%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>Adobe Premier</h4>
                    <div class="prog">
                        <span class="fill" style="width: 70%"></span>
                        <span class="percentage" style="left: 70%">70%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>Basic HTML</h4>
                    <div class="prog">
                        <span class="fill" style="width: 70%"></span>
                        <span class="percentage" style="left: 70%">70%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>MySQL</h4>
                    <div class="prog">
                        <span class="fill" style="width: 50%"></span>
                        <span class="percentage" style="left: 50%">50%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>Laravel</h4>
                    <div class="prog">
                        <span class="fill" style="width: 10%"></span>
                        <span class="percentage" style="left: 10%">10%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection