<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Banque' => $baseDir . '/app/lib/tresorerie/models/Banque.php',
    'BanqueController' => $baseDir . '/app/lib/tresorerie/controllers/BanqueController.php',
    'BanqueRepository' => $baseDir . '/app/lib/tresorerie/repos/BanqueRepository.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Cartalyst\\Sentry\\Groups\\GroupExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\NameRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserBannedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\LoginRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\WrongPasswordException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Compte' => $baseDir . '/app/lib/tresorerie/models/Compte.php',
    'CompteController' => $baseDir . '/app/lib/tresorerie/controllers/CompteController.php',
    'ComptesOld' => $baseDir . '/app/lib/divers/ComptesOld.php',
    'DashboardController' => $baseDir . '/app/lib/dashboard/DashboardController.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'Ecriture' => $baseDir . '/app/lib/frontend/tresorerie/models/Ecriture.php',
    'EcritureController' => $baseDir . '/app/lib/frontend/tresorerie/controllers/EcritureController.php',
    'EcritureRepository' => $baseDir . '/app/lib/frontend/tresorerie/repos/EcritureRepository.php',
    'IdentificationController' => $baseDir . '/app/lib/identification/IdentificationController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'Import' => $baseDir . '/app/lib/divers/imports/Import.php',
    'ImportController' => $baseDir . '/app/lib/divers/imports/ImportController.php',
    'JournalController' => $baseDir . '/app/lib/tresorerie/controllers/JournalController.php',
    'JournalRepository' => $baseDir . '/app/lib/tresorerie/repos/JournalRepository.php',
    'Lib\\Validations\\BanqueValidation' => $baseDir . '/app/lib/tresorerie/validations/BanqueValidation.php',
    'Lib\\Validations\\CompteValidation' => $baseDir . '/app/lib/tresorerie/validations/CompteValidation.php',
    'Lib\\Validations\\EcritureDoubleValidation' => $baseDir . '/app/lib/tresorerie/validations/EcritureDoubleValidation.php',
    'Lib\\Validations\\EcritureValidation' => $baseDir . '/app/lib/tresorerie/validations/EcritureValidation.php',
    'Lib\\Validations\\MenuValidation' => $baseDir . '/app/lib/menus/MenuValidation.php',
    'Lib\\Validations\\StatutValidation' => $baseDir . '/app/lib/tresorerie/validations/StatutValidation.php',
    'Lib\\Validations\\TypeValidation' => $baseDir . '/app/lib/tresorerie/validations/TypeValidation.php',
    'Lib\\Validations\\UtilisateurValidation' => $baseDir . '/app/lib/utilisateurs/UtilisateurValidation.php',
    'Lib\\Validations\\ValidationBase' => $baseDir . '/app/lib/shared/ValidationBase.php',
    'Lib\\Validations\\ValidationIdentification' => $baseDir . '/app/lib/identification/ValidationIdentification.php',
    'Lib\\Validations\\ValidationInterface' => $baseDir . '/app/lib/shared/ValidationInterface.php',
    'Menu' => $baseDir . '/app/lib/menus/Menu.php',
    'MenuController' => $baseDir . '/app/lib/menus/MenuController.php',
    'MenuRepository' => $baseDir . '/app/lib/menus/MenuRepository.php',
    'MigrationCartalystSentryInstallGroups' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
    'MigrationCartalystSentryInstallThrottle' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
    'MigrationCartalystSentryInstallUsers' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
    'MigrationCartalystSentryInstallUsersGroupsPivot' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
    'PointageController' => $baseDir . '/app/lib/frontend/tresorerie/controllers/PointageController.php',
    'PointageRepository' => $baseDir . '/app/lib/frontend/tresorerie/repos/PointageRepository.php',
    'PrevController' => $baseDir . '/app/lib/frontend/tresorerie/controllers/PrevController.php',
    'PrevRepository' => $baseDir . '/app/lib/frontend/tresorerie/repos/PrevRepository.php',
    'Role' => $baseDir . '/app/lib/backend/roles/role.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'Signe' => $baseDir . '/app/lib/tresorerie/models/Signe.php',
    'Statut' => $baseDir . '/app/lib/tresorerie/models/Statut.php',
    'StatutController' => $baseDir . '/app/lib/tresorerie/controllers/StatutController.php',
    'StatutRepository' => $baseDir . '/app/lib/tresorerie/repos/StatutRepository.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'Type' => $baseDir . '/app/lib/tresorerie/models/Type.php',
    'TypeController' => $baseDir . '/app/lib/tresorerie/controllers/TypeController.php',
    'Utilisateur' => $baseDir . '/app/lib/utilisateurs/Utilisateur.php',
    'UtilisateurController' => $baseDir . '/app/lib/utilisateurs/UtilisateurController.php',
    'Way\\Generators\\Generators\\ControllerGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ControllerGenerator.php',
    'Way\\Generators\\Generators\\FormDumperGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/FormDumperGenerator.php',
    'Way\\Generators\\Generators\\Generator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/Generator.php',
    'Way\\Generators\\Generators\\MigrationGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/MigrationGenerator.php',
    'Way\\Generators\\Generators\\ModelGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ModelGenerator.php',
    'Way\\Generators\\Generators\\RequestedCacheNotFound' => $vendorDir . '/way/generators/src/Way/Generators/Generators/Generator.php',
    'Way\\Generators\\Generators\\ResourceGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ResourceGenerator.php',
    'Way\\Generators\\Generators\\ScaffoldGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ScaffoldGenerator.php',
    'Way\\Generators\\Generators\\SeedGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/SeedGenerator.php',
    'Way\\Generators\\Generators\\TestGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/TestGenerator.php',
    'Way\\Generators\\Generators\\ViewGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ViewGenerator.php',
    'lib\\frontend\\tresorerie\\traits\\ModelTrait' => $baseDir . '/app/lib/frontend/tresorerie/traits/ModelTrait.php',
    'lib\\frontend\\tresorerie\\traits\\RepositoryTrait' => $baseDir . '/app/lib/frontend/tresorerie/traits/RepositoryTrait.php',
);
