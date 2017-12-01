<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ccbd89d1fae1ddb2fff9a5833b17989ffd6438ce746b1e7a05cf6559a9904c40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b2c6d654a9d4198f2b04653663baddaf738218a85c206a31ff30b3d7743c892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2c6d654a9d4198f2b04653663baddaf738218a85c206a31ff30b3d7743c892->enter($__internal_6b2c6d654a9d4198f2b04653663baddaf738218a85c206a31ff30b3d7743c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_7bf851d76c46232179a5de78fcc876e59f946d57b2023a01842901845da11cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf851d76c46232179a5de78fcc876e59f946d57b2023a01842901845da11cab->enter($__internal_7bf851d76c46232179a5de78fcc876e59f946d57b2023a01842901845da11cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b2c6d654a9d4198f2b04653663baddaf738218a85c206a31ff30b3d7743c892->leave($__internal_6b2c6d654a9d4198f2b04653663baddaf738218a85c206a31ff30b3d7743c892_prof);

        
        $__internal_7bf851d76c46232179a5de78fcc876e59f946d57b2023a01842901845da11cab->leave($__internal_7bf851d76c46232179a5de78fcc876e59f946d57b2023a01842901845da11cab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6ce3d5a6caef2ccc6d3330d1fad2fd87a56d1aa23d50ffa3a6f261e1825a1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ce3d5a6caef2ccc6d3330d1fad2fd87a56d1aa23d50ffa3a6f261e1825a1a2->enter($__internal_d6ce3d5a6caef2ccc6d3330d1fad2fd87a56d1aa23d50ffa3a6f261e1825a1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d1f098d719cfefe0e61df9ed426837cbd5354b78a0470c02640a8dca9be58ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f098d719cfefe0e61df9ed426837cbd5354b78a0470c02640a8dca9be58ec8->enter($__internal_d1f098d719cfefe0e61df9ed426837cbd5354b78a0470c02640a8dca9be58ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d1f098d719cfefe0e61df9ed426837cbd5354b78a0470c02640a8dca9be58ec8->leave($__internal_d1f098d719cfefe0e61df9ed426837cbd5354b78a0470c02640a8dca9be58ec8_prof);

        
        $__internal_d6ce3d5a6caef2ccc6d3330d1fad2fd87a56d1aa23d50ffa3a6f261e1825a1a2->leave($__internal_d6ce3d5a6caef2ccc6d3330d1fad2fd87a56d1aa23d50ffa3a6f261e1825a1a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
