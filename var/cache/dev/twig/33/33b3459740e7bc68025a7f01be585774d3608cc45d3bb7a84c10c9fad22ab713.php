<?php

/* StarRatingBundle:Display:ratingDisplay.html.twig */
class __TwigTemplate_0451fa307bf84886420fa89294f74f515cbe3ac6c566f09f2af54f61e020cc39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffe8a78edcf5a62096690ace19d7a7db43e428f149df2c11c7da863ecc7857e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe8a78edcf5a62096690ace19d7a7db43e428f149df2c11c7da863ecc7857e2->enter($__internal_ffe8a78edcf5a62096690ace19d7a7db43e428f149df2c11c7da863ecc7857e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        $__internal_e01c49f15f987f0832a69b7d456c0f24f1bfbe2944c0a9e885542431c694a326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01c49f15f987f0832a69b7d456c0f24f1bfbe2944c0a9e885542431c694a326->enter($__internal_e01c49f15f987f0832a69b7d456c0f24f1bfbe2944c0a9e885542431c694a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) ? $context["starSize"] : $this->getContext($context, "starSize")), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_ffe8a78edcf5a62096690ace19d7a7db43e428f149df2c11c7da863ecc7857e2->leave($__internal_ffe8a78edcf5a62096690ace19d7a7db43e428f149df2c11c7da863ecc7857e2_prof);

        
        $__internal_e01c49f15f987f0832a69b7d456c0f24f1bfbe2944c0a9e885542431c694a326->leave($__internal_e01c49f15f987f0832a69b7d456c0f24f1bfbe2944c0a9e885542431c694a326_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle:Display:ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rating\">
  {% for i in 1..max %}
    <div class=\"{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}\"></div>
  {% endfor %}
</div>", "StarRatingBundle:Display:ratingDisplay.html.twig", "C:\\wamp64\\www\\Sante\\vendor\\blackknight467\\star-rating-bundle\\blackknight467\\StarRatingBundle/Resources/views/Display/ratingDisplay.html.twig");
    }
}
