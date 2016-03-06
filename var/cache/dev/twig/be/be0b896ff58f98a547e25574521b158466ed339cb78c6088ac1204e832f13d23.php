<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_086a15718beec7b0aeeff427cb3a65b8b555ad1f0be3f6012a0b3db9213ba533 extends Twig_Template
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
        $__internal_2d0ce3e681ed3aba4f0a47c669471c8153fc44f13db7ffe9e3f5f82972fb98e8 = $this->env->getExtension("native_profiler");
        $__internal_2d0ce3e681ed3aba4f0a47c669471c8153fc44f13db7ffe9e3f5f82972fb98e8->enter($__internal_2d0ce3e681ed3aba4f0a47c669471c8153fc44f13db7ffe9e3f5f82972fb98e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2d0ce3e681ed3aba4f0a47c669471c8153fc44f13db7ffe9e3f5f82972fb98e8->leave($__internal_2d0ce3e681ed3aba4f0a47c669471c8153fc44f13db7ffe9e3f5f82972fb98e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
