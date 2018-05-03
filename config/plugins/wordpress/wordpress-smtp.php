<?php
/**
 * Configuration - Plugin: SMTP Mail
 * @url: https://wordpress.org/plugins/wp-mail-smtp/
 */
if (!empty(getenv('WP_SMTP_PASSWORD'))) {
    define('WPMS_SMTP_PASS', getenv('WP_SMTP_PASSWORD'));
    define('WPMS_ON', true);
}
