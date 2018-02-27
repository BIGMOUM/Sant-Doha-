<?php

/* SanteBundle:Default:locateInsert.html.twig */
class __TwigTemplate_e65988c2d1ecc42c8ec970deee2c228416e8a8987c31a71ea5b7f13a8f550e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SanteBundle:Default:locateInsert.html.twig", 1);
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
        $__internal_9d17bf50de0465915795cbc3988d82471c073d6d39d51e201c3e0c8c88c111de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d17bf50de0465915795cbc3988d82471c073d6d39d51e201c3e0c8c88c111de->enter($__internal_9d17bf50de0465915795cbc3988d82471c073d6d39d51e201c3e0c8c88c111de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:locateInsert.html.twig"));

        $__internal_f659279d44bba8bf9d1849f12e23b312f39fb7300b388e260ca821d0dd7e562a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f659279d44bba8bf9d1849f12e23b312f39fb7300b388e260ca821d0dd7e562a->enter($__internal_f659279d44bba8bf9d1849f12e23b312f39fb7300b388e260ca821d0dd7e562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:locateInsert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d17bf50de0465915795cbc3988d82471c073d6d39d51e201c3e0c8c88c111de->leave($__internal_9d17bf50de0465915795cbc3988d82471c073d6d39d51e201c3e0c8c88c111de_prof);

        
        $__internal_f659279d44bba8bf9d1849f12e23b312f39fb7300b388e260ca821d0dd7e562a->leave($__internal_f659279d44bba8bf9d1849f12e23b312f39fb7300b388e260ca821d0dd7e562a_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_3eacbe00ccf74ef0a0ccce0871cec1dfcb01c57da5767783adb6048c1bea8fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eacbe00ccf74ef0a0ccce0871cec1dfcb01c57da5767783adb6048c1bea8fb3->enter($__internal_3eacbe00ccf74ef0a0ccce0871cec1dfcb01c57da5767783adb6048c1bea8fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_291f724f25fe340b7e9dbf9d4e72da91d2bfefec1002045610c454b04d6579ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291f724f25fe340b7e9dbf9d4e72da91d2bfefec1002045610c454b04d6579ee->enter($__internal_291f724f25fe340b7e9dbf9d4e72da91d2bfefec1002045610c454b04d6579ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCm3UzImcv8neFVa4l6a6idoNcXz4SaNa8&callback=initMap&libraries=geometry,places\">
    </script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <![endif]-->
";
        
        $__internal_291f724f25fe340b7e9dbf9d4e72da91d2bfefec1002045610c454b04d6579ee->leave($__internal_291f724f25fe340b7e9dbf9d4e72da91d2bfefec1002045610c454b04d6579ee_prof);

        
        $__internal_3eacbe00ccf74ef0a0ccce0871cec1dfcb01c57da5767783adb6048c1bea8fb3->leave($__internal_3eacbe00ccf74ef0a0ccce0871cec1dfcb01c57da5767783adb6048c1bea8fb3_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1516f284fcfabfdf8439445f44326e7917dbe7690e946d5940fb9640a42adc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1516f284fcfabfdf8439445f44326e7917dbe7690e946d5940fb9640a42adc4->enter($__internal_f1516f284fcfabfdf8439445f44326e7917dbe7690e946d5940fb9640a42adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50ffa5e0d2e07212608dba6e78d60337ccfb69a81cad96c131a11c76725d8a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ffa5e0d2e07212608dba6e78d60337ccfb69a81cad96c131a11c76725d8a89->enter($__internal_50ffa5e0d2e07212608dba6e78d60337ccfb69a81cad96c131a11c76725d8a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    <!-- Content Start -->
    <section class=\"content contact-pg clearfix\">
        <!-- Banner Start -->
        <div class=\"banner inner-banner clearfix\">
            <img alt=\"BANNER\" class=\"img-responsive\" src=\"";
        // line 36
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
                    <div class=\"col-sm-12 col-md-8 col-lg-6\">
                        <div class=\"content-desc\">
                            <!-- Appointment Form Start -->
                            <div class=\"appointment-form white-bg clearfix\">
                                <div class=\"container col-sm-6 col-md-12\">
                                    <div class=\"alert alert-warning\" role=\"alert\"><h6>FYI:</h6>The system will take into account only the last marker</div>

                                </div>

                                <div class=\"row\" >
                                    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                                </div>
                            </div><!-- Appointment Form End -->
                        </div><!--/.content-desc-->
                    </div><!--/.col-sm-12 col-md-8 col-lg-9-->
                    <div class=\"col-sm-12 col-md-4 col-lg-6\">
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
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Map Block Start -->

                                    <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>
                                    <script>
                                        function initialize (){

                                            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('santebundle_estabmishment_adress'));
                                            google.maps.event.addListener(autocomplete,'place_changed',function(){

                                                var places =autocomplete.getPlace();

                                                var l1= places.geometry.location.lat ();

                                                var la1= places.geometry.location.lng() ;


                                                document.getElementById('santebundle_estabmishment_latitude').value=l1;
                                                document.getElementById('santebundle_estabmishment_longitude').value=la1;
                                                console.log(\"teest1\");

                                            });

                                        }

                                        function initMap(){


                                            google.maps.event.addDomListener(window,'load', initialize);
                                            // Map options
                                            var options = {
                                                zoom:11,
                                                center:{lat:36.862499,lng:10.195556}
                                            };
                                            //new map
                                            var map = new
                                            google.maps.Map(document.getElementById('map'),options);

                                            // listen for click on map
                                            google.maps.event.addListener(map ,'click',
                                                function(event){
                                                    // Add marker
                                                    addMarker({coords:event.latLng});
                                                    document.getElementById(\"santebundle_estabmishment_latitude\").value = event.latLng.lat();
                                                    document.getElementById(\"santebundle_estabmishment_longitude\").value = event.latLng.lng();

                                                }
                                            );





                                            // add marker




                                            // Add Marker function

                                            function addMarker(props){
                                                var marker = new google.maps.Marker({
                                                    position:props.coords,
                                                    map:map
                                                    //icon:props.iconImage
                                                });
                                                // check for custom Icon
                                                if(props.iconImage){
                                                    // set icon image
                                                    marker.setIcon(props.iconImage);
                                                }
                                                //check containt
                                                if(props.content){
                                                    var infoWindow = new google.maps.InfoWindow({
                                                        content:props.content
                                                    });
                                                    marker.addListener('click',function(){
                                                        infoWindow.open(map, marker)
                                                    });
                                                }


                                            }


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
        
        $__internal_50ffa5e0d2e07212608dba6e78d60337ccfb69a81cad96c131a11c76725d8a89->leave($__internal_50ffa5e0d2e07212608dba6e78d60337ccfb69a81cad96c131a11c76725d8a89_prof);

        
        $__internal_f1516f284fcfabfdf8439445f44326e7917dbe7690e946d5940fb9640a42adc4->leave($__internal_f1516f284fcfabfdf8439445f44326e7917dbe7690e946d5940fb9640a42adc4_prof);

    }

    public function getTemplateName()
    {
        return "SanteBundle:Default:locateInsert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 58,  114 => 36,  108 => 32,  99 => 31,  69 => 11,  64 => 9,  58 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCm3UzImcv8neFVa4l6a6idoNcXz4SaNa8&callback=initMap&libraries=geometry,places\">
    </script>

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
                    <div class=\"col-sm-12 col-md-8 col-lg-6\">
                        <div class=\"content-desc\">
                            <!-- Appointment Form Start -->
                            <div class=\"appointment-form white-bg clearfix\">
                                <div class=\"container col-sm-6 col-md-12\">
                                    <div class=\"alert alert-warning\" role=\"alert\"><h6>FYI:</h6>The system will take into account only the last marker</div>

                                </div>

                                <div class=\"row\" >
                                    {{ form(form) }}
                                </div>
                            </div><!-- Appointment Form End -->
                        </div><!--/.content-desc-->
                    </div><!--/.col-sm-12 col-md-8 col-lg-9-->
                    <div class=\"col-sm-12 col-md-4 col-lg-6\">
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
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Map Block Start -->

                                    <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>
                                    <script>
                                        function initialize (){

                                            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('santebundle_estabmishment_adress'));
                                            google.maps.event.addListener(autocomplete,'place_changed',function(){

                                                var places =autocomplete.getPlace();

                                                var l1= places.geometry.location.lat ();

                                                var la1= places.geometry.location.lng() ;


                                                document.getElementById('santebundle_estabmishment_latitude').value=l1;
                                                document.getElementById('santebundle_estabmishment_longitude').value=la1;
                                                console.log(\"teest1\");

                                            });

                                        }

                                        function initMap(){


                                            google.maps.event.addDomListener(window,'load', initialize);
                                            // Map options
                                            var options = {
                                                zoom:11,
                                                center:{lat:36.862499,lng:10.195556}
                                            };
                                            //new map
                                            var map = new
                                            google.maps.Map(document.getElementById('map'),options);

                                            // listen for click on map
                                            google.maps.event.addListener(map ,'click',
                                                function(event){
                                                    // Add marker
                                                    addMarker({coords:event.latLng});
                                                    document.getElementById(\"santebundle_estabmishment_latitude\").value = event.latLng.lat();
                                                    document.getElementById(\"santebundle_estabmishment_longitude\").value = event.latLng.lng();

                                                }
                                            );





                                            // add marker




                                            // Add Marker function

                                            function addMarker(props){
                                                var marker = new google.maps.Marker({
                                                    position:props.coords,
                                                    map:map
                                                    //icon:props.iconImage
                                                });
                                                // check for custom Icon
                                                if(props.iconImage){
                                                    // set icon image
                                                    marker.setIcon(props.iconImage);
                                                }
                                                //check containt
                                                if(props.content){
                                                    var infoWindow = new google.maps.InfoWindow({
                                                        content:props.content
                                                    });
                                                    marker.addListener('click',function(){
                                                        infoWindow.open(map, marker)
                                                    });
                                                }


                                            }


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





{% endblock %}", "SanteBundle:Default:locateInsert.html.twig", "C:\\wamp64\\www\\Sante\\src\\SanteBundle/Resources/views/Default/locateInsert.html.twig");
    }
}
