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

/* etudiant/list.html.twig */
class __TwigTemplate_32fe831183d778068c9823bb3f2b2401 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/list.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
   <meta charset=\"UTF-8\">
   <meta name=\"viewport\" content=\"width device-width, initial-scale 1.0\">
   <title>list of student</title>
</head>
<style>
   table, th, td {
       border: 1px solid black;
       border-collapse: collapse; 
       padding: 8px; 
    }
</style>

<body>
<h1>Liste des Étudiants</h1>

";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "<p style=\"color: red;\">Le tableau est vide</p>
";
        } else {
            // line 22
            yield "<ul>
  ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
                // line 24
                yield "    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["etudiant"]), "html", null, true);
                yield "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['etudiant'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "</ul>
";
        }
        // line 28
        yield "
<table>
   <thead>
      <tr>
          <h2>Liste des modules </h2>
              <th>ID</th>
              <th>Nom</th>
              <th>Enseignant</th>
              <th>Heures</th>
              <th>Date</th>
              <th>Affectation</th>
      </tr>
   </thead>
   <tbody>
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listeModules"]) || array_key_exists("listeModules", $context) ? $context["listeModules"] : (function () { throw new RuntimeError('Variable "listeModules" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 43
            yield "      <tr>
         <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
         <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
         <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "enseignant", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
         <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "nbrHeures", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
         <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "date", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
         <td><a href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affectation");
            yield "\">Affectation</a></td>
      </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    </tbody>
</table>
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
        return "etudiant/list.html.twig";
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
        return array (  146 => 52,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  114 => 43,  110 => 42,  94 => 28,  90 => 26,  81 => 24,  77 => 23,  74 => 22,  70 => 20,  68 => 19,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
   <meta charset=\"UTF-8\">
   <meta name=\"viewport\" content=\"width device-width, initial-scale 1.0\">
   <title>list of student</title>
</head>
<style>
   table, th, td {
       border: 1px solid black;
       border-collapse: collapse; 
       padding: 8px; 
    }
</style>

<body>
<h1>Liste des Étudiants</h1>

{% if etudiants is empty %}
<p style=\"color: red;\">Le tableau est vide</p>
{% else %}
<ul>
  {% for etudiant in etudiants %}
    <li>{{ etudiant|upper }}</li>
{% endfor %}
</ul>
{% endif %}

<table>
   <thead>
      <tr>
          <h2>Liste des modules </h2>
              <th>ID</th>
              <th>Nom</th>
              <th>Enseignant</th>
              <th>Heures</th>
              <th>Date</th>
              <th>Affectation</th>
      </tr>
   </thead>
   <tbody>
{% for module in listeModules %}
      <tr>
         <td>{{ module.id }}</td>
         <td>{{ module.nom }}</td>
         <td>{{ module.enseignant }}</td>
         <td>{{ module.nbrHeures }}</td>
         <td>{{ module.date }}</td>
         <td><a href=\"{{ path('affectation') }}\">Affectation</a></td>
      </tr>
{% endfor %}
    </tbody>
</table>
</body>
</html>", "etudiant/list.html.twig", "C:\\xampp\\htdocs\\tp_symfony\\lab3\\templates\\etudiant\\list.html.twig");
    }
}
