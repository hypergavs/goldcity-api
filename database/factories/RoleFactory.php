<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory 
 * $table->string('name');
   *  $table->string('display_name');

   *  // Means, if value is 1, it is undeletable ...
    * $table->boolean('system_role')->default(0);

   *  // Access Level on the Admin ...
    * $table->integer('role_level')->default(1);

   *  $table->text('role_access')->nullable();
 * 
*/

use Goldcity\Models\Role;
use Faker\Generator as Faker;

$role_access = json_decode('{"Pawnshop":{"New Loan":"pawnshop_new_loan","Renew Loan":"pawnshop_renew_loan","Redeem Loan":"pawnshop_redeem_loan","Foreclosed":"pawnshop_foreclosed","Send Notice":"pawnshop_send_notice","Cancel":"pawnshop_cancel","Appraise":"pawnshop_appraise","Browser":"pawnshop_browser","Reprint":{"Pawn Ticket":"pawnshop_reprint_pawn_ticket","Receipt":"pawnshop_reprint_receipt"},"SysVars":{"Loan Type Settings":"pawnshop_sysvars_loan_type_settings","Type/Volume":"pawnshop_sysvars_type_volume_settings","Jewelries":"pawnshop_sysvars_jewelries","Categories":"pawnshop_sysvars_categories"}},"Sales":{"Sales":"sales_sales","Price Inquiry":"sales_price_inquiry","Layaway":{"Receive Payment":"sales_layaway_receive_payment","Ledger":"sales_layaway_ledger"},"Reprint Receipt":"sales_reprint_receipt","Sales List":"sales_sales_list","Check Clearing":"sales_check_clearing","Items":"sales_items","Type/Volume":"sales_type_volume","Jewelry":"sales_jewelry","Layaway Vars":"sales_layaway_vars","Categories":"sales_categories"},"Money Changer":{"Purchases":{"Dollars and Thirds":"money_changer_purchases_dollars_and_thirds","Scrap (Golds)":"money_changer_purchases_scrap_golds"},"Currency Settings":"money_changer_currency_settings","Inventory":"money_changer_inventory","Series Settings":"money_changer_series_settings"},"Management":{"Set Transaction Date":"management_set_transaction_date","Add Cap":"management_add_cap","Expenses":"management_expenses","Drawings":"management_drawings","Reminders":"management_reminders","Users":"management_users","Expense Types":"management_expense_types"},"Pull Outs":{"Pawnshop":{"Auction Pawn":"pull_outs_pawnshop_auction_pawn"},"Money Changer":{"Currency":"pull_outs_money_changer_currency","Scrap":"pull_outs_money_changer_scrap"},"Sales":"pull_outs_sales","Checks":"pull_outs_checks"},"Reports":{"Daily Reports":{"Cashflow":"reports_daily_reports_cashflow","Add Cap":"reports_daily_reports_add_cap","Admin Reports":"reports_daily_reports_admin_reports","Summary":"reports_daily_reports_summary","Beginning Balance":"reports_daily_reports_beginning_balance"},"Sales":{"Inventory":"reports_sales_inventory","General Sales":"reports_sales_general_sales","Daily Sales":"reports_sales_daily_sales","Customer Balance":"reports_sales_customer_balance","Customer Ledger":"reports_sales_customer_ledger"},"Pawnshop":{"Inventory Summary":"reports_pawnshop_inventory_summary","Admin Inventory":"reports_pawnshop_admin_inventory","Supervisor Inventory":"reports_pawnshop_supervisor_inventory"},"Money Changer":{"Daily Purchases":"reports_money_changer_daily_purchases","Daily Currency Sales":"reports_money_changer_daily_currency_sales","Inventory":"reports_money_changer_inventory","Currency Rate":"reports_money_changer_currency_rate"}},"Settings":{"Void Key":"settings_void_key","Back Up Database":"settings_back_up_database","Restore Database":"settings_restore_database","Delete Logs":"settings_delete_logs"},"System":{"System Cut Off":"system_system_cutoff","Log Out":"system_log_out"},"Help":"help"}');

$factory->define(Role::class, function (Faker $faker) use ($role_access) {
    return [
        'name' => 'goldcity_super_admin',
        'display_name' => 'Goldcity Super Admin',
        'system_role' => 0,
        'role_level' => 1,
        'role_access' => $role_access,
    ];
});
