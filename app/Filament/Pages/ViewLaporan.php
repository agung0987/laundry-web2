<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ViewLaporan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.view-laporan';

    protected static bool $shouldRegisterNavigation = false;
}
