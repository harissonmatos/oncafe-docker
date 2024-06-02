<?php
$i = 0;

$i++;
$cfg['Servers'][$i]['host'] = 'db-mysql-nyc1-60808-jul-3-backup-do-user-3432987-0.b.db.ondigitalocean.com';
$cfg['Servers'][$i]['port'] = '25060';
$cfg['Servers'][$i]['ssl'] = true;
$cfg['Servers'][$i]['ssl_ca'] = '/etc/phpmyadmin/ca-certificate.crt';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['auth_type'] = 'cookie'; // Usa autenticação por cookie

// Outras configurações podem ser necessárias
$cfg['blowfish_secret'] = 'fd1s5s4eg22h3udv3uyrtbnd8'; // Necessário para criptografar cookies, substitua por uma string aleatória

/* Carregar a configuração padrão */
$cfg['DefaultLang'] = 'pt-br';
$cfg['ServerDefault'] = 1; // Define o primeiro servidor como padrão
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

// Opcional: você pode esconder outras opções para simplificar a interface
$cfg['NavigationDisplayServers'] = false; // Esconder lista de servidores no painel de navegação
$cfg['ShowServerChoice'] = false; // Esconder a lista de servidores na tela de login
