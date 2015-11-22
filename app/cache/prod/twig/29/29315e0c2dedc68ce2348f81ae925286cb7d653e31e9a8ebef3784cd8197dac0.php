<?php

/* grade/grades.html.twig */
class __TwigTemplate_ba337079b30ea6692ab16f7c3e8ae4393f1fc556b67ec2f3aae271b4ab82e498 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <section>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : null));
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
        return array (  56 => 11,  45 => 8,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
