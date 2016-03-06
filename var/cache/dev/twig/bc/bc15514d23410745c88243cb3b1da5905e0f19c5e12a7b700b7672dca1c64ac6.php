<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fce63c61eb9db2b0058d55845a69122c39da32dd9865caf91fbb82e8c26264a3 extends Twig_Template
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
        $__internal_7124e3276baced82910849f7ef01f6072f975aeda7f0b6325d48c75324de0a9e = $this->env->getExtension("native_profiler");
        $__internal_7124e3276baced82910849f7ef01f6072f975aeda7f0b6325d48c75324de0a9e->enter($__internal_7124e3276baced82910849f7ef01f6072f975aeda7f0b6325d48c75324de0a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7124e3276baced82910849f7ef01f6072f975aeda7f0b6325d48c75324de0a9e->leave($__internal_7124e3276baced82910849f7ef01f6072f975aeda7f0b6325d48c75324de0a9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
