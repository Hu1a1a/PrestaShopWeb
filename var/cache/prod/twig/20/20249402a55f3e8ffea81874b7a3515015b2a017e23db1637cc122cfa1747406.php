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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/create.html.twig */
class __TwigTemplate_2caef5b5e88d4e3de20518a4c71a040dcce4a7869ec90c99649f1e0616fb3404 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'sql_manager_db_tables_panel' => [$this, 'block_sql_manager_db_tables_panel'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/create.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/create.html.twig", 30)->display($context);
        // line 31
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["requestSqlForm"] ?? null), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31))) {
            // line 32
            echo "    <div class=\"alert alert-danger\">
      ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["requestSqlForm"] ?? null), "vars", [], "any", false, false, false, 33), "errors", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 34
                echo "        <div class=\"alert-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 34), "html", null, true);
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </div>
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/create.html.twig", 39)->display($context);
        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('sql_manager_db_tables_panel', $context, $blocks);
        // line 44
        echo "
";
    }

    // line 41
    public function block_sql_manager_db_tables_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/create.html.twig", 42)->display($context);
        // line 43
        echo "  ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/sql_manager.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  114 => 50,  108 => 48,  104 => 47,  100 => 43,  97 => 42,  93 => 41,  88 => 44,  86 => 41,  83 => 40,  81 => 39,  78 => 38,  74 => 36,  65 => 34,  61 => 33,  58 => 32,  55 => 31,  52 => 30,  48 => 29,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/create.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\RequestSql\\create.html.twig");
    }
}
