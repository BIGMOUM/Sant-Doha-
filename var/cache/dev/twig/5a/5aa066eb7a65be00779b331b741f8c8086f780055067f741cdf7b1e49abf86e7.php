<?php

/* ::base.html.twig */
class __TwigTemplate_24661cda8c25f39488705a82def822e5599d1ccb6cc530a4beb3bac2208936c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'formulaire' => array($this, 'block_formulaire'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4d6cf2c5b4ed9a135910818e5165d51f80a159255fff17db6bbaa8abd211f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d6cf2c5b4ed9a135910818e5165d51f80a159255fff17db6bbaa8abd211f0e->enter($__internal_f4d6cf2c5b4ed9a135910818e5165d51f80a159255fff17db6bbaa8abd211f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fd520b52e7810070d988cacb1940b55e798b739d5fa73716c12a2b3d80bc8945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd520b52e7810070d988cacb1940b55e798b739d5fa73716c12a2b3d80bc8945->enter($__internal_fd520b52e7810070d988cacb1940b55e798b739d5fa73716c12a2b3d80bc8945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<!-- Mirrored from demos.hogash.com/medlife-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2018 23:05:08 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>Hospital</title><!-- Favicon -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/x-icon\"><!-- Font Awesome -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Bootstrap -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!--=== Add By Designer ===-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/fonts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Yamm Megamenu -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/yamm.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Animation -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Animation -->
    <!-- Flat Icon -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Flat Icon -->
    <!-- Multi Level Push Menu -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\">
    </script><!-- Multi Level Push Menu -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>

    <!-- REVOLUTION STYLE SHEETS -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION LAYERS STYLES -->
</head>
<body>
<!-- Header Start -->
<header class=\"header clearfix\">
    <!-- Header Top Start -->
    <div class=\"h-top clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-4\">
                    <div class=\"h-left\">
                        <p><span><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> OPENED ON WEEKDAYS FROM</span> 8:30 AM TO 6:30 PM</p>
                    </div>
                </div>
                <div class=\"col-sm-8 col-md-8\">
                    <div class=\"h-right\">
                        <!-- History Policy Start -->
                        <div class=\"h-history-policy clearfix\">
                            <div class=\"burger hidden-lg\">
                                <a href=\"#\"><span></span> <span></span> <span></span></a>
                            </div>
                            <ul>
                                <li>
                                    <a href=\"#\">History</a>
                                </li>
                                <li>
                                    <a href=\"#\">Careers</a>
                                </li>
                                <li>
                                    <a href=\"#\">News</a>
                                </li>
                                <li>
                                    <a href=\"#\">Privacy Policy</a>
                                </li>
                            </ul>
                        </div><!-- History Policy End -->
                        <!-- Login-Register Start -->
                        <div class=\"h-login-register clearfix\">
                            <a class=\"hidden-xs\" data-target=\".login-modal\" data-toggle=\"modal\" href=\"#\">Login</a> <a class=\"visible-xs\" data-target=\".login-modal\" data-toggle=\"modal\" href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-sign-in\"></i></a>
                        </div><!-- Login-Register End -->
                    </div><!--/.h-right-->
                </div><!--/.col-sm-8 col-md-8\"-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class=\"h-bottom clearfix\">
        <div class=\"container\">
            <div class=\"navigation-menu\">
                <div class=\"navbar yamm navbar-default\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_home");
        echo "\"><img alt=\"\" class=\"hidden-xs hidden-sm\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> <img alt=\"\" class=\"visible-xs visible-sm\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mobile-logo.png"), "html", null, true);
        echo "\"></a>
                    </div><!-- Desktop Navigation List Start -->
                    <div class=\"navbar-collapse collapse hidden-xs\" id=\"navbar-collapse-1\">
                        <div class=\"background\"></div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown active\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_home");
        echo "\">HOME</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"#\">MedLife – Annapolis</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Germantown</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Columbia</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Olney</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pasadena</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pikesville</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Waldorf</a>
                                    </li>
                                </ul><!--/.dropdown-menu-->
                            </li><!--/.dropdown-->
                            <li class=\"dropdown yamm-fw\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\">SERVICES</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <!-- Content container to add padding -->
                                        <div class=\"yamm-content\">
                                            <div class=\"row\">
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 1</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">General & Preventive Care</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Cosmetic Solutions</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Restorative Solutions</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 2</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Additional Treatments</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Orthodontics</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Dentures & Denture Repair</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 3</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Diagnostic & Preventive</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Pediatric Dentistry</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Phisiotheraphy</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 4</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Minor surgery</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Allergy / Immunology</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Flu vaccination</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                            </div><!--/.row-->
                                        </div><!--/.yamm-content-->
                                    </li>
                                </ul><!--/.dropdown-menu-->
                            </li><!--/.dropdown yamm-fw active-->
                            <li>
                                <a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_doctors");
        echo "\">DOCTORS</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_timetable");
        echo "\">TIMETABLE</a>
                            </li>
                            <li class=\"dropdown active\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_forum");
        echo "\">FORUM</a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"active\">
                                        <a href=\"#\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Appointment</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Blog</a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" href=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_shop");
        echo "\">SHOP</a>
                                        <ul class=\"dropdown-menu sub-menu\">
                                            <li>
                                                <a href=\"#\">Products Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Product Details Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Cart Page</a>
                                            </li>
                                        </ul><!--/.dropdown-menu-->
                                    </li><!--/.dropdown-->
                                    <li>
                                        <a href=\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_locate");
        echo "\">Locate</a>
                                    </li>
                                </ul><!--/.dropdown-menu-->
                            </li><!--/.dropdown active-->
                            <li>
                                <a href=\"";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_articles");
        echo "\">ARTICLES</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_shop");
        echo "\">SHOP</a>
                            </li>
                            <li class=\"dropdown yamm-fw\">
                                <a class=\"dropdown-toggle\" href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_locate");
        echo "\">LOCATE</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <!-- Content container to add padding -->
                                        <div class=\"yamm-content\">
                                            <div class=\"row\">
                                                <ul class=\"col-md-6 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">ESTABLISHMENT</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_locate");
        echo "\">View Establishments</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_AddLocate");
        echo "\">Add Establishment</a>
                                                    </li>

                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-6 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 2</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Additional Treatments</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Orthodontics</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Dentures & Denture Repair</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul><!--/.nav navbar-nav-->
                    </div><!-- Desktop Navigation List End -->
                    <!-- Mobile Navigation List Start -->
                    <div class=\"dl-menuwrapper visible-xs\" id=\"dl-menu\">
                        <button class=\"dl-trigger\">Open Menu</button>
                        <div class=\"background\"></div>
                        <ul class=\"dl-menu\">
                            <li class=\"active\">
                                <a href=\"";
        // line 276
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_home");
        echo "\">HOME</a>
                                <ul class=\"dl-submenu\">
                                    <li>
                                        <a href=\"#\">MedLife – Annapolis</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Germantown</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Columbia</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Olney</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pasadena</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pikesville</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Waldorf</a>
                                    </li>
                                </ul><!--/.dl-submenu-->
                            </li>
                            <li class=\"active\">
                                <a href=\"";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\">SERVICES</a>
                                <ul class=\"dl-submenu\">
                                    <li>
                                        <a href=\"#\">Category 1</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">General & Preventive Care</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Cosmetic Solutions</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Restorative Solutions</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Category 2</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">Additional Treatments</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Orthodontics</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Dentures & Denture Repair</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Category 3</a>
                                        <ul class=\"dl-submenu\">
                                            <li class=\"active\">
                                                <a href=\"#\">Diagnostic & Preventive</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Pediatric Dentistry</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Phisiotheraphy</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Category 4</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">Minor surgery</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Allergy / Immunology</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Flu vaccination</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                </ul><!--/.dl-submenu-->
                            </li>
                            <li>
                                <a href=\"";
        // line 363
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_doctors");
        echo "\">DOCTORS</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_timetable");
        echo "\">TIMETABLE</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"";
        // line 369
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_forum");
        echo "\">Forum</a>
                                <ul class=\"dl-submenu\">
                                    <li class=\"active\">
                                        <a href=\"#\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Appointment</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Blog</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Shop</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">Products Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Product Details Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Cart Page</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Contact</a>
                                    </li>
                                </ul><!--/.dl-submenu-->
                            </li>
                            <li>
                                <a href=\"";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_articles");
        echo "\">ARTICLES</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 409
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_shop");
        echo "\">SHOP</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_locate");
        echo "\">LOCATE</a>
                            </li>
                        </ul><!--/.dl-menu-->
                    </div><!-- /dl-menuwrapper -->
                    <!-- Mobile Navigation List End -->
                    <!-- Cart Right Start -->
                    <div class=\"cart-right\">
                        <a class=\"phone-btn\" href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-phone\"></i>+44 725-555-1234</a>
                        <div class=\"header-cart\">
                            <a class=\"headercartbtn\" href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-shopping-cart\"></i> <span>1</span></a>
                            <div class=\"cart-down-panel\">
                                <ul class=\"cart-list\">
                                    <li class=\"mini-cart-item\">
                                        <button aria-label=\"Close\" class=\"close\" type=\"button\"><span aria-hidden=\"true\">&times;</span></button>
                                        <div class=\"row\">
                                            <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                <div class=\"mini-cart-image\"><img alt=\"\" class=\"img-responsive\" src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mini-cart-img.jpg"), "html", null, true);
        echo "\"></div>
                                            </div>
                                            <div class=\"col-xs-8 col-sm-8 col-md-8 pad-left\">
                                                <div class=\"mini-cart-detail\">
                                                    <a href=\"#\">Oven Roasted duck with special sousage</a>
                                                </div>
                                            </div><!--/.col-xs-8 col-sm-8 col-md-8 pad-left-->
                                        </div><!--/.row-->
                                    </li><!--/.mini-cart-item-->
                                </ul><!--/.cart-list-->
                                <div class=\"total\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"total-left\">
                                                <p>subtotal</p>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"total-right\">
                                                <p>\$35</p>
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                    </div><!--/.row\"-->
                                </div><!--/.total-->
                                <div class=\"mini-cart-btn\">
                                    <a class=\"btn btn-default view-cart\" href=\"#\">view cart</a> <a class=\"btn btn-simple checkout\" href=\"#\">checkout</a>
                                </div><!--/.mini-cart-btn-->
                            </div><!--/.cart-down-panel-->
                        </div><!--/.header-cart-->
                    </div><!-- Cart Right End -->
                </div><!--/.navbar yamm navbar-default-->
            </div><!--/.navigation-menu-->
        </div><!--/.container-->
    </div><!-- Header Bottom End -->
    ";
        // line 462
        $this->displayBlock('head', $context, $blocks);
        // line 463
        echo "</header><!-- Header End -->
        ";
        // line 464
        $this->displayBlock('formulaire', $context, $blocks);
        // line 465
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 466
        echo "
        ";
        // line 467
        $this->displayBlock('javascripts', $context, $blocks);
        // line 468
        echo "<!-- Footer Start -->
<footer class=\"footer clearfix\">
    <div class=\"container\">
        <!-- Footer Top Start -->
        <div class=\"f-top clearfix\">
            <!-- F-Widget Start -->
            <div class=\"f-widget clearfix\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>MEDLIFE</h6><!-- Medlife Start -->
                        <div class=\"medlife-block\">
                            <p>Consulting WP - Before we talk destination, we shine a spotlight across your organization to fully understand its people, processes, and technology.</p>
                        </div><!-- Medlife End -->
                    </div><!--/.col-sm-6 col-md-3-->
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>FORUM</h6><!-- Medlife Start -->
                        <div class=\"pages-block clearfix\">
                            <div class=\"col-xs-6 col-sm-6 col-md-6 padding\">
                                <ul>
                                    <li>
                                        <a href=\"";
        // line 488
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_home");
        echo "\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 491
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Appointment</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Contact</a>
                                    </li>
                                </ul>
                            </div><!--/.col-xs-6 col-sm-6-->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 padding\">
                                <ul>
                                    <li>
                                        <a href=\"#\">Pediatry</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Orthodontics</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Cosmetic Solutions</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Cart</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">SHOP</a>
                                    </li>
                                </ul>
                            </div><!--/.col-xs-6 col-sm-6-->
                        </div><!-- Medlife End -->
                    </div><!--/.-->
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>RECENT NEWS</h6><!-- Medlife Start -->
                        <div class=\"recent-news-block\">
                            <a class=\"view-all\" href=\"#\">VIEW ALL</a> <!-- News Block Start -->
                            <div class=\"news-block\">
                                <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                            </div>
                            <div class=\"news-block\">
                                <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                            </div><!-- News Block End -->
                        </div><!-- Medlife End -->
                    </div><!--/.col-sm-6 col-md-3-->
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>NEWSLETTER</h6><!-- Medlife Start -->
                        <div class=\"news-letter-block\">
                            <p>Recieve our latest news straight to your inbox</p>
                            <form action=\"http://your_username.dataserver.list-manage.com/subscribe/post?u=YOUR_API_KEY&amp;id=LIST_ID\" class=\"md__newsletter-form\" id=\"mc-embedded-subscribe-form\" method=\"post\" name=\"mc-embedded-subscribe-form\" novalidate=\"\" target=\"_blank\">
                                <input class=\"email form-control\" name=\"EMAIL\" placeholder=\"Email address\" required=\"\" type=\"email\" value=\"\">
                                <div aria-hidden=\"true\" style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_78185f3823fef6dc6a261e0df_2ebd195299\" tabindex=\"-1\" type=\"text\" value=\"\">
                                </div><button class=\"btn btn-default\" id=\"mc-embedded-subscribe2\" name=\"SEND\" type=\"submit\">Subscribe</button>
                                <div class=\"md__newsletter-message\"></div>
                            </form>
                        </div><!-- Medlife End -->
                    </div><!--/.col-sm-6 col-md-3-->
                </div><!--/.row-->
            </div><!-- F-Widget End -->
        </div><!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class=\"f-bottom clearfix\">
            <p>Made with ♥ by Hogash.com © 2016 Kallyas.net All rights reserved.</p>
            <div class=\"f-social-icons clearfix\">
                <ul>
                    <li>
                        <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li>
                        <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li>
                        <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-instagram\"></i></a>
                    </li>
                </ul>
            </div><!--/.f-social-icons-->
        </div><!-- Footer Bottom End -->
    </div><!--/.container-->
</footer><!-- Footer End -->
<!-- Modal Start -->
<!-- Login Modal Start -->
<div aria-hidden=\"true\" class=\"modal fade login-modal\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <!-- Close Start -->
            <button class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button> <!-- Close End -->
            <!-- Login Section Start -->
            <div class=\"login-block clearfix\">
                <h6>SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES</h6>
                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleInputtext1\">Username</label> <input class=\"form-control\" id=\"exampleInputtext1\" placeholder=\"eg: james_smith\" type=\"text\">
                    </div><!--/.form-group-->
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label> <input class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"type password\" type=\"password\">
                    </div><!--/.form-group-->
                    <div class=\"checkbox\">
                        <label><input type=\"checkbox\"> REMEMBER ME</label>
                    </div><!--/.checkbox-->
                    <button class=\"btn btn-default\" type=\"submit\">Log in</button>
                    <div class=\"forgot-password\">
                        <a href=\"#\">FORGOT YOUR PASSWORD?</a>
                    </div><!--/.forgot-password-->
                </form>
            </div><!-- Login Section End -->
            <!-- Forgot Password Section Start -->
            <div class=\"forgot-password-block clearfix\">
                <h6>FORGOT YOUR DETAILS?</h6>
                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleInputtext2\">Username OR Email</label> <input class=\"form-control\" id=\"exampleInputtext2\" placeholder=\"eg: james_smith\" type=\"text\">
                    </div><button class=\"btn btn-default\" type=\"submit\">SEND MY DETAILS!</button>
                    <div class=\"forgot-password\">
                        <a href=\"#\">AAH, WAIT, I REMEMBER NOW!</a>
                    </div>
                </form>
            </div><!-- Forgot Password Section End -->
        </div><!--/.modal-content-->
    </div><!--/.modal-dialog-->
</div><!-- Login Modal End -->
<!-- Video Modal Start -->
<div aria-hidden=\"true\" class=\"modal fade video-modal\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <!-- Close Start -->
            <button class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button> <!-- Close End -->
            <iframe allowfullscreen height=\"500\" src=\"https://www.youtube.com/embed/laYzYkpMztw\"></iframe>
        </div><!--/.modal-content-->
    </div><!--/.modal-dialog modal-lg-->
</div><!-- Video Modal End -->
<!-- Modal End -->
<!-- Back To Top Start -->
<div class=\"back-to-top clearfix\">
    <a href=\"#\"><span><i aria-hidden=\"true\" class=\"fa fa-chevron-up\"></i> Top</span></a>
</div><!-- Back To Top End -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script data-cfasync=\"false\" src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/email-decode.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\">
</script> <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\">
</script> <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- REVOLUTION JS FILES -->
<script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\">
</script>
<script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\">
</script> <!-- REVOLUTION JS FILES -->
<!-- SLIDER REVOLUTION -->
<script src='";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/revolution.extension.actions.min.js"), "html", null, true);
        echo "'>
</script>
<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\">
</script>
<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\">
</script>
<script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\">
</script>
<script src='";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/revolution.extension.video.min.js"), "html", null, true);
        echo "'>
</script>
<script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\">
</script> <!-- SLIDER REVOLUTION -->
<!-- Parallax Start -->
<script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/parallax.js"), "html", null, true);
        echo "\">
</script> <!-- Parallax End -->
<!-- Ofi-Script -->
<script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ofi.js"), "html", null, true);
        echo "\">
</script> <!-- Ofi-Script -->
<!-- Mobile Menu Js Start -->
<script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dlmenu.js"), "html", null, true);
        echo "\">
</script> <!-- Mobile Menu Js End -->
<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.js"), "html", null, true);
        echo "\">
</script> <!-- Slick Sider -->
<!-- Selectric Start -->
<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.selectric.js"), "html", null, true);
        echo "\">
</script> <!-- Selectric End -->
<script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\">
</script> <!-- Range Slide -->
<!-- Jquery Ui Date Picker -->
<!-- Bootstrap Time Picker -->
<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.timepicker.js"), "html", null, true);
        echo "\">
</script> <!-- Bootstrap Time Picker -->

<script>

    \"use strict\";
    //Rev slider
    var setREVStartSize=function(){
        try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
            e.c = jQuery('#rev_slider_1_1');
            e.responsiveLevels = [1240,1024,778,480];
            e.gridwidth = [1240,992,778,480];
            e.gridheight = [868,768,960,720];
            e.sliderLayout = \"fullwidth\";
            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),\"fullscreen\"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(\",\");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split(\"%\").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(\".rev_slider_wrapper\").css({height:f})
        }catch(d){console.log(\"Failure at Presize of Slider:\"+d)}
    };
    setREVStartSize();

    var tpj=jQuery;
    var revapi1;
    tpj(document).ready(function() {
        if(tpj(\"#rev_slider_1_1\").revolution == undefined){
            revslider_showDoubleJqueryError(\"#rev_slider_1_1\");
        }else{
            revapi1 = tpj(\"#rev_slider_1_1\").show().revolution({
                sliderType:\"standard\",
                jsFileLocation:\"js/\",
                sliderLayout:\"auto\",
                dottedOverlay:\"none\",
                delay:9000,
                navigation: {
                    keyboardNavigation:\"off\",
                    keyboard_direction: \"horizontal\",
                    mouseScrollNavigation:\"off\",
                    mouseScrollReverse:\"default\",
                    onHoverStop:\"off\",
                    touch:{
                        touchenabled:\"on\",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: \"horizontal\",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:\"new-bullet-bar\",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:778,
                        hide_onleave:false,
                        left: {
                            h_align:\"left\",
                            v_align:\"center\",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:\"right\",
                            v_align:\"center\",
                            h_offset:30,
                            v_offset:0
                        }
                    },
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        style:\"uranus\",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:\"horizontal\",
                        h_align:\"center\",
                        v_align:\"bottom\",
                        h_offset:0,
                        v_offset:220,
                        space:10,
                        tmp:'<span class=\"tp-bullet-inner\"><\\/span>'
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[900,768,960,720],
                lazyType:\"none\",
                parallax: {
                    type:\"scroll\",
                    origo:\"slidercenter\",
                    speed:1000,
                    speedbg:0,
                    speedls:1000,
                    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
                },
                shadow:0,
                spinner:\"spinner5\",
                stopLoop:\"off\",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:\"off\",
                autoHeight:\"off\",
                disableProgressBar:\"on\",
                fullScreenAutoWidth:\"off\",
                fullScreenAlignForce:\"off\",
                fullScreenOffsetContainer: \"\",
                fullScreenOffset: \"\",
                hideThumbsOnMobile:\"off\",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:\"off\",
                    nextSlideOnWindowFocus:\"off\",
                    disableFocusListener:false,
                }
            });
            jQuery(document).ready(function() {
                jQuery('.hover1').on('hover', function() {
                    jQuery('.arrow1').stop().animate({
                        'margin-left': '10px'
                    }, 200);
                }, function() {
                    jQuery('.arrow1').stop().animate({
                        'margin-left': '0px'
                    }, 200);
                });
                jQuery('.hover2').on('hover', function() {
                    jQuery('.arrow2').stop().animate({
                        'margin-left': '10px'
                    }, 200);
                }, function() {
                    jQuery('.arrow2').stop().animate({
                        'margin-left': '0px'
                    }, 200);
                });
                jQuery('.hover3').on('hover', function() {
                    jQuery('.arrow3').stop().animate({
                        'margin-left': '10px'
                    }, 200);
                }, function() {
                    jQuery('.arrow3').stop().animate({
                        'margin-left': '0px'
                    }, 200);
                });
            });
        }
    }); /*ready*/

</script>
<script src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\">
</script>
</body>

<!-- Mirrored from demos.hogash.com/medlife-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2018 23:05:26 GMT -->
</html>

";
        
        $__internal_f4d6cf2c5b4ed9a135910818e5165d51f80a159255fff17db6bbaa8abd211f0e->leave($__internal_f4d6cf2c5b4ed9a135910818e5165d51f80a159255fff17db6bbaa8abd211f0e_prof);

        
        $__internal_fd520b52e7810070d988cacb1940b55e798b739d5fa73716c12a2b3d80bc8945->leave($__internal_fd520b52e7810070d988cacb1940b55e798b739d5fa73716c12a2b3d80bc8945_prof);

    }

    // line 462
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d3e840a484dfbd56dbfe1ef244b84b33740560341d9da89c383f8d66ef34ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3e840a484dfbd56dbfe1ef244b84b33740560341d9da89c383f8d66ef34ab8->enter($__internal_7d3e840a484dfbd56dbfe1ef244b84b33740560341d9da89c383f8d66ef34ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1bbc4c2f9d0ab69641558e688a8d8e3ef1e9cc629885fc3f7dfd18c2ee71df39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbc4c2f9d0ab69641558e688a8d8e3ef1e9cc629885fc3f7dfd18c2ee71df39->enter($__internal_1bbc4c2f9d0ab69641558e688a8d8e3ef1e9cc629885fc3f7dfd18c2ee71df39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1bbc4c2f9d0ab69641558e688a8d8e3ef1e9cc629885fc3f7dfd18c2ee71df39->leave($__internal_1bbc4c2f9d0ab69641558e688a8d8e3ef1e9cc629885fc3f7dfd18c2ee71df39_prof);

        
        $__internal_7d3e840a484dfbd56dbfe1ef244b84b33740560341d9da89c383f8d66ef34ab8->leave($__internal_7d3e840a484dfbd56dbfe1ef244b84b33740560341d9da89c383f8d66ef34ab8_prof);

    }

    // line 464
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_467be719a6806813b39b37b7ae6fe729a846dd5de6d3e3829b330c6f01d75a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467be719a6806813b39b37b7ae6fe729a846dd5de6d3e3829b330c6f01d75a32->enter($__internal_467be719a6806813b39b37b7ae6fe729a846dd5de6d3e3829b330c6f01d75a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_61428166043dd0238b53e9b543e2615d7cb9577e167eff5d0f64bf9dc352a1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61428166043dd0238b53e9b543e2615d7cb9577e167eff5d0f64bf9dc352a1bf->enter($__internal_61428166043dd0238b53e9b543e2615d7cb9577e167eff5d0f64bf9dc352a1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        
        $__internal_61428166043dd0238b53e9b543e2615d7cb9577e167eff5d0f64bf9dc352a1bf->leave($__internal_61428166043dd0238b53e9b543e2615d7cb9577e167eff5d0f64bf9dc352a1bf_prof);

        
        $__internal_467be719a6806813b39b37b7ae6fe729a846dd5de6d3e3829b330c6f01d75a32->leave($__internal_467be719a6806813b39b37b7ae6fe729a846dd5de6d3e3829b330c6f01d75a32_prof);

    }

    // line 465
    public function block_body($context, array $blocks = array())
    {
        $__internal_442ef3324bb032b5e8ebc9986d36fe998ff89bdd0cc94a65d0d36e959c2d4e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442ef3324bb032b5e8ebc9986d36fe998ff89bdd0cc94a65d0d36e959c2d4e20->enter($__internal_442ef3324bb032b5e8ebc9986d36fe998ff89bdd0cc94a65d0d36e959c2d4e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61f6afadde38e99c505220757c27c016e56cde9b3065cc07c691307acc435f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f6afadde38e99c505220757c27c016e56cde9b3065cc07c691307acc435f86->enter($__internal_61f6afadde38e99c505220757c27c016e56cde9b3065cc07c691307acc435f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61f6afadde38e99c505220757c27c016e56cde9b3065cc07c691307acc435f86->leave($__internal_61f6afadde38e99c505220757c27c016e56cde9b3065cc07c691307acc435f86_prof);

        
        $__internal_442ef3324bb032b5e8ebc9986d36fe998ff89bdd0cc94a65d0d36e959c2d4e20->leave($__internal_442ef3324bb032b5e8ebc9986d36fe998ff89bdd0cc94a65d0d36e959c2d4e20_prof);

    }

    // line 467
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_604b9176cb72eef73c63453a1bd64aaa5857704c2bd2f55ac602d93e2f7d80fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604b9176cb72eef73c63453a1bd64aaa5857704c2bd2f55ac602d93e2f7d80fa->enter($__internal_604b9176cb72eef73c63453a1bd64aaa5857704c2bd2f55ac602d93e2f7d80fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2e0c5210815edca459377c7068b27af6b107a39f7804a83779aa963188e72dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0c5210815edca459377c7068b27af6b107a39f7804a83779aa963188e72dd1->enter($__internal_2e0c5210815edca459377c7068b27af6b107a39f7804a83779aa963188e72dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e0c5210815edca459377c7068b27af6b107a39f7804a83779aa963188e72dd1->leave($__internal_2e0c5210815edca459377c7068b27af6b107a39f7804a83779aa963188e72dd1_prof);

        
        $__internal_604b9176cb72eef73c63453a1bd64aaa5857704c2bd2f55ac602d93e2f7d80fa->leave($__internal_604b9176cb72eef73c63453a1bd64aaa5857704c2bd2f55ac602d93e2f7d80fa_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1108 => 467,  1091 => 465,  1074 => 464,  1057 => 462,  1039 => 821,  887 => 672,  880 => 668,  875 => 666,  869 => 663,  864 => 661,  858 => 658,  852 => 655,  846 => 652,  841 => 650,  836 => 648,  831 => 646,  826 => 644,  821 => 642,  815 => 639,  810 => 637,  804 => 634,  796 => 631,  653 => 491,  647 => 488,  625 => 468,  623 => 467,  620 => 466,  617 => 465,  615 => 464,  612 => 463,  610 => 462,  573 => 428,  554 => 412,  548 => 409,  542 => 406,  502 => 369,  496 => 366,  490 => 363,  426 => 302,  397 => 276,  363 => 245,  357 => 242,  343 => 231,  337 => 228,  331 => 225,  323 => 220,  306 => 206,  285 => 188,  279 => 185,  273 => 182,  202 => 114,  173 => 88,  160 => 82,  106 => 31,  102 => 30,  98 => 29,  92 => 26,  87 => 24,  82 => 22,  78 => 21,  74 => 20,  69 => 18,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zxx\">

<!-- Mirrored from demos.hogash.com/medlife-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2018 23:05:08 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>Hospital</title><!-- Favicon -->
    <link href=\"{{ asset('images/favicon.ico')}}\" rel=\"icon\" type=\"image/x-icon\"><!-- Font Awesome -->
    <link href=\"{{ asset('fonts/font-awesome.min.css')}}\" rel=\"stylesheet\"><!-- Bootstrap -->
    <link href=\"{{ asset('css/bootstrap.css')}}\" rel=\"stylesheet\"><!--=== Add By Designer ===-->
    <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fonts/fonts.css')}}\" rel=\"stylesheet\"><!-- Yamm Megamenu -->
    <link href=\"{{ asset('css/yamm.css')}}\" rel=\"stylesheet\"><!-- Animation -->
    <link href=\"{{ asset('css/animate.css')}}\" rel=\"stylesheet\"><!-- Animation -->
    <!-- Flat Icon -->
    <link href=\"{{ asset('fonts/flaticon.css')}}\" rel=\"stylesheet\"><!-- Flat Icon -->
    <!-- Multi Level Push Menu -->
    <link href=\"{{ asset('css/normalize.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/component.css')}}\" rel=\"stylesheet\">
    <script src=\"{{ asset('js/modernizr.custom.js')}}\">
    </script><!-- Multi Level Push Menu -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>

    <!-- REVOLUTION STYLE SHEETS -->
    <link href=\"{{ asset('js/revslider/settings.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('js/revslider/layers.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('js/revslider/navigation.css')}}\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION LAYERS STYLES -->
</head>
<body>
<!-- Header Start -->
<header class=\"header clearfix\">
    <!-- Header Top Start -->
    <div class=\"h-top clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-4\">
                    <div class=\"h-left\">
                        <p><span><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> OPENED ON WEEKDAYS FROM</span> 8:30 AM TO 6:30 PM</p>
                    </div>
                </div>
                <div class=\"col-sm-8 col-md-8\">
                    <div class=\"h-right\">
                        <!-- History Policy Start -->
                        <div class=\"h-history-policy clearfix\">
                            <div class=\"burger hidden-lg\">
                                <a href=\"#\"><span></span> <span></span> <span></span></a>
                            </div>
                            <ul>
                                <li>
                                    <a href=\"#\">History</a>
                                </li>
                                <li>
                                    <a href=\"#\">Careers</a>
                                </li>
                                <li>
                                    <a href=\"#\">News</a>
                                </li>
                                <li>
                                    <a href=\"#\">Privacy Policy</a>
                                </li>
                            </ul>
                        </div><!-- History Policy End -->
                        <!-- Login-Register Start -->
                        <div class=\"h-login-register clearfix\">
                            <a class=\"hidden-xs\" data-target=\".login-modal\" data-toggle=\"modal\" href=\"#\">Login</a> <a class=\"visible-xs\" data-target=\".login-modal\" data-toggle=\"modal\" href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-sign-in\"></i></a>
                        </div><!-- Login-Register End -->
                    </div><!--/.h-right-->
                </div><!--/.col-sm-8 col-md-8\"-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class=\"h-bottom clearfix\">
        <div class=\"container\">
            <div class=\"navigation-menu\">
                <div class=\"navbar yamm navbar-default\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"{{ path('sante_home') }}\"><img alt=\"\" class=\"hidden-xs hidden-sm\" src=\"{{ asset('images/logo.png')}}\"> <img alt=\"\" class=\"visible-xs visible-sm\" src=\"{{ asset('images/mobile-logo.png')}}\"></a>
                    </div><!-- Desktop Navigation List Start -->
                    <div class=\"navbar-collapse collapse hidden-xs\" id=\"navbar-collapse-1\">
                        <div class=\"background\"></div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown active\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('sante_home') }}\">HOME</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"#\">MedLife – Annapolis</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Germantown</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Columbia</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Olney</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pasadena</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pikesville</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Waldorf</a>
                                    </li>
                                </ul><!--/.dropdown-menu-->
                            </li><!--/.dropdown-->
                            <li class=\"dropdown yamm-fw\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('sante_services') }}\">SERVICES</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <!-- Content container to add padding -->
                                        <div class=\"yamm-content\">
                                            <div class=\"row\">
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 1</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">General & Preventive Care</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Cosmetic Solutions</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Restorative Solutions</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 2</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Additional Treatments</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Orthodontics</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Dentures & Denture Repair</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 3</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Diagnostic & Preventive</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Pediatric Dentistry</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Phisiotheraphy</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-3 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 4</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Minor surgery</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Allergy / Immunology</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Flu vaccination</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                            </div><!--/.row-->
                                        </div><!--/.yamm-content-->
                                    </li>
                                </ul><!--/.dropdown-menu-->
                            </li><!--/.dropdown yamm-fw active-->
                            <li>
                                <a href=\"{{ path('sante_doctors') }}\">DOCTORS</a>
                            </li>
                            <li>
                                <a href=\"{{ path('sante_timetable') }}\">TIMETABLE</a>
                            </li>
                            <li class=\"dropdown active\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('sante_forum') }}\">FORUM</a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"active\">
                                        <a href=\"#\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Appointment</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Blog</a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" href=\"{{ path('sante_shop') }}\">SHOP</a>
                                        <ul class=\"dropdown-menu sub-menu\">
                                            <li>
                                                <a href=\"#\">Products Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Product Details Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Cart Page</a>
                                            </li>
                                        </ul><!--/.dropdown-menu-->
                                    </li><!--/.dropdown-->
                                    <li>
                                        <a href=\"{{ path('sante_locate') }}\">Locate</a>
                                    </li>
                                </ul><!--/.dropdown-menu-->
                            </li><!--/.dropdown active-->
                            <li>
                                <a href=\"{{ path('sante_articles') }}\">ARTICLES</a>
                            </li>
                            <li>
                                <a href=\"{{ path('sante_shop') }}\">SHOP</a>
                            </li>
                            <li class=\"dropdown yamm-fw\">
                                <a class=\"dropdown-toggle\" href=\"{{ path('sante_locate') }}\">LOCATE</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <!-- Content container to add padding -->
                                        <div class=\"yamm-content\">
                                            <div class=\"row\">
                                                <ul class=\"col-md-6 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">ESTABLISHMENT</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"{{ path('sante_locate') }}\">View Establishments</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"{{ path('sante_AddLocate') }}\">Add Establishment</a>
                                                    </li>

                                                </ul><!--/.col-md-3-->
                                                <ul class=\"col-md-6 list-unstyled\">
                                                    <li>
                                                        <a class=\"mega-menu-title\" href=\"#\">CATEGORY 2</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Additional Treatments</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Orthodontics</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Dentures & Denture Repair</a>
                                                    </li>
                                                </ul><!--/.col-md-3-->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul><!--/.nav navbar-nav-->
                    </div><!-- Desktop Navigation List End -->
                    <!-- Mobile Navigation List Start -->
                    <div class=\"dl-menuwrapper visible-xs\" id=\"dl-menu\">
                        <button class=\"dl-trigger\">Open Menu</button>
                        <div class=\"background\"></div>
                        <ul class=\"dl-menu\">
                            <li class=\"active\">
                                <a href=\"{{ path('sante_home') }}\">HOME</a>
                                <ul class=\"dl-submenu\">
                                    <li>
                                        <a href=\"#\">MedLife – Annapolis</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Germantown</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Columbia</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Olney</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pasadena</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Pikesville</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">MedLife – Waldorf</a>
                                    </li>
                                </ul><!--/.dl-submenu-->
                            </li>
                            <li class=\"active\">
                                <a href=\"{{ path('sante_services') }}\">SERVICES</a>
                                <ul class=\"dl-submenu\">
                                    <li>
                                        <a href=\"#\">Category 1</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">General & Preventive Care</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Cosmetic Solutions</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Restorative Solutions</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Category 2</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">Additional Treatments</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Orthodontics</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Dentures & Denture Repair</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Category 3</a>
                                        <ul class=\"dl-submenu\">
                                            <li class=\"active\">
                                                <a href=\"#\">Diagnostic & Preventive</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Pediatric Dentistry</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Phisiotheraphy</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Category 4</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">Minor surgery</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Allergy / Immunology</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Flu vaccination</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                </ul><!--/.dl-submenu-->
                            </li>
                            <li>
                                <a href=\"{{ path('sante_doctors') }}\">DOCTORS</a>
                            </li>
                            <li>
                                <a href=\"{{ path('sante_timetable') }}\">TIMETABLE</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"{{ path('sante_forum') }}\">Forum</a>
                                <ul class=\"dl-submenu\">
                                    <li class=\"active\">
                                        <a href=\"#\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Appointment</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Blog</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Shop</a>
                                        <ul class=\"dl-submenu\">
                                            <li>
                                                <a href=\"#\">Products Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Product Details Page</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Cart Page</a>
                                            </li>
                                        </ul><!--/.dl-submenu-->
                                    </li>
                                    <li>
                                        <a href=\"#\">Contact</a>
                                    </li>
                                </ul><!--/.dl-submenu-->
                            </li>
                            <li>
                                <a href=\"{{ path('sante_articles') }}\">ARTICLES</a>
                            </li>
                            <li>
                                <a href=\"{{ path('sante_shop') }}\">SHOP</a>
                            </li>
                            <li>
                                <a href=\"{{ path('sante_locate') }}\">LOCATE</a>
                            </li>
                        </ul><!--/.dl-menu-->
                    </div><!-- /dl-menuwrapper -->
                    <!-- Mobile Navigation List End -->
                    <!-- Cart Right Start -->
                    <div class=\"cart-right\">
                        <a class=\"phone-btn\" href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-phone\"></i>+44 725-555-1234</a>
                        <div class=\"header-cart\">
                            <a class=\"headercartbtn\" href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-shopping-cart\"></i> <span>1</span></a>
                            <div class=\"cart-down-panel\">
                                <ul class=\"cart-list\">
                                    <li class=\"mini-cart-item\">
                                        <button aria-label=\"Close\" class=\"close\" type=\"button\"><span aria-hidden=\"true\">&times;</span></button>
                                        <div class=\"row\">
                                            <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                <div class=\"mini-cart-image\"><img alt=\"\" class=\"img-responsive\" src=\"{{ asset('images/mini-cart-img.jpg')}}\"></div>
                                            </div>
                                            <div class=\"col-xs-8 col-sm-8 col-md-8 pad-left\">
                                                <div class=\"mini-cart-detail\">
                                                    <a href=\"#\">Oven Roasted duck with special sousage</a>
                                                </div>
                                            </div><!--/.col-xs-8 col-sm-8 col-md-8 pad-left-->
                                        </div><!--/.row-->
                                    </li><!--/.mini-cart-item-->
                                </ul><!--/.cart-list-->
                                <div class=\"total\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"total-left\">
                                                <p>subtotal</p>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"total-right\">
                                                <p>\$35</p>
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                    </div><!--/.row\"-->
                                </div><!--/.total-->
                                <div class=\"mini-cart-btn\">
                                    <a class=\"btn btn-default view-cart\" href=\"#\">view cart</a> <a class=\"btn btn-simple checkout\" href=\"#\">checkout</a>
                                </div><!--/.mini-cart-btn-->
                            </div><!--/.cart-down-panel-->
                        </div><!--/.header-cart-->
                    </div><!-- Cart Right End -->
                </div><!--/.navbar yamm navbar-default-->
            </div><!--/.navigation-menu-->
        </div><!--/.container-->
    </div><!-- Header Bottom End -->
    {% block head %}{% endblock %}
</header><!-- Header End -->
        {% block formulaire %}{% endblock %}
        {% block body %}{% endblock %}

        {% block javascripts %}{% endblock %}
<!-- Footer Start -->
<footer class=\"footer clearfix\">
    <div class=\"container\">
        <!-- Footer Top Start -->
        <div class=\"f-top clearfix\">
            <!-- F-Widget Start -->
            <div class=\"f-widget clearfix\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>MEDLIFE</h6><!-- Medlife Start -->
                        <div class=\"medlife-block\">
                            <p>Consulting WP - Before we talk destination, we shine a spotlight across your organization to fully understand its people, processes, and technology.</p>
                        </div><!-- Medlife End -->
                    </div><!--/.col-sm-6 col-md-3-->
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>FORUM</h6><!-- Medlife Start -->
                        <div class=\"pages-block clearfix\">
                            <div class=\"col-xs-6 col-sm-6 col-md-6 padding\">
                                <ul>
                                    <li>
                                        <a href=\"{{ path('sante_home') }}\">Home</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('sante_services') }}\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Appointment</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Contact</a>
                                    </li>
                                </ul>
                            </div><!--/.col-xs-6 col-sm-6-->
                            <div class=\"col-xs-6 col-sm-6 col-md-6 padding\">
                                <ul>
                                    <li>
                                        <a href=\"#\">Pediatry</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Orthodontics</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Cosmetic Solutions</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Cart</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">SHOP</a>
                                    </li>
                                </ul>
                            </div><!--/.col-xs-6 col-sm-6-->
                        </div><!-- Medlife End -->
                    </div><!--/.-->
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>RECENT NEWS</h6><!-- Medlife Start -->
                        <div class=\"recent-news-block\">
                            <a class=\"view-all\" href=\"#\">VIEW ALL</a> <!-- News Block Start -->
                            <div class=\"news-block\">
                                <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                            </div>
                            <div class=\"news-block\">
                                <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                            </div><!-- News Block End -->
                        </div><!-- Medlife End -->
                    </div><!--/.col-sm-6 col-md-3-->
                    <div class=\"col-sm-6 col-md-3 widget-block\">
                        <h6>NEWSLETTER</h6><!-- Medlife Start -->
                        <div class=\"news-letter-block\">
                            <p>Recieve our latest news straight to your inbox</p>
                            <form action=\"http://your_username.dataserver.list-manage.com/subscribe/post?u=YOUR_API_KEY&amp;id=LIST_ID\" class=\"md__newsletter-form\" id=\"mc-embedded-subscribe-form\" method=\"post\" name=\"mc-embedded-subscribe-form\" novalidate=\"\" target=\"_blank\">
                                <input class=\"email form-control\" name=\"EMAIL\" placeholder=\"Email address\" required=\"\" type=\"email\" value=\"\">
                                <div aria-hidden=\"true\" style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_78185f3823fef6dc6a261e0df_2ebd195299\" tabindex=\"-1\" type=\"text\" value=\"\">
                                </div><button class=\"btn btn-default\" id=\"mc-embedded-subscribe2\" name=\"SEND\" type=\"submit\">Subscribe</button>
                                <div class=\"md__newsletter-message\"></div>
                            </form>
                        </div><!-- Medlife End -->
                    </div><!--/.col-sm-6 col-md-3-->
                </div><!--/.row-->
            </div><!-- F-Widget End -->
        </div><!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class=\"f-bottom clearfix\">
            <p>Made with ♥ by Hogash.com © 2016 Kallyas.net All rights reserved.</p>
            <div class=\"f-social-icons clearfix\">
                <ul>
                    <li>
                        <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li>
                        <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li>
                        <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-instagram\"></i></a>
                    </li>
                </ul>
            </div><!--/.f-social-icons-->
        </div><!-- Footer Bottom End -->
    </div><!--/.container-->
</footer><!-- Footer End -->
<!-- Modal Start -->
<!-- Login Modal Start -->
<div aria-hidden=\"true\" class=\"modal fade login-modal\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <!-- Close Start -->
            <button class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button> <!-- Close End -->
            <!-- Login Section Start -->
            <div class=\"login-block clearfix\">
                <h6>SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES</h6>
                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleInputtext1\">Username</label> <input class=\"form-control\" id=\"exampleInputtext1\" placeholder=\"eg: james_smith\" type=\"text\">
                    </div><!--/.form-group-->
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label> <input class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"type password\" type=\"password\">
                    </div><!--/.form-group-->
                    <div class=\"checkbox\">
                        <label><input type=\"checkbox\"> REMEMBER ME</label>
                    </div><!--/.checkbox-->
                    <button class=\"btn btn-default\" type=\"submit\">Log in</button>
                    <div class=\"forgot-password\">
                        <a href=\"#\">FORGOT YOUR PASSWORD?</a>
                    </div><!--/.forgot-password-->
                </form>
            </div><!-- Login Section End -->
            <!-- Forgot Password Section Start -->
            <div class=\"forgot-password-block clearfix\">
                <h6>FORGOT YOUR DETAILS?</h6>
                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleInputtext2\">Username OR Email</label> <input class=\"form-control\" id=\"exampleInputtext2\" placeholder=\"eg: james_smith\" type=\"text\">
                    </div><button class=\"btn btn-default\" type=\"submit\">SEND MY DETAILS!</button>
                    <div class=\"forgot-password\">
                        <a href=\"#\">AAH, WAIT, I REMEMBER NOW!</a>
                    </div>
                </form>
            </div><!-- Forgot Password Section End -->
        </div><!--/.modal-content-->
    </div><!--/.modal-dialog-->
</div><!-- Login Modal End -->
<!-- Video Modal Start -->
<div aria-hidden=\"true\" class=\"modal fade video-modal\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <!-- Close Start -->
            <button class=\"close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button> <!-- Close End -->
            <iframe allowfullscreen height=\"500\" src=\"https://www.youtube.com/embed/laYzYkpMztw\"></iframe>
        </div><!--/.modal-content-->
    </div><!--/.modal-dialog modal-lg-->
</div><!-- Video Modal End -->
<!-- Modal End -->
<!-- Back To Top Start -->
<div class=\"back-to-top clearfix\">
    <a href=\"#\"><span><i aria-hidden=\"true\" class=\"fa fa-chevron-up\"></i> Top</span></a>
</div><!-- Back To Top End -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script data-cfasync=\"false\" src=\"{{ asset('js/email-decode.min.js')}}\"></script><script src=\"{{ asset('js/jquery-3.1.1.min.js')}}\">
</script> <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"{{ asset('js/bootstrap.min.js')}}\">
</script> <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- REVOLUTION JS FILES -->
<script src=\"{{ asset('js/revslider/jquery.themepunch.tools.min.js')}}\">
</script>
<script src=\"{{ asset('js/revslider/jquery.themepunch.revolution.min.js')}}\">
</script> <!-- REVOLUTION JS FILES -->
<!-- SLIDER REVOLUTION -->
<script src='{{ asset('js/revslider/revolution.extension.actions.min.js')}}'>
</script>
<script src=\"{{ asset('js/revslider/revolution.extension.layeranimation.min.js')}}\">
</script>
<script src=\"{{ asset('js/revslider/revolution.extension.navigation.min.js')}}\">
</script>
<script src=\"{{ asset('js/revslider/revolution.extension.parallax.min.js')}}\">
</script>
<script src='{{ asset('js/revslider/revolution.extension.video.min.js')}}'>
</script>
<script src=\"{{ asset('js/revslider/revolution.extension.slideanims.min.js')}}\">
</script> <!-- SLIDER REVOLUTION -->
<!-- Parallax Start -->
<script src=\"{{ asset('js/parallax.js')}}\">
</script> <!-- Parallax End -->
<!-- Ofi-Script -->
<script src=\"{{ asset('js/ofi.js')}}\">
</script> <!-- Ofi-Script -->
<!-- Mobile Menu Js Start -->
<script src=\"{{ asset('js/jquery.dlmenu.js')}}\">
</script> <!-- Mobile Menu Js End -->
<script src=\"{{ asset('js/slick.js')}}\">
</script> <!-- Slick Sider -->
<!-- Selectric Start -->
<script src=\"{{ asset('js/jquery.selectric.js')}}\">
</script> <!-- Selectric End -->
<script src=\"{{ asset('js/jquery-ui.js')}}\">
</script> <!-- Range Slide -->
<!-- Jquery Ui Date Picker -->
<!-- Bootstrap Time Picker -->
<script src=\"{{ asset('js/jquery.timepicker.js')}}\">
</script> <!-- Bootstrap Time Picker -->

<script>

    \"use strict\";
    //Rev slider
    var setREVStartSize=function(){
        try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
            e.c = jQuery('#rev_slider_1_1');
            e.responsiveLevels = [1240,1024,778,480];
            e.gridwidth = [1240,992,778,480];
            e.gridheight = [868,768,960,720];
            e.sliderLayout = \"fullwidth\";
            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),\"fullscreen\"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(\",\");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split(\"%\").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(\".rev_slider_wrapper\").css({height:f})
        }catch(d){console.log(\"Failure at Presize of Slider:\"+d)}
    };
    setREVStartSize();

    var tpj=jQuery;
    var revapi1;
    tpj(document).ready(function() {
        if(tpj(\"#rev_slider_1_1\").revolution == undefined){
            revslider_showDoubleJqueryError(\"#rev_slider_1_1\");
        }else{
            revapi1 = tpj(\"#rev_slider_1_1\").show().revolution({
                sliderType:\"standard\",
                jsFileLocation:\"js/\",
                sliderLayout:\"auto\",
                dottedOverlay:\"none\",
                delay:9000,
                navigation: {
                    keyboardNavigation:\"off\",
                    keyboard_direction: \"horizontal\",
                    mouseScrollNavigation:\"off\",
                    mouseScrollReverse:\"default\",
                    onHoverStop:\"off\",
                    touch:{
                        touchenabled:\"on\",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: \"horizontal\",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:\"new-bullet-bar\",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:778,
                        hide_onleave:false,
                        left: {
                            h_align:\"left\",
                            v_align:\"center\",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:\"right\",
                            v_align:\"center\",
                            h_offset:30,
                            v_offset:0
                        }
                    },
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        style:\"uranus\",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:\"horizontal\",
                        h_align:\"center\",
                        v_align:\"bottom\",
                        h_offset:0,
                        v_offset:220,
                        space:10,
                        tmp:'<span class=\"tp-bullet-inner\"><\\/span>'
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[900,768,960,720],
                lazyType:\"none\",
                parallax: {
                    type:\"scroll\",
                    origo:\"slidercenter\",
                    speed:1000,
                    speedbg:0,
                    speedls:1000,
                    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
                },
                shadow:0,
                spinner:\"spinner5\",
                stopLoop:\"off\",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:\"off\",
                autoHeight:\"off\",
                disableProgressBar:\"on\",
                fullScreenAutoWidth:\"off\",
                fullScreenAlignForce:\"off\",
                fullScreenOffsetContainer: \"\",
                fullScreenOffset: \"\",
                hideThumbsOnMobile:\"off\",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:\"off\",
                    nextSlideOnWindowFocus:\"off\",
                    disableFocusListener:false,
                }
            });
            jQuery(document).ready(function() {
                jQuery('.hover1').on('hover', function() {
                    jQuery('.arrow1').stop().animate({
                        'margin-left': '10px'
                    }, 200);
                }, function() {
                    jQuery('.arrow1').stop().animate({
                        'margin-left': '0px'
                    }, 200);
                });
                jQuery('.hover2').on('hover', function() {
                    jQuery('.arrow2').stop().animate({
                        'margin-left': '10px'
                    }, 200);
                }, function() {
                    jQuery('.arrow2').stop().animate({
                        'margin-left': '0px'
                    }, 200);
                });
                jQuery('.hover3').on('hover', function() {
                    jQuery('.arrow3').stop().animate({
                        'margin-left': '10px'
                    }, 200);
                }, function() {
                    jQuery('.arrow3').stop().animate({
                        'margin-left': '0px'
                    }, 200);
                });
            });
        }
    }); /*ready*/

</script>
<script src=\"{{ asset('js/script.js')}}\">
</script>
</body>

<!-- Mirrored from demos.hogash.com/medlife-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2018 23:05:26 GMT -->
</html>

", "::base.html.twig", "C:\\wamp64\\www\\Sante\\app/Resources\\views/base.html.twig");
    }
}
