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
        $__internal_e4f45d4f5704ae785b25b3fc4457efff30124899bb0776514ea4880e6191d45e = $this->env->getExtension("native_profiler");
        $__internal_e4f45d4f5704ae785b25b3fc4457efff30124899bb0776514ea4880e6191d45e->enter($__internal_e4f45d4f5704ae785b25b3fc4457efff30124899bb0776514ea4880e6191d45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f45d4f5704ae785b25b3fc4457efff30124899bb0776514ea4880e6191d45e->leave($__internal_e4f45d4f5704ae785b25b3fc4457efff30124899bb0776514ea4880e6191d45e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53fcbfe111c4ce5afd5fea92736ca728e7008c2641d489940345f33c9dc0c534 = $this->env->getExtension("native_profiler");
        $__internal_53fcbfe111c4ce5afd5fea92736ca728e7008c2641d489940345f33c9dc0c534->enter($__internal_53fcbfe111c4ce5afd5fea92736ca728e7008c2641d489940345f33c9dc0c534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_53fcbfe111c4ce5afd5fea92736ca728e7008c2641d489940345f33c9dc0c534->leave($__internal_53fcbfe111c4ce5afd5fea92736ca728e7008c2641d489940345f33c9dc0c534_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_324bfdb0d8a253bbcd9444ef5eece8628862d6f2b9e006738aa7e9febd8bb00f = $this->env->getExtension("native_profiler");
        $__internal_324bfdb0d8a253bbcd9444ef5eece8628862d6f2b9e006738aa7e9febd8bb00f->enter($__internal_324bfdb0d8a253bbcd9444ef5eece8628862d6f2b9e006738aa7e9febd8bb00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_324bfdb0d8a253bbcd9444ef5eece8628862d6f2b9e006738aa7e9febd8bb00f->leave($__internal_324bfdb0d8a253bbcd9444ef5eece8628862d6f2b9e006738aa7e9febd8bb00f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4dfdb600db222609a1a1d7b0c9568876fa777346c7cb9161e57358b56c291ae = $this->env->getExtension("native_profiler");
        $__internal_b4dfdb600db222609a1a1d7b0c9568876fa777346c7cb9161e57358b56c291ae->enter($__internal_b4dfdb600db222609a1a1d7b0c9568876fa777346c7cb9161e57358b56c291ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4dfdb600db222609a1a1d7b0c9568876fa777346c7cb9161e57358b56c291ae->leave($__internal_b4dfdb600db222609a1a1d7b0c9568876fa777346c7cb9161e57358b56c291ae_prof);

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
