<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_44208da0472ee2f59473d0e10ec84b575aabda60b2d225277a0fe6c79d55eb33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8950d9933fa1e3b9f5189af85f7feba79ec76fe98c40f3d2922c9f8a18a7d84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8950d9933fa1e3b9f5189af85f7feba79ec76fe98c40f3d2922c9f8a18a7d84d->enter($__internal_8950d9933fa1e3b9f5189af85f7feba79ec76fe98c40f3d2922c9f8a18a7d84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_ddd87e7ec03f3ab865d34b0fb9148332834be7034a7c2e3b5d4186cfc9758ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd87e7ec03f3ab865d34b0fb9148332834be7034a7c2e3b5d4186cfc9758ee8->enter($__internal_ddd87e7ec03f3ab865d34b0fb9148332834be7034a7c2e3b5d4186cfc9758ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8950d9933fa1e3b9f5189af85f7feba79ec76fe98c40f3d2922c9f8a18a7d84d->leave($__internal_8950d9933fa1e3b9f5189af85f7feba79ec76fe98c40f3d2922c9f8a18a7d84d_prof);

        
        $__internal_ddd87e7ec03f3ab865d34b0fb9148332834be7034a7c2e3b5d4186cfc9758ee8->leave($__internal_ddd87e7ec03f3ab865d34b0fb9148332834be7034a7c2e3b5d4186cfc9758ee8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f700b32c62d4b33cb9d9bc9f55212316a7b10602aed75775a9036373be79b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f700b32c62d4b33cb9d9bc9f55212316a7b10602aed75775a9036373be79b7b->enter($__internal_6f700b32c62d4b33cb9d9bc9f55212316a7b10602aed75775a9036373be79b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf4feaf428eaf29e579888c4559113e58892527e026bc9e3d26ee5c60afc45ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4feaf428eaf29e579888c4559113e58892527e026bc9e3d26ee5c60afc45ee->enter($__internal_cf4feaf428eaf29e579888c4559113e58892527e026bc9e3d26ee5c60afc45ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cf4feaf428eaf29e579888c4559113e58892527e026bc9e3d26ee5c60afc45ee->leave($__internal_cf4feaf428eaf29e579888c4559113e58892527e026bc9e3d26ee5c60afc45ee_prof);

        
        $__internal_6f700b32c62d4b33cb9d9bc9f55212316a7b10602aed75775a9036373be79b7b->leave($__internal_6f700b32c62d4b33cb9d9bc9f55212316a7b10602aed75775a9036373be79b7b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Sante\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
