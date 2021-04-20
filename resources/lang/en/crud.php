<?php

use App\Helpers\Constant;

return [

    'Admin'=>[
        'crud_names' => 'Employees',
        'crud_name' => 'Employee',
        'crud_the_name' => 'The Employee',
        'name' => 'Name',
        'email' => 'E-Mail',
        'is_active' => 'Status',
        'avatar' => 'Avatar',
    ],
    'Technical'=>[
        'crud_names' => 'Technicals',
        'crud_name' => 'Technical',
        'crud_the_name' => 'The Technical',
        'name' => 'Name',
        'email' => 'E-Mail',
        'mobile' => 'Mobile',
        'avatar' => 'Avatar',
        'type' => 'Type',
        'bio' => 'Bio',
        'country_id' => 'Country',
        'city_id' => 'City',
        'address' => 'Address',
        'balance' => 'Balance',
        'favorite_car' => 'Favorite Car',
        'app_locale' => 'App Locale',
        'is_active' => 'Status',
        'created_at' => 'Created At',
        'user_categories' => 'User Categories',
        'orders_count' => 'Orders Count',
        'Links'=>[
            'active_mobile_email'=>'Active Mobile And Email',
            'edit_times'=>'Edit Employee Times'
        ]
    ],
    'TechnicalTime'=>[
        'crud_the_name'=>'Edit Employee Time',
        'user_id'=>'Technical',
        'saturday'=>'Saturday',
        'saturday_start'=>'Saturday Start',
        'saturday_end'=>'Saturday End',
        'sunday'=>'Sunday',
        'sunday_start'=>'Sunday Start',
        'sunday_end'=>'Sunday End',
        'monday'=>'Monday',
        'monday_start'=>'Monday Start',
        'monday_end'=>'Monday End',
        'tuesday'=>'Tuesday',
        'tuesday_start'=>'Tuesday Start',
        'tuesday_end'=>'Tuesday End',
        'wednesday'=>'Wednesday',
        'wednesday_start'=>'Wednesday Start',
        'wednesday_end'=>'Wednesday End',
        'thursday'=>'Thursday',
        'thursday_start'=>'Thursday Start',
        'thursday_end'=>'Thursday End',
        'friday'=>'Friday',
        'friday_start'=>'Friday Start',
        'friday_end'=>'Friday End',
    ],
    'Customer'=>[
        'crud_names' => 'Customers',
        'crud_name' => 'Customer',
        'crud_the_name' => 'The Customer',
        'name' => 'Name',
        'email' => 'E-Mail',
        'mobile' => 'Mobile',
        'avatar' => 'Avatar',
        'type' => 'Type',
        'bio' => 'Bio',
        'country_id' => 'Country',
        'city_id' => 'City',
        'address' => 'Address',
        'balance' => 'Balance',
        'favorite_car' => 'Favorite Car',
        'app_locale' => 'App Locale',
        'is_active' => 'Status',
        'created_at' => 'Created At',
        'orders_count' => 'Orders Count',
        'Links'=>[
            'active_mobile_email'=>'Active Mobile And Email'
        ]
    ],
    'Setting'=>[
        'crud_names' => 'Settings',
        'crud_name' => 'Setting',
        'crud_the_name' => 'The Setting',
        'key' => 'Key',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'value' => 'Value',
        'value_ar' => 'Value Ar',
        'pages'=>'Pages',
        'notifications'=>'Notifications',
        'other'=>'Other Settings'
    ],
    'Faq'=>[
        'crud_names' => 'FAQ',
        'crud_name' => 'Faq',
        'crud_the_name' => 'The Faq',
        'question' => 'Question',
        'question_ar' => 'Question Ar',
        'faq_category_id' => 'Faq Category',
        'answer' => 'Answer',
        'answer_ar' => 'Answer Ar',
        'is_active' => 'Status',
    ],
    'FaqCategory'=>[
        'crud_names' => 'Faq Categories',
        'crud_name' => 'Faq Category',
        'crud_the_name' => 'The Faq Category',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
    ],
    'Ticket'=>[
        'crud_names' => 'Tickets',
        'crud_name' => 'Ticket',
        'crud_the_name' => 'The Ticket',
        'id' => '#',
        'user_id' => 'User',
        'title' => 'Title',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Message',
        'ticket_response' => 'Response',
        'status' => 'Status',
        'response_form' => 'Response to the ticket',
        'Statuses'=>[
            ''.\App\Helpers\Constant::TICKETS_STATUS['Open']=>'Opened',
            ''.\App\Helpers\Constant::TICKETS_STATUS['Closed']=>'Closed',
        ]
    ],
    'Permission'=>[
        'crud_names' => 'Permissions',
        'crud_name' => 'Permission',
        'crud_the_name' => 'The Permission',
        'id' => '#',
        'name' => 'Name',
    ],
    'Role'=>[
        'crud_names' => 'Roles',
        'crud_name' => 'Role',
        'crud_the_name' => 'The Role',
        'id' => '#',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'permissions' => 'Permissions',
    ],
    'Transaction'=>[
        'crud_names' => 'Transactions',
        'crud_name' => 'Transaction',
        'crud_the_name' => 'The Transaction',
        'user_id' => 'User',
        'value' => 'Value',
        'type' => 'Type',
        'Types' => [
            ''.Constant::TRANSACTION_TYPES['Deposit']=>'Deposit',
            ''.Constant::TRANSACTION_TYPES['Withdraw']=>'Withdraw',
            ''.Constant::TRANSACTION_TYPES['Holding']=>'Hold',
        ],
        'payment_token' => 'Payment Token',
        'ref_id' => 'References Operation',
        'created_at' => 'Date',
        'status' => 'Status',
        'Statuses'=>[
            ''.Constant::TRANSACTION_STATUS['Pending']=>'Pending',
            ''.Constant::TRANSACTION_STATUS['Paid']=>'Paid',
        ]
    ],
    'Category'=>[
        'crud_names' => 'Categories',
        'crud_name' => 'Category',
        'crud_the_name' => 'The Category',
        'parent_id' => 'Parent Category',
        'manager_id' => 'Manager',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'description' => 'Description',
        'description_ar' => 'Description Ar',
        'image' => 'Image',
        'has_product' => 'Has Product',
        'has_service' => 'Has Service',
        'is_active' => 'Status',
    ],
    'Subscription'=>[
        'crud_names' => 'Subscriptions',
        'crud_name' => 'Subscription',
        'crud_the_name' => 'The Subscription',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'description' => 'Description',
        'description_ar' => 'Description Ar',
        'image' => 'Image',
        'price' => 'Price',
        'is_active' => 'Status',
    ],
    'Country'=>[
        'crud_names' => 'Countries',
        'crud_name' => 'Country',
        'crud_the_name' => 'The Country',
        'country_code' => 'Country Code',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'is_active' => 'Status',
    ],
    'City'=>[
        'crud_names' => 'Cities',
        'crud_name' => 'City',
        'crud_the_name' => 'The City',
        'country_id' => 'Country',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'is_active' => 'Status',
    ],
    'Issue'=>[
        'crud_names' => 'Issues',
        'crud_name' => 'Issue',
        'crud_the_name' => 'The Issue',
        'category_id' => 'Category',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'is_active' => 'Status',
    ],
    'IssueType'=>[
        'crud_names' => 'Issues Types',
        'crud_name' => 'Issue Type',
        'crud_the_name' => 'The Type',
        'issue_id' => 'Issue',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'price' => 'Price',
        'is_active' => 'Status',
    ],
    'Advertisement'=>[
        'crud_names' => 'Advertisements',
        'crud_name' => 'Advertisement',
        'crud_the_name' => 'The Advertisement',
        'image' => 'Image',
        'title' => 'Title',
        'title_ar' => 'Title Ar',
        'is_active' => 'Status',
    ],
    'UserSubscription'=>[
        'crud_names' => 'Users Subscriptions',
        'crud_name' => 'User Subscription',
        'crud_the_name' => 'The User Subscription',
        'user_id' => 'User',
        'subscription_id' => 'Subscription',
        'expire_date' => 'Expire Date',
        'status' => 'Status',
        'Statuses' => [
            ''.Constant::USER_SUBSCRIPTION['Pending']=>'Pending',
            ''.Constant::USER_SUBSCRIPTION['Approved']=>'Approved',
            ''.Constant::USER_SUBSCRIPTION['Rejected']=>'Rejected',
        ],
    ],
    'Order'=>[
        'crud_names' => 'Orders',
        'crud_name' => 'Order',
        'crud_the_name' => 'The Order',
        'Statuses' => [
            ''.Constant::ORDER_STATUSES['New']=>'New',
            ''.Constant::ORDER_STATUSES['Accept']=>'Accept',
            ''.Constant::ORDER_STATUSES['Rejected']=>'Rejected',
            ''.Constant::ORDER_STATUSES['Canceled']=>'Cancelled',
            ''.Constant::ORDER_STATUSES['Finished']=>'Finished',
            ''.Constant::ORDER_STATUSES['InProgress']=>'In Progress',
        ],
        'user_id' => 'Customer',
        'technical_id' => 'Technical',
        'category_id' => 'Category',
        'status' => 'Status',
        'statuses_history' => 'Statuses History',
        'issue_id' => 'Issue',
        'issue_type_id' => 'Issue Type',
        'amount' => 'Amount',
        'note' => 'Note',
        'reject_reason' => 'Reject Reason',
        'cancel_reason' => 'Cancel Reason',
        'created_at' => 'Created Date',
        'order_date' => 'Order Date',
        'order_time' => 'Order Time',
    ],
];
