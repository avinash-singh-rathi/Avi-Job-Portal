<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ec23e8e54152201e19497164db2fb99331d08aafebf2e9a23f836620969e8d15 extends Twig_Template
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
        $__internal_f05ea6e055db6742758746beaabbb11ff8c36b63d598a5968e0cf83c321993ce = $this->env->getExtension("native_profiler");
        $__internal_f05ea6e055db6742758746beaabbb11ff8c36b63d598a5968e0cf83c321993ce->enter($__internal_f05ea6e055db6742758746beaabbb11ff8c36b63d598a5968e0cf83c321993ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f05ea6e055db6742758746beaabbb11ff8c36b63d598a5968e0cf83c321993ce->leave($__internal_f05ea6e055db6742758746beaabbb11ff8c36b63d598a5968e0cf83c321993ce_prof);

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
