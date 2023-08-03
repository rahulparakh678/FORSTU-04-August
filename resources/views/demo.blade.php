@extends('layouts.ngo')

@section('content')

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<div id="home" class="jumbotron jumbotron-register">
    	<div id="particles-js"><canvas class="particles-js-canvas-el" width="1409" height="456" style="width: 100%; height: 100%;"></canvas></div><!-- /.particles div -->
		<div class="container center-vertically-holder">
			<div class="center-vertically">
				<div class="col-sm-7 col-lg-6 mt40-xs">
					<h1 class="mb30 no-margin-top scaleReveal" data-sr-id="45" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; ">
						A <strong>Bootdey.com</strong> page
					</h1>
					<p class="bottomReveal" data-sr-id="1" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras est urna, imperdiet eget sem at, pellentesque cursusiz elit. Etiam id ante et elit interdum sollicitudin.</p>
					<p class="mb30 bottomReveal" data-sr-id="2" style="">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem atez.</p>
				</div>

				<div class="col-sm-5 col-lg-5 col-lg-offset-1 mt40-xs">
					<form role="form" id="register_form" class="register-form mb40-xs">
                        <h3 class="no-margin-top mb20">Register For Free</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group no-margin-bottom mt20">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
				</div><!-- /.column -->
			</div><!-- /.vertical center -->
		</div><!-- /.container -->
	</div>
<style type="text/css">
	body{
margin-top:20px;
background:#eee;
}
/* =Jumbotron Register
-------------------------------------------------------------- */
.jumbotron.jumbotron-register {
    height: 100%;
    width: 100%;
    font-family: 'Roboto', sans-serif;
    color: #fff;
    padding-top: 0;
    padding-bottom: 0;
    position: relative;
    margin:0;
}

.jumbotron.jumbotron-register a {
    color: #fff;
}

.register-form {
    background-color: #FFFFFF;
    padding: 40px;
    border-radius: 5px;
    border: 2px solid #eee;
}

.register-form h3 {
    color: #414141;
}

.jumbotron.jumbotron-register h1 { 
    font-size:59px; 
}

/* =Hello Intro
-------------------------------------------------------------- */
#hello-intro h2 {
    font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	font-size: 42px;
	color: #fff;
	text-transform: uppercase;
	border-bottom: 1px solid #fff;
	padding-bottom: 4px;
	display: inline-block;
}

#hello-intro h3 {
	font-family: 'Roboto', sans-serif;
	font-weight: 100;
	font-size: 25px;
	color: #b0b0b0;
}

#hello-intro h3 strong {
	font-weight: 300;
}

#particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url(http://aliensix.com/particles-1.3/HTML/css/style.css);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
    background: #6819e8;
    background: -moz-linear-gradient(left, #6819e8 0%, #7437d0 35%, #615fde 68%, #6980f2 100%);
    background: -webkit-linear-gradient(left, #6819e8 0%,#7437d0 35%,#615fde 68%,#6980f2 100%);
    background: linear-gradient(to right, #6819e8 0%,#7437d0 35%,#615fde 68%,#6980f2 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6819e8', endColorstr='#6980f2',GradientType=1 );
}
</style>
<script type="text/javascript">
	particlesJS("particles-js", {
    "particles": {
    	"number": {
			"value": 80,
			"density": {
				"enable": true,
				"value_area": 800
			}
		},
		"color": {
			"value": "#ffffff"
		},
		"shape": {
			"type": "circle",
			"stroke": {
				"width": 0,
				"color": "#000000"
			},
			"polygon": {
				"nb_sides": 5
			},
			"image": {
				"src": "img/github.svg",
				"width": 100,
				"height": 100
			}
		},
		"opacity": {
			"value": 0.5,
			"random": false,
			"anim": {
				"enable": false,
				"speed": 1,
				"opacity_min": 0.1,
				"sync": false
			}
		},
		"size": {
			"value": 3,
			"random": true,
			"anim": {
				"enable": false,
				"speed": 40,
				"size_min": 0.1,
				"sync": false
			}
		},
		"line_linked": {
			"enable": true,
			"distance": 150,
			"color": "#ffffff",
			"opacity": 0.4,
			"width": 1
		},
		"move": {
			"enable": true,
			"speed": 6,
			"direction": "none",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
				"enable": false,
				"rotateX": 600,
				"rotateY": 1200
			}
		}
	},
	"interactivity": {
		"detect_on": "canvas",
		"events": {
			"onhover": {
				"enable": true,
				"mode": "grab"
			},
			"onclick": {
				"enable": true,
				"mode": "push"
			},
			"resize": true
		},
		"modes": {
			"grab": {
				"distance": 140,
				"line_linked": {
					"opacity": 1
				}
			},
			"bubble": {
				"distance": 400,
				"size": 40,
				"duration": 2,
				"opacity": 8,
				"speed": 3
			},
			"repulse": {
				"distance": 200,
				"duration": 0.4
			},
			"push": {
				"particles_nb": 4
			},
			"remove": {
				"particles_nb": 2
			}
		}
	},
	"retina_detect": true
});
</script>
@endsection
