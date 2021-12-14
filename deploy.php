<?php
namespace Deployer;

require __DIR__.'/vendor/autoload.php';

require 'recipe/laravel.php';

task('artisan:migrate', function () {});

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Config

set('repository', 'https://'  . getenv('GITHUB') . '@github.com/RicLeP/the-curiosity-of-a-child.git');
set('php_fpm_service', 'php8.0-fpm-sp');
set('auto_ssh_keygen', false);

set('bin/composer', function() {
	return 'composer8.0-sp';
});
set('bin/php', 'php8.0-sp');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('thecuriosityofachild.com')
	->set('labels', ['stage' => 'prod'])
	->set('remote_user', 'thecuriosityofachild-com')
    ->set('hostname', '161.35.47.17')
    ->set('deploy_path', '/srv/users/thecuriosityofachild-com/deployments/thecuriosityofachild-com');

host('staging.thecuriosityofachild.com')
	->set('labels', ['stage' => 'staging'])
    ->set('remote_user', 'thecuriosityofachild-com')
    ->set('hostname', '161.35.47.17')
    ->set('deploy_path', '/srv/users/thecuriosityofachild-com/deployments/staging-thecuriosityofachild-c');

// Tasks

task('build', function () {
    cd('{{release_path}}');
    run('npm run build');
});

after('deploy:failed', 'deploy:unlock');
