<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b73e3f096a43bfc80852bc7c6432812588ddaf36289e7e012a5e6f6bee19fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9c5a7b8c773fcebd62fdd980587fdbb8543de09e2f1cb0a2969119917095e4c = $this->env->getExtension("native_profiler");
        $__internal_a9c5a7b8c773fcebd62fdd980587fdbb8543de09e2f1cb0a2969119917095e4c->enter($__internal_a9c5a7b8c773fcebd62fdd980587fdbb8543de09e2f1cb0a2969119917095e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9c5a7b8c773fcebd62fdd980587fdbb8543de09e2f1cb0a2969119917095e4c->leave($__internal_a9c5a7b8c773fcebd62fdd980587fdbb8543de09e2f1cb0a2969119917095e4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_305445ce98f46e5861445755bdf6c679db6c2623a0d61231073a74d48615d8a8 = $this->env->getExtension("native_profiler");
        $__internal_305445ce98f46e5861445755bdf6c679db6c2623a0d61231073a74d48615d8a8->enter($__internal_305445ce98f46e5861445755bdf6c679db6c2623a0d61231073a74d48615d8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_305445ce98f46e5861445755bdf6c679db6c2623a0d61231073a74d48615d8a8->leave($__internal_305445ce98f46e5861445755bdf6c679db6c2623a0d61231073a74d48615d8a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f28f018c517488b401dd03715897d3148f98a479ec5839124cc61f93086c1bb7 = $this->env->getExtension("native_profiler");
        $__internal_f28f018c517488b401dd03715897d3148f98a479ec5839124cc61f93086c1bb7->enter($__internal_f28f018c517488b401dd03715897d3148f98a479ec5839124cc61f93086c1bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f28f018c517488b401dd03715897d3148f98a479ec5839124cc61f93086c1bb7->leave($__internal_f28f018c517488b401dd03715897d3148f98a479ec5839124cc61f93086c1bb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc1c12ff267238484ce867945e210ad9cfe587447953f17e9f2257577dcf1da9 = $this->env->getExtension("native_profiler");
        $__internal_cc1c12ff267238484ce867945e210ad9cfe587447953f17e9f2257577dcf1da9->enter($__internal_cc1c12ff267238484ce867945e210ad9cfe587447953f17e9f2257577dcf1da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cc1c12ff267238484ce867945e210ad9cfe587447953f17e9f2257577dcf1da9->leave($__internal_cc1c12ff267238484ce867945e210ad9cfe587447953f17e9f2257577dcf1da9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
