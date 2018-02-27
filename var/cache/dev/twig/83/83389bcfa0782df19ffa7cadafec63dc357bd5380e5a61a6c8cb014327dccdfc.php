<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10a0569b84d19b2d3f8634b6d45466920a161bbdba05ed08b6504e86d6540d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5875b16e40efd23ba452e8f9226a722b26186d0ed2b9abb98f52c76f70cce1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5875b16e40efd23ba452e8f9226a722b26186d0ed2b9abb98f52c76f70cce1a->enter($__internal_d5875b16e40efd23ba452e8f9226a722b26186d0ed2b9abb98f52c76f70cce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_73081a246bd262b63d1e936e29d99d5156fa23ba708979300b10ec214c954ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73081a246bd262b63d1e936e29d99d5156fa23ba708979300b10ec214c954ee6->enter($__internal_73081a246bd262b63d1e936e29d99d5156fa23ba708979300b10ec214c954ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5875b16e40efd23ba452e8f9226a722b26186d0ed2b9abb98f52c76f70cce1a->leave($__internal_d5875b16e40efd23ba452e8f9226a722b26186d0ed2b9abb98f52c76f70cce1a_prof);

        
        $__internal_73081a246bd262b63d1e936e29d99d5156fa23ba708979300b10ec214c954ee6->leave($__internal_73081a246bd262b63d1e936e29d99d5156fa23ba708979300b10ec214c954ee6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bf2d70e5abe3f8aab4b992693f4902f303e35cb5a79ec0f41ce7bf36036a003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf2d70e5abe3f8aab4b992693f4902f303e35cb5a79ec0f41ce7bf36036a003->enter($__internal_6bf2d70e5abe3f8aab4b992693f4902f303e35cb5a79ec0f41ce7bf36036a003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_974e21f452005204305080f9c291bf7041ac7b4200319def35246c69782ddde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974e21f452005204305080f9c291bf7041ac7b4200319def35246c69782ddde9->enter($__internal_974e21f452005204305080f9c291bf7041ac7b4200319def35246c69782ddde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_974e21f452005204305080f9c291bf7041ac7b4200319def35246c69782ddde9->leave($__internal_974e21f452005204305080f9c291bf7041ac7b4200319def35246c69782ddde9_prof);

        
        $__internal_6bf2d70e5abe3f8aab4b992693f4902f303e35cb5a79ec0f41ce7bf36036a003->leave($__internal_6bf2d70e5abe3f8aab4b992693f4902f303e35cb5a79ec0f41ce7bf36036a003_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cba56abc3fc7fff7581d7d77cce6c5bd10c78f577d00332c15cf833bd207df84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba56abc3fc7fff7581d7d77cce6c5bd10c78f577d00332c15cf833bd207df84->enter($__internal_cba56abc3fc7fff7581d7d77cce6c5bd10c78f577d00332c15cf833bd207df84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ef71c1a3e2eba3514a8ea7a92103bf1063dccdbd76642e68cb96d6190434674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef71c1a3e2eba3514a8ea7a92103bf1063dccdbd76642e68cb96d6190434674->enter($__internal_9ef71c1a3e2eba3514a8ea7a92103bf1063dccdbd76642e68cb96d6190434674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ef71c1a3e2eba3514a8ea7a92103bf1063dccdbd76642e68cb96d6190434674->leave($__internal_9ef71c1a3e2eba3514a8ea7a92103bf1063dccdbd76642e68cb96d6190434674_prof);

        
        $__internal_cba56abc3fc7fff7581d7d77cce6c5bd10c78f577d00332c15cf833bd207df84->leave($__internal_cba56abc3fc7fff7581d7d77cce6c5bd10c78f577d00332c15cf833bd207df84_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_665809ee84cc0b47ee4d47dc15ac5e3e1b68c78459e9afe3518ebfee02c3352a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665809ee84cc0b47ee4d47dc15ac5e3e1b68c78459e9afe3518ebfee02c3352a->enter($__internal_665809ee84cc0b47ee4d47dc15ac5e3e1b68c78459e9afe3518ebfee02c3352a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1406cf690fe5dd1e6cbc4889566d45cc63d0ef0ec032878f69ccd0b5de7c31bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1406cf690fe5dd1e6cbc4889566d45cc63d0ef0ec032878f69ccd0b5de7c31bd->enter($__internal_1406cf690fe5dd1e6cbc4889566d45cc63d0ef0ec032878f69ccd0b5de7c31bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1406cf690fe5dd1e6cbc4889566d45cc63d0ef0ec032878f69ccd0b5de7c31bd->leave($__internal_1406cf690fe5dd1e6cbc4889566d45cc63d0ef0ec032878f69ccd0b5de7c31bd_prof);

        
        $__internal_665809ee84cc0b47ee4d47dc15ac5e3e1b68c78459e9afe3518ebfee02c3352a->leave($__internal_665809ee84cc0b47ee4d47dc15ac5e3e1b68c78459e9afe3518ebfee02c3352a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Sante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
