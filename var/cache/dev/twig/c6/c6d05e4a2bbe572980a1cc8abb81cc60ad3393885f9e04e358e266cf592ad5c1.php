<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_51373b15bc3e7900f7dab7645e85aae1479fd914944259cf38caba9064983bc6 extends Twig_Template
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
        $__internal_872b8009d4ecf6583a95bdee03523534dcf4892da4d03ecde3902204adbaa18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872b8009d4ecf6583a95bdee03523534dcf4892da4d03ecde3902204adbaa18f->enter($__internal_872b8009d4ecf6583a95bdee03523534dcf4892da4d03ecde3902204adbaa18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fa7af7a30e0a4218651c64663e80267491ae88edd09ce67bca41d75fbbd35c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7af7a30e0a4218651c64663e80267491ae88edd09ce67bca41d75fbbd35c9b->enter($__internal_fa7af7a30e0a4218651c64663e80267491ae88edd09ce67bca41d75fbbd35c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_872b8009d4ecf6583a95bdee03523534dcf4892da4d03ecde3902204adbaa18f->leave($__internal_872b8009d4ecf6583a95bdee03523534dcf4892da4d03ecde3902204adbaa18f_prof);

        
        $__internal_fa7af7a30e0a4218651c64663e80267491ae88edd09ce67bca41d75fbbd35c9b->leave($__internal_fa7af7a30e0a4218651c64663e80267491ae88edd09ce67bca41d75fbbd35c9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
