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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig */
class __TwigTemplate_ebce651d238c24d312d45d80266a775945919f65988337f9825b963433d87036 extends Template
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
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["cmsPageForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageForm"] ?? null), 'form_start', ["attr" => ["data-id" => ((array_key_exists("cmsPageId", $context)) ? (_twig_default_filter(($context["cmsPageId"] ?? null), 0)) : (0))]]);
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
  </div>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cmsPageForm"] ?? null), 'widget');
        echo "
    </div>
  </div>

  <div class=\"card-footer d-flex\">
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cms_pages_index", ["id_cms_category" => ($context["cmsCategoryParentId"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
      ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>

    <div class=\"d-none d-lg-flex ml-auto \">
      <button type=\"submit\" class=\"btn btn-primary\" name=\"save-and-preview\" id=\"save-and-preview-button\">
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and preview", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
      <button type=\"submit\" class=\"btn btn-primary ml-3\" id=\"save-button\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"d-lg-none ml-auto\">
      <div class=\"btn-group dropup\">
        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-button-mobile\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"sr-only\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
          <button type=\"submit\" class=\"dropdown-item\" name=\"save-and-preview\" id=\"save-and-preview-button-mobile\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and preview", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>

</div>
";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 65,  102 => 58,  96 => 55,  91 => 53,  83 => 48,  78 => 46,  70 => 41,  66 => 40,  58 => 35,  51 => 31,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\Blocks\\form.html.twig");
    }
}
