<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Categories Permission
        Permission::query()->insert([
            [
                'title'=>'reade_category',
                'label'=>'مشاهده دسته بندی'
            ],
            [
                'title'=>'create_category',
                'label'=>'ایجاد دسته بندی'
            ],
            [
                'title'=>'update_category',
                'label'=>'ویرایش دسته بندی'
            ],
            [
                'title'=>'delete_category',
                'label'=>'حذف دسته بندی'
            ]
        ]);
        //        Brands Permission
        Permission::query()->insert([
            [
                'title'=>'reade_brand',
                'label'=>'مشاهده برند'
            ],
            [
                'title'=>'create_brand',
                'label'=>'ایجاد برند'
            ],
            [
                'title'=>'update_brand',
                'label'=>'ویرایش برند'
            ],
            [
                'title'=>'delete_brand',
                'label'=>'حذف برند'
            ]
        ]);
        //        Products Permission
        Permission::query()->insert([
            [
                'title'=>'reade_product',
                'label'=>'مشاهده محصول'
            ],
            [
                'title'=>'create_product',
                'label'=>'ایجاد محصول'
            ],
            [
                'title'=>'update_product',
                'label'=>'ویرایش محصول'
            ],
            [
                'title'=>'delete_product',
                'label'=>'حذف محصول'
            ]
        ]);
        //        discounts Permission
        Permission::query()->insert([
            [
                'title'=>'reade_discounts',
                'label'=>'مشاهده تخفیف'
            ],
            [
                'title'=>'create_discounts',
                'label'=>'ایجاد تخفیف'
            ],
            [
                'title'=>'update_discounts',
                'label'=>'ویرایش تخفیف'
            ],
            [
                'title'=>'delete_discounts',
                'label'=>'حذف تخفیف'
            ]
        ]);
        //        Pictures Permission
        Permission::query()->insert([
            [
                'title'=>'reade_picture',
                'label'=>'مشاهده تصویر'
            ],
            [
                'title'=>'create_picture',
                'label'=>'ایجاد تصویر'
            ],
            [
                'title'=>'update_picture',
                'label'=>'ویرایش تصویر'
            ],
            [
                'title'=>'delete_picture',
                'label'=>'حذف تصویر'
            ]
        ]);
        //        Offers Permission
        Permission::query()->insert([
            [
                'title'=>'reade_offer',
                'label'=>'مشاهده کد تخفیف'
            ],
            [
                'title'=>'create_offer',
                'label'=>'ایجاد کد تخفیف'
            ],
            [
                'title'=>'update_offer',
                'label'=>'ویرایش کد تخفیف'
            ],
            [
                'title'=>'delete_offer',
                'label'=>'حذف کد تخفیف'
            ]
        ]);
        //        Rolls Permission
        Permission::query()->insert([
            [
                'title'=>'reade_Roll',
                'label'=>'مشاهده نقش'
            ],
            [
                'title'=>'create_Roll',
                'label'=>'ایجاد نقش'
            ],
            [
                'title'=>'update_Roll',
                'label'=>'ویرایش نقش'
            ],
            [
                'title'=>'delete_Roll',
                'label'=>'حذف نقش'
            ]
        ]);
        //        Dashboard Permission
        Permission::query()->insert([
            [
                'title'=>'view_dashboard',
                'label'=>'مشاهده داشبورد'
            ]
        ]);
    }
}
