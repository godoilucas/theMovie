<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1256720050af800516096b9c38565d9b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PlugRoute\\' => 10,
            'PlugHttp\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PlugRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/erandir/plug-route/src',
        ),
        'PlugHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/erandir/plug-http/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\MovieController' => __DIR__ . '/../..' . '/app/Controllers/MovieController.php',
        'PlugHttp\\Body\\Advancer' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/Advancer.php',
        'PlugHttp\\Body\\Body' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/Body.php',
        'PlugHttp\\Body\\Content' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/Content.php',
        'PlugHttp\\Body\\FormData' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/FormData.php',
        'PlugHttp\\Body\\FormUrlEncoded' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/FormUrlEncoded.php',
        'PlugHttp\\Body\\Handler' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/Handler.php',
        'PlugHttp\\Body\\Json' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/Json.php',
        'PlugHttp\\Body\\Post' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/Post.php',
        'PlugHttp\\Body\\TextPlain' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/TextPlain.php',
        'PlugHttp\\Body\\XML' => __DIR__ . '/..' . '/erandir/plug-http/src/Body/XML.php',
        'PlugHttp\\Cookie' => __DIR__ . '/..' . '/erandir/plug-http/src/Cookie.php',
        'PlugHttp\\CreatorInterface' => __DIR__ . '/..' . '/erandir/plug-http/src/CreatorInterface.php',
        'PlugHttp\\Env' => __DIR__ . '/..' . '/erandir/plug-http/src/Env.php',
        'PlugHttp\\Factory\\Factory' => __DIR__ . '/..' . '/erandir/plug-http/src/Factory/Factory.php',
        'PlugHttp\\Factory\\FormDataFactory' => __DIR__ . '/..' . '/erandir/plug-http/src/Factory/FormDataFactory.php',
        'PlugHttp\\Factory\\FormUrlEncodedFactory' => __DIR__ . '/..' . '/erandir/plug-http/src/Factory/FormUrlEncodedFactory.php',
        'PlugHttp\\Factory\\JsonFactory' => __DIR__ . '/..' . '/erandir/plug-http/src/Factory/JsonFactory.php',
        'PlugHttp\\Factory\\PostFactory' => __DIR__ . '/..' . '/erandir/plug-http/src/Factory/PostFactory.php',
        'PlugHttp\\Factory\\TextPlainFactory' => __DIR__ . '/..' . '/erandir/plug-http/src/Factory/TextPlainFactory.php',
        'PlugHttp\\Factory\\XmlFactory' => __DIR__ . '/..' . '/erandir/plug-http/src/Factory/XmlFactory.php',
        'PlugHttp\\File' => __DIR__ . '/..' . '/erandir/plug-http/src/File.php',
        'PlugHttp\\Get' => __DIR__ . '/..' . '/erandir/plug-http/src/Get.php',
        'PlugHttp\\Globals\\Adder' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/Adder.php',
        'PlugHttp\\Globals\\GlobalCookie' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalCookie.php',
        'PlugHttp\\Globals\\GlobalEnv' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalEnv.php',
        'PlugHttp\\Globals\\GlobalFile' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalFile.php',
        'PlugHttp\\Globals\\GlobalGet' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalGet.php',
        'PlugHttp\\Globals\\GlobalInterface' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalInterface.php',
        'PlugHttp\\Globals\\GlobalRequest' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalRequest.php',
        'PlugHttp\\Globals\\GlobalServer' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalServer.php',
        'PlugHttp\\Globals\\GlobalSession' => __DIR__ . '/..' . '/erandir/plug-http/src/Globals/GlobalSession.php',
        'PlugHttp\\Request' => __DIR__ . '/..' . '/erandir/plug-http/src/Request.php',
        'PlugHttp\\Response' => __DIR__ . '/..' . '/erandir/plug-http/src/Response.php',
        'PlugHttp\\Server' => __DIR__ . '/..' . '/erandir/plug-http/src/Server.php',
        'PlugHttp\\Session' => __DIR__ . '/..' . '/erandir/plug-http/src/Session.php',
        'PlugHttp\\Utils\\ArrayUtil' => __DIR__ . '/..' . '/erandir/plug-http/src/Utils/ArrayUtil.php',
        'PlugHttp\\Utils\\ContentHelper' => __DIR__ . '/..' . '/erandir/plug-http/src/Utils/ContentHelper.php',
        'PlugRoute\\Callback\\Callback' => __DIR__ . '/..' . '/erandir/plug-route/src/Callback/Callback.php',
        'PlugRoute\\DynamicRoute' => __DIR__ . '/..' . '/erandir/plug-route/src/DynamicRoute.php',
        'PlugRoute\\Error' => __DIR__ . '/..' . '/erandir/plug-route/src/Error.php',
        'PlugRoute\\Helpers\\MatchHelper' => __DIR__ . '/..' . '/erandir/plug-route/src/Helpers/MatchHelper.php',
        'PlugRoute\\Helpers\\ValidateHelper' => __DIR__ . '/..' . '/erandir/plug-route/src/Helpers/ValidateHelper.php',
        'PlugRoute\\Http\\Request' => __DIR__ . '/..' . '/erandir/plug-route/src/Http/Request.php',
        'PlugRoute\\Http\\RequestCreator' => __DIR__ . '/..' . '/erandir/plug-route/src/Http/RequestCreator.php',
        'PlugRoute\\Http\\Response' => __DIR__ . '/..' . '/erandir/plug-route/src/Http/Response.php',
        'PlugRoute\\Middleware\\PlugRouteMiddleware' => __DIR__ . '/..' . '/erandir/plug-route/src/Middleware/PlugRouteMiddleware.php',
        'PlugRoute\\PlugRoute' => __DIR__ . '/..' . '/erandir/plug-route/src/PlugRoute.php',
        'PlugRoute\\Route' => __DIR__ . '/..' . '/erandir/plug-route/src/Route.php',
        'PlugRoute\\RouteAnalyzer' => __DIR__ . '/..' . '/erandir/plug-route/src/RouteAnalyzer.php',
        'PlugRoute\\RouteContainer' => __DIR__ . '/..' . '/erandir/plug-route/src/RouteContainer.php',
        'PlugRoute\\RouteManager' => __DIR__ . '/..' . '/erandir/plug-route/src/RouteManager.php',
        'PlugRoute\\RouteStorage' => __DIR__ . '/..' . '/erandir/plug-route/src/RouteStorage.php',
        'PlugRoute\\SimpleRoute' => __DIR__ . '/..' . '/erandir/plug-route/src/SimpleRoute.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1256720050af800516096b9c38565d9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1256720050af800516096b9c38565d9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1256720050af800516096b9c38565d9b::$classMap;

        }, null, ClassLoader::class);
    }
}
