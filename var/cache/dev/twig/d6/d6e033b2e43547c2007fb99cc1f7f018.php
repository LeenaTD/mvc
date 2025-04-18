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

/* landingpage.html.twig */
class __TwigTemplate_5997e1efc9678044013217f33ed71ace extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingpage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingpage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landingpage.html.twig", 1);
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

        yield "Langding page";
        
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
        yield "    <h1>Langding page - API docs</h1>

    ";
        // line 18
        yield "

    ";
        // line 21
        yield "    <ul>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["apiRoutes"]) || array_key_exists("apiRoutes", $context) ? $context["apiRoutes"] : (function () { throw new RuntimeError('Variable "apiRoutes" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["apiRoute"]) {
            // line 23
            yield "            <li>
                ";
            // line 25
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landingPage", ["apiRoute" => $context["key"]]), "html", null, true);
            yield "\">
                    ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apiRoute"], "path", [], "any", false, false, false, 26), "html", null, true);
            yield "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['apiRoute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    </ul>


    ";
        // line 33
        if ((isset($context["selectedRoute"]) || array_key_exists("selectedRoute", $context) ? $context["selectedRoute"] : (function () { throw new RuntimeError('Variable "selectedRoute" does not exist.', 33, $this->source); })())) {
            // line 34
            yield "        <h2>Description for ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedRoute"]) || array_key_exists("selectedRoute", $context) ? $context["selectedRoute"] : (function () { throw new RuntimeError('Variable "selectedRoute" does not exist.', 34, $this->source); })()), "path", [], "any", false, false, false, 34), "html", null, true);
            yield "</h2>
        <p>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedRoute"]) || array_key_exists("selectedRoute", $context) ? $context["selectedRoute"] : (function () { throw new RuntimeError('Variable "selectedRoute" does not exist.', 35, $this->source); })()), "method", [], "any", false, false, false, 35), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedRoute"]) || array_key_exists("selectedRoute", $context) ? $context["selectedRoute"] : (function () { throw new RuntimeError('Variable "selectedRoute" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
    ";
        }
        // line 37
        yield "


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
        return "landingpage.html.twig";
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
        return array (  152 => 37,  145 => 35,  140 => 34,  138 => 33,  133 => 30,  123 => 26,  118 => 25,  115 => 23,  111 => 22,  108 => 21,  104 => 18,  100 => 7,  87 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Langding page{% endblock %}


{% block body %}
    <h1>Langding page - API docs</h1>

    {# Show description side by side routes and its method
    <ul>
        {% for apiRoute in apiRoutes %}
            <li>
                <strong>{{ apiRoute.path }}</strong> - <strong>{{ apiRoute.method }}</strong> {{ apiRoute.description }}
            </li>
        {% endfor %}
    </ul>
    #}


    {# Click on a link to read its description #}
    <ul>
        {% for key, apiRoute in apiRoutes %}
            <li>
                {# generate eg. /api and ?apiRoute=quote #}
                <a href=\"{{ path('landingPage', { apiRoute: key }) }}\">
                    {{ apiRoute.path }}
                </a>
            </li>
        {% endfor %}
    </ul>


    {% if selectedRoute %}
        <h2>Description for {{ selectedRoute.path }}</h2>
        <p>{{ selectedRoute.method }} - {{ selectedRoute.description }}</p>
    {% endif %}



{% endblock %}", "landingpage.html.twig", "/home/cubby/dbwebb-kurser/mvc/me/report/templates/landingpage.html.twig");
    }
}
