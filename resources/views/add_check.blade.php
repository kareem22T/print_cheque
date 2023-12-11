@extends('admin.layouts.admin-layout')
@section('title', 'Print Cheque')
@section('content')
@if($Reprsentative)
<h1 class="text-center mb-5">
    طباعة شيك يصرف بواسطة {{ $Reprsentative->name }}
</h1>
<div  id="Cheque_wrapper">
    <form action="" class="w-100 " @submit.prevent>
        <div class="form-group mb-3">
            <label for="bank_list" class="label mb-2" style="font-weight: 600; font-size: 18px">اختر البنك</label>
            <select id="bank_list" style="width:160px" class="form-control w-50" v-model="banck">
                <option value="NBE">البنك الأهلي المصري</option> {{-- done --}}
                <option value="CIB">البنك التجاري الدولي 1</option> {{-- done --}}
                <option value="CIB3">البنك التجاري الدولي 2</option> {{-- done --}}
                <option value="CIB2">البنك التجاري الدولي - Wealth</option> {{-- done --}}
                <option value="QNB">بنك قطر الوطني</option> {{-- done --}}
                <option value="qnb3">بنك قطر الوطني الأهلي</option> {{-- done --}}
                <option value="UNB">بنك الاتحاد الوطني</option> {{-- done --}}
                <option value="AUB">البنك الأهلي المتحد</option> {{-- done --}}
                <option value="AUB2">البنك الأهلي المتحد 2</option> {{-- done --}}
                <option value="EBE">1 البنك المصري لتنمية الصادرات</option> {{-- done --}}
                <option value="EBE2">البنك المصري لتنمية الصادرات 2</option> {{-- done --}}
                <option value="EBE3">البنك المصري لتنمية الصادرات 3</option> {{-- done --}}
                <option value="AAIB">البنك العربي الافريقي الدولي</option> {{-- done --}}
                <option value="AAIB2">البنك العربي الافريقي الدولي - Wealth</option> {{-- done --}}
                <option value="HSBC">بنك إتش اس بي سي</option> {{-- done --}}
                <option value="HSBC7">بنك إتش اس بي سي 2</option> {{-- done --}}
                <option value="MISR">بنك مصر</option> {{-- done --}}
                <option value="misr3">بنك مصر2</option> {{-- done --}}
                <option value="BOC">بنك القاهرة</option> {{-- done --}}
                <option value="BOC2">بنك القاهرة2</option> {{-- done --}}
                <option value="BOC3">بنك القاهرة3</option> {{-- done --}}
                <option value="NBD">بنك الإمارات دبي الوطني 1</option> {{-- done --}}
                <option value="NBD4">بنك الإمارات دبي الوطني 2</option> {{-- done --}}
                <option value="audi">بنك عودة - مصر</option>
                <option value="brka">بنك البركة - مصر</option>
                <option value="brka2">بنك البركة 2 - مصر</option>
                <option value="wafa">بنك التجاري وفا</option>
                <option value="nbk">بنك الكويت الوطني 1</option>
                <option value="nbk6">بنك الكويت الوطني 2</option>
                <option value="blom">بنك بلوم مصر</option>
                <option value="alex">بنك الاسكندرية</option>
                <option value="alex2">بنك الاسكندرية 2</option>
                <option value="alex3">بنك الاسكندرية 3</option>
                <option value="arg">كريدي أجريكول 1</option>
                <option value="arg2">كريدي أجريكول 2</option>
                <option value="egb">البنك المصري الخليجي</option>
                <option value="utb">المصرف المتحد</option>
                <option value="arbib">بنك الاستثمار العربي 1</option>
                <option value="arbib2">بنك الاستثمار العربي 2</option>
                <option value="scb">بنك قناة السويس</option>
                <option value="scb2">بنك قناة السويس2</option>
                <option value="saib">بنك الشركة المصرفية العربية</option>
                <option value="saib2">بنك الشركة المصرفية العربية 2</option>
                <option value="fib">بنك فيصل الاسلامي المصري</option>
                <option value="adib2">مصرف أبو ظبي الاسلامي</option>
                <option value="arab2">البنك العربي</option>
                <option value="fab2">بنك أبو ظبي الأول</option>
                <option value="fab3">بنك أبو ظبي الأول 2</option>
                <option value="fab4">بنك أبو ظبي الأول 3</option>
                <option value="pirs">بنك بيريوس مصر</option>
                <option value="hdb">بنك التعمير والاسكان</option>
                <option value="idw">بنك التنمية الصناعية</option>
                <option value="idb3">بنك التنمية الصناعية 2</option>
                <option value="mid">ميد بنك</option>
                <option value="mid2">ميد بنك 2</option>
                <option value="adcb2">بنك أبو ظبي التجاري 1</option>
                <option value="adcb4">بنك أبو ظبي التجاري 2</option>
                <option value="abk2">البنك الأهلي الكويتي 1</option>
                <option value="abk3">البنك الأهلي الكويتي 2</option>
                <option value="abc">المؤسسة العربية المصرفية</option>
                <option value="abc3">المؤسسة العربية المصرفية2</option>
                <option value="abc4">المؤسسة العربية المصرفية3</option>
                <option value="arib">بنك الاسثمار - أفراد</option>
                <option value="ealb">البنك العقاري المصري العربي</option>
                <option value="abe">البنك الزراعي المصري</option>
                <option value="nbg">البنك الأهلي اليوناني</option>
                <option value="mash4">بنك المشرق</option>
                <option value="mash5">بنك المشرق الذهبي</option>
                <option value="aib">المصرف العربي الدولي 1</option>
                <option value="aib2">المصرف العربي الدولي 2</option>
                <option value="cbt">المصرف المركزي المصري</option>
                <option value="cbt2">المصرف المركزي المصري 2</option>
                <option value="midb">بنك مصر إيران للتنمية</option>
                <option value="epst">البريد المصري</option>
            </select>
        </div>

        {{-- NBE Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'NBE'" id="NBE" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/NBE_cheque.jpg')}}" alt="NBE_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute;top: 80px;left: 50%;transform: translateX(-50%);z-index: 999999;color: #000;font-weight: 700;font-size: 18px;margin: 0;">@{{ name }}</p>
                <p class="date" style="position: absolute; top: 53px; right: 41px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px;">@{{ new Date(NBE_cheque_date).getDate() + "-" +  (new Date(NBE_cheque_date).getMonth() + 1) + "-" + new Date(NBE_cheque_date).getFullYear()}}</p>
                <p class="place" style="position: absolute; top: 53px; right: 142px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px;">@{{ NBE_place_cheque }}</p>
                <p class="num_price" style="position: absolute; top: 130px; right: 20px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 16px; margin: 0px;width: 132px;text-align: center;">#@{{ NBE_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 132px; right: 156px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;width: 40px;text-align: center;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="NBE_price_text_cheque"  style="position: absolute; top: 115px; right: 250px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 310px; text-align: center;">فقط @{{ NBE_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 142px; right: 210px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ NBE_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 174px; right: 70px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 220px; text-align: center;">@{{ NBE_location_cheque }} </p>
                <p class="underline" v-if="NBE_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ NBE_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'NBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="NBE_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="NBE_date_cheque" id="NBE_date_cheque" class="form-control" v-model="NBE_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="NBE_place_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">مكان التحرير</label>
                <input type="text" name="NBE_place_cheque" id="NBE_place_cheque" class="form-control" v-model="NBE_place_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'NBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="NBE_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="NBE_price_num_cheque" id="NBE_price_num_cheque" class="form-control" v-model="NBE_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="NBE_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="NBE_price_text_cheque" id="NBE_price_text_cheque" class="form-control" v-model="NBE_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'NBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="NBE_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="NBE_reason_cheque" id="NBE_reason_cheque" class="form-control" v-model="NBE_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="NBE_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="NBE_location_cheque" id="NBE_location_cheque" class="form-control" v-model="NBE_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'NBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="NBE_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="NBE_underline_cheque" id="NBE_underline_cheque" class="form-control" v-model="NBE_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBE'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- NBE Cheque  --}}
        {{-- ################################################################  --}}

        {{-- CIB Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'CIB'" id="CIB" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/CIB_cheque.jpg')}}" alt="CIB_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 80px; right: 180px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px;width: 330px;text-align: center;">@{{ name }}</p>
                <p class="date" style="position: absolute; top: 50px; left: 85px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px;">@{{ new Date(CIB_cheque_date).getDate() + "-" +  (new Date(CIB_cheque_date).getMonth() + 1) + "-" + new Date(CIB_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 125px; right: 50px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 16px; margin: 0px; width: 115px; text-align: center;">#@{{ CIB_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 128px; right: 165px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 50px; text-align: center;background: #ffffff5c;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="CIB_price_text_cheque"  style="position: absolute; top: 125px; right: 280px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 300px; text-align: center;">فقط @{{ CIB_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 162px; right: 300px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 310px; text-align: center;">@{{ CIB_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 177px; right: 40px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 230px; text-align: center;">@{{ CIB_location_cheque }} </p>
                <p class="underline" v-if="CIB_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ CIB_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'CIB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB'">
                <label for="CIB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="CIB_date_cheque" id="CIB_date_cheque" class="form-control" v-model="CIB_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'CIB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB'">
                <label for="CIB_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="CIB_price_num_cheque" id="CIB_price_num_cheque" class="form-control" v-model="CIB_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB'">
                <label for="CIB_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="CIB_price_text_cheque" id="CIB_price_text_cheque" class="form-control" v-model="CIB_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'CIB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB'">
                <label for="CIB_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="CIB_reason_cheque" id="CIB_reason_cheque" class="form-control" v-model="CIB_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB'">
                <label for="CIB_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="CIB_location_cheque" id="CIB_location_cheque" class="form-control" v-model="CIB_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'CIB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB'">
                <label for="CIB_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="CIB_underline_cheque" id="CIB_underline_cheque" class="form-control" v-model="CIB_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- CIB Cheque  --}}
        {{-- ################################################################  --}}

        {{-- CIB3 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'CIB3'" id="CIB3" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/CIB3_cheque.jpg')}}" alt="CIB3_cheque" style="width: 624px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 72px; right: 140px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 410px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr"  style="position: absolute; top: 19px; right: 40px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; letter-spacing: 6px;">@{{ new Date(CIB3_cheque_date).getDate() + "" +  (new Date(CIB3_cheque_date).getMonth() + 1) + "" + new Date(CIB3_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 124px; right: 20px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 16px; margin: 0px; width: 100px; text-align: center;">#@{{ CIB3_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 124px; right: 125px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 30px; text-align: center; background: rgba(255, 255, 255, 0.36) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="CIB3_price_text_cheque"  style="position: absolute; top: 107px; right: 220px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 340px; text-align: center;">فقط @{{ CIB3_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 135px; right: 190px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 400px; text-align: center;">@{{ CIB3_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 153px; right: 70px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 190px; text-align: center;">@{{ CIB3_location_cheque }} </p>
                <p class="underline" v-if="CIB3_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ CIB3_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'CIB3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB3'">
                <label for="CIB3_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="CIB3_date_cheque" id="CIB3_date_cheque" class="form-control" v-model="CIB3_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'CIB3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB3'">
                <label for="CIB3_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="CIB3_price_num_cheque" id="CIB3_price_num_cheque" class="form-control" v-model="CIB3_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB3'">
                <label for="CIB3_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="CIB3_price_text_cheque" id="CIB3_price_text_cheque" class="form-control" v-model="CIB3_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'CIB3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB3'">
                <label for="CIB3_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="CIB3_reason_cheque" id="CIB3_reason_cheque" class="form-control" v-model="CIB3_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB3'">
                <label for="CIB3_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="CIB3_location_cheque" id="CIB3_location_cheque" class="form-control" v-model="CIB3_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'CIB3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB3'">
                <label for="CIB3_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="CIB3_underline_cheque" id="CIB3_underline_cheque" class="form-control" v-model="CIB3_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB3'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- CIB3 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- CIB2 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'CIB2'" id="CIB2" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/CIB2_cheque.jpg')}}" alt="CIB2_cheque" style="width: 624px; max-width: 624px;">
                <p class="name" style="position: absolute; top: 72px; right: 160px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 410px; text-align: center;top: 1.9cm;width: 340px;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 19px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; top: 1cm;left: 78px;width: 100px;">@{{ new Date(CIB2_cheque_date).getDate() + "-" +  (new Date(CIB2_cheque_date).getMonth() + 1) + "-" + new Date(CIB2_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 124px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 16px; margin: 0px; width: 100px; text-align: center;top: 3.2cm;left: 12.4cm;width: 115px;">#@{{ CIB2_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 122px; right: 162px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 40px; text-align: center; background: rgba(255, 255, 255, 0.36) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="CIB2_price_text_cheque"  style="position: absolute; top: 117px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 340px; text-align: center;left: 0.9cm;width: 325px;">فقط @{{ CIB2_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 155px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 400px; text-align: center;left: 1cm;width: 315px;">@{{ CIB2_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 169px; right: 40px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 220px; text-align: center;">@{{ CIB2_location_cheque }} </p>
                <p class="underline" v-if="CIB2_underline_cheque"  style="font-size: 12px; text-align: center; padding: 3px; border-top: 2px solid black; border-bottom: 2px solid black; z-index: 300; transform: rotate(-45deg); position: absolute; top: 80px; left: 0px; transform-origin: left top 0px; min-width: 120px; color: rgb(0, 0, 0); font-weight: 600;">@{{ CIB2_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'CIB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB2'">
                <label for="CIB2_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="CIB2_date_cheque" id="CIB2_date_cheque" class="form-control" v-model="CIB2_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'CIB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB2'">
                <label for="CIB2_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="CIB2_price_num_cheque" id="CIB2_price_num_cheque" class="form-control" v-model="CIB2_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB2'">
                <label for="CIB2_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="CIB2_price_text_cheque" id="CIB2_price_text_cheque" class="form-control" v-model="CIB2_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'CIB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB2'">
                <label for="CIB2_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="CIB2_reason_cheque" id="CIB2_reason_cheque" class="form-control" v-model="CIB2_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB2'">
                <label for="CIB2_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="CIB2_location_cheque" id="CIB2_location_cheque" class="form-control" v-model="CIB2_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'CIB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB2'">
                <label for="CIB2_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="CIB2_underline_cheque" id="CIB2_underline_cheque" class="form-control" v-model="CIB2_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'CIB2'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- CIB2 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- QNB Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'QNB'" id="QNB" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/QNB_cheque.jpg')}}" alt="QNB_cheque" style="width: 624px; max-width: 624px;">
                <p class="name" style="position: absolute; top: 94px; right: 100px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 420px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 47px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; right: 75px; ">@{{ new Date(QNB_cheque_date).getDate() + "-" +  (new Date(QNB_cheque_date).getMonth() + 1) + "-" + new Date(QNB_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 140px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 16px; margin: 0px; width: 105px; text-align: center; right: 19px;">#@{{ QNB_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 142px; right: 125px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 57px; text-align: center; background: rgba(255, 255, 255, 0.36) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="QNB_price_text_cheque"  style="position: absolute; top: 140px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 295px; text-align: center; right: 240px;">فقط @{{ QNB_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 176px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 385px; text-align: center; left: 1cm;">@{{ QNB_reason_cheque }} </p>
                <p class="underline" v-if="QNB_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ QNB_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'QNB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'QNB'">
                <label for="QNB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="QNB_date_cheque" id="QNB_date_cheque" class="form-control" v-model="QNB_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'QNB'">
                <label for="QNB_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="QNB_price_num_cheque" id="QNB_price_num_cheque" class="form-control" v-model="QNB_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'QNB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'QNB'">
                <label for="QNB_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="QNB_price_text_cheque" id="QNB_price_text_cheque" class="form-control" v-model="QNB_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'QNB'">
                <label for="QNB_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="QNB_reason_cheque" id="QNB_reason_cheque" class="form-control" v-model="QNB_reason_cheque">
                </textarea>
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'QNB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'QNB'">
                <label for="QNB_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="QNB_underline_cheque" id="QNB_underline_cheque" class="form-control" v-model="QNB_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'QNB'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- QNB Cheque  --}}
        {{-- ################################################################  --}}

        {{-- qnb3 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'qnb3'" id="qnb3" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/qnb3_cheque.jpg')}}" alt="qnb3_cheque" style="width: 805px; max-width: 805px;">
                <p class="name" style="position: absolute; top: 94px; right: 100px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 420px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 47px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; right: 75px; ">@{{ new Date(qnb3_cheque_date).getDate() + "-" +  (new Date(qnb3_cheque_date).getMonth() + 1) + "-" + new Date(qnb3_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 140px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 16px; margin: 0px; width: 105px; text-align: center; right: 19px;">#@{{ qnb3_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 142px; right: 135px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 57px; text-align: center; background: rgba(255, 255, 255, 0.36) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="qnb3_price_text_cheque"  style="position: absolute; top: 140px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 465px; text-align: center; right: 240px;">فقط @{{ qnb3_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 176px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 525px; text-align: center; left: 1cm;">@{{ qnb3_reason_cheque }} </p>
                <p class="underline" v-if="qnb3_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ qnb3_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'qnb3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'qnb3'">
                <label for="qnb3_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="qnb3_date_cheque" id="qnb3_date_cheque" class="form-control" v-model="qnb3_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'qnb3'">
                <label for="qnb3_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="qnb3_price_num_cheque" id="qnb3_price_num_cheque" class="form-control" v-model="qnb3_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'qnb3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'qnb3'">
                <label for="qnb3_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="qnb3_price_text_cheque" id="qnb3_price_text_cheque" class="form-control" v-model="qnb3_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'qnb3'">
                <label for="qnb3_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="qnb3_reason_cheque" id="qnb3_reason_cheque" class="form-control" v-model="qnb3_reason_cheque">
                </textarea>
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'qnb3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'qnb3'">
                <label for="qnb3_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="qnb3_underline_cheque" id="qnb3_underline_cheque" class="form-control" v-model="qnb3_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'qnb3'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- qnb3 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- UNB Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'UNB'" id="UNB" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/UNB_cheque.jpg')}}" alt="UNB_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 90px; left: 50%; transform: translateX(-50%); z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px;">@{{ name }}</p>
                <p class="date" style="position: absolute; top: 57px; right: 53px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px;width: 130px;text-align: center;">@{{ new Date(UNB_cheque_date).getDate() + "-" +  (new Date(UNB_cheque_date).getMonth() + 1) + "-" + new Date(UNB_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 155px; right: 22px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 90px; text-align: center;">#@{{ UNB_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 153px; right: 114px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 40px; text-align: center;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="UNB_price_text_cheque" style="position: absolute; top: 122px; right: 80px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 470px; text-align: center;">فقط @{{ UNB_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 148px; right: 180px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 410px; text-align: center;">@{{ UNB_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 179px; right: 60px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ UNB_location_cheque }} </p>
                <p class="underline" v-if="UNB_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ UNB_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'UNB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'UNB'">
                <label for="UNB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="UNB_date_cheque" id="UNB_date_cheque" class="form-control" v-model="UNB_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'UNB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'UNB'">
                <label for="UNB_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="UNB_price_num_cheque" id="UNB_price_num_cheque" class="form-control" v-model="UNB_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'UNB'">
                <label for="UNB_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="UNB_price_text_cheque" id="UNB_price_text_cheque" class="form-control" v-model="UNB_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'UNB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'UNB'">
                <label for="UNB_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="UNB_reason_cheque" id="UNB_reason_cheque" class="form-control" v-model="UNB_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'UNB'">
                <label for="UNB_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="UNB_location_cheque" id="UNB_location_cheque" class="form-control" v-model="UNB_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'UNB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'UNB'">
                <label for="UNB_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="UNB_underline_cheque" id="UNB_underline_cheque" class="form-control" v-model="UNB_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'UNB'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- UNB Cheque  --}}
        {{-- ################################################################  --}}

        {{-- AUB Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'AUB'" id="AUB" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/AUB_cheque.jpg')}}" alt="AUB_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 64px; right: 130px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px;width: 340px;text-align: center;">@{{ name }}</p>
                <p class="date" style="position: absolute; top: 16px; right: 47px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 150px; text-align: center;">@{{ new Date(AUB_cheque_date).getDate() + "-" +  (new Date(AUB_cheque_date).getMonth() + 1) + "-" + new Date(AUB_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 125px; right: 52px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 90px; text-align: center;">#@{{ AUB_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 124px; right: 137px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 40px; text-align: center;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="AUB_price_text_cheque" style="position: absolute; top: 98px; right: 63px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 470px; text-align: center;">فقط @{{ AUB_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 123px; right: 186px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 410px; text-align: center;">@{{ AUB_reason_cheque }} </p>
                <p class="underline" v-if="AUB_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ AUB_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'AUB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB'">
                <label for="AUB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="AUB_date_cheque" id="AUB_date_cheque" class="form-control" v-model="AUB_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB'">
                <label for="AUB_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="AUB_price_num_cheque" id="AUB_price_num_cheque" class="form-control" v-model="AUB_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'AUB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB'">
                <label for="AUB_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="AUB_price_text_cheque" id="AUB_price_text_cheque" class="form-control" v-model="AUB_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB'">
                <label for="AUB_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="AUB_reason_cheque" id="AUB_reason_cheque" class="form-control" v-model="AUB_reason_cheque">
                </textarea>
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'AUB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB'">
                <label for="AUB_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="AUB_underline_cheque" id="AUB_underline_cheque" class="form-control" v-model="AUB_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- AUB Cheque  --}}
        {{-- ################################################################  --}}

        {{-- AUB2 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'AUB2'" id="AUB2" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/AUB2_cheque.jpg')}}" alt="AUB2_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 64px; right: 135px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px;width: 340px;text-align: center;">@{{ name }}</p>
                <p class="date" style="position: absolute; top: 7px; right: 248px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 130px; text-align: center;">@{{ new Date(AUB2_cheque_date).getDate() + "-" +  (new Date(AUB2_cheque_date).getMonth() + 1) + "-" + new Date(AUB2_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 124px; right: 54px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 90px; text-align: center;">#@{{ AUB2_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 122px; right: 143px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 40px; text-align: center;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="AUB2_price_text_cheque" style="position: absolute; top: 95px; right: 80px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 470px; text-align: center;">فقط @{{ AUB2_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 121px; right: 190px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 410px; text-align: center;">@{{ AUB2_reason_cheque }} </p>
                <p class="underline" v-if="AUB2_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ AUB2_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'AUB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB2'">
                <label for="AUB2_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="AUB2_date_cheque" id="AUB2_date_cheque" class="form-control" v-model="AUB2_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB2'">
                <label for="AUB2_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="AUB2_price_num_cheque" id="AUB2_price_num_cheque" class="form-control" v-model="AUB2_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'AUB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB2'">
                <label for="AUB2_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="AUB2_price_text_cheque" id="AUB2_price_text_cheque" class="form-control" v-model="AUB2_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB2'">
                <label for="AUB2_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="AUB2_reason_cheque" id="AUB2_reason_cheque" class="form-control" v-model="AUB2_reason_cheque">
                </textarea>
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'AUB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB2'">
                <label for="AUB2_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="AUB2_underline_cheque" id="AUB2_underline_cheque" class="form-control" v-model="AUB2_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AUB2'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- AUB2 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- EBE Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'EBE'" id="EBE" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/EBE_cheque.jpg')}}" alt="EBE_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 72px; right: 135px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 380px; text-align: center;">@{{ name }}</p>
                <p class="date" style="position: absolute; top: 23px; right: 38px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 120px; text-align: center;">@{{ new Date(EBE_cheque_date).getDate() + "-" +  (new Date(EBE_cheque_date).getMonth() + 1) + "-" + new Date(EBE_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 130px; right: 11px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 130px; text-align: center;">#@{{ EBE_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 129px; right: 143px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 40px; text-align: center;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="EBE_price_text_cheque" style="position: absolute; top: 107px; right: 247px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 313px; text-align: center;">فقط @{{ EBE_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 141px; right: 200px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 410px; text-align: center;">@{{ EBE_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 168px; right: 60px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ EBE_location_cheque }} </p>
                <p class="underline" v-if="EBE_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ EBE_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'EBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE'">
                <label for="EBE_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="EBE_date_cheque" id="EBE_date_cheque" class="form-control" v-model="EBE_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'EBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE'">
                <label for="EBE_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="EBE_price_num_cheque" id="EBE_price_num_cheque" class="form-control" v-model="EBE_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE'">
                <label for="EBE_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="EBE_price_text_cheque" id="EBE_price_text_cheque" class="form-control" v-model="EBE_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'EBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE'">
                <label for="EBE_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="EBE_reason_cheque" id="EBE_reason_cheque" class="form-control" v-model="EBE_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE'">
                <label for="EBE_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="EBE_location_cheque" id="EBE_location_cheque" class="form-control" v-model="EBE_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'EBE'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE'">
                <label for="EBE_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="EBE_underline_cheque" id="EBE_underline_cheque" class="form-control" v-model="EBE_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- EBE Cheque  --}}
        {{-- ################################################################  --}}

        {{-- EBE2 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'EBE2'" id="EBE2" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/EBE2_cheque.jpg')}}" alt="EBE2_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 69px; right: 135px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 430px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 19px; right: 33px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; letter-spacing: 6px;">@{{ new Date(EBE2_cheque_date).getDate() + "" +  (new Date(EBE2_cheque_date).getMonth() + 1) + "" + new Date(EBE2_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 108px; right: 11px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 110px; text-align: center;">#@{{ EBE2_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 107px; right: 121px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center;background: #ffffffb3;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="EBE2_price_text_cheque" style="position: absolute; top: 96px; right: 217px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 333px; text-align: center;">فقط @{{ EBE2_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 117px; right: 200px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 410px; text-align: center;">@{{ EBE2_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 168px; right: 60px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ EBE2_location_cheque }} </p>
                <p class="underline" v-if="EBE2_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ EBE2_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'EBE2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE2'">
                <label for="EBE2_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="EBE2_date_cheque" id="EBE2_date_cheque" class="form-control" v-model="EBE2_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE2'">
                <label for="EBE2_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="EBE2_price_num_cheque" id="EBE2_price_num_cheque" class="form-control" v-model="EBE2_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'EBE2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE2'">
                <label for="EBE2_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="EBE2_price_text_cheque" id="EBE2_price_text_cheque" class="form-control" v-model="EBE2_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE2'">
                <label for="EBE2_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="EBE2_reason_cheque" id="EBE2_reason_cheque" class="form-control" v-model="EBE2_reason_cheque">
                </textarea>
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'EBE2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE2'">
                <label for="EBE2_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="EBE2_underline_cheque" id="EBE2_underline_cheque" class="form-control" v-model="EBE2_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE2'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- EBE2 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- EBE3 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'EBE3'" id="EBE3" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/EBE3_cheque.jpg')}}" alt="EBE3_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 69px; right: 135px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 430px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 19px; right: 33px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; letter-spacing: 6px;">@{{ new Date(EBE3_cheque_date).getDate() + "" +  (new Date(EBE3_cheque_date).getMonth() + 1) + "" + new Date(EBE3_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 108px; right: 11px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 110px; text-align: center;">#@{{ EBE3_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 107px; right: 121px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center;background: #ffffffb3;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="EBE3_price_text_cheque" style="position: absolute; top: 96px; right: 217px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 333px; text-align: center;">فقط @{{ EBE3_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 117px; right: 200px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 410px; text-align: center;">@{{ EBE3_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 168px; right: 60px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ EBE3_location_cheque }} </p>
                <p class="underline" v-if="EBE3_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ EBE3_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'EBE3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE3'">
                <label for="EBE3_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="EBE3_date_cheque" id="EBE3_date_cheque" class="form-control" v-model="EBE3_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'EBE3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE3'">
                <label for="EBE3_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="EBE3_price_num_cheque" id="EBE3_price_num_cheque" class="form-control" v-model="EBE3_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE3'">
                <label for="EBE3_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="EBE3_price_text_cheque" id="EBE3_price_text_cheque" class="form-control" v-model="EBE3_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'EBE3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE3'">
                <label for="EBE3_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="EBE3_reason_cheque" id="EBE3_reason_cheque" class="form-control" v-model="EBE3_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE3'">
                <label for="EBE3_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="EBE3_location_cheque" id="EBE3_location_cheque" class="form-control" v-model="EBE3_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'EBE3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE3'">
                <label for="EBE3_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="EBE3_underline_cheque" id="EBE3_underline_cheque" class="form-control" v-model="EBE3_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'EBE3'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- EBE3 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- AAIB Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'AAIB'" id="AAIB" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/AAIB_cheque.jpg')}}" alt="AAIB_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 77px; right: 135px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 390px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 19px; right: 53px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; ">@{{ new Date(AAIB_cheque_date).getDate() + "-" +  (new Date(AAIB_cheque_date).getMonth() + 1) + "-" + new Date(AAIB_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 150px; right: 56px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 144px; text-align: center;">#@{{ AAIB_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 150px; right: 204px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="AAIB_price_text_cheque" style="position: absolute; top: 115px; right: 65px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 493px; text-align: center;">فقط @{{ AAIB_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="underline" v-if="AAIB_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ AAIB_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'AAIB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB'">
                <label for="AAIB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="AAIB_date_cheque" id="AAIB_date_cheque" class="form-control" v-model="AAIB_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'AAIB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB'">
                <label for="AAIB_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="AAIB_price_num_cheque" id="AAIB_price_num_cheque" class="form-control" v-model="AAIB_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB'">
                <label for="AAIB_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="AAIB_price_text_cheque" id="AAIB_price_text_cheque" class="form-control" v-model="AAIB_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'AAIB'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB'">
                <label for="AAIB_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="AAIB_underline_cheque" id="AAIB_underline_cheque" class="form-control" v-model="AAIB_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- AAIB Cheque  --}}
        {{-- ################################################################  --}}

        {{-- AAIB2 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'AAIB2'" id="AAIB2" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/AAIB2_cheque.jpg')}}" alt="AAIB2_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 77px; right: 135px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 390px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 56px; right: 53px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;">@{{ new Date(AAIB2_cheque_date).getDate() + "-" +  (new Date(AAIB2_cheque_date).getMonth() + 1) + "-" + new Date(AAIB2_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 150px; right: 56px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 144px; text-align: center;">#@{{ AAIB2_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 150px; right: 204px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="AAIB2_price_text_cheque" style="position: absolute; top: 115px; right: 65px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 493px; text-align: center;">فقط @{{ AAIB2_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="underline" v-if="AAIB2_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ AAIB2_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'AAIB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB2'">
                <label for="AAIB2_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="AAIB2_date_cheque" id="AAIB2_date_cheque" class="form-control" v-model="AAIB2_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'AAIB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB2'">
                <label for="AAIB2_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="AAIB2_price_num_cheque" id="AAIB2_price_num_cheque" class="form-control" v-model="AAIB2_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB2'">
                <label for="AAIB2_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="AAIB2_price_text_cheque" id="AAIB2_price_text_cheque" class="form-control" v-model="AAIB2_price_text_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'AAIB2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB2'">
                <label for="AAIB2_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="AAIB2_underline_cheque" id="AAIB2_underline_cheque" class="form-control" v-model="AAIB2_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'AAIB2'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- AAIB2 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- HSBC Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'HSBC'" id="HSBC" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/HSBC_cheque.jpg')}}" alt="HSBC_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 112px; right: 115px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 390px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 82px; right: 63px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;">@{{ new Date(HSBC_cheque_date).getDate() + "-" +  (new Date(HSBC_cheque_date).getMonth() + 1) + "-" + new Date(HSBC_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 160px; right: 46px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 114px; text-align: center;">#@{{ HSBC_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 199px; right: 72px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="HSBC_price_text_cheque" style="position: absolute; top: 149px; right: 185px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 393px; text-align: center;">فقط @{{ HSBC_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 178px; right: 250px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 330px; text-align: center;">@{{ HSBC_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 168px; right: 60px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ HSBC_location_cheque }} </p>
                <p class="underline" v-if="HSBC_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ HSBC_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'HSBC'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC'">
                <label for="HSBC_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="HSBC_date_cheque" id="HSBC_date_cheque" class="form-control" v-model="HSBC_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC'">
                <label for="HSBC_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="HSBC_price_num_cheque" id="HSBC_price_num_cheque" class="form-control" v-model="HSBC_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'HSBC'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC'">
                <label for="HSBC_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="HSBC_price_text_cheque" id="HSBC_price_text_cheque" class="form-control" v-model="HSBC_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC'">
                <label for="HSBC_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="HSBC_reason_cheque" id="HSBC_reason_cheque" class="form-control" v-model="HSBC_reason_cheque">
                </textarea>
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'HSBC'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC'">
                <label for="HSBC_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="HSBC_underline_cheque" id="HSBC_underline_cheque" class="form-control" v-model="HSBC_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- HSBC Cheque  --}}
        {{-- ################################################################  --}}

        {{-- HSBC7 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'HSBC7'" id="HSBC7" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/HSBC7_cheque.jpg')}}" alt="HSBC7_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 71px; right: 128px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 370px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 17px; right: 46px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; letter-spacing: 6px;">@{{ new Date(HSBC7_cheque_date).getDate() + "" +  (new Date(HSBC7_cheque_date).getMonth() + 1) + "" + new Date(HSBC7_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 128px; right: 25px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 100px; text-align: center;">#@{{ HSBC7_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 125px; right: 132px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="HSBC7_price_text_cheque" style="position: absolute; top: 105px; right: 225px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 333px; text-align: center;">فقط @{{ HSBC7_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 126px; right: 190px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ HSBC7_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 148px; right: 20px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ HSBC7_location_cheque }} </p>
                <p class="underline" v-if="HSBC7_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ HSBC7_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'HSBC7'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC7'">
                <label for="HSBC7_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="HSBC7_date_cheque" id="HSBC7_date_cheque" class="form-control" v-model="HSBC7_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'HSBC7'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC7'">
                <label for="HSBC7_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="HSBC7_price_num_cheque" id="HSBC7_price_num_cheque" class="form-control" v-model="HSBC7_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC7'">
                <label for="HSBC7_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="HSBC7_price_text_cheque" id="HSBC7_price_text_cheque" class="form-control" v-model="HSBC7_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'HSBC7'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC7'">
                <label for="HSBC7_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="HSBC7_reason_cheque" id="HSBC7_reason_cheque" class="form-control" v-model="HSBC7_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC7'">
                <label for="HSBC7_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="HSBC7_location_cheque" id="HSBC7_location_cheque" class="form-control" v-model="HSBC7_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'HSBC7'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC7'">
                <label for="HSBC7_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="HSBC7_underline_cheque" id="HSBC7_underline_cheque" class="form-control" v-model="HSBC7_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'HSBC7'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- HSBC7 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- MISR Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'MISR'" id="MISR" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/MISR_cheque.jpg')}}" alt="MISR_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 76px; right: 128px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 370px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 20px; right: 56px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;">@{{ new Date(MISR_cheque_date).getDate() + "-" +  (new Date(MISR_cheque_date).getMonth() + 1) + "-" + new Date(MISR_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 128px; right: 15px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 100px; text-align: center;">#@{{ MISR_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 125px; right: 121px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="MISR_price_text_cheque" style="position: absolute; top: 110px; right: 225px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 333px; text-align: center;">فقط @{{ MISR_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 140px; right: 190px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ MISR_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 178px; right: 340px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ MISR_location_cheque }} </p>
                <p class="underline" v-if="MISR_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ MISR_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'MISR'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'MISR'">
                <label for="MISR_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="MISR_date_cheque" id="MISR_date_cheque" class="form-control" v-model="MISR_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'MISR'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'MISR'">
                <label for="MISR_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="MISR_price_num_cheque" id="MISR_price_num_cheque" class="form-control" v-model="MISR_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'MISR'">
                <label for="MISR_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="MISR_price_text_cheque" id="MISR_price_text_cheque" class="form-control" v-model="MISR_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'MISR'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'MISR'">
                <label for="MISR_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="MISR_reason_cheque" id="MISR_reason_cheque" class="form-control" v-model="MISR_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'MISR'">
                <label for="MISR_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="MISR_location_cheque" id="MISR_location_cheque" class="form-control" v-model="MISR_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'MISR'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'MISR'">
                <label for="MISR_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="MISR_underline_cheque" id="MISR_underline_cheque" class="form-control" v-model="MISR_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'MISR'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- MISR Cheque  --}}
        {{-- ################################################################  --}}

        {{-- misr3 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'misr3'" id="misr3" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/misr3_cheque.jpg')}}" alt="misr3_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 72px; right: 148px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 370px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 17px; right: 47px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; letter-spacing: 6px;">@{{ new Date(misr3_cheque_date).getDate() + "" +  (new Date(misr3_cheque_date).getMonth() + 1) + "" + new Date(misr3_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 120px; right: 25px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 95px; text-align: center;">#@{{ misr3_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 123px; right: 131px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="misr3_price_text_cheque" style="position: absolute; top: 105px; right: 235px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 323px; text-align: center;">فقط @{{ misr3_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 131px; right: 190px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ misr3_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 153px; right: 30px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 200px; text-align: center;">@{{ misr3_location_cheque }} </p>
                <p class="underline" v-if="misr3_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ misr3_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'misr3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'misr3'">
                <label for="misr3_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="misr3_date_cheque" id="misr3_date_cheque" class="form-control" v-model="misr3_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'misr3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'misr3'">
                <label for="misr3_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="misr3_price_num_cheque" id="misr3_price_num_cheque" class="form-control" v-model="misr3_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'misr3'">
                <label for="misr3_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="misr3_price_text_cheque" id="misr3_price_text_cheque" class="form-control" v-model="misr3_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'misr3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'misr3'">
                <label for="misr3_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="misr3_reason_cheque" id="misr3_reason_cheque" class="form-control" v-model="misr3_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'misr3'">
                <label for="misr3_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="misr3_location_cheque" id="misr3_location_cheque" class="form-control" v-model="misr3_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'misr3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'misr3'">
                <label for="misr3_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="misr3_underline_cheque" id="misr3_underline_cheque" class="form-control" v-model="misr3_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'misr3'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- misr3 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- BOC Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'BOC'" id="BOC" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/BOC_cheque.jpg')}}" alt="BOC_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 103px; right: 148px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 440px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 64px; right: 73px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;">@{{ new Date(BOC_cheque_date).getDate() + "-" +  (new Date(BOC_cheque_date).getMonth() + 1) + "-" + new Date(BOC_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 158px; right: 40px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 110px; text-align: center;">#@{{ BOC_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 156px; right: 151px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="BOC_price_text_cheque" style="position: absolute; top: 151px; right: 235px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 323px; text-align: center;">فقط @{{ BOC_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 131px; right: 190px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ BOC_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 199px; right: 40px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 160px; text-align: center;">@{{ BOC_location_cheque }} </p>
                <p class="underline" v-if="BOC_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ BOC_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'BOC'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC'">
                <label for="BOC_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="BOC_date_cheque" id="BOC_date_cheque" class="form-control" v-model="BOC_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC'">
                <label for="BOC_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="BOC_price_num_cheque" id="BOC_price_num_cheque" class="form-control" v-model="BOC_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'BOC'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC'">
                <label for="BOC_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="BOC_price_text_cheque" id="BOC_price_text_cheque" class="form-control" v-model="BOC_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC'">
                <label for="BOC_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="BOC_location_cheque" id="BOC_location_cheque" class="form-control" v-model="BOC_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'BOC'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC'">
                <label for="BOC_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="BOC_underline_cheque" id="BOC_underline_cheque" class="form-control" v-model="BOC_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- BOC Cheque  --}}
        {{-- ################################################################  --}}

        {{-- BOC2 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'BOC2'" id="BOC2" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/BOC2_cheque.jpg')}}" alt="BOC2_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 86px; right: 68px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 480px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 48px; right: 50px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;">@{{ new Date(BOC2_cheque_date).getDate() + "-" +  (new Date(BOC2_cheque_date).getMonth() + 1) + "-" + new Date(BOC2_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 148px; right: 52px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 110px; text-align: center;">#@{{ BOC2_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 147px; right: 164px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="BOC2_price_text_cheque" style="position: absolute; top: 123px; right: 85px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 463px; text-align: center;">فقط @{{ BOC2_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 152px; right: 228px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ BOC2_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 175px; right: 70px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 220px; text-align: center;">@{{ BOC2_location_cheque }} </p>
                <p class="underline" v-if="BOC2_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ BOC2_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'BOC2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC2'">
                <label for="BOC2_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="BOC2_date_cheque" id="BOC2_date_cheque" class="form-control" v-model="BOC2_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'BOC2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC2'">
                <label for="BOC2_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="BOC2_price_num_cheque" id="BOC2_price_num_cheque" class="form-control" v-model="BOC2_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC2'">
                <label for="BOC2_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="BOC2_price_text_cheque" id="BOC2_price_text_cheque" class="form-control" v-model="BOC2_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'BOC2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC2'">
                <label for="BOC2_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="BOC2_reason_cheque" id="BOC2_reason_cheque" class="form-control" v-model="BOC2_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC2'">
                <label for="BOC2_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="BOC2_location_cheque" id="BOC2_location_cheque" class="form-control" v-model="BOC2_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'BOC2'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC2'">
                <label for="BOC2_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="BOC2_underline_cheque" id="BOC2_underline_cheque" class="form-control" v-model="BOC2_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC2'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- BOC2 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- BOC3 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'BOC3'" id="BOC3" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/BOC3_cheque.jpg')}}" alt="BOC3_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 75px; right: 138px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 440px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 21px; right: 42px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; letter-spacing: 6px;">@{{ new Date(BOC3_cheque_date).getDate() + "" +  (new Date(BOC3_cheque_date).getMonth() + 1) + "" + new Date(BOC3_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 127px; right: 21px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 100px; text-align: center;">#@{{ BOC3_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 125px; right: 123px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="BOC3_price_text_cheque" style="position: absolute; top: 108px; right: 226px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 337px; text-align: center;">فقط @{{ BOC3_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 136px; right: 189px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ BOC3_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 155px; right: 20px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 220px; text-align: center;">@{{ BOC3_location_cheque }} </p>
                <p class="underline" v-if="BOC3_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ BOC3_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'BOC3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC3'">
                <label for="BOC3_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="BOC3_date_cheque" id="BOC3_date_cheque" class="form-control" v-model="BOC3_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'BOC3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC3'">
                <label for="BOC3_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="BOC3_price_num_cheque" id="BOC3_price_num_cheque" class="form-control" v-model="BOC3_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC3'">
                <label for="BOC3_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="BOC3_price_text_cheque" id="BOC3_price_text_cheque" class="form-control" v-model="BOC3_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'BOC3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC3'">
                <label for="BOC3_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="BOC3_reason_cheque" id="BOC3_reason_cheque" class="form-control" v-model="BOC3_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC3'">
                <label for="BOC3_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="BOC3_location_cheque" id="BOC3_location_cheque" class="form-control" v-model="BOC3_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'BOC3'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC3'">
                <label for="BOC3_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="BOC3_underline_cheque" id="BOC3_underline_cheque" class="form-control" v-model="BOC3_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'BOC3'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- BOC3 Cheque  --}}
        {{-- ################################################################  --}}

        {{-- NBD Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'NBD'" id="NBD" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/NBD_cheque.jpg')}}" alt="NBD_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 63px; right: 128px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 440px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 16px; right: 173px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;">@{{ new Date(NBD_cheque_date).getDate() + "-" +  (new Date(NBD_cheque_date).getMonth() + 1) + "-" + new Date(NBD_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 116px; right: 21px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 128px; text-align: center;">#@{{ NBD_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 115px; right: 151px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="NBD_price_text_cheque" style="position: absolute; top: 98px; right: 228px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 367px; text-align: center;">فقط @{{ NBD_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 127px; right: 199px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ NBD_reason_cheque }} </p>
                <p class="location" style="position: absolute; top: 155px; right: 60px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 310px; text-align: center;">@{{ NBD_location_cheque }} </p>
                <p class="underline" v-if="NBD_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ NBD_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'NBD'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD'">
                <label for="NBD_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="NBD_date_cheque" id="NBD_date_cheque" class="form-control" v-model="NBD_cheque_date">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'NBD'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD'">
                <label for="NBD_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="NBD_price_num_cheque" id="NBD_price_num_cheque" class="form-control" v-model="NBD_price_num_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD'">
                <label for="NBD_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="NBD_price_text_cheque" id="NBD_price_text_cheque" class="form-control" v-model="NBD_price_text_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'NBD'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD'">
                <label for="NBD_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="NBD_reason_cheque" id="NBD_reason_cheque" class="form-control" v-model="NBD_reason_cheque">
                </textarea>
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD'">
                <label for="NBD_location_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px"> اسم موقع الشيك</label>
                <input type="text" name="NBD_location_cheque" id="NBD_location_cheque" class="form-control" v-model="NBD_location_cheque">
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'NBD'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD'">
                <label for="NBD_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="NBD_underline_cheque" id="NBD_underline_cheque" class="form-control" v-model="NBD_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- NBD Cheque  --}}
        {{-- ################################################################  --}}


        {{-- NBD4 Cheque  --}}
        <div class="cheque_wrapper" id="cheque_wrapper" v-if="banck == 'NBD4'" id="NBD4" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative;overflow: hidden; width: min-content;margin: auto">
                <img src="{{asset('/imgs/NBD4_cheque.jpg')}}" alt="NBD4_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute; top: 69px; right: 145px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 18px; margin: 0px; width: 430px; text-align: center;">@{{ name }}</p>
                <p class="date" dir="ltr" style="position: absolute; top: 24px; right: 42px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px;letter-spacing: 6px;">@{{ new Date(NBD4_cheque_date).getDate() + "" +  (new Date(NBD4_cheque_date).getMonth() + 1) + "" + new Date(NBD4_cheque_date).getFullYear()}}</p>
                <p class="num_price" style="position: absolute; top: 107px; right: 21px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 14px; margin: 0px; width: 106px; text-align: center;">#@{{ NBD4_price_num_cheque }}#</p>
                <p class="currency" style="position: absolute; top: 105px; right: 128px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 15px; margin: 0px; width: 39px; text-align: center; background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">@{{ currency_cheque }}</p>
                <p class="text_price" v-if="NBD4_price_text_cheque" style="position: absolute; top: 96px; right: 228px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 12px; margin: 0px; width: 325px; text-align: center;">فقط @{{ NBD4_price_text_cheque }} @{{ currency_cheque_text }} لا غير</p>
                <p class="reason" style="position: absolute; top: 118px; right: 199px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 13px; margin: 0px; width: 390px; text-align: center;">@{{ NBD4_reason_cheque }} </p>
                <p class="underline" v-if="NBD4_underline_cheque"  style="font-size: 13px;text-align: center;padding: 4px;border-top: 2px solid black;border-bottom: 2px solid black;z-index: 300;transform: rotate(-45deg);position: absolute;top: 80px;left: 0;transform-origin: left top;min-width: 120px;font-size: 13px;color: #000;font-weight: 700;">@{{ NBD4_underline_cheque }} </p>
            </div>
        </div>
        <div class="d-flex gap-2"  v-if="banck == 'NBD4'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD4'">
                <label for="NBD4_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">تاريخ الشيك</label>
                <input type="date" name="NBD4_date_cheque" id="NBD4_date_cheque" class="form-control" v-model="NBD4_cheque_date">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD4'">
                <label for="NBD4_price_num_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالارقام</label>
                <input type="number" name="NBD4_price_num_cheque" id="NBD4_price_num_cheque" class="form-control" v-model="NBD4_price_num_cheque">
            </div>
        </div>
        <div class="d-flex gap-2" v-if="banck == 'NBD4'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD4'">
                <label for="NBD4_price_text_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">المبلغ بالاحرف</label>
                <input type="text" name="NBD4_price_text_cheque" id="NBD4_price_text_cheque" class="form-control" v-model="NBD4_price_text_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD4'">
                <label for="NBD4_reason_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">وذلك لقاء</label>
                <textarea name="NBD4_reason_cheque" id="NBD4_reason_cheque" class="form-control" v-model="NBD4_reason_cheque">
                </textarea>
            </div>
        </div>

        <div class="d-flex gap-2" v-if="banck == 'NBD4'">
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD4'">
                <label for="NBD4_underline_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">التسطير</label>
                <input type="text" name="NBD4_underline_cheque" id="NBD4_underline_cheque" class="form-control" v-model="NBD4_underline_cheque">
            </div>
            <div class="form-group mb-3 w-50"  v-if="banck == 'NBD4'">
                <label for="currency_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">العملة</label>
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque" @change="handleCurrencyChequeChange()">
                    <option value="JOD" en_cur="Jordanian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار اردني" ar_cur2="ديناراً أردنياً">دينار اردني</option>
                    <option value="IQD" en_cur="Iraqi Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار عراقي" ar_cur2="ديناراً عراقياً">دينار عراقي</option>
                    <option value="BHD" en_cur="Bahraini Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار بحريني" ar_cur2="ديناراً بحرينياً">دينار بحريني</option>
                    <option value="KWD" en_cur="Kuwaiti Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="فلس" cur_div2="Fils" cur_fr="1000" ar_cur="دينار كويتي" ar_cur2="ديناراً كويتياً">دينار كويتي</option>
                    <option value="LYD" en_cur="Libyan Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="درهم" cur_div2="dirham" cur_fr="1000" ar_cur="دينار ليبي" ar_cur2="ديناراً ليبياً">دينار ليبي</option>
                    <option value="DZD" en_cur="Algerian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="دينار جزائري" ar_cur2="ديناراً جزائرياً">دينار جزائري</option>
                    <option value="TND" en_cur="Tunisian Dinar" short_cur_en="Dinar" short_cur="دينار" cur_div="مليم" cur_div2="millime" cur_fr="1000" ar_cur="دينار تونسي" ar_cur2="ديناراً تونسياً">دينار تونسي</option>
                    <option value="AED" en_cur="UAE Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="درهم إماراتي" ar_cur2="درهماً إماراتياً">درهم إماراتي</option>
                    <option value="MAD" en_cur="Moroccan Dirham" short_cur_en="Dirham" short_cur="درهم" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="درهم مغربي" ar_cur2="درهماً مغربياً">درهم مغربي</option>
                    <option value="SAR" en_cur="Saudi Riyal" short_cur_en="Riyal" short_cur="ريال" cur_div="هللة" cur_div2="halala" cur_fr="100" ar_cur="ريال سعودي" ar_cur2="ريالاً سعودياً">ريال سعودي</option>
                    <option value="QAR" en_cur="Qatari Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="درهم" cur_div2="dirham" cur_fr="100" ar_cur="ريال قطري" ar_cur2="ريالاً قطرياً">ريال قطري</option>
                    <option value="YER" en_cur="Yemeni Rial" short_cur_en="Riyal" short_cur="ريال" cur_div="فلس" cur_div2="Fils" cur_fr="100" ar_cur="ريال يمني" ar_cur2="ريالاً يمنياً">ريال يمني</option>
                    <option value="OMR" en_cur="Rial Omani" short_cur_en="Riyal" short_cur="ريال" cur_div="بيسة" cur_div2="baisa" cur_fr="1000" ar_cur="ريال عماني" ar_cur2="ريالاً عمانياً">ريال عماني</option>
                    <option value="EGP" en_cur="Egyptian Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه مصري" ar_cur2="جنيهاً مصرياً">جنيه مصري</option>
                    <option value="SDG" en_cur="Sudanese Pound" short_cur_en="Pound" short_cur="جنيه" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="جنيه سوداني" ar_cur2="جنيهاً سودانياً">جنيه سوداني</option>
                    <option value="SYP" en_cur="Syrian Pound" short_cur_en="Pound" short_cur="ليرة" cur_div="قرش" cur_div2="piasters" cur_fr="100" ar_cur="ليرة سورية" ar_cur2="ليرة سورية">ليرة سورية</option>
                    <option value="USD" en_cur="US Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار أمريكي" ar_cur2="دولاراً أمريكياً">دولار أمريكي</option>
                    <option value="EUR" en_cur="Euro" short_cur_en="Euro" short_cur="يورو" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="يورو" ar_cur2="يورو">يورو</option>
                    <option value="GBP" en_cur="GBP" short_cur_en="Pound" short_cur="باوند" cur_div="بنس" cur_div2="pence" cur_fr="100" ar_cur="جنيه استرليني" ar_cur2="جنيهاً إسترلينياً">جنيه استرليني</option>
                    <option value="Fdj" en_cur="Fdj" short_cur_en="Franc" short_cur="فرنك" cur_div="سنتيم" cur_div2="centime" cur_fr="100" ar_cur="فرنك جيبوتي" ar_cur2="فرنكاً جيبوتياً">فرنك جيبوتي</option>
                    <option value="CAD" en_cur="CA Dollar" short_cur_en="Dollar" short_cur="دولار" cur_div="سنت" cur_div2="cent" cur_fr="100" ar_cur="دولار كندي" ar_cur2="دولاراً كندياً">دولار كندي</option>
                    <option value="PHP" en_cur="piso" short_cur_en="piso" short_cur="بيزو" cur_div="سنتيم" cur_div2="sentimo" cur_fr="100" ar_cur="بيزو فلبيني" ar_cur2="بيزو فلبيني">بيزو فلبيني</option>
                    <option value="ILS" en_cur="Shekel" short_cur_en="Shekel" short_cur="شيقل" cur_div="أغورة" cur_div2="agura" cur_fr="100" ar_cur="شيقل" ar_cur2="شيقل">شيقل</option>
                </select>
            </div>
        </div>
        {{-- NBD4 Cheque  --}}
        {{-- ################################################################  --}}

        <button class="btn btn-primary w-25 mb-5" @click="getChequeContent().then(() => {add()})">اضافة الشيك</button>
    </form>
</div>
@endsection

@section('scripts')
    <script>
        const { createApp, ref } = Vue

        createApp({
            data() {
                return {
                    id: "{{$Reprsentative->id}}",
                    name: "{{$Reprsentative->name}}",
                    cheque: null,
                    banck: 'NBE',
                    currency_cheque: "EGP",
                    currency_cheque_text: "جنيه مصري",

                    // NBE
                    NBE_cheque_date: new Date().toISOString().split('T')[0],
                    NBE_place_cheque: null,
                    NBE_price_num_cheque: null,
                    NBE_price_text_cheque: null,
                    NBE_reason_cheque: null,
                    NBE_location_cheque: null,
                    NBE_underline_cheque: null,
                    
                    // CIB
                    CIB_cheque_date: new Date().toISOString().split('T')[0],
                    CIB_price_num_cheque: null,
                    CIB_price_text_cheque: null,
                    CIB_reason_cheque: null,
                    CIB_location_cheque: null,
                    CIB_underline_cheque: null,

                    // CIB3
                    CIB3_cheque_date: new Date().toISOString().split('T')[0],
                    CIB3_price_num_cheque: null,
                    CIB3_price_text_cheque: null,
                    CIB3_reason_cheque: null,
                    CIB3_location_cheque: null,
                    CIB3_underline_cheque: null,

                    // CIB2
                    CIB2_cheque_date: new Date().toISOString().split('T')[0],
                    CIB2_price_num_cheque: null,
                    CIB2_price_text_cheque: null,
                    CIB2_reason_cheque: null,
                    CIB2_location_cheque: null,
                    CIB2_underline_cheque: null,

                    // QNB
                    QNB_cheque_date: new Date().toISOString().split('T')[0],
                    QNB_price_num_cheque: null,
                    QNB_price_text_cheque: null,
                    QNB_reason_cheque: null,
                    QNB_location_cheque: null,
                    QNB_underline_cheque: null,

                    // qnb3
                    qnb3_cheque_date: new Date().toISOString().split('T')[0],
                    qnb3_price_num_cheque: null,
                    qnb3_price_text_cheque: null,
                    qnb3_reason_cheque: null,
                    qnb3_location_cheque: null,
                    qnb3_underline_cheque: null,

                    // UNB
                    UNB_cheque_date: new Date().toISOString().split('T')[0],
                    UNB_place_cheque: null,
                    UNB_price_num_cheque: null,
                    UNB_price_text_cheque: null,
                    UNB_reason_cheque: null,
                    UNB_location_cheque: null,
                    UNB_underline_cheque: null,

                    // AUB
                    AUB_cheque_date: new Date().toISOString().split('T')[0],
                    AUB_place_cheque: null,
                    AUB_price_num_cheque: null,
                    AUB_price_text_cheque: null,
                    AUB_reason_cheque: null,
                    AUB_location_cheque: null,
                    AUB_underline_cheque: null,

                    // AUB2
                    AUB2_cheque_date: new Date().toISOString().split('T')[0],
                    AUB2_place_cheque: null,
                    AUB2_price_num_cheque: null,
                    AUB2_price_text_cheque: null,
                    AUB2_reason_cheque: null,
                    AUB2_location_cheque: null,
                    AUB2_underline_cheque: null,


                    // EBE
                    EBE_cheque_date: new Date().toISOString().split('T')[0],
                    EBE_place_cheque: null,
                    EBE_price_num_cheque: null,
                    EBE_price_text_cheque: null,
                    EBE_reason_cheque: null,
                    EBE_location_cheque: null,
                    EBE_underline_cheque: null,

                    // EBE2
                    EBE2_cheque_date: new Date().toISOString().split('T')[0],
                    EBE2_place_cheque: null,
                    EBE2_price_num_cheque: null,
                    EBE2_price_text_cheque: null,
                    EBE2_reason_cheque: null,
                    EBE2_location_cheque: null,
                    EBE2_underline_cheque: null,

                    // EBE3
                    EBE3_cheque_date: new Date().toISOString().split('T')[0],
                    EBE3_place_cheque: null,
                    EBE3_price_num_cheque: null,
                    EBE3_price_text_cheque: null,
                    EBE3_reason_cheque: null,
                    EBE3_location_cheque: null,
                    EBE3_underline_cheque: null,

                    // AAIB
                    AAIB_cheque_date: new Date().toISOString().split('T')[0],
                    AAIB_place_cheque: null,
                    AAIB_price_num_cheque: null,
                    AAIB_price_text_cheque: null,
                    AAIB_reason_cheque: null,
                    AAIB_location_cheque: null,
                    AAIB_underline_cheque: null,

                    // AAIB2
                    AAIB2_cheque_date: new Date().toISOString().split('T')[0],
                    AAIB2_place_cheque: null,
                    AAIB2_price_num_cheque: null,
                    AAIB2_price_text_cheque: null,
                    AAIB2_reason_cheque: null,
                    AAIB2_location_cheque: null,
                    AAIB2_underline_cheque: null,

                    // HSBC
                    HSBC_cheque_date: new Date().toISOString().split('T')[0],
                    HSBC_place_cheque: null,
                    HSBC_price_num_cheque: null,
                    HSBC_price_text_cheque: null,
                    HSBC_reason_cheque: null,
                    HSBC_location_cheque: null,
                    HSBC_underline_cheque: null,

                    // HSBC7
                    HSBC7_cheque_date: new Date().toISOString().split('T')[0],
                    HSBC7_place_cheque: null,
                    HSBC7_price_num_cheque: null,
                    HSBC7_price_text_cheque: null,
                    HSBC7_reason_cheque: null,
                    HSBC7_location_cheque: null,
                    HSBC7_underline_cheque: null,


                    // MISR
                    MISR_cheque_date: new Date().toISOString().split('T')[0],
                    MISR_place_cheque: null,
                    MISR_price_num_cheque: null,
                    MISR_price_text_cheque: null,
                    MISR_reason_cheque: null,
                    MISR_location_cheque: null,
                    MISR_underline_cheque: null,

                    // misr3
                    misr3_cheque_date: new Date().toISOString().split('T')[0],
                    misr3_place_cheque: null,
                    misr3_price_num_cheque: null,
                    misr3_price_text_cheque: null,
                    misr3_reason_cheque: null,
                    misr3_location_cheque: null,
                    misr3_underline_cheque: null,

                    // BOC
                    BOC_cheque_date: new Date().toISOString().split('T')[0],
                    BOC_place_cheque: null,
                    BOC_price_num_cheque: null,
                    BOC_price_text_cheque: null,
                    BOC_reason_cheque: null,
                    BOC_location_cheque: null,
                    BOC_underline_cheque: null,

                    // BOC2
                    BOC2_cheque_date: new Date().toISOString().split('T')[0],
                    BOC2_place_cheque: null,
                    BOC2_price_num_cheque: null,
                    BOC2_price_text_cheque: null,
                    BOC2_reason_cheque: null,
                    BOC2_location_cheque: null,
                    BOC2_underline_cheque: null,

                    // BOC3
                    BOC3_cheque_date: new Date().toISOString().split('T')[0],
                    BOC3_place_cheque: null,
                    BOC3_price_num_cheque: null,
                    BOC3_price_text_cheque: null,
                    BOC3_reason_cheque: null,
                    BOC3_location_cheque: null,
                    BOC3_underline_cheque: null,

                    // NBD
                    NBD_cheque_date: new Date().toISOString().split('T')[0],
                    NBD_place_cheque: null,
                    NBD_price_num_cheque: null,
                    NBD_price_text_cheque: null,
                    NBD_reason_cheque: null,
                    NBD_location_cheque: null,
                    NBD_underline_cheque: null,


                    // NBD4
                    NBD4_cheque_date: new Date().toISOString().split('T')[0],
                    NBD4_place_cheque: null,
                    NBD4_price_num_cheque: null,
                    NBD4_price_text_cheque: null,
                    NBD4_reason_cheque: null,
                    NBD4_location_cheque: null,
                    NBD4_underline_cheque: null,



                }
            },
            methods: {
                async add() {
                    $('.loader').fadeIn().css('display', 'flex')
                        try {
                            const response = await axios.post(`{{ route('cheque.put') }}`, {
                                id: this.id,
                                name: this.name,
                                cheque: this.cheque
                            });
                            if (response.data.status === true) {
                                document.getElementById('errors').innerHTML = ''
                                let error = document.createElement('div')
                                error.classList = 'success'
                                error.innerHTML = response.data.message
                                document.getElementById('errors').append(error)
                                $('#errors').fadeIn('slow')
                                $('.loader').fadeOut()
                                setTimeout(() => {
                                    $('#errors').fadeOut('slow')
                                    window.location.href = '/sys/Cheque/' + response.data.data.id
                                }, 2000);
                            } else {
                            $('.loader').fadeOut()
                            document.getElementById('errors').innerHTML = ''
                            $.each(response.data.errors, function (key, value) {
                                let error = document.createElement('div')
                                error.classList = 'error'
                                error.innerHTML = value
                                document.getElementById('errors').append(error)
                            });
                            $('#errors').fadeIn('slow')
                            setTimeout(() => {
                                $('input').css('outline', 'none')
                                $('#errors').fadeOut('slow')
                            }, 5000);
                            }

                        } catch (error) {
                            document.getElementById('errors').innerHTML = ''
                            let err = document.createElement('div')
                            err.classList = 'error'
                            err.innerHTML = 'server error try again later'
                            document.getElementById('errors').append(err)
                            $('#errors').fadeIn('slow')
                            $('.loader').fadeOut()

                            setTimeout(() => {
                            $('#errors').fadeOut('slow')
                            }, 3500);

                            console.error(error);
                        }
                },
                handleCurrencyChequeChange() {
                    switch (this.currency_cheque) {
                        case "JOD":
                            this.currency_cheque_text = "دينار اردني";
                            break;
                        case "IQD":
                            this.currency_cheque_text = "دينار عراقي";
                            break;
                        case "BHD":
                            this.currency_cheque_text = "دينار بحريني";
                            break;
                        case "KWD":
                            this.currency_cheque_text = "دينار كويتي";
                            break;
                        case "LYD":
                            this.currency_cheque_text = "دينار ليبي";
                            break;
                        case "DZD":
                            this.currency_cheque_text = "دينار جزائري";
                            break;
                        case "TND":
                            this.currency_cheque_text = "دينار تونسي";
                            break;
                        case "AED":
                            this.currency_cheque_text = "درهم إماراتي";
                            break;
                        case "MAD":
                            this.currency_cheque_text = "درهم مغربي";
                            break;
                        case "SAR":
                            this.currency_cheque_text = "ريال سعودي";
                            break;
                        case "QAR":
                            this.currency_cheque_text = "ريال قطري";
                            break;
                        case "YER":
                            this.currency_cheque_text = "ريال يمني";
                            break;
                        case "OMR":
                            this.currency_cheque_text = "ريال عماني";
                            break;
                        case "EGP":
                            this.currency_cheque_text = "جنيه مصري";
                            break;
                        case "SDG":
                            this.currency_cheque_text = "جنيه سوداني";
                            break;
                        case "SYP":
                            this.currency_cheque_text = "ليرة سورية";
                            break;
                        case "USD":
                            this.currency_cheque_text = "دولار أمريكي";
                            break;
                        case "EUR":
                            this.currency_cheque_text = "يورو";
                            break;
                        case "GBP":
                            this.currency_cheque_text = "جنيه استرليني";
                            break;
                        case "Fdj":
                            this.currency_cheque_text = "فرنك جيبوتي";
                            break;
                        case "CAD":
                            this.currency_cheque_text = "دولار كندي";
                            break;
                        case "PHP":
                            this.currency_cheque_text = "بيزو فلبيني";
                            break;
                        case "ILS":
                            this.currency_cheque_text = "شيقل";
                            break;
                        default:
                            this.currency_cheque_text = "";
                            break;
                    }
                },
                async getChequeContent() {
                    if (document.getElementById('cheque_wrapper') && document.getElementById('cheque_wrapper').innerHTML != '')
                        this.cheque = document.getElementById('cheque_wrapper').innerHTML;
                },
            },
            created() {
                $('.loader').fadeOut()
            },
        }).mount('#Cheque_wrapper')
    </script>
@endsection
@else
@section('content')
    
<div  id="Cheque_wrapper">
    <h1 class="text-center">404 | Not Found</h1>
</div>
@endsection
@endif
