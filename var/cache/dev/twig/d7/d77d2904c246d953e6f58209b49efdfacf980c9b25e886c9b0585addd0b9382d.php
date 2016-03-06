<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8f1ecadd058a7a59a7e1aefe933ecf9abf3f834a97b1a3ee46a2042505f010ce extends Twig_Template
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
        $__internal_3b6ad5a8c16c58f24678c179e5e4c9362fc3c4697e3dc8a8d8d95feae769f394 = $this->env->getExtension("native_profiler");
        $__internal_3b6ad5a8c16c58f24678c179e5e4c9362fc3c4697e3dc8a8d8d95feae769f394->enter($__internal_3b6ad5a8c16c58f24678c179e5e4c9362fc3c4697e3dc8a8d8d95feae769f394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3b6ad5a8c16c58f24678c179e5e4c9362fc3c4697e3dc8a8d8d95feae769f394->leave($__internal_3b6ad5a8c16c58f24678c179e5e4c9362fc3c4697e3dc8a8d8d95feae769f394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
