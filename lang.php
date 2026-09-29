<?php
/**
 * Central i18n layer.
 * - SUPPORTED_LANGS: languages available (URL prefix = language code)
 * - $ROUTES: page key => localized slug per language
 * - ui(): shared UI strings (header, footer)
 * - L(): localized internal URL for the current $lang
 */

const SUPPORTED_LANGS = ['en', 'es', 'fr'];
const BASE_URL = 'https://realestateinplayadelcarmen.com';

$LANG_META = [
    'en' => ['label' => 'EN', 'name' => 'English',  'locale' => 'en_US'],
    'es' => ['label' => 'ES', 'name' => 'Español',  'locale' => 'es_MX'],
    'fr' => ['label' => 'FR', 'name' => 'Français', 'locale' => 'fr_FR'],
];

$ROUTES = [
    'home'         => ['en' => '',                 'es' => '',                  'fr' => ''],
    'properties'   => ['en' => 'properties',       'es' => 'propiedades',       'fr' => 'proprietes'],
    'neighborhoods'=> ['en' => 'neighborhoods',    'es' => 'barrios',           'fr' => 'quartiers'],
    'investment'   => ['en' => 'investment-guide', 'es' => 'guia-de-inversion', 'fr' => 'guide-investissement'],
    'about'        => ['en' => 'about',            'es' => 'nosotros',          'fr' => 'a-propos'],
    'contact'      => ['en' => 'contact',          'es' => 'contacto',          'fr' => 'contact'],
    '404'          => ['en' => '',                 'es' => '',                  'fr' => ''],
];

function route_url(string $key, string $lang): string
{
    global $ROUTES;
    $slug = $ROUTES[$key][$lang] ?? '';
    return '/' . $lang . '/' . $slug;
}

/** Localized URL for the current page language. */
function L(string $key): string
{
    return route_url($key, $GLOBALS['lang'] ?? 'en');
}

$UI = [
    'en' => [
        'nav_home' => 'Home',
        'nav_properties' => 'Properties',
        'nav_neighborhoods' => 'Neighborhoods',
        'nav_investment' => 'Investment Guide',
        'nav_about' => 'About',
        'nav_contact' => 'Contact',
        'nav_blog' => 'Blog',
        'cta_touch' => 'Get in Touch',
        'aria_home' => 'Real Estate in Playa del Carmen - Home',
        'aria_nav' => 'Main navigation',
        'aria_call' => 'Call us',
        'aria_menu' => 'Toggle menu',
        'aria_lang' => 'Choose language',
        'default_title' => 'Real Estate in Playa del Carmen | Condos, Villas & Investment Properties in Mexico',
        'default_desc' => 'Buy your dream property in Playa del Carmen with a local, English-speaking real estate team. Condos, villas and investment properties in the Riviera Maya.',
        'schema_desc' => 'Real estate agency for condos, villas and investment properties in Playa del Carmen and the Riviera Maya, Mexico.',
        'footer_about' => 'Your local, English-speaking real estate team for condos, villas and investment properties across Playa del Carmen and the Riviera Maya.',
        'footer_explore' => 'Explore',
        'footer_all_props' => 'All Properties',
        'footer_company' => 'Company',
        'footer_about_us' => 'About Us',
        'footer_contact_h' => 'Contact',
        'footer_address' => 'Calle 24, Playa del Carmen, Quintana Roo, Mexico',
        'footer_rights' => 'All rights reserved.',
        'footer_disclaimer' => 'Independent real estate advisory — not affiliated with any government entity.',
    ],
    'es' => [
        'nav_home' => 'Inicio',
        'nav_properties' => 'Propiedades',
        'nav_neighborhoods' => 'Barrios',
        'nav_investment' => 'Guía de inversión',
        'nav_about' => 'Nosotros',
        'nav_contact' => 'Contacto',
        'nav_blog' => 'Blog',
        'cta_touch' => 'Contáctanos',
        'aria_home' => 'Real Estate in Playa del Carmen - Inicio',
        'aria_nav' => 'Navegación principal',
        'aria_call' => 'Llámanos',
        'aria_menu' => 'Abrir o cerrar el menú',
        'aria_lang' => 'Elegir idioma',
        'default_title' => 'Bienes Raíces en Playa del Carmen | Departamentos, Villas e Inversión en México',
        'default_desc' => 'Compra la propiedad de tus sueños en Playa del Carmen con un equipo inmobiliario local y bilingüe. Departamentos, villas y propiedades de inversión en la Riviera Maya.',
        'schema_desc' => 'Agencia inmobiliaria de departamentos, villas y propiedades de inversión en Playa del Carmen y la Riviera Maya, México.',
        'footer_about' => 'Tu equipo inmobiliario local y bilingüe para departamentos, villas y propiedades de inversión en Playa del Carmen y la Riviera Maya.',
        'footer_explore' => 'Explorar',
        'footer_all_props' => 'Todas las propiedades',
        'footer_company' => 'Empresa',
        'footer_about_us' => 'Sobre nosotros',
        'footer_contact_h' => 'Contacto',
        'footer_address' => 'Calle 24, Playa del Carmen, Quintana Roo, México',
        'footer_rights' => 'Todos los derechos reservados.',
        'footer_disclaimer' => 'Asesoría inmobiliaria independiente — sin afiliación a ninguna entidad gubernamental.',
    ],
    'fr' => [
        'nav_home' => 'Accueil',
        'nav_properties' => 'Propriétés',
        'nav_neighborhoods' => 'Quartiers',
        'nav_investment' => "Guide d'investissement",
        'nav_about' => 'À propos',
        'nav_contact' => 'Contact',
        'nav_blog' => 'Blog',
        'cta_touch' => 'Nous contacter',
        'aria_home' => 'Real Estate in Playa del Carmen - Accueil',
        'aria_nav' => 'Navigation principale',
        'aria_call' => 'Appelez-nous',
        'aria_menu' => 'Ouvrir ou fermer le menu',
        'aria_lang' => 'Choisir la langue',
        'default_title' => 'Immobilier à Playa del Carmen | Condos, Villas et Investissement au Mexique',
        'default_desc' => "Achetez la propriété de vos rêves à Playa del Carmen avec une équipe immobilière locale et multilingue. Condos, villas et biens d'investissement dans la Riviera Maya.",
        'schema_desc' => "Agence immobilière spécialisée en condos, villas et biens d'investissement à Playa del Carmen et dans la Riviera Maya, Mexique.",
        'footer_about' => "Votre équipe immobilière locale et multilingue pour condos, villas et biens d'investissement à Playa del Carmen et dans la Riviera Maya.",
        'footer_explore' => 'Explorer',
        'footer_all_props' => 'Toutes les propriétés',
        'footer_company' => 'Entreprise',
        'footer_about_us' => 'Qui sommes-nous',
        'footer_contact_h' => 'Contact',
        'footer_address' => 'Calle 24, Playa del Carmen, Quintana Roo, Mexique',
        'footer_rights' => 'Tous droits réservés.',
        'footer_disclaimer' => 'Conseil immobilier indépendant — non affilié à une entité gouvernementale.',
    ],
];

function ui(string $key): string
{
    global $UI;
    $lang = $GLOBALS['lang'] ?? 'en';
    return $UI[$lang][$key] ?? $UI['en'][$key] ?? $key;
}
