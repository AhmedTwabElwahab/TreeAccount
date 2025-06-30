<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartOfAccountsSeeder extends Seeder
{
    public function run()
    {
        DB::table('chart_accounts')->truncate(); // تنظيف الجدول قبل الزرع

        // --------------------
        // الأصول
        // --------------------
        $assetsId = DB::table('chart_accounts')->insertGetId(['name' => 'الأصول', 'parent_id' => null]);

        $currentAssetsId = DB::table('chart_accounts')->insertGetId(['name' => 'أصول متداولة', 'parent_id' => $assetsId]);
        $fixedAssetsId   = DB::table('chart_accounts')->insertGetId(['name' => 'أصول ثابتة', 'parent_id' => $assetsId]);

        DB::table('chart_accounts')->insert([
            ['name' => 'الصندوق',       'parent_id' => $currentAssetsId],
            ['name' => 'البنك',         'parent_id' => $currentAssetsId],
            ['name' => 'المدينون',      'parent_id' => $currentAssetsId],
            ['name' => 'المخزون',       'parent_id' => $currentAssetsId],

            ['name' => 'الأثاث',        'parent_id' => $fixedAssetsId],
            ['name' => 'المباني',       'parent_id' => $fixedAssetsId],
            ['name' => 'الأجهزة',       'parent_id' => $fixedAssetsId],
        ]);

        // --------------------
        // الالتزامات
        // --------------------
        $liabilitiesId = DB::table('chart_accounts')->insertGetId(['name' => 'الالتزامات', 'parent_id' => null]);

        $currentLiabilitiesId = DB::table('chart_accounts')->insertGetId(['name' => 'الالتزامات المتداولة', 'parent_id' => $liabilitiesId]);
        $longTermLiabilitiesId = DB::table('chart_accounts')->insertGetId(['name' => 'الالتزامات طويلة الأجل', 'parent_id' => $liabilitiesId]);

        DB::table('chart_accounts')->insert([
            ['name' => 'الدائنون',        'parent_id' => $currentLiabilitiesId],
            ['name' => 'القروض قصيرة الأجل', 'parent_id' => $currentLiabilitiesId],

            ['name' => 'قرض بنكي طويل الأجل', 'parent_id' => $longTermLiabilitiesId],
        ]);

        // --------------------
        // حقوق الملكية
        // --------------------
        $equityId = DB::table('chart_accounts')->insertGetId(['name' => 'حقوق الملكية', 'parent_id' => null]);

        DB::table('chart_accounts')->insert([
            ['name' => 'رأس المال',       'parent_id' => $equityId],
            ['name' => 'احتياطي',         'parent_id' => $equityId],
            ['name' => 'أرباح محتجزة',    'parent_id' => $equityId],
        ]);

        // --------------------
        // الإيرادات
        // --------------------
        $revenueId = DB::table('chart_accounts')->insertGetId(['name' => 'الإيرادات', 'parent_id' => null]);

        DB::table('chart_accounts')->insert([
            ['name' => 'مبيعات محلية',     'parent_id' => $revenueId],
            ['name' => 'مبيعات خارجية',    'parent_id' => $revenueId],
            ['name' => 'إيرادات خدمات',    'parent_id' => $revenueId],
        ]);

        // --------------------
        // المصروفات
        // --------------------
        $expensesId = DB::table('chart_accounts')->insertGetId(['name' => 'المصروفات', 'parent_id' => null]);

        $operatingExpensesId = DB::table('chart_accounts')->insertGetId(['name' => 'مصروفات تشغيلية', 'parent_id' => $expensesId]);
        $administrativeExpensesId = DB::table('chart_accounts')->insertGetId(['name' => 'مصروفات إدارية وعمومية', 'parent_id' => $expensesId]);

        DB::table('chart_accounts')->insert([
            ['name' => 'إيجار',           'parent_id' => $operatingExpensesId],
            ['name' => 'كهرباء ومياه',    'parent_id' => $operatingExpensesId],
            ['name' => 'رواتب وأجور',     'parent_id' => $administrativeExpensesId],
            ['name' => 'قرطاسية',         'parent_id' => $administrativeExpensesId],
        ]);
    }
}
