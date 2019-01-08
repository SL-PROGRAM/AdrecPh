<?php

/* contact/index.html.twig */
class __TwigTemplate_e7c509fa6aff7130846af278b32230cd7170b1ad4d02f36a43dcabac318547db extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1> <span class=\"dot\">.</span> FORMULAIRE DE CONTACT <span class=\"dot\">.</span></h1>
    <div class=\"form-container\">
        <p> N'hésitez à m'nvoyer vos avis, vos questions ou autres demandes de devis de prestation.</p>
        <form class=\"form\">
            <div class=\"radio\">
                <label for=\"Particulier\">Particulier</label>
                <input type=\"radio\" name=\"Choice\" value=\"Particulier\">
                <label for=\"Professionel\">Professionel</label>
                <input type=\"radio\" name=\"Choice\" value=\"Professionel\">
            </div>
            <div class=\"input\">
                <input type=\"text\" placeholder=\"Prénom\" required>
                <input type=\"text\" placeholder=\"Nom\" required>
            </div>
            <div class=\"input\">
                <input type=\"text\" placeholder=\"Téléphone\" required>
                <input type=\"text\" placeholder=\"E mail\" required>
            </div>
            <div class=\"textarea\">
                <textarea rows=\"10\" cols=\"50\" placeholder=\"Entrer votre texte\"></textarea>
            </div>
            <button class=\"button\">Envoyer</button>
        </form>
    </div>



    <div class=\"livredor\">
        <p>Livre d'or</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ controller_name }}!{% endblock %}

{% block body %}
    <h1> <span class=\"dot\">.</span> FORMULAIRE DE CONTACT <span class=\"dot\">.</span></h1>
    <div class=\"form-container\">
        <p> N'hésitez à m'nvoyer vos avis, vos questions ou autres demandes de devis de prestation.</p>
        <form class=\"form\">
            <div class=\"radio\">
                <label for=\"Particulier\">Particulier</label>
                <input type=\"radio\" name=\"Choice\" value=\"Particulier\">
                <label for=\"Professionel\">Professionel</label>
                <input type=\"radio\" name=\"Choice\" value=\"Professionel\">
            </div>
            <div class=\"input\">
                <input type=\"text\" placeholder=\"Prénom\" required>
                <input type=\"text\" placeholder=\"Nom\" required>
            </div>
            <div class=\"input\">
                <input type=\"text\" placeholder=\"Téléphone\" required>
                <input type=\"text\" placeholder=\"E mail\" required>
            </div>
            <div class=\"textarea\">
                <textarea rows=\"10\" cols=\"50\" placeholder=\"Entrer votre texte\"></textarea>
            </div>
            <button class=\"button\">Envoyer</button>
        </form>
    </div>



    <div class=\"livredor\">
        <p>Livre d'or</p>
    </div>
{% endblock %}
", "contact/index.html.twig", "/home/sl/Symfony/AdrecPh/projet-Photographe/templates/contact/index.html.twig");
    }
}
