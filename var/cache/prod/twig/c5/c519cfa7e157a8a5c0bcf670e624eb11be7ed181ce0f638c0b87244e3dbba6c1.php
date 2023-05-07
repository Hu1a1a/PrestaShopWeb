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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig */
class __TwigTemplate_c9abd439ee9b8a04c0591d34105242abc86fd4d1065213fbea1fa3e27f1a83ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sql_request_form' => [$this, 'block_sql_request_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["requestSqlForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('sql_request_form', $context, $blocks);
    }

    public function block_sql_request_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["requestSqlForm"] ?? null), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sql_requests_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button id=\"sql-query-save-btn\" class=\"btn btn-primary float-right\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 49,  84 => 45,  78 => 42,  74 => 41,  67 => 37,  60 => 33,  53 => 30,  46 => 29,  43 => 28,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\RequestSql\\Blocks\\form.html.twig");
    }
}
