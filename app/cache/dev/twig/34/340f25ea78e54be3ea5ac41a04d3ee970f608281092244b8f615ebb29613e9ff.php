<?php

/* base.html.twig */
class __TwigTemplate_9bb3078580e0d2c2151314ec8f40324a5e11838af41a21487d1c8e768ee77062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eed9107d7964d3e7d7349bf062177713800dda2a2ebd820b3bd1a11acc0b7fb = $this->env->getExtension("native_profiler");
        $__internal_0eed9107d7964d3e7d7349bf062177713800dda2a2ebd820b3bd1a11acc0b7fb->enter($__internal_0eed9107d7964d3e7d7349bf062177713800dda2a2ebd820b3bd1a11acc0b7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0eed9107d7964d3e7d7349bf062177713800dda2a2ebd820b3bd1a11acc0b7fb->leave($__internal_0eed9107d7964d3e7d7349bf062177713800dda2a2ebd820b3bd1a11acc0b7fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e2756bbc853cf0bc29df169a99243e44a3813cfc0f517504439b9dcd34c3183 = $this->env->getExtension("native_profiler");
        $__internal_3e2756bbc853cf0bc29df169a99243e44a3813cfc0f517504439b9dcd34c3183->enter($__internal_3e2756bbc853cf0bc29df169a99243e44a3813cfc0f517504439b9dcd34c3183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e2756bbc853cf0bc29df169a99243e44a3813cfc0f517504439b9dcd34c3183->leave($__internal_3e2756bbc853cf0bc29df169a99243e44a3813cfc0f517504439b9dcd34c3183_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b3c0ab9d9d98f0c90402fe27aae768fc8c0030728cb3dc72373a8189fc2d281 = $this->env->getExtension("native_profiler");
        $__internal_9b3c0ab9d9d98f0c90402fe27aae768fc8c0030728cb3dc72373a8189fc2d281->enter($__internal_9b3c0ab9d9d98f0c90402fe27aae768fc8c0030728cb3dc72373a8189fc2d281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b3c0ab9d9d98f0c90402fe27aae768fc8c0030728cb3dc72373a8189fc2d281->leave($__internal_9b3c0ab9d9d98f0c90402fe27aae768fc8c0030728cb3dc72373a8189fc2d281_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5155842820d8de86fc9c5483446ad13a87099924012a21248a649814b720beb2 = $this->env->getExtension("native_profiler");
        $__internal_5155842820d8de86fc9c5483446ad13a87099924012a21248a649814b720beb2->enter($__internal_5155842820d8de86fc9c5483446ad13a87099924012a21248a649814b720beb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5155842820d8de86fc9c5483446ad13a87099924012a21248a649814b720beb2->leave($__internal_5155842820d8de86fc9c5483446ad13a87099924012a21248a649814b720beb2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_011109234ba08380a7a1f95cd5a994136e36125bb6990bc1aa8a0c766b793335 = $this->env->getExtension("native_profiler");
        $__internal_011109234ba08380a7a1f95cd5a994136e36125bb6990bc1aa8a0c766b793335->enter($__internal_011109234ba08380a7a1f95cd5a994136e36125bb6990bc1aa8a0c766b793335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_011109234ba08380a7a1f95cd5a994136e36125bb6990bc1aa8a0c766b793335->leave($__internal_011109234ba08380a7a1f95cd5a994136e36125bb6990bc1aa8a0c766b793335_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
