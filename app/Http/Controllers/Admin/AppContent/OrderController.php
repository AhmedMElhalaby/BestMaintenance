<?php

namespace App\Http\Controllers\Admin\AppContent;

use App\Helpers\Constant;
use App\Http\Controllers\Admin\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use App\Traits\AhmedPanelTrait;

class OrderController extends Controller
{
    use AhmedPanelTrait;

    public function setup()
    {
        $this->setRedirect('app_content/orders');
        $this->setEntity(new Order());
        $this->setTable('orders');
        $this->setLang('Order');
        $this->setViewShow('Admin.AppContent.Order.show');
        $this->setCreate(false);
        $this->setColumns([
            'user_id'=> [
                'name'=>'user_id',
                'type'=>'custom_relation',
                'relation'=>[
                    'data'=> User::where('type',Constant::USER_TYPE['Customer'])->get(),
                    'custom'=>function($Object){
                        return ($Object)?$Object->getName():'-';
                    },
                    'entity'=>'user'
                ],
                'is_searchable'=>true,
                'order'=>true
            ],
            'technical_id'=> [
                'name'=>'technical_id',
                'type'=>'custom_relation',
                'relation'=>[
                    'data'=> User::where('type',Constant::USER_TYPE['Technical'])->get(),
                    'custom'=>function($Object){
                        return ($Object)?$Object->getName():'-';
                    },
                    'entity'=>'technical'
                ],
                'is_searchable'=>true,
                'order'=>true
            ],
            'category_id'=> [
                'name'=>'category_id',
                'type'=>'custom_relation',
                'relation'=>[
                    'data'=> Category::all(),
                    'custom'=>function($Object){
                        return ($Object)?$Object->getName():'-';
                    },
                    'entity'=>'category'
                ],
                'is_searchable'=>true,
                'order'=>true
            ],
            'status'=> [
                'name'=>'status',
                'type'=>'select',
                'data'=>[
                    Constant::ORDER_STATUSES['New'] =>__('crud.Order.Statuses.'.Constant::ORDER_STATUSES['New'],[],session('my_locale')),
                    Constant::ORDER_STATUSES['Accept'] =>__('crud.Order.Statuses.'.Constant::ORDER_STATUSES['Accept'],[],session('my_locale')),
                    Constant::ORDER_STATUSES['Rejected'] =>__('crud.Order.Statuses.'.Constant::ORDER_STATUSES['Rejected'],[],session('my_locale')),
                    Constant::ORDER_STATUSES['Canceled'] =>__('crud.Order.Statuses.'.Constant::ORDER_STATUSES['Canceled'],[],session('my_locale')),
                    Constant::ORDER_STATUSES['InProgress'] =>__('crud.Order.Statuses.'.Constant::ORDER_STATUSES['InProgress'],[],session('my_locale')),
                    Constant::ORDER_STATUSES['Finished'] =>__('crud.Order.Statuses.'.Constant::ORDER_STATUSES['Finished'],[],session('my_locale')),
                ],
                'is_searchable'=>true,
                'order'=>true
            ],
            'amount'=> [
                'name'=>'amount',
                'type'=>'text',
                'is_searchable'=>true,
                'order'=>true
            ]
        ]);
        $this->SetLinks([
            'show',
        ]);
    }

}
