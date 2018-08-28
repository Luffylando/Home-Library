<?php
    namespace App\Core\Fingerprint;

    interface FingerprintProvider {

      public function providerFingerprint(): string;

    }
