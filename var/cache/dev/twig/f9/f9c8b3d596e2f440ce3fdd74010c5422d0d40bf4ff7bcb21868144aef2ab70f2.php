<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b7ea1b127fd9154cbfb9129d698e4c19c80170d40f91109e4e7f7ac6bde833ea extends Twig_Template
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
        $__internal_182b3b07775a2b5b81e92100d6a2474880580766ea556dbb15bf254a77a41559 = $this->env->getExtension("native_profiler");
        $__internal_182b3b07775a2b5b81e92100d6a2474880580766ea556dbb15bf254a77a41559->enter($__internal_182b3b07775a2b5b81e92100d6a2474880580766ea556dbb15bf254a77a41559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_182b3b07775a2b5b81e92100d6a2474880580766ea556dbb15bf254a77a41559->leave($__internal_182b3b07775a2b5b81e92100d6a2474880580766ea556dbb15bf254a77a41559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
