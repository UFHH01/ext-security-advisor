<?php

$messages = [
    'pageTitle' => 'Security Advisor',
    'tabs.domains' => 'Domains',
    'tabs.wordpress' => 'WordPress',
    'tabs.system' => 'System',
    'list.domains.domainNameColumn' => 'Domain',
    'list.domains.statusInsecure' => 'Not secure',
    'list.domains.statusInvalid' => 'Certificate is self-signed or not valid',
    'list.domains.statusLetsencrypt' => 'Secure with Lets Encrypt certificate',
    'list.domains.statusOk' => 'Secure with SSL certificate',
    'list.domains.validFromColumn' => 'Valid From',
    'list.domains.validToColumn' => 'Valid To',
    'list.domains.sanColumn' => 'Alternative Names',
    'list.domains.letsencryptDomains' => 'Secure with Let\'s Encrypt',
    'list.domains.letsencryptDomainsDescription' => 'Install SSL certificates for the selected domains.',
    'list.domains.installLetsencrypt' => 'Install Let\'s Encrypt',
    'list.domains.installLetsencryptDescription' => 'The Let\'s Encrypt extension is required for SSL certificates creation.',
    'list.wordpress.nameColumn' => 'Name',
    'list.wordpress.urlColumn' => 'URL',
    'list.wordpress.httpsColumn' => 'HTTPS',
    'list.wordpress.httpsEnableTitle' => 'Secure',
    'list.wordpress.httpsDisableTitle' => 'Insecure',
    'list.wordpress.switchToHttpsButtonTitle' => 'Switch to HTTPS',
    'list.wordpress.switchToHttpsButtonDesc' => '',
    'form.settings.securePaneldesc' => 'Description why to secure panel with Let\'s Encrypt',
    'form.settings.securePanelHostnametitle' => 'Hostname',
    'form.settings.http2title' => 'HTTP/2',
    'form.settings.http2desc' => 'Description why to enable HTTP/2',
    'controllers.letsencrypt.successMsg' => 'Let\'s Encrypt SSL certificate was successfully installed on %%domains%%.',
    'controllers.letsencrypt.inProgressMsg' => 'Let\'s Encrypt is currently working: %%progress%%% complete.',
    'controllers.securePanel.pageTitle' => 'Secure Panel',
    'controllers.securePanel.save.successMsg' => 'Settings were successfully applied',
    'controllers.switchWordpressToHttps.successMsg' => 'All selected WordPress instances were switched to HTTPS',
    'controllers.switchWordpressToHttps.errorMsg' => 'There are issues while switching WordPress instances to HTTPS: ',
    'promo.title' => 'Security Advisor',
    'promo.textDomains' => 'Your next step is: Secure your domains (%%count%% domains are not secure)',
    'promo.textWordpress' => 'Your next step is: Secure your WordPress installations (%%count%% installations are not secure).',
    'promo.textHttp2' => 'Your next step is: Enable HTTP2 for all domains.',
    'promo.textPanel' => 'Your next step is: Install SSL certificate for panel.',
    'promo.textDatagrid' => 'Your next step is: Keep system up-to-date with Datagrid reliability and vulnerability scanner.',
    'promo.textPatchman' => 'Your next step is: Keep application up-to-date and secure with Patchman.',
    'promo.textDone' => 'Your Plesk is totally secure!',
    'promo.buttonSecure' => 'Make it secure!',
    'promo.buttonDone' => 'Check it out',
    'controllers.system.panelSecured' => 'Panel has valid SSL certificate',
    'controllers.system.panelNotSecured' => 'Panel doesn\'t have valid SSL certificate',
    'controllers.system.letsencryptDesc' => 'Let\'s Encrypt is a certificate authority (CA) that allows you to create a free SSL certificate for your domain.',
    'controllers.system.letsencryptInstall' => 'Install Let\'s Encrypt and secure Panel with free SSL certificate',
    'controllers.system.http2Desc' => 'HTTP/2 improves performance; specifically, end-user perceived latency, network and server resource usage.',
    'controllers.system.http2Enabled' => 'HTTP2 is enabled',
    'controllers.system.http2Button' => 'Enable HTTP2',
    'controllers.system.datagridDesc' => 'The Datagrid scanner analyzes your server configuration and compares it to real world results from servers around the world to report reliability and security vulnerabilities.  On top of that, it\'s free.',
    'controllers.system.datagrid' => 'Datagrid reliability and vulnerability scanner',
    'controllers.system.datagridActivate' => 'Activate the Datagrid reliability and vulnerability scanner',
    'controllers.system.datagridInstall' => 'Install the Datagrid reliability and vulnerability scanner',
    'controllers.system.patchmanDesc' => 'Patchman automatically and safely patches vulnerabilities in CMSs like WordPress, Joomla and Drupal. On top of that, it cleans up malware.',
    'controllers.system.patchman' => 'Patchman',
    'controllers.system.patchmanActivate' => 'Activate Patchman',
    'controllers.system.patchmanInstall' => 'Install Patchman',
    'controllers.system.stateEnabled' => 'Enabled',
    'controllers.system.stateDisabled' => 'Disabled',
    'controllers.system.stateRunning' => 'Running',
    'controllers.system.stateNotActivated' => 'Not Activated',
    'controllers.system.stateNotInstalled' => 'Not Installed',
    'controllers.system.busy' => 'Please wait...',
];
