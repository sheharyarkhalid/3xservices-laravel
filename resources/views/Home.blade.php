

@extends('Layout')

@section('content')
 
@include('include/banner')

@include('include/business_solutions')

<div class="home_custom_about_section">
    <div class="custom_container">
        <div class="home_custom_about_content">
            <h3>Unleash the power of Digital Innovation with 3xservices</h3>
            <p>3xservices is a leading software development company that helps you develop innovative web and mobile applications, along with world-class UI/UX services.</p>
            <a>Turn your vision into reality - get a free quote today!</a>
        </div>
    </div>
</div>

@include('include/portfolio')

 <div class="degital_marketing_home_section_one">
    <div class="custom_container">
        <div class="marketing_home_section_one_content_box">
            <div class="marketing_home_section_one_content">
                <h2>Why Choose 3xservices?
                   </h2>
                <p> With our full suite of engineering services, we can bring your ideas to life faster and at the highest level of quality possible. Our experienced team offers a wide range of capabilities tailored to meet your unique business needs — making us the perfect choice for your next software development project.</p>

            </div>
        </div>
    </div>
</div>

<section class="home_choose_section" >
    <div class="custom_container">
    
    <div class="home_choose_section_box">
    <div class="home_section_choose_box">
    <div class="section_choose_box_icon"><a><img src="images/1.svg"></a></div>
    <div class="section_choose_box_heading">
    <h4>The best in class service</h4>
    
    </div>
    <div class="section_choose_box_discription">
    <p>We offer top-notch services utilizing our highly experienced team
        of developers, designers and strategists. Our team members have
        extensive experience in developing mobile and web applications for
        various industries.</p>
    </div>
    </div>
    <div class="home_section_choose_box">
    <div class="section_choose_box_icon"><a><img src="images/2.svg"></a></div>
    <div class="section_choose_box_heading">
    <h4>Create beautiful experiences</h4>
    </div>
    <div class="section_choose_box_discription">
    <p>Our UI/UX services create beautiful experiences for users that engage,
        inform, entertain and inspire them. We use the latest tools and technologies
        to create user interfaces that are intuitive. to create user
        interfaces that are intuitive, modern and engaging.</p>
    </div>
    </div>
    <div class="home_section_choose_box">
    <div class="section_choose_box_icon"><a><img src="images/3.svg"></a></div>
    <div class="section_choose_box_heading">
    <h4>Quality assurance</h4>
    </div>
    <div class="section_choose_box_discription">
    <p>Our quality assurance process makes sure all our apps are thoroughly
        tested before they are released to the market. We use automated
        testing tools to ensure a bug-free experience for users.</p>
    </div>
    </div>
    <div class="home_section_choose_box">
    <div class="section_choose_box_icon"><a><img src="images/4.svg"></a></div>
    <div class="section_choose_box_heading">
    <h4>Faster turnaround time</h4>
    </div>
    <div class="section_choose_box_discription">
    <p>Our team is highly efficient, which allows us to deliver projects faster
        than our competitors while still providing exceptional quality services.</p>
    </div>
    </div>
    
    
    
    
    </div>
    </div>
    </section> 





    @include('include/contact_section')
 
@include('include/plan_section')


@endsection

