<?php

/* base.html.twig */
class __TwigTemplate_761f8c2731da7cbfe31391cba71550847a4b64037d7aba63e3a7b635816b2f9d extends Twig_Template
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
        $__internal_a1900f2d3a3216e40a530a59256d06fd8e0ccb6de60ff3d2c9577b2702d127b9 = $this->env->getExtension("native_profiler");
        $__internal_a1900f2d3a3216e40a530a59256d06fd8e0ccb6de60ff3d2c9577b2702d127b9->enter($__internal_a1900f2d3a3216e40a530a59256d06fd8e0ccb6de60ff3d2c9577b2702d127b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_a1900f2d3a3216e40a530a59256d06fd8e0ccb6de60ff3d2c9577b2702d127b9->leave($__internal_a1900f2d3a3216e40a530a59256d06fd8e0ccb6de60ff3d2c9577b2702d127b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f41aa9f97dea882a9b8ea28b89cfdfe57132dcd5e2273466d34bbbda61a3485c = $this->env->getExtension("native_profiler");
        $__internal_f41aa9f97dea882a9b8ea28b89cfdfe57132dcd5e2273466d34bbbda61a3485c->enter($__internal_f41aa9f97dea882a9b8ea28b89cfdfe57132dcd5e2273466d34bbbda61a3485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f41aa9f97dea882a9b8ea28b89cfdfe57132dcd5e2273466d34bbbda61a3485c->leave($__internal_f41aa9f97dea882a9b8ea28b89cfdfe57132dcd5e2273466d34bbbda61a3485c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04ce1bf5f11390f0d38d1030040a1cd78898a39545e18cb3fb89531d60692eaa = $this->env->getExtension("native_profiler");
        $__internal_04ce1bf5f11390f0d38d1030040a1cd78898a39545e18cb3fb89531d60692eaa->enter($__internal_04ce1bf5f11390f0d38d1030040a1cd78898a39545e18cb3fb89531d60692eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc4742d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "dc4742d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_04ce1bf5f11390f0d38d1030040a1cd78898a39545e18cb3fb89531d60692eaa->leave($__internal_04ce1bf5f11390f0d38d1030040a1cd78898a39545e18cb3fb89531d60692eaa_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce698e86602baf10d267b8a5c2ee100d38a04802b9f227bb63da3dbc365ab11e = $this->env->getExtension("native_profiler");
        $__internal_ce698e86602baf10d267b8a5c2ee100d38a04802b9f227bb63da3dbc365ab11e->enter($__internal_ce698e86602baf10d267b8a5c2ee100d38a04802b9f227bb63da3dbc365ab11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce698e86602baf10d267b8a5c2ee100d38a04802b9f227bb63da3dbc365ab11e->leave($__internal_ce698e86602baf10d267b8a5c2ee100d38a04802b9f227bb63da3dbc365ab11e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_770d828b7a57f502e991b281641cc49a19cdf1e485dc5c9c703e6e0f5e51d630 = $this->env->getExtension("native_profiler");
        $__internal_770d828b7a57f502e991b281641cc49a19cdf1e485dc5c9c703e6e0f5e51d630->enter($__internal_770d828b7a57f502e991b281641cc49a19cdf1e485dc5c9c703e6e0f5e51d630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d1d496_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496_part_1.js");
            // line 17
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "4d1d496"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_770d828b7a57f502e991b281641cc49a19cdf1e485dc5c9c703e6e0f5e51d630->leave($__internal_770d828b7a57f502e991b281641cc49a19cdf1e485dc5c9c703e6e0f5e51d630_prof);

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
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets '@adminlte_css' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}">*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             {% javascripts '@adminlte_js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
