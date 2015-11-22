<?php

/* grade/create.html.twig */
class __TwigTemplate_1f5226aded60f061a398a3f2ee00148238d5536e018028a2cef707a06e5c9cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grade/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2644a76b1e38906b27c6171dfea17f1c9e6b4796f1e9479b58289dd89d4df897 = $this->env->getExtension("native_profiler");
        $__internal_2644a76b1e38906b27c6171dfea17f1c9e6b4796f1e9479b58289dd89d4df897->enter($__internal_2644a76b1e38906b27c6171dfea17f1c9e6b4796f1e9479b58289dd89d4df897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2644a76b1e38906b27c6171dfea17f1c9e6b4796f1e9479b58289dd89d4df897->leave($__internal_2644a76b1e38906b27c6171dfea17f1c9e6b4796f1e9479b58289dd89d4df897_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_880fedd766e016286da1221dd7d3c13553934d857d04c84bf4ebf2101613d861 = $this->env->getExtension("native_profiler");
        $__internal_880fedd766e016286da1221dd7d3c13553934d857d04c84bf4ebf2101613d861->enter($__internal_880fedd766e016286da1221dd7d3c13553934d857d04c84bf4ebf2101613d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_880fedd766e016286da1221dd7d3c13553934d857d04c84bf4ebf2101613d861->leave($__internal_880fedd766e016286da1221dd7d3c13553934d857d04c84bf4ebf2101613d861_prof);

    }

    public function getTemplateName()
    {
        return "grade/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
