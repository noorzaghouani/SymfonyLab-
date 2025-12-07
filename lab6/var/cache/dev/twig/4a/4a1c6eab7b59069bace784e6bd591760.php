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

/* voiture/listevoiture.html.twig */
class __TwigTemplate_c3fb9c4a57fc194e374e455f39b1868e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/listevoiture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/listevoiture.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Listes des voitures</title>
</head>
<body>
    

<h1>Listes des voitures</h1>
<table border=\"1\">

<tr>
   <td>Serie</td>
   <td>Date Mise en Marche</td>
   <td>Modele</td>
</tr>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listeVoiture"]) || array_key_exists("listeVoiture", $context) ? $context["listeVoiture"] : (function () { throw new RuntimeError('Variable "listeVoiture" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 20
            yield "<tr>
   <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "serie", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
   <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "dateMiseEnMarche", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            yield "</td>
   <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "modele", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
   <td><a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voitureDelete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">suppression </a></td>
   <td><a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voitureUpdate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">Mettre à jour </a></td>
</tr> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "</table>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "voiture/listevoiture.html.twig";
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
        return array (  100 => 28,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  72 => 20,  68 => 19,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Listes des voitures</title>
</head>
<body>
    

<h1>Listes des voitures</h1>
<table border=\"1\">

<tr>
   <td>Serie</td>
   <td>Date Mise en Marche</td>
   <td>Modele</td>
</tr>
    {% for v in listeVoiture %}
<tr>
   <td>{{ v.serie }}</td>
   <td>{{ v.dateMiseEnMarche | date('d/m/Y') }}</td>
   <td>{{ v.modele }}</td>
   <td><a href=\"{{ path(\"voitureDelete\", { 'id': v.id } ) }}\">suppression </a></td>
   <td><a href=\"{{ path(\"voitureUpdate\", { 'id': v.id } ) }}\">Mettre à jour </a></td>
</tr> 
    {% endfor %}
</table>
</body>
</html>", "voiture/listevoiture.html.twig", "C:\\xampp\\htdocs\\tp_symfony\\lab6\\templates\\voiture\\listevoiture.html.twig");
    }
}
