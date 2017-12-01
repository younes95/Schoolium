<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c321b27f600d2c707885c1fb6c3429dd09131cc27cf20f889d1ce73a1291c74f extends Twig_Template
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
        $__internal_66a7ee8075979d369fcf80cb18bb01fbcb195f64c9efb64728262bfad959170d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a7ee8075979d369fcf80cb18bb01fbcb195f64c9efb64728262bfad959170d->enter($__internal_66a7ee8075979d369fcf80cb18bb01fbcb195f64c9efb64728262bfad959170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_db043d35e7e578988b70552dd94a0d64c375dda3839cf94e6b349899f06bcafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db043d35e7e578988b70552dd94a0d64c375dda3839cf94e6b349899f06bcafd->enter($__internal_db043d35e7e578988b70552dd94a0d64c375dda3839cf94e6b349899f06bcafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_66a7ee8075979d369fcf80cb18bb01fbcb195f64c9efb64728262bfad959170d->leave($__internal_66a7ee8075979d369fcf80cb18bb01fbcb195f64c9efb64728262bfad959170d_prof);

        
        $__internal_db043d35e7e578988b70552dd94a0d64c375dda3839cf94e6b349899f06bcafd->leave($__internal_db043d35e7e578988b70552dd94a0d64c375dda3839cf94e6b349899f06bcafd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
