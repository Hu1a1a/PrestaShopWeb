<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $getService;

    public function __construct()
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient' => 'getFacebookCategoryClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient' => 'getFacebookClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => 'getAccountSuspendedSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber' => 'getApiErrorSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener' => 'getResponseListenerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => 'getToolsAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => 'getEventDispatcherService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => 'getFacebookEssentialsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => 'getPsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => 'getApiConversionHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => 'getCategoryMatchHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => 'getConfigurationHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => 'getEventBusProductHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => 'getMessengerHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => 'getPixelHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => 'getPrevalidationScanRefreshHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => 'getFbeFeatureManagerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => 'getModuleUpgradePresenterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => 'getAccessTokenProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => 'getEventDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => 'getFacebookDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => 'getFbeDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => 'getFbeFeatureDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => 'getGoogleCategoryProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => 'getMultishopDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => 'getPrevalidationScanCacheProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => 'getPrevalidationScanDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => 'getProductAvailabilityProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => 'getProductSyncReportProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => 'getGoogleCategoryRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Link' => 'getLinkService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient' => 'getAccountsClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient' => 'getServicesBillingClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\SsoClient' => 'getSsoClientService',
            'PrestaShop\\Module\\PsAccounts\\Context\\ShopContext' => 'getShopContextService',
            'PrestaShop\\Module\\PsAccounts\\Handler\\Error\\Sentry' => 'getSentryService',
            'PrestaShop\\Module\\PsAccounts\\Installer\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter' => 'getPsAccountsPresenterService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopClientProvider' => 'getPrestaShopClientProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession' => 'getPrestaShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider' => 'getRsaKeysProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider' => 'getShopProviderService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository' => 'getShopTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository' => 'getUserTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService' => 'getAnalyticsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService' => 'getPsAccountsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService' => 'getPsBillingServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService' => 'getShopLinkAccountServiceService',
            'PrestaShop\\Module\\PsEventbus\\Api\\EventBusProxyClient' => 'getEventBusProxyClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\EventBusSyncClient' => 'getEventBusSyncClientService',
            'PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder' => 'getCarrierBuilderService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator' => 'getCategoryDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator' => 'getCurrencyDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator' => 'getCustomPriceDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator' => 'getCustomerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator' => 'getPayloadDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator' => 'getProductDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator' => 'getStockDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator' => 'getStoreDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator' => 'getWishlistDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter' => 'getArrayFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter' => 'getDateFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter' => 'getJsonFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandler2Service',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider' => 'getCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider' => 'getCartDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider' => 'getCategoryDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider' => 'getCustomPriceDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider' => 'getCustomProductCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider' => 'getCustomerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider' => 'getGoogleTaxonomyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider' => 'getModuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider' => 'getOrderDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider' => 'getStockDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider' => 'getStoreDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider' => 'getWishlistDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository' => 'getBundleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository' => 'getCartProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository' => 'getCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository' => 'getConfigurationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository' => 'getCustomPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository' => 'getDeletedObjectsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository' => 'getEventbusSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository' => 'getGoogleTaxonomyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository' => 'getImageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository' => 'getIncrementalSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository' => 'getModuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository' => 'getOrderCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository' => 'getOrderDetailsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository' => 'getOrderHistoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository' => 'getOrderRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository' => 'getProductCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository' => 'getProductRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository' => 'getServerInformationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository' => 'getShopRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository' => 'getSpecificPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository' => 'getStockMvtRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository' => 'getStockRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository' => 'getStoreRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository' => 'getThemeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository' => 'getWishlistProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository' => 'getWishlistRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService' => 'getApiAuthorizationServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CacheService' => 'getCacheServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CompressionService' => 'getCompressionServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService' => 'getDeletedObjectsServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PresenterService' => 'getPresenterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyService' => 'getProxyServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService' => 'getSpecificPriceServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService' => 'getSynchronizationServiceService',
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapter2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer' => 'getTemplateBuffer2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env' => 'getEnv2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler' => 'getErrorHandler3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler' => 'getRemarketingHookHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider' => 'getCartEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ConversionEventDataProvider' => 'getConversionEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider' => 'getPageViewEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider' => 'getProductDataProvider2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider' => 'getPurchaseEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider' => 'getVerificationTagDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository' => 'getAttributesRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository' => 'getCarrierRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository' => 'getCountryRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository' => 'getCurrencyRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository' => 'getLanguageRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository' => 'getProductRepository3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository' => 'getStateRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository' => 'getTabRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository' => 'getTaxRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository' => 'getVerificationTagRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment' => 'getSegment2Service',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstaller2Service',
            'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory' => 'getClientFactoryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'array' => 'getArrayService',
            'configuration' => 'getConfiguration2Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'hashing' => 'getHashingService',
            'prestashop.adapter.context_state_manager' => 'getPrestashop_Adapter_ContextStateManagerService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.cache' => 'getPrestashop_Core_CircuitBreaker_CacheService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.localization.locale.repository' => 'getPrestashop_Core_Localization_Locale_RepositoryService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'ps_accounts.context' => 'getPsAccounts_ContextService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_accounts.logger' => 'getPsAccounts_LoggerService',
            'ps_accounts.module' => 'getPsAccounts_ModuleService',
            'ps_checkout.adapter.language' => 'getPsCheckout_Adapter_LanguageService',
            'ps_checkout.builder.module_link' => 'getPsCheckout_Builder_ModuleLinkService',
            'ps_checkout.cache.directory' => 'getPsCheckout_Cache_DirectoryService',
            'ps_checkout.cache.paypal.order' => 'getPsCheckout_Cache_Paypal_OrderService',
            'ps_checkout.configuration' => 'getPsCheckout_ConfigurationService',
            'ps_checkout.configuration.options.resolver' => 'getPsCheckout_Configuration_Options_ResolverService',
            'ps_checkout.context.prestashop' => 'getPsCheckout_Context_PrestashopService',
            'ps_checkout.context.shop' => 'getPsCheckout_Context_ShopService',
            'ps_checkout.env_loader' => 'getPsCheckout_EnvLoaderService',
            'ps_checkout.express_checkout.configuration' => 'getPsCheckout_ExpressCheckout_ConfigurationService',
            'ps_checkout.funding_source.collection' => 'getPsCheckout_FundingSource_CollectionService',
            'ps_checkout.funding_source.collection.builder' => 'getPsCheckout_FundingSource_Collection_BuilderService',
            'ps_checkout.funding_source.configuration' => 'getPsCheckout_FundingSource_ConfigurationService',
            'ps_checkout.funding_source.configuration.repository' => 'getPsCheckout_FundingSource_Configuration_RepositoryService',
            'ps_checkout.funding_source.eligibility_constraint' => 'getPsCheckout_FundingSource_EligibilityConstraintService',
            'ps_checkout.funding_source.entity' => 'getPsCheckout_FundingSource_EntityService',
            'ps_checkout.funding_source.presenter' => 'getPsCheckout_FundingSource_PresenterService',
            'ps_checkout.funding_source.provider' => 'getPsCheckout_FundingSource_ProviderService',
            'ps_checkout.funding_source.translation' => 'getPsCheckout_FundingSource_TranslationService',
            'ps_checkout.logger' => 'getPsCheckout_LoggerService',
            'ps_checkout.logger.configuration' => 'getPsCheckout_Logger_ConfigurationService',
            'ps_checkout.logger.directory' => 'getPsCheckout_Logger_DirectoryService',
            'ps_checkout.logger.factory' => 'getPsCheckout_Logger_FactoryService',
            'ps_checkout.logger.filename' => 'getPsCheckout_Logger_FilenameService',
            'ps_checkout.logger.handler' => 'getPsCheckout_Logger_HandlerService',
            'ps_checkout.logger.handler.factory' => 'getPsCheckout_Logger_Handler_FactoryService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_checkout.module.version' => 'getPsCheckout_Module_VersionService',
            'ps_checkout.pay_later.configuration' => 'getPsCheckout_PayLater_ConfigurationService',
            'ps_checkout.paypal.configuration' => 'getPsCheckout_Paypal_ConfigurationService',
            'ps_checkout.paypal.provider.client_token' => 'getPsCheckout_Paypal_Provider_ClientTokenService',
            'ps_checkout.paypal.provider.order' => 'getPsCheckout_Paypal_Provider_OrderService',
            'ps_checkout.repository.country' => 'getPsCheckout_Repository_CountryService',
            'ps_checkout.repository.paypal.code' => 'getPsCheckout_Repository_Paypal_CodeService',
            'ps_checkout.repository.prestashop.account' => 'getPsCheckout_Repository_Prestashop_AccountService',
            'ps_checkout.repository.pscheckoutcart' => 'getPsCheckout_Repository_PscheckoutcartService',
            'ps_checkout.sdk.paypal.linkbuilder' => 'getPsCheckout_Sdk_Paypal_LinkbuilderService',
            'ps_checkout.shop.provider' => 'getPsCheckout_Shop_ProviderService',
            'ps_checkout.step.live' => 'getPsCheckout_Step_LiveService',
            'ps_checkout.step.value' => 'getPsCheckout_Step_ValueService',
            'ps_checkout.store.module.configuration' => 'getPsCheckout_Store_Module_ConfigurationService',
            'ps_checkout.store.module.context' => 'getPsCheckout_Store_Module_ContextService',
            'ps_checkout.store.module.paypal' => 'getPsCheckout_Store_Module_PaypalService',
            'ps_checkout.store.store' => 'getPsCheckout_Store_StoreService',
            'ps_checkout.translations.translations' => 'getPsCheckout_Translations_TranslationsService',
            'ps_checkout.validator.front_controller' => 'getPsCheckout_Validator_FrontControllerService',
            'ps_checkout.validator.merchant' => 'getPsCheckout_Validator_MerchantService',
            'ps_checkout.webhook.handler' => 'getPsCheckout_Webhook_HandlerService',
            'ps_checkout.webhook.handler.event.configuration_updated' => 'getPsCheckout_Webhook_Handler_Event_ConfigurationUpdatedService',
            'ps_checkout.webhook.service.secret_token' => 'getPsCheckout_Webhook_Service_SecretTokenService',
            'ps_eventbus' => 'getPsEventbusService',
            'ps_eventbus.context' => 'getPsEventbus_ContextService',
            'ps_eventbus.controller' => 'getPsEventbus_ControllerService',
            'ps_eventbus.cookie' => 'getPsEventbus_CookieService',
            'ps_eventbus.currency' => 'getPsEventbus_CurrencyService',
            'ps_eventbus.db' => 'getPsEventbus_DbService',
            'ps_eventbus.language' => 'getPsEventbus_LanguageService',
            'ps_eventbus.link' => 'getPsEventbus_LinkService',
            'ps_eventbus.shop' => 'getPsEventbus_ShopService',
            'ps_eventbus.smarty' => 'getPsEventbus_SmartyService',
            'ps_facebook' => 'getPsFacebookService',
            'ps_facebook.cache' => 'getPsFacebook_CacheService',
            'ps_facebook.context' => 'getPsFacebook_ContextService',
            'ps_facebook.controller' => 'getPsFacebook_ControllerService',
            'ps_facebook.cookie' => 'getPsFacebook_CookieService',
            'ps_facebook.currency' => 'getPsFacebook_CurrencyService',
            'ps_facebook.language' => 'getPsFacebook_LanguageService',
            'ps_facebook.link' => 'getPsFacebook_LinkService',
            'ps_facebook.shop' => 'getPsFacebook_ShopService',
            'ps_facebook.smarty' => 'getPsFacebook_SmartyService',
            'psxmarketingwithgoogle' => 'getPsxmarketingwithgoogleService',
            'psxmarketingwithgoogle.context' => 'getPsxmarketingwithgoogle_ContextService',
            'psxmarketingwithgoogle.controller' => 'getPsxmarketingwithgoogle_ControllerService',
            'psxmarketingwithgoogle.cookie' => 'getPsxmarketingwithgoogle_CookieService',
            'psxmarketingwithgoogle.country' => 'getPsxmarketingwithgoogle_CountryService',
            'psxmarketingwithgoogle.currency' => 'getPsxmarketingwithgoogle_CurrencyService',
            'psxmarketingwithgoogle.db' => 'getPsxmarketingwithgoogle_DbService',
            'psxmarketingwithgoogle.language' => 'getPsxmarketingwithgoogle_LanguageService',
            'psxmarketingwithgoogle.link' => 'getPsxmarketingwithgoogle_LinkService',
            'psxmarketingwithgoogle.shop' => 'getPsxmarketingwithgoogle_ShopService',
            'psxmarketingwithgoogle.smarty' => 'getPsxmarketingwithgoogle_SmartyService',
        ];
        $this->aliases = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            '.service_locator.zH65KBq' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Connection $defaultConnection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\CacheAdapterFactory' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface' => true,
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyServiceInterface' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_entity_manager.validator_loader' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'messenger.middleware.doctrine_close_connection' => true,
            'messenger.middleware.doctrine_open_transaction_logger' => true,
            'messenger.middleware.doctrine_ping_connection' => true,
            'messenger.middleware.doctrine_transaction' => true,
            'messenger.transport.doctrine.factory' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient
     */
    protected function getFacebookCategoryClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] ?? $this->getPsApiClientFactoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient
     */
    protected function getFacebookClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] ?? $this->getFacebookEssentialsApiClientFactoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] ?? $this->getAccessTokenProviderService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] ?? $this->getConfigurationHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber
     */
    protected function getAccountSuspendedSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber
     */
    protected function getApiErrorSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\ResponseListener' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] = new \PrestaShop\Module\PrestashopFacebook\API\ResponseListener([0 => ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] ?? $this->getAccountSuspendedSubscriberService()), 1 => ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] ?? $this->getApiErrorSubscriberService())]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter(($this->services['ps_facebook.shop'] ?? $this->getPsFacebook_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter
     */
    protected function getToolsAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Config\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher'] = new \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] ?? $this->getApiConversionHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] ?? $this->getPixelHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] ?? $this->getEventDataProviderService()), ($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory
     */
    protected function getFacebookEssentialsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory(($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] ?? ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory
     */
    protected function getPsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] ?? ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler
     */
    protected function getApiConversionHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler
     */
    protected function getCategoryMatchHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler
     */
    protected function getConfigurationHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler(($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler
     */
    protected function getEventBusProductHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler
     */
    protected function getMessengerHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler(($this->services['ps_facebook.language'] ?? $this->getPsFacebook_LanguageService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler
     */
    protected function getPixelHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler(($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler
     */
    protected function getPrevalidationScanRefreshHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] ?? $this->getPrevalidationScanCacheProviderService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['ps_facebook.shop'] ?? $this->getPsFacebook_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager
     */
    protected function getFbeFeatureManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager'] = new \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter
     */
    protected function getModuleUpgradePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter'] = new \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter(($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider
     */
    protected function getAccessTokenProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()), ($this->services['ps_facebook.controller'] ?? $this->getPsFacebook_ControllerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] ?? $this->getPsApiClientFactoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider
     */
    protected function getEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter())), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()), ($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider())), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] ?? $this->getGoogleCategoryProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider
     */
    protected function getFacebookDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider
     */
    protected function getFbeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider
     */
    protected function getFbeFeatureDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider
     */
    protected function getGoogleCategoryProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider
     */
    protected function getMultishopDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository())), ($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] ?? $this->getSegmentService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider
     */
    protected function getPrevalidationScanCacheProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider(($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['ps_facebook.cache'] ?? $this->getPsFacebook_CacheService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider
     */
    protected function getPrevalidationScanDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] ?? $this->getPrevalidationScanCacheProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider
     */
    protected function getProductAvailabilityProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider
     */
    protected function getProductSyncReportProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] ?? $this->getPsApiClientFactoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository
     */
    protected function getGoogleCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository(($this->services['ps_facebook.language'] ?? $this->getPsFacebook_LanguageService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] = new \PrestaShop\Module\PsAccounts\Adapter\Configuration(($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Link' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Link
     */
    protected function getLinkService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] = new \PrestaShop\Module\PsAccounts\Adapter\Link(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\AccountsClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient
     */
    protected function getAccountsClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/v1/', ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient
     */
    protected function getServicesBillingClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient('https://billing-api.distribution.prestashop.net/', ($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] ?? $this->getPsAccountsServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\SsoClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\SsoClient
     */
    protected function getSsoClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\SsoClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\SsoClient('https://auth.prestashop.com/api/v1/');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Context\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Context\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] = new \PrestaShop\Module\PsAccounts\Context\ShopContext(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] ?? $this->getUserTokenRepositoryService()), ($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Handler\Error\Sentry' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Handler\Error\Sentry
     */
    protected function getSentryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Handler\\Error\\Sentry'] = new \PrestaShop\Module\PsAccounts\Handler\Error\Sentry('https://4c7f6c8dd5aa405b8401a35f5cf26ada@o298402.ingest.sentry.io/5354585', 'production', ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Installer\Installer' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] = new \PrestaShop\Module\PsAccounts\Installer\Installer(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter
     */
    protected function getPsAccountsPresenterService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter'] = new \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter(($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] ?? $this->getPsAccountsServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProviderService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService'] ?? $this->getShopLinkAccountServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] ?? $this->getInstallerService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopClientProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopClientProvider
     */
    protected function getPrestaShopClientProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopClientProvider'] = \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopClientProvider::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession
     */
    protected function getPrestaShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession'] = \PrestaShop\Module\PsAccounts\Factory\PrestaShopSessionFactory::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider
     */
    protected function getRsaKeysProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider'] = new \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\ShopProvider
     */
    protected function getShopProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] = new \PrestaShop\Module\PsAccounts\Provider\ShopProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] ?? $this->getConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository
     */
    protected function getShopTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\UserTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository
     */
    protected function getUserTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\AnalyticsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\AnalyticsService
     */
    protected function getAnalyticsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService'] = new \PrestaShop\Module\PsAccounts\Service\AnalyticsService('pEJGnRxw47CU01efFjMyl1S7YcxshLxl', ($this->services['ps_accounts.logger'] ?? $this->getPsAccounts_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsAccountsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsAccountsService
     */
    protected function getPsAccountsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] = new \PrestaShop\Module\PsAccounts\Service\PsAccountsService(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] ?? $this->getUserTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsBillingService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsBillingService
     */
    protected function getPsBillingServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService'] = new \PrestaShop\Module\PsAccounts\Service\PsBillingService(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] ?? $this->getServicesBillingClientService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService
     */
    protected function getShopLinkAccountServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService'] = new \PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService(($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider'] ?? $this->getRsaKeysProviderService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] ?? $this->getUserTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\EventBusProxyClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\EventBusProxyClient
     */
    protected function getEventBusProxyClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\EventBusProxyClient'] = new \PrestaShop\Module\PsEventbus\Api\EventBusProxyClient(($this->services['ps_eventbus.link'] ?? $this->getPsEventbus_LinkService()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), 'https://eventbus-proxy.psessentials.net', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\EventBusSyncClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\EventBusSyncClient
     */
    protected function getEventBusSyncClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\EventBusSyncClient'] = new \PrestaShop\Module\PsEventbus\Api\EventBusSyncClient(($this->services['ps_eventbus.link'] ?? $this->getPsEventbus_LinkService()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), 'https://eventbus-sync.psessentials.net');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Builder\CarrierBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder
     */
    protected function getCarrierBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] = new \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] ?? $this->getCountryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] ?? $this->getStateRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] ?? $this->getTaxRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator
     */
    protected function getCategoryDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator
     */
    protected function getCurrencyDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator
     */
    protected function getCustomPriceDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] ?? $this->getSpecificPriceServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator
     */
    protected function getCustomerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator
     */
    protected function getPayloadDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\DateFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator
     */
    protected function getProductDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepository2Service()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] ?? $this->getBundleRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StockDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StockDecorator
     */
    protected function getStockDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StoreDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator
     */
    protected function getStoreDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator
     */
    protected function getWishlistDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter
     */
    protected function getArrayFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\DateFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\DateFormatter
     */
    protected function getDateFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\DateFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\JsonFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter
     */
    protected function getJsonFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandler2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler(($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714', 'production');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider
     */
    protected function getCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] ?? $this->getCarrierBuilderService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartDataProvider
     */
    protected function getCartDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] ?? $this->getCartRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] ?? $this->getCartProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] ?? $this->getCartRuleRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider
     */
    protected function getCategoryDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? $this->getCurrencyRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider
     */
    protected function getCustomPriceDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] ?? $this->getCustomPriceRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] ?? $this->getCustomPriceDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider
     */
    protected function getCustomProductCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] ?? $this->getProductCarrierRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider
     */
    protected function getCustomerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] ?? $this->getCustomerRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] ?? $this->getCustomerDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider
     */
    protected function getGoogleTaxonomyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] ?? $this->getGoogleTaxonomyRepositoryService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider
     */
    protected function getModuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] ?? $this->getModuleRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? $this->getShopRepository2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\OrderDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider
     */
    protected function getOrderDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] ?? $this->getOrderDetailsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] ?? $this->getOrderHistoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] ?? $this->getOrderCartRuleRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider
     */
    protected function getProductDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepository2Service()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] ?? $this->getProductDecoratorService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StockDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StockDataProvider
     */
    protected function getStockDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StockDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] ?? $this->getStockRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] ?? $this->getStockMvtRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] ?? $this->getStockDecoratorService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StoreDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider
     */
    protected function getStoreDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] ?? $this->getStoreRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] ?? $this->getStoreDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider
     */
    protected function getWishlistDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] ?? $this->getWishlistRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] ?? $this->getWishlistProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator())), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\BundleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\BundleRepository
     */
    protected function getBundleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CarrierRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartProductRepository
     */
    protected function getCartProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartProductRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository
     */
    protected function getCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CategoryRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CountryRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository
     */
    protected function getCustomPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomerRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository
     */
    protected function getDeletedObjectsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository
     */
    protected function getEventbusSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository
     */
    protected function getGoogleTaxonomyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageRepository
     */
    protected function getImageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository
     */
    protected function getIncrementalSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ModuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ModuleRepository
     */
    protected function getModuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository
     */
    protected function getOrderCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository
     */
    protected function getOrderDetailsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository
     */
    protected function getOrderHistoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository
     */
    protected function getProductCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductRepository
     */
    protected function getProductRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? $this->getCurrencyRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? $this->getShopRepository2Service()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()), ['EVENT_BUS_SYNC_API_URL' => 'https://eventbus-sync.psessentials.net', 'EVENT_BUS_PROXY_API_URL' => 'https://eventbus-proxy.psessentials.net']);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ShopRepository
     */
    protected function getShopRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository
     */
    protected function getSpecificPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockMvtRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository
     */
    protected function getStockMvtRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockRepository
     */
    protected function getStockRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StoreRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StoreRepository
     */
    protected function getStoreRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StoreRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TaxRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ThemeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ThemeRepository
     */
    protected function getThemeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ThemeRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository
     */
    protected function getWishlistProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistRepository
     */
    protected function getWishlistRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService
     */
    protected function getApiAuthorizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService'] = new \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Api\\EventBusSyncClient'] ?? $this->getEventBusSyncClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CacheService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CacheService
     */
    protected function getCacheServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CacheService'] = new \PrestaShop\Module\PsEventbus\Service\CacheService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CompressionService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CompressionService
     */
    protected function getCompressionServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CompressionService'] = new \PrestaShop\Module\PsEventbus\Service\CompressionService(($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\DeletedObjectsService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService
     */
    protected function getDeletedObjectsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService'] = new \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] ?? $this->getDeletedObjectsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->getProxyServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PresenterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PresenterService
     */
    protected function getPresenterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PresenterService'] = new \PrestaShop\Module\PsEventbus\Service\PresenterService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ProxyService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ProxyService
     */
    protected function getProxyServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] = new \PrestaShop\Module\PsEventbus\Service\ProxyService(($this->services['PrestaShop\\Module\\PsEventbus\\Api\\EventBusProxyClient'] ?? $this->getEventBusProxyClientService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SpecificPriceService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SpecificPriceService
     */
    protected function getSpecificPriceServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] = new \PrestaShop\Module\PsEventbus\Service\SpecificPriceService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] ?? $this->getSpecificPriceRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SynchronizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SynchronizationService
     */
    protected function getSynchronizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService'] = new \PrestaShop\Module\PsEventbus\Service\SynchronizationService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] ?? $this->getIncrementalSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->getProxyServiceService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] ?? $this->getPayloadDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_facebook\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Tracker\Segment
     */
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] = new \PrestaShop\Module\Ps_facebook\Tracker\Segment(($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapter2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter(($this->services['psxmarketingwithgoogle.shop'] ?? $this->getPsxmarketingwithgoogle_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer
     */
    protected function getTemplateBuffer2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env
     */
    protected function getEnv2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler
     */
    protected function getErrorHandler3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler
     */
    protected function getRemarketingHookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer())), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle'] ?? $this->getPsxmarketingwithgoogleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider
     */
    protected function getCartEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ConversionEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ConversionEventDataProvider
     */
    protected function getConversionEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ConversionEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ConversionEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider
     */
    protected function getPageViewEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider
     */
    protected function getProductDataProvider2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider
     */
    protected function getPurchaseEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] ?? $this->getProductDataProvider2Service()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] ?? $this->getCountryRepository2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider
     */
    protected function getVerificationTagDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] ?? $this->getVerificationTagRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository
     */
    protected function getAttributesRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository
     */
    protected function getCarrierRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository
     */
    protected function getCountryRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle.country'] ?? $this->getPsxmarketingwithgoogle_CountryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository
     */
    protected function getCurrencyRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository(($this->services['psxmarketingwithgoogle.currency'] ?? $this->getPsxmarketingwithgoogle_CurrencyService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository
     */
    protected function getLanguageRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository
     */
    protected function getProductRepository3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository
     */
    protected function getStateRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository
     */
    protected function getTabRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository
     */
    protected function getTaxRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository
     */
    protected function getVerificationTagRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment
     */
    protected function getSegment2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] ?? ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0'))));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstaller2Service()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0');
    }

    /**
     * Gets the public 'Prestashop\ModuleLibGuzzleAdapter\ClientFactory' shared service.
     *
     * @return \Prestashop\ModuleLibGuzzleAdapter\ClientFactory
     */
    protected function getClientFactoryService()
    {
        return $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory();
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the public 'array' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getArrayService()
    {
        return $this->services['array'] = (new \PrestaShopBundle\DependencyInjection\CacheAdapterFactory())->getCacheAdapter('array');
    }

    /**
     * Gets the public 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'const' => ['privates', 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor', 'getRuntimeConstEnvVarProcessorService', false],
        ], [
            'const' => '?',
        ]);
    }

    /**
     * Gets the public 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the public 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => '', 'dbname' => 'prestashop', 'user' => 'root', 'password' => '', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = ($this->services['array'] ?? $this->getArrayService());
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = ($this->services['annotation_reader'] ?? ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader()));
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\productcomments\\src\\Entity']);
        $e->addExcludePaths([0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\productcomments\\src\\Entity/index.php']);
        $f = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_checkout\\src\\Entity']);
        $f->addExcludePaths([0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_checkout\\src\\Entity/index.php']);

        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Entity']), 'PrestaShop');
        $c->addDriver($e, 'PrestaShop\\Module\\ProductComment\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_accounts\\src\\Entity']), 'PrestaShop\\Module\\PsAccounts\\Entity');
        $c->addDriver($f, 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCache($b);
        $a->setQueryCache($b);
        $a->setResultCache($b);
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir('C:\\xampp\\htdocs\\prestashop/var/cache/prod\\/doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(($this->services['prestashop.database.naming_strategy'] ?? ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');
        $a->addEntityNamespace('ModulepsAccounts', 'PrestaShop\\Module\\PsAccounts\\Entity');
        $a->addEntityNamespace('ModulepsCheckout', 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the public 'prestashop.adapter.context_state_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getPrestashop_Adapter_ContextStateManagerService()
    {
        return $this->services['prestashop.adapter.context_state_manager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()));
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ((($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop) ? (($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false);
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ($this->services['prestashop.adapter.tools'] ?? ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
    }

    /**
     * Gets the public 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('C:\\xampp\\htdocs\\prestashop', 'C:\\xampp\\htdocs\\prestashop/modules/');
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.cache' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_CircuitBreaker_CacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (($this->services['prestashop.adapter.environment'] ?? ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false)))->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['prestashop.core.circuit_breaker.cache'] ?? $this->getPrestashop_Core_CircuitBreaker_CacheService()));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(($this->services['prestashop.core.circuit_breaker.doctrine_cache'] ?? $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(($this->services['prestashop.core.filter.front_end_object.product_collection'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ($this->services['prestashop.core.filter.front_end_object.cart'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_CartService()), 'customer' => ($this->services['prestashop.core.filter.front_end_object.customer'] ?? ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())), 'shop' => ($this->services['prestashop.core.filter.front_end_object.shop'] ?? ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())), 'configuration' => ($this->services['prestashop.core.filter.front_end_object.configuration'] ?? ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter()))]);
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.product'] ?? ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.search_result_product'] ?? ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, 'C:\\xampp\\htdocs\\prestashop/var/cache/prod\\/localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(($this->services['prestashop.core.localization.cldr.cache.adapter'] ?? ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, 'C:\\xampp\\htdocs\\prestashop/var/cache/prod\\/localization'))));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(($this->services['prestashop.core.localization.cldr.reader'] ?? ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(($this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(($this->services['prestashop.core.localization.cldr.locale_data_source'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(($this->services['prestashop.core.localization.currency.middleware.cache'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()), ($this->services['prestashop.core.localization.currency.middleware.installed'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(($this->services['prestashop.core.localization.cache.adapter'] ?? ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.database'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService()));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.reference'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(($this->services['prestashop.core.localization.currency.datasource'] ?? $this->getPrestashop_Core_Localization_Currency_DatasourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ($this->services['prestashop.core.localization.locale.repository'] ?? $this->getPrestashop_Core_Localization_Locale_RepositoryService())->getLocale(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getPrestashop_Core_Localization_Locale_RepositoryService()
    {
        return $this->services['prestashop.core.localization.locale.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.localization.currency.repository'] ?? $this->getPrestashop_Core_Localization_Currency_RepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the public 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(($this->services['prestashop.adapter.module.repository.module_repository'] ?? ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('C:\\xampp\\htdocs\\prestashop', 'C:\\xampp\\htdocs\\prestashop/modules/'))));
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
    }

    /**
     * Gets the public 'ps_accounts.context' shared service.
     *
     * @return \Context
     */
    protected function getPsAccounts_ContextService()
    {
        return $this->services['ps_accounts.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['ps_accounts.installer'] ?? ($this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0'))));
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0');
    }

    /**
     * Gets the public 'ps_accounts.logger' shared service.
     *
     * @return \Monolog\Logger
     */
    protected function getPsAccounts_LoggerService()
    {
        return $this->services['ps_accounts.logger'] = \PrestaShop\Module\PsAccounts\Factory\PsAccountsLogger::create();
    }

    /**
     * Gets the public 'ps_accounts.module' shared service.
     *
     * @return \Ps_accounts
     */
    protected function getPsAccounts_ModuleService()
    {
        return $this->services['ps_accounts.module'] = \Module::getInstanceByName('ps_accounts');
    }

    /**
     * Gets the public 'ps_checkout.adapter.language' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter
     */
    protected function getPsCheckout_Adapter_LanguageService()
    {
        return $this->services['ps_checkout.adapter.language'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter(($this->services['ps_checkout.context.shop'] ?? ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())));
    }

    /**
     * Gets the public 'ps_checkout.builder.module_link' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder
     */
    protected function getPsCheckout_Builder_ModuleLinkService()
    {
        return $this->services['ps_checkout.builder.module_link'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder();
    }

    /**
     * Gets the public 'ps_checkout.cache.directory' shared service.
     *
     * @return \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider
     */
    protected function getPsCheckout_Cache_DirectoryService()
    {
        return $this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('8.0.4', 'C:\\xampp\\htdocs\\prestashop', false);
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\FilesystemCache
     */
    protected function getPsCheckout_Cache_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.paypal.order'] = new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-orders', 3600, ($this->services['ps_checkout.cache.directory'] ?? ($this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('8.0.4', 'C:\\xampp\\htdocs\\prestashop', false)))->getPath());
    }

    /**
     * Gets the public 'ps_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration
     */
    protected function getPsCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration(($this->services['ps_checkout.configuration.options.resolver'] ?? $this->getPsCheckout_Configuration_Options_ResolverService()));
    }

    /**
     * Gets the public 'ps_checkout.configuration.options.resolver' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver
     */
    protected function getPsCheckout_Configuration_Options_ResolverService()
    {
        return $this->services['ps_checkout.configuration.options.resolver'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver(($this->services['ps_checkout.shop.provider'] ?? ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider()))->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.context.prestashop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext
     */
    protected function getPsCheckout_Context_PrestashopService()
    {
        return $this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'ps_checkout.context.shop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopContext
     */
    protected function getPsCheckout_Context_ShopService()
    {
        return $this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext();
    }

    /**
     * Gets the public 'ps_checkout.env_loader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader
     */
    protected function getPsCheckout_EnvLoaderService()
    {
        return $this->services['ps_checkout.env_loader'] = new \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader();
    }

    /**
     * Gets the public 'ps_checkout.express_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration
     */
    protected function getPsCheckout_ExpressCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.express_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection
     */
    protected function getPsCheckout_FundingSource_CollectionService()
    {
        return $this->services['ps_checkout.funding_source.collection'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection(($this->services['ps_checkout.funding_source.collection.builder'] ?? $this->getPsCheckout_FundingSource_Collection_BuilderService())->create());
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection.builder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder
     */
    protected function getPsCheckout_FundingSource_Collection_BuilderService()
    {
        return $this->services['ps_checkout.funding_source.collection.builder'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder(($this->services['ps_checkout.funding_source.configuration'] ?? $this->getPsCheckout_FundingSource_ConfigurationService()), ($this->services['ps_checkout.funding_source.eligibility_constraint'] ?? ($this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint())));
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration
     */
    protected function getPsCheckout_FundingSource_ConfigurationService()
    {
        return $this->services['ps_checkout.funding_source.configuration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration(($this->services['ps_checkout.funding_source.configuration.repository'] ?? $this->getPsCheckout_FundingSource_Configuration_RepositoryService()));
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration.repository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository
     */
    protected function getPsCheckout_FundingSource_Configuration_RepositoryService()
    {
        return $this->services['ps_checkout.funding_source.configuration.repository'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository(($this->services['ps_checkout.context.prestashop'] ?? ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())));
    }

    /**
     * Gets the public 'ps_checkout.funding_source.eligibility_constraint' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint
     */
    protected function getPsCheckout_FundingSource_EligibilityConstraintService()
    {
        return $this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint();
    }

    /**
     * Gets the public 'ps_checkout.funding_source.entity' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity
     */
    protected function getPsCheckout_FundingSource_EntityService()
    {
        return $this->services['ps_checkout.funding_source.entity'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity();
    }

    /**
     * Gets the public 'ps_checkout.funding_source.presenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter
     */
    protected function getPsCheckout_FundingSource_PresenterService()
    {
        return $this->services['ps_checkout.funding_source.presenter'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter(($this->services['ps_checkout.funding_source.translation'] ?? $this->getPsCheckout_FundingSource_TranslationService()), ($this->services['ps_checkout.repository.country'] ?? ($this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository())));
    }

    /**
     * Gets the public 'ps_checkout.funding_source.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider
     */
    protected function getPsCheckout_FundingSource_ProviderService()
    {
        return $this->services['ps_checkout.funding_source.provider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider(($this->services['ps_checkout.funding_source.collection.builder'] ?? $this->getPsCheckout_FundingSource_Collection_BuilderService()), ($this->services['ps_checkout.funding_source.presenter'] ?? $this->getPsCheckout_FundingSource_PresenterService()));
    }

    /**
     * Gets the public 'ps_checkout.funding_source.translation' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider
     */
    protected function getPsCheckout_FundingSource_TranslationService()
    {
        return $this->services['ps_checkout.funding_source.translation'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'ps_checkout.logger' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getPsCheckout_LoggerService()
    {
        return $this->services['ps_checkout.logger'] = ($this->services['ps_checkout.logger.factory'] ?? $this->getPsCheckout_Logger_FactoryService())->build(($this->services['ps_checkout.logger.directory'] ?? ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.0.4', 'C:\\xampp\\htdocs\\prestashop'))));
    }

    /**
     * Gets the public 'ps_checkout.logger.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration
     */
    protected function getPsCheckout_Logger_ConfigurationService()
    {
        return $this->services['ps_checkout.logger.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.logger.directory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory
     */
    protected function getPsCheckout_Logger_DirectoryService()
    {
        return $this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.0.4', 'C:\\xampp\\htdocs\\prestashop');
    }

    /**
     * Gets the public 'ps_checkout.logger.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory
     */
    protected function getPsCheckout_Logger_FactoryService()
    {
        return $this->services['ps_checkout.logger.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->name, ($this->services['ps_checkout.logger.handler'] ?? $this->getPsCheckout_Logger_HandlerService()));
    }

    /**
     * Gets the public 'ps_checkout.logger.filename' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename
     */
    protected function getPsCheckout_Logger_FilenameService()
    {
        return $this->services['ps_checkout.logger.filename'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->name, ($this->services['ps_checkout.shop.provider'] ?? ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider()))->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.logger.handler' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getPsCheckout_Logger_HandlerService()
    {
        return $this->services['ps_checkout.logger.handler'] = ($this->services['ps_checkout.logger.handler.factory'] ?? $this->getPsCheckout_Logger_Handler_FactoryService())->build();
    }

    /**
     * Gets the public 'ps_checkout.logger.handler.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory
     */
    protected function getPsCheckout_Logger_Handler_FactoryService()
    {
        return $this->services['ps_checkout.logger.handler.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(($this->services['ps_checkout.logger.directory'] ?? ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.0.4', 'C:\\xampp\\htdocs\\prestashop')))->getPath(), ($this->services['ps_checkout.logger.filename'] ?? $this->getPsCheckout_Logger_FilenameService())->get(), ($this->services['ps_checkout.logger.configuration'] ?? $this->getPsCheckout_Logger_ConfigurationService())->getMaxFiles(), ($this->services['ps_checkout.logger.configuration'] ?? $this->getPsCheckout_Logger_ConfigurationService())->getLevel());
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \Ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }

    /**
     * Gets the public 'ps_checkout.module.version' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Version\Version
     */
    protected function getPsCheckout_Module_VersionService()
    {
        return $this->services['ps_checkout.module.version'] = \PrestaShop\Module\PrestashopCheckout\Version\Version::buildFromString(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->version);
    }

    /**
     * Gets the public 'ps_checkout.pay_later.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration
     */
    protected function getPsCheckout_PayLater_ConfigurationService()
    {
        return $this->services['ps_checkout.pay_later.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.paypal.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration
     */
    protected function getPsCheckout_Paypal_ConfigurationService()
    {
        return $this->services['ps_checkout.paypal.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()), ($this->services['ps_checkout.repository.paypal.code'] ?? ($this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository())));
    }

    /**
     * Gets the public 'ps_checkout.paypal.provider.client_token' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalClientTokenProvider
     */
    protected function getPsCheckout_Paypal_Provider_ClientTokenService()
    {
        return $this->services['ps_checkout.paypal.provider.client_token'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalClientTokenProvider();
    }

    /**
     * Gets the public 'ps_checkout.paypal.provider.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider
     */
    protected function getPsCheckout_Paypal_Provider_OrderService()
    {
        return $this->services['ps_checkout.paypal.provider.order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider(($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()));
    }

    /**
     * Gets the public 'ps_checkout.repository.country' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository
     */
    protected function getPsCheckout_Repository_CountryService()
    {
        return $this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.code' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPsCheckout_Repository_Paypal_CodeService()
    {
        return $this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.prestashop.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository
     */
    protected function getPsCheckout_Repository_Prestashop_AccountService()
    {
        return $this->services['ps_checkout.repository.prestashop.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()), ($this->services['ps_accounts.facade'] ?? $this->getPsAccounts_FacadeService()));
    }

    /**
     * Gets the public 'ps_checkout.repository.pscheckoutcart' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository
     */
    protected function getPsCheckout_Repository_PscheckoutcartService()
    {
        return $this->services['ps_checkout.repository.pscheckoutcart'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository();
    }

    /**
     * Gets the public 'ps_checkout.sdk.paypal.linkbuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder
     */
    protected function getPsCheckout_Sdk_Paypal_LinkbuilderService()
    {
        return $this->services['ps_checkout.sdk.paypal.linkbuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder(($this->services['ps_checkout.paypal.configuration'] ?? $this->getPsCheckout_Paypal_ConfigurationService()), ($this->services['ps_checkout.pay_later.configuration'] ?? $this->getPsCheckout_PayLater_ConfigurationService()), ($this->services['ps_checkout.funding_source.configuration.repository'] ?? $this->getPsCheckout_FundingSource_Configuration_RepositoryService()), ($this->services['ps_checkout.express_checkout.configuration'] ?? $this->getPsCheckout_ExpressCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.shop.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider
     */
    protected function getPsCheckout_Shop_ProviderService()
    {
        return $this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider();
    }

    /**
     * Gets the public 'ps_checkout.step.live' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep
     */
    protected function getPsCheckout_Step_LiveService()
    {
        return $this->services['ps_checkout.step.live'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.step.value' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner
     */
    protected function getPsCheckout_Step_ValueService()
    {
        return $this->services['ps_checkout.step.value'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.store.module.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule
     */
    protected function getPsCheckout_Store_Module_ConfigurationService()
    {
        return $this->services['ps_checkout.store.module.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule(($this->services['ps_checkout.pay_later.configuration'] ?? $this->getPsCheckout_PayLater_ConfigurationService()), ($this->services['ps_checkout.express_checkout.configuration'] ?? $this->getPsCheckout_ExpressCheckout_ConfigurationService()), ($this->services['ps_checkout.paypal.configuration'] ?? $this->getPsCheckout_Paypal_ConfigurationService()), ($this->services['ps_checkout.funding_source.provider'] ?? $this->getPsCheckout_FundingSource_ProviderService()), ($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'ps_checkout.store.module.context' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule
     */
    protected function getPsCheckout_Store_Module_ContextService()
    {
        return $this->services['ps_checkout.store.module.context'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->name, ($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->module_key, ($this->services['ps_checkout.context.prestashop'] ?? ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['ps_checkout.paypal.configuration'] ?? $this->getPsCheckout_Paypal_ConfigurationService()), ($this->services['ps_checkout.step.live'] ?? $this->getPsCheckout_Step_LiveService()), ($this->services['ps_checkout.step.value'] ?? $this->getPsCheckout_Step_ValueService()), ($this->services['ps_checkout.translations.translations'] ?? $this->getPsCheckout_Translations_TranslationsService()), ($this->services['ps_checkout.context.shop'] ?? ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())), ($this->services['ps_checkout.shop.provider'] ?? ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())), ($this->services['ps_checkout.builder.module_link'] ?? ($this->services['ps_checkout.builder.module_link'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder())), ($this->services['ps_checkout.repository.prestashop.account'] ?? $this->getPsCheckout_Repository_Prestashop_AccountService()));
    }

    /**
     * Gets the public 'ps_checkout.store.module.paypal' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule
     */
    protected function getPsCheckout_Store_Module_PaypalService()
    {
        return $this->services['ps_checkout.store.module.paypal'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(($this->services['ps_checkout.paypal.configuration'] ?? $this->getPsCheckout_Paypal_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.store.store' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter
     */
    protected function getPsCheckout_Store_StoreService()
    {
        return $this->services['ps_checkout.store.store'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ($this->services['ps_checkout.store.module.context'] ?? $this->getPsCheckout_Store_Module_ContextService()), 1 => ($this->services['ps_checkout.store.module.paypal'] ?? $this->getPsCheckout_Store_Module_PaypalService()), 2 => ($this->services['ps_checkout.store.module.configuration'] ?? $this->getPsCheckout_Store_Module_ConfigurationService())]);
    }

    /**
     * Gets the public 'ps_checkout.translations.translations' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Translations\Translations
     */
    protected function getPsCheckout_Translations_TranslationsService()
    {
        return $this->services['ps_checkout.translations.translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'ps_checkout.validator.front_controller' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator
     */
    protected function getPsCheckout_Validator_FrontControllerService()
    {
        return $this->services['ps_checkout.validator.front_controller'] = new \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator(($this->services['ps_checkout.validator.merchant'] ?? $this->getPsCheckout_Validator_MerchantService()), ($this->services['ps_checkout.express_checkout.configuration'] ?? $this->getPsCheckout_ExpressCheckout_ConfigurationService()), ($this->services['ps_checkout.pay_later.configuration'] ?? $this->getPsCheckout_PayLater_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.validator.merchant' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator
     */
    protected function getPsCheckout_Validator_MerchantService()
    {
        return $this->services['ps_checkout.validator.merchant'] = new \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator(($this->services['ps_checkout.paypal.configuration'] ?? $this->getPsCheckout_Paypal_ConfigurationService()), ($this->services['ps_checkout.repository.prestashop.account'] ?? $this->getPsCheckout_Repository_Prestashop_AccountService()), ($this->services['ps_checkout.context.prestashop'] ?? ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())));
    }

    /**
     * Gets the public 'ps_checkout.webhook.handler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler
     */
    protected function getPsCheckout_Webhook_HandlerService()
    {
        return $this->services['ps_checkout.webhook.handler'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler(($this->services['ps_checkout.webhook.service.secret_token'] ?? $this->getPsCheckout_Webhook_Service_SecretTokenService()), [0 => ($this->services['ps_checkout.webhook.handler.event.configuration_updated'] ?? $this->getPsCheckout_Webhook_Handler_Event_ConfigurationUpdatedService())]);
    }

    /**
     * Gets the public 'ps_checkout.webhook.handler.event.configuration_updated' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler
     */
    protected function getPsCheckout_Webhook_Handler_Event_ConfigurationUpdatedService()
    {
        return $this->services['ps_checkout.webhook.handler.event.configuration_updated'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_checkout.webhook.service.secret_token' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService
     */
    protected function getPsCheckout_Webhook_Service_SecretTokenService()
    {
        return $this->services['ps_checkout.webhook.service.secret_token'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService(($this->services['ps_checkout.configuration'] ?? $this->getPsCheckout_ConfigurationService()));
    }

    /**
     * Gets the public 'ps_eventbus' shared service.
     *
     * @return \Ps_eventbus
     */
    protected function getPsEventbusService()
    {
        return $this->services['ps_eventbus'] = \Module::getInstanceByName('ps_eventbus');
    }

    /**
     * Gets the public 'ps_eventbus.context' shared service.
     *
     * @return \Context
     */
    protected function getPsEventbus_ContextService()
    {
        return $this->services['ps_eventbus.context'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_eventbus.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsEventbus_ControllerService()
    {
        return $this->services['ps_eventbus.controller'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_eventbus.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsEventbus_CookieService()
    {
        return $this->services['ps_eventbus.cookie'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_eventbus.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsEventbus_CurrencyService()
    {
        return $this->services['ps_eventbus.currency'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_eventbus.db' shared service.
     *
     * @return \Db
     */
    protected function getPsEventbus_DbService()
    {
        return $this->services['ps_eventbus.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_eventbus.language' shared service.
     *
     * @return \Language
     */
    protected function getPsEventbus_LanguageService()
    {
        return $this->services['ps_eventbus.language'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_eventbus.link' shared service.
     *
     * @return \Link
     */
    protected function getPsEventbus_LinkService()
    {
        return $this->services['ps_eventbus.link'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_eventbus.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsEventbus_ShopService()
    {
        return $this->services['ps_eventbus.shop'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_eventbus.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsEventbus_SmartyService()
    {
        return $this->services['ps_eventbus.smarty'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'ps_facebook' shared service.
     *
     * @return \Ps_facebook
     */
    protected function getPsFacebookService()
    {
        return $this->services['ps_facebook'] = \Module::getInstanceByName('ps_facebook');
    }

    /**
     * Gets the public 'ps_facebook.cache' shared service.
     *
     * @return \string
     */
    protected function getPsFacebook_CacheService()
    {
        return $this->services['ps_facebook.cache'] = \PrestaShop\Module\PrestashopFacebook\Factory\CacheFactory::getCachePath();
    }

    /**
     * Gets the public 'ps_facebook.context' shared service.
     *
     * @return \Context
     */
    protected function getPsFacebook_ContextService()
    {
        return $this->services['ps_facebook.context'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_facebook.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsFacebook_ControllerService()
    {
        return $this->services['ps_facebook.controller'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_facebook.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsFacebook_CookieService()
    {
        return $this->services['ps_facebook.cookie'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_facebook.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsFacebook_CurrencyService()
    {
        return $this->services['ps_facebook.currency'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_facebook.language' shared service.
     *
     * @return \Language
     */
    protected function getPsFacebook_LanguageService()
    {
        return $this->services['ps_facebook.language'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_facebook.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_LinkService()
    {
        return $this->services['ps_facebook.link'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_facebook.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_ShopService()
    {
        return $this->services['ps_facebook.shop'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_facebook.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsFacebook_SmartyService()
    {
        return $this->services['ps_facebook.smarty'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle' shared service.
     *
     * @return \PsxMarketingWithGoogle
     */
    protected function getPsxmarketingwithgoogleService()
    {
        return $this->services['psxmarketingwithgoogle'] = \Module::getInstanceByName('psxmarketingwithgoogle');
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.context' shared service.
     *
     * @return \Context
     */
    protected function getPsxmarketingwithgoogle_ContextService()
    {
        return $this->services['psxmarketingwithgoogle.context'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsxmarketingwithgoogle_ControllerService()
    {
        return $this->services['psxmarketingwithgoogle.controller'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsxmarketingwithgoogle_CookieService()
    {
        return $this->services['psxmarketingwithgoogle.cookie'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.country' shared service.
     *
     * @return \Country
     */
    protected function getPsxmarketingwithgoogle_CountryService()
    {
        return $this->services['psxmarketingwithgoogle.country'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCountry();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CurrencyService()
    {
        return $this->services['psxmarketingwithgoogle.currency'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.db' shared service.
     *
     * @return \Db
     */
    protected function getPsxmarketingwithgoogle_DbService()
    {
        return $this->services['psxmarketingwithgoogle.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.language' shared service.
     *
     * @return \Language
     */
    protected function getPsxmarketingwithgoogle_LanguageService()
    {
        return $this->services['psxmarketingwithgoogle.language'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_LinkService()
    {
        return $this->services['psxmarketingwithgoogle.link'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_ShopService()
    {
        return $this->services['psxmarketingwithgoogle.shop'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsxmarketingwithgoogle_SmartyService()
    {
        return $this->services['psxmarketingwithgoogle.smarty'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->privates['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'database_host' => '127.0.0.1',
            'database_port' => '',
            'database_name' => 'prestashop',
            'database_user' => 'root',
            'database_password' => '',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'tyA5XSgDK6Onyzbz13SnOIaa6WVnHMCFIuuOe3Z5xIbVKtYezDKc9bcx9T5pVb3C',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2023-05-07',
            'locale' => 'es-ES',
            'use_debug_toolbar' => true,
            'cookie_key' => 'sga1TgW4GydZDaLfNEizPcFHNji1yAzBEMYhbMqgGk2zGOnUe0i6DEvbgHIZVEvQ',
            'cookie_iv' => 'IOX2rkhwdL33aaCSyPbS9w4RbUmb3ham',
            'new_cookie_key' => 'def00000d679b46d2d776c05e2bf58b9df7436bf9ad4203b50b3d2567da5007c53071491cdeb2b5b975e95ef163b23dae89f77aa15f7e654d44bab123893cf0723a49ccd',
            'cache.driver' => 'array',
            'cache.adapter' => 'cache.adapter.array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => 'C:\\xampp\\htdocs\\prestashop/app',
            'kernel.project_dir' => 'C:\\xampp\\htdocs\\prestashop',
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.environment' => 'prod',
            'kernel.cache_dir' => 'C:\\xampp\\htdocs\\prestashop/var/cache/prod\\',
            'kernel.active_modules' => [
                0 => 'ps_linklist',
                1 => 'blockreassurance',
                2 => 'blockwishlist',
                3 => 'psgdpr',
                4 => 'ps_contactinfo',
                5 => 'ps_languageselector',
                6 => 'ps_currencyselector',
                7 => 'ps_customersignin',
                8 => 'ps_shoppingcart',
                9 => 'ps_mainmenu',
                10 => 'ps_searchbar',
                11 => 'ps_imageslider',
                12 => 'ps_featuredproducts',
                13 => 'ps_banner',
                14 => 'ps_customtext',
                15 => 'ps_specials',
                16 => 'ps_newproducts',
                17 => 'ps_bestsellers',
                18 => 'ps_emailsubscription',
                19 => 'ps_socialfollow',
                20 => 'ps_customeraccountlinks',
                21 => 'productcomments',
                22 => 'ps_categorytree',
                23 => 'contactform',
                24 => 'ps_sharebuttons',
                25 => 'dashactivity',
                26 => 'dashgoals',
                27 => 'dashproducts',
                28 => 'dashtrends',
                29 => 'gamification',
                30 => 'graphnvd3',
                31 => 'gridhtml',
                32 => 'gsitemap',
                33 => 'mbeshipping',
                34 => 'pagesnotfound',
                35 => 'psxmarketingwithgoogle',
                36 => 'ps_accounts',
                37 => 'ps_eventbus',
                38 => 'ps_brandlist',
                39 => 'ps_cashondelivery',
                40 => 'ps_categoryproducts',
                41 => 'ps_checkout',
                42 => 'ps_checkpayment',
                43 => 'ps_crossselling',
                44 => 'ps_dataprivacy',
                45 => 'ps_distributionapiclient',
                46 => 'ps_emailalerts',
                47 => 'ps_facebook',
                48 => 'ps_faviconnotificationbo',
                49 => 'ps_googleanalytics',
                50 => 'ps_mbo',
                51 => 'ps_metrics',
                52 => 'ps_supplierlist',
                53 => 'ps_themecusto',
                54 => 'ps_viewedproduct',
                55 => 'ps_wirepayment',
                56 => 'statsbestcategories',
                57 => 'statsbestcustomers',
                58 => 'statsbestmanufacturers',
                59 => 'statsbestproducts',
                60 => 'statsbestsuppliers',
                61 => 'statsbestvouchers',
                62 => 'statscarrier',
                63 => 'statscatalog',
                64 => 'statscheckup',
                65 => 'statsdata',
                66 => 'statsforecast',
                67 => 'statsnewsletter',
                68 => 'statspersonalinfos',
                69 => 'statsproduct',
                70 => 'statsregistrations',
                71 => 'statssales',
                72 => 'statssearch',
                73 => 'statsstock',
                74 => 'ps_facetedsearch',
            ],
            'ps_cache_dir' => 'C:\\xampp\\htdocs\\prestashop/var/cache/prod\\',
            'mail_themes_uri' => '/mails/themes',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => 'C:\\xampp\\htdocs\\prestashop/var/cache/prod\\/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'ps_accounts.environment' => 'production',
            'ps_accounts.accounts_api_url' => 'https://accounts-api.distribution.prestashop.net/v1/',
            'ps_accounts.accounts_ui_url' => 'https://accounts.distribution.prestashop.net',
            'ps_accounts.sso_api_url' => 'https://auth.prestashop.com/api/v1/',
            'ps_accounts.sso_account_url' => 'https://auth.prestashop.com/login',
            'ps_accounts.sso_resend_verification_email_url' => 'https://auth.prestashop.com/account/send-verification-email',
            'ps_accounts.billing_api_url' => 'https://billing-api.distribution.prestashop.net/',
            'ps_accounts.sentry_credentials' => 'https://4c7f6c8dd5aa405b8401a35f5cf26ada@o298402.ingest.sentry.io/5354585',
            'ps_accounts.segment_write_key' => 'pEJGnRxw47CU01efFjMyl1S7YcxshLxl',
            'ps_accounts.check_api_ssl_cert' => true,
            'ps_accounts.verify_account_tokens' => true,
            'ps_accounts.accounts_vue_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@3/dist/psaccountsVue.umd.min.js',
            'ps_accounts.accounts_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@4/dist/psaccountsVue.umd.min.js',
            'ps_accounts.svc_accounts_ui_url' => 'https://accounts.psessentials.net',
            'ps_accounts.oauth2_url_authorize' => 'https://oauth.prestashop.com/oauth2/auth',
            'ps_accounts.oauth2_url_access_token' => 'https://oauth.prestashop.com/oauth2/token',
            'ps_accounts.oauth2_url_resource_owner_details' => 'https://oauth.prestashop.com/userinfo',
            'ps_accounts.oauth2_url_session_logout' => 'https://oauth.prestashop.com/oauth2/sessions/logout',
            'ps_accounts.uri_help_center_en' => 'https://help-center.prestashop.com/en/articles/8087001455634-i-cannot-log-in-to-the-back-office-of-my-edition-shop-with-my-prestashop-account',
            'ps_accounts.uri_help_center_fr' => 'https://help-center.prestashop.com/fr/articles/8087001455634-je-ne-peux-pas-me-connecter-au-back-office-de-ma-boutique-edition-avec-mon-compte-prestashop',
            'ps_eventbus.proxy_api_url' => 'https://eventbus-proxy.psessentials.net',
            'ps_eventbus.sync_api_url' => 'https://eventbus-sync.psessentials.net',
            'ps_eventbus.sentry_dsn' => 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714',
            'ps_eventbus.sentry_env' => 'production',
        ];
    }
}
