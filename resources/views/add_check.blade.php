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
                <option value="NBE">البنك الأهلي المصري</option>
                <option value="CIB">البنك التجاري الدولي 1</option>
                <option value="CIB3">البنك التجاري الدولي 2</option>
                <option value="CIB2">البنك التجاري الدولي - Wealth</option>
                <option value="QNB">بنك قطر الوطني</option>
                <option value="qnb3">بنك قطر الوطني الأهلي</option>
                <option value="UNB">بنك الاتحاد الوطني</option>
                <option value="AUB">البنك الأهلي المتحد</option>
                <option value="AUB2">البنك الأهلي المتحد 2</option>
                <option value="EBE">1 البنك المصري لتنمية الصادرات</option>
                <option value="EBE2">البنك المصري لتنمية الصادرات 2</option>
                <option value="EBE3">البنك المصري لتنمية الصادرات 3</option>
                <option value="AAIB">البنك العربي الافريقي الدولي</option>
                <option value="AAIB2">البنك العربي الافريقي الدولي - Wealth</option>
                <option value="HSBC">بنك إتش اس بي سي</option>
                <option value="HSBC7">بنك إتش اس بي سي 2</option>
                <option value="MISR">بنك مصر</option>
                <option value="misr3">بنك مصر2</option>
                <option value="BOC">بنك القاهرة</option>
                <option value="BOC2">بنك القاهرة2</option>
                <option value="BOC3">بنك القاهرة3</option>
                <option value="NBD">بنك الإمارات دبي الوطني 1</option>
                <option value="NBD4">بنك الإمارات دبي الوطني 2</option>
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
        <div class="cheque_wrapper" v-if="banck == 'NBE'" id="NBE" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem">
            <div class="cheque" style="position: relative">
                <img src="{{asset('/imgs/NBE_cheque.jpg')}}" alt="NBE_cheque" style="width: 630px; max-width: 630px;">
                <p class="name" style="position: absolute;top: 80px;left: 50%;transform: translateX(-50%);z-index: 999999;color: #000;font-weight: 700;font-size: 18px;margin: 0;">@{{ name }}</p>
                <p class="date" style="position: absolute; top: 53px; right: 41px;  z-index: 999999; color: rgb(0, 0, 0); font-weight: 600; font-size: 12px; margin: 0px;">@{{ NBE_cheque_date }}</p>
                <p class="place" style="position: absolute; top: 53px; right: 142px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 600; font-size: 12px; margin: 0px;">@{{ NBE_place_cheque }}</p>
                <p class="num_price" style="position: absolute; top: 53px; right: 142px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 600; font-size: 12px; margin: 0px;">@{{ NBE_price_num_cheque }}</p>
                <p class="num_price" style="position: absolute; top: 53px; right: 142px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 600; font-size: 12px; margin: 0px;">@{{ NBE_price_num_cheque }}</p>
                <p class="currency" style="position: absolute; top: 130px; right: 161px; z-index: 999999; color: rgb(0, 0, 0); font-weight: 700; font-size: 17px; margin: 0px;">@{{ currency_cheque }}</p>
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
                <select id="currency_cheque" style="width:170px" class="form-control w-100" v-model="currency_cheque">
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

        <button class="btn btn-primary w-25" @click="add()">اضافة الشيك</button>
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
                    Cheque: null,
                    banck: 'NBE',
                    currency_cheque: "EGP",

                    // NBE
                    NBE_cheque_date: new Date().toISOString().split('T')[0],
                    NBE_place_cheque: null,
                    NBE_price_num_cheque: null,
                    NBE_price_text_cheque: null,
                    NBE_reason_cheque: null,
                    NBE_location_cheque: null,
                    NBE_underline_cheque: null,
                }
            },
            methods: {
            async add() {
                $('.loader').fadeIn().css('display', 'flex')
                    try {
                        const response = await axios.post(`{{ route('cheque.put') }}`, {
                            id: this.id,
                            name: this.name,
                            Cheque: this.Cheque
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
                                window.location.href = '/Cheque/' + response.data.data.id
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
