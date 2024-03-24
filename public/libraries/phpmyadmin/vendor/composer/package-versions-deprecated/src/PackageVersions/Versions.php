<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'phpmyadmin/phpmyadmin';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/ca-bundle' => '1.4.1@3ce240142f6d59b808dd65c1f52f7a1c252e6cfd',
  'fig/http-message-util' => '1.1.5@9d94dc0154230ac39e5bf89398b324a86f63f765',
  'google/recaptcha' => '1.2.4@614f25a9038be4f3f2da7cbfd778dc5b357d2419',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.20.0@e592a3e06d1fa0d43988c7c7d9948ca836f644b6',
  'phpmyadmin/motranslator' => '5.3.1@d03b4d9c608e7265091bf6decc05323d16c7c047',
  'phpmyadmin/shapefile' => '3.0.2@c8240ec25d04c8d03ca83ab7eed7aec165b57a1e',
  'phpmyadmin/sql-parser' => '5.9.0@011fa18a4e55591fac6545a821921dd1d61c6984',
  'phpmyadmin/twig-i18n-extension' => '4.1.0@a514a2afd29717a2a68c298582cc2739e8edeed0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/http-factory' => '1.0.2@e616d01114759c4c489f93b099585439f795fe35',
  'psr/http-message' => '1.1@cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'slim/psr7' => '1.6.1@72d2b2bac94ab4575d369f605dbfafbe168d3163',
  'symfony/cache' => 'v5.4.36@a30f316214d908cf5874f700f3f3fb29ceee91ba',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v5.4.36@0a4f363dc2f13d2f871f917cc563796d9ddc78d1',
  'symfony/dependency-injection' => 'v5.4.36@cc1fb237cd0e6da33005062b13b8485deb6e4440',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/expression-language' => 'v5.4.35@d59441c10a5a73cd9d4d778b8253595a16f6716d',
  'symfony/filesystem' => 'v5.4.35@5a553607d4ffbfa9c0ab62facadea296c9db7086',
  'symfony/polyfill-ctype' => 'v1.29.0@ef4d7e442ca910c4764bce785146269b30cb5fc4',
  'symfony/polyfill-mbstring' => 'v1.29.0@9773676c8a1bb1f8d4340a62efe641cf76eda7ec',
  'symfony/polyfill-php73' => 'v1.29.0@21bd091060673a1177ae842c0ef8fe30893114d2',
  'symfony/polyfill-php80' => 'v1.29.0@87b68208d5c1188808dd7839ee1e6c8ec3b02f1b',
  'symfony/polyfill-php81' => 'v1.29.0@c565ad1e63f30e7477fc40738343c62b40bc672d',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/var-exporter' => 'v5.4.35@abb0a151b62d6b07e816487e20040464af96cae7',
  'twig/twig' => 'v3.8.0@9d15f0ac07f44dc4217883ec6ae02fd555c6f71d',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'williamdes/mariadb-mysql-kbs' => 'v1.2.14@d829a96ad07d79065fbc818a3bd01f2266c3890b',
  'amphp/amp' => 'v2.6.2@9d5100cebffa729aaffecd3ad25dc5aeea4f13bb',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'bacon/bacon-qr-code' => '2.0.8@8674e51bb65af933a5ffaf1c308a660387c35c22',
  'beberlei/assert' => 'v3.3.2@cb70015c04be1baee6f5f5c953703347c0ac1655',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'code-lts/u2f-php-server' => 'v1.2.1@6931a00f5feb0d923ea28d3e4816272536f45077',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/pcre' => '3.1.2@4775f35b2d70865807c89d32c8e7385b86eb0ace',
  'composer/semver' => '3.4.0@35e8d0af4486141bc745f23a29cc2091eb624a32',
  'composer/xdebug-handler' => '3.0.3@ced299686f41dce890debac69273b47ffe98a40c',
  'dasprid/enum' => '1.0.5@6faf451159fb8ba4126b925ed2d78acfce0dc016',
  'dealerdirect/phpcodesniffer-composer-installer' => 'v0.7.2@1c968e542d8843d7cd71de3c5c9c3ff3ad71a1db',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/coding-standard' => '9.0.2@35a2452c6025cb739c3244b3348bcd1604df07d1',
  'doctrine/deprecations' => '1.1.3@dfbaa3c2d2e9a9df1118213f3b8b0c597bb99fab',
  'doctrine/instantiator' => '1.5.0@0a0fa9780f5d4e507415a065172d26a98d02047b',
  'felixfbecker/advanced-json-rpc' => 'v3.2.1@b5f37dbff9a8ad360ca341f3240dc1c168b45447',
  'felixfbecker/language-server-protocol' => 'v1.5.2@6e82196ffd7c62f7794d778ca52b69feec9f2842',
  'fgrosse/phpasn1' => 'v2.5.0@42060ed45344789fb9f21f9f1864fc47b9e3507b',
  'league/uri' => '6.7.2@d3b50812dd51f3fbf176344cc2981db03d10fe06',
  'league/uri-interfaces' => '2.3.0@00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
  'myclabs/deep-copy' => '1.11.1@7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
  'netresearch/jsonmapper' => 'v4.4.1@132c75c7dd83e45353ebb9c6c9f591952995bbf0',
  'nikic/php-parser' => 'v4.18.0@1bcbb2179f97633e98bbbc87044ee2611c7d7999',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'paragonie/constant_time_encoding' => 'v2.6.3@58c3f47f650c94ec05a151692652a868995d2938',
  'phar-io/manifest' => '2.0.4@54750ef60c58e43759730615a392c31c80e23176',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'php-webdriver/webdriver' => '1.15.1@cd52d9342c5aa738c2e75a67e47a1b6df97154e8',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.8.2@153ae662783729388a584b4361f2545e4d841e3c',
  'phpmyadmin/coding-standard' => '3.0.0@d187e307c91518ce676ee91a81145dcc90b25d9f',
  'phpstan/extension-installer' => '1.3.1@f45734bfb9984c6c56c4486b71230355f066a58a',
  'phpstan/phpdoc-parser' => '1.26.0@231e3186624c03d7e7c890ec662b81e6b0405227',
  'phpstan/phpstan' => '1.10.60@95dcea7d6c628a3f2f56d091d8a0219485a86bbe',
  'phpstan/phpstan-phpunit' => '1.3.16@d5242a59d035e46774f2e634b374bc39ff62cb95',
  'phpstan/phpstan-webmozart-assert' => '1.2.4@d1ff28697bd4e1c9ef5d3f871367ce9092871fec',
  'phpunit/php-code-coverage' => '9.2.31@48c34b5d8d983006bd2adc2d0de92963b9155965',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.6.17@1a156980d78a6666721b7e8e8502fe210b587fcd',
  'pragmarx/google2fa' => 'v8.0.1@80c3d801b31fe165f8fe99ea085e0a37834e1be3',
  'pragmarx/google2fa-qrcode' => 'v2.1.1@0459a5d7bab06b11a09a365288d41a41d2afe63f',
  'psalm/plugin-phpunit' => '0.16.1@5dd3be04f37a857d52880ef6af2524a441dfef24',
  'psr/http-client' => '1.0.3@bb5906edc1c324c9a05aa0873d40117941e5fa90',
  'ramsey/collection' => '1.3.0@ad7475d1c9e70b190ecffc58f2d989416af339b4',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'roave/security-advisories' => 'dev-latest@83b3589bb774f27084c7f358c13f465d94afa036',
  'sebastian/cli-parser' => '1.0.2@2b56bea83a09de3ac06bb18b92f068e60cc6f50b',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.3@25f207c40d62b8b7aa32f5ab026c53561964053a',
  'sebastian/diff' => '4.0.6@ba01945089c3a293b01ba9badc29ad55b106b0bc',
  'sebastian/environment' => '5.1.5@830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
  'sebastian/exporter' => '4.0.6@78c00df8f170e02473b682df15bfcdacc3d32d72',
  'sebastian/global-state' => '5.0.7@bca7df1f32ee6fe93b4d4a9abbf69e13a4ada2c9',
  'sebastian/lines-of-code' => '1.0.4@e1e4a170560925c26d424b6a03aed157e7dcc5c5',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.5@e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.1@75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'slevomat/coding-standard' => '7.2.1@aff06ae7a84e4534bf6f821dc982a93a5d477c90',
  'spomky-labs/base64url' => 'v2.0.4@7752ce931ec285da4ed1f4c5aa27e45e097be61d',
  'spomky-labs/cbor-php' => 'v2.1.0@28e2712cfc0b48fae661a48ffc6896d7abe83684',
  'squizlabs/php_codesniffer' => '3.6.2@5e4e71592f69da17871dba6e80dd51bce74a351a',
  'symfony/console' => 'v5.4.36@39f75d9d73d0c11952fdcecf4877b4d0f62a8f6e',
  'symfony/polyfill-intl-grapheme' => 'v1.29.0@32a9da87d7b3245e09ac426c83d334ae9f06f80f',
  'symfony/polyfill-intl-normalizer' => 'v1.29.0@bc45c394692b948b4d383a08d7753968bed9a83d',
  'symfony/process' => 'v5.4.36@4fdf34004f149cc20b2f51d7d119aa500caad975',
  'symfony/string' => 'v5.4.36@4e232c83622bd8cd32b794216aa29d0d266d353b',
  'tecnickcom/tcpdf' => '6.6.5@5fce932fcee4371865314ab7f6c0d85423c5c7ce',
  'thecodingmachine/safe' => 'v1.3.3@a8ab0876305a4cdaef31b2350fcb9811b5608dbc',
  'theseer/tokenizer' => '1.2.3@737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
  'vimeo/psalm' => '4.30.0@d0bc6e25d89f649e4f36a534f330f8bb4643dd69',
  'web-auth/cose-lib' => 'v3.3.12@efa6ec2ba4e840bc1316a493973c9916028afeeb',
  'web-auth/metadata-service' => 'v3.3.12@ef40d2b7b68c4964247d13fab52e2fa8dbd65246',
  'web-auth/webauthn-lib' => 'v3.3.12@5ef9b21c8e9f8a817e524ac93290d08a9f065b33',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'phpmyadmin/phpmyadmin' => '5.2.1@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}