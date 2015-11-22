<?php

/* lesson/lessons.html.twig */
class __TwigTemplate_c405080fe9564b9f5a602e799f8dd04faadc9b8b2998b12b3eb7a60580f73e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lesson/lessons.html.twig", 1);
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
        $__internal_2931b82cd3d628ad9609084a5de4a0366ca5de59edeb9c8a9dc121cb435a1201 = $this->env->getExtension("native_profiler");
        $__internal_2931b82cd3d628ad9609084a5de4a0366ca5de59edeb9c8a9dc121cb435a1201->enter($__internal_2931b82cd3d628ad9609084a5de4a0366ca5de59edeb9c8a9dc121cb435a1201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesson/lessons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2931b82cd3d628ad9609084a5de4a0366ca5de59edeb9c8a9dc121cb435a1201->leave($__internal_2931b82cd3d628ad9609084a5de4a0366ca5de59edeb9c8a9dc121cb435a1201_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ee2507c0962abb7712f032f02f8bef1c5ed68e2d030e31fb39e10829c6706b7 = $this->env->getExtension("native_profiler");
        $__internal_4ee2507c0962abb7712f032f02f8bef1c5ed68e2d030e31fb39e10829c6706b7->enter($__internal_4ee2507c0962abb7712f032f02f8bef1c5ed68e2d030e31fb39e10829c6706b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 6
            echo "            <article>
                <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
            echo "</h1>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "summary", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lesson"], "writer", array()), "username", array()), "html", null, true);
            echo "</p>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </section>
";
        
        $__internal_4ee2507c0962abb7712f032f02f8bef1c5ed68e2d030e31fb39e10829c6706b7->leave($__internal_4ee2507c0962abb7712f032f02f8bef1c5ed68e2d030e31fb39e10829c6706b7_prof);

    }

    public function getTemplateName()
    {
        return "lesson/lessons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  58 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <section>*/
/*         {% for lesson in lessons %}*/
/*             <article>*/
/*                 <h1>{{ lesson.title }}</h1>*/
/*                 <p>{{ lesson.summary }}</p>*/
/*                 <p>{{ lesson.writer.username }}</p>*/
/*             </article>*/
/*         {% endfor %}*/
/*     </section>*/
/* {% endblock %}*/
/* */
