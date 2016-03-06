<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_536f32653703550d8ffc9c5b0ae1af45a2743597e48a6fecf015b799990e899f extends Twig_Template
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
        $__internal_e4bc03ce8f373e4dbaf256a498a346cf180a243d861f362724c217b41521dfa6 = $this->env->getExtension("native_profiler");
        $__internal_e4bc03ce8f373e4dbaf256a498a346cf180a243d861f362724c217b41521dfa6->enter($__internal_e4bc03ce8f373e4dbaf256a498a346cf180a243d861f362724c217b41521dfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e4bc03ce8f373e4dbaf256a498a346cf180a243d861f362724c217b41521dfa6->leave($__internal_e4bc03ce8f373e4dbaf256a498a346cf180a243d861f362724c217b41521dfa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
