<?php

/* SanteBundle:Default:articles.html.twig */
class __TwigTemplate_277b019e1c36b0dba6d093a000f8da568eeecbcc7414b15517ceff62a9dbdcab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SanteBundle:Default:articles.html.twig", 1);
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
        $__internal_850f0d0baa1f6acfaa9bdb45bccccb063482c27827a0985c94d9434f9a92db2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850f0d0baa1f6acfaa9bdb45bccccb063482c27827a0985c94d9434f9a92db2a->enter($__internal_850f0d0baa1f6acfaa9bdb45bccccb063482c27827a0985c94d9434f9a92db2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:articles.html.twig"));

        $__internal_44fb79e48b391abcc2469c011aa65addb9a0c3075b39032e28b86b1a3ecae12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fb79e48b391abcc2469c011aa65addb9a0c3075b39032e28b86b1a3ecae12a->enter($__internal_44fb79e48b391abcc2469c011aa65addb9a0c3075b39032e28b86b1a3ecae12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850f0d0baa1f6acfaa9bdb45bccccb063482c27827a0985c94d9434f9a92db2a->leave($__internal_850f0d0baa1f6acfaa9bdb45bccccb063482c27827a0985c94d9434f9a92db2a_prof);

        
        $__internal_44fb79e48b391abcc2469c011aa65addb9a0c3075b39032e28b86b1a3ecae12a->leave($__internal_44fb79e48b391abcc2469c011aa65addb9a0c3075b39032e28b86b1a3ecae12a_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_260d48569f22aff4c2f1671f225f7d24ded8d4b7dc86185d2eb5d4c19bed5bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260d48569f22aff4c2f1671f225f7d24ded8d4b7dc86185d2eb5d4c19bed5bbc->enter($__internal_260d48569f22aff4c2f1671f225f7d24ded8d4b7dc86185d2eb5d4c19bed5bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d004048f14424cce4274dddf80282760436fc6b26d3885e33bbe9b2f93137dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d004048f14424cce4274dddf80282760436fc6b26d3885e33bbe9b2f93137dc3->enter($__internal_d004048f14424cce4274dddf80282760436fc6b26d3885e33bbe9b2f93137dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d004048f14424cce4274dddf80282760436fc6b26d3885e33bbe9b2f93137dc3->leave($__internal_d004048f14424cce4274dddf80282760436fc6b26d3885e33bbe9b2f93137dc3_prof);

        
        $__internal_260d48569f22aff4c2f1671f225f7d24ded8d4b7dc86185d2eb5d4c19bed5bbc->leave($__internal_260d48569f22aff4c2f1671f225f7d24ded8d4b7dc86185d2eb5d4c19bed5bbc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_709373aae0dcea252c4cfcabe7f80c254f4ec29de37d2df85a3143266fc4dc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709373aae0dcea252c4cfcabe7f80c254f4ec29de37d2df85a3143266fc4dc81->enter($__internal_709373aae0dcea252c4cfcabe7f80c254f4ec29de37d2df85a3143266fc4dc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac5fe3c5edd89ffb94503dbf10acdff0c5624ccc9045a2be0c8b3bb3927a8128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5fe3c5edd89ffb94503dbf10acdff0c5624ccc9045a2be0c8b3bb3927a8128->enter($__internal_ac5fe3c5edd89ffb94503dbf10acdff0c5624ccc9045a2be0c8b3bb3927a8128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- Content Start -->
    <section class=\"content inner-pg blog-pg clearfix\">
        <!-- Breadcrumb Start -->
        <div class=\"breadcrumb-title clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li>
                                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_home");
        echo "\">HOME</a>
                                </li>
                                <li class=\"active\">ARTICLES & EVENTS</li>
                            </ol>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-right\">
                            <h5>Articles & Events</h5>
                        </div>
                    </div><!--/.col-sm-6 col-md-6-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Breadcrumb End -->
        <div class=\"container\">
            <!-- Inner Pages Start -->
            <div class=\"inner-content clearfix\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-8 col-lg-9\">
                        <!-- Content Description Start -->
                        <div class=\"content-desc clearfix\">
                            <!-- Blog Lists Start -->
                            <div class=\"blog-lists clearfix\">
                                <!-- Blog Post Start -->
                                <div class=\"blog-post clearfix\">
                                    <!-- Blog Image Start -->
                                    <div class=\"blog-image clearfix\">
                                        <a class=\"image clearfix\" href=\"#\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog-post1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"overlay\"></div></a> <!-- Employee Detail Start -->
                                        <div class=\"emp-detail clearfix\">
                                            <div class=\"row\">
                                                <div class=\"emp-left emp-block\">
                                                    <div class=\"emp-left emp-block\">
                                                        <div class=\"image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff2.jpg"), "html", null, true);
        echo "\"></div><a href=\"#\">mihai</a>
                                                        <ul>
                                                            <li>FRIDAY, 30 SEPTEMBER 2016</li>
                                                            <li>PUBLISHED IN <a href=\"#\">UNCATEGORIZED</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-left emp-block-->
                                                </div><!--/.emp-left emp-block-->
                                                <div class=\"col-sm-2 col-md-2\">
                                                    <div class=\"emp-right emp-block\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-comment-o\"></i> 0</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-right emp-block-->
                                                </div><!--/.col-sm-2 col-md-2-->
                                            </div><!--/.row-->
                                        </div><!-- Employee Detail End -->
                                    </div><!-- Blog Image End -->
                                    <!-- Blog Detail Start -->
                                    <div class=\"blog-detail clearfix\">
                                        <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque orci at eleifend sagittis. Cras mollis magna ex, viverra placerat orci ornare pretium. Fusce sed nibh ac nisl rutrum bibendum sed quis lectus. Vestibulum at pulvinar lectus. Sed ac lobortis neque, id dignissim ex. Curabitur a purus vel mauris consequat ornare. Pellentesque erat nisi, consectetur</p><!-- Read More SVG Start -->
                                        <a class=\"read-more\" href=\"#\" title=\"Read more\"><svg height=\"57px\" version=\"1.1\" viewbox=\"0 0 59 57\" width=\"59px\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M23,35 C23.5522847,35 24,35.4477153 24,36 C24,36.5522847 23.5522847,37 23,37 C22.4477153,37 22,36.5522847 22,36 C22,35.4477153 22.4477153,35 23,35 L23,35 Z M28,36 C28,36.5522847 27.5522847,37 27,37 C26.4477153,37 26,36.5522847 26,36 C26,35.4477153 26.4477153,35 27,35 C27.5522847,35 28,35.4477153 28,36 L28,36 Z M31,35 C31.5522847,35 32,35.4477153 32,36 C32,36.5522847 31.5522847,37 31,37 C30.4477153,37 30,36.5522847 30,36 C30,35.4477153 30.4477153,35 31,35 L31,35 Z\" fill=\"#333333\"></path>
                                                <rect class=\"svg-more-l1\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"21\"></rect>
                                                <rect class=\"svg-more-l2\" fill=\"#333333\" height=\"2\" width=\"10\" x=\"22\" y=\"25\"></rect>
                                                <rect class=\"svg-more-l3\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"29\"></rect>
                                                <rect class=\"svg-more-bg\" fill=\"none\" height=\"49\" rx=\"5\" stroke=\"#333333\" stroke-width=\"2\" width=\"51\" x=\"4\" y=\"4\"></rect></svg></a> <!-- Read More SVG End -->
                                    </div><!-- Blog Detail End -->
                                </div><!-- Blog Post End -->
                                <!-- Blog Post Start -->
                                <div class=\"blog-post clearfix\">
                                    <!-- Blog Image Start -->
                                    <div class=\"blog-image clearfix\">
                                        <a class=\"image clearfix\" href=\"#\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog-post2.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"overlay\"></div></a> <!-- Employee Detail Start -->
                                        <div class=\"emp-detail clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-10 col-md-10\">
                                                    <div class=\"emp-left emp-block\">
                                                        <div class=\"image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff2.jpg"), "html", null, true);
        echo "\"></div><a href=\"#\">mihai</a>
                                                        <ul>
                                                            <li>FRIDAY, 30 SEPTEMBER 2016</li>
                                                            <li>PUBLISHED IN <a href=\"#\">UNCATEGORIZED</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-2 col-md-2\">
                                                    <div class=\"emp-right emp-block\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-comment-o\"></i> 0</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-right emp-block-->
                                                </div><!--/.col-sm-2 col-md-2-->
                                            </div><!--/.row-->
                                        </div><!-- Employee Detail End -->
                                    </div><!-- Blog Image End -->
                                    <!-- Blog Detail Start -->
                                    <div class=\"blog-detail clearfix\">
                                        <a href=\"blog-single.html\">Eye lens regeneration from own stem cells</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque orci at eleifend sagittis. Cras mollis magna ex, viverra placerat orci ornare pretium. Fusce sed nibh ac nisl rutrum bibendum sed quis lectus. Vestibulum at pulvinar lectus. Sed ac lobortis neque, id dignissim ex. Curabitur a purus vel mauris consequat ornare. Pellentesque erat nisi, consectetur</p><!-- Read More SVG Start -->
                                        <a class=\"read-more\" href=\"blog-single.html\" title=\"Read more\"><svg height=\"57px\" version=\"1.1\" viewbox=\"0 0 59 57\" width=\"59px\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M23,35 C23.5522847,35 24,35.4477153 24,36 C24,36.5522847 23.5522847,37 23,37 C22.4477153,37 22,36.5522847 22,36 C22,35.4477153 22.4477153,35 23,35 L23,35 Z M28,36 C28,36.5522847 27.5522847,37 27,37 C26.4477153,37 26,36.5522847 26,36 C26,35.4477153 26.4477153,35 27,35 C27.5522847,35 28,35.4477153 28,36 L28,36 Z M31,35 C31.5522847,35 32,35.4477153 32,36 C32,36.5522847 31.5522847,37 31,37 C30.4477153,37 30,36.5522847 30,36 C30,35.4477153 30.4477153,35 31,35 L31,35 Z\" fill=\"#333333\"></path>
                                                <rect class=\"svg-more-l1\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"21\"></rect>
                                                <rect class=\"svg-more-l2\" fill=\"#333333\" height=\"2\" width=\"10\" x=\"22\" y=\"25\"></rect>
                                                <rect class=\"svg-more-l3\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"29\"></rect>
                                                <rect class=\"svg-more-bg\" fill=\"none\" height=\"49\" rx=\"5\" stroke=\"#333333\" stroke-width=\"2\" width=\"51\" x=\"4\" y=\"4\"></rect></svg></a> <!-- Read More SVG End -->
                                    </div><!-- Blog Detail End -->
                                </div><!-- Blog Post End -->
                                <!-- Blog Post Start -->
                                <div class=\"blog-post clearfix\">
                                    <!-- Blog Image Start -->
                                    <div class=\"blog-image clearfix\">
                                        <a class=\"image clearfix\" href=\"#\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog-post3.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"overlay\"></div></a> <!-- Employee Detail Start -->
                                        <div class=\"emp-detail clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-10 col-md-10\">
                                                    <div class=\"emp-left emp-block\">
                                                        <div class=\"image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/clinic-staff3.jpg"), "html", null, true);
        echo "\"></div><a href=\"#\">mihai</a>
                                                        <ul>
                                                            <li>FRIDAY, 30 SEPTEMBER 2016</li>
                                                            <li>PUBLISHED IN <a href=\"#\">UNCATEGORIZED</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-left emp-block-->
                                                </div><!--/.col-sm-10 col-md-10-->
                                                <div class=\"col-sm-2 col-md-2\">
                                                    <div class=\"emp-right emp-block\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-comment-o\"></i> 0</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-right emp-block-->
                                                </div><!--/.col-sm-2 col-md-2-->
                                            </div><!--/.row\"-->
                                        </div><!-- Employee Detail End -->
                                    </div><!-- Blog Image End -->
                                    <!-- Blog Detail Start -->
                                    <div class=\"blog-detail clearfix\">
                                        <a href=\"blog-single.html\">Sense of smell may predict Alzheimer’s risk</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque orci at eleifend sagittis. Cras mollis magna ex, viverra placerat orci ornare pretium. Fusce sed nibh ac nisl rutrum bibendum sed quis lectus. Vestibulum at pulvinar lectus. Sed ac lobortis neque, id dignissim ex. Curabitur a purus vel mauris consequat ornare. Pellentesque erat nisi, consectetur</p><!-- Read More SVG Start -->
                                        <a class=\"read-more\" href=\"blog-single.html\" title=\"Read more\"><svg height=\"57px\" version=\"1.1\" viewbox=\"0 0 59 57\" width=\"59px\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M23,35 C23.5522847,35 24,35.4477153 24,36 C24,36.5522847 23.5522847,37 23,37 C22.4477153,37 22,36.5522847 22,36 C22,35.4477153 22.4477153,35 23,35 L23,35 Z M28,36 C28,36.5522847 27.5522847,37 27,37 C26.4477153,37 26,36.5522847 26,36 C26,35.4477153 26.4477153,35 27,35 C27.5522847,35 28,35.4477153 28,36 L28,36 Z M31,35 C31.5522847,35 32,35.4477153 32,36 C32,36.5522847 31.5522847,37 31,37 C30.4477153,37 30,36.5522847 30,36 C30,35.4477153 30.4477153,35 31,35 L31,35 Z\" fill=\"#333333\"></path>
                                                <rect class=\"svg-more-l1\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"21\"></rect>
                                                <rect class=\"svg-more-l2\" fill=\"#333333\" height=\"2\" width=\"10\" x=\"22\" y=\"25\"></rect>
                                                <rect class=\"svg-more-l3\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"29\"></rect>
                                                <rect class=\"svg-more-bg\" fill=\"none\" height=\"49\" rx=\"5\" stroke=\"#333333\" stroke-width=\"2\" width=\"51\" x=\"4\" y=\"4\"></rect></svg></a> <!-- Read More SVG End -->
                                    </div><!-- Blog Detail End -->
                                </div><!-- Blog Post End -->
                            </div><!-- Blog Lists End -->
                        </div><!-- Content Description End -->
                    </div><!--/.col-sm-12 col-md-8 col-lg-9-->
                    <div class=\"col-sm-12 col-md-4 col-lg-3\">
                        <!-- Sidebar Widget Start -->
                        <div class=\"blog-sidebar-widget white-bg clearfix\">
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"search-box clearfix\">
                                        <input class=\"form-control\" placeholder=\"SEARCH...\" type=\"text\"> <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-search\"></i></a>
                                    </div>
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>RECENT POSTS</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"recent-posts clearfix\">
                                        <!-- Post Block Start -->
                                        <div class=\"post-block clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                    <a class=\"image\" href=\"blog-single.html\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/media-health-img3.jpg"), "html", null, true);
        echo "\"></a>
                                                </div>
                                                <div class=\"col-xs-8 col-sm-8 col-md-8\">
                                                    <div class=\"post-desc\">
                                                        <a href=\"blog-single.html\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc...</p>
                                                    </div><!--/.post-desc-->
                                                </div><!--/.col-xs-8 col-sm-8 col-md-8-->
                                            </div><!--/.row\"-->
                                        </div><!-- Post Block End -->
                                        <!-- Post Block Start -->
                                        <div class=\"post-block clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                    <a class=\"image\" href=\"blog-single.html\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/plastic-surgery.jpg"), "html", null, true);
        echo "\"></a>
                                                </div>
                                                <div class=\"col-xs-8 col-sm-8 col-md-8\">
                                                    <div class=\"post-desc\">
                                                        <a href=\"blog-single.html\">Eye lens regeneration from own stem cells</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc...</p>
                                                    </div>
                                                </div><!--/.col-xs-8 col-sm-8 col-md-8-->
                                            </div><!--/.row-->
                                        </div><!-- Post Block End -->
                                        <!-- Post Block Start -->
                                        <div class=\"post-block clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                    <a class=\"image\" href=\"blog-single.html\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/media-health-img2.jpg"), "html", null, true);
        echo "\"></a>
                                                </div>
                                                <div class=\"col-xs-8 col-sm-8 col-md-8\">
                                                    <div class=\"post-desc\">
                                                        <a href=\"blog-single.html\">Sense of smell may predict Alzheimer’s risk</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc...</p>
                                                    </div>
                                                </div><!--/.col-xs-8 col-sm-8 col-md-8-->
                                            </div><!--/.row-->
                                        </div><!-- Post Block End -->
                                    </div><!--/.recent-posts clearfix-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>ARCHIVES</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"archives clearfix\">
                                        <ul>
                                            <li>
                                                <a href=\"blog.html\">September 2016</a>
                                            </li>
                                        </ul>
                                    </div><!--/.archives clearfix-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>CATEGORIES</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"categories clearfix\">
                                        <ul>
                                            <li>
                                                <a href=\"blog.html\">Uncategorized</a>
                                            </li>
                                        </ul>
                                    </div><!--/.categories-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>META</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"categories clearfix\">
                                        <ul>
                                            <li>
                                                <a href=\"blog.html\">Log in</a>
                                            </li>
                                            <li>
                                                <a href=\"blog.html\">Entries <abbr title=\"Really Simple Syndication\">RSS</abbr></a>
                                            </li>
                                            <li>
                                                <a href=\"blog.html\">Comments <abbr title=\"Really Simple Syndication\">RSS</abbr></a>
                                            </li>
                                            <li>
                                                <a href=\"blog.html\">WordPress.org</a>
                                            </li>
                                        </ul>
                                    </div><!--/.categories-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                        </div><!-- Sidebar Widget End -->
                    </div><!--/.col-sm-12 col-md-4 col-lg-3-->
                </div><!--/.row-->
            </div><!-- Inner Pages End -->
        </div><!--/.container-->
    </section><!-- Content End -->
";
        
        $__internal_ac5fe3c5edd89ffb94503dbf10acdff0c5624ccc9045a2be0c8b3bb3927a8128->leave($__internal_ac5fe3c5edd89ffb94503dbf10acdff0c5624ccc9045a2be0c8b3bb3927a8128_prof);

        
        $__internal_709373aae0dcea252c4cfcabe7f80c254f4ec29de37d2df85a3143266fc4dc81->leave($__internal_709373aae0dcea252c4cfcabe7f80c254f4ec29de37d2df85a3143266fc4dc81_prof);

    }

    public function getTemplateName()
    {
        return "SanteBundle:Default:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 218,  292 => 204,  275 => 190,  214 => 132,  205 => 126,  166 => 90,  157 => 84,  118 => 48,  109 => 42,  79 => 15,  67 => 5,  58 => 4,  41 => 2,  11 => 1,);
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
{% endblock %}
{% block body %}
    <!-- Content Start -->
    <section class=\"content inner-pg blog-pg clearfix\">
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
                                <li class=\"active\">ARTICLES & EVENTS</li>
                            </ol>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-right\">
                            <h5>Articles & Events</h5>
                        </div>
                    </div><!--/.col-sm-6 col-md-6-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Breadcrumb End -->
        <div class=\"container\">
            <!-- Inner Pages Start -->
            <div class=\"inner-content clearfix\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-8 col-lg-9\">
                        <!-- Content Description Start -->
                        <div class=\"content-desc clearfix\">
                            <!-- Blog Lists Start -->
                            <div class=\"blog-lists clearfix\">
                                <!-- Blog Post Start -->
                                <div class=\"blog-post clearfix\">
                                    <!-- Blog Image Start -->
                                    <div class=\"blog-image clearfix\">
                                        <a class=\"image clearfix\" href=\"#\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/blog-post1.jpg')}}\">
                                            <div class=\"overlay\"></div></a> <!-- Employee Detail Start -->
                                        <div class=\"emp-detail clearfix\">
                                            <div class=\"row\">
                                                <div class=\"emp-left emp-block\">
                                                    <div class=\"emp-left emp-block\">
                                                        <div class=\"image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff2.jpg')}}\"></div><a href=\"#\">mihai</a>
                                                        <ul>
                                                            <li>FRIDAY, 30 SEPTEMBER 2016</li>
                                                            <li>PUBLISHED IN <a href=\"#\">UNCATEGORIZED</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-left emp-block-->
                                                </div><!--/.emp-left emp-block-->
                                                <div class=\"col-sm-2 col-md-2\">
                                                    <div class=\"emp-right emp-block\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-comment-o\"></i> 0</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-right emp-block-->
                                                </div><!--/.col-sm-2 col-md-2-->
                                            </div><!--/.row-->
                                        </div><!-- Employee Detail End -->
                                    </div><!-- Blog Image End -->
                                    <!-- Blog Detail Start -->
                                    <div class=\"blog-detail clearfix\">
                                        <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque orci at eleifend sagittis. Cras mollis magna ex, viverra placerat orci ornare pretium. Fusce sed nibh ac nisl rutrum bibendum sed quis lectus. Vestibulum at pulvinar lectus. Sed ac lobortis neque, id dignissim ex. Curabitur a purus vel mauris consequat ornare. Pellentesque erat nisi, consectetur</p><!-- Read More SVG Start -->
                                        <a class=\"read-more\" href=\"#\" title=\"Read more\"><svg height=\"57px\" version=\"1.1\" viewbox=\"0 0 59 57\" width=\"59px\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M23,35 C23.5522847,35 24,35.4477153 24,36 C24,36.5522847 23.5522847,37 23,37 C22.4477153,37 22,36.5522847 22,36 C22,35.4477153 22.4477153,35 23,35 L23,35 Z M28,36 C28,36.5522847 27.5522847,37 27,37 C26.4477153,37 26,36.5522847 26,36 C26,35.4477153 26.4477153,35 27,35 C27.5522847,35 28,35.4477153 28,36 L28,36 Z M31,35 C31.5522847,35 32,35.4477153 32,36 C32,36.5522847 31.5522847,37 31,37 C30.4477153,37 30,36.5522847 30,36 C30,35.4477153 30.4477153,35 31,35 L31,35 Z\" fill=\"#333333\"></path>
                                                <rect class=\"svg-more-l1\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"21\"></rect>
                                                <rect class=\"svg-more-l2\" fill=\"#333333\" height=\"2\" width=\"10\" x=\"22\" y=\"25\"></rect>
                                                <rect class=\"svg-more-l3\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"29\"></rect>
                                                <rect class=\"svg-more-bg\" fill=\"none\" height=\"49\" rx=\"5\" stroke=\"#333333\" stroke-width=\"2\" width=\"51\" x=\"4\" y=\"4\"></rect></svg></a> <!-- Read More SVG End -->
                                    </div><!-- Blog Detail End -->
                                </div><!-- Blog Post End -->
                                <!-- Blog Post Start -->
                                <div class=\"blog-post clearfix\">
                                    <!-- Blog Image Start -->
                                    <div class=\"blog-image clearfix\">
                                        <a class=\"image clearfix\" href=\"#\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/blog-post2.jpg')}}\">
                                            <div class=\"overlay\"></div></a> <!-- Employee Detail Start -->
                                        <div class=\"emp-detail clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-10 col-md-10\">
                                                    <div class=\"emp-left emp-block\">
                                                        <div class=\"image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff2.jpg')}}\"></div><a href=\"#\">mihai</a>
                                                        <ul>
                                                            <li>FRIDAY, 30 SEPTEMBER 2016</li>
                                                            <li>PUBLISHED IN <a href=\"#\">UNCATEGORIZED</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-2 col-md-2\">
                                                    <div class=\"emp-right emp-block\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-comment-o\"></i> 0</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-right emp-block-->
                                                </div><!--/.col-sm-2 col-md-2-->
                                            </div><!--/.row-->
                                        </div><!-- Employee Detail End -->
                                    </div><!-- Blog Image End -->
                                    <!-- Blog Detail Start -->
                                    <div class=\"blog-detail clearfix\">
                                        <a href=\"blog-single.html\">Eye lens regeneration from own stem cells</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque orci at eleifend sagittis. Cras mollis magna ex, viverra placerat orci ornare pretium. Fusce sed nibh ac nisl rutrum bibendum sed quis lectus. Vestibulum at pulvinar lectus. Sed ac lobortis neque, id dignissim ex. Curabitur a purus vel mauris consequat ornare. Pellentesque erat nisi, consectetur</p><!-- Read More SVG Start -->
                                        <a class=\"read-more\" href=\"blog-single.html\" title=\"Read more\"><svg height=\"57px\" version=\"1.1\" viewbox=\"0 0 59 57\" width=\"59px\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M23,35 C23.5522847,35 24,35.4477153 24,36 C24,36.5522847 23.5522847,37 23,37 C22.4477153,37 22,36.5522847 22,36 C22,35.4477153 22.4477153,35 23,35 L23,35 Z M28,36 C28,36.5522847 27.5522847,37 27,37 C26.4477153,37 26,36.5522847 26,36 C26,35.4477153 26.4477153,35 27,35 C27.5522847,35 28,35.4477153 28,36 L28,36 Z M31,35 C31.5522847,35 32,35.4477153 32,36 C32,36.5522847 31.5522847,37 31,37 C30.4477153,37 30,36.5522847 30,36 C30,35.4477153 30.4477153,35 31,35 L31,35 Z\" fill=\"#333333\"></path>
                                                <rect class=\"svg-more-l1\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"21\"></rect>
                                                <rect class=\"svg-more-l2\" fill=\"#333333\" height=\"2\" width=\"10\" x=\"22\" y=\"25\"></rect>
                                                <rect class=\"svg-more-l3\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"29\"></rect>
                                                <rect class=\"svg-more-bg\" fill=\"none\" height=\"49\" rx=\"5\" stroke=\"#333333\" stroke-width=\"2\" width=\"51\" x=\"4\" y=\"4\"></rect></svg></a> <!-- Read More SVG End -->
                                    </div><!-- Blog Detail End -->
                                </div><!-- Blog Post End -->
                                <!-- Blog Post Start -->
                                <div class=\"blog-post clearfix\">
                                    <!-- Blog Image Start -->
                                    <div class=\"blog-image clearfix\">
                                        <a class=\"image clearfix\" href=\"#\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/blog-post3.jpg')}}\">
                                            <div class=\"overlay\"></div></a> <!-- Employee Detail Start -->
                                        <div class=\"emp-detail clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-10 col-md-10\">
                                                    <div class=\"emp-left emp-block\">
                                                        <div class=\"image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/clinic-staff3.jpg')}}\"></div><a href=\"#\">mihai</a>
                                                        <ul>
                                                            <li>FRIDAY, 30 SEPTEMBER 2016</li>
                                                            <li>PUBLISHED IN <a href=\"#\">UNCATEGORIZED</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-left emp-block-->
                                                </div><!--/.col-sm-10 col-md-10-->
                                                <div class=\"col-sm-2 col-md-2\">
                                                    <div class=\"emp-right emp-block\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-comment-o\"></i> 0</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--/.emp-right emp-block-->
                                                </div><!--/.col-sm-2 col-md-2-->
                                            </div><!--/.row\"-->
                                        </div><!-- Employee Detail End -->
                                    </div><!-- Blog Image End -->
                                    <!-- Blog Detail Start -->
                                    <div class=\"blog-detail clearfix\">
                                        <a href=\"blog-single.html\">Sense of smell may predict Alzheimer’s risk</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque orci at eleifend sagittis. Cras mollis magna ex, viverra placerat orci ornare pretium. Fusce sed nibh ac nisl rutrum bibendum sed quis lectus. Vestibulum at pulvinar lectus. Sed ac lobortis neque, id dignissim ex. Curabitur a purus vel mauris consequat ornare. Pellentesque erat nisi, consectetur</p><!-- Read More SVG Start -->
                                        <a class=\"read-more\" href=\"blog-single.html\" title=\"Read more\"><svg height=\"57px\" version=\"1.1\" viewbox=\"0 0 59 57\" width=\"59px\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M23,35 C23.5522847,35 24,35.4477153 24,36 C24,36.5522847 23.5522847,37 23,37 C22.4477153,37 22,36.5522847 22,36 C22,35.4477153 22.4477153,35 23,35 L23,35 Z M28,36 C28,36.5522847 27.5522847,37 27,37 C26.4477153,37 26,36.5522847 26,36 C26,35.4477153 26.4477153,35 27,35 C27.5522847,35 28,35.4477153 28,36 L28,36 Z M31,35 C31.5522847,35 32,35.4477153 32,36 C32,36.5522847 31.5522847,37 31,37 C30.4477153,37 30,36.5522847 30,36 C30,35.4477153 30.4477153,35 31,35 L31,35 Z\" fill=\"#333333\"></path>
                                                <rect class=\"svg-more-l1\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"21\"></rect>
                                                <rect class=\"svg-more-l2\" fill=\"#333333\" height=\"2\" width=\"10\" x=\"22\" y=\"25\"></rect>
                                                <rect class=\"svg-more-l3\" fill=\"#333333\" height=\"2\" width=\"16\" x=\"22\" y=\"29\"></rect>
                                                <rect class=\"svg-more-bg\" fill=\"none\" height=\"49\" rx=\"5\" stroke=\"#333333\" stroke-width=\"2\" width=\"51\" x=\"4\" y=\"4\"></rect></svg></a> <!-- Read More SVG End -->
                                    </div><!-- Blog Detail End -->
                                </div><!-- Blog Post End -->
                            </div><!-- Blog Lists End -->
                        </div><!-- Content Description End -->
                    </div><!--/.col-sm-12 col-md-8 col-lg-9-->
                    <div class=\"col-sm-12 col-md-4 col-lg-3\">
                        <!-- Sidebar Widget Start -->
                        <div class=\"blog-sidebar-widget white-bg clearfix\">
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"search-box clearfix\">
                                        <input class=\"form-control\" placeholder=\"SEARCH...\" type=\"text\"> <a href=\"#\"><i aria-hidden=\"true\" class=\"fa fa-search\"></i></a>
                                    </div>
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>RECENT POSTS</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"recent-posts clearfix\">
                                        <!-- Post Block Start -->
                                        <div class=\"post-block clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                    <a class=\"image\" href=\"blog-single.html\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/media-health-img3.jpg')}}\"></a>
                                                </div>
                                                <div class=\"col-xs-8 col-sm-8 col-md-8\">
                                                    <div class=\"post-desc\">
                                                        <a href=\"blog-single.html\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc...</p>
                                                    </div><!--/.post-desc-->
                                                </div><!--/.col-xs-8 col-sm-8 col-md-8-->
                                            </div><!--/.row\"-->
                                        </div><!-- Post Block End -->
                                        <!-- Post Block Start -->
                                        <div class=\"post-block clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                    <a class=\"image\" href=\"blog-single.html\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/plastic-surgery.jpg')}}\"></a>
                                                </div>
                                                <div class=\"col-xs-8 col-sm-8 col-md-8\">
                                                    <div class=\"post-desc\">
                                                        <a href=\"blog-single.html\">Eye lens regeneration from own stem cells</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc...</p>
                                                    </div>
                                                </div><!--/.col-xs-8 col-sm-8 col-md-8-->
                                            </div><!--/.row-->
                                        </div><!-- Post Block End -->
                                        <!-- Post Block Start -->
                                        <div class=\"post-block clearfix\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4 col-sm-4 col-md-4\">
                                                    <a class=\"image\" href=\"blog-single.html\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/media-health-img2.jpg')}}\"></a>
                                                </div>
                                                <div class=\"col-xs-8 col-sm-8 col-md-8\">
                                                    <div class=\"post-desc\">
                                                        <a href=\"blog-single.html\">Sense of smell may predict Alzheimer’s risk</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc...</p>
                                                    </div>
                                                </div><!--/.col-xs-8 col-sm-8 col-md-8-->
                                            </div><!--/.row-->
                                        </div><!-- Post Block End -->
                                    </div><!--/.recent-posts clearfix-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>ARCHIVES</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"archives clearfix\">
                                        <ul>
                                            <li>
                                                <a href=\"blog.html\">September 2016</a>
                                            </li>
                                        </ul>
                                    </div><!--/.archives clearfix-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>CATEGORIES</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"categories clearfix\">
                                        <ul>
                                            <li>
                                                <a href=\"blog.html\">Uncategorized</a>
                                            </li>
                                        </ul>
                                    </div><!--/.categories-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <div class=\"widget-title\">
                                    <h6>META</h6>
                                </div><!-- Widget Detail Start -->
                                <div class=\"widget-detail\">
                                    <div class=\"categories clearfix\">
                                        <ul>
                                            <li>
                                                <a href=\"blog.html\">Log in</a>
                                            </li>
                                            <li>
                                                <a href=\"blog.html\">Entries <abbr title=\"Really Simple Syndication\">RSS</abbr></a>
                                            </li>
                                            <li>
                                                <a href=\"blog.html\">Comments <abbr title=\"Really Simple Syndication\">RSS</abbr></a>
                                            </li>
                                            <li>
                                                <a href=\"blog.html\">WordPress.org</a>
                                            </li>
                                        </ul>
                                    </div><!--/.categories-->
                                </div><!-- Widget Detail End -->
                            </div><!-- Widget Block End -->
                        </div><!-- Sidebar Widget End -->
                    </div><!--/.col-sm-12 col-md-4 col-lg-3-->
                </div><!--/.row-->
            </div><!-- Inner Pages End -->
        </div><!--/.container-->
    </section><!-- Content End -->
{% endblock %}", "SanteBundle:Default:articles.html.twig", "C:\\wamp64\\www\\Sante\\src\\SanteBundle/Resources/views/Default/articles.html.twig");
    }
}
