<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6810991c006a167f89f9c4c93439f8916b72386c7f3fedd9ed57dcc464c852e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb668cb327987f44d076f78a39a41421d6f49c90387726c23078a625bb1ba654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb668cb327987f44d076f78a39a41421d6f49c90387726c23078a625bb1ba654->enter($__internal_cb668cb327987f44d076f78a39a41421d6f49c90387726c23078a625bb1ba654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_db5485950040485454521fd3aa135db2a57feecc9dc41690d1f852b1d7a11320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5485950040485454521fd3aa135db2a57feecc9dc41690d1f852b1d7a11320->enter($__internal_db5485950040485454521fd3aa135db2a57feecc9dc41690d1f852b1d7a11320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cb668cb327987f44d076f78a39a41421d6f49c90387726c23078a625bb1ba654->leave($__internal_cb668cb327987f44d076f78a39a41421d6f49c90387726c23078a625bb1ba654_prof);

        
        $__internal_db5485950040485454521fd3aa135db2a57feecc9dc41690d1f852b1d7a11320->leave($__internal_db5485950040485454521fd3aa135db2a57feecc9dc41690d1f852b1d7a11320_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e14c2b19868deb606ad53458f0c84fc4103440397a2112b366e576003c6ef409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14c2b19868deb606ad53458f0c84fc4103440397a2112b366e576003c6ef409->enter($__internal_e14c2b19868deb606ad53458f0c84fc4103440397a2112b366e576003c6ef409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76eb59504f883e2524f5efeec8c69659d30814cdd14355bd9a99fd2e78be5f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76eb59504f883e2524f5efeec8c69659d30814cdd14355bd9a99fd2e78be5f93->enter($__internal_76eb59504f883e2524f5efeec8c69659d30814cdd14355bd9a99fd2e78be5f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_76eb59504f883e2524f5efeec8c69659d30814cdd14355bd9a99fd2e78be5f93->leave($__internal_76eb59504f883e2524f5efeec8c69659d30814cdd14355bd9a99fd2e78be5f93_prof);

        
        $__internal_e14c2b19868deb606ad53458f0c84fc4103440397a2112b366e576003c6ef409->leave($__internal_e14c2b19868deb606ad53458f0c84fc4103440397a2112b366e576003c6ef409_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc0fd55435d1a7389ccb889305d60ac18b08e0e2635a325949e9e1061067330e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0fd55435d1a7389ccb889305d60ac18b08e0e2635a325949e9e1061067330e->enter($__internal_cc0fd55435d1a7389ccb889305d60ac18b08e0e2635a325949e9e1061067330e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_799e7e49026d8bb1c80af82645015e2e1e8a3824014d3b456111302a7753c67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799e7e49026d8bb1c80af82645015e2e1e8a3824014d3b456111302a7753c67f->enter($__internal_799e7e49026d8bb1c80af82645015e2e1e8a3824014d3b456111302a7753c67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_799e7e49026d8bb1c80af82645015e2e1e8a3824014d3b456111302a7753c67f->leave($__internal_799e7e49026d8bb1c80af82645015e2e1e8a3824014d3b456111302a7753c67f_prof);

        
        $__internal_cc0fd55435d1a7389ccb889305d60ac18b08e0e2635a325949e9e1061067330e->leave($__internal_cc0fd55435d1a7389ccb889305d60ac18b08e0e2635a325949e9e1061067330e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d316c9500b9cc5b42c194092a6528554e194dbe926d5310133d466aaba3538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d316c9500b9cc5b42c194092a6528554e194dbe926d5310133d466aaba3538->enter($__internal_91d316c9500b9cc5b42c194092a6528554e194dbe926d5310133d466aaba3538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f74e6bb0a6c756197f3a2f19f4f9c2e79d8a253329398e276c6f47c8b58c576a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74e6bb0a6c756197f3a2f19f4f9c2e79d8a253329398e276c6f47c8b58c576a->enter($__internal_f74e6bb0a6c756197f3a2f19f4f9c2e79d8a253329398e276c6f47c8b58c576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f74e6bb0a6c756197f3a2f19f4f9c2e79d8a253329398e276c6f47c8b58c576a->leave($__internal_f74e6bb0a6c756197f3a2f19f4f9c2e79d8a253329398e276c6f47c8b58c576a_prof);

        
        $__internal_91d316c9500b9cc5b42c194092a6528554e194dbe926d5310133d466aaba3538->leave($__internal_91d316c9500b9cc5b42c194092a6528554e194dbe926d5310133d466aaba3538_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Sante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
