<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* about.html.twig */
class __TwigTemplate_e4768398b65ee42e849b53a1759d2ac6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "About";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <h1>Om kursen mvc</h1>

    <div class=\"two-col-layout\">
        <div class=\"left-col\">
            <p>Kursen fokuserar på objektorienterade programmeringstekniker i språket PHP. Det handlar om att bygga webbapplikationer med klasser och objekt samt att dela dem i olika komponenter. På det viset blir det lättare att felsöka och testa vilket gör det mer effektiv när man jobbar i team.</p>
            <p>Syftet av kursen är att utveckla och driftsätta webbapplikationer där objektorienterade programmering i ramverk tillsammans med databaser, samt att kunna hantera olika verktyg och miljöer som används vid webbutveckling.</p>
            <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about.jpg"), "html", null, true);
        yield "\">
                <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about.png"), "html", null, true);
        yield "\" alt=\"\" class=\"about-img\">
            </a>
            <p>MVC arkitektur är ett av de mest grundläggande arkitekturmönstren uppdelat i tre huvudkomponenter Model, View och Controller. En vy presenterar data för användaren medan controllern hanterar användarinteraktioner genom att prata med modellen och vyn för att uppdatera dess tillstånd. Modellen lagrar data och dess logik i applikationen. MVC gör det lättare att förstå strukturen av programmet. Koden är återanvändbar. Det gör även lättare att testa och underhålla. </p>
        </div>

        <div class=\"right-col\">
            <h2>Github</h2>
            <p>Kursens Git-repo:</p>
            <a href=\"https://github.com/dbwebb-se/mvc\">Git-repo</a>
            <p>Min egna Git-repo:</p>
            <a href=\"https://github.com/LeenaTD\">Egna Git-repo</a>
        </div>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "about.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  112 => 14,  108 => 13,  100 => 7,  87 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}About{% endblock %}


{% block body %}
    <h1>Om kursen mvc</h1>

    <div class=\"two-col-layout\">
        <div class=\"left-col\">
            <p>Kursen fokuserar på objektorienterade programmeringstekniker i språket PHP. Det handlar om att bygga webbapplikationer med klasser och objekt samt att dela dem i olika komponenter. På det viset blir det lättare att felsöka och testa vilket gör det mer effektiv när man jobbar i team.</p>
            <p>Syftet av kursen är att utveckla och driftsätta webbapplikationer där objektorienterade programmering i ramverk tillsammans med databaser, samt att kunna hantera olika verktyg och miljöer som används vid webbutveckling.</p>
            <a href=\"{{ asset('img/about.jpg') }}\">
                <img src=\"{{ asset('img/about.png') }}\" alt=\"\" class=\"about-img\">
            </a>
            <p>MVC arkitektur är ett av de mest grundläggande arkitekturmönstren uppdelat i tre huvudkomponenter Model, View och Controller. En vy presenterar data för användaren medan controllern hanterar användarinteraktioner genom att prata med modellen och vyn för att uppdatera dess tillstånd. Modellen lagrar data och dess logik i applikationen. MVC gör det lättare att förstå strukturen av programmet. Koden är återanvändbar. Det gör även lättare att testa och underhålla. </p>
        </div>

        <div class=\"right-col\">
            <h2>Github</h2>
            <p>Kursens Git-repo:</p>
            <a href=\"https://github.com/dbwebb-se/mvc\">Git-repo</a>
            <p>Min egna Git-repo:</p>
            <a href=\"https://github.com/LeenaTD\">Egna Git-repo</a>
        </div>
    </div>

    {# <a href=\"{{ asset('img/glider.svg') }}\">
        <img src=\"{{ asset('img/glider.svg') }}\" alt=\"\">
    </a> #}
{% endblock %}", "about.html.twig", "/home/cubby/dbwebb-kurser/mvc/me/report/templates/about.html.twig");
    }
}
