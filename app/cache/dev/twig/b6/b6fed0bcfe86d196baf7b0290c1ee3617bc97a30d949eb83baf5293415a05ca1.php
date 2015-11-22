<?php

/* security/login.html.twig */
class __TwigTemplate_fc10575ede86e3e0c5b4ff0de0fb018f00b31fa082c6fe69e97040df5e2c3f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_940aa886fecb0789fe2d346ea215dd529cbf03e9840eb1501cd043c4d106dfb9 = $this->env->getExtension("native_profiler");
        $__internal_940aa886fecb0789fe2d346ea215dd529cbf03e9840eb1501cd043c4d106dfb9->enter($__internal_940aa886fecb0789fe2d346ea215dd529cbf03e9840eb1501cd043c4d106dfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940aa886fecb0789fe2d346ea215dd529cbf03e9840eb1501cd043c4d106dfb9->leave($__internal_940aa886fecb0789fe2d346ea215dd529cbf03e9840eb1501cd043c4d106dfb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d88aec0db52dc3b9b188188db65b5ea090d5151fb888aaa503b8489f062daba = $this->env->getExtension("native_profiler");
        $__internal_7d88aec0db52dc3b9b188188db65b5ea090d5151fb888aaa503b8489f062daba->enter($__internal_7d88aec0db52dc3b9b188188db65b5ea090d5151fb888aaa503b8489f062daba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_7d88aec0db52dc3b9b188188db65b5ea090d5151fb888aaa503b8489f062daba->leave($__internal_7d88aec0db52dc3b9b188188db65b5ea090d5151fb888aaa503b8489f062daba_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password" />*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         <button type="submit">login</button>*/
/*     </form>*/
/* {% endblock %}*/
/* */
