<?php

/* MDWDemoBundle:Default:articulos.html.twig */
class __TwigTemplate_455653a3f98fb5da23fd6624664e064e4869aeab32ccc3ca9848904101ade803 extends Twig_Template
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
        $__internal_d06627ffcd1c80e74792e9efe155d7f48e0df43f60ec6580ae79e48a7b7311c8 = $this->env->getExtension("native_profiler");
        $__internal_d06627ffcd1c80e74792e9efe155d7f48e0df43f60ec6580ae79e48a7b7311c8->enter($__internal_d06627ffcd1c80e74792e9efe155d7f48e0df43f60ec6580ae79e48a7b7311c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MDWDemoBundle:Default:articulos.html.twig"));

        // line 1
        echo "<h1>Listado de Articulos</h1> <table border=”1”>
    <tr>
        <th>ID</th><th>Titulo</th><th>Fecha de Creacion</th> 
    </tr>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            echo " 
        <tr>
            <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "id", array()), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "title", array()), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "created", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</table>


";
        
        $__internal_d06627ffcd1c80e74792e9efe155d7f48e0df43f60ec6580ae79e48a7b7311c8->leave($__internal_d06627ffcd1c80e74792e9efe155d7f48e0df43f60ec6580ae79e48a7b7311c8_prof);

    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  35 => 7,  28 => 5,  22 => 1,);
    }
}
/* <h1>Listado de Articulos</h1> <table border=”1”>*/
/*     <tr>*/
/*         <th>ID</th><th>Titulo</th><th>Fecha de Creacion</th> */
/*     </tr>*/
/*     {% for articulo in articulos %} */
/*         <tr>*/
/*             <td>{{articulo.id}}</td> <td>{{articulo.title}}</td> <td>{{articulo.created}}</td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
/* */
/* */
