<?php

/* SanteBundle:Default:locate.html.twig */
class __TwigTemplate_443403ada70fb6bb282d0fb5ebd2a6858e51c1e2e63f0079c2788f9aeb90a002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SanteBundle:Default:locate.html.twig", 1);
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
        $__internal_1734395db22cdfdbe81a6cfd9407b51b4fed4dad765ec892980dda6e1e6069d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1734395db22cdfdbe81a6cfd9407b51b4fed4dad765ec892980dda6e1e6069d2->enter($__internal_1734395db22cdfdbe81a6cfd9407b51b4fed4dad765ec892980dda6e1e6069d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:locate.html.twig"));

        $__internal_2ebcb137375c432b6ed146a47ced8f05cb13f4db2152a8c6becd36ccce9526b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebcb137375c432b6ed146a47ced8f05cb13f4db2152a8c6becd36ccce9526b1->enter($__internal_2ebcb137375c432b6ed146a47ced8f05cb13f4db2152a8c6becd36ccce9526b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:locate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1734395db22cdfdbe81a6cfd9407b51b4fed4dad765ec892980dda6e1e6069d2->leave($__internal_1734395db22cdfdbe81a6cfd9407b51b4fed4dad765ec892980dda6e1e6069d2_prof);

        
        $__internal_2ebcb137375c432b6ed146a47ced8f05cb13f4db2152a8c6becd36ccce9526b1->leave($__internal_2ebcb137375c432b6ed146a47ced8f05cb13f4db2152a8c6becd36ccce9526b1_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_de21352be4d116465c0b93a3ca6707210bf13b15868352cf4712f540b4ac2046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de21352be4d116465c0b93a3ca6707210bf13b15868352cf4712f540b4ac2046->enter($__internal_de21352be4d116465c0b93a3ca6707210bf13b15868352cf4712f540b4ac2046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_edd4974db71c0443751c3e4a4510047a37626891663c754a4a38d28a07bb0d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd4974db71c0443751c3e4a4510047a37626891663c754a4a38d28a07bb0d22->enter($__internal_edd4974db71c0443751c3e4a4510047a37626891663c754a4a38d28a07bb0d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_edd4974db71c0443751c3e4a4510047a37626891663c754a4a38d28a07bb0d22->leave($__internal_edd4974db71c0443751c3e4a4510047a37626891663c754a4a38d28a07bb0d22_prof);

        
        $__internal_de21352be4d116465c0b93a3ca6707210bf13b15868352cf4712f540b4ac2046->leave($__internal_de21352be4d116465c0b93a3ca6707210bf13b15868352cf4712f540b4ac2046_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ace87cc9f43efce2bb30ff760cb28435970afdc704771a7ef69a38dd03507f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ace87cc9f43efce2bb30ff760cb28435970afdc704771a7ef69a38dd03507f2->enter($__internal_2ace87cc9f43efce2bb30ff760cb28435970afdc704771a7ef69a38dd03507f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_671f2ceebe5b004f395705de63c914098ff249b2008f6e8abeb79226d7c22e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671f2ceebe5b004f395705de63c914098ff249b2008f6e8abeb79226d7c22e6b->enter($__internal_671f2ceebe5b004f395705de63c914098ff249b2008f6e8abeb79226d7c22e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Map Block Start -->

                                    <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>
                                    <script>

                                        function initMap(){
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
                                                document.getElementById(\"lat\").value = event.latLng.lat();
                                                document.getElementById(\"lng\").value = event.latLng.lng();

                                            }
                                            );

                                            // add marker
                                            var icons = {
                                                Relaxation: {
                                                    icon:'";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/relax.png"), "html", null, true);
        echo "'
                                                },
                                                Health: {
                                                    icon:'";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/health.png"), "html", null, true);
        echo "'
                                                },
                                                Sport: {
                                                    icon:'";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sport.png"), "html", null, true);
        echo "'
                                                }
                                            };

                                            var features = [
                                                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estabmishments"]) ? $context["estabmishments"] : $this->getContext($context, "estabmishments")));
        foreach ($context['_seq'] as $context["_key"] => $context["estab"]) {
            // line 119
            echo "                                                    {position:{lat:";
            echo $this->getAttribute($context["estab"], "latitude", array());
            echo ",lng:";
            echo $this->getAttribute($context["estab"], "longitude", array());
            echo "},
                                                     type:'";
            // line 120
            echo $this->getAttribute($context["estab"], "icon", array());
            echo "',
                                                     content:'<div class=\"panel panel-primary\">'+
                                                     '<!-- Default panel contents -->'+
                                                     '<div class=\"panel-heading\"><h4><strong><center>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["estab"], "nom", array()), "html", null, true);
            echo "</center></strong></h4></div>'+
                                                     '<div class=\"panel-body\">'+
                                                     '<img src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Estabmishment/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["estab"], "nameImage", array()), "html", null, true);
            echo "\" style=\"width: 200px;height: 150px\">'+
                                                     '</div>'+

                                                     '<!-- List group -->'+
                                                     '<ul class=\"list-group\">'+
                                                     '<li class=\"list-group-item\"><h5><strong><center>Address:</center></strong></h5><center>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["estab"], "adress", array()), "html", null, true);
            echo "</center></li>'+
                                                     '<li class=\"list-group-item\"><h5><strong><center>Phone:</center></strong></h5><center>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["estab"], "telephone", array()), "html", null, true);
            echo "</center></li>'+
                                                     '<li class=\"list-group-item\"><h5><strong><center>WebSite:</center></strong></h5><div id=\"linkwrap\" style=\"width:150px\"><a href=";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["estab"], "web", array()), "html", null, true);
            echo " target=\"_blank\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estab"], "web", array()), "html", null, true);
            echo "</a></div></li>'+
                                                     '<li class=\"list-group-item\"><h5><strong><center>Rating:</center></strong></h5><center>";
            // line 133
            if (($this->getAttribute($context["estab"], "rating", array()) == 0)) {
                echo "'+
                                                     '<div class=\"rating\"><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                     '";
            } elseif (($this->getAttribute(            // line 135
$context["estab"], "rating", array()) == 1)) {
                echo "'+
                                                     ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                     '";
            } elseif (($this->getAttribute(            // line 137
$context["estab"], "rating", array()) == 2)) {
                echo "'+
                                                     ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                     '";
            } elseif (($this->getAttribute(            // line 139
$context["estab"], "rating", array()) == 3)) {
                echo "'+
                                                     ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div><div class=\"star-empty \"></div></div>'+
                                                     '";
            } elseif (($this->getAttribute(            // line 141
$context["estab"], "rating", array()) == 4)) {
                echo "'+
                                                     ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-empty \"></div></div>'+
                                                     '";
            } else {
                // line 143
                echo "'+
                                                     ' <div class=\"rating\"><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div><div class=\"star-full \"></div></div>'+
                                                     '";
            }
            // line 145
            echo "</center></li>'+
                                                     '<li class=\"list-group-item\" ><a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_Route", array("id" => $this->getAttribute($context["estab"], "id", array()))), "html", null, true);
            echo "\" style=\" background-color: green; color: white; padding: 10px 20px;text-align: center; text-decoration: none;display: inline-block;\">Route</a></li>'+
                                                     '</ul>'+
                                                     '</div>'
                                                    },
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                                ];
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
        
        $__internal_671f2ceebe5b004f395705de63c914098ff249b2008f6e8abeb79226d7c22e6b->leave($__internal_671f2ceebe5b004f395705de63c914098ff249b2008f6e8abeb79226d7c22e6b_prof);

        
        $__internal_2ace87cc9f43efce2bb30ff760cb28435970afdc704771a7ef69a38dd03507f2->leave($__internal_2ace87cc9f43efce2bb30ff760cb28435970afdc704771a7ef69a38dd03507f2_prof);

    }

    public function getTemplateName()
    {
        return "SanteBundle:Default:locate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 151,  287 => 146,  284 => 145,  279 => 143,  273 => 141,  268 => 139,  263 => 137,  258 => 135,  253 => 133,  247 => 132,  243 => 131,  239 => 130,  230 => 125,  225 => 123,  219 => 120,  212 => 119,  208 => 118,  200 => 113,  194 => 110,  188 => 107,  112 => 34,  106 => 30,  97 => 29,  69 => 11,  64 => 9,  58 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Map Block Start -->

                                    <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>
                                    <script>

                                        function initMap(){
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
                                                document.getElementById(\"lat\").value = event.latLng.lat();
                                                document.getElementById(\"lng\").value = event.latLng.lng();

                                            }
                                            );

                                            // add marker
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
                                                {% for estab in estabmishments| raw %}
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
                                                     '<li class=\"list-group-item\"><h5><strong><center>WebSite:</center></strong></h5><div id=\"linkwrap\" style=\"width:150px\"><a href={{ estab.web }} target=\"_blank\" >{{ estab.web }}</a></div></li>'+
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
                                                     '<li class=\"list-group-item\" ><a href=\"{{ path('sante_Route',{'id':estab.id}) }}\" style=\" background-color: green; color: white; padding: 10px 20px;text-align: center; text-decoration: none;display: inline-block;\">Route</a></li>'+
                                                     '</ul>'+
                                                     '</div>'
                                                    },
                                                    {% endfor %}
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





{% endblock %}", "SanteBundle:Default:locate.html.twig", "C:\\wamp64\\www\\Sante\\src\\SanteBundle/Resources/views/Default/locate.html.twig");
    }
}
