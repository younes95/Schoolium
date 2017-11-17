<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5524746357014c62af0f33d4bc738536f91ca6bf0c09d9f91bcbc71b7593fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5524746357014c62af0f33d4bc738536f91ca6bf0c09d9f91bcbc71b7593fce->enter($__internal_e5524746357014c62af0f33d4bc738536f91ca6bf0c09d9f91bcbc71b7593fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_681c22a6181e2ec2e47de515cce69168429653d6979a543d93d80f1d703d703d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681c22a6181e2ec2e47de515cce69168429653d6979a543d93d80f1d703d703d->enter($__internal_681c22a6181e2ec2e47de515cce69168429653d6979a543d93d80f1d703d703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </body>
</html>
";
        
        $__internal_e5524746357014c62af0f33d4bc738536f91ca6bf0c09d9f91bcbc71b7593fce->leave($__internal_e5524746357014c62af0f33d4bc738536f91ca6bf0c09d9f91bcbc71b7593fce_prof);

        
        $__internal_681c22a6181e2ec2e47de515cce69168429653d6979a543d93d80f1d703d703d->leave($__internal_681c22a6181e2ec2e47de515cce69168429653d6979a543d93d80f1d703d703d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7144931b4a9020f24a83d5a7dbe8a70e52a74c33ec69e26e5908b710176c0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7144931b4a9020f24a83d5a7dbe8a70e52a74c33ec69e26e5908b710176c0b4->enter($__internal_f7144931b4a9020f24a83d5a7dbe8a70e52a74c33ec69e26e5908b710176c0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0eefa51951694f4dbfa155081ee94aca7c627035b2f52adc543b9f16a4b8e5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eefa51951694f4dbfa155081ee94aca7c627035b2f52adc543b9f16a4b8e5ff->enter($__internal_0eefa51951694f4dbfa155081ee94aca7c627035b2f52adc543b9f16a4b8e5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0eefa51951694f4dbfa155081ee94aca7c627035b2f52adc543b9f16a4b8e5ff->leave($__internal_0eefa51951694f4dbfa155081ee94aca7c627035b2f52adc543b9f16a4b8e5ff_prof);

        
        $__internal_f7144931b4a9020f24a83d5a7dbe8a70e52a74c33ec69e26e5908b710176c0b4->leave($__internal_f7144931b4a9020f24a83d5a7dbe8a70e52a74c33ec69e26e5908b710176c0b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2424694263cedb2c10b6100080be9bc15f6ac70b78ea24af7c4b95cbaa8e06f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2424694263cedb2c10b6100080be9bc15f6ac70b78ea24af7c4b95cbaa8e06f6->enter($__internal_2424694263cedb2c10b6100080be9bc15f6ac70b78ea24af7c4b95cbaa8e06f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_82eddf68f8723259c61df8042b3de5641b8d5a84268a38a8004d8ce3563f79c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eddf68f8723259c61df8042b3de5641b8d5a84268a38a8004d8ce3563f79c2->enter($__internal_82eddf68f8723259c61df8042b3de5641b8d5a84268a38a8004d8ce3563f79c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82eddf68f8723259c61df8042b3de5641b8d5a84268a38a8004d8ce3563f79c2->leave($__internal_82eddf68f8723259c61df8042b3de5641b8d5a84268a38a8004d8ce3563f79c2_prof);

        
        $__internal_2424694263cedb2c10b6100080be9bc15f6ac70b78ea24af7c4b95cbaa8e06f6->leave($__internal_2424694263cedb2c10b6100080be9bc15f6ac70b78ea24af7c4b95cbaa8e06f6_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d293fc1ec1daa1914ff1146e166d1b673a6f5dabccd53dbebf863ffb7b585ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d293fc1ec1daa1914ff1146e166d1b673a6f5dabccd53dbebf863ffb7b585ae->enter($__internal_3d293fc1ec1daa1914ff1146e166d1b673a6f5dabccd53dbebf863ffb7b585ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae673ad1e7777ef41d5d2995b9e4a11eb0f9181633e6900b911105ad76acd320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae673ad1e7777ef41d5d2995b9e4a11eb0f9181633e6900b911105ad76acd320->enter($__internal_ae673ad1e7777ef41d5d2995b9e4a11eb0f9181633e6900b911105ad76acd320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae673ad1e7777ef41d5d2995b9e4a11eb0f9181633e6900b911105ad76acd320->leave($__internal_ae673ad1e7777ef41d5d2995b9e4a11eb0f9181633e6900b911105ad76acd320_prof);

        
        $__internal_3d293fc1ec1daa1914ff1146e166d1b673a6f5dabccd53dbebf863ffb7b585ae->leave($__internal_3d293fc1ec1daa1914ff1146e166d1b673a6f5dabccd53dbebf863ffb7b585ae_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a828800265ab71976aec48f7945cca4e8ca44696f6e2d9f917301cb66f12a671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a828800265ab71976aec48f7945cca4e8ca44696f6e2d9f917301cb66f12a671->enter($__internal_a828800265ab71976aec48f7945cca4e8ca44696f6e2d9f917301cb66f12a671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e79d5021fe91adc8f2f8634e9e1d0071e328a18afbda542a36c71ae499c2b86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79d5021fe91adc8f2f8634e9e1d0071e328a18afbda542a36c71ae499c2b86a->enter($__internal_e79d5021fe91adc8f2f8634e9e1d0071e328a18afbda542a36c71ae499c2b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_e79d5021fe91adc8f2f8634e9e1d0071e328a18afbda542a36c71ae499c2b86a->leave($__internal_e79d5021fe91adc8f2f8634e9e1d0071e328a18afbda542a36c71ae499c2b86a_prof);

        
        $__internal_a828800265ab71976aec48f7945cca4e8ca44696f6e2d9f917301cb66f12a671->leave($__internal_a828800265ab71976aec48f7945cca4e8ca44696f6e2d9f917301cb66f12a671_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 16,  126 => 15,  109 => 13,  92 => 6,  74 => 5,  61 => 17,  59 => 15,  56 => 14,  54 => 13,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        {% block body %}{% endblock %}

        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app\\Resources\\views\\base.html.twig");
    }
}
