<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ LAConfigs::getByKey('sitename') }}</title>	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
    <meta name="author" content="{{ LAConfigs::getByKey('site_maker') }}">
    
    <meta property="og:title" content="{{ LAConfigs::getByKey('sitename') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ LAConfigs::getByKey('site_description') }}" />
    
    <meta property="og:url" content="{{ LAConfigs::getByKey('site_link') }}" />
    <meta property="og:image" content="{{ LAConfigs::getByKey('site_image') }}" />
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@laraadmin" />
    <meta name="twitter:creator" content="@laraadmin" />
    
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/la-assets/css/bootstrap.css') }}" rel="stylesheet">

	<link href="{{ asset('la-assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('/la-assets/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/la-assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/la-assets/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>{{ LAConfigs::getByKey('sitename') }}</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1>{{ LAConfigs::getByKey('sitename_part1') }} <b><a>{{ LAConfigs::getByKey('sitename_part2') }}</a></b></h1>
                <h3>{{ LAConfigs::getByKey('site_description') }}</h3>
                <h3><a href="{{ url('/login') }}" class="btn btn-lg btn-success">Get Started!</a></h3><br>
            </div>
            <div class="col-lg-2">
                <h5>Amazing Functionalities</h5>
                <p>for Modern Admin Panels</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/la-assets/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="{{ asset('/la-assets/img/app-bg.png') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/la-assets/img/arrow2.png') }}">
                <h5>Completely Packaged...</h5>
                <p>for Future expantion of Modules</p>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->


<section id="about" name="about"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>An Architecture designed To Excel</h1>
            <br>
            <br>
            <div class="col-lg-4">
                <i class="fa fa-cubes" style="font-size:100px;height:110px;"></i>
                <h3>Modular</h3>
                <p>Making Data Management fast and enjoyable.</p>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-paper-plane" style="font-size:100px;height:110px;"></i>
                <h3>Easy to Install</h3>
                <p>With single installation command.</p>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-cubes" style="font-size:100px;height:110px;"></i>
                <h3>Customizable</h3>
                <p>Easy to Manipulation the flows.</p>
            </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<!-- FEATURES WRAP -->
<div id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 centered">
                <img class="centered" src="{{ asset('/la-assets/img/mobile.png') }}" alt="">
            </div>

            <div class="col-lg-7">
				<h3 class="feature-title">What is LaraAdmin ?</h3><br>
				<ol class="features">
					<li><strong>CMS</strong> (Content Management System) &#8211; Manages Modules &amp; their Data</li>
					<li>Backend <strong>Admin Panel</strong> &#8211; Data can be used in front end applications with ease.</li>
					<li>A probable <strong>CRM</strong> System &#8211; Can be evolved into a CRM system like <a target="_blank" href="https://www.sugarcrm.com">SugarCRM</a></li>
				</ol><br>

				<h3 class="feature-title">Why LaraAdmin ?</h3><br>
                <ol class="features">
					<li><strong>Philosophy:</strong> Inspired by SugarCRM &amp; based on Advanced <strong>Data Types</strong> like Image, HTML, File, Dropdown, TagInput which makes developers job easy. See more in <a target="_blank" href="http://laraadmin.com/features">features</a></li>
					<li>Superior <strong>CRUD generation</strong> for Modules which generates Migration, Controller, Model and Views with single artisan command and integrates with Routes as as well.</li>
					<li><strong>Form Maker</strong> helper is provided for generating entire form with single function call with module name as single parameter. It also gives you freedom to customise form for every field by providing method to generate single field with parameters for customisations.</li>
					<li><b>Upload Manager </b>manages project files &amp; images which are integrated with your Module fields.</li>
					<li><strong>Menu Manager</strong> creates menu with Modules &amp; Custom Links likes WordPress</li>
					<li><strong>Online Code Editor</strong> allows developers to customise the generated Module Views &amp; Files.</li>
				</ol>
            </div>
        </div>
    </div><!--/ .container -->
</div><!--/ #features -->

<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Contact Us</h3><br>
            <p>
				Dwij IT Solutions,<br/>
				Web Development Company in Pune,<br/>
                B4, Patang Plaza Phase 5,<br/>
                Opp. PICT College,<br/>
                Katraj, Pune, India - 411046
            </p>
			<div class="contact-link"><i class="fa fa-envelope-o"></i> <a href="mailto:hello@laraadmin.com">hello@laraadmin.com</a></div>
			<div class="contact-link"><i class="fa fa-cube"></i> <a href="http://laraadmin.com">laraadmin.com</a></div>
			<div class="contact-link"><i class="fa fa-building"></i> <a href="http://dwijitsolutions.com">dwijitsolutions.com</a></div>
        </div>

        <div class="col-lg-7">
            <h3>Drop Us A Line</h3>
            <br>
		{!! Form::open(['route'=>'contactus.store']) !!}
                <div class="wrapper">
                    <div class="form-group {{ $errors->has('name_full') ? 'has-error' : '' }}">
                        <label for="name_full">Ваше имя</label>
                        {!! Form::text('name_full', old('name_full'), [ 'placeholder' => 'Имя','id' => 'name_full', 'class' => 'form-control', 'required' => 'required']) !!}
                        <span class="text-danger">{{ $errors->first('name_full') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('tel') ? 'has-error' : '' }}">
                        <label for="tel">Номер Вашего мобильного телефона</label>
                        {!! Form::number('tel', old('tel'), [ 'placeholder' => 'xxx-xxx-xx-xx','id' => 'tel', 'class' => 'form-control'])  !!}
                        <span class="text-danger">{{ $errors->first('tel') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Ваша почта</label>
                        {{ Form::email('email',  old('email'), [ 'placeholder' => 'Ваша почта','id' => 'email', 'class' => 'form-control'])  }}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="letter">Ваше обращение</label>
                        {{ Form::textarea('letter',  old('letter'), ['class' => 'form-control', 'id' => 'letter', 'placeholder' => 'Я бы хотел узнать стоимость....'])  }}
                        <span class="text-danger">{{ $errors->first('letter') }}</span>
                    </div>
                    {{ Form::submit('Отправить', ['class' => 'lolo' ] )}}
                </div>
            </div>
            <div class="modal-footer">
                {{ Form::button('Закрыть', ['class' => 'lolo', 'data-dismiss' => 'modal' ] )}}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2016. Powered by <a href="https://dwijitsolutions.com"><b>Dwij IT Solutions</b></a>
        </p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
