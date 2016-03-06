<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7b55d8d3887f1e7b529ef6a798e1020fa16f5a21d34a0530d350b28a830ae7bf extends Twig_Template
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
        $__internal_4fe977926d5f9f2895b9efd274f3c0a12f6b59aa37220550d9ec98d6c43e6c99 = $this->env->getExtension("native_profiler");
        $__internal_4fe977926d5f9f2895b9efd274f3c0a12f6b59aa37220550d9ec98d6c43e6c99->enter($__internal_4fe977926d5f9f2895b9efd274f3c0a12f6b59aa37220550d9ec98d6c43e6c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4fe977926d5f9f2895b9efd274f3c0a12f6b59aa37220550d9ec98d6c43e6c99->leave($__internal_4fe977926d5f9f2895b9efd274f3c0a12f6b59aa37220550d9ec98d6c43e6c99_prof);

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
