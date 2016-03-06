<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d9d109e224df9f90e49bb1756ce6ca01532d9417221506eab396d08bc7e72fb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8170f378a21644dd9230fb8657881fd3e503941712421c3fc5290f9016b202fd = $this->env->getExtension("native_profiler");
        $__internal_8170f378a21644dd9230fb8657881fd3e503941712421c3fc5290f9016b202fd->enter($__internal_8170f378a21644dd9230fb8657881fd3e503941712421c3fc5290f9016b202fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8170f378a21644dd9230fb8657881fd3e503941712421c3fc5290f9016b202fd->leave($__internal_8170f378a21644dd9230fb8657881fd3e503941712421c3fc5290f9016b202fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
