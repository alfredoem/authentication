<?php namespace Alfredoem\Authentication\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

class Install extends Command
{
    /**
     * The name and signature of the console command
     *
     * @var string
     */
    protected $signature = 'Auth:install {--force}';

    /**
     * The console command description
     *
     * @var string
     */
    protected $description = 'Install the Authentication scaffolding into the application';

    public function handle()
    {
        $this->installMigrations();
        $this->updateAuthConfig();

        // here copy migrations
        $this->comment('**********************************************');
        $this->comment('**************Authentication*****************');
        $this->comment('**********************************************');
        $this->comment('');
        if ($this->option('force') || $this->confirm('Would you like to run your database migrations?', 'yes')) {
            (new Process('php artisan migrate', base_path()))->setTimeout(null)->run();
        }

        (new Process('php artisan vendor:publish --tag=public --force', base_path()))->setTimeout(null)->run();

    }

    protected function InstallMigrations()
    {
        copy(
            AUTH_PATH . '/resources/stubs/database/migrations/2015_09_25_191344_create_secusers_table.php',
            database_path('migrations/' . date('Y_m_d_His') .'_create_secusers_table.php')
        );
    }

    /**
     * Update the "auth" configuration file.
     *
     * @return void
     */
    protected function updateAuthConfig()
    {
        $path = config_path('auth.php');

        file_put_contents($path, str_replace(
            'users', 'SecUsers', file_get_contents($path)
        ));

        file_put_contents($path, str_replace(
            'App\User::class', 'Alfredoem\Authentication\SecUser::class', file_get_contents($path)
        ));
    }

}