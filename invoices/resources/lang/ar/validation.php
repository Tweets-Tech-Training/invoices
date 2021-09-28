<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'يجب قبول :attribute',
    'active_url'           => ':attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي :attribute على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون :attribute ًمصفوفة',
    'before'               => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة :attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date'                 => ':attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق :attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => ':attribute غير موجود',
    'file'                 => 'الـ :attribute يجب أن يكون ملفا.',
    'filled'               => ':attribute إجباري',
    'image'                => 'يجب أن يكون :attribute صورةً',
    'in'                   => ':attribute لاغٍ',
    'in_array'             => ':attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون :attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون :attribute عنوان IP صحيحًا',
    'ipv4'                 => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6'                 => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json'                 => 'يجب أن يكون :attribute نصآ من نوع JSON.',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر لـ :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر لـ :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => ':attribute لاغٍ',
    'numeric'              => 'يجب على :attribute أن يكون رقمًا',
    'present'              => 'يجب تقديم :attribute',
    'regex'                => 'صيغة :attribute .غير صحيحة',
    'required'             => ':attribute مطلوب.',
    'required_if'          => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all'    => ':attribute مطلوب إذا توفّر :values.',
    'required_without'     => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
        'array'   => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالظبط',
    ],
    'string'               => 'يجب أن يكون :attribute نصآ.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة :attribute مُستخدمة من قبل',
    'uploaded'             => 'فشل في تحميل الـ :attribute',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',

    'custom_email'           => 'يجب على الإيميل أن يكون @:custom_email.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'ok'        => 'موافق ' ,
        'category_id'          =>'الصنف' ,
        'code'          =>'الرمز' ,
        'status'          =>'حالة الفاتورة (مستلم ام لا )' ,
        'coin_id'          =>'العملة ' ,
        'payment'          =>'طريقة الدفع (حوالة او شيك او نقدا) ' ,
        'related'          =>'مرتبطة بقيد مالي ام لا ' ,
        'customer_id'          =>'اسم الزبون' ,
        'city_id'                =>'المدينة',
        'name'                  => 'الاسم',
        'image'            => 'الصورة' ,
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'emails'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الموبايل',
        'id_number'             => 'رقم الهوية',
        'branch_id'             => 'الفرع',
        'join_date'             => 'تاريخ الانضمام',
        'birth_date'            => 'تاريخ الميلاد',
        'name_ar'               => 'الاسم عربي',
        'name_en'               => 'الاسم انجليزي',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'full_name'                  => 'الأسم رباعي',
        'place' => ' المحافظة (في الوطن)',
        'annual_installment' => 'تكلفة الأقساط الفصلية (بالليرة التركية)',
        'montly_cost' => 'تكلفة المعيشة الشهرية (بالليرة التركية)',
        'region_id' => 'البلدة',
        'family_number' => 'عدد أفراد الأسرة',
        'degree_id' => 'المستوى الأكاديمي',
//        'city_id' => 'مكان الإقامة (في تركيا)',
        'social_id' => 'الحالة الاجتماعية',
        'study_id' => 'طبيعة الدراسة',
        'GPA' => 'المعدل التراكمي',
        'university' => 'الجامعة',
        'college' => 'الكلية',
        'specialization' => 'التخصص',
        'start_years' => 'سنة الالتحاق',
        'university_card' => 'البطاقة الجامعية',
        'notes' => 'ملاحظات',
        'signs_of_last_semester' => 'كشف علامات آخر فصل',
        'message'      => ' الرسالة',
        'cities'      => ' الدولة',
        "number_year"=>"عدد سنوات الدراسة",
        "graduation_year"=>" سنة التخرج المتوقعة",
        "organization"=>"مؤسسة",
        "money_type"=>"مصدر دخل الطالب",
        "passport_image"=>"صورة عن جواز السفر",
        "university_enrollment"=>"صورة عن شهادة القيد الجامعي ",
        "university_payment"=>"	صورة عن آخر وصل دفع للجامعة ",
        "personal_image"=>"صورة شخصية",
        "university_type"=>"نوع الجامعة",
        "bank_name"=>"اسم البنك ",
        "account_num"=>"IBAN (بالليرة التركية)",
        "iban_dollar"=>"IBAN (الدولار)",
        "iban_euro"=>"IBAN (اليورو)",
        "iban"=>"اسم الحساب البنكي",
        "cities1"=>" المدينة ",
        "website_name"=>"اسم الموقع ",
        "seo_keyword"=>"كلمة المفتاحية ",
        "seo_website_description"=>"الوصف المفتاحي ",
        "twitter"=>"تويتر",
        "facebook"=>"فيس بوك",
        "whatsapp"=>"واتس اب",
        "linked_in"=>" لينكد ان",
        "instagram"=>"انستجرام",


    ],
];
