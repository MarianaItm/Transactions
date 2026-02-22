<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1746110385,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.13',
  'metaExtensions' =>
  array (
  ),
  'phpVersion' => 80405,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigGetDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [/Users/mantum/Documents/test-paypal/vendor/nunomaduro/larastan/bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkModelAppends: true, generalizeEnvReturnType: false, checkConfigTypes: false, tmpDir: /Users/mantum/Documents/test-paypal/.phpstan-cache, paths: [/Users/mantum/Documents/test-paypal/app, /Users/mantum/Documents/test-paypal/tests], level: 8}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigGetDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}]}',
  'analysedPaths' =>
  array (
    0 => '/Users/mantum/Documents/test-paypal/app',
    1 => '/Users/mantum/Documents/test-paypal/tests',
  ),
  'scannedFiles' =>
  array (
  ),
  'composerLocks' =>
  array (
    '/Users/mantum/Documents/test-paypal/composer.lock' => '46f3c9a7f4061d6c53619f5d1c7918ab4bc49087',
  ),
  'composerInstalled' =>
  array (
    '/Users/mantum/Documents/test-paypal/vendor/composer/installed.php' =>
    array (
      'versions' =>
      array (
        'brick/math' =>
        array (
          'pretty_version' => '0.12.3',
          'version' => '0.12.3.0',
          'reference' => '866551da34e9a618e64a819ee1e01c20d8a588ba',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../brick/math',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' =>
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' =>
        array (
          'dev_requirement' => true,
          'replaced' =>
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' =>
        array (
          'dev_requirement' => true,
          'replaced' =>
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' =>
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../dflydev/dot-access-data',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' =>
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '5817d0659c5b50c9b950feb9af7b9668e2c436bc',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../doctrine/inflector',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' =>
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../doctrine/lexer',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' =>
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '8c784d071debd117328803d86b2097615b457500',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../dragonmantank/cron-expression',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' =>
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../egulias/email-validator',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' =>
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../fakerphp/faker',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' =>
        array (
          'pretty_version' => '2.18.0',
          'version' => '2.18.0.0',
          'reference' => 'a7de6c3c6c3c022f5cfc337f8ede6a14460cf77e',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../filp/whoops',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' =>
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../fruitcake/php-cors',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' =>
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../graham-campbell/result-type',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' =>
        array (
          'pretty_version' => '7.9.3',
          'version' => '7.9.3.0',
          'reference' => '7b2f29fe81dc4da0ca0ea7d42107a0845946ea77',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../guzzlehttp/guzzle',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' =>
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '7c69f28996b0a6920945dd20b3857e499d9ca96c',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../guzzlehttp/promises',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' =>
        array (
          'pretty_version' => '2.7.1',
          'version' => '2.7.1.0',
          'reference' => 'c2270caaabe631b3b44c85f99e5a04bbb8060d16',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../guzzlehttp/psr7',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' =>
        array (
          'pretty_version' => 'v1.0.4',
          'version' => '1.0.4.0',
          'reference' => '30e286560c137526eccd4ce21b2de477ab0676d2',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../guzzlehttp/uri-template',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' =>
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' =>
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../iamcal/sql-parser',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/broadcasting' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/bus' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/cache' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/collections' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/concurrency' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/conditionable' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/config' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/console' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/container' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/contracts' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/cookie' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/database' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/encryption' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/events' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/filesystem' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/hashing' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/http' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/log' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/macroable' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/mail' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/notifications' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/pagination' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/pipeline' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/process' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/queue' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/redis' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/routing' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/session' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/support' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/testing' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/translation' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/validation' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'illuminate/view' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => 'v12.11.1',
          ),
        ),
        'kodova/hamcrest-php' =>
        array (
          'dev_requirement' => true,
          'replaced' =>
          array (
            0 => '*',
          ),
        ),
        'laravel/framework' =>
        array (
          'pretty_version' => 'v12.11.1',
          'version' => '12.11.1.0',
          'reference' => 'bd0d62bd9c5196728e428cd695d89ec8640daac1',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../laravel/framework',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' =>
        array (
          'pretty_version' => 'v1.2.2',
          'version' => '1.2.2.0',
          'reference' => 'f31f4980f52be17c4667f3eafe034e6826787db2',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../laravel/pail',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' =>
        array (
          'pretty_version' => 'v1.22.0',
          'version' => '1.22.0.0',
          'reference' => '7ddfaa6523a675fae5c4123ee38fc6bfb8ee4f36',
          'type' => 'project',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../laravel/pint',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' =>
        array (
          'pretty_version' => 'v0.3.5',
          'version' => '0.3.5.0',
          'reference' => '57b8f7efe40333cdb925700891c7d7465325d3b1',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../laravel/prompts',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' =>
        array (
          'pretty_version' => 'v1.42.0',
          'version' => '1.42.0.0',
          'reference' => '2edaaf77f3c07a4099965bb3d7dfee16e801c0f6',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../laravel/sail',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' =>
        array (
          'pretty_version' => 'v2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b352cf0534aa1ae6b4d825d1e762e35d43f8a841',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../laravel/serializable-closure',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' =>
        array (
          'pretty_version' => 'v2.10.1',
          'version' => '2.10.1.0',
          'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../laravel/tinker',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' =>
        array (
          'pretty_version' => '2.6.2',
          'version' => '2.6.2.0',
          'reference' => '06c3b0bf2540338094575612f4a1778d0d2d5e94',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../league/commonmark',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' =>
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../league/config',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' =>
        array (
          'pretty_version' => '3.29.1',
          'version' => '3.29.1.0',
          'reference' => 'edc1bb7c86fab0776c3287dbd19b5fa278347319',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../league/flysystem',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' =>
        array (
          'pretty_version' => '3.29.0',
          'version' => '3.29.0.0',
          'reference' => 'e0e8d52ce4b2ed154148453d321e97c8e931bd27',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../league/flysystem-local',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' =>
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../league/mime-type-detection',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' =>
        array (
          'pretty_version' => '7.5.1',
          'version' => '7.5.1.0',
          'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../league/uri',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' =>
        array (
          'pretty_version' => '7.5.0',
          'version' => '7.5.0.0',
          'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../league/uri-interfaces',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' =>
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../mockery/mockery',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' =>
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../monolog/monolog',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' =>
        array (
          'pretty_version' => '1.13.1',
          'version' => '1.13.1.0',
          'reference' => '1720ddd719e16cf0db4eb1c6eca108031636d46c',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../myclabs/deep-copy',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' =>
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '6d16a8a015166fe54e22c042e0805c5363aef50d',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../nesbot/carbon',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' =>
        array (
          'pretty_version' => 'v1.3.2',
          'version' => '1.3.2.0',
          'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../nette/schema',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' =>
        array (
          'pretty_version' => 'v4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ce708655043c7050eb050df361c5e313cf708309',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../nette/utils',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' =>
        array (
          'pretty_version' => 'v5.4.0',
          'version' => '5.4.0.0',
          'reference' => '447a020a1f875a434d62f2a401f53b82a396e494',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../nikic/php-parser',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' =>
        array (
          'pretty_version' => 'v8.8.0',
          'version' => '8.8.0.0',
          'reference' => '4cf9f3b47afff38b139fb79ce54fc71799022ce8',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../nunomaduro/collision',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' =>
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '1042fa0c2ee490bb6da7381f3323f7292ad68222',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../nunomaduro/larastan',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' =>
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '52915afe6a1044e8b9cee1bcff836fb63acf9cda',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../nunomaduro/termwind',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' =>
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phar-io/manifest',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' =>
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phar-io/version',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' =>
        array (
          'pretty_version' => '1.9.3',
          'version' => '1.9.3.0',
          'reference' => 'e3fac8b24f56113f7cb96af14958c0dd16330f54',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpoption/phpoption',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' =>
        array (
          'pretty_version' => '2.1.13',
          'version' => '2.1.13.0',
          'reference' => 'e55e03e6d4ac49cd1240907e5b08e5cd378572a9',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpstan/phpstan',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' =>
        array (
          'pretty_version' => '11.0.9',
          'version' => '11.0.9.0',
          'reference' => '14d63fbcca18457e49c6f8bebaa91a87e8e188d7',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpunit/php-code-coverage',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' =>
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpunit/php-file-iterator',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' =>
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpunit/php-invoker',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' =>
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpunit/php-text-template',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' =>
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpunit/php-timer',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' =>
        array (
          'pretty_version' => '11.5.18',
          'version' => '11.5.18.0',
          'reference' => 'fc3e887c7f3f9917e1bf61e523413d753db00a17',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../phpunit/phpunit',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' =>
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/clock',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' =>
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/container',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' =>
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/event-dispatcher',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' =>
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/http-client',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' =>
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/http-factory',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' =>
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/http-message',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' =>
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/log',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' =>
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psr/simple-cache',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' =>
        array (
          'pretty_version' => 'v0.12.8',
          'version' => '0.12.8.0',
          'reference' => '85057ceedee50c49d4f6ecaff73ee96adb3b3625',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../psy/psysh',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' =>
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../ralouphie/getallheaders',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' =>
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../ramsey/collection',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' =>
        array (
          'pretty_version' => '4.7.6',
          'version' => '4.7.6.0',
          'reference' => '91039bc1faa45ba123c4328958e620d382ec7088',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../ramsey/uuid',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => '4.7.6',
          ),
        ),
        'sebastian/cli-parser' =>
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/cli-parser',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' =>
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/code-unit',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' =>
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' =>
        array (
          'pretty_version' => '6.3.1',
          'version' => '6.3.1.0',
          'reference' => '24b8fbc2c8e201bb1308e7b05148d6ab393b6959',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/comparator',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' =>
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/complexity',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' =>
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/diff',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' =>
        array (
          'pretty_version' => '7.2.0',
          'version' => '7.2.0.0',
          'reference' => '855f3ae0ab316bbafe1ba4e16e9f3c078d24a0c5',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/environment',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' =>
        array (
          'pretty_version' => '6.3.0',
          'version' => '6.3.0.0',
          'reference' => '3473f61172093b2da7de1fb5782e1f24cc036dc3',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/exporter',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' =>
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/global-state',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' =>
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/lines-of-code',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' =>
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/object-enumerator',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' =>
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/object-reflector',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' =>
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '694d156164372abbd149a4b85ccda2e4670c0e16',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/recursion-context',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' =>
        array (
          'pretty_version' => '5.1.2',
          'version' => '5.1.2.0',
          'reference' => 'a8a7e30534b0eb0c77cd9d07e82de1a114389f5e',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/type',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' =>
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../sebastian/version',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' =>
        array (
          'dev_requirement' => false,
          'replaced' =>
          array (
            0 => '*',
          ),
        ),
        'srmklive/paypal' =>
        array (
          'pretty_version' => '3.0.40',
          'version' => '3.0.40.0',
          'reference' => '1ddc49fd836a4785933ab953452152f3fedbac63',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../srmklive/paypal',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'staabm/side-effects-detector' =>
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../staabm/side-effects-detector',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' =>
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/clock',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' =>
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => 'e51498ea18570c062e7df29d05a7003585b19b88',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/console',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' =>
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/css-selector',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' =>
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '74c71c939a79f7d5bf3c1ce9f5ea37ba0114c6f6',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/deprecation-contracts',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' =>
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '102be5e6a8e4f4f3eb3149bcbfa33a80d1ee374b',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/error-handler',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' =>
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '910c5db85a5356d0fea57680defec4e99eb9c8c1',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/event-dispatcher',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' =>
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '7642f5e970b672283b7823222ae8ef8bbc160b9f',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' =>
        array (
          'pretty_version' => 'v7.2.2',
          'version' => '7.2.2.0',
          'reference' => '87a71856f2f56e4100373e92529eed3171695cfb',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/finder',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' =>
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '371272aeb6286f8135e028ca535f8e4d6f114126',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/http-foundation',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' =>
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => 'b1fe91bc1fa454a806d3f98db4ba826eb9941a54',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/http-kernel',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' =>
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'f3871b182c44997cf039f3b462af4a48fb85f9d3',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/mailer',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' =>
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '87ca22046b78c3feaff04b337f33b38510fd686b',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/mime',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-ctype',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'c36586dcf89a12315939e00ec9b4474adcb1d773',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-php80',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '2fb86d65e2d424369ad2905e83b236a8805ba491',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-php83',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' =>
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/polyfill-uuid',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' =>
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '87b7c93e57df9d8e39a093d32587702380ff045d',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/process',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' =>
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'ee9a67edc6baa33e5fae662f94f91fd262930996',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/routing',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' =>
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => 'e53260aabf78fb3d63f8d79d69ece59f80d5eda0',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/service-contracts',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' =>
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '446e0d146f991dde3e73f45f2c97a9faad773c82',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/string',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' =>
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '283856e6981286cc0d800b53bd5703e8e363f05a',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/translation',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' =>
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '4667ff3bd513750603a09c8dedbea942487fb07c',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/translation-contracts',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' =>
        array (
          'dev_requirement' => false,
          'provided' =>
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' =>
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '2d294d0c48df244c71c105a169d0190bfb080426',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/uid',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' =>
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => '82b478c69745d8878eb60f9a049a4d584996f73a',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/var-dumper',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' =>
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '4c4b6f4cfcd7e52053f0c8bfad0f7f30fb924912',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../symfony/yaml',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' =>
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../theseer/tokenizer',
          'aliases' =>
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' =>
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' =>
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../vlucas/phpdotenv',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' =>
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../voku/portable-ascii',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' =>
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/Users/mantum/Documents/test-paypal/vendor/composer/../webmozart/assert',
          'aliases' =>
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' =>
  array (
    '/Users/mantum/Documents/test-paypal/vendor/nunomaduro/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///Users/mantum/Documents/test-paypal/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///Users/mantum/Documents/test-paypal/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/mantum/Documents/test-paypal/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/mantum/Documents/test-paypal/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' =>
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'PDO_ODBC',
    4 => 'Phar',
    5 => 'Reflection',
    6 => 'SPL',
    7 => 'SimpleXML',
    8 => 'Zend OPcache',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dba',
    16 => 'dom',
    17 => 'exif',
    18 => 'fileinfo',
    19 => 'filter',
    20 => 'ftp',
    21 => 'gd',
    22 => 'gettext',
    23 => 'gmp',
    24 => 'hash',
    25 => 'iconv',
    26 => 'intl',
    27 => 'json',
    28 => 'ldap',
    29 => 'libxml',
    30 => 'mbstring',
    31 => 'mysqli',
    32 => 'mysqlnd',
    33 => 'odbc',
    34 => 'openssl',
    35 => 'pcntl',
    36 => 'pcre',
    37 => 'pdo_dblib',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'random',
    44 => 'readline',
    45 => 'session',
    46 => 'shmop',
    47 => 'snmp',
    48 => 'soap',
    49 => 'sockets',
    50 => 'sodium',
    51 => 'sqlite3',
    52 => 'standard',
    53 => 'sysvmsg',
    54 => 'sysvsem',
    55 => 'sysvshm',
    56 => 'tidy',
    57 => 'tokenizer',
    58 => 'xml',
    59 => 'xmlreader',
    60 => 'xmlwriter',
    61 => 'xsl',
    62 => 'zip',
    63 => 'zlib',
  ),
  'stubFiles' =>
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php' =>
  array (
    0 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\TransactionController::show() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
    1 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\TransactionController::topupForm() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 98,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
    2 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\TransactionController::createOrder() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'line' => 116,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 116,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
    3 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\TransactionController::paypalSuccess() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 152,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
    4 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\TransactionController::paypalCancel() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'line' => 178,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 178,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php' =>
  array (
    0 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\WebhookController::handle() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php' =>
  array (
    0 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Services\\PayPalService::$provider has no type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' =>
      array (
      ),
    )),
    1 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $response of method Srmklive\\PayPal\\Services\\PayPal::setAccessToken() expects array, array|Psr\\Http\\Message\\StreamInterface|string given.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' =>
      array (
      ),
    )),
    2 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Services\\PayPalService::createOrder() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
    3 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Services\\PayPalService::captureOrder() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
    4 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Services\\PayPalService::getOrderDetails() has no return type specified.',
       'file' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/tests/Unit/ExampleTest.php' =>
  array (
    0 =>
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method PHPUnit\\Framework\\Assert::assertTrue() with true will always evaluate to true.',
       'file' => '/Users/mantum/Documents/test-paypal/tests/Unit/ExampleTest.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/mantum/Documents/test-paypal/tests/Unit/ExampleTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.alreadyNarrowedType',
       'metadata' =>
      array (
      ),
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/mantum/Documents/test-paypal/app/Console/Commands/Start.php' =>
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' =>
    array (
      0 =>
      array (
        0 => 'Illuminate\\Console\\Command',
        1 => '__construct',
        2 => 31,
      ),
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/Registry.php' =>
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' =>
    array (
      0 => 'App\\DTO\\Registry',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' =>
    array (
      0 =>
      array (
        0 => 'App\\DTO\\Registry',
        1 => 'getId',
        2 => 'App\\DTO\\Registry',
      ),
      1 =>
      array (
        0 => 'App\\DTO\\Registry',
        1 => 'getCreatedAt',
        2 => 'App\\DTO\\Registry',
      ),
      2 =>
      array (
        0 => 'App\\DTO\\Registry',
        1 => 'getUpdatedAt',
        2 => 'App\\DTO\\Registry',
      ),
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/Transaction.php' =>
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' =>
    array (
      0 =>
      array (
        0 => 'App\\DTO\\Transaction',
        1 => 'getTransactionId',
        2 => 'App\\DTO\\Transaction',
      ),
      1 =>
      array (
        0 => 'App\\DTO\\Transaction',
        1 => 'getStatus',
        2 => 'App\\DTO\\Transaction',
      ),
      2 =>
      array (
        0 => 'App\\DTO\\Transaction',
        1 => 'getAmount',
        2 => 'App\\DTO\\Transaction',
      ),
      3 =>
      array (
        0 => 'App\\DTO\\Transaction',
        1 => 'getUserId',
        2 => 'App\\DTO\\Transaction',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' =>
    array (
      0 =>
      array (
        0 => 'App\\DTO\\Registry',
        1 => '__construct',
        2 => 29,
      ),
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/User.php' =>
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' =>
    array (
      0 =>
      array (
        0 => 'App\\DTO\\User',
        1 => 'getName',
        2 => 'App\\DTO\\User',
      ),
      1 =>
      array (
        0 => 'App\\DTO\\User',
        1 => 'getEmail',
        2 => 'App\\DTO\\User',
      ),
      2 =>
      array (
        0 => 'App\\DTO\\User',
        1 => 'getPassword',
        2 => 'App\\DTO\\User',
      ),
      3 =>
      array (
        0 => 'App\\DTO\\User',
        1 => 'getBalance',
        2 => 'App\\DTO\\User',
      ),
      4 =>
      array (
        0 => 'App\\DTO\\User',
        1 => 'getTransactions',
        2 => 'App\\DTO\\User',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' =>
    array (
      0 =>
      array (
        0 => 'App\\DTO\\Registry',
        1 => '__construct',
        2 => 34,
      ),
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php' =>
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' =>
    array (
      0 => 'transaction',
      1 => 'topup',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' =>
    array (
      0 => 'App\\Http\\Controllers\\TransactionController',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Models/User.php' =>
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' =>
    array (
      0 =>
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' =>
    array (
      0 =>
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 =>
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/TransactionService.php' =>
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' =>
    array (
      0 =>
      array (
        0 =>
        array (
          0 => 'App\\DTO\\Registry',
        ),
        1 => 'setId',
        2 => 90,
      ),
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/UserService.php' =>
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' =>
    array (
      0 =>
      array (
        0 =>
        array (
          0 => 'App\\DTO\\Registry',
        ),
        1 => 'setId',
        2 => 85,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' =>
    array (
      0 =>
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 100,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/Users/mantum/Documents/test-paypal/app/Console/Commands/Start.php' =>
  array (
    'fileHash' => '5cb98d7bc7dc46c293d90ba848ea7f1f0c511751',
    'dependentFiles' =>
    array (
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/Registry.php' =>
  array (
    'fileHash' => '56d600e2ab463460e17e2d3f531cb8d7b984fbed',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/DTO/Transaction.php',
      1 => '/Users/mantum/Documents/test-paypal/app/DTO/User.php',
      2 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
      3 => '/Users/mantum/Documents/test-paypal/app/Services/TransactionService.php',
      4 => '/Users/mantum/Documents/test-paypal/app/Services/UserService.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/Transaction.php' =>
  array (
    'fileHash' => 'a78c4b4061d082076a7939a1b4bb19c193797212',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/DTO/User.php',
      1 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
      2 => '/Users/mantum/Documents/test-paypal/app/Services/TransactionService.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/User.php' =>
  array (
    'fileHash' => '6c3a7f28c9b148fb7b7ca6955714416136e3ea24',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
      1 => '/Users/mantum/Documents/test-paypal/app/Services/UserService.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/Controller.php' =>
  array (
    'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
      1 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php' =>
  array (
    'fileHash' => '5ed51b7a9f4dca702f9029061ac1270e38d9ef7e',
    'dependentFiles' =>
    array (
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php' =>
  array (
    'fileHash' => 'a12ba4b933178a27670bb53b16429abb15e8e291',
    'dependentFiles' =>
    array (
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Models/Transaction.php' =>
  array (
    'fileHash' => '25488bddf6b85b8db9028e507560f4137167f40e',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php',
      1 => '/Users/mantum/Documents/test-paypal/app/Services/TransactionService.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Models/User.php' =>
  array (
    'fileHash' => '27b24efbb1602f95863cc5fde8f9e10b9aab7b95',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/Services/UserService.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Providers/AppServiceProvider.php' =>
  array (
    'fileHash' => '01bf9e5cf5bb666446625056b618445ae4749675',
    'dependentFiles' =>
    array (
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php' =>
  array (
    'fileHash' => '071a0e3cd503ffd23da9e6c52b3378edc49e378c',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/TransactionService.php' =>
  array (
    'fileHash' => '505b2ed5b840eaf88b40067a95570432a880d9f5',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/UserService.php' =>
  array (
    'fileHash' => 'd09e3d1c41b713cf0dffb897a4337eb73f3bfa5b',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/app/Console/Commands/Start.php',
      1 => '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/tests/Feature/ExampleTest.php' =>
  array (
    'fileHash' => '20fb4281ed2dc142624c4b61bf49e5ab347b73ff',
    'dependentFiles' =>
    array (
    ),
  ),
  '/Users/mantum/Documents/test-paypal/tests/TestCase.php' =>
  array (
    'fileHash' => '5f6caea662bb5a5fc2e674f9cffcc9e5fff09a94',
    'dependentFiles' =>
    array (
      0 => '/Users/mantum/Documents/test-paypal/tests/Feature/ExampleTest.php',
    ),
  ),
  '/Users/mantum/Documents/test-paypal/tests/Unit/ExampleTest.php' =>
  array (
    'fileHash' => '91a952d5ada8d3d11d059d9ad547e83f37785842',
    'dependentFiles' =>
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/mantum/Documents/test-paypal/app/Console/Commands/Start.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\Start',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' =>
          array (
            0 => 'signature',
          ),
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' =>
            array (
              'userservice' => 'App\\Services\\UserService',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' =>
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' =>
          array (
            0 => 'description',
          ),
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' =>
            array (
              'userservice' => 'App\\Services\\UserService',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' =>
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userService',
               'type' => 'App\\Services\\UserService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' =>
            array (
              'userservice' => 'App\\Services\\UserService',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/Registry.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\DTO\\Registry',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setId',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param int|null $id
     * @return Registry
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getId',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return int|null
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?int',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setCreatedAt',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $createdAt
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        4 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCreatedAt',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string|null
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        5 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setUpdatedAt',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $updatedAt
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        6 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUpdatedAt',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string|null
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        7 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/Transaction.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\DTO\\Transaction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\DTO\\Registry',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTransactionId',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setTransactionId',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $transactionId
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transactionId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatus',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        4 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setStatus',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $status
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        5 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAmount',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return float
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        6 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setAmount',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param float $amount
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'amount',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        7 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUserId',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return int
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        8 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setUserId',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param int $userId
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        9 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toCreate',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        10 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toUpdate',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        11 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/DTO/User.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\DTO\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\DTO\\Registry',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setName',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $name
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEmail',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        4 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setEmail',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $email
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        5 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPassword',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        6 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setPassword',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $password
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'password',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        7 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBalance',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return float
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        8 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setBalance',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param float $balance
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'balance',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        9 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTransactions',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<Transaction>
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        10 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setTransactions',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param Transaction[] ...$transactions
     * @return void
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transactions',
               'type' => 'App\\DTO\\Transaction',
               'byRef' => false,
               'variadic' => true,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        11 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'increment',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param float $amount
     * @return float
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'amount',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        12 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toUpdate',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        13 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\DTO',
             'uses' =>
            array (
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/Controller.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/TransactionController.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\TransactionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param PayPalService $payPalService
     * @param UserService $userService
     * @param TransactionService $transactionService
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'paypalservice' => 'App\\Services\\PayPalService',
              'transactionservice' => 'App\\Services\\TransactionService',
              'userservice' => 'App\\Services\\UserService',
              'request' => 'Illuminate\\Http\\Request',
              'transactiondto' => 'App\\DTO\\Transaction',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'payPalService',
               'type' => 'App\\Services\\PayPalService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
            1 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userService',
               'type' => 'App\\Services\\UserService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
            2 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transactionService',
               'type' => 'App\\Services\\TransactionService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Muestra el formulario para consultar una transacción.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'paypalservice' => 'App\\Services\\PayPalService',
              'transactionservice' => 'App\\Services\\TransactionService',
              'userservice' => 'App\\Services\\UserService',
              'request' => 'Illuminate\\Http\\Request',
              'transactiondto' => 'App\\DTO\\Transaction',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Consulta el estado de una transacción por ID usando la API de PayPal.
     * @param Request $request
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'paypalservice' => 'App\\Services\\PayPalService',
              'transactionservice' => 'App\\Services\\TransactionService',
              'userservice' => 'App\\Services\\UserService',
              'request' => 'Illuminate\\Http\\Request',
              'transactiondto' => 'App\\DTO\\Transaction',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'topupForm',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Muestra el formulario para ingresar monto y redirige a PayPal.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'paypalservice' => 'App\\Services\\PayPalService',
              'transactionservice' => 'App\\Services\\TransactionService',
              'userservice' => 'App\\Services\\UserService',
              'request' => 'Illuminate\\Http\\Request',
              'transactiondto' => 'App\\DTO\\Transaction',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        4 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createOrder',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Crea una orden de pago en PayPal con el monto ingresado.
     * @param Request $request
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'paypalservice' => 'App\\Services\\PayPalService',
              'transactionservice' => 'App\\Services\\TransactionService',
              'userservice' => 'App\\Services\\UserService',
              'request' => 'Illuminate\\Http\\Request',
              'transactiondto' => 'App\\DTO\\Transaction',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        5 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'paypalSuccess',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Procesa el pago exitoso en PayPal.
     * @param Request $request
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'paypalservice' => 'App\\Services\\PayPalService',
              'transactionservice' => 'App\\Services\\TransactionService',
              'userservice' => 'App\\Services\\UserService',
              'request' => 'Illuminate\\Http\\Request',
              'transactiondto' => 'App\\DTO\\Transaction',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        6 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'paypalCancel',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Procesa el pago cancelado en PayPal.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'paypalservice' => 'App\\Services\\PayPalService',
              'transactionservice' => 'App\\Services\\TransactionService',
              'userservice' => 'App\\Services\\UserService',
              'request' => 'Illuminate\\Http\\Request',
              'transactiondto' => 'App\\DTO\\Transaction',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Http/Controllers/WebhookController.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\WebhookController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle webhook de PayPal
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' =>
            array (
              'transaction' => 'App\\Models\\Transaction',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Models/Transaction.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Transaction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' =>
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Models/User.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' =>
          array (
            0 => 'fillable',
          ),
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' =>
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' =>
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' =>
          array (
            0 => 'hidden',
          ),
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' =>
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' =>
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' =>
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Providers/AppServiceProvider.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' =>
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' =>
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/PayPalService.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\PayPalService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' =>
          array (
            0 => 'provider',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createOrder',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Se encarga de crear la orden en PayPal
     * @param float $amount
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'paypalclient' => 'Srmklive\\PayPal\\Services\\PayPal',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'amount',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'captureOrder',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Se encarga de capturar la orden en PayPal
     * @param string $orderId
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'paypalclient' => 'Srmklive\\PayPal\\Services\\PayPal',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'orderId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        4 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getOrderDetails',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Se encarga de consultar el estado de la orden en PayPal
     * @param string $orderId
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'paypalclient' => 'Srmklive\\PayPal\\Services\\PayPal',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'orderId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/TransactionService.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\TransactionService',
       'phpDoc' =>
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Servicio que maneja todas las transacciones en el sistema
 *
 * @author Mariana Ortega
 * @version 1.0
 */',
         'namespace' => 'App\\Services',
         'uses' =>
        array (
          'transform' => 'App\\DTO\\Transaction',
          'model' => 'App\\Models\\Transaction',
          'exception' => 'Exception',
        ),
         'constUses' =>
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Registra un usuario en la base de datos
     * @param Transform $data
     * @return Transform
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\Transaction',
              'model' => 'App\\Models\\Transaction',
              'exception' => 'Exception',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\DTO\\Transaction',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'App\\DTO\\Transaction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Actualiza una transacción en la base de datos
     * @param Transform $transform
     * @return Transform
     * @throws Exception
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\Transaction',
              'model' => 'App\\Models\\Transaction',
              'exception' => 'Exception',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\DTO\\Transaction',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transform',
               'type' => 'App\\DTO\\Transaction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByTransaction',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Obtiene una transacción por su id
     * @param string $id
     * @return Transform|null
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\Transaction',
              'model' => 'App\\Models\\Transaction',
              'exception' => 'Exception',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\DTO\\Transaction',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByUser',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Obtiene las transacciones de un usuario
     * @param int $id
     * @return array<Transform>
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\Transaction',
              'model' => 'App\\Models\\Transaction',
              'exception' => 'Exception',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/app/Services/UserService.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\UserService',
       'phpDoc' =>
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Servicio que maneja todos los usuarios en el sistema
 *
 * @author Mariana Ortega
 * @version 1.0
 */',
         'namespace' => 'App\\Services',
         'uses' =>
        array (
          'transform' => 'App\\DTO\\User',
          'model' => 'App\\Models\\User',
          'exception' => 'Exception',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
        ),
         'constUses' =>
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'DEFAULT_USER',
               'value' => '\'Judacru\'',
               'attributes' =>
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Actualiza un usuario en la base de datos
     *
     * @throws Exception
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\User',
              'model' => 'App\\Models\\User',
              'exception' => 'Exception',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\DTO\\User',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transform',
               'type' => 'App\\DTO\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        2 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Obtiene un usuario por su id
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\User',
              'model' => 'App\\Models\\User',
              'exception' => 'Exception',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\DTO\\User',
           'parameters' =>
          array (
            0 =>
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' =>
              array (
              ),
            )),
          ),
           'attributes' =>
          array (
          ),
        )),
        3 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUserMe',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Obtiene la cuenta de usuario autenticada
     *
     * @return Transform
     * @throws Exception
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\User',
              'model' => 'App\\Models\\User',
              'exception' => 'Exception',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\DTO\\User',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
        4 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'start',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Inicializa la cuenta de usuario por defecto
     */',
             'namespace' => 'App\\Services',
             'uses' =>
            array (
              'transform' => 'App\\DTO\\User',
              'model' => 'App\\Models\\User',
              'exception' => 'Exception',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/tests/Feature/ExampleTest.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\ExampleTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_the_application_returns_a_successful_response',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A basic test example.
     */',
             'namespace' => 'Tests\\Feature',
             'uses' =>
            array (
              'testcase' => 'Tests\\TestCase',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/tests/TestCase.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\TestCase',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Testing\\TestCase',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
  '/Users/mantum/Documents/test-paypal/tests/Unit/ExampleTest.php' =>
  array (
    0 =>
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Unit\\ExampleTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'PHPUnit\\Framework\\TestCase',
       'implements' =>
      array (
      ),
       'usedTraits' =>
      array (
      ),
       'traitUseAdaptations' =>
      array (
      ),
       'statements' =>
      array (
        0 =>
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_that_true_is_true',
           'phpDoc' =>
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A basic test example.
     */',
             'namespace' => 'Tests\\Unit',
             'uses' =>
            array (
              'testcase' => 'PHPUnit\\Framework\\TestCase',
            ),
             'constUses' =>
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' =>
          array (
          ),
           'attributes' =>
          array (
          ),
        )),
      ),
       'attributes' =>
      array (
      ),
    )),
  ),
); },
];
