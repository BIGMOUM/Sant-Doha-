<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a9ae999dfb9427f2facfc999f9d9af9e93cf713ad861c92e1659bd70c7efe0b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5066c27bfad9026f9ac7407cab7831741c301c0461a6e3ab67b1745ff4f615f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5066c27bfad9026f9ac7407cab7831741c301c0461a6e3ab67b1745ff4f615f->enter($__internal_e5066c27bfad9026f9ac7407cab7831741c301c0461a6e3ab67b1745ff4f615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8880d8ed767987c7a57dc5f09d98584d243c03572d093090557810d0f680cd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8880d8ed767987c7a57dc5f09d98584d243c03572d093090557810d0f680cd46->enter($__internal_8880d8ed767987c7a57dc5f09d98584d243c03572d093090557810d0f680cd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5066c27bfad9026f9ac7407cab7831741c301c0461a6e3ab67b1745ff4f615f->leave($__internal_e5066c27bfad9026f9ac7407cab7831741c301c0461a6e3ab67b1745ff4f615f_prof);

        
        $__internal_8880d8ed767987c7a57dc5f09d98584d243c03572d093090557810d0f680cd46->leave($__internal_8880d8ed767987c7a57dc5f09d98584d243c03572d093090557810d0f680cd46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a35b4dcca31cc2ea0bfd6a78b18c9fb35b23d289eb65ac94181789d83b26c322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35b4dcca31cc2ea0bfd6a78b18c9fb35b23d289eb65ac94181789d83b26c322->enter($__internal_a35b4dcca31cc2ea0bfd6a78b18c9fb35b23d289eb65ac94181789d83b26c322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71b84a89629a7ac498c5b8dabc38597c710c87ac01d04d77cf4b23e1c895be48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b84a89629a7ac498c5b8dabc38597c710c87ac01d04d77cf4b23e1c895be48->enter($__internal_71b84a89629a7ac498c5b8dabc38597c710c87ac01d04d77cf4b23e1c895be48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_71b84a89629a7ac498c5b8dabc38597c710c87ac01d04d77cf4b23e1c895be48->leave($__internal_71b84a89629a7ac498c5b8dabc38597c710c87ac01d04d77cf4b23e1c895be48_prof);

        
        $__internal_a35b4dcca31cc2ea0bfd6a78b18c9fb35b23d289eb65ac94181789d83b26c322->leave($__internal_a35b4dcca31cc2ea0bfd6a78b18c9fb35b23d289eb65ac94181789d83b26c322_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Sante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
