<?php
/**
 * @version		$Id: esqueleto.php revision date lasteditedby $
 * @package		Joomla
 * @subpackage	Content
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


jimport( 'joomla.plugin.plugin' );
// Não chega a ser necessário, importar authentication
jimport( 'joomla.user.authentication');


class plgAuthenticationEsqueleto extends JPlugin {

	/**
	 * Constructor
	 *
	 * For php4 compatability we must not use the __constructor as a constructor for plugins
	 * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
	 * This causes problems with cross-referencing necessary for the observer design pattern.
	 *
	 * @param object $subject The object to observe
	 * @param object $params  The object that holds the plugin parameters
	 * @since 1.5
	 */
	function plgAuthenticationEsqueleto( &$subject, $params )
	{
		parent::__construct( $subject, $params );
	}

	/**
	 * O Evento onAuthenticate é disparado quando o usuário tenta se autenticar no site
	 * normalmente utilizado por algum formulário que aciona o componente que dispara este evento
	 *
	 * É por padrão usado nos arquivos:
	 * <ul>
	 * <il>libraries/joomla/application/user/authentication.php
	 * <il>plugins/authentication/gmail.php
	 * <il>plugins/authentication/joomla.php
	 * <il>plugins/authentication/ldap.php
	 * </ul>
	 *
	 * Um outro exemplo de uso é o arquivo: plugins/authentication/example.php
	 *
	 * O $param é um array que vem com as credencias compostas obrigatoriamente com:
	 * <ul>
	 * <il>['username']
	 * <il>['password']
	 * </ul>
	 * Observe que pode haver novas informações inseridas nas credenciais conforme
	 * a cadeia de plugins usada, então avalie se é de seu interesse aqui inserir
	 * alguma informação na credencial do usuário.
	 *
	 * no array $option você pode obter alguns informações como:
	 * $options['remember'] => se o joomla deve lembrar o login do usuário
	 * $options['return']   => se o joomla deve retornar a url de origem informada
	 * 
	 * @see JAuthenticationResponse para obter detalhes de resposta da autenticação.
	 *
	 * @param array $param
	 * @param array $options
	 * @param JAuthenticationResponse &$response
	 */
	function onAuthenticate($credentials, $options, &$response) {
		// ATENÇÃO: observe que o parametro $response é passado por referencia.
		
		// execute o processo de autenticação aqui
		;
		// se tudo ok, popula o objeto $response
		// ele não deve ser null, deve ter o objeto JAuthenticationResponse
		// $response->status === JAUTHENTICATE_STATUS_SUCCESS
		
		// Caso haja falha, deve ser populado como
		// $response->status === JAUTHENTICATE_STATUS_FAILURE
		
		// Porem se for cancelado
		// $response->status === JAUTHENTICATE_STATUS_CANCEL		
		
	}

	/**
	 * Este evento não é documentado
	 * @param array $credentials
	 */
	function onAuthenticateFailure($credentials) {
		;
	}
}