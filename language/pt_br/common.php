<?php
/**
*
* @package phpBB Extension - Read Members PM
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net & martin - http://www.martins.homelinux.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'READ_MEMBERS_PM'			=> 'Ler MP',
	'READ_MEMBERS_PM_TO'		=> 'Para',
	'READ_MEMBERS_PM_FROM'		=> 'De',
	'NO_MEMBERS_PM'				=> 'Não há mensagens privadas',
	'READ_MEMBERS_PM_BACK'		=> 'Voltar a ver pelo assunto da MP',
	'VIEWING_READMEMBERSPM'		=> 'Tente ver as mensagens privadas dos usuários',
	//Pagination
	'LIST_PM'		=>	array(
		1 => '%s conversação',
		2 => '%s conversações',
	),
));
