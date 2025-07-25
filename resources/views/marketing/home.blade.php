@extends('layouts.app')
@section('content')

    <!-- ========= HERO ========= -->
    <div id="home">
        <section class="banner-area py-5" id="banner-4">
            <div class="overlay feature-overlay"></div>
            <!-- Content -->
            <div class="container">
                <div class="row  align-items-center justify-content-center">
                    <div class="col-md-12 col-lg-9">
                        <div class="banner-content2 text-center style-2">
                            <!-- Heading -->
                            <h1 class="display-4 mb-4 ">
                                Relo Agent Connect <br> Industry Leading Relocation Services
                            </h1>

                            <!-- Subheading -->
                            <p class="lead mb-5 pr-0">
                                {{ config('app.name', 'Relo') }} Ready to make your move but don’t know where to start?
                                Let our relocation experts guide you home. Down the street, across town, or cross-country, we’re here to help.
                                Contact us today for a FREE consultation.
                            </p>

                            <p class="lead mb-5 pr-0">Start your stress-free journey home!</p>

                            <!-- Button -->
                            <p class="mb-0">
                                <a href="{{ route('contact.create') }}" class="btn btn-white btn-circled">
                                    Contact Us
                                </a>
                            </p>
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>
    </div>

    <section class="pt-5" id="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-img">
                        <a href="{{ route('contact.create') }}"><img src="{{ asset('marketing/images/relo.png') }}" alt="" class="img-fluid"></a>
                    </div>
                </div>

                <div class="col-lg-6 pl-4">
                    <div class="service-content">
                        <h1>Who We Are</h1>
                        <p>After 10 years of working with buyers and sellers, homeowners and investors, people moving both near and far, we noticed something.
                            We noticed just how difficult it was for people to get started in the home buying/selling process. Especially if they are relocating
                            to a new area. Feedback from clients led us to understand that many are not quite sure what to do first, who to trust, or who to call.</p>

                        <p>Our services are designed to do one thing: to ensure you are with trusted agents, lenders, legal professionals, and other services you may need
                            to ensure a smooth transition buying and selling real estate. Often, at no additional cost to you.</p>

                        <p>This is not an entirely new idea. Many big corporations offer similar services to executives when they are moving so we thought; what about everyone else?
                            Why can’t everyone have a trusted professional waiting for them when needed? From this idea, Relo Agent Connect was formed.</p>

                        <p>Reach out to us today and let’s get started on the path to your new home.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 service-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <div class="carousel slide " id="service-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-comment"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Advice</h4>
                                                    <p>Expert guidance in unfamiliar markets.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-pin-alt"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Coordination</h4>
                                                    <p>Smooth coordination of selling and buying.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-thumb-up"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Trusted</h4>
                                                    <p>Access to trusted local and national networks.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-shine"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Seamless</h4>
                                                    <p>Saves time, money, and moving-day stress.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <p class="pl-3">Want to know more about this? <a href="{{ route('contact.create') }}">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="what-we-do">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            What We Do
                        </h2>

                        <!-- Subheading -->
                        <p>With a brief phone call or email conversation we can get an idea of how best to move forward with your unique situation.
                            Our objective is to completely customize your experience to best fit your needs. We are connected with 1000s of trusted
                            professionals all over the country and abroad. After learning a little about what your goals are, we will explore our vast
                            network and pair you with the best people in that area. It’s really that simple.</p>

                        <p>Need Real Estate Agents? Movers? Storage options? Staging? Lenders? Junk removal? Donation pick-up?
                            If it’s part of moving that’s our Business, it’s what we do! We pair you with trusted pros when and where you need them.
                            And, of course, we will walk you through the entire process ensuring you know what to expect, help you prepare, and be there along the way.</p>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div>

        <div class="container">
            <div class="row justy-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-thumb-up"></i>
                        </div>
                        <h4 class="mb-2">Moving</h4>
                        <p>Moving, whether across the street or across the country, can be stressful. But don’t worry, we know people, and now you do too!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-cup"></i>
                        </div>
                        <h4 class="mb-2">Priority</h4>
                        <p>Our priority is making sure that you are in the right hands throughout the process of buying, selling, or both, anywhere in the country.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-wallet"></i>
                        </div>
                        <h4 class="mb-2">Network</h4>
                        <p>Our network of real estate agents and lenders are ready to help with your transition to a new home, a new city, a new beginning.</p>
                    </div>
                </div>

                {{--            <div class="col-lg-3 col-sm-6 col-md-6">--}}
                {{--                <div class="text-center feature-block">--}}
                {{--                    <div class="img-icon-block mb-4">--}}
                {{--                        <i class="ti-dashboard"></i>--}}
                {{--                    </div>--}}
                {{--                    <h4 class="mb-2">Premium Services</h4>--}}
                {{--                    <p>We only compare market leaders with a reputation for service quality.</p>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div> <!-- / .container -->
    </section>

    <section class="section" id="what-to-expect">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="{{ asset('marketing/images/process/process-1.jpg') }}" alt="" class="img-fluid">

                        <h3>Local Expertise</h3>
                        <p>Relocation agents have in-depth knowledge of the area, including neighborhoods, amenities, and commute times, helping buyers make informed decisions quickly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="{{ asset('marketing/images/process/process-2.jpg') }}" alt="" class="img-fluid">

                        <h3>Streamlined Process</h3>
                        <p>We specialize in coordinating both short & long-distance moves and can handle logistics like finding great agents, lenders,
                            and other trusted local professionals (inspectors, movers, etc.)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="{{ asset('marketing/images/process/process-3.jpg') }}" alt="" class="img-fluid">

                        <h3>Personalized Support</h3>
                        <p>We understand the stress of moving and provide tailored guidance & piece of mind, making the transition smoother and less overwhelming.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">Moving? Don’t go it alone. Our relocation real estate experts make
                            your move seamless—from finding the right neighborhood to closing on your dream home.
                            We’re your local guide, personal advisor, and stress-reliever, all in one.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">Relo Agent Connect specializes in assisting individuals and families to ensure a smooth transition while moving.
                        Our #1 goal is making sure you find the ideal home, great neighborhoods, and convenient amenities—all with the very best people working to make it happen.
                        Whether you're relocating near or far, for work or family, or simply want a fresh start, we provide personalized support every step of the way.
                        We work with professionals who have expert knowledge of local markets in all areas—urban, suburban, or rural, we have you covered! Let our years
                        of experience working with first-time buyers, downsizers, and everything in between go to work for you!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="{{ asset('marketing/images/projects/p-1.jpg') }}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Maximized Home Value</h4>
                            <p>Relocation agents understand market trends and can guide you on pricing, staging, and timing to sell your home quickly and for top dollar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="{{ asset('marketing/images/projects/p-4.jpg') }}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Coordinated Selling & Buying</h4>
                            <p>They help align your home sale with your move, making sure timelines match and minimizing stress or overlap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="{{ asset('marketing/images/projects/p-3.jpg') }}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Access to a Trusted Network</h4>
                            <p>Our relocation agents work with a national or global network, connecting you with reliable agents, movers, and services in both your current and future locations.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        <img src="{{ asset('marketing/images/bg/banner_bg.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h4>We love what we do!</h4>
                        <h2>More than just service...</h2>
                        <p>Working with a relocation real estate agent to ensure a smooth, stress-free move by expertly
                            managing the sale of their current home while coordinating the transition to a new location. Our agents
                            provide market expertise, timing strategy, and trusted connections to streamline the entire relocation process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="success-stories">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1>What they say <br>about us</h1>
                        <p>Fantastic agent who even knew what we were looking for before we did!</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    {{--                                <img src="{{ asset('marketing/images/client/test-1.jpg') }}" alt="Testimonial author" class="img-fluid">--}}
                                    <div class="test-author-info">
                                        <h4>Balazs Kudelasz</h4>
                                        <h6>Michael is a great agent</h6>
                                    </div>
                                </div>

                                Michael is a great agent. He is very easy to work with, and he actually listens. We put him through a lot, many houses to see, deal with our wishlist, and accommodate
                                to our crazy schedule. Despite all of that he found us the perfect house. I highly recommend him!

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    {{--                                <img src="{{ asset('marketing/images/client/test-2.jpg') }}" alt="Testimonial author" class="img-fluid">--}}
                                    <div class="test-author-info">
                                        <h4>Joseph Yeskovich</h4>
                                        <h6>Great Job!</h6>
                                    </div>
                                </div>

                                Attention to detail and communicated with me thru the whole process.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    {{--                                <img src="{{ asset('marketing/images/client/test-3.jpg') }}" alt="Testimonial author" class="img-fluid">--}}
                                    <div class="test-author-info">
                                        <h4>Robert Prazer</h4>
                                        <h6>Mike is an exceptional agent who goes above and beyond.</h6>
                                    </div>
                                </div>

                                We have done multiple deals together from residential to rental properties to investment land for development. A diligent researcher to find properties that fit my
                                needs and also has great follow thru and the ability to negotiate to get deals done. I would recommend him highly for any and all real estate needs.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    {{--                                <img src="{{ asset('marketing/images/client/test-4.jpg') }}" alt="Testimonial author" class="img-fluid">--}}
                                    <div class="test-author-info">
                                        <h4>Kevin Phillips</h4>
                                        <h6>Michael went above and beyond with all he has help and done for me.</h6>
                                    </div>
                                </div>

                                I would very much recommend him to anyone as a real-estate agent. He's extremely knowledgeable, friendly and knows so much about home buying and what to look for when
                                purchasing a home for a buyer. All around great at what he does, very nice person and cares that he's gives you the best service he possibly can. I was very fortunate
                                that he turned out to be my agent and have now purchased a home in the area.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    {{--                                <img src="{{ asset('marketing/images/client/test-5.jpg') }}" alt="Testimonial author" class="img-fluid">--}}
                                    <div class="test-author-info">
                                        <h4>Irka Redelsperger</h4>
                                        <h6>Mike was a great resource for me, trying to move from out of state.</h6>
                                    </div>
                                </div>

                                Him growing up in Pittsburgh and having kids of his own, really made him the perfect real estate agent for me. He was easy to get a hold of and always helpful, even
                                after we moved in to our new home!

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="{{ asset('marketing/images/client/test-6.jpg') }}" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Jarrett Dickson</h4>
                                        <h6>Mike is great to work with!</h6>
                                    </div>
                                </div>

                                I have bought and sold more than a few homes with Mike. He responsive, friendly, realistic, and provides knowledgeable assessments of the property if it is your
                                personal home or for an investment. I had moved out of the state and Mike managed all the paperwork for me. He made the transactions the easiest I have had to deal
                                with. Years later I still reach out for advice and to check on potential investment properties.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="mb-5 pr-0">Start your stress-free journey home!</h2>

                        <p class="mb-0">
                            <a href="{{ route('contact.create') }}" class="btn btn-primary btn-circled">
                                Contact Us
                            </a>
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </div>

@endsection
