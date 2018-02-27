<?php

/* SanteBundle:Default:Route.html.twig */
class __TwigTemplate_2a699d5bae05583bf63b47ee4bc9a819c6f582a91cca819a4834518e1be1b8cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SanteBundle:Default:Route.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_463adbd05b752c7c77f59761a7634eda7a7dbc63709bec44677dd4766d060665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463adbd05b752c7c77f59761a7634eda7a7dbc63709bec44677dd4766d060665->enter($__internal_463adbd05b752c7c77f59761a7634eda7a7dbc63709bec44677dd4766d060665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:Route.html.twig"));

        $__internal_7789df111ebdba4830bb4720610f024ec445d174219fd4b898f979b356b5e849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7789df111ebdba4830bb4720610f024ec445d174219fd4b898f979b356b5e849->enter($__internal_7789df111ebdba4830bb4720610f024ec445d174219fd4b898f979b356b5e849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:Route.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463adbd05b752c7c77f59761a7634eda7a7dbc63709bec44677dd4766d060665->leave($__internal_463adbd05b752c7c77f59761a7634eda7a7dbc63709bec44677dd4766d060665_prof);

        
        $__internal_7789df111ebdba4830bb4720610f024ec445d174219fd4b898f979b356b5e849->leave($__internal_7789df111ebdba4830bb4720610f024ec445d174219fd4b898f979b356b5e849_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_8414b60440347de754fe659939bc321dfdcc687e5e74113442535575cb5782e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8414b60440347de754fe659939bc321dfdcc687e5e74113442535575cb5782e1->enter($__internal_8414b60440347de754fe659939bc321dfdcc687e5e74113442535575cb5782e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6a3c2475e26cd418e65f0be4d7ecae16b9808b1bcd7ce8ac67b24121866210c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a3c2475e26cd418e65f0be4d7ecae16b9808b1bcd7ce8ac67b24121866210c->enter($__internal_b6a3c2475e26cd418e65f0be4d7ecae16b9808b1bcd7ce8ac67b24121866210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <!-- Jquery Ui Date Picker -->
    <!-- Range Slider Start -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Range Slider End -->
    <!-- Jquery Ui Date Picker -->
    <!-- Boostrap Time Picker -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Boostrap Time Picker -->
    <!-- Selectric Start -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/selectric.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Selectric End -->
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'))
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script><!--=== Windows Phone JS Code End ===-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <![endif]-->
";
        
        $__internal_b6a3c2475e26cd418e65f0be4d7ecae16b9808b1bcd7ce8ac67b24121866210c->leave($__internal_b6a3c2475e26cd418e65f0be4d7ecae16b9808b1bcd7ce8ac67b24121866210c_prof);

        
        $__internal_8414b60440347de754fe659939bc321dfdcc687e5e74113442535575cb5782e1->leave($__internal_8414b60440347de754fe659939bc321dfdcc687e5e74113442535575cb5782e1_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae88cba3d065a9563a999018b503f85c1d44c922e7aeb1b549cb26c71c7e331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae88cba3d065a9563a999018b503f85c1d44c922e7aeb1b549cb26c71c7e331->enter($__internal_1ae88cba3d065a9563a999018b503f85c1d44c922e7aeb1b549cb26c71c7e331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_158bfc47da38e39cdecad1d2ae3cf859a0b682dcd8a6a0bf4dde960b90a4ed0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158bfc47da38e39cdecad1d2ae3cf859a0b682dcd8a6a0bf4dde960b90a4ed0d->enter($__internal_158bfc47da38e39cdecad1d2ae3cf859a0b682dcd8a6a0bf4dde960b90a4ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "    <!-- Content Start -->
    <section class=\"content contact-pg clearfix\">
        <!-- Banner Start -->
        <div class=\"banner inner-banner clearfix\">
            <img alt=\"BANNER\" class=\"img-responsive\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slider-img10.jpg"), "html", null, true);
        echo "\">
            <div class=\"banner-overlay\"></div><!-- Banner Detail Start -->
            <div class=\"banner-desc clearfix\">
                <div class=\"container\">
                    <h1>Providing Total Health Care Solution</h1>
                </div>
            </div><!-- Banner Detail End -->
        </div><!-- Banner End -->
        <!-- Inner Pages Start -->
        <div class=\"inner-content clearfix\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-12 col-md-12 \">
                        <!-- Sidebar Widget Start -->
                        <div class=\"sidebar-widget clearfix\">
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Opening Hover Start -->
                                <div class=\"opening-hours light-green-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Opening Hours</h6>
                                    </div><!-- Widget Title End -->
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>Monday - Friday:</td>
                                            <td>8.30 - 18.30</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday:</td>
                                            <td>10.30 - 16.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday:</td>
                                            <td>10.30 - 16:30</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- Opening Hover End -->
                            </div><!-- Widget Block End -->
                            <form method=\"POST\" action=\"#\">
                                <input type=\"hidden\" name=\"total\" id=\"total\" value=\"\">
                                <h3 style=\"color: deepskyblue\">Itinéraire</h3><br>
                                <h4 style=\"color: black\">Point de départ</h4>
                                <input type=\"text\" name=\"depart\" placeholder=\"Départ\" id=\"depart\"  required/><br><br>
                                <input type=\"hidden\" name=\"l1\"  id=\"l1\" />
                                <input type=\"hidden\" name=\"la1\"  id=\"la1\" />


                                <input type=\"hidden\" name=\"l2\"  id=\"l2\" value=";
        // line 85
        echo $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "latitude", array());
        echo " />
                                <input type=\"hidden\" name=\"la2\"  id=\"la2\" value=";
        // line 86
        echo $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "longitude", array());
        echo "/>
                                <div id=\"floating-panel\" >
                                    <select id=\"mode\" hidden >
                                        <option value=\"DRIVING\" selected>Driving</option>
                                        <option value=\"WALKING\">Walking</option>
                                        <option value=\"BICYCLING\">Bicycling</option>
                                        <option value=\"TRANSIT\">Transit</option>
                                    </select>
                                </div>
                            </form>

                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Map Block Start -->

                                    <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>






                                <script>
                                    var infowindow;
                                    var map;
                                    function initMap() {

                                        google.maps.event.addDomListener(window,'load', initialize);
                                        google.maps.event.addDomListener(window,'load', initialize2);


                                        var directionsDisplay = new google.maps.DirectionsRenderer;
                                        var directionsService = new google.maps.DirectionsService;

                                        map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 7,
                                            center: {lat: 35.6759137, lng: 10.0919243}
                                        });
                                        directionsDisplay.setMap(map);
                                        var icons = {
                                            Relaxation: {
                                                icon:'";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/relax.png"), "html", null, true);
        echo "'
                                            },
                                            Health: {
                                                icon:'";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/health.png"), "html", null, true);
        echo "'
                                            },
                                            Sport: {
                                                icon:'";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sport.png"), "html", null, true);
        echo "'
                                            }
                                        };

                                        var features = [

                                            {position:{lat:";
        // line 139
        echo $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "latitude", array());
        echo ",lng:";
        echo $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "longitude", array());
        echo "},
                                                type:'";
        // line 140
        echo $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "icon", array());
        echo "',
                                                content:'<div class=\"panel panel-primary\">'+
                                                '<!-- Default panel contents -->'+
                                                '<div class=\"panel-heading\"><h4><strong><center>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "nom", array()), "html", null, true);
        echo "</center></strong></h4></div>'+
                                                '<div class=\"panel-body\">'+
                                                '<img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Estabmishment/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "nameImage", array()), "html", null, true);
        echo "\" style=\"width: 200px;height: 150px\">'+
                                                '</div>'+

                                                '<!-- List group -->'+
                                                '<ul class=\"list-group\">'+
                                                '<li class=\"list-group-item\"><h5><strong><center>Address:</center></strong></h5><center>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "adress", array()), "html", null, true);
        echo "</center></li>'+
                                                '<li class=\"list-group-item\"><h5><strong><center>Phone:</center></strong></h5><center>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "telephone", array()), "html", null, true);
        echo "</center></li>'+
                                                '<li class=\"list-group-item\"><h5><strong><center>WebSite:</center></strong></h5><center><a href=";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "web", array()), "html", null, true);
        echo " target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "web", array()), "html", null, true);
        echo "</a></center></li>'+
                                                '<li class=\"list-group-item\"><h5><strong><center>Rating:</center></strong></h5><center>";
        // line 153
        if (($this->getAttribute((isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "rating", array()) == 0)) {
            echo "'+
                                                '<div class=\"rating\"><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '";
        } elseif (($this->getAttribute(        // line 155
(isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "rating", array()) == 1)) {
            echo "'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '";
        } elseif (($this->getAttribute(        // line 157
(isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "rating", array()) == 2)) {
            echo "'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '";
        } elseif (($this->getAttribute(        // line 159
(isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "rating", array()) == 3)) {
            echo "'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '";
        } elseif (($this->getAttribute(        // line 161
(isset($context["estab"]) ? $context["estab"] : $this->getContext($context, "estab")), "rating", array()) == 4)) {
            echo "'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div></div>'+
                                                '";
        } else {
            // line 163
            echo "'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div></div>'+
                                                '";
        }
        // line 165
        echo "</center></li>'+
                                                '</ul>'+
                                                '</div>'
                                            }
                                        ];
                                        features.forEach(function(feature) {
                                            var marker = new google.maps.Marker({
                                                position: feature.position,
                                                icon: icons[feature.type].icon,
                                                content: feature.content,
                                                map: map
                                            });
                                            var infoWindow = new google.maps.InfoWindow({
                                                content:feature.content
                                            });
                                            marker.addListener('click',function(){
                                                infoWindow.open(map, marker)
                                            });
                                        });



                                        /*   calculateAndDisplayRoute(directionsService, directionsDisplay,\"35.6759137\",\"10.0919243\",\"36.72783\",\"10.70979\");
                                         document.getElementById('mode').addEventListener('change', function() {
                                         calculateAndDisplayRoute(directionsService, directionsDisplay,\"35.6759137\",\"10.0919243\",\"36.72783\",\"10.70979\");
                                         });*/

                                        document.getElementById('depart').addEventListener('change', function() {
                                            setTimeout(function(){

                                                var x1 = document.getElementById('l1').value;
                                                var x2 = document.getElementById('la1').value;
                                                var y1 = document.getElementById('l2').value;
                                                var y2 = document.getElementById('la2').value;
                                                var beachMarker = new google.maps.Marker({
                                                    position: {lat: parseFloat(x1), lng:  parseFloat(x2)},
                                                    map: map,

                                                });

                                                calculateAndDisplayRoute(directionsService, directionsDisplay,x1,x2,y1,y2);
                                            }, 500);


                                        });



                                        document.getElementById('destination').addEventListener('change', function() {
                                            setTimeout(function(){
                                                var x1 = document.getElementById('l1').value;
                                                var x2 = document.getElementById('la1').value;
                                                var y1 = document.getElementById('l2').value;
                                                var y2 = document.getElementById('la2').value;
                                                calculateAndDisplayRoute(directionsService, directionsDisplay,x1,x2,y1,y2);
                                            }, 500);
                                        });

                                        document.getElementById('destination').addEventListener('change', function() {
                                            setTimeout(function(){
                                                var x1 = document.getElementById('l1').value;
                                                var x2 = document.getElementById('la1').value;
                                                var y1 = document.getElementById('l2').value;
                                                var y2 = document.getElementById('la2').value;
                                                infowindow = new google.maps.InfoWindow();
                                                var Xlat=(parseFloat(x1)+parseFloat(y1))/2;
                                                var Xlong=(parseFloat(x2)+parseFloat(y2))/2;
                                                console.log(Xlong);
                                                console.log(Xlat);
                                                var lat_max=parseFloat(x1) ;
                                                var lat_min=parseFloat(y1);
                                                var lng_max=parseFloat(x2);
                                                var lng_min=parseFloat(y2);
                                                var service = new google.maps.places.PlacesService(map);
                                                service.nearbySearch({
                                                    location: new google.maps.LatLng(((lat_max + lat_min) / 2.0),((lng_max + lng_min) / 2.0)),
                                                    radius: 10000,
                                                    types: ['cafe', 'food', 'restaurant']

                                                }, callback);
                                            }, 500);
                                        });
                                    }



                                    function calculateAndDisplayRoute(directionsService, directionsDisplay,v1,v2,d1,d2) {
                                        var selectedMode = document.getElementById('mode').value;

                                        directionsService.route({
                                            origin: {lat: parseFloat(v1), lng: parseFloat(v2)},  // Haight.
                                            destination: {lat: parseFloat(d1), lng: parseFloat(d2)},  // Ocean Beach.
                                            travelMode: google.maps.TravelMode[selectedMode]
                                        }, function (response, status) {
                                            if (status === google.maps.DirectionsStatus.OK) {
                                                directionsDisplay.setDirections(response);
                                                computeTotalDistance(response);
                                            } else {
                                                //window.alert('Directions request failed due to ' + status);
                                            }
                                        });



                                    }

                                    function callback(results, status) {
                                        if (status === google.maps.places.PlacesServiceStatus.OK) {
                                            for (var i = 0; i < 5; i++) {
                                                createMarker(results[i]);
                                                //   console.log(results[i].name);
                                            }
                                            var p1 = results[1].name ;
                                            var p2 = results[2].name ;
                                            var p3 = results[3].name ;
                                            var p4 = results[4].name ;
                                            var p5 = results[5].name ;
                                            console.log(p4)

                                            var x = document.getElementById(\"select\");
                                            var option1 = document.createElement(\"option\");
                                            var option2 = document.createElement(\"option\");
                                            var option3 = document.createElement(\"option\");
                                            var option4 = document.createElement(\"option\");
                                            var option5 = document.createElement(\"option\");
                                            option.text = p1;
                                            option2.text = p2;
                                            option3.text = p3;
                                            option4.text = p4;
                                            option5.text = p5;
                                            x.add(option);
                                            x.add(option2);
                                            x.add(option3);
                                            x.add(option4);
                                            x.add(option5);


                                            console.log(p1+\"\"+p2);
                                            document.getElementById(\"p1\").value = p1 ;
                                            document.getElementById(\"p2\").value = p2 ;
                                            document.getElementById(\"p1\").innerHTML = p1 ;
                                            document.getElementById(\"p2\").innerHTML = p2 ;
                                            /*  document.getElementById(\"p3\").value = p3 ;
                                             document.getElementById(\"p4\").value = p4 ;
                                             document.getElementById(\"p5\").value = p5 ;*/
                                        }
                                    }

                                    function createMarker(place) {
                                        var placeLoc = place.geometry.location;


                                        var marker = new google.maps.Marker({
                                            Map: map,
                                            position: place.geometry.location
                                        });

                                        google.maps.event.addListener(marker, 'click', function() {
                                            infowindow.setContent(place.name);
                                            infowindow.open(map, this);
                                        });
                                    }





                                </script>






                                <script>




                                    function initialize (){
                                        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('depart'));
                                        google.maps.event.addListener(autocomplete,'place_changed',function(){

                                            var places =autocomplete.getPlace();

                                            var l1= places.geometry.location.lat() ;

                                            var la1= places.geometry.location.lng() ;


                                            document.getElementById('l1').value=l1;
                                            document.getElementById('la1').value=la1;
                                            console.log(\"teest1\");

                                        });

                                    }
                                    function initialize2 (){
                                        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('destination'));
                                        google.maps.event.addListener(autocomplete,'place_changed',function(){

                                            var places =autocomplete.getPlace();

                                            var l2= places.geometry.location.lat() ;

                                            var la2= places.geometry.location.lng() ;


                                            document.getElementById('l2').value=l2;
                                            document.getElementById('la2').value=la2;

                                        });

                                    }

                                    function computeTotalDistance(result) {
                                        var total = 0;
                                        var myroute = result.routes[0];
                                        for (i = 0; i < myroute.legs.length; i++) {
                                            total += myroute.legs[i].distance.value;
                                        }
                                        total = total / 1000.
                                        document.getElementById('total').value=total;
                                    }

                                </script>


                                    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCm3UzImcv8neFVa4l6a6idoNcXz4SaNa8&callback=initMap&libraries=geometry,places\">
                                    </script>

                                <!-- Map Block End -->
                            </div><!-- Widget Block End -->
                        </div><!-- Sidebar Widget End -->
                    </div><!--/.col-sm-12 col-md-4 col-lg-3-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Inner Pages End -->
    </section><!-- Content End -->





";
        
        $__internal_158bfc47da38e39cdecad1d2ae3cf859a0b682dcd8a6a0bf4dde960b90a4ed0d->leave($__internal_158bfc47da38e39cdecad1d2ae3cf859a0b682dcd8a6a0bf4dde960b90a4ed0d_prof);

        
        $__internal_1ae88cba3d065a9563a999018b503f85c1d44c922e7aeb1b549cb26c71c7e331->leave($__internal_1ae88cba3d065a9563a999018b503f85c1d44c922e7aeb1b549cb26c71c7e331_prof);

    }

    public function getTemplateName()
    {
        return "SanteBundle:Default:Route.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 165,  301 => 163,  295 => 161,  290 => 159,  285 => 157,  280 => 155,  275 => 153,  269 => 152,  265 => 151,  261 => 150,  252 => 145,  247 => 143,  241 => 140,  235 => 139,  226 => 133,  220 => 130,  214 => 127,  170 => 86,  166 => 85,  112 => 34,  106 => 30,  97 => 29,  69 => 11,  64 => 9,  58 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block head %}
    <!-- Jquery Ui Date Picker -->
    <!-- Range Slider Start -->
    <link href=\"{{ asset('css/jquery-ui.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/jquery-ui-slider-pips.css')}}\" rel=\"stylesheet\"><!-- Range Slider End -->
    <!-- Jquery Ui Date Picker -->
    <!-- Boostrap Time Picker -->
    <link href=\"{{ asset('css/jquery.timepicker.css')}}\" rel=\"stylesheet\"><!-- Boostrap Time Picker -->
    <!-- Selectric Start -->
    <link href=\"{{ asset('css/selectric.css')}}\" rel=\"stylesheet\"><!-- Selectric End -->
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'))
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script><!--=== Windows Phone JS Code End ===-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <![endif]-->
{% endblock %}
{% block body %}
    <!-- Content Start -->
    <section class=\"content contact-pg clearfix\">
        <!-- Banner Start -->
        <div class=\"banner inner-banner clearfix\">
            <img alt=\"BANNER\" class=\"img-responsive\" src=\"{{ asset('images/slider-img10.jpg')}}\">
            <div class=\"banner-overlay\"></div><!-- Banner Detail Start -->
            <div class=\"banner-desc clearfix\">
                <div class=\"container\">
                    <h1>Providing Total Health Care Solution</h1>
                </div>
            </div><!-- Banner Detail End -->
        </div><!-- Banner End -->
        <!-- Inner Pages Start -->
        <div class=\"inner-content clearfix\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-12 col-md-12 \">
                        <!-- Sidebar Widget Start -->
                        <div class=\"sidebar-widget clearfix\">
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Opening Hover Start -->
                                <div class=\"opening-hours light-green-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Opening Hours</h6>
                                    </div><!-- Widget Title End -->
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>Monday - Friday:</td>
                                            <td>8.30 - 18.30</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday:</td>
                                            <td>10.30 - 16.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday:</td>
                                            <td>10.30 - 16:30</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- Opening Hover End -->
                            </div><!-- Widget Block End -->
                            <form method=\"POST\" action=\"#\">
                                <input type=\"hidden\" name=\"total\" id=\"total\" value=\"\">
                                <h3 style=\"color: deepskyblue\">Itinéraire</h3><br>
                                <h4 style=\"color: black\">Point de départ</h4>
                                <input type=\"text\" name=\"depart\" placeholder=\"Départ\" id=\"depart\"  required/><br><br>
                                <input type=\"hidden\" name=\"l1\"  id=\"l1\" />
                                <input type=\"hidden\" name=\"la1\"  id=\"la1\" />


                                <input type=\"hidden\" name=\"l2\"  id=\"l2\" value={{ estab.latitude| raw }} />
                                <input type=\"hidden\" name=\"la2\"  id=\"la2\" value={{ estab.longitude| raw }}/>
                                <div id=\"floating-panel\" >
                                    <select id=\"mode\" hidden >
                                        <option value=\"DRIVING\" selected>Driving</option>
                                        <option value=\"WALKING\">Walking</option>
                                        <option value=\"BICYCLING\">Bicycling</option>
                                        <option value=\"TRANSIT\">Transit</option>
                                    </select>
                                </div>
                            </form>

                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Map Block Start -->

                                    <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>






                                <script>
                                    var infowindow;
                                    var map;
                                    function initMap() {

                                        google.maps.event.addDomListener(window,'load', initialize);
                                        google.maps.event.addDomListener(window,'load', initialize2);


                                        var directionsDisplay = new google.maps.DirectionsRenderer;
                                        var directionsService = new google.maps.DirectionsService;

                                        map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 7,
                                            center: {lat: 35.6759137, lng: 10.0919243}
                                        });
                                        directionsDisplay.setMap(map);
                                        var icons = {
                                            Relaxation: {
                                                icon:'{{ asset('images/relax.png') }}'
                                            },
                                            Health: {
                                                icon:'{{ asset('images/health.png') }}'
                                            },
                                            Sport: {
                                                icon:'{{ asset('images/sport.png') }}'
                                            }
                                        };

                                        var features = [

                                            {position:{lat:{{ estab.latitude| raw }},lng:{{ estab.longitude| raw }}},
                                                type:'{{ estab.icon| raw }}',
                                                content:'<div class=\"panel panel-primary\">'+
                                                '<!-- Default panel contents -->'+
                                                '<div class=\"panel-heading\"><h4><strong><center>{{ estab.nom }}</center></strong></h4></div>'+
                                                '<div class=\"panel-body\">'+
                                                '<img src=\"{{ asset('images/Estabmishment/') }}{{ estab.nameImage }}\" style=\"width: 200px;height: 150px\">'+
                                                '</div>'+

                                                '<!-- List group -->'+
                                                '<ul class=\"list-group\">'+
                                                '<li class=\"list-group-item\"><h5><strong><center>Address:</center></strong></h5><center>{{ estab.adress }}</center></li>'+
                                                '<li class=\"list-group-item\"><h5><strong><center>Phone:</center></strong></h5><center>{{ estab.telephone }}</center></li>'+
                                                '<li class=\"list-group-item\"><h5><strong><center>WebSite:</center></strong></h5><center><a href={{ estab.web }} target=\"_blank\">{{ estab.web }}</a></center></li>'+
                                                '<li class=\"list-group-item\"><h5><strong><center>Rating:</center></strong></h5><center>{% if estab.rating==0 %}'+
                                                '<div class=\"rating\"><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '{% elseif  estab.rating==1 %}'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '{% elseif  estab.rating==2 %}'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '{% elseif  estab.rating==3 %}'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                '{% elseif  estab.rating==4 %}'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div></div>'+
                                                '{% else %}'+
                                                ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div></div>'+
                                                '{% endif %}</center></li>'+
                                                '</ul>'+
                                                '</div>'
                                            }
                                        ];
                                        features.forEach(function(feature) {
                                            var marker = new google.maps.Marker({
                                                position: feature.position,
                                                icon: icons[feature.type].icon,
                                                content: feature.content,
                                                map: map
                                            });
                                            var infoWindow = new google.maps.InfoWindow({
                                                content:feature.content
                                            });
                                            marker.addListener('click',function(){
                                                infoWindow.open(map, marker)
                                            });
                                        });



                                        /*   calculateAndDisplayRoute(directionsService, directionsDisplay,\"35.6759137\",\"10.0919243\",\"36.72783\",\"10.70979\");
                                         document.getElementById('mode').addEventListener('change', function() {
                                         calculateAndDisplayRoute(directionsService, directionsDisplay,\"35.6759137\",\"10.0919243\",\"36.72783\",\"10.70979\");
                                         });*/

                                        document.getElementById('depart').addEventListener('change', function() {
                                            setTimeout(function(){

                                                var x1 = document.getElementById('l1').value;
                                                var x2 = document.getElementById('la1').value;
                                                var y1 = document.getElementById('l2').value;
                                                var y2 = document.getElementById('la2').value;
                                                var beachMarker = new google.maps.Marker({
                                                    position: {lat: parseFloat(x1), lng:  parseFloat(x2)},
                                                    map: map,

                                                });

                                                calculateAndDisplayRoute(directionsService, directionsDisplay,x1,x2,y1,y2);
                                            }, 500);


                                        });



                                        document.getElementById('destination').addEventListener('change', function() {
                                            setTimeout(function(){
                                                var x1 = document.getElementById('l1').value;
                                                var x2 = document.getElementById('la1').value;
                                                var y1 = document.getElementById('l2').value;
                                                var y2 = document.getElementById('la2').value;
                                                calculateAndDisplayRoute(directionsService, directionsDisplay,x1,x2,y1,y2);
                                            }, 500);
                                        });

                                        document.getElementById('destination').addEventListener('change', function() {
                                            setTimeout(function(){
                                                var x1 = document.getElementById('l1').value;
                                                var x2 = document.getElementById('la1').value;
                                                var y1 = document.getElementById('l2').value;
                                                var y2 = document.getElementById('la2').value;
                                                infowindow = new google.maps.InfoWindow();
                                                var Xlat=(parseFloat(x1)+parseFloat(y1))/2;
                                                var Xlong=(parseFloat(x2)+parseFloat(y2))/2;
                                                console.log(Xlong);
                                                console.log(Xlat);
                                                var lat_max=parseFloat(x1) ;
                                                var lat_min=parseFloat(y1);
                                                var lng_max=parseFloat(x2);
                                                var lng_min=parseFloat(y2);
                                                var service = new google.maps.places.PlacesService(map);
                                                service.nearbySearch({
                                                    location: new google.maps.LatLng(((lat_max + lat_min) / 2.0),((lng_max + lng_min) / 2.0)),
                                                    radius: 10000,
                                                    types: ['cafe', 'food', 'restaurant']

                                                }, callback);
                                            }, 500);
                                        });
                                    }



                                    function calculateAndDisplayRoute(directionsService, directionsDisplay,v1,v2,d1,d2) {
                                        var selectedMode = document.getElementById('mode').value;

                                        directionsService.route({
                                            origin: {lat: parseFloat(v1), lng: parseFloat(v2)},  // Haight.
                                            destination: {lat: parseFloat(d1), lng: parseFloat(d2)},  // Ocean Beach.
                                            travelMode: google.maps.TravelMode[selectedMode]
                                        }, function (response, status) {
                                            if (status === google.maps.DirectionsStatus.OK) {
                                                directionsDisplay.setDirections(response);
                                                computeTotalDistance(response);
                                            } else {
                                                //window.alert('Directions request failed due to ' + status);
                                            }
                                        });



                                    }

                                    function callback(results, status) {
                                        if (status === google.maps.places.PlacesServiceStatus.OK) {
                                            for (var i = 0; i < 5; i++) {
                                                createMarker(results[i]);
                                                //   console.log(results[i].name);
                                            }
                                            var p1 = results[1].name ;
                                            var p2 = results[2].name ;
                                            var p3 = results[3].name ;
                                            var p4 = results[4].name ;
                                            var p5 = results[5].name ;
                                            console.log(p4)

                                            var x = document.getElementById(\"select\");
                                            var option1 = document.createElement(\"option\");
                                            var option2 = document.createElement(\"option\");
                                            var option3 = document.createElement(\"option\");
                                            var option4 = document.createElement(\"option\");
                                            var option5 = document.createElement(\"option\");
                                            option.text = p1;
                                            option2.text = p2;
                                            option3.text = p3;
                                            option4.text = p4;
                                            option5.text = p5;
                                            x.add(option);
                                            x.add(option2);
                                            x.add(option3);
                                            x.add(option4);
                                            x.add(option5);


                                            console.log(p1+\"\"+p2);
                                            document.getElementById(\"p1\").value = p1 ;
                                            document.getElementById(\"p2\").value = p2 ;
                                            document.getElementById(\"p1\").innerHTML = p1 ;
                                            document.getElementById(\"p2\").innerHTML = p2 ;
                                            /*  document.getElementById(\"p3\").value = p3 ;
                                             document.getElementById(\"p4\").value = p4 ;
                                             document.getElementById(\"p5\").value = p5 ;*/
                                        }
                                    }

                                    function createMarker(place) {
                                        var placeLoc = place.geometry.location;


                                        var marker = new google.maps.Marker({
                                            Map: map,
                                            position: place.geometry.location
                                        });

                                        google.maps.event.addListener(marker, 'click', function() {
                                            infowindow.setContent(place.name);
                                            infowindow.open(map, this);
                                        });
                                    }





                                </script>






                                <script>




                                    function initialize (){
                                        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('depart'));
                                        google.maps.event.addListener(autocomplete,'place_changed',function(){

                                            var places =autocomplete.getPlace();

                                            var l1= places.geometry.location.lat() ;

                                            var la1= places.geometry.location.lng() ;


                                            document.getElementById('l1').value=l1;
                                            document.getElementById('la1').value=la1;
                                            console.log(\"teest1\");

                                        });

                                    }
                                    function initialize2 (){
                                        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('destination'));
                                        google.maps.event.addListener(autocomplete,'place_changed',function(){

                                            var places =autocomplete.getPlace();

                                            var l2= places.geometry.location.lat() ;

                                            var la2= places.geometry.location.lng() ;


                                            document.getElementById('l2').value=l2;
                                            document.getElementById('la2').value=la2;

                                        });

                                    }

                                    function computeTotalDistance(result) {
                                        var total = 0;
                                        var myroute = result.routes[0];
                                        for (i = 0; i < myroute.legs.length; i++) {
                                            total += myroute.legs[i].distance.value;
                                        }
                                        total = total / 1000.
                                        document.getElementById('total').value=total;
                                    }

                                </script>


                                    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCm3UzImcv8neFVa4l6a6idoNcXz4SaNa8&callback=initMap&libraries=geometry,places\">
                                    </script>

                                <!-- Map Block End -->
                            </div><!-- Widget Block End -->
                        </div><!-- Sidebar Widget End -->
                    </div><!--/.col-sm-12 col-md-4 col-lg-3-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Inner Pages End -->
    </section><!-- Content End -->





{% endblock %}", "SanteBundle:Default:Route.html.twig", "C:\\wamp64\\www\\Sante\\src\\SanteBundle/Resources/views/Default/Route.html.twig");
    }
}
