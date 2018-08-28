<?php
	final class Configuration
	{

		const BASE = 'http://localhost/1908/';

		const DB_HOST = '127.0.0.1';
		const DB_USER = 'baza';
		const DB_PASS = 'indijanac';
		const DB_NAME = 'pbiblioteka';


		const SESSION_STORAGE = '\\App\\Core\\Session\\FileSessionStorage';
		const SESSION_STORAGE_DATA = [ './sessions/' ];
		const SESSION_LIFETIME = 3600;

		const FINGERPRINT_PROVIDER_FACTORY = '\\App\\Core\\Fingerprint\\BasicFingerprintProviderFactory';
		const FINGERPRINT_PROVIDER_METHOD = 'getInstance';
		const FINGERPRINT_PROVIDER_ARGS = ['SERVER'];
	}
