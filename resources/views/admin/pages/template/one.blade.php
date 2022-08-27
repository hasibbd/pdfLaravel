@extends('admin.app.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-body  mx-5">
                         <form action="{{url('store-one')}}" method="post">
                             @csrf
                             <div class="row">
                                 <div class="col-md-10 offset-md-1">
                                     <table class="custom-table">
                                         <tr>
                                             <td class="text-center"><img style="width: 85%" src="{{asset('template/images/logo.png')}}" alt=""></td>
                                         </tr>
                                         <tr>
                                             <td class="font-weight-bold pt-2 text-center">
                                                 ZMLUVA O REZERVÁCII  NEHNUTEĽNOSTÍ A POSKYTOVANÍ SLUŽIEB <br>
                                                 SLUŽIEB SÚVISIACICH S PREDAJOM A KÚPOU NEHNUTEĽNOSTÍ – DOM - BYT - POZEMOK

                                             </td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 (Ďalej len "Zmluva") uzatvorená medzi zmluvnými stranami  podľa § 51 Občianskeho zákonníka:
                                                 <br>
                                                 ALL INCLUSIVE REAL, s.r.o., so sídlom Ul. Biskupa Kondého 5138/30, 929 01 Dunajská Streda, IČO:
                                                 <br>
                                                 54140099, DIČ: 2121574059 zapísaná v obchodnom registri Okresného súdu v Trnave, v oddieli  Sro,
                                                 <br>
                                                 zastúpená na základe generálnej plnej moci Viktor Hodosi

                                             </td>
                                         </tr>
                                     </table>
                                     <table class="custom-table">
                                         <tr>
                                             <td colspan="4" class="text-right pr-5">
                                                 (ďalej len ako „Sprostredkovateľ“ na jednej  strane )
                                             </td>
                                         </tr>
                                         <tr>
                                             <td colspan="4" class="text-center">a</td>
                                         </tr>
                                         <tr>
                                             <td class="w-25 text-left">
                                                 Meno a priezvisko  <br>
                                                 Trvale bytom <br>
                                                 Obec, PSČ <br>
                                                 Dátum narodenia <br>
                                                 rodné číslo <br>
                                             </td>
                                             <td colspan="3" class=w-75>
                                                 <input name="t1" type="text"> <br>
                                                 <input name="t2" type="text"> <br>
                                                 <input name="t3" type="text"> <br>
                                                 <input name="t4" type="text"> <br>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td width="25">

                                             </td>
                                             <td class="text-right">
                                                 <br>
                                                 <br>
                                                 (ďalej  len ako „Záujemca“ tým sa má na mysli aj budúci kupujúci na druhej  strane )
                                                 <br>
                                                 (spoločne ďalej len ako „Zmluvné strany“)

                                             </td>
                                         </tr>
                                     </table>
                                     <hr style="border: 3px solid #000000;">
                                     <table class="custom-table">
                                         <tr>
                                             <td colspan="4" class="text-center">a</td>
                                         </tr>
                                         <tr>
                                             <td class="w-25 text-left">
                                                 Meno a priezvisko  <br>
                                                 Trvale bytom <br>
                                                 Obec, PSČ <br>
                                                 Dátum narodenia <br>
                                                 rodné číslo <br>
                                             </td>
                                             <td >
                                                 <input name="t5" type="text"> <br>
                                                 <input name="t6" type="text"> <br>
                                                 <input name="t7" type="text"> <br>
                                                 <input name="t8" type="text"> <br>
                                             </td>

                                             <td class="text-left">
                                                 <input name="t9" type="text"> <br>
                                                 <input name="t10" type="text"> <br>
                                                 <input name="t11" type="text"> <br>
                                                 <input name="t12" type="text"> <br>
                                             </td>
                                             <td>

                                             </td>
                                         </tr>
                                         <tr>
                                             <td width="25">

                                             </td>
                                             <td colspan="3" class="text-right">
                                                 <br>
                                                 <br>
                                                 (ďalej  len ako „Budúci Predávajúci“ na tretej strane ) <br>
                                                 (spoločne ďalej len ako „Zmluvné strany“)

                                             </td>
                                         </tr>
                                     </table>
                                     <br><br><br>
                                     Zmluvné strany sa v súvislosti s činnosťou sprostredkovateľa pri sprostredkovaní predaja a kúpy dole uvedených nehnuteľností ako predmetu kúpy uzatvárajú túto zmluvu:
                                     <hr style="border: 3px solid #000000; margin-top: 0px; !important;">
                                     <span class="font-weight-bold"> Článok  I. <br>
                                Predmet predaja a kúpy - Nehnuteľnosti:</span>
                                     <table class="custom-table table-bordered" style="border-color: black !important;">
                                         <tr class="text-center">
                                             <td rowspan="2" style="width: 15%;">
                                                 Predmet<br>
                                                 <input name="t13" style="width: 75%;" type="text">
                                             </td>
                                             <td style="width: 10%;">s.č.</td>
                                             <td style="width: 15%;">Obec</td>
                                             <td style="width: 20%;">LV</td>
                                             <td style="width: 40%;">
                                                 <select name="t14" id="">
                                                     <option value="">Select</option>
                                                     <option value="Iné budovy s. č.">Iné budovy s. č.</option>
                                                     <option value="Iné">Iné</option>
                                                 </select>
                                             </td>
                                         </tr>
                                         <tr class="text-center">
                                             <td>
                                                 <input name="t15" style="width: 70%;" type="text">
                                             </td>
                                             <td>
                                                 <input name="t16" style="width: 70%;" type="text">
                                             </td>
                                             <td>
                                                 <input name="t17" style="width: 70%;" type="text">
                                             </td>
                                             <td>
                                                 <input name="t18" style="width: 50%;" type="text"> <br>
                                                 Č. bytu:  <input  name="t19" style="width: 50%;" type="text"><br>
                                                 Č. vchodu:  <input name="t20" style="width: 50%;" type="text"><br>
                                                 Poschodie:  <input name="t21" style="width: 50%;" type="text"><br>

                                             </td>
                                         </tr>
                                         <tr class="text-center">
                                             <td rowspan="2">
                                                 POZEMKY <br>
                                                 (parc. č.) LV

                                             </td>
                                             <td  rowspan="2" colspan="3" class="text-left">
                                                 Pozemok:  <br>
                                                 <input  name="t22" type="text"> <br>
                                                 <input  name="t23" type="text"> <br>
                                                 <input name="t24" type="text"> <br>
                                                 <input name="t25" type="text"> <br>
                                                 <input name="t26" type="text"> <br>
                                                 <input name="t27" type="text"> <br>

                                                 LV:  <input name="t28" type="text"> <br>
                                                 Spoluvlastnícky podiel na pozemku: <input name="t29" type="text">

                                             </td>
                                             <td>
                                                 Katastrálne územie

                                             </td>
                                         </tr>
                                         <tr class="text-center">
                                             <td>
                                                 <input name="t30" type="text">

                                             </td>
                                         </tr>
                                     </table>
                                     <br>
                                     <br>
                                     <table>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 1
                                             </td>
                                             <td style="width: 95%;">
                                                 Predmetom tejto zmluvy je úprava práv a povinností zmluvných strán v súvislosti so sprostredkovateľskou realitnou činnosťou v zmysle § 774 a nasl. Občianskeho zákonníka v prospech vlastníkov nehnuteľností ako predávajúcich, súvisiace s prevodom  vlastníckeho práva;  s priamou príkaznou činnosťou sprostredkovateľa v prospech záujemcu v zmysle § 724 a nasl. Občianskeho zákonníka,  t.j. splnenie  príkazu záujemcu na kúpu  a pre  rezervovanie nehnuteľností, ktoré sú predmetom tejto zmluvy; a to všetko  k nehnuteľnostiam  uvedeným v tejto zmluve na zabezpečenie právnych úkonov smerujúcich k prevodu vlastníctva nehnuteľností vo vlastníctve  budúcich predávajúcich na dobu do uzavretia kúpnej zmluvy medzi záujemcom ako budúcim kupujúcim a predávajúcimi za účasti sprostredkovateľa.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 2
                                             </td>
                                             <td style="width: 95%;">
                                                 Budúci predávajúci a Záujemca vyhlasujú, že majú v úmysle uzatvoriť kúpnu zmluvu, na základe ktorej sa stane vlastníkom nehnuteľnosti špecifikovaných v článku I. tejto zmluvy Záujemca a za tým účelom sa dohodli na podstatných náležitostiach budúcej kúpnej zmluvy ako je ďalej uvedené.
                                             </td>
                                         </tr>
                                     </table>
                                     <br>
                                     <br>
                                     Článok  II.  Kúpna cena:
                                     <table>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 1
                                             </td>
                                             <td style="width: 95%;">
                                                 Kupujúci (záujemca) a budúci predávajúci sa dohodli na kúpnej cene vo výške  <input  name="t31" type="text">,- € (slovom:  <input name="t32"  type="text"> EUR)
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 2
                                             </td>
                                             <td style="width: 95%;">
                                                 Finančná odmena sprotredkovateľa <input  name="t33"  type="text">,- € (slovom: <input  name="t34"  type="text"> EUR), ktorá je súčasťou kúpnej ceny.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 3
                                             </td>
                                             <td style="width: 95%;">
                                                 Záujemca uhradí kúpnu cenu
                                                 <select name="t35" id="">
                                                     <option value="">Select</option>
                                                     <option value="z časti vlastných úspor a z časti bankového úveru">z časti vlastných úspor a z časti bankového úveru</option>
                                                     <option value="z vlastných úspor">z vlastných úspor</option>
                                                     <option value="z bankového úveru">z bankového úveru</option>
                                                 </select>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 4
                                             </td>
                                             <td style="width: 95%;">
                                                 Kúpna cena bude zo strany záujemcu vyplatená najneskôr dňa<input name="t36"  type="text">
                                             </td>
                                         </tr>
                                     </table>
                                     <br>
                                     <br>
                                     Dohoda o vyplatení finančnej zálohy:
                                     <table>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 5
                                             </td>
                                             <td style="width: 95%;">
                                                 Záujemca o kúpu (budúci kupujúci) ako prejav svojej vážnej vôle kúpiť nehnuteľnosti  zaplatil v deň podpisu tejto zmluvy finančnú sumu<input  name="t37"  type="text">
                                                 €, (slovom: <input name="t38"  type="text"> EUR),
                                                 <select name="t39" id="" style="width: 50%">
                                                     <option value="">Select</option>
                                                     <option value="v hotovosti">v hotovosti</option>
                                                     <option value="prevodom na účet č. IBAN: SK83 7500 0000 0040 2960 0876 ">prevodom na účet č. IBAN: SK83 7500 0000 0040 2960 0876 </option>
                                                 </select>
                                                 pre sprostredkovateľa v zmysle §50 Občianskeho zákonníka dohodou medzi Sprotstredkovateľom a Záujemcom pre rezerváciu nehnuteľností vo svoj prospech, ktorá bude započítaná do kúpnej ceny.

                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 6
                                             </td>
                                             <td style="width: 95%;">
                                                 Záujemca o kúpu (budúci kupujúci) ako prejav svojej vážnej vôle kúpiť nehnuteľnosti  zaplatili v deň podpisu tejto zmluvy finančnú sumu <input name="t40"  type="text"> €, (slovom: <input name="t41"  type="text"> EUR),  v hotovosti / prevodom na účet č. IBAN: SK<input name="t42"  type="text"> pre predávajúcich v zmysle §50 Občianskeho zákonníka dohodou medzi Predávajúcimi a Záujemcom pre rezerváciu nehnuteľností vo svoj prospech, ktorá bude taktiež započítaná do kúpnej ceny.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 7
                                             </td>
                                             <td style="width: 95%;">
                                                 Budúci predávajúci vyhlasujú, ako vlastníci, že so zložením zálohy Záujemcom  súhlasia, a  sú z tejto zmluvnej dohody oprávnenými osobami od chvíle podpisu tejto zmluvy. Prvá časť zálohy budúcého kupujúcého je časťou kúpnej ceny, bude vysporiadaná medzi Sprostredkovateľom a Budúcimi predávajúcimi formou vystavenej faktúry za poskytnuté  služby (odmena sprostredkovateľa) a bude započítaná  budúcim  predávajúcim do Kúpnej ceny.
                                             </td>
                                         </tr>
                                     </table>
                                     Článok  III. Práva a povinnosti zmluvných strán
                                     <table>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 1
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany sa zaväzujú k vzájomnej súčinnosti, potrebnej k plneniu záväzkov, podmienok a lehôt z tejto Zmluvy vyplývajúcich a vedúcich ku riadnemu a včasnému uzatvoreniu kúpnej zmluvy.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 2
                                             </td>
                                             <td style="width: 95%;">
                                                 Z dôvodu rezervovania nehnuteľností, ako výsledku sprostredkovateľskej činnosti sprostredkovateľa pre Budúcich predávajúcich a splnenia príkazu Záujemcu sa zaväzujú zmluvné strany k tomu, že Sprostredkovateľ ani Budúci predávajúci nie sú oprávnení po dobu účinnosti tejto Zmluvy sprostredkovať predaj a kúpu týchto nehnuteľností uvedených v Čl. I inému záujemcovi, ani uzatvoriť kúpnu zmluvu mimo sprostredkovateľa.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 3
                                             </td>
                                             <td style="width: 95%;">
                                                 Budúci predávajúci vyhlasujú, že Nehnuteľnosti
                                                 <select name="t43" id="">
                                                     <option value="">Select</option>
                                                     <option value="nie sú zaťažené žiadnou ťarchou">nie sú zaťažené žiadnou ťarchou</option>
                                                     <option value="sú zaťažené s jednou ťarchou, ktorá bude vysporiadaná formou vyčíslenia">sú zaťažené s jednou ťarchou, ktorá bude vysporiadaná formou vyčíslenia</option>
                                                     <option value="sú zaťažené s ťarchou a to">sú zaťažené s ťarchou a to</option>
                                                 </select>:<input name="t44" type="text">Pokiaľ by existovali iné budú vysporiadané  pred uzatvorením kúpnej zmluvy.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 4
                                             </td>
                                             <td style="width: 95%;">
                                                 V prípade, že vlastnícke právo nebude možné previesť na Záujemcu (budúcého kupujúcého) pre neodstrániteľné prekážky na strane budúcich predávajúcich, je Záujemca oprávnený od tejto zmluvy odstúpiť. Odstúpením zmluva zaniká ku dňu doručenia odstúpenia druhej zmluvnej strane. V takom prípade odstúpenia od zmluvy je Sprostredkovateľ a Budúci predávajúci povinný vrátiť Záujemcovi finančnú zálohu v plnej výške do 3 dní od doručenia odstúpenia.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 5
                                             </td>
                                             <td style="width: 95%;">
                                                 Budúci predávajúci berú na vedomie, že zložením zálohy na kúpnu cenu nastalo plnenie zo strany Záujemcu ako zálohy na kúpnu cenu a od zmluvy nemôžu odstúpiť zo subjektívnych dôvodov počas trvania tejto zmluvy a zaväzujú sa uzatvoriť zmluvu o prevode.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 6
                                             </td>
                                             <td style="width: 95%;">
                                                 Sprostredkovateľ sa zaväzuje pripraviť všetky potrebné listiny a právne dokumenty k prevodu vlastníckych práv k nehnuteľnosti  vo vlastníctve predávajúcich do vlastníctva záujemcu, pričom zodpovedá za správnosť a úplnosť zmlúv ako aj za úspešné dokončenie prevodu vlastníctva, pričom nezodpovedá za správnosť a úplnosť listín, ktoré budú poskytnuté sprostredkovateľovi zo strany budúcich  predávajúcich, musí však vyvinúť úsilie pre úspešné dokončenie prevodu vlastníctva.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 7
                                             </td>
                                             <td style="width: 95%;">
                                                 Sprostredkovateľ sa zaväzuje poskytnúť právny servis, a to poradenstvo, pomoc pri výmaze tiarch z listu vlastníctva, ak existujú a vypracovanie kúpnych zmlúv, uhradiť poplatok 66 € za vklad do katastra nehnuteľností.
                                             </td>
                                         </tr>
                                     </table>
                                     Článok  IV.   Doba trvania zmluvy :
                                     <table>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 1
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany budúci predávajúci a záujemca ako kupujúci sú touto zmluvou voči Sprostredkovateľovi viazaní na dobu určitú, do doby určenej v bode 2. , t.j. do doby povinnosti uzatvorenia kúpnej zmluvy.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 2
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany budúci predávajúci a záujemcovia - kupujúci uzatvárajú túto zmluvu s tým, že do <input name="t45" type="text"> sa zaväzujú uzatvoriť kúpnu zmluvu (zmluvu o prevode vlastníckeho práva), a to aj bez výzvy ktorejkoľvek zmluvnej strany. Ak by došlo k nečinnosti zmluvných strán kúpnej zmluvy je povinná ktorákoľvek zmluvná strana vyzvať účastníka na podpis kúpnej zmluvy.
                                             </td>
                                         </tr>
                                     </table>
                                     Článok  V. <br>
                                     Záverečné ustanovenia :
                                     <table>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 1
                                             </td>
                                             <td style="width: 95%;">
                                                 Predmet tejto dohody a úprava práv a povinností zmluvných strán v súvislosti so sprostredkovaním prevodu vlastníckeho práva k nehnuteľnostiam uvedeným v tejto zmluve z vlastníctva  predávajúcich, vrátane zloženia finančnej zálohy na kúpnu cenu zo strany záujemcu  sprostredkovateľovi a budúcim predávajúcim na účely rezervácie nehnuteľností po dohodnutú dobu, sa považuje za zmluvu o budúcej kúpnej zmluve v zmysle § 50 Občianskeho zákonníka, teda do uzavretia kúpnej zmluvy medzi záujemcom a budúcimi predávajúcimi.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 2
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany budúci predávajúci a záujemca vyhlasujú, že ako spotrebitelia boli pri podpise prvej zmluvy poučení podľa zákona č. 250/2007 Z.z. a 102/2014 Z.z. zo strany Sprostredkovateľa.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 3
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany sa dohodli, že vzniknuté spory budú riešiť predovšetkým dohodou o mediácii v zmysle zákona 420/2004 Z.z., prípadne v konaní pred všeobecným súdom v SR.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 4
                                             </td>
                                             <td style="width: 95%;">
                                                 V prípade, ak Budúci predávajúci odstúpia od tejto zmluvy alebo neuzatvoria v lehote tu uvedenej Kúpnu zmluvu, prináleží Sprostredkovateľovi od Budúcich predávajúcich náhrada vo výške <input name="t46" type="text">,- € ( slovom: <input name="t47" type="text"> eur). Táto náhrada bude splatná 14 dní po vystavení faktúry Sprostredkovateľom.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 5
                                             </td>
                                             <td style="width: 95%;">
                                                 V prípade, ak Budúci kupujúci odstúpi od tejto zmluvy alebo neuzatvori Kúpnu zmluvu v lehote uvedenej v tejto zmluve,  prináleží Sprostredkovateľovi od Budúceho kupujúceho  náhrada vo výške <input type="text">,- € ( slovom: <input type="text"> eur).
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 6
                                             </td>
                                             <td style="width: 95%;">
                                                 Sprostredkovateľ je oprávnený započítať uvedenú sumu v bode 5 tohto článku so zloženou  zálohou po zaslaní faktúry Budúcemu kupujúcemu.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 7
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany Budúci predávajúci a Záujemca sa medzi sebou dohodli, že v prípade, ak porušia svoju povinnosť uvedenú v článku IV. bod 2,  a to ktorýkoľvek z účastníkov (Budúci predávajúci, Budúci kupujúci) tým, že
                                                 <br>
                                                 <span class="pr-3">a)</span>	odmietne jedna strana uzatvoriť – podpísať kúpnu zmluvu, na ktorej podpis a tým prevod vlastníckeho práva k nehnuteľnostiam  sa touto zmluvou v lehote tu uvedenej zaviazal;
                                                 <br>
                                                 <span class="pr-3">b)</span>	ak  Budúci predávajúci úmyselne zmaria možnosť previesť vlastnícke právo na Budúceho kupujúceho tým, že nehnuteľnosti zaťažia nájomnými pomermi, nepravdivo uvedú, alebo zatajia existujúce súdne, alebo exekučné konania, úvery a pôžičky po lehote splatnosti,
                                                 <br>
                                                 <span class="pr-3">c)</span>	ak Budúci predávajúci počas trvania tejto zmluvy uzatvoria s inými osobami zmluvu o budúcej kúpnej zmluve, kúpnu zmluvu, záložnú zmluvu k nehnuteľnostiam, ktoré sú predmetom tejto zmluvy a nehnuteľnosti nebude možné previesť na Budúceho kupujúceho;
                                                 <br>
                                                 <span class="pr-3">d)</span>	ak Budúci kupujúci odmietne podpísať kúpnu zmluvu z dôvodu, že nezískal finančné prostriedky na vyplatenie kúpnej ceny,
                                                 <br>
                                                 <span class="pr-3">e)</span>	ak Budúci kupujúci ani po výzve Budúcich predávajúcich na uzatvorenie Kúpnej zmluvy v náhradnej lehote 14 dní  nepristúpi k podpisu Kúpnej zmluvy,
                                                 je povinná zmluvná strana, ktorá porušila niektorú tu uvedenú povinnosť zaplatiť druhej zmluvnej strane Zmluvnú pokutu vo výške <input name="t48" type="text">,- € (slovom <input name="t49" type="text"> EUR). Uvedenou zmluvnou pokutou je zabezpečená povinnosť uzatvoriť Kúpnu zmluvu, a zmluvnou pokutou sú zabezpečené pre prípad  neuzatvorenia Kúpnej zmluvy zo strany zmluvných strán pre subjektívne dôvody na ich strane uvedené v bode a) až e).  Zmluvná pokuta je splatná do 14 dní, od doručenia výzvy na jej úhradu druhou zmluvnou stranou. V prípade, ak bude Záujemca povinný zaplatiť vyššie uvedenú zmluvnú pokutu v zmysle tohto bodu, bude táto započítaná so zloženou časťou kúpnej ceny uvedenou v bode 7. čl. II. tejto zmluvy.

                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 8
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany sa dohodli, že všetky právne úkony druhému účastníkovi budú zasielať formou elektronickej pošty, alebo doporučeným listom na adresy uvedené v Zmluve. Zásielka sa považuje za doručenú aj v prípade jej odmietnutia, neprevzatia s účinkami doručenia okamihom jej vrátenia späť odosielateľovi. V prípade, že dôjde k zmene adresy,  Zmluvné strany sú povinné novú adresu oznámiť druhému účastníkovi Zmluvy, ak Zmluvnú adresu neoznámi, považuje sa za adresu  doručovania adresa v záhlaví Zmluvy.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 9
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany vyhlasujú, že zmluvné podmienky dojednané individuálne, ktoré sa týkajú hlavného predmetu plnenia Sprostredkovateľa  a primeranosti ceny, sú vyjadrené určito, jasne a zrozumiteľne.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 10
                                             </td>
                                             <td style="width: 95%;">
                                                 Zmluvné strany vyhlasujú, že zmluva bola spísaná podľa ich skutočnej a slobodnej vôle, zmluvné strany mali možnosť zoznámiť sa vopred so zmluvou a zmluvnými podmienkami, tieto si prečítali, s jej obsahom súhlasia, čo potvrdzujú vlastnoručnými podpismi. Zmluva je spísaná v <input name="t50" type="text"> vyhotoveniach, pričom každá zo zmluvných strán obdržala jedno vyhotovenie pri podpise.
                                             </td>
                                         </tr>
                                         <tr>
                                             <td style="width: 5%; vertical-align: top;">
                                                 11
                                             </td>
                                             <td style="width: 95%;">
                                                 Budúci predávajúci a Záujemca súčasne svojim podpisom dobrovoľne poskytujeme v zmysle zák. č. 122/2013 Z. z. o ochrane osobných údajov súhlas sprostredkovateľovi ako je v záhlaví Zmluvy uvedený pre prevádzkovateľa RK  k získaniu údajov, vytvoreniu fotokópií dokladov obsahujúcich  naše identifikačné údaje (OP, pas, nadobúdací titul nehnuteľnosti, atď.) k spracovaniu osobných údajov v informačnom systéme v rozsahu: meno a priezvisko, titul, rodné číslo, dátum narodenia, bydlisko, prípadne číslo OP, rodinný stav, štátna príslušnosť. Uvedené osobné údaje poskytujeme sprostredkovateľovi a súhlasíme so spracovaním údajov pre vypracovanie zmluvy o prevode vlastníctva a právnych služieb RK, ktorú zabezpečuje advokát, na dobu neurčitú za účelom sprostredkovania predaja a kúpy hore uvedených nehnuteľností až do odvolania tohto súhlasu. Vyhlasujeme, že sme boli poučení o ochrane osobných údajov a právach s tým spojených sprostredkovateľom, ktorý sa preukázal dokladom totožnosti a Poverením na overenie údajov.
                                             </td>
                                         </tr>
                                     </table>
                                     <br>
                                     <br>
                                     <div class="text-center"><span>V Dunajskej Strede, dňa  <input name="t51" type="text"> (nepovinné)</span></div>
                                     <br>
                                     <br>
                                     <div class="row">
                                         <div class="col-md-6 text-center">
                                             --------------------------- <br>
                                             za Sprostredkovateľa

                                         </div>
                                         <div class="col-md-6 text-center">
                                             --------------------------- <br>
                                             Budúci predávajúci
                                         </div>
                                         <div class="col-md-6 text-center">
                                             <br><br><br>
                                             --------------------------- <br>
                                             Záujemca budúci kupujúci

                                         </div>
                                         <div class="col-md-6 text-center">
                                             <br><br><br>
                                             --------------------------- <br>
                                             Budúci predávajúci
                                         </div>
                                     </div>
                                     <div class="text-right pt-3">
                                         <button class="btn btn-primary" type="submit">PDF Download</button>
                                     </div>
                                 </div>
                             </div>
                         </form>

                     </div>
                 </div>
             </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
