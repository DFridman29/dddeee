<?php defined('BASEPATH') or exit('No direct script access allowed');

// labels
$lang['header']			=	'Étape 1&nbsp;: Configurer la base de données et le serveur';
$lang['intro_text']		=	'FatCMS est très simple à installer, ceci ne prends que quelques minutes. Cependant certaines question peuvent être déroutantes si vous n\'avez pas suffisament de connaissances techniques. Si vous rencontrez des difficultés contacter votre hébergeur ou <a href="/contact" target="_blank">contactez nous</a>.';

$lang['db_settings']	=	'Paramètres de la base de données';
$lang['db_text']		=	'FatCMS requiert une base de données (MySQL) pour stocker vos contenus et paramètres. Nous devons vérifier votre version du serveur MySQL, vous devez saisir le nom d\'hôte, le nom d\'utilisateur et le mot de passe dans le formulaire ci-dessous. Ces paramètres seront également utilisés lors de l\'installation de la base de données. Si vous ne comprenez pas les informations demandées merci de contacter votre hébergeur ou votre administrateur système pour les obtenir.';
$lang['db_missing']		=	'Le driver MySQL pour PHP n\'a pas été trouvé, l\'installation ne peut pas continuer. Demandez à votre adminstrateur réseau de l\'installer.';
$lang['db_create']		=	'Créer la base de données';
$lang['db_notice']		=	'Vous devez peut être effectuer cette action vous même via la panneau de configuration de votre hébergement';
$lang['database']		=	'Base de données MySQL';

$lang['server']			=	'Nom d\'hôte';
$lang['username']		=	'Nom d\'utilisateur';
$lang['password']		=	'Mot de passe';
$lang['portnr']			=	'Port';
$lang['server_settings']=	'Paramètres serveur';
$lang['httpserver']		=	'Serveur HTTP';
$lang['httpserver_text']=	'FatCMS requiert un serveur HTTP pour afficher dynamiquement du contenu quand un utilisateur viens sur votre site web. Il semble que vous disposez déjà d\'un serveur vu que vous affichez cette page, si vous connaissez précisemment le type de serveur alors FatCMS peut effectuer une configuration automatique. Si vous ne connaissez pas le type de serveur utilisé alors ignorez cette partie et continuez l\'installation.';
$lang['rewrite_fail']	=	'Vous avez sélectionné "(Apache with mod_rewrite)" mais nous ne pouvons confirmer que mod_rewrite est activé sur votre serveur. Demandez à votre hébergeur si mod_rewrite est bien activé ou continuez l\'installation à vos propres risques.';
$lang['mod_rewrite']	=	'Vous avez sélectionné "(Apache with mod_rewrite)" mais votre serveur ne possède pas le module rewrite activé. Demandez à votre hébergeur de l\'activer ou installez FatCMS en utilisant l\'option "(Apache without mod_rewrite)"';
$lang['step2']			=	'Étape 2';

// messages
$lang['db_success']		=	'Les paramètres de la base de données ont été testés et fonctionnent correctement';
$lang['db_failure']		=	'Problème de connexion à la base de données&nbsp;: ';