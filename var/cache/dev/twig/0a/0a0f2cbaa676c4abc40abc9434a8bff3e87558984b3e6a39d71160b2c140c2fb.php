<?php

/* :programme:show.html.twig */
class __TwigTemplate_ad9ccf3a0a76a9ebf54e41b4f6f369f0a6d90f08dca656837630abde1f45e5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":programme:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffdb52f7d227196cbf532062dd50256fe9eb322a692adaa0a84caded92f5f8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdb52f7d227196cbf532062dd50256fe9eb322a692adaa0a84caded92f5f8a3->enter($__internal_ffdb52f7d227196cbf532062dd50256fe9eb322a692adaa0a84caded92f5f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programme:show.html.twig"));

        $__internal_360ce2ddacd16aaae62914e88b70478bcf90e4cae7c8bd0af9cfcfb3068c4b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360ce2ddacd16aaae62914e88b70478bcf90e4cae7c8bd0af9cfcfb3068c4b26->enter($__internal_360ce2ddacd16aaae62914e88b70478bcf90e4cae7c8bd0af9cfcfb3068c4b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programme:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdb52f7d227196cbf532062dd50256fe9eb322a692adaa0a84caded92f5f8a3->leave($__internal_ffdb52f7d227196cbf532062dd50256fe9eb322a692adaa0a84caded92f5f8a3_prof);

        
        $__internal_360ce2ddacd16aaae62914e88b70478bcf90e4cae7c8bd0af9cfcfb3068c4b26->leave($__internal_360ce2ddacd16aaae62914e88b70478bcf90e4cae7c8bd0af9cfcfb3068c4b26_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_63029773eb1bcc275abd2c8e598c2c4662c7c7acfc5c1fced02371ffccef01f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63029773eb1bcc275abd2c8e598c2c4662c7c7acfc5c1fced02371ffccef01f7->enter($__internal_63029773eb1bcc275abd2c8e598c2c4662c7c7acfc5c1fced02371ffccef01f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_268e8470a1439560c8ef47da5d0c1aef2360172952efc8629bf4f7e108fc63b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268e8470a1439560c8ef47da5d0c1aef2360172952efc8629bf4f7e108fc63b4->enter($__internal_268e8470a1439560c8ef47da5d0c1aef2360172952efc8629bf4f7e108fc63b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 6
        echo "\t<table>
\t\t
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "jour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 9
            echo "\t\t<th>
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "nom", array()), "html", null, true);
            echo "
\t\t</th>
\t\t
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "horraire", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["horraire"]) {
                // line 14
                echo "\t\t<tr>\t
\t\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($context["horraire"], "heureDeb", array()), "H") . "H - ") . twig_date_format_filter($this->env, $this->getAttribute($context["horraire"], "heureFin", array()), "H")) . "H"), "html", null, true);
                echo "</td>
\t\t\t\t";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "programme", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
                    // line 17
                    echo "\t\t\t\t\t";
                    if ((($this->getAttribute($this->getAttribute($context["programme"], "jour", array()), "id", array()) == $this->getAttribute($context["jour"], "id", array())) && ($this->getAttribute($this->getAttribute($context["programme"], "horraire", array()), "id", array()) == $this->getAttribute($context["horraire"], "id", array())))) {
                        // line 18
                        echo "\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["programme"], "matiere", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "enseignant", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "salle", array()), "nom", array())), "html", null, true);
                        echo "</td>
\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t\t
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horraire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t
\t</table>

\t<div class=\"content-frame-body padding-bottom-0\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"alert_holder\"></div>
                <div class=\"calendar\">                                
        \t\t    <div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   


";
        
        $__internal_268e8470a1439560c8ef47da5d0c1aef2360172952efc8629bf4f7e108fc63b4->leave($__internal_268e8470a1439560c8ef47da5d0c1aef2360172952efc8629bf4f7e108fc63b4_prof);

        
        $__internal_63029773eb1bcc275abd2c8e598c2c4662c7c7acfc5c1fced02371ffccef01f7->leave($__internal_63029773eb1bcc275abd2c8e598c2c4662c7c7acfc5c1fced02371ffccef01f7_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13ae6ee81bbb448aec978604f8685a99eecb4ffe7f44cab84b066c19acca5b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ae6ee81bbb448aec978604f8685a99eecb4ffe7f44cab84b066c19acca5b2e->enter($__internal_13ae6ee81bbb448aec978604f8685a99eecb4ffe7f44cab84b066c19acca5b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb2dc464d8d07838ca8cf1c7933e970f8257889e64595bec9a77c73a5ccc5e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2dc464d8d07838ca8cf1c7933e970f8257889e64595bec9a77c73a5ccc5e68->enter($__internal_fb2dc464d8d07838ca8cf1c7933e970f8257889e64595bec9a77c73a5ccc5e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

 \$(document).ready(function() {

  \tvar date = new Date();
  \tvar d = date.getDate();
  \tvar m = date.getMonth();
  \tvar y = date.getFullYear();


  var calendar = \$('#calendar').fullCalendar({
\t
\t\teditable: true,
\t   \t
\t   \theader: {
\t\t\tleft: 'prev,next today',
\t    \tcenter: 'title',
\t    \tright: 'month,agendaWeek,agendaDay'
\t   \t},


\t   events: \"events.php\",
\t   
\t   eventRender: function(event, element, view) {

\t\t    if (event.allDay === 'true') {

\t\t     event.allDay = true;

\t\t    } else {

\t\t     event.allDay = false;

\t\t    }

\t   },

   selectable: true,

   selectHelper: true,

   select: function(start, end, allDay) {

\t   var title = prompt('Event Title:');


\t   if (title) {

\t\t  // var start = \$.fullCalendar.formatDate(start, \"Y-MM-DD HH:mm:ss\");

\t\t //  var end = \$.fullCalendar.formatDate(end, \"Y-MM-DD HH:mm:ss\");

\t\t   \$.ajax({

\t\t\t   url: 'add_events.php',

\t\t\t   data: 'title='+ title+'&start='+ start +'&end='+ end,

\t\t\t   type: \"POST\",

\t\t\t   success: function(json) {

\t\t\t   alert('Added Successfully');

\t\t\t   }

\t\t   });

\t\t   calendar.fullCalendar('renderEvent',{

\t\t\t\t   title: title,

\t\t\t\t   start: start,

\t\t\t\t   end: end,

\t\t\t\t   allDay: allDay
\t\t\t\t\t},true
\t\t\t);

\t   }

   \t\tcalendar.fullCalendar('unselect');

   },


   editable: true,

   eventDrop: function(event, delta) {

\t   var start = \$.fullCalendar.formatDate(event.start, \"Y-MM-DD HH:mm:ss\");

\t   var end = \$.fullCalendar.formatDate(event.end, \"Y-MM-DD HH:mm:ss\");

\t   \$.ajax({

\t\t   url: 'update_events.php',

\t\t   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t\t   type: \"POST\",

\t\t   success: function(json) {

\t\t    alert(\"Updated Successfully\");

\t\t   }

\t   });

   },

   eventClick: function(event) {

\t\tvar decision = confirm(\"Do you really want to do that?\"); 

\t\tif (decision) {

\t\t\t\$.ajax({

\t\t\t\ttype: \"POST\",

\t\t\t\turl: \"delete_event.php\",

\t\t\t\tdata: \"&id=\" + event.id,

\t\t\t\t success: function(json) {

\t\t\t\t\t \$('#calendar').fullCalendar('removeEvents', event.id);

\t\t\t\t\t  alert(\"Updated Successfully\");}

\t\t\t});

\t\t}

  \t},

   eventResize: function(event) {

\t   var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

\t   var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

\t   \$.ajax({

\t    url: 'update_events.php',

\t    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t    type: \"POST\",

\t    success: function(json) {

\t     alert(\"Updated Successfully\");

\t    }

\t   });

\t}

   

  });

\ttitle=\"ALL day\";
\tallDay=true;
\tvar start = new Date();
\tvar end= new Date(\"23/11/2017\");
  \tvar d = date.getDate();
  \tvar m = date.getMonth();
  \tvar y = date.getFullYear();

\tcalendar.fullCalendar('renderEvent',{

\t\t\t\t   title: title,

\t\t\t\t   start: start,

\t\t\t\t   end: end,

\t\t\t\t   allDay: allDay
\t\t\t\t\t},true
\t\t\t);

});

</script>


";
        
        $__internal_fb2dc464d8d07838ca8cf1c7933e970f8257889e64595bec9a77c73a5ccc5e68->leave($__internal_fb2dc464d8d07838ca8cf1c7933e970f8257889e64595bec9a77c73a5ccc5e68_prof);

        
        $__internal_13ae6ee81bbb448aec978604f8685a99eecb4ffe7f44cab84b066c19acca5b2e->leave($__internal_13ae6ee81bbb448aec978604f8685a99eecb4ffe7f44cab84b066c19acca5b2e_prof);

    }

    public function getTemplateName()
    {
        return ":programme:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  141 => 44,  115 => 25,  109 => 24,  101 => 21,  95 => 20,  89 => 18,  86 => 17,  82 => 16,  78 => 15,  75 => 14,  71 => 13,  65 => 10,  62 => 9,  58 => 8,  54 => 6,  51 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}


{% block body %}
{%dump(data)%}
\t<table>
\t\t
\t{% for jour in data.jour %}
\t\t<th>
\t\t\t{{jour.nom}}
\t\t</th>
\t\t
\t\t{% for horraire in data.horraire %}
\t\t<tr>\t
\t\t\t\t<td>{{horraire.heureDeb|date('H')~'H - '~horraire.heureFin|date('H')~'H'}}</td>
\t\t\t\t{% for programme in data.programme %}
\t\t\t\t\t{% if programme.jour.id==jour.id and programme.horraire.id==horraire.id %}
\t\t\t\t\t<td>{{programme.matiere.nom~' '~programme.enseignant.nom~' '~programme.salle.nom}}</td>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t
\t\t</tr>
\t\t{% endfor %}
\t{% endfor %}

\t
\t</table>

\t<div class=\"content-frame-body padding-bottom-0\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"alert_holder\"></div>
                <div class=\"calendar\">                                
        \t\t    <div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   


{% endblock %}


{% block javascripts %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/fullcalendar/fullcalendar.min.js')}}\"></script>

<script type=\"text/javascript\">

 \$(document).ready(function() {

  \tvar date = new Date();
  \tvar d = date.getDate();
  \tvar m = date.getMonth();
  \tvar y = date.getFullYear();


  var calendar = \$('#calendar').fullCalendar({
\t
\t\teditable: true,
\t   \t
\t   \theader: {
\t\t\tleft: 'prev,next today',
\t    \tcenter: 'title',
\t    \tright: 'month,agendaWeek,agendaDay'
\t   \t},


\t   events: \"events.php\",
\t   
\t   eventRender: function(event, element, view) {

\t\t    if (event.allDay === 'true') {

\t\t     event.allDay = true;

\t\t    } else {

\t\t     event.allDay = false;

\t\t    }

\t   },

   selectable: true,

   selectHelper: true,

   select: function(start, end, allDay) {

\t   var title = prompt('Event Title:');


\t   if (title) {

\t\t  // var start = \$.fullCalendar.formatDate(start, \"Y-MM-DD HH:mm:ss\");

\t\t //  var end = \$.fullCalendar.formatDate(end, \"Y-MM-DD HH:mm:ss\");

\t\t   \$.ajax({

\t\t\t   url: 'add_events.php',

\t\t\t   data: 'title='+ title+'&start='+ start +'&end='+ end,

\t\t\t   type: \"POST\",

\t\t\t   success: function(json) {

\t\t\t   alert('Added Successfully');

\t\t\t   }

\t\t   });

\t\t   calendar.fullCalendar('renderEvent',{

\t\t\t\t   title: title,

\t\t\t\t   start: start,

\t\t\t\t   end: end,

\t\t\t\t   allDay: allDay
\t\t\t\t\t},true
\t\t\t);

\t   }

   \t\tcalendar.fullCalendar('unselect');

   },


   editable: true,

   eventDrop: function(event, delta) {

\t   var start = \$.fullCalendar.formatDate(event.start, \"Y-MM-DD HH:mm:ss\");

\t   var end = \$.fullCalendar.formatDate(event.end, \"Y-MM-DD HH:mm:ss\");

\t   \$.ajax({

\t\t   url: 'update_events.php',

\t\t   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t\t   type: \"POST\",

\t\t   success: function(json) {

\t\t    alert(\"Updated Successfully\");

\t\t   }

\t   });

   },

   eventClick: function(event) {

\t\tvar decision = confirm(\"Do you really want to do that?\"); 

\t\tif (decision) {

\t\t\t\$.ajax({

\t\t\t\ttype: \"POST\",

\t\t\t\turl: \"delete_event.php\",

\t\t\t\tdata: \"&id=\" + event.id,

\t\t\t\t success: function(json) {

\t\t\t\t\t \$('#calendar').fullCalendar('removeEvents', event.id);

\t\t\t\t\t  alert(\"Updated Successfully\");}

\t\t\t});

\t\t}

  \t},

   eventResize: function(event) {

\t   var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

\t   var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

\t   \$.ajax({

\t    url: 'update_events.php',

\t    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t    type: \"POST\",

\t    success: function(json) {

\t     alert(\"Updated Successfully\");

\t    }

\t   });

\t}

   

  });

\ttitle=\"ALL day\";
\tallDay=true;
\tvar start = new Date();
\tvar end= new Date(\"23/11/2017\");
  \tvar d = date.getDate();
  \tvar m = date.getMonth();
  \tvar y = date.getFullYear();

\tcalendar.fullCalendar('renderEvent',{

\t\t\t\t   title: title,

\t\t\t\t   start: start,

\t\t\t\t   end: end,

\t\t\t\t   allDay: allDay
\t\t\t\t\t},true
\t\t\t);

});

</script>


{% endblock %}", ":programme:show.html.twig", "C:\\wamp64\\www\\SCHOOL-master\\school\\app/Resources\\views/programme/show.html.twig");
    }
}
