<?php

namespace BenDechrai\WordpressImport\Command;

use Illuminate\Console\Command;

class WordpressImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wpimport';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Wordpress contents from a Wordpress eXtended RSS (WXR) export file.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
