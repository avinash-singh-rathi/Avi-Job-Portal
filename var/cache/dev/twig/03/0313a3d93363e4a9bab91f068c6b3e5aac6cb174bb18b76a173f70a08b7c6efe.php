<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6b65b92dcc1860c419bded499e3142f9a20e06f5ce7cdb8bb806533a2d632bbb extends Twig_Template
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
        $__internal_12d068c1e88a2b8453419f3f2cd93b8ea5efecd3a320486ae95b72f16d6d060e = $this->env->getExtension("native_profiler");
        $__internal_12d068c1e88a2b8453419f3f2cd93b8ea5efecd3a320486ae95b72f16d6d060e->enter($__internal_12d068c1e88a2b8453419f3f2cd93b8ea5efecd3a320486ae95b72f16d6d060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_12d068c1e88a2b8453419f3f2cd93b8ea5efecd3a320486ae95b72f16d6d060e->leave($__internal_12d068c1e88a2b8453419f3f2cd93b8ea5efecd3a320486ae95b72f16d6d060e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
