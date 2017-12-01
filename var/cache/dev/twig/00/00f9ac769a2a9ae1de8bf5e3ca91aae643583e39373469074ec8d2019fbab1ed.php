<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce98d2d81b13a359d80dc6ff0c57fba0b600873c1df988e78032d676e235d038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce98d2d81b13a359d80dc6ff0c57fba0b600873c1df988e78032d676e235d038->enter($__internal_ce98d2d81b13a359d80dc6ff0c57fba0b600873c1df988e78032d676e235d038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d8f828e62a3db5e4378a5b42253cad2f20c09a9ea78d1f931dffb65df0a7e827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f828e62a3db5e4378a5b42253cad2f20c09a9ea78d1f931dffb65df0a7e827->enter($__internal_d8f828e62a3db5e4378a5b42253cad2f20c09a9ea78d1f931dffb65df0a7e827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ce98d2d81b13a359d80dc6ff0c57fba0b600873c1df988e78032d676e235d038->leave($__internal_ce98d2d81b13a359d80dc6ff0c57fba0b600873c1df988e78032d676e235d038_prof);

        
        $__internal_d8f828e62a3db5e4378a5b42253cad2f20c09a9ea78d1f931dffb65df0a7e827->leave($__internal_d8f828e62a3db5e4378a5b42253cad2f20c09a9ea78d1f931dffb65df0a7e827_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1d9a522e1b2a8ff0e8a46356a7e7707705bf0a5a87b18e5c8272a55a63079a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d9a522e1b2a8ff0e8a46356a7e7707705bf0a5a87b18e5c8272a55a63079a3->enter($__internal_f1d9a522e1b2a8ff0e8a46356a7e7707705bf0a5a87b18e5c8272a55a63079a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12306e26627aaf82d34129e86eeba60ae9219ca70d1edb71b669ee22110480ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12306e26627aaf82d34129e86eeba60ae9219ca70d1edb71b669ee22110480ab->enter($__internal_12306e26627aaf82d34129e86eeba60ae9219ca70d1edb71b669ee22110480ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_12306e26627aaf82d34129e86eeba60ae9219ca70d1edb71b669ee22110480ab->leave($__internal_12306e26627aaf82d34129e86eeba60ae9219ca70d1edb71b669ee22110480ab_prof);

        
        $__internal_f1d9a522e1b2a8ff0e8a46356a7e7707705bf0a5a87b18e5c8272a55a63079a3->leave($__internal_f1d9a522e1b2a8ff0e8a46356a7e7707705bf0a5a87b18e5c8272a55a63079a3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_715c31251116d90d85956cab1772587788ecccfd0647308598f3f0241f33dcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715c31251116d90d85956cab1772587788ecccfd0647308598f3f0241f33dcf5->enter($__internal_715c31251116d90d85956cab1772587788ecccfd0647308598f3f0241f33dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c0eb8a552ca105fdc0edac82fc34793157b21134c0ccad79defa84e38627514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0eb8a552ca105fdc0edac82fc34793157b21134c0ccad79defa84e38627514->enter($__internal_0c0eb8a552ca105fdc0edac82fc34793157b21134c0ccad79defa84e38627514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0c0eb8a552ca105fdc0edac82fc34793157b21134c0ccad79defa84e38627514->leave($__internal_0c0eb8a552ca105fdc0edac82fc34793157b21134c0ccad79defa84e38627514_prof);

        
        $__internal_715c31251116d90d85956cab1772587788ecccfd0647308598f3f0241f33dcf5->leave($__internal_715c31251116d90d85956cab1772587788ecccfd0647308598f3f0241f33dcf5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6120f15a8542c484487ae67af6cbd328f95780ffa1fe5893d46530b408da5b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6120f15a8542c484487ae67af6cbd328f95780ffa1fe5893d46530b408da5b40->enter($__internal_6120f15a8542c484487ae67af6cbd328f95780ffa1fe5893d46530b408da5b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4daf1378cf33ddd5d17c1cc33a29e8fbdecbb2236f3f1bd1094f48773f14c03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daf1378cf33ddd5d17c1cc33a29e8fbdecbb2236f3f1bd1094f48773f14c03b->enter($__internal_4daf1378cf33ddd5d17c1cc33a29e8fbdecbb2236f3f1bd1094f48773f14c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4daf1378cf33ddd5d17c1cc33a29e8fbdecbb2236f3f1bd1094f48773f14c03b->leave($__internal_4daf1378cf33ddd5d17c1cc33a29e8fbdecbb2236f3f1bd1094f48773f14c03b_prof);

        
        $__internal_6120f15a8542c484487ae67af6cbd328f95780ffa1fe5893d46530b408da5b40->leave($__internal_6120f15a8542c484487ae67af6cbd328f95780ffa1fe5893d46530b408da5b40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
