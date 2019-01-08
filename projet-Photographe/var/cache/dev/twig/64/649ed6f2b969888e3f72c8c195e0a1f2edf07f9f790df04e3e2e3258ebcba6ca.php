<?php

/* galerie/index.html.twig */
class __TwigTemplate_434833d7f5c421d82786bfd31c6f3acf51e84a9657189ea2e337c7ecb7f57191 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "galerie/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galerie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galerie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <meta charset=\"UTF-8\">
    <title>Mon joli menu en HTML/CSS !</title>
    <link rel=\"stylesheet\" href=\"style.css\" />  <!-- Fichier CSS -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
<div id=\"galerie-menu\">
    <nav><a href=\"#\" tabindex=\"0\" title=\"Allez, vas y!\"    ><img src=\"http://lorempixel.com/400/300/sports/1/\"  alt=\"sport 1\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"J'y vais\"         ><img src=\"http://lorempixel.com/400/300/sports/2/\"  alt=\"sport 2\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Tenir la distance\"><img src=\"http://lorempixel.com/400/300/sports/3/\"  alt=\"sport 3\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Surf\"             ><img src=\"http://lorempixel.com/400/300/sports/4/\"  alt=\"sport 4\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Sur du velours   \"><img src=\"http://lorempixel.com/400/300/sports/5/\"  alt=\"sport 5\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Couché de soleil\" ><img src=\"http://lorempixel.com/400/300/sports/6/\"  alt=\"sport 6\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Plongez!\"         ><img src=\"http://lorempixel.com/400/300/sports/7/\"  alt=\"sport 7\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Je vole !\"        ><img src=\"http://lorempixel.com/400/300/sports/8/\"  alt=\"sport 8\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"1er jusqu'au bout\"><img src=\"http://lorempixel.com/400/300/sports/9/\"  alt=\"sport 9\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Prêt, contact !\"  ><img src=\"http://lorempixel.com/400/300/sports/10/\" alt=\"sport 10\" />
        </a></nav>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "galerie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 15,  91 => 14,  75 => 6,  66 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ controller_name }}!{% endblock %}

{% block head %}
    <meta charset=\"UTF-8\">
    <title>Mon joli menu en HTML/CSS !</title>
    <link rel=\"stylesheet\" href=\"style.css\" />  <!-- Fichier CSS -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
{% endblock %}

{% block body %}

<div id=\"galerie-menu\">
    <nav><a href=\"#\" tabindex=\"0\" title=\"Allez, vas y!\"    ><img src=\"http://lorempixel.com/400/300/sports/1/\"  alt=\"sport 1\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"J'y vais\"         ><img src=\"http://lorempixel.com/400/300/sports/2/\"  alt=\"sport 2\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Tenir la distance\"><img src=\"http://lorempixel.com/400/300/sports/3/\"  alt=\"sport 3\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Surf\"             ><img src=\"http://lorempixel.com/400/300/sports/4/\"  alt=\"sport 4\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Sur du velours   \"><img src=\"http://lorempixel.com/400/300/sports/5/\"  alt=\"sport 5\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Couché de soleil\" ><img src=\"http://lorempixel.com/400/300/sports/6/\"  alt=\"sport 6\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Plongez!\"         ><img src=\"http://lorempixel.com/400/300/sports/7/\"  alt=\"sport 7\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Je vole !\"        ><img src=\"http://lorempixel.com/400/300/sports/8/\"  alt=\"sport 8\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"1er jusqu'au bout\"><img src=\"http://lorempixel.com/400/300/sports/9/\"  alt=\"sport 9\"  />
        </a><a href=\"#\" tabindex=\"0\" title=\"Prêt, contact !\"  ><img src=\"http://lorempixel.com/400/300/sports/10/\" alt=\"sport 10\" />
        </a></nav>
</div>

{% endblock %}
", "galerie/index.html.twig", "/home/sl/Symfony/AdrecPh/projet-Photographe/templates/galerie/index.html.twig");
    }
}
