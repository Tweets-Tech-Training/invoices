<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;

class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $link = Link::create([
            'title'=>'المستخدمين',
            'route'=>'',
            'action_name'=>'user_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);
         Link::create([
            'title'=>'عرض',
            'route'=>'user',
            'action_name'=>'user_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        Link::create([
            'title'=>'اضافة مستخدم جديد ',
            'route'=>'user.create',
            'action_name'=>'user_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل المستخدمين',
            'route'=>'user.edit',
            'action_name'=>'user_edit',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف المستخدمين',
            'route'=>'user.delete',
            'action_name'=>'user_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        //ادارة فواتير المبيعات
        $link = Link::create([
            'title'=>'فواتير المبيعات',
            'route'=>'',
            'action_name'=>'bill_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);
          Link::create([
            'title'=>'عرض',
            'route'=>'bill',
            'action_name'=>'bill_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'اضافة فاتورة جديدة ',
            'route'=>'bill.create',
            'action_name'=>'bill_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل فاتورة',
            'route'=>'bill.edit',
            'action_name'=>'bill_edit',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف فاتورة',
            'route'=>'bill.delete',
            'action_name'=>'bill_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        //ادارة فواتير المصروفات
        $link = Link::create([
            'title'=>'فواتير المصروفات',
            'route'=>'',
            'action_name'=>'billExpenses_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);

         Link::create([
            'title'=> ' عرض',
            'route'=>'billExpenses',
            'action_name'=>'billExpenses_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        Link::create([
            'title'=>'اضافة فاتورة جديدة ',
            'route'=>'billExpenses.create',
            'action_name'=>'billExpenses_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل فاتورة',
            'route'=>'billExpenses.edit',
            'action_name'=>'billExpenses_edit',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف فاتورة',
            'route'=>'billExpenses.delete',
            'action_name'=>'billExpenses_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        //ادراة الزبائن
        $link = Link::create([
            'title'=>' الزبائن',
            'route'=>'',
            'action_name'=>'customer_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);
        Link::create([
            'title'=>'عرض',
            'route'=>'customer',
            'action_name'=>'customer_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        Link::create([
            'title'=>'اضافة زبون ',
            'route'=>'customer.create',
            'action_name'=>'customer_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل الزبائن',
            'route'=>'customer.edit',
            'action_name'=>'customer_edit',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف الزبائن',
            'route'=>'customer.delete',
            'action_name'=>'customer_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        //ادراة المحافظات
        $link = Link::create([
            'title'=>' المحافظات',
            'route'=>'',
            'action_name'=>'city_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);

        Link::create([
            'title'=>'عرض',
            'route'=>'city',
            'action_name'=>'city_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'اضافة المحافظات ',
            'route'=>'city.create',
            'action_name'=>'city_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل المحافظات',
            'route'=>'city.edit',
            'action_name'=>'city_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف المحافظات',
            'route'=>'city.delete',
            'action_name'=>'city_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        //ادراة العملات
        $link = Link::create([
            'title'=>' العملات',
            'route'=>'',
            'action_name'=>'coin_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);
         Link::create([
            'title'=>'عرض',
            'route'=>'coin',
            'action_name'=>'coin_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'اضافة العملات ',
            'route'=>'coin.create',
            'action_name'=>'coin_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل العملات',
            'route'=>'coin.edit',
            'action_name'=>'coin_edit',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف العملات',
            'route'=>'coin.delete',
            'action_name'=>'coin_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        //ادراة اصناف االمبيعات
        $link = Link::create([
            'title'=>' اصناف المبيعات',
            'route'=>'',
            'action_name'=>'category_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);

         Link::create([
            'title'=>'عرض',
            'route'=>'category',
            'action_name'=>'category_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'اضافة المبيعات ',
            'route'=>'category.create',
            'action_name'=>'category_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل المبيعات',
            'route'=>'category.edit',
            'action_name'=>'category_edit',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف المبيعات',
            'route'=>'category.delete',
            'action_name'=>'category_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        //ادراة اصناف المصروفات
        $link = Link::create([
            'title'=>' اصناف المصروفات',
            'route'=>'',
            'action_name'=>'category_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);

         Link::create([
            'title'=>' عرض المصروفات',
            'route'=>'expensesCategory',
            'action_name'=>'expensesCategory_index',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'اضافة المصروفات ',
            'route'=>'expensesCategory.create',
            'action_name'=>'expensesCategory_create',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'تعديل المصروفات',
            'route'=>'expensesCategory.edit',
            'action_name'=>'expensesCategory_edit',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'حذف المصروفات',
            'route'=>'expensesCategory.delete',
            'action_name'=>'expensesCategory_delete',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);

        //for permission
        $link = Link::create([
            'title'=>'الصلاحيات',
            'route'=>'',
            'action_name'=>'permission_show',
            'parent_id'=>0,
            'show_in_menu'=>1,
        ]);
        Link::create([
            'title'=>'عرض',
            'route'=>'user.permission',
            'action_name'=>'user_permission',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
        Link::create([
            'title'=>'اضافة',
            'route'=>'user.postPermission',
            'action_name'=>'user_postPermission',
            'parent_id'=>$link->id,
            'show_in_menu'=>0,
        ]);
    }
}
