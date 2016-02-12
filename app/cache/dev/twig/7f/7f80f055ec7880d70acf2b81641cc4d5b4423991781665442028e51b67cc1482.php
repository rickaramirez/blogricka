<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_01f0c780199b0e7d45c91b6bf02b19463f2f55f28cca1e8cb0135cc1be7bf2f7 extends Twig_Template
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
        $__internal_cedfdf8d727c10eb5c3cbd2615b86de9c825e585dd1d007806e4c06366993749 = $this->env->getExtension("native_profiler");
        $__internal_cedfdf8d727c10eb5c3cbd2615b86de9c825e585dd1d007806e4c06366993749->enter($__internal_cedfdf8d727c10eb5c3cbd2615b86de9c825e585dd1d007806e4c06366993749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedfdf8d727c10eb5c3cbd2615b86de9c825e585dd1d007806e4c06366993749->leave($__internal_cedfdf8d727c10eb5c3cbd2615b86de9c825e585dd1d007806e4c06366993749_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_981abda04f3680819be6973230a18c478c3b92cd17a9d607df2d1a8144c3e402 = $this->env->getExtension("native_profiler");
        $__internal_981abda04f3680819be6973230a18c478c3b92cd17a9d607df2d1a8144c3e402->enter($__internal_981abda04f3680819be6973230a18c478c3b92cd17a9d607df2d1a8144c3e402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_981abda04f3680819be6973230a18c478c3b92cd17a9d607df2d1a8144c3e402->leave($__internal_981abda04f3680819be6973230a18c478c3b92cd17a9d607df2d1a8144c3e402_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cc7cbd87a375cf2458a0a0f483dddb7a8bc86468b569787b6bf1d6bdbe87c06 = $this->env->getExtension("native_profiler");
        $__internal_6cc7cbd87a375cf2458a0a0f483dddb7a8bc86468b569787b6bf1d6bdbe87c06->enter($__internal_6cc7cbd87a375cf2458a0a0f483dddb7a8bc86468b569787b6bf1d6bdbe87c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cc7cbd87a375cf2458a0a0f483dddb7a8bc86468b569787b6bf1d6bdbe87c06->leave($__internal_6cc7cbd87a375cf2458a0a0f483dddb7a8bc86468b569787b6bf1d6bdbe87c06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d2cbc4df532e9ac681294c19c26137b11147230b47123ea4f6571b50e98567c = $this->env->getExtension("native_profiler");
        $__internal_7d2cbc4df532e9ac681294c19c26137b11147230b47123ea4f6571b50e98567c->enter($__internal_7d2cbc4df532e9ac681294c19c26137b11147230b47123ea4f6571b50e98567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d2cbc4df532e9ac681294c19c26137b11147230b47123ea4f6571b50e98567c->leave($__internal_7d2cbc4df532e9ac681294c19c26137b11147230b47123ea4f6571b50e98567c_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
