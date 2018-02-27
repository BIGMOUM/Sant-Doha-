<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6fb92bafb542e13965acacccedd5bbc6d213722ca5410ae408173ee48cf303ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5da4bda0d4dbdc0450fa27f3231f3f1c5b05880aef730f23eca9f5403de9431f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da4bda0d4dbdc0450fa27f3231f3f1c5b05880aef730f23eca9f5403de9431f->enter($__internal_5da4bda0d4dbdc0450fa27f3231f3f1c5b05880aef730f23eca9f5403de9431f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6836cac490a10be13f4bf9ba9bc4f2745d731cdd824218323986282bf689bc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6836cac490a10be13f4bf9ba9bc4f2745d731cdd824218323986282bf689bc84->enter($__internal_6836cac490a10be13f4bf9ba9bc4f2745d731cdd824218323986282bf689bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da4bda0d4dbdc0450fa27f3231f3f1c5b05880aef730f23eca9f5403de9431f->leave($__internal_5da4bda0d4dbdc0450fa27f3231f3f1c5b05880aef730f23eca9f5403de9431f_prof);

        
        $__internal_6836cac490a10be13f4bf9ba9bc4f2745d731cdd824218323986282bf689bc84->leave($__internal_6836cac490a10be13f4bf9ba9bc4f2745d731cdd824218323986282bf689bc84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e429be89453ed292213ef49fff372fba68ce10a853f885b616c9cace01bf698b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e429be89453ed292213ef49fff372fba68ce10a853f885b616c9cace01bf698b->enter($__internal_e429be89453ed292213ef49fff372fba68ce10a853f885b616c9cace01bf698b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_309455774e3c89bdfc8a87ebded95cd2bfc16e49462ca8c532ec93044f18c114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309455774e3c89bdfc8a87ebded95cd2bfc16e49462ca8c532ec93044f18c114->enter($__internal_309455774e3c89bdfc8a87ebded95cd2bfc16e49462ca8c532ec93044f18c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_309455774e3c89bdfc8a87ebded95cd2bfc16e49462ca8c532ec93044f18c114->leave($__internal_309455774e3c89bdfc8a87ebded95cd2bfc16e49462ca8c532ec93044f18c114_prof);

        
        $__internal_e429be89453ed292213ef49fff372fba68ce10a853f885b616c9cace01bf698b->leave($__internal_e429be89453ed292213ef49fff372fba68ce10a853f885b616c9cace01bf698b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Sante\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
