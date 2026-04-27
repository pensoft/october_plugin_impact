<?php namespace Pensoft\Impact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents(): array
    {
        return [];
    }

    public function registerSettings(): array
    {
        return [];
    }

    public function registerPermissions(): array
    {
        return [
            'pensoft.impact.access' => [
                'tab' => 'Impact',
                'label' => 'Manage impact sheets'
            ],
        ];
    }


    public function registerNavigation(): array
    {
        return [
            'main-menu-item' => [
                'label'       => 'Impact sheets',
                'url'         => \Backend::url('pensoft/impact/groups'),
                'icon'        => 'icon-file-o',
                'permissions' => ['pensoft.impact.*'],
                'sideMenu' => [
                    'side-menu-item' => [
                        'label'       => 'Groups',
                        'url'         => \Backend::url('pensoft/impact/groups'),
                        'icon'        => 'icon-align-center',
                        'permissions' => ['pensoft.impact.*'],
                    ],
                    'side-menu-item2' => [
                        'label'       => 'Sheets',
                        'url'         => \Backend::url('pensoft/impact/sheets'),
                        'icon'        => 'icon-file-pdf-o',
                        'permissions' => ['pensoft.impact.*'],
                    ],

                ]
            ],
        ];
    }
}
