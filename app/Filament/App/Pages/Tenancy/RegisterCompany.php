<?php
namespace App\Filament\App\Pages\Tenancy;

use App\Models\Company;
use App\Models\Team;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterCompany extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register Company';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('slug')->required(),
                TextInput::make('email')->required(),
                TextInput::make('address')->required(),
                TextInput::make('phone')->required()->numeric(),
                Select::make('type')->options([
                    'KSP' => 'KSP',
                    'BPR' => 'BPR',
                ])->required(),
                FileUpload::make('logo_navbar')->required()->image(),
                FileUpload::make('logo_footer')->required()->image(),
                FileUpload::make('helmet')->required()->image(),
            ]);
    }

    protected function handleRegistration(array $data): Company
    {
        $team = Company::create($data);

        $team->members()->attach(auth()->user());

        return $team;
    }
}
