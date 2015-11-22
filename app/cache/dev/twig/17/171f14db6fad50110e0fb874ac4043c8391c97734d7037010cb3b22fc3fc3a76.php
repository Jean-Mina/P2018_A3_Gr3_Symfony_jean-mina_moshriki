<?php

/* registration/register.html.twig */
class __TwigTemplate_06de9a65756b07e57e18980c119ea70eb1a9f05980630afbf02fd7905a3ae2b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        $__internal_7a321b68b9b15d57de0fbe9991c13996225e3d2f8acfa301d38d4258ce67a239 = $this->env->getExtension("native_profiler");
        $__internal_7a321b68b9b15d57de0fbe9991c13996225e3d2f8acfa301d38d4258ce67a239->enter($__internal_7a321b68b9b15d57de0fbe9991c13996225e3d2f8acfa301d38d4258ce67a239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a321b68b9b15d57de0fbe9991c13996225e3d2f8acfa301d38d4258ce67a239->leave($__internal_7a321b68b9b15d57de0fbe9991c13996225e3d2f8acfa301d38d4258ce67a239_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eefd89cb349976b723913f55eb690b1d86225a498ee42fa8247735fc8e9e191 = $this->env->getExtension("native_profiler");
        $__internal_9eefd89cb349976b723913f55eb690b1d86225a498ee42fa8247735fc8e9e191->enter($__internal_9eefd89cb349976b723913f55eb690b1d86225a498ee42fa8247735fc8e9e191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

        <button type=\"submit\">Register!</button>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9eefd89cb349976b723913f55eb690b1d86225a498ee42fa8247735fc8e9e191->leave($__internal_9eefd89cb349976b723913f55eb690b1d86225a498ee42fa8247735fc8e9e191_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*         {{ form_row(form.username) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.plainPassword.first) }}*/
/*         {{ form_row(form.plainPassword.second) }}*/
/* */
/*         <button type="submit">Register!</button>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
