@if(isset($pages) && is_object($pages))
    @foreach($pages as $page)
        @if($loop->index%2 == 0)
            <!--Hero_Section-->
            <section id="hero_section" class="top_cont_outer">
                <div class="hero_wrapper">
                    <div class="container">
                        <div class="hero_section">
                            <div class="row">
                                <div class="col-lg-5 col-sm-7">
                                    <div class="top_left_cont zoomIn wow animated">
                                        {!! $page->text !!}
                                        <a href="{{route('page',array('alias'=>$page->alias))}}" class="read_more2">Read more</a> </div>
                                </div>
                                <div class="col-lg-7 col-sm-5">
                                    {!! Html::image('assets/img/'.$page->images,$page->name,array('class'=>'zoomIn wow animated')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Hero_Section-->
        @else
            <!--Aboutus-->
            <section id="aboutUs">
                <div class="inner_wrapper">
                    <div class="container">
                        <h2>{{ $page->name }}</h2>
                        <div class="inner_section">
                            <div class="row">
                                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                    {!! Html::image('assets/img/'.$page->images,$page->name,array('class'=>'img-circle delay-03s animated wow zoomIn')) !!}
                                </div>
                                <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                                    <div class=" delay-01s animated fadeInDown wow animated">
                                        {!! $page->text !!}
                                    </div>
                                    <div class="work_bottom"> <span>Want to know more..</span> <a href="{{route('pages',array('alias'=>$page->alias))}}" class="contact_btn">Contact Us</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Aboutus-->
        @endif

    @endforeach

@endif

@if(isset($services) && is_object($services))
    <!--Service-->
    <section  id="service">
        <div class="container">
            <h2>Services</h2>
            <div class="service_wrapper">
                @foreach($services as $service)
                    @if($loop->index==0||$loop->index%3==0)
                        <div class="row {{ ($loop->index !=0) ? 'borderTop':'' }}">
                    @endif
                            <div class="col-lg-4 {{ ($loop->index%3>0) ? 'borderLeft':'' }} {{ ($loop->index !=0) ? 'mrgTop':'' }}">
                                <div class="service_block">
                                    <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa {{ $service->icon }}"></i></span> </div>
                                    <h3 class="animated fadeInUp wow">{{ $service->name }}</h3>
                                    <p class="animated fadeInDown wow">{{ $service->text }}</p>
                                </div>
                            </div>
                    @if(($loop->index+1)%3==0)
                        </div>
                    @endif

                @endforeach
            </div>
        </div>
    </section>
    <!--Service-->
@endif

@if(isset($portfolios) && is_object($portfolios))
<!-- Portfolio -->
<section id="Portfolio" class="content">

    <!-- Container -->
    <div class="container portfolio_title">

        <!-- Title -->
        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
        <!--/Title -->

    </div>
    <!-- Container -->

    <div class="portfolio-top"></div>

    <!-- Portfolio Filters -->
    <div class="portfolio">

        <div id="filters" class="sixteen columns">
            <ul class="clearfix">
                <li><a id="all" href="#" data-filter="*" class="active">
                        <h5>All</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".prototype">
                        <h5>Prototype</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".design">
                        <h5>Design</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".android">
                        <h5>Android</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".appleIOS">
                        <h5>Apple IOS</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".web">
                        <h5>Web App</h5>
                    </a></li>
            </ul>
        </div>
        <!--/Portfolio Filters -->

        <!-- Portfolio Wrapper -->
        <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
            @foreach($portfolios as $portfolio)
                <!-- Portfolio Item -->
                <div style="position: absolute; left: 0; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   {{$portfolio->filter}} isotope-item">
                    <div class="portfolio_img">
                        {!! Html::image('assets/img/'.$portfolio->images,$portfolio->name) !!}

                    </div>
                    <div class="item_overlay">
                        <div class="item_info">
                            <h4 class="project_name">{{ $portfolio->name }}</h4>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item -->
            @endforeach
        </div>
        <!--/Portfolio Wrapper -->

    </div>
    <!--/Portfolio Filters -->

    <div class="portfolio_btm"></div>


    <div id="project_container">
        <div class="clear"></div>
        <div id="project_data"></div>
    </div>


</section>
<!--/Portfolio -->
@endif
<!--client_logos-->
@if(isset($clients) && is_object($clients))
<section class="page_section" id="clients"><!--page_section-->
    <h2>Clients</h2>
    <!--page_section-->
    <div class="client_logos">
        <div class="container">
            <ul class="fadeInRight animated wow">
                @foreach($clients as $client)
                    <li><a href="javascript:void(0)">
                            {!! Html::image('assets/img/'.$client->images,$client->name) !!}
                        </a></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--client_logos-->
@endif
<!--main-section team-start-->
@if(isset($peoples) && is_object($peoples))
<section class="page_section team" id="team">
    <div class="container">
        <h2>Team</h2>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
        <div class="team_section clearfix">
            @foreach($peoples as $people)
                <div class="team_area">
                    <div class="team_box wow fadeInDown delay-03s">
                        <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                        {!! Html::image('assets/img/'.$people->images,$people->name) !!}
                        <ul>
                            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-03s">{{ $people->name }}</h3>
                    <span class="wow fadeInDown delay-03s">{{ $people->position }}</span>
                    <p class="wow fadeInDown delay-03s">{{  $people->text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!--/Team-->