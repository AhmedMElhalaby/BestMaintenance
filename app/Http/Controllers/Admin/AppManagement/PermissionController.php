<?php

namespace App\Http\Controllers\Admin\AppManagement;

use App\Http\Controllers\Admin\Controller;
use App\Models\Admin;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Traits\AhmedPanelTrait;

class PermissionController extends Controller
{
    use AhmedPanelTrait;

    public function setup()
    {
        $this->setRedirect('app_managements/permissions');
        $this->setEntity(new Permission());
        $this->setTable('permissions');
        $this->setLang('Permission');
        $this->setCreate(false);
        $this->setColumns([
            'name'=> [
                'name'=>'name',
                'type'=>'text',
                'is_searchable'=>true,
                'order'=>true
            ],
            'name_ar'=> [
                'name'=>'name_ar',
                'type'=>'text',
                'is_searchable'=>true,
                'order'=>true
            ],
        ]);
        $this->setFields([
            'name'=> [
                'name'=>'name',
                'type'=>'text',
                'is_required'=>true
            ],
            'name_ar'=> [
                'name'=>'name_ar',
                'type'=>'text',
                'is_required'=>true
            ],
        ]);
        $this->SetLinks([
            'edit',
//            'delete',
        ]);
    }

}
