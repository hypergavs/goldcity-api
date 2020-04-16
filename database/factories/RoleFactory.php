<?php

use Goldcity\Models\Role;
use Faker\Generator as Faker;

$role_access = [
    [
        "label" => "Pawnshop",
        "name" => "pawnshop",
        "icon" => "far fa-gem",
        "children" => [
            ["label" => "New Loan", "name" => "pawnshop_new_loan", "icon" => ""],
            ["label" => "Renew Loan", "name" => "pawnshop_renew_loan", "icon" => ""],
            ["label" => "Redeem Loan", "name" => "pawnshop_redeem_loan", "icon" => ""],
            ["label" => "Foreclosed", "name" => "pawnshop_foreclosed", "icon" => ""],
            ["label" => "Send Notice", "name" => "pawnshop_send_notice", "icon" => ""],
            ["label" => "Cancel", "name" => "pawnshop_cancel", "icon" => ""],
            ["label" => "Appraise", "name" => "pawnshop_appraise", "icon" => ""],
            ["label" => "Browser", "name" => "pawnshop_browser", "icon" => ""],
            ["label" => "Reprint", "icon" => "mdi-chevron-down",
                "children" => [
                    ["label" => "Pawn Ticket", "name" => "pawnshop_reprint_pawn_ticket", "icon" => ""],
                    ["label" => "Receipt", "name" => "pawnshop_reprint_receipt", "icon" => ""],
                ]
            ],
            ["label" => "SysVars", "icon" => "mdi-chevron-down",
                "children" => [
                    ["label" => "Loan Type Settings", "name" => "pawnshop_sysvars_loan_type_settings", "icon" => ""],
                    ["label" => "Type/Volume", "name" => "pawnshop_sysvars_type_volume_settings", "icon" => ""],
                    ["label" => "Jewelries", "name" => "pawnshop_sysvars_jewelries", "icon" => ""],
                    ["label" => "Categories", "name" => "pawnshop_sysvars_categories", "icon" => ""],
                ]
            ],
        ]
    ],
    [
        "label" => "Sales",
        "name" => "sales",
        "icon" => "fas fa-cash-register",
        "children" => [
            ["label" => "Sales", "name" => "sales_sales", "icon" => ""],
            ["label" => "Price Inquiry", "name" => "sales_price_inquiry", "icon" => ""],
            ["label" => "Layaway", "icon" => "",
                "children" => [
                    ["label" => "Receive Payment", "name" => "sales_layaway_receive_payment", "icon" => ""],
                    ["label" => "Ledger", "name" => "sales_layaway_ledger", "icon" => ""]
                ]
            ],
            ["label" => "Reprint Receipt", "name" => "sales_reprint_receipt", "icon" => ""],
            ["label" => "Sales List", "name" => "sales_sales_list", "icon" => ""],
            ["label" => "Check Clearing", "name" => "sales_check_clearing", "icon" => ""],
            ["label" => "Items", "name" => "sales_items", "icon" => ""],
            ["label" => "Type/Volume", "name" => "sales_type_volume", "icon" => ""],
            ["label" => "Jewelry", "name" => "sales_jewelry", "icon" => ""],
            ["label" => "Layaway Vars", "name" => "sales_layaway_vars", "icon" => ""],
            ["label" => "Categories", "name" => "sales_categories", "icon" => ""],
        ]
    ],
    [
        "label" => "Money Changer",
        "name" => "money_changer",
        "icon" => "fas fa-exchange-alt",
        "children" => [
            ["label" => "Purchase", "icon" => "",
                "children" => [
                    ["label" => "Dollars and Thirds", "name" => "money_changer_purchases_dollars_and_thirds", "icon" => ""],
                    ["label" => "Scrap (Golds)", "name" => "money_changer_purchases_scrap_golds", "icon" => ""]
                ]
            ],
            ["label" => "Currency Settings", "name" => "money_changer_currency_settings", "icon" => ""],
            ["label" => "Inventory", "name" => "money_changer_inventory", "icon" => ""],
            ["label" => "Series Settings", "name" => "money_changer_series_settings", "icon" => ""]
        ]
    ],
    [
        "label" => "Management",
        "name" => "management",
        "icon" => "fas fa-users-cog",
        "children" => [
            ["label" => "Set Transaction Date", "name" => "management_set_transaction_date", "icon" => ""],
            ["label" => "Add Cap", "name" => "management_add_cap", "icon" => ""],
            ["label" => "Expenses", "name" => "management_expenses", "icon" => ""],
            ["label" => "Drawings", "name" => "management_drawings", "icon" => ""],
            ["label" => "Reminders", "name" => "management_reminders", "icon" => ""],
            ["label" => "Users", "name" => "management_users", "icon" => ""],
            ["label" => "Expense Types", "name" => "management_expense_types", "icon" => ""],
        ]
    ],
    [
        "label" => "Pull Outs",
        "name" => "pull_outs",
        "icon" => "fas fa-outdent",
        "children" => [
            ["label" => "Pawnshop", "icon" => "",
                "children" => [
                    ["label" => "Auction Pawn", "name" => "pull_outs_pawnshop_auction_pawn", "icon" => ""]
                ]
            ],
            ["label" => "Money Changer", "icon" => "",
                "children" => [
                    ["label" => "Currency", "name" => "pull_outs_money_changer_currency", "icon" => ""],
                    ["label" => "Scrap", "name" => "pull_outs_money_changer_scrap", "icon" => ""],
                ]
            ],
            ["label" => "Sales", "name" => "pull_outs_sales", "icon" => ""],
            ["label" => "Checks", "name" => "pull_outs_checks", "icon" => ""]
        ]
    ],
    [
        "label" => "Reports",
        "name" => "reports",
        "icon" => "fas fa-folder-open",
        "children" => [
            ["label" => "Daily Reports", "icon" => "",
                "children" => [
                    ["label" => "Cashflow", "name" => "reports_daily_reports_cashflow", "icon" => ""],
                    ["label" => "Add Cap", "name" => "reports_daily_reports_add_cap", "icon" => ""],
                    ["label" => "Admin Reports", "name" => "reports_daily_reports_admin_reports", "icon" => ""],
                    ["label" => "Summary", "name" => "reports_daily_reports_summary", "icon" => ""],
                    ["label" => "Beginning Balance", "name" => "reports_daily_reports_beginning_balance", "icon" => ""]
                ]
            ],
            ["label" => "Sales", "icon" => "",
                "children" => [
                    ["label" => "Inventory", "name" => "reports_sales_inventory", "icon" => ""],
                    ["label" => "General Sales", "name" => "reports_sales_general_sales", "icon" => ""],
                    ["label" => "Daily Sales", "name" => "reports_sales_daily_sales", "icon" => ""],
                    ["label" => "Customer Balance", "name" => "reports_sales_customer_balance", "icon" => ""],
                    ["label" => "Customer Ledger", "name" => "reports_sales_customer_ledger", "icon" => ""]
                ]
            ],
            ["label" => "Pawnshop", "icon" => "",
                "children" => [
                    ["label" => "Inventory Summary", "name" => "reports_pawnshop_inventory_summary", "icon" => ""],
                    ["label" => "Admin Inventory", "name" => "reports_pawnshop_admin_inventory", "icon" => ""],
                    ["label" => "Supervisor Inventory", "name" => "reports_pawnshop_supervisor_inventory", "icon" => ""]
                ]
            ],
            ["label" => "Money Changer", "icon" => "",
                "children" => [
                    ["label" => "Daily Purchases", "name" => "reports_money_changer_daily_purchases", "icon" => ""],
                    ["label" => "Daily Currency Sales", "name" => "reports_money_changer_daily_currency_sales", "icon" => ""],
                    ["label" => "Inventory", "name" => "reports_money_changer_inventory", "icon" => ""],
                    ["label" => "Currency Rate", "name" => "reports_money_changer_currency_rate", "icon" => ""]
                ]
            ],
        ]
    ],
    [
        "label" => "Settings",
        "name" => "settings",
        "icon" => "fas fa-cogs",
        "children" => [
            ["label" => "Void Key", "name" => "settings_void_key", "icon" => ""],
            ["label" => "Back Up Database", "name" => "settings_back_up_database", "icon" => ""],
            ["label" => "Restore Database", "name" => "settings_restore_database", "icon" => ""],
            ["label" => "Delete Logs", "name" => "settings_delete_logs", "icon" => ""],
        ]
    ],
    [
        "label" => "System",
        "name" => "system",
        "icon" => "fas fa-server",
        "children" => [
            ["label" => "System Cut Off", "name" => "system_system_cutoff", "icon" => ""],
            ["label" => "Log Out", "name" => "system_log_out", "icon" => ""]
        ]
    ],
    [
        "label" => "Help",
        "name" => "help",
        "icon" => "fas fa-question",
    ]
];



//$role_access = json_decode('{"Pawnshop":{"New Loan":"pawnshop_new_loan","Renew Loan":"pawnshop_renew_loan","Redeem Loan":"pawnshop_redeem_loan","Foreclosed":"pawnshop_foreclosed","Send Notice":"pawnshop_send_notice","Cancel":"pawnshop_cancel","Appraise":"pawnshop_appraise","Browser":"pawnshop_browser","Reprint":{"Pawn Ticket":"pawnshop_reprint_pawn_ticket","Receipt":"pawnshop_reprint_receipt"},"SysVars":{"Loan Type Settings":"pawnshop_sysvars_loan_type_settings","Type/Volume":"pawnshop_sysvars_type_volume_settings","Jewelries":"pawnshop_sysvars_jewelries","Categories":"pawnshop_sysvars_categories"}},"Sales":{"Sales":"sales_sales","Price Inquiry":"sales_price_inquiry","Layaway":{"Receive Payment":"sales_layaway_receive_payment","Ledger":"sales_layaway_ledger"},"Reprint Receipt":"sales_reprint_receipt","Sales List":"sales_sales_list","Check Clearing":"sales_check_clearing","Items":"sales_items","Type/Volume":"sales_type_volume","Jewelry":"sales_jewelry","Layaway Vars":"sales_layaway_vars","Categories":"sales_categories"},"Money Changer":{"Purchases":{"Dollars and Thirds":"money_changer_purchases_dollars_and_thirds","Scrap (Golds)":"money_changer_purchases_scrap_golds"},"Currency Settings":"money_changer_currency_settings","Inventory":"money_changer_inventory","Series Settings":"money_changer_series_settings"},"Management":{"Set Transaction Date":"management_set_transaction_date","Add Cap":"management_add_cap","Expenses":"management_expenses","Drawings":"management_drawings","Reminders":"management_reminders","Users":"management_users","Expense Types":"management_expense_types"},"Pull Outs":{"Pawnshop":{"Auction Pawn":"pull_outs_pawnshop_auction_pawn"},"Money Changer":{"Currency":"pull_outs_money_changer_currency","Scrap":"pull_outs_money_changer_scrap"},"Sales":"pull_outs_sales","Checks":"pull_outs_checks"},"Reports":{"Daily Reports":{"Cashflow":"reports_daily_reports_cashflow","Add Cap":"reports_daily_reports_add_cap","Admin Reports":"reports_daily_reports_admin_reports","Summary":"reports_daily_reports_summary","Beginning Balance":"reports_daily_reports_beginning_balance"},"Sales":{"Inventory":"reports_sales_inventory","General Sales":"reports_sales_general_sales","Daily Sales":"reports_sales_daily_sales","Customer Balance":"reports_sales_customer_balance","Customer Ledger":"reports_sales_customer_ledger"},"Pawnshop":{"Inventory Summary":"reports_pawnshop_inventory_summary","Admin Inventory":"reports_pawnshop_admin_inventory","Supervisor Inventory":"reports_pawnshop_supervisor_inventory"},"Money Changer":{"Daily Purchases":"reports_money_changer_daily_purchases","Daily Currency Sales":"reports_money_changer_daily_currency_sales","Inventory":"reports_money_changer_inventory","Currency Rate":"reports_money_changer_currency_rate"}},"Settings":{"Void Key":"settings_void_key","Back Up Database":"settings_back_up_database","Restore Database":"settings_restore_database","Delete Logs":"settings_delete_logs"},"System":{"System Cut Off":"system_system_cutoff","Log Out":"system_log_out"},"Help":"help"}');

$factory->define(Role::class, function (Faker $faker) use ($role_access) {
    return [
        'name' => 'goldcity_super_admin',
        'display_name' => 'Goldcity Super Admin',
        'system_role' => 0,
        'role_level' => 1,
        'role_access' => $role_access,
    ];
});
