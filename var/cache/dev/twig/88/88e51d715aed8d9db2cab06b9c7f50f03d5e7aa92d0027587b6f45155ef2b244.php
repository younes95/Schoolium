<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9c1d399f550e3db2e89e10258e86e145e88b15bdbfae5440a39eeb18c4fded69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_06bc6579233625d4251270fa9f7988cf5f5100e0195b6b6b5e6c88c20db308ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bc6579233625d4251270fa9f7988cf5f5100e0195b6b6b5e6c88c20db308ee->enter($__internal_06bc6579233625d4251270fa9f7988cf5f5100e0195b6b6b5e6c88c20db308ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_5ccc2f569c526ced5cf00ba0ec02fedc22f3471326eb2477c4ba4c93f051ca79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccc2f569c526ced5cf00ba0ec02fedc22f3471326eb2477c4ba4c93f051ca79->enter($__internal_5ccc2f569c526ced5cf00ba0ec02fedc22f3471326eb2477c4ba4c93f051ca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06bc6579233625d4251270fa9f7988cf5f5100e0195b6b6b5e6c88c20db308ee->leave($__internal_06bc6579233625d4251270fa9f7988cf5f5100e0195b6b6b5e6c88c20db308ee_prof);

        
        $__internal_5ccc2f569c526ced5cf00ba0ec02fedc22f3471326eb2477c4ba4c93f051ca79->leave($__internal_5ccc2f569c526ced5cf00ba0ec02fedc22f3471326eb2477c4ba4c93f051ca79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b7892efb75d6b4fd25efbf3f7b25ee554a2d9687b058b3814eb6938030ba726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7892efb75d6b4fd25efbf3f7b25ee554a2d9687b058b3814eb6938030ba726->enter($__internal_0b7892efb75d6b4fd25efbf3f7b25ee554a2d9687b058b3814eb6938030ba726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d6b5a5df88e944cc2832de87a1ed88f95fbc700a7c0ba605a3ab6b0563eca14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6b5a5df88e944cc2832de87a1ed88f95fbc700a7c0ba605a3ab6b0563eca14->enter($__internal_3d6b5a5df88e944cc2832de87a1ed88f95fbc700a7c0ba605a3ab6b0563eca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3d6b5a5df88e944cc2832de87a1ed88f95fbc700a7c0ba605a3ab6b0563eca14->leave($__internal_3d6b5a5df88e944cc2832de87a1ed88f95fbc700a7c0ba605a3ab6b0563eca14_prof);

        
        $__internal_0b7892efb75d6b4fd25efbf3f7b25ee554a2d9687b058b3814eb6938030ba726->leave($__internal_0b7892efb75d6b4fd25efbf3f7b25ee554a2d9687b058b3814eb6938030ba726_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
