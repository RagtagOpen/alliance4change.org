<?php
/**
 * Configuration - Plugin: SMTP Mail
 * @url: https://wordpress.org/plugins/wp-mail-smtp/
 */
if (!empty(getenv('WPMS_SMTP_PASS'))) {
    $val = getenv('WPMS_SMTP_PASS');
    if($val === 'true'):
      $val = true;
    elseif($val === 'false'):
      $val = false;
    endif;
    define('WPMS_SMTP_PASS', );
    define('WPMS_ON', true);
}

$wpms_settings = array(
  'WPMS_MAIL_FROM',
  'WPMS_MAIL_FROM_NAME',
  'WPMS_MAILER', // Possible values 'smtp', 'mail', or 'sendmail'
  'WPMS_SET_RETURN_PATH', // Sets $phpmailer->Sender if true
  'WPMS_SMTP_HOST', // The SMTP mail host
  'WPMS_SMTP_PORT', // The SMTP server port number
  'WPMS_SSL', // Possible values '', 'ssl', 'tls' - note TLS is not STARTTLS
  'WPMS_SMTP_AUTH', // True turns on SMTP authentication, false turns it off
  'WPMS_SMTP_USER', // SMTP authentication username, only used if WPMS_SMTP_AUTH is true
  'WPMS_SMTP_PASS' // SMTP authentication password, only used if WPMS_SMTP_AUTH is true
);

$wpms_on = false;

foreach ($wpms_settings as $setting):
  if (!empty(getenv($setting))) {
      define($setting, getenv($setting));
      $wpms_on = true;
  }
endforeach;

if($wpms_on):
  define('WPMS_ON', true);
endif;
