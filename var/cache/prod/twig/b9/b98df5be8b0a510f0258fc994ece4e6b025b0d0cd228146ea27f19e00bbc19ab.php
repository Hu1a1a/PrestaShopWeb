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

/* __string_template__9380dd1d3f5a9285a092f76501b84ed71434334c1a8daef2550ff789ff5b7a8f */
class __TwigTemplate_d64de7bf504a6ef0dac2f6ea8e601779d963b0ca78511ade452a6324a77c6922 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Administrador de módulos • PrestaShop_LocalHost</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '485a42eee68dbfe2379581940806bd76';
    var token_admin_orders = tokenAdminOrders = 'c9579a8ba528b49d386b577b95c83fa1';
    var token_admin_customers = '925890d103d71de4e53855370cbc3f4c';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '98dcf890dd14cf3b4dd64bab8f3985f8';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '5ab07d37d8698d88a2e3f4a6d588cffc';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/manage?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI';
    var admin_notification_get_link = '/prestashop/admin059ewzqvnveyf";
        // line 42
        echo "a3ohww/index.php/common/notifications?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin059ewzqvnveyfa3ohww/index.php/common/notifications/ack?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin059ewzqvnveyfa3ohww/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin059ewzqvnveyfa3ohww/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin059ewzqvnveyfa3ohww/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin059ewzqvnveyfa3ohww\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin059ewzqvnveyfa3ohww\\/index.php\\/configu";
        // line 71
        echo "re\\/advanced\\/employees\\/change-form-language?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin059ewzqvnveyfa3ohww/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin059ewzqvnveyfa3ohww/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascri";
        // line 89
        echo "pt\" src=\"/prestashop/admin059ewzqvnveyfa3ohww/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.4.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.4.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/addons-connector.js?v=4.4.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/localhost\\/prestashop\\/admin059ewzqvnveyfa3ohww\\/index.php?controller=AdminGamification&token=a2da47a944f364d575df2295921609ee\";
            var current_id_tab = 40;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin059ewzqvnveyfa3ohww/index.php/common/notifications?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 118
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminmodulesmanage\"
  data-base-url=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php\"  data-token=\"SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminDashboard&amp;token=d0aa104de46ef7790000ca6357ecf1d6\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3910c8bf670c9bd5c89a2d88e609ae58\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link active\"
         href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/manage?token=d9d64d29354b9cf2ab5e8394f01a2c89\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/categories/new?token=d9d64d29354b9cf2ab5e8394f01a2c89\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/products/new?token=d9d6";
        // line 152
        echo "4d29354b9cf2ab5e8394f01a2c89\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e8974e9a1b700525bd4eea9c20221c34\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/orders?token=d9d64d29354b9cf2ab5e8394f01a2c89\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"144\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminQuickAccesses&token=7717e973c5643d1d03ec759a8fda80a8\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"M&oacute;dulos - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Eliminar del Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminQuickAccesses&token=7717e973c5643d1d03ec759a8fda80a8\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php?cont";
        // line 192
        echo "roller=AdminSearch&amp;token=9f4cb2167438be7273fd67abe18313f2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"d";
        // line 209
        echo "ropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3910c8bf670c9bd5c89a2d88e609ae58\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/manage?token=d9d64d29354b9cf2ab5e8394f01a2c89\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/categories/new?token=d9d64d29354b9cf2ab5e8394f01a2c89\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/products/new?token=d9d64d29354b9cf2ab5e8394f01a2c89\"
             data-item=\"Nuevo\"
    >Nuevo";
        // line 244
        echo "</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e8974e9a1b700525bd4eea9c20221c34\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/orders?token=d9d64d29354b9cf2ab5e8394f01a2c89\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"39\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminQuickAccesses&token=7717e973c5643d1d03ec759a8fda80a8\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"M&oacute;dulos - Lista\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Eliminar del Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminQuickAccesses&token=7717e973c5643d1d03ec759a8fda80a8\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-com";
        // line 290
        echo "ponent\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"https://localhost/prestashop/ad";
        // line 342
        echo "min059ewzqvnveyfa3ohww/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a0673b4a243583a7befe7b3fa6ecb991\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div clas";
        // line 389
        echo "s=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/prestashop/img/pr/default.jpg\" alt=\"Yang\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Yang</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/employees/1/edit?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestione tu cuenta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/cursos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formación
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/expertos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encuentra un experto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://addons.prestashop.com/es/?utm";
        // line 418
        echo "_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro de ayuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminLogin&amp;logout=1&amp;token=ba839cf34798e43b2279bbfd23167d95\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/employees/toggle-navigation?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminDashboard&amp;token=d0aa104de46ef7790000ca6357ecf1d6\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?cont";
        // line 455
        echo "roller=AdminDashboard&amp;token=d0aa104de46ef7790000ca6357ecf1d6\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/orders/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/orders/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                        ";
        // line 493
        echo "      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/orders/invoices/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/orders/credit-slips/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/orders/delivery-slips/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCarts&amp;token=a0673b4a243583a7befe7b3fa6ecb991\" class=\"link\"> Carritos de comp";
        // line 520
        echo "ra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/products?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/products?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop";
        // line 553
        echo "/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/categories?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/monitoring/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminAttributesGroups&amp;token=58b06f01ebb0eb163c46cf43caff6d7d\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/catalog/brands/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                    ";
        // line 582
        echo "          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/attachments/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCartRules&amp;token=e8974e9a1b700525bd4eea9c20221c34\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/stocks/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/customers/?_token=SgftG7";
        // line 612
        echo "FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/customers/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/addresses/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  ";
        // line 644
        echo "<li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCustomerThreads&amp;token=98dcf890dd14cf3b4dd64bab8f3985f8\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCustomerThreads&amp;token=98dcf890dd14cf3b4dd64bab8f3985f8\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/sell/customer-service/order-messages/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                  ";
        // line 671
        echo "                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminReturn&amp;token=eea55785467a23cf982951f4b2963559\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/metrics/legacy/stats?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/metrics/legacy/sta";
        // line 700
        echo "ts?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/metrics?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/mbo/modules/catalog/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                 ";
        // line 736
        echo "           </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/mbo/modules/catalog/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/manage?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/design/themes/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-";
        // line 763
        echo "icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/design/themes/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/mbo/themes/catalog/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/design/mail_theme/?_token=Sgf";
        // line 792
        echo "tG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/design/cms-pages/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/design/modules/positions/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminImages&amp;token=4d1578c7ad3186d616ad4fb673d11906\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <";
        // line 823
        echo "li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/link-widget/list?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCarriers&amp;token=646e95db225e2458474c9795caeed9ad\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminCarriers&amp;token=646e95db225e2458474c9795caeed9ad\" class=\"link\"> Transportistas
                                </a>
                              </li>

       ";
        // line 853
        echo "                                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/shipping/preferences/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminMbeConfiguration&amp;token=77cdedb435bfe602a6092267058aa02a\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminMbeShipping&amp;token=ae4e79fe4fa415f4da3f2d7f8849ca1e\" class=\"link\"> Listado de envíos MBE
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_subme";
        // line 883
        echo "nu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/payment/payment_methods?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/payment/payment_methods?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/payment/preferences?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
           ";
        // line 912
        echo "                                   
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/international/localization/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/international/localization/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/international/zones/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Ubicaciones Geográfic";
        // line 939
        echo "as
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/international/taxes/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/international/translations/settings?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fe423fc107fb7814df9449f0c1d33f69\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arr";
        // line 971
        echo "ow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"132\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fe423fc107fb7814df9449f0c1d33f69\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminPsfacebookModule&amp;token=0a1966dd7d6c2c86b0e895c42189cc33\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-lev";
        // line 1008
        echo "elone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/shop/preferences/preferences?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/shop/preferences/preferences?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/shop/order-preferences/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                               ";
        // line 1035
        echo "                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/shop/product-preferences/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Configuración de productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/shop/customer-preferences/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/shop/contacts/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.ph";
        // line 1063
        echo "p/configure/shop/seo-urls/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminSearchConf&amp;token=df5f08b6c1c6d7d8f07dda539a67139b\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/system-information/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
              ";
        // line 1094
        echo "                                              
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/system-information/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/performance/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/administration/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/emails/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> ";
        // line 1120
        echo "E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/import/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/employees/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/sql-requests/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
";
        // line 1152
        echo "                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/logs/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Registro de logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/webservice-keys/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/feature-flags/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/configure/advanced/security/?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" class=\"link\"> Seguridad
         ";
        // line 1177
        echo "                       </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Administrador de módulos</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/manage?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" aria-current=\"page\">Módulos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Administrador de módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn addons_connect btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Conectarse a Addons Marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Conectarse a Addons Marketplace
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Subir un módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Subir un módulo
      ";
        // line 1227
        echo "          </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminModules%253Fversion%253D8.0.4%2526country%253Des/Ayuda?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/manage?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
              ";
        // line 1254
        echo "        </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/alerts?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/improve/modules/updates?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Actualizaciones
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ";
        // line 1273
        echo "                                                                                                                                                                                                                                                                        </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Conectarse a Addons Marketplace\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Conectarse a Addons Marketplace
              <i class=\"material-icons\">vpn_key</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Subir un módulo\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Subir un módulo
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminModules%253Fversion%253D8.0.4%2526country%253Des/Ayuda?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\"
            >
              Ayuda
            </a>
          ";
        // line 1304
        echo "              </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1321
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"https://localhost/prestashop/admin059ewzqvnveyfa3ohww/index.php?controller=AdminDashboard&amp;token=d0aa104de46ef7790000ca6357ecf1d6\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Conectarse a Addons Marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Vincula tu tienda a tu cuenta de Addons para recibir automáticamente actualizaciones importantes de los módulos que hayas adquirido. ¿Aún no tiene una cuenta?
                      <a href=\"https://accounts.distribution.prestashop.net/es/sign-up?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Regístrate ahora</a>
                  </p>
                  <p>
                      Si has creado tu cuenta utilizando Google, sigue el procedimiento de contraseña olvidada de Addons Marketplace para cr";
        // line 1363
        echo "ear tu contraseña : 
                      <a href=\"https://auth.prestashop.com/es/contrasena/solicitud\" target=\"_blank\">Restablecer contraseña</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/mbo/addons/login?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Dirección de correo electrónico</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Contraseña</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Recordar datos
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">¡Vamos!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://auth.prestashop.com/es/contrasena/solicitud\" target=\"_blank\">¿Olvidó su contraseña?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</di";
        // line 1399
        echo "v>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmar el cierre de sesión</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Estás a punto de salir de tu cuenta en Addons. Podrías perderte actualizaciones importantes de los Complementos que has comprado.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancelar\">
          <a class=\"btn btn-primary uppercase\" href=\"/prestashop/admin059ewzqvnveyfa3ohww/index.php/modules/mbo/addons/logout?_token=SgftG7FE2PZpyck42p4c7NAUrZcmEUpk8lLLwLIzagI\" id=\"module-modal-addons-logout-ack\">Sí, quiero salir</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1433
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 118
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1321
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1433
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__9380dd1d3f5a9285a092f76501b84ed71434334c1a8daef2550ff789ff5b7a8f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1616 => 1433,  1595 => 1321,  1584 => 118,  1575 => 1433,  1539 => 1399,  1501 => 1363,  1453 => 1321,  1434 => 1304,  1401 => 1273,  1380 => 1254,  1351 => 1227,  1299 => 1177,  1272 => 1152,  1238 => 1120,  1210 => 1094,  1177 => 1063,  1147 => 1035,  1118 => 1008,  1079 => 971,  1045 => 939,  1016 => 912,  985 => 883,  953 => 853,  921 => 823,  888 => 792,  857 => 763,  828 => 736,  790 => 700,  759 => 671,  730 => 644,  696 => 612,  664 => 582,  633 => 553,  598 => 520,  569 => 493,  529 => 455,  490 => 418,  459 => 389,  410 => 342,  356 => 290,  308 => 244,  271 => 209,  252 => 192,  210 => 152,  171 => 118,  140 => 89,  120 => 71,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9380dd1d3f5a9285a092f76501b84ed71434334c1a8daef2550ff789ff5b7a8f", "");
    }
}
