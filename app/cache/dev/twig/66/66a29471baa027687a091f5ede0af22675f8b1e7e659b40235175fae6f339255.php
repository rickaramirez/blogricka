<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9363e9b739bcc9355331f8caaaaebb173fdfc4404792a1642c4a56dde31fef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19fc374e2b86a7d46ed29307b316c7fe536098165e51cabb5377263365f490a0 = $this->env->getExtension("native_profiler");
        $__internal_19fc374e2b86a7d46ed29307b316c7fe536098165e51cabb5377263365f490a0->enter($__internal_19fc374e2b86a7d46ed29307b316c7fe536098165e51cabb5377263365f490a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19fc374e2b86a7d46ed29307b316c7fe536098165e51cabb5377263365f490a0->leave($__internal_19fc374e2b86a7d46ed29307b316c7fe536098165e51cabb5377263365f490a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_737bf9a0e099515add178748f11f8614c5100ab314d54ad55da0e403712fabe1 = $this->env->getExtension("native_profiler");
        $__internal_737bf9a0e099515add178748f11f8614c5100ab314d54ad55da0e403712fabe1->enter($__internal_737bf9a0e099515add178748f11f8614c5100ab314d54ad55da0e403712fabe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_737bf9a0e099515add178748f11f8614c5100ab314d54ad55da0e403712fabe1->leave($__internal_737bf9a0e099515add178748f11f8614c5100ab314d54ad55da0e403712fabe1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67392f70d0b7f0cc593196b055f5f8f64a8569d4564bbda98f55f82b866bf9bb = $this->env->getExtension("native_profiler");
        $__internal_67392f70d0b7f0cc593196b055f5f8f64a8569d4564bbda98f55f82b866bf9bb->enter($__internal_67392f70d0b7f0cc593196b055f5f8f64a8569d4564bbda98f55f82b866bf9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_67392f70d0b7f0cc593196b055f5f8f64a8569d4564bbda98f55f82b866bf9bb->leave($__internal_67392f70d0b7f0cc593196b055f5f8f64a8569d4564bbda98f55f82b866bf9bb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9759be96d7e5fd7a8ef8c49accb8110c3d10e72bfb0b20de27e2508af86ab66e = $this->env->getExtension("native_profiler");
        $__internal_9759be96d7e5fd7a8ef8c49accb8110c3d10e72bfb0b20de27e2508af86ab66e->enter($__internal_9759be96d7e5fd7a8ef8c49accb8110c3d10e72bfb0b20de27e2508af86ab66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9759be96d7e5fd7a8ef8c49accb8110c3d10e72bfb0b20de27e2508af86ab66e->leave($__internal_9759be96d7e5fd7a8ef8c49accb8110c3d10e72bfb0b20de27e2508af86ab66e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
