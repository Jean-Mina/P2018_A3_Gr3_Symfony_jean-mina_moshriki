<?php

/* grade/grades.html.twig */
class __TwigTemplate_48c4fd4467ca143350bf96b03db64960365cb9a8206fc976f7fa442ec8ec330d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grade/grades.html.twig", 1);
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
        $__internal_7e32a2a2daecadd7e6f2d23ca916ba57e90b98bf6a463c6fc6b572040d411eb6 = $this->env->getExtension("native_profiler");
        $__internal_7e32a2a2daecadd7e6f2d23ca916ba57e90b98bf6a463c6fc6b572040d411eb6->enter($__internal_7e32a2a2daecadd7e6f2d23ca916ba57e90b98bf6a463c6fc6b572040d411eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/grades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e32a2a2daecadd7e6f2d23ca916ba57e90b98bf6a463c6fc6b572040d411eb6->leave($__internal_7e32a2a2daecadd7e6f2d23ca916ba57e90b98bf6a463c6fc6b572040d411eb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5494dc3a03a99cb16a8fcded79e0e71404b5a15d0a43b67adec6012355f001a = $this->env->getExtension("native_profiler");
        $__internal_b5494dc3a03a99cb16a8fcded79e0e71404b5a15d0a43b67adec6012355f001a->enter($__internal_b5494dc3a03a99cb16a8fcded79e0e71404b5a15d0a43b67adec6012355f001a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : $this->getContext($context, "grades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 6
            echo "            <article>
                <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "lesson", array()), "title", array()), "html", null, true);
            echo "</h1>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "user", array()), "username", array()), "html", null, true);
            echo " got ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", array()), "html", null, true);
            echo "</p>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </section>
";
        
        $__internal_b5494dc3a03a99cb16a8fcded79e0e71404b5a15d0a43b67adec6012355f001a->leave($__internal_b5494dc3a03a99cb16a8fcded79e0e71404b5a15d0a43b67adec6012355f001a_prof);

    }

    public function getTemplateName()
    {
        return "grade/grades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <section>*/
/*         {% for grade in grades %}*/
/*             <article>*/
/*                 <h1>{{ grade.lesson.title }}</h1>*/
/*                 <p>{{ grade.user.username }} got {{ grade.grade }}</p>*/
/*             </article>*/
/*         {% endfor %}*/
/*     </section>*/
/* {% endblock %}*/
