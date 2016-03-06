<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c6f9e3e8a5cf3ca8ddfd2a56333c06dcd1278d4d5ffa3f3b3f7ff213a3089dcf extends Twig_Template
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
        $__internal_f034fd76fbb7a565a2881751908b19d8010d007b9c05c04dde76a3ac9aa9ba45 = $this->env->getExtension("native_profiler");
        $__internal_f034fd76fbb7a565a2881751908b19d8010d007b9c05c04dde76a3ac9aa9ba45->enter($__internal_f034fd76fbb7a565a2881751908b19d8010d007b9c05c04dde76a3ac9aa9ba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f034fd76fbb7a565a2881751908b19d8010d007b9c05c04dde76a3ac9aa9ba45->leave($__internal_f034fd76fbb7a565a2881751908b19d8010d007b9c05c04dde76a3ac9aa9ba45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
