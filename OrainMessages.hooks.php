/**
 * Hooks for the OrainMessages extension.
 */
class OrainMessagesHooks {
	/**
	 * Get software information for Special:Version
	 */
	public static function getSoftwareInfo( &$software ) {
		$software['[https://github.com/Orain/ansible-playbook Orain Platform]'] = substr( SpecialVersion::getGitHeadSha1( '/var/root/ansible-playbook' ), 0, 7 );
	}
}

