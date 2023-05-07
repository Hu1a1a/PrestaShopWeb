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

/* @PrestaShop/Admin/Improve/Design/Theme/import.html.twig */
class __TwigTemplate_0e1c58680ebb4106796043113fa922bd310d9c434450b3c491ef139c2b8f78df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'import_theme_form_rest' => [$this, 'block_import_theme_form_rest'],
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
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["importThemeForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 29
        $context["layoutTitle"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme & Logo", [], "Admin.Navigation.Menu") . " > ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme", [], "Admin.Design.Feature"));
        // line 30
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_import"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add"], "export" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_export_current"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
  ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importThemeForm"] ?? null), 'form_start');
        echo "
  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importThemeForm"] ?? null), 'errors');
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from your computer", [], "Admin.Design.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importThemeForm"] ?? null), "import_from_computer", [], "any", false, false, false, 56), 'row');
        echo "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\">
              <i class=\"material-icons\">cloud_upload</i>
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from the web", [], "Admin.Design.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importThemeForm"] ?? null), "import_from_web", [], "any", false, false, false, 78), 'row');
        echo "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\">
              <i class=\"material-icons\">cloud_upload</i>
              ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from FTP", [], "Admin.Design.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importThemeForm"] ?? null), "import_from_ftp", [], "any", false, false, false, 100), 'row');
        echo "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\">
              <i class=\"material-icons\">cloud_upload</i>
              ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 115
        $this->displayBlock('import_theme_form_rest', $context, $blocks);
        // line 118
        echo "
  ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importThemeForm"] ?? null), 'form_end');
        echo "

";
    }

    // line 115
    public function block_import_theme_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importThemeForm"] ?? null), 'rest');
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 116,  176 => 115,  169 => 119,  166 => 118,  164 => 115,  153 => 107,  143 => 100,  136 => 96,  122 => 85,  112 => 78,  105 => 74,  91 => 63,  81 => 56,  74 => 52,  65 => 46,  61 => 45,  58 => 44,  54 => 43,  49 => 26,  47 => 30,  45 => 29,  43 => 27,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\import.html.twig");
    }
}
