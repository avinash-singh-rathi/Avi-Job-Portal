<?php

/* AviJobBundle:category:show.html.twig */
class __TwigTemplate_1a934679d45e3c29dea49cb746db52e00e67152bbe428b3270edb7253bc86523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AviJobBundle:category:show.html.twig", 1);
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
        $__internal_4c3d5a54f911c082635287b9cf065efc310e9cfe816f80dd8cd633e3a5db49d5 = $this->env->getExtension("native_profiler");
        $__internal_4c3d5a54f911c082635287b9cf065efc310e9cfe816f80dd8cd633e3a5db49d5->enter($__internal_4c3d5a54f911c082635287b9cf065efc310e9cfe816f80dd8cd633e3a5db49d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AviJobBundle:category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3d5a54f911c082635287b9cf065efc310e9cfe816f80dd8cd633e3a5db49d5->leave($__internal_4c3d5a54f911c082635287b9cf065efc310e9cfe816f80dd8cd633e3a5db49d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c29fabd3aa9d840cb1b167dcf6f47fec833918bb3f5da26cb2cac6864adf7804 = $this->env->getExtension("native_profiler");
        $__internal_c29fabd3aa9d840cb1b167dcf6f47fec833918bb3f5da26cb2cac6864adf7804->enter($__internal_c29fabd3aa9d840cb1b167dcf6f47fec833918bb3f5da26cb2cac6864adf7804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Img</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "img", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imgalt</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "imgalt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parent</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "parent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "keywords", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreated</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "dateCreated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "dateCreated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datemodified</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "dateModified", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "dateModified", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("avi-category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avi-category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c29fabd3aa9d840cb1b167dcf6f47fec833918bb3f5da26cb2cac6864adf7804->leave($__internal_c29fabd3aa9d840cb1b167dcf6f47fec833918bb3f5da26cb2cac6864adf7804_prof);

    }

    public function getTemplateName()
    {
        return "AviJobBundle:category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 73,  158 => 71,  152 => 68,  146 => 65,  136 => 58,  127 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Category</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ category.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ category.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Url</th>*/
/*                 <td>{{ category.url }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Content</th>*/
/*                 <td>{{ category.content }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Img</th>*/
/*                 <td>{{ category.img }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imgalt</th>*/
/*                 <td>{{ category.imgalt }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Parent</th>*/
/*                 <td>{{ category.parent }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ category.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Keywords</th>*/
/*                 <td>{{ category.keywords }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ category.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecreated</th>*/
/*                 <td>{% if category.dateCreated %}{{ category.dateCreated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datemodified</th>*/
/*                 <td>{% if category.dateModified %}{{ category.dateModified|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Status</th>*/
/*                 <td>{{ category.status }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('avi-category_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('avi-category_edit', { 'id': category.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
