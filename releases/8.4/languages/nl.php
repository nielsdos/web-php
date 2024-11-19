<?php

return [
    'common_header' => 'PHP 8.4 is een omvangrijke update van de PHP programmeertaal. Het bevat veel nieuwe functionaliteit, zoals property hooks, asymmetrische zichtbaarheid, een bijgewerkte DOM API, prestatieverbeteringen, bugfixes en meer consistentie.',
    'documentation' => 'Documentatie',
    'main_title' => 'Beschikbaar!',
    'main_subtitle' => 'PHP 8.4 is een omvangrijke update van de PHP programmeertaal.<br class="display-none-md"> Het bevat veel nieuwe functionaliteit, zoals property hooks, asymmetrische zichtbaarheid, een bijgewerkte DOM API, prestatieverbeteringen, bugfixes en meer consistentie.',
    'upgrade_now' => 'Upgrade nu naar PHP 8.4!',

    'property_hooks_title' => 'Property hooks',
    'property_hooks_description' => 'Property hooks geven ondersteuning voor berekende eigenschappen. Deze worden rechtstreeks ondersteund door IDEs en statische analyseprogramma’s, zonder dat documentatie blokken nodig zijn. Bovendien laten ze toe om waarden voor- of achteraf te verwerken zonder gebruik te maken van een getter of setter in de klasse.',
    'asymmetric_visibility_title' => 'Asymmetrische zichtbaarheid',
    'asymmetric_visibility_description' => 'De scope voor het schrijven naar een eigenschap kan nu onafhankelijk gecontroleerd worden ten opzichte van de scope om de eigenschap te lezen. Dit reduceert de nood voor repetitieve getter en setter methoden om de eigenschap bloot te stellen zonder aanpassing toe te laten buiten de klasse.',
    'deprecated_attribute_title' => '<code>#[\Deprecated]</code> attribuut',
    'deprecated_attribute_description' => 'Het nieuwe <code>#[\Deprecated]</code> attribuut maakt PHP’s bestaand uitfaseringsmechanisme beschikbaar voor gebruiker gedefinieerde functies, methoden en klasseconstanten.',
    'dom_additions_html5_title' => 'Nieuwe ext-dom functies en HTML5 ondersteuning',
    'dom_additions_html5_description' => '<p>Nieuwe DOM API met correcte ondersteuning voor de HTML 5 standaard, oplossingen voor verschillende lang bestaande compliance bugs in the DOM functionaliteit, en verschillende nieuwe functies om het werken met documenten eenvoudiger te maken.</p><p>De nieuwe DOM API is beschikbaar via de <code>Dom</code> namespace. Documenten die de nieuwe API willen gebruiken, kunnen aangemaakt worden via de <code>Dom\HTMLDocument</code> en <code>Dom\XMLDocument</code> klassen.</p>',
    'new_array_find_title' => 'Nieuwe <code>array_*()</code> functies',
    'new_array_find_description' => 'Nieuwe functies <a href="/manual/en/function.array-find.php"><code>array_find()</code></a>, <a href="/manual/en/function.array-find-key.php"><code>array_find_key()</code></a>, <a href="/manual/en/function.array-any.php"><code>array_any()</code></a>, en <a href="/manual/en/function.array-all.php"><code>array_all()</code></a> zijn nu beschikbaar.',
    'pdo_driver_specific_parsers_title' => 'PDO driver specifieke SQL parsers',
    'pdo_driver_specific_parsers_description' => 'Nieuwe subklassen <code>Pdo\Dblib</code>, <code>Pdo\Firebird</code>, <code>Pdo\MySql</code>, <code>Pdo\Odbc</code>, <code>Pdo\Sqlite</code> van <code>PDO</code> zijn nu beschikbaar.',
    'new_without_parentheses_title' => '<code>new MyClass()->method()</code> zonder haakjes',
    'new_without_parentheses_description' => 'Eigenschappen en methoden van een nieuw geïnstantieerd object kunnen nu opgevraagd worden zonder de <code>new</code> expressie tussen haakjes te zetten.',

    'new_classes_title' => 'Nieuwe klassen, interfaces en functies',
    'new_core_functions' => 'Nieuwe <code>request_parse_body()</code> functie.',
    'new_bcmath_functions' => 'Nieuwe <code>bcceil()</code>, <code>bcdivmod()</code>, <code>bcfloor()</code>, en <code>bcround()</code> functies.',
    'new_round_modes' => 'Nieuwe <code>RoundingMode</code> enum voor <code>round()</code> met 4 nieuwe afrondingsmodi <code>TowardsZero</code>, <code>AwayFromZero</code>, <code>NegativeInfinity</code>, en <code>PositiveInfinity</code>.',
    'new_date_functions' => 'Nieuwe <code>DateTime::createFromTimestamp()</code>, <code>DateTime::getMicrosecond()</code>, <code>DateTime::setMicrosecond()</code>, <code>DateTimeImmutable::createFromTimestamp()</code>, <code>DateTimeImmutable::getMicrosecond()</code>, en <code>DateTimeImmutable::setMicrosecond()</code> methoden.',
    'new_mb_functions' => 'Nieuwe <code>mb_trim()</code>, <code>mb_ltrim()</code>, <code>mb_rtrim()</code>, <code>mb_ucfirst()</code>, en <code>mb_lcfirst()</code> functies.',
    'new_pcntl_functions' => 'Nieuwe <code>pcntl_getcpu()</code>, <code>pcntl_getcpuaffinity()</code>, <code>pcntl_getqos_class()</code>, <code>pcntl_setns()</code>, en <code>pcntl_waitid()</code> functies.',
    'new_reflection_functions' => 'Nieuwe <code>ReflectionClassConstant::isDeprecated()</code>, <code>ReflectionGenerator::isClosed()</code>, en <code>ReflectionProperty::isDynamic()</code> methoden.',
    'new_standard_functions' => 'Nieuwe <code>http_get_last_response_headers()</code>, <code>http_clear_last_response_headers()</code>, en <code>fpow()</code> functies.',
    'new_xml_functions' => 'Nieuwe <code>XMLReader::fromStream()</code>, <code>XMLReader::fromUri()</code>, <code>XMLReader::fromString()</code>, <code>XMLWriter::toStream()</code>, <code>XMLWriter::toUri()</code>, en <code>XMLWriter::toMemory()</code> methoden.',

    'bc_title' => 'Uitfaseringen en neerwaarts incompatibele aanpassingen',
    'bc_pecl' => 'De IMAP, OCI8, PDO_OCI en pspell-extensies zijn ontbundeld en verplaatst naar PECL.',
    'bc_nullable_parameter_types' => 'Impliciet parameters als null definiëren is nu uitgefaseerd.',
    'bc_classname' => 'Gebruik van <code>_</code> als een klassenaam is nu uitgefaseerd.',
    'bc_zero_raised_to_negative_number' => 'Nul verheffen tot een negatieve macht is nu uitgefaseerd.',
    'bc_gmp' => '<code>GMP</code> klasse is nu final.',
    'bc_round' => 'Ongeldige modus doorgeven aan <code>round()</code> resulteert in een <code>ValueError</code>.',
    'bc_typed_constants' => 'Klasseconstanten van extensies <code>date</code>, <code>intl</code>, <code>pdo</code>, <code>reflection</code>, <code>spl</code>, <code>sqlite</code>, <code>xmlreader</code> hebben nu types.',
    'bc_mysqli_constants' => '<code>MYSQLI_SET_CHARSET_DIR</code>, <code>MYSQLI_STMT_ATTR_PREFETCH_ROWS</code>, <code>MYSQLI_CURSOR_TYPE_FOR_UPDATE</code>, <code>MYSQLI_CURSOR_TYPE_SCROLLABLE</code>, en <code>MYSQLI_TYPE_INTERVAL</code> constanten zijn verwijderd.',
    'bc_mysqli_functions' => '<code>mysqli_ping()</code>, <code>mysqli_kill()</code>, <code>mysqli_refresh()</code> functies, <code>mysqli::ping()</code>, <code>mysqli::kill()</code>, <code>mysqli::refresh()</code> methoden, en <code>MYSQLI_REFRESH_*</code> constanten zijn uitgefaseerd.',
    'bc_standard' => '<code>stream_bucket_make_writeable()</code> en <code>stream_bucket_new()</code> geven nu een instantie van <code>StreamBucket</code> terug in plaats van <code>stdClass</code>.',
    'bc_core' => '<a href="/manual/en/migration84.incompatible.php#migration84.incompatible.core.exit"><code>exit()</code> heeft ander gedrag</a>.',
    'bc_warnings' => '<code>E_STRICT</code> constante is uitgefaseerd.',

    'footer_title' => 'Betere prestaties, betere syntaxis, verbeterd type systeem.',
    'footer_description' => '<p>Ga naar de <a href="http://www.php.net/downloads">downloads</a> pagina om de PHP 8.4 code te verkrijgen. Uitvoerbare bestanden voor Windows kan je vinden op de <a href="http://windows.php.net/download">PHP voor Windows</a> website. De volledige lijst met wijzigingen is vastgelegd in een <a href="http://www.php.net/ChangeLog-8.php#PHP_8_4">ChangeLog</a>.</p>
        <p>De <a href="/manual/en/migration84.php">migratie gids</a> is beschikbaar in de PHP Handleiding. Gebruik deze om een gedetailleerde lijst te krijgen van nieuwe opties en neerwaarts incompatibele aanpassingen.</p>',
];
