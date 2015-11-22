<?php

/* lesson/create.html.twig */
class __TwigTemplate_77255983425443b8808099503c3d1ccac67dcf6e41bc10720a7b33a3e9e32fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lesson/create.html.twig", 1);
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
        $__internal_456ace02db4afe4f7feabdae5fe7db4ba7020eced20d6f25e89b70e63c4d62e8 = $this->env->getExtension("native_profiler");
        $__internal_456ace02db4afe4f7feabdae5fe7db4ba7020eced20d6f25e89b70e63c4d62e8->enter($__internal_456ace02db4afe4f7feabdae5fe7db4ba7020eced20d6f25e89b70e63c4d62e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesson/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_456ace02db4afe4f7feabdae5fe7db4ba7020eced20d6f25e89b70e63c4d62e8->leave($__internal_456ace02db4afe4f7feabdae5fe7db4ba7020eced20d6f25e89b70e63c4d62e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc303dd50e7e024160f7e6375dca71318157c226b865fb2f5e8c37d1d61db319 = $this->env->getExtension("native_profiler");
        $__internal_dc303dd50e7e024160f7e6375dca71318157c226b865fb2f5e8c37d1d61db319->enter($__internal_dc303dd50e7e024160f7e6375dca71318157c226b865fb2f5e8c37d1d61db319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_dc303dd50e7e024160f7e6375dca71318157c226b865fb2f5e8c37d1d61db319->leave($__internal_dc303dd50e7e024160f7e6375dca71318157c226b865fb2f5e8c37d1d61db319_prof);

    }

    public function getTemplateName()
    {
        return "lesson/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {{ form(form) }}*/
/* */
/* {% endblock %}*/
/* */
