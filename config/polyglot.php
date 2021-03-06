<?php

return [

    // Whether to swap out the facades (Router, Lang, etc) with
    // Polyglot's, disable this if you need other packages to do the same
    // Can specify an array of facades to swap, eg. ['Lang', 'URL']
    'facades' => true,

    // Locales
    ////////////////////////////////////////////////////////////////////

    // The default locale if none is provided in the URL
    // Leave empty to force the use of locales prefixes in URLs
    'default' => 'en',

    // The fallback locale for translations
    // If null, the default locale is used
    'fallback' => null,

    // The available locales
    'locales' => ['en'],

    // Gettext
    ////////////////////////////////////////////////////////////////////

    // The domain of your translations, for gettext use
    'domain' => 'messages',

    // Where the PO/MO files reside

    'folder' => base_path('resources/lang'),
    // Format of the compiled files
    'file' => '{domain}.po',

    // Database
    ////////////////////////////////////////////////////////////////////

    // The pattern Polyglot should follow to find the Lang classes
    // Examples are "Lang\{model}", "{model}Lang", where {model}
    // will be replaced by the model's name
    'model_pattern' => '{model}Lang',

];
