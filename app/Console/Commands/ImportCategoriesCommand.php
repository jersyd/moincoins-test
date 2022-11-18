<?php

namespace App\Console\Commands;

use App\Imports\CategoriesImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Console\Command\Command as CommandAlias;

class ImportCategoriesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import products from category.csv file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        Excel::import(
            new CategoriesImport,
            'category.csv',
            'local',
            \Maatwebsite\Excel\Excel::CSV
        );

        return CommandAlias::SUCCESS;
    }
}
