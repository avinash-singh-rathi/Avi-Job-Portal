<?php

/* category/index.html.twig */
class __TwigTemplate_be8db00a29805aba08149699e7a21d32e2f93b70a839aa9291a560e1dae9bbf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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
        $__internal_f6a3c19acf2f57bda469b4cad12f37908b965a7ce1dbd55f285b30273740826a = $this->env->getExtension("native_profiler");
        $__internal_f6a3c19acf2f57bda469b4cad12f37908b965a7ce1dbd55f285b30273740826a->enter($__internal_f6a3c19acf2f57bda469b4cad12f37908b965a7ce1dbd55f285b30273740826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a3c19acf2f57bda469b4cad12f37908b965a7ce1dbd55f285b30273740826a->leave($__internal_f6a3c19acf2f57bda469b4cad12f37908b965a7ce1dbd55f285b30273740826a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7217b3a6ffdb66d96a3e278135ca322600f433d2504067f51c8dea8a640f1bc = $this->env->getExtension("native_profiler");
        $__internal_a7217b3a6ffdb66d96a3e278135ca322600f433d2504067f51c8dea8a640f1bc->enter($__internal_a7217b3a6ffdb66d96a3e278135ca322600f433d2504067f51c8dea8a640f1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Url</th>
                <th>Content</th>
                <th>Img</th>
                <th>Imgalt</th>
                <th>Parent</th>
                <th>Title</th>
                <th>Keywords</th>
                <th>Description</th>
                <th>Datecreated</th>
                <th>Datemodified</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avi-category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "img", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "imgalt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "keywords", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["category"], "dateCreated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "dateCreated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["category"], "dateModified", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "dateModified", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "status", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avi-category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avi-category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("avi-category_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a7217b3a6ffdb66d96a3e278135ca322600f433d2504067f51c8dea8a640f1bc->leave($__internal_a7217b3a6ffdb66d96a3e278135ca322600f433d2504067f51c8dea8a640f1bc_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  150 => 53,  138 => 47,  132 => 44,  125 => 40,  119 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  71 => 28,  68 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Category list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Url</th>*/
/*                 <th>Content</th>*/
/*                 <th>Img</th>*/
/*                 <th>Imgalt</th>*/
/*                 <th>Parent</th>*/
/*                 <th>Title</th>*/
/*                 <th>Keywords</th>*/
/*                 <th>Description</th>*/
/*                 <th>Datecreated</th>*/
/*                 <th>Datemodified</th>*/
/*                 <th>Status</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for category in categories %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('avi-category_show', { 'id': category.id }) }}">{{ category.id }}</a></td>*/
/*                 <td>{{ category.name }}</td>*/
/*                 <td>{{ category.url }}</td>*/
/*                 <td>{{ category.content }}</td>*/
/*                 <td>{{ category.img }}</td>*/
/*                 <td>{{ category.imgalt }}</td>*/
/*                 <td>{{ category.parent }}</td>*/
/*                 <td>{{ category.title }}</td>*/
/*                 <td>{{ category.keywords }}</td>*/
/*                 <td>{{ category.description }}</td>*/
/*                 <td>{% if category.dateCreated %}{{ category.dateCreated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if category.dateModified %}{{ category.dateModified|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ category.status }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('avi-category_show', { 'id': category.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('avi-category_edit', { 'id': category.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('avi-category_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
