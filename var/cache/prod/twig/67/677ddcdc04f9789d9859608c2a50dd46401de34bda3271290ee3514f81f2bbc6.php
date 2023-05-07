<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig */
class __TwigTemplate_fb9f8994b13f55d3952153fd888355399c4d21609a2f5d2f4e05a7c03347bf3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"row\">
  <div class=\"col-md-4\">
    <div class=\"card\">
      <h3 class=\"card-header\">
          ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of MySQL Tables", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-group\">
          <select class=\"form-control js-db-tables-select\"
                  title=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of MySQL Tables", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\"
                  size=\"10\"
          >
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dbTableNames"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tableName"]) {
            // line 41
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["tableName"], "html", null, true);
            echo "\"
                      data-table-columns-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sql_requests_table_columns", ["mySqlTableName" => $context["tableName"]]), "html", null, true);
            echo "\"
              >
                ";
            // line 44
            echo twig_escape_filter($this->env, $context["tableName"], "html", null, true);
            echo "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tableName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>

        <button type=\"button\"
                class=\"btn btn-sm btn-outline-secondary js-add-db-table-to-query-btn\"
                data-choose-table-message=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please choose a table.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\"
        >
          <i class=\"material-icons\">add_circle</i> ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add table name to SQL query", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
  <div class=\"col-md-8\">
    <div class=\"card\">
      <h3 class=\"card-header\">
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of attributes for this MySQL table", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <table class=\"table js-table-columns d-none\" data-action-btn=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add attribute to SQL query", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\">
          <thead>
            <tr>
              <th>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attribute", [], "Admin.Global"), "html", null, true);
        echo "</th>
              <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Global"), "html", null, true);
        echo "</th>
              <th class=\"text-center\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <div class=\"alert alert-warning js-table-alert\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please choose a MySQL table", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 77,  127 => 70,  123 => 69,  119 => 68,  113 => 65,  107 => 62,  96 => 54,  91 => 52,  84 => 47,  75 => 44,  70 => 42,  65 => 41,  61 => 40,  55 => 37,  47 => 32,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\RequestSql\\Blocks\\db_tables_panel.html.twig");
    }
}
