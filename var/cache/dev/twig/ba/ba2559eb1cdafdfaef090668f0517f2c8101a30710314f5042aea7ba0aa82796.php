<?php

/* SanteBundle:Default:doctors.html.twig */
class __TwigTemplate_a8c5e69aff6b9f26ac2de870ae1951bee0d1a9898b47a2bd695cf84564483ec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SanteBundle:Default:doctors.html.twig", 1);
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
        $__internal_0c7601cd62743f44407e283700d67a36872953be8c7fff24c1e307fa6c3ca380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7601cd62743f44407e283700d67a36872953be8c7fff24c1e307fa6c3ca380->enter($__internal_0c7601cd62743f44407e283700d67a36872953be8c7fff24c1e307fa6c3ca380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:doctors.html.twig"));

        $__internal_89ea0ff92fce454e30c8649b697a0ed2c02f534f06be850dca92b220c22b3e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ea0ff92fce454e30c8649b697a0ed2c02f534f06be850dca92b220c22b3e49->enter($__internal_89ea0ff92fce454e30c8649b697a0ed2c02f534f06be850dca92b220c22b3e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:doctors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c7601cd62743f44407e283700d67a36872953be8c7fff24c1e307fa6c3ca380->leave($__internal_0c7601cd62743f44407e283700d67a36872953be8c7fff24c1e307fa6c3ca380_prof);

        
        $__internal_89ea0ff92fce454e30c8649b697a0ed2c02f534f06be850dca92b220c22b3e49->leave($__internal_89ea0ff92fce454e30c8649b697a0ed2c02f534f06be850dca92b220c22b3e49_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_da552bf70cf4a9c181e429b3387e03e319a925a7db7cf19cb5030bc2d7a3c044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da552bf70cf4a9c181e429b3387e03e319a925a7db7cf19cb5030bc2d7a3c044->enter($__internal_da552bf70cf4a9c181e429b3387e03e319a925a7db7cf19cb5030bc2d7a3c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3e74dbd21de26436d81664bfebeb2ef194fc5ee53a8cdf38f727f145d7ed2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e74dbd21de26436d81664bfebeb2ef194fc5ee53a8cdf38f727f145d7ed2af->enter($__internal_d3e74dbd21de26436d81664bfebeb2ef194fc5ee53a8cdf38f727f145d7ed2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Jquery Ui Date Picker -->
    <!-- Range Slider Start -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Range Slider End -->
    <!-- Jquery Ui Date Picker -->
    <!-- Boostrap Time Picker -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Boostrap Time Picker -->
    <!-- Selectric Start -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/selectric.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Selectric End -->
    <!-- Multi Level Push Menu -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\">
    </script><!-- Multi Level Push Menu -->
    <!-- REVOLUTION STYLE SHEETS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revslider/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION LAYERS STYLES -->
    <!-- Slick Slider -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick-slider/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick-slider/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Slick Slider -->
";
        
        $__internal_d3e74dbd21de26436d81664bfebeb2ef194fc5ee53a8cdf38f727f145d7ed2af->leave($__internal_d3e74dbd21de26436d81664bfebeb2ef194fc5ee53a8cdf38f727f145d7ed2af_prof);

        
        $__internal_da552bf70cf4a9c181e429b3387e03e319a925a7db7cf19cb5030bc2d7a3c044->leave($__internal_da552bf70cf4a9c181e429b3387e03e319a925a7db7cf19cb5030bc2d7a3c044_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_72b49b2d924b7ab42126b898dd8cb406b21b4861b67e0024e7dd03f066e364a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b49b2d924b7ab42126b898dd8cb406b21b4861b67e0024e7dd03f066e364a5->enter($__internal_72b49b2d924b7ab42126b898dd8cb406b21b4861b67e0024e7dd03f066e364a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc544ebc18f6ff2e463236d75f39fd06fada65c4b168fb862dcb07e51ab233bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc544ebc18f6ff2e463236d75f39fd06fada65c4b168fb862dcb07e51ab233bf->enter($__internal_cc544ebc18f6ff2e463236d75f39fd06fada65c4b168fb862dcb07e51ab233bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    <!-- Content Start -->
    <section class=\"content inner-pg service-pg clearfix\">
        <!-- Breadcrumb Start -->
        <div class=\"breadcrumb-title clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li>
                                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_home");
        echo "\">HOME</a>
                                </li>
                                <li class=\"active\">DOCTORS</li>
                            </ol><!--/.breadcrumb-->
                        </div><!--/.breadcrumb-left-->
                    </div><!--/.col-sm-6 col-md-6-->
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-right\">
                            <h5>Doctors</h5>
                        </div>
                    </div><!--/.col-sm-6 col-md-6-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Breadcrumb End -->

            <!-- Banner Start -->
            <div class=\"banner inner-banner clearfix\">
                <img alt=\"BANNER\" class=\"img-responsive\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medibg.jpg"), "html", null, true);
        echo "\">
                <div class=\"banner-overlay\"></div><!-- Banner Detail Start -->
                <div class=\"banner-desc clearfix\">
                    <div class=\"container\">
                        <h1>Physicians</h1>
                        <h4>Meet our clinic staff</h4>
                    </div>
                </div><!-- Banner Detail End -->
            </div><!-- Banner End -->
            <!-- Scroll To Section Start -->
            <div class=\"scroll-to-section clearfix\">
                <div class=\"container\">
                    <a href=\"#\"><span><i aria-hidden=\"true\" class=\"fa fa-angle-down\"></i></span></a>
                </div>
            </div><!-- Scroll To Section End -->
            <!-- Phisician Md Start -->
            <div class=\"phisician-md clearfix\">
                <div class=\"container\">
                    <div class=\"col-sm-7 col-md-7\">
                        <div class=\"phisician-left rellax\" data-rellax-speed=\"-2\">
                            <h5>JOHN WAITS, MD</h5>
                            <h5><span>Chief Executive Officer & Faculty Physician</span></h5>
                            <p>Dr. Waits is a practicing, board-certified Family Medicine / Obstetrician who serves as CEO of Cahaba Medical Care and the Program Director and DIO of the Cahaba Family Medicine Residency. He is an associate professor in the Department of Family Medicine and in the Department of Obstetrics and Gynecology at the College of Community Health Sciences at the University of Alabama School of Medicine in Tuscaloosa. He served as Program Director of the Tuscaloosa Family Medicine Residency in Tuscaloosa, Alabama for five years, and during this</p>
                        </div><!--/.phisician-left-->
                    </div><!--/.col-sm-7 col-md-7-->
                    <div class=\"col-sm-5 col-md-5\">
                        <div class=\"phisician-right\">
                            <div class=\"image rellax\" data-rellax-speed=\"-2\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/physicians-md-img.jpg"), "html", null, true);
        echo "\"></div><!-- Join Our Team Start -->
                            <div class=\"join-our-team rellax clearfix\" data-rellax-speed=\"-1.5\">
                                <a class=\"btn btn-default\" href=\"#\" role=\"button\">JOIN OUR TEAM</a>
                            </div><!-- Join Our Team End -->
                            <div class=\"silver-squar rellax\" data-rellax-speed=\"-1.8\"></div>
                        </div><!--/.phisician-right-->
                    </div><!--/.col-sm-5 col-md-5-->
                </div><!--/.container-->
            </div><!-- Phisician Md End -->
            <!-- Clinic Staff Start -->
            <div class=\"doctor-clinic-staff light-gray-bg clearfix\">
                <div class=\"container\">
                    <!-- Section Title Start -->
                    <div class=\"section-title\">
                        <h2>CLINIC STAFF</h2>
                    </div><!-- Section Title End -->
                    <section class=\"regular slider clinic-staff-carousel\">
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Shelley Waits, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff2.jpg"), "html", null, true);
        echo "\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Lacy Smith, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff3.jpg"), "html", null, true);
        echo "\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Joshua Elledge, CRNP</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Shelley Waits, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff2.jpg"), "html", null, true);
        echo "\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Lacy Smith, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff3.jpg"), "html", null, true);
        echo "\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Joshua Elledge, CRNP</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                    </section><!-- Clinic Staff Carousel End -->
                </div><!--/.container-->
            </div><!-- Clinic Staff End -->
            <!-- Medlife Clinic Number Start -->
            <div class=\"medlife-clinic-num clearfix\">
                <div class=\"parallax-window\" data-image-src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/parallex-img.jpg"), "html", null, true);
        echo "\" data-parallax=\"scroll\"></div><!-- Medlife Clinic Number Detail Start -->
                <div class=\"medlife-clinic-num-detail clearfix\">
                    <div class=\"container\">
                        <!-- Section Title Start -->
                        <div class=\"section-title\">
                            <h2>Medlife Clinic by Numbers</h2>
                        </div><!-- Section Title End -->
                        <div class=\"row\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medlife-clinic-icon1.png"), "html", null, true);
        echo "\"></div>
                                    <div class=\"counter\">
                                        360366
                                    </div>
                                    <h6>Patients served</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block treatment-num\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medlife-clinic-icon2.png"), "html", null, true);
        echo "\"></div>
                                    <div class=\"counter\">
                                        45
                                    </div>
                                    <h6>Treatments</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medlife-clinic-icon3.png"), "html", null, true);
        echo "\"></div>
                                    <div class=\"counter\">
                                        121
                                    </div>
                                    <h6>Clinics</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medlife-clinic-icon4.png"), "html", null, true);
        echo "\"></div>
                                    <div class=\"counter\">
                                        1493
                                    </div>
                                    <h6>Employees</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                        </div><!--/.row-->
                    </div><!--/.container-->
                </div><!-- Medlife Clinic Number Detail End -->
            </div><!-- Medlife Clinic Number End -->
            <!-- Nurse Practice Start -->
            <div class=\"nurse-practice clearfix\">
                <div class=\"container\">
                    <!-- Section Title Start -->
                    <div class=\"section-title\">
                        <h2>NURSE PRACTITIONER</h2>
                    </div><!-- Section Title End -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nurse-practice1.jpg"), "html", null, true);
        echo "\">
                                <div class=\"nurse-detail\">
                                    <h6>Brian Wingate, CRNP</h6>
                                    <h6><span>Nurse Anesthetist</span></h6>
                                    <p>Mr. Wingate joined Cahaba Medical Care in April 2016. He holds degrees from Florida State University (BA), Chipola College (ASN), Jackson</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nurse-practice2.jpg"), "html", null, true);
        echo "\">
                                <div class=\"nurse-detail\">
                                    <h6>Reatha Ballard, CRNA</h6>
                                    <h6><span>Nurse Practitioner</span></h6>
                                    <p>Mrs. Ballard stated, \"First, let me say that I am so happy and blessed to be here at CMC. Everyone has been so kind and welcoming.\" Mrs.</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nurse-practice3.jpg"), "html", null, true);
        echo "\">
                                <div class=\"nurse-detail\">
                                    <h6>Lacy Smith, MD</h6>
                                    <h6><span>Nurse Anesthetist</span></h6>
                                    <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nurse-practice4.jpg"), "html", null, true);
        echo "\">
                                <div class=\"nurse-detail\">
                                    <h6>Suzanne Tompkins, PA-C</h6>
                                    <h6><span>Physician Assistant</span></h6>
                                    <p>Dr. Waits joined Cahaba Medical Care in 2013 after graduating from Tuscaloosa Family Medicine Residency and completing</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                    </div><!--/.row-->
                </div><!--/.container-->
            </div><!-- Nurse Practice End -->
        </section><!-- Content End -->
";
        
        $__internal_cc544ebc18f6ff2e463236d75f39fd06fada65c4b168fb862dcb07e51ab233bf->leave($__internal_cc544ebc18f6ff2e463236d75f39fd06fada65c4b168fb862dcb07e51ab233bf_prof);

        
        $__internal_72b49b2d924b7ab42126b898dd8cb406b21b4861b67e0024e7dd03f066e364a5->leave($__internal_72b49b2d924b7ab42126b898dd8cb406b21b4861b67e0024e7dd03f066e364a5_prof);

    }

    public function getTemplateName()
    {
        return "SanteBundle:Default:doctors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 239,  379 => 229,  366 => 219,  353 => 209,  329 => 188,  317 => 179,  305 => 170,  293 => 161,  280 => 151,  265 => 139,  254 => 131,  243 => 123,  232 => 115,  221 => 107,  210 => 99,  189 => 81,  159 => 54,  139 => 37,  127 => 27,  118 => 26,  106 => 24,  102 => 23,  97 => 21,  93 => 20,  89 => 19,  83 => 16,  79 => 15,  75 => 14,  70 => 12,  65 => 10,  59 => 7,  55 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
    <!-- Multi Level Push Menu -->
    <link href=\"{{ asset('css/normalize.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/component.css')}}\" rel=\"stylesheet\">
    <script src=\"{{ asset('js/modernizr.custom.js')}}\">
    </script><!-- Multi Level Push Menu -->
    <!-- REVOLUTION STYLE SHEETS -->
    <link href=\"{{ asset('js/revslider/settings.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('js/revslider/layers.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('js/revslider/navigation.css')}}\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION LAYERS STYLES -->
    <!-- Slick Slider -->
    <link href=\"{{ asset('css/slick-slider/slick.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/slick-slider/slick-theme.css')}}\" rel=\"stylesheet\"><!-- Slick Slider -->
{% endblock %}
{% block body %}
    <!-- Content Start -->
    <section class=\"content inner-pg service-pg clearfix\">
        <!-- Breadcrumb Start -->
        <div class=\"breadcrumb-title clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li>
                                    <a href=\"{{ path('sante_home') }}\">HOME</a>
                                </li>
                                <li class=\"active\">DOCTORS</li>
                            </ol><!--/.breadcrumb-->
                        </div><!--/.breadcrumb-left-->
                    </div><!--/.col-sm-6 col-md-6-->
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-right\">
                            <h5>Doctors</h5>
                        </div>
                    </div><!--/.col-sm-6 col-md-6-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Breadcrumb End -->

            <!-- Banner Start -->
            <div class=\"banner inner-banner clearfix\">
                <img alt=\"BANNER\" class=\"img-responsive\" src=\"{{ asset('images/medibg.jpg')}}\">
                <div class=\"banner-overlay\"></div><!-- Banner Detail Start -->
                <div class=\"banner-desc clearfix\">
                    <div class=\"container\">
                        <h1>Physicians</h1>
                        <h4>Meet our clinic staff</h4>
                    </div>
                </div><!-- Banner Detail End -->
            </div><!-- Banner End -->
            <!-- Scroll To Section Start -->
            <div class=\"scroll-to-section clearfix\">
                <div class=\"container\">
                    <a href=\"#\"><span><i aria-hidden=\"true\" class=\"fa fa-angle-down\"></i></span></a>
                </div>
            </div><!-- Scroll To Section End -->
            <!-- Phisician Md Start -->
            <div class=\"phisician-md clearfix\">
                <div class=\"container\">
                    <div class=\"col-sm-7 col-md-7\">
                        <div class=\"phisician-left rellax\" data-rellax-speed=\"-2\">
                            <h5>JOHN WAITS, MD</h5>
                            <h5><span>Chief Executive Officer & Faculty Physician</span></h5>
                            <p>Dr. Waits is a practicing, board-certified Family Medicine / Obstetrician who serves as CEO of Cahaba Medical Care and the Program Director and DIO of the Cahaba Family Medicine Residency. He is an associate professor in the Department of Family Medicine and in the Department of Obstetrics and Gynecology at the College of Community Health Sciences at the University of Alabama School of Medicine in Tuscaloosa. He served as Program Director of the Tuscaloosa Family Medicine Residency in Tuscaloosa, Alabama for five years, and during this</p>
                        </div><!--/.phisician-left-->
                    </div><!--/.col-sm-7 col-md-7-->
                    <div class=\"col-sm-5 col-md-5\">
                        <div class=\"phisician-right\">
                            <div class=\"image rellax\" data-rellax-speed=\"-2\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/physicians-md-img.jpg')}}\"></div><!-- Join Our Team Start -->
                            <div class=\"join-our-team rellax clearfix\" data-rellax-speed=\"-1.5\">
                                <a class=\"btn btn-default\" href=\"#\" role=\"button\">JOIN OUR TEAM</a>
                            </div><!-- Join Our Team End -->
                            <div class=\"silver-squar rellax\" data-rellax-speed=\"-1.8\"></div>
                        </div><!--/.phisician-right-->
                    </div><!--/.col-sm-5 col-md-5-->
                </div><!--/.container-->
            </div><!-- Phisician Md End -->
            <!-- Clinic Staff Start -->
            <div class=\"doctor-clinic-staff light-gray-bg clearfix\">
                <div class=\"container\">
                    <!-- Section Title Start -->
                    <div class=\"section-title\">
                        <h2>CLINIC STAFF</h2>
                    </div><!-- Section Title End -->
                    <section class=\"regular slider clinic-staff-carousel\">
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff1.jpg')}}\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Shelley Waits, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff2.jpg')}}\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Lacy Smith, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff3.jpg')}}\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Joshua Elledge, CRNP</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff1.jpg')}}\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Shelley Waits, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff2.jpg')}}\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Lacy Smith, MD</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                        <div>
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff3.jpg')}}\">
                            <div class=\"staff-detail clearfix\">
                                <h6>Joshua Elledge, CRNP</h6>
                                <h6><span>Chief Medical Officer & Faculty Physician</span></h6>
                                <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                            </div><!--/.staff-detail-->
                        </div>
                    </section><!-- Clinic Staff Carousel End -->
                </div><!--/.container-->
            </div><!-- Clinic Staff End -->
            <!-- Medlife Clinic Number Start -->
            <div class=\"medlife-clinic-num clearfix\">
                <div class=\"parallax-window\" data-image-src=\"{{ asset('images/parallex-img.jpg')}}\" data-parallax=\"scroll\"></div><!-- Medlife Clinic Number Detail Start -->
                <div class=\"medlife-clinic-num-detail clearfix\">
                    <div class=\"container\">
                        <!-- Section Title Start -->
                        <div class=\"section-title\">
                            <h2>Medlife Clinic by Numbers</h2>
                        </div><!-- Section Title End -->
                        <div class=\"row\">
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/medlife-clinic-icon1.png')}}\"></div>
                                    <div class=\"counter\">
                                        360366
                                    </div>
                                    <h6>Patients served</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block treatment-num\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/medlife-clinic-icon2.png')}}\"></div>
                                    <div class=\"counter\">
                                        45
                                    </div>
                                    <h6>Treatments</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/medlife-clinic-icon3.png')}}\"></div>
                                    <div class=\"counter\">
                                        121
                                    </div>
                                    <h6>Clinics</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                            <div class=\"col-xs-3 col-sm-3 col-md-3\">
                                <div class=\"medlife-clinic-block\">
                                    <div class=\"image\"><img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/medlife-clinic-icon4.png')}}\"></div>
                                    <div class=\"counter\">
                                        1493
                                    </div>
                                    <h6>Employees</h6>
                                </div><!--/.medlife-clinic-block-->
                            </div><!--/.col-xs-3 col-sm-3 col-md-3-->
                        </div><!--/.row-->
                    </div><!--/.container-->
                </div><!-- Medlife Clinic Number Detail End -->
            </div><!-- Medlife Clinic Number End -->
            <!-- Nurse Practice Start -->
            <div class=\"nurse-practice clearfix\">
                <div class=\"container\">
                    <!-- Section Title Start -->
                    <div class=\"section-title\">
                        <h2>NURSE PRACTITIONER</h2>
                    </div><!-- Section Title End -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"{{ asset('images/nurse-practice1.jpg')}}\">
                                <div class=\"nurse-detail\">
                                    <h6>Brian Wingate, CRNP</h6>
                                    <h6><span>Nurse Anesthetist</span></h6>
                                    <p>Mr. Wingate joined Cahaba Medical Care in April 2016. He holds degrees from Florida State University (BA), Chipola College (ASN), Jackson</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"{{ asset('images/nurse-practice2.jpg')}}\">
                                <div class=\"nurse-detail\">
                                    <h6>Reatha Ballard, CRNA</h6>
                                    <h6><span>Nurse Practitioner</span></h6>
                                    <p>Mrs. Ballard stated, \"First, let me say that I am so happy and blessed to be here at CMC. Everyone has been so kind and welcoming.\" Mrs.</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"{{ asset('images/nurse-practice3.jpg')}}\">
                                <div class=\"nurse-detail\">
                                    <h6>Lacy Smith, MD</h6>
                                    <h6><span>Nurse Anesthetist</span></h6>
                                    <p>Dr. Smith joined Cahaba Medical Care in 2010 and worked with Dr. Waits to transition CMC into a FQHC as well as assisted in co-founding</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"practice-block\">
                                <img alt=\"NURSE\" class=\"img-responsive\" src=\"{{ asset('images/nurse-practice4.jpg')}}\">
                                <div class=\"nurse-detail\">
                                    <h6>Suzanne Tompkins, PA-C</h6>
                                    <h6><span>Physician Assistant</span></h6>
                                    <p>Dr. Waits joined Cahaba Medical Care in 2013 after graduating from Tuscaloosa Family Medicine Residency and completing</p>
                                </div><!--/.nurse-detail\"-->
                            </div><!--/.practice-block-->
                        </div><!--/.col-sm-6 col-md-6 col-lg-3-->
                    </div><!--/.row-->
                </div><!--/.container-->
            </div><!-- Nurse Practice End -->
        </section><!-- Content End -->
{% endblock %}", "SanteBundle:Default:doctors.html.twig", "C:\\wamp64\\www\\Sante\\src\\SanteBundle/Resources/views/Default/doctors.html.twig");
    }
}
