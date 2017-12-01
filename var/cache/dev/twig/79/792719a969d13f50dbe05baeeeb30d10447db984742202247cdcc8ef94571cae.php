<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
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
        $__internal_d5840e7804bfaa733c01db0069cde4e46a3aec1adc390b14a7570366dffdd2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5840e7804bfaa733c01db0069cde4e46a3aec1adc390b14a7570366dffdd2f5->enter($__internal_d5840e7804bfaa733c01db0069cde4e46a3aec1adc390b14a7570366dffdd2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_02a723a22a16b37ea2c8ccc499649d39b2345eafbcbd28603492aadd94cbc53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a723a22a16b37ea2c8ccc499649d39b2345eafbcbd28603492aadd94cbc53b->enter($__internal_02a723a22a16b37ea2c8ccc499649d39b2345eafbcbd28603492aadd94cbc53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d5840e7804bfaa733c01db0069cde4e46a3aec1adc390b14a7570366dffdd2f5->leave($__internal_d5840e7804bfaa733c01db0069cde4e46a3aec1adc390b14a7570366dffdd2f5_prof);

        
        $__internal_02a723a22a16b37ea2c8ccc499649d39b2345eafbcbd28603492aadd94cbc53b->leave($__internal_02a723a22a16b37ea2c8ccc499649d39b2345eafbcbd28603492aadd94cbc53b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d64b2916339c7a0f8a5386b7c80934f0798fb21f9b7a5eb19925e0ad62a09c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d64b2916339c7a0f8a5386b7c80934f0798fb21f9b7a5eb19925e0ad62a09c7->enter($__internal_2d64b2916339c7a0f8a5386b7c80934f0798fb21f9b7a5eb19925e0ad62a09c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74de11b79bcc724ce4a893b070940ef1a1a78d4b36e0b118bb867f58c26b999a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74de11b79bcc724ce4a893b070940ef1a1a78d4b36e0b118bb867f58c26b999a->enter($__internal_74de11b79bcc724ce4a893b070940ef1a1a78d4b36e0b118bb867f58c26b999a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_74de11b79bcc724ce4a893b070940ef1a1a78d4b36e0b118bb867f58c26b999a->leave($__internal_74de11b79bcc724ce4a893b070940ef1a1a78d4b36e0b118bb867f58c26b999a_prof);

        
        $__internal_2d64b2916339c7a0f8a5386b7c80934f0798fb21f9b7a5eb19925e0ad62a09c7->leave($__internal_2d64b2916339c7a0f8a5386b7c80934f0798fb21f9b7a5eb19925e0ad62a09c7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_695e93e7b6fc907314bff714bce81ced0e2fdd186a287c595850adf5bcb568be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695e93e7b6fc907314bff714bce81ced0e2fdd186a287c595850adf5bcb568be->enter($__internal_695e93e7b6fc907314bff714bce81ced0e2fdd186a287c595850adf5bcb568be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37a145aa9cc5379ed0af0948f279097ccd53492de89bd09f71d7db69c899cd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a145aa9cc5379ed0af0948f279097ccd53492de89bd09f71d7db69c899cd93->enter($__internal_37a145aa9cc5379ed0af0948f279097ccd53492de89bd09f71d7db69c899cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_37a145aa9cc5379ed0af0948f279097ccd53492de89bd09f71d7db69c899cd93->leave($__internal_37a145aa9cc5379ed0af0948f279097ccd53492de89bd09f71d7db69c899cd93_prof);

        
        $__internal_695e93e7b6fc907314bff714bce81ced0e2fdd186a287c595850adf5bcb568be->leave($__internal_695e93e7b6fc907314bff714bce81ced0e2fdd186a287c595850adf5bcb568be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3663dd980827a15b8546e25ecffdb661d4db67bcd3b93dfedf8bd0a0dc39b4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3663dd980827a15b8546e25ecffdb661d4db67bcd3b93dfedf8bd0a0dc39b4bc->enter($__internal_3663dd980827a15b8546e25ecffdb661d4db67bcd3b93dfedf8bd0a0dc39b4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e130765f06231b415306e75b5fad28d1cd6392066bbc32eda5b32b4b7131b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e130765f06231b415306e75b5fad28d1cd6392066bbc32eda5b32b4b7131b6f->enter($__internal_7e130765f06231b415306e75b5fad28d1cd6392066bbc32eda5b32b4b7131b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e130765f06231b415306e75b5fad28d1cd6392066bbc32eda5b32b4b7131b6f->leave($__internal_7e130765f06231b415306e75b5fad28d1cd6392066bbc32eda5b32b4b7131b6f_prof);

        
        $__internal_3663dd980827a15b8546e25ecffdb661d4db67bcd3b93dfedf8bd0a0dc39b4bc->leave($__internal_3663dd980827a15b8546e25ecffdb661d4db67bcd3b93dfedf8bd0a0dc39b4bc_prof);

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
