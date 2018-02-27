<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6905fa5047ed524ff06f7496592993ee3fe08f16fd63cc0205cb03fd95a9e603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1e66a5f6a295663875573dee47802de22743574f613f3884b87691582b86ff39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e66a5f6a295663875573dee47802de22743574f613f3884b87691582b86ff39->enter($__internal_1e66a5f6a295663875573dee47802de22743574f613f3884b87691582b86ff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d12a6ff77cfada86b0f3c530673a7a1bc27044bdfd1ef2d01f140de589ec0425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12a6ff77cfada86b0f3c530673a7a1bc27044bdfd1ef2d01f140de589ec0425->enter($__internal_d12a6ff77cfada86b0f3c530673a7a1bc27044bdfd1ef2d01f140de589ec0425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e66a5f6a295663875573dee47802de22743574f613f3884b87691582b86ff39->leave($__internal_1e66a5f6a295663875573dee47802de22743574f613f3884b87691582b86ff39_prof);

        
        $__internal_d12a6ff77cfada86b0f3c530673a7a1bc27044bdfd1ef2d01f140de589ec0425->leave($__internal_d12a6ff77cfada86b0f3c530673a7a1bc27044bdfd1ef2d01f140de589ec0425_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_284b7c5002bdd3785fab1e053f8364aa83cd4a7a66bbe3981087c269054b7e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284b7c5002bdd3785fab1e053f8364aa83cd4a7a66bbe3981087c269054b7e6d->enter($__internal_284b7c5002bdd3785fab1e053f8364aa83cd4a7a66bbe3981087c269054b7e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd0c49f82e5c9719303772f1d27d336c441a261e79263829cae80dea621d0499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0c49f82e5c9719303772f1d27d336c441a261e79263829cae80dea621d0499->enter($__internal_fd0c49f82e5c9719303772f1d27d336c441a261e79263829cae80dea621d0499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fd0c49f82e5c9719303772f1d27d336c441a261e79263829cae80dea621d0499->leave($__internal_fd0c49f82e5c9719303772f1d27d336c441a261e79263829cae80dea621d0499_prof);

        
        $__internal_284b7c5002bdd3785fab1e053f8364aa83cd4a7a66bbe3981087c269054b7e6d->leave($__internal_284b7c5002bdd3785fab1e053f8364aa83cd4a7a66bbe3981087c269054b7e6d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1e0466a7317cf688fa6aad139967ee5a73b477697636a03a425833c3153dde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e0466a7317cf688fa6aad139967ee5a73b477697636a03a425833c3153dde3->enter($__internal_b1e0466a7317cf688fa6aad139967ee5a73b477697636a03a425833c3153dde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d42ed9f8b1f9d0cc4d77591049b351765aeee839f0fc391a18d6698da52e6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d42ed9f8b1f9d0cc4d77591049b351765aeee839f0fc391a18d6698da52e6ff->enter($__internal_7d42ed9f8b1f9d0cc4d77591049b351765aeee839f0fc391a18d6698da52e6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7d42ed9f8b1f9d0cc4d77591049b351765aeee839f0fc391a18d6698da52e6ff->leave($__internal_7d42ed9f8b1f9d0cc4d77591049b351765aeee839f0fc391a18d6698da52e6ff_prof);

        
        $__internal_b1e0466a7317cf688fa6aad139967ee5a73b477697636a03a425833c3153dde3->leave($__internal_b1e0466a7317cf688fa6aad139967ee5a73b477697636a03a425833c3153dde3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3273bc5cbd9d1467774c38f1784be4ad49abdc753406e261469a6c762fc99956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3273bc5cbd9d1467774c38f1784be4ad49abdc753406e261469a6c762fc99956->enter($__internal_3273bc5cbd9d1467774c38f1784be4ad49abdc753406e261469a6c762fc99956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_efc16fdd47a641b344bb1009f6b069df14df06513fc06440553e1255bb5ed1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc16fdd47a641b344bb1009f6b069df14df06513fc06440553e1255bb5ed1ad->enter($__internal_efc16fdd47a641b344bb1009f6b069df14df06513fc06440553e1255bb5ed1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_efc16fdd47a641b344bb1009f6b069df14df06513fc06440553e1255bb5ed1ad->leave($__internal_efc16fdd47a641b344bb1009f6b069df14df06513fc06440553e1255bb5ed1ad_prof);

        
        $__internal_3273bc5cbd9d1467774c38f1784be4ad49abdc753406e261469a6c762fc99956->leave($__internal_3273bc5cbd9d1467774c38f1784be4ad49abdc753406e261469a6c762fc99956_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Sante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
